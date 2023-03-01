<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function comics(){
        $comics = Comic::all();

        return view('main', compact('comics'));
    }
    
    public function create(){

        return view('comics.create');
    }
    
    public function show(string $id){

        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic') );
    }

}
