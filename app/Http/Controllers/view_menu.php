<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view_menu extends Controller
{
    public function MainMenu()
    {   
        $title = "home";
        return view("landing", compact('title'));
    }
    public function About()
    {
        return view("about");
    }
}
