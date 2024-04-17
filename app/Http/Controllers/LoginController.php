<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dashboard;

class LoginController extends Controller
{
    function index()
    {
        $dashboard = dashboard::first();
        $username = $dashboard->username;
        $password = $dashboard->password;

        return view("login")->with('username', $username)->with('password', $password);
    }
}
