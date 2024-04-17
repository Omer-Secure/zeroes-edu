<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class Python_CourseController extends Controller
{
    function index()
    {
        $course = course::where('course_id', 5)->first();

        return view("python-course", compact('course'));
    }
}
