<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all(); //pega todos os eventos do model Event
        return view('welcome',['events' => $events]); //passa a variavel events para a view welcome para manipulação
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request-> city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/');

    }
}
