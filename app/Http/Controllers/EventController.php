<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function indeX()
    {
        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function create()
    {
        return view('events.create');
    }
}
