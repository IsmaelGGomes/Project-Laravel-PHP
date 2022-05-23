<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index(){

        $events = Event::all();

        return view('index',['events' => $events]);
    }

    public function create(){
        return view('events.create');

    } 

    public function store(Request $request){
        //criar um objeto criadno uma variavel
        //Distanciar a classe do model 
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/registro')->with('msg', 'Evento criado com sucesso!');

    }
}
