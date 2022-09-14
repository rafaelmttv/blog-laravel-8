<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'company' => 'Company blog8'
        ]);
    }

    public function company()
    {
        return view('company');
    }
}
