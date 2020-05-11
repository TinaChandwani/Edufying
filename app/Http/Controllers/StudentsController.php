<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function student()
    {
        return view('student');
    }
    public function chat()
    {
        return view('chat');
    }
}
