<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function comics(){
        //$comics = Comic::select('title')->get();

        return view('main');
    }
}
