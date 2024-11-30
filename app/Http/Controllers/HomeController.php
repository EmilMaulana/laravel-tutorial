<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Emil Maulana';
        $age = 25;
        $job = 'Software Developer';
        $hobbies = ['Programming', 'Gaming', 'Reading'];

        return view('home', compact('name', 'age', 'job', 'hobbies'));
    }

}
