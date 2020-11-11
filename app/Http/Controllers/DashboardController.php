<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
    }
    
    public function index()
    {
        return view('dashboard.index');
    }

    public function teamStats()
    {
        return view('dashboard.teamStats');
    }

    public function personalStats()
    {
        return view('dashboard.personalStats');
    }

    public function leaderBoard()
    {
        return view('dashboard.leaderBoard');
    }

    public function matrix()
    {
        return view('dashboard.matrix');
    }

    public function lostEarning()
    {
        return view('dashboard.lostEarning');
    }
}

