<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserLogin ()
    {
        return view('login');
    }

    public function UserRegis()
    {
        return view('registration');
    }



    }
