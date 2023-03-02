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
    public function store(Request $request){
        $data = $request->all();

        $new_comic= new Comic();
        $new_comic->fill($data);
        $new_comic->save();

        return to_route('comics' , compact('new_comic'));
    }
    public function edit(Comic $comic){

     return view('comics.edit' , compact('comic'));
    }
    public function update(Request $request , Comic $comic){
        $data = $request->all();
        $comic->update($data);
        return to_route('comics', compact('comic'));
    }
}
