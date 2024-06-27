<?php

namespace App\Actions\Fortify;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\UpdatesUserPasswords;
use App\Actions\Fortify\PasswordValidationRules; // Pastikan trait diimpor dengan benar

class UpdateUserPassword implements UpdatesUserPasswords
{
    use PasswordValidationRules;

    /**
     * Validate and update the user's password.
     *
     * @param  \Illuminate\Foundation\Auth\User  $user
     * @param  array<string, string>  $input
     * @return void
     */
    public function update(Authenticatable $user, array $input): void
    {
        // Validasi password saat ini dan password baru
        Validator::make($input, [
            'current_password' => ['required', 'string', 'current_password:web'],
            'password' => $this->passwordRules(),
        ], [
            'current_password.current_password' => __('The provided password does not match your current password.'),
        ])->validateWithBag('updatePassword');

        // Mengupdate password pengguna
        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
    }
}
