<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Models\course;
use App\Models\developer;
use App\Models\zerodetail;

class HomeController extends Controller
{
    function index()
    {
        $courses = course::all();
        $developers = developer::all();
        $zerodetails = zerodetail::first();

        return view("home", compact('courses', 'developers', 'zerodetails'));
    }
}
/*
|--------------------------------------------------------------------------
| Omer_Secure
|--------------------------------------------------------------------------
*/
