<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Symfony\Component\HttpFoundation\Request;

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

    public function store(Request $request)
    {
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->image->getClientOriginalName().strtotime("now")).".".$extension;
            $requestImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }
        $event->save();
        return redirect('/')->with('msg', 'Evento criado Com sucesso');
    }
}
