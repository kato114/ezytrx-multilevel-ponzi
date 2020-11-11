<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
    }
    
    public function index()
    {
        return view('home.index');
    }

    public function login()
    {
        return view('home.login');   
    }

    public function register()
    {
        return view('home.register');   
    }
}

