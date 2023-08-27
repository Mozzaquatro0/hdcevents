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
        $event->items = $request->items;

        //image upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")). "." . $extension;
            $request->image->move(public_path('img/events'), $imageName);
            $event->image = $imageName;

        }

        $event->save();

        return redirect('/')->with('msg','Evento criado com sucesso!');

    }

    public function show($id){
        $event = Event::findOrFail($id);

        return view('events.show',['event' => $event]);
    }
}
