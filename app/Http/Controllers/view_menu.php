<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view_menu extends Controller
{
    public function MainMenu()
    {
        return view("landing");
    }
    public function About()
    {
        return view("about");
    }
}
