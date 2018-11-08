<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function loginhome(){
        return view('pages.loginhome');
    }

    public function createuser(){
        return view('pages.createuser');
    }

    public function pickcampain(){
        return view('pages.pickcampain');
    }

    public function services(){
        return view('pages.services');
    }
    
    public function character(){
        return view('pages.character');
    }

    public function contact(){
        return view('pages.contact');
    }
}