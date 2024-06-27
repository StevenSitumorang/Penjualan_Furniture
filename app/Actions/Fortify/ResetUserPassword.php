<?php

namespace App\Actions\Fortify;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\ResetsUserPasswords;
use App\Actions\Fortify\PasswordValidationRules; // Pastikan trait diimpor dengan benar

class ResetUserPassword implements ResetsUserPasswords
{
    use PasswordValidationRules;

    /**
     * Validate and reset the user's forgotten password.
     *
     * @param  \Illuminate\Foundation\Auth\User  $user
     * @param  array<string, string>  $input
     * @return void
     */
    public function reset(Authenticatable $user, array $input): void
    {
        // Validasi password baru
        Validator::make($input, [
            'password' => $this->passwordRules(),
        ])->validate();

        // Mengupdate password pengguna
        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
    }
}
