<?php

namespace App\Http\Controllers;

class EventController extends Controller
{
    public function indeX()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('events.create');
    }

    public function contact()
    {
        return view('contact');
    }

    public function product()
    {
        return view('product');
    }
}
