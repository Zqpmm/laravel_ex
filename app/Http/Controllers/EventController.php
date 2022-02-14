<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    
    public function index(){

        $noticias = Event::all();

        return view('home',['noticias' => $noticias]); 

    }

    public function noticias($id){

        $noticias = Event::all();
        $registro = Event::where('id', $id)->first()->toArray();

        return view('noticias',['noticias' => $noticias, 'registro' => $registro]); 

    }

}
