<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Teacher;

class LoginController extends Controller
{
    public function login(){
        return view('Admin.login');
    }

}
