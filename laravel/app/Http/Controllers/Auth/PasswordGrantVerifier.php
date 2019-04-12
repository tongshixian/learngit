<?php
/**
 * Created by PhpStorm.
 * User: 童士献
 * Date: 2019/2/25
 * Time: 14:27
 */
namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
class PasswordGrantVerifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'email'  => $username,
            'password' => $password,
        ];
        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }
        return false;
    }
}