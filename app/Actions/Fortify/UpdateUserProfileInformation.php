<?php

namespace App\Actions\Fortify;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  \Illuminate\Foundation\Auth\User  $user
     * @param  array<string, mixed>  $input
     * @return void
     */
    public function update(Authenticatable $user, array $input): void
    {
        // Validasi input pengguna
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        // Jika ada foto, perbarui foto profil pengguna
        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        // Jika email berubah dan pengguna harus memverifikasi email, perbarui profil pengguna yang telah diverifikasi
        if ($input['email'] !== $user->email && $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            // Perbarui informasi profil pengguna
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  \Illuminate\Foundation\Auth\User|\Illuminate\Contracts\Auth\MustVerifyEmail  $user
     * @param  array<string, string>  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input): void
    {
        // Perbarui informasi profil pengguna yang telah diverifikasi
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        // Kirim pemberitahuan verifikasi email
        $user->sendEmailVerificationNotification();
    }
}
