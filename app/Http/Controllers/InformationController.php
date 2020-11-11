<?php

namespace App\Http\Controllers;

class InformationController extends Controller
{
    /**
     * InformationController constructor.
     */
    public function __construct()
    {
    }
    
    public function instruction()
    {
        return view('information.instruction');
    }
}

