<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ResetPasswordController extends Controller
{
    public function forgot()
    {
        return view('users.forgot-password');
    }

}
