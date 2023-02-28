<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics= config('comic');
        foreach($comics as $comic_alt){
            $comics_alt->artists = implode(", " ,$comics['artists']);
            $comic_alt = new Comic();
            foreach($comic_alt as $key => $value){
                $comic_alt->$key = $value;
            }
            $comic_alt->save();
        }
    }
}
