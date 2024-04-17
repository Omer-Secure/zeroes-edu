<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class Linux_CourseController extends Controller
{
    function index()
    {
        $course = course::where('course_id', 1)->first();

        return view("linux-course", compact('course'));
    }
}
