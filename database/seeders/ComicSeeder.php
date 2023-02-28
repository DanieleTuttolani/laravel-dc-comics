<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $comics= config('comic');
        
        foreach($comics as $comic){
            $comic_alt = new Comic();
            $comic_alt->title= $comic['title'];
            $comic_alt->description =$comic['description'];
            $comic_alt->thumb = $comic['thumb'];
            $comic_alt->price = $comic['price'];
            $comic_alt->series = $comic['series'];
            $comic_alt->sale_date = $comic['sale_date'];
            $comic_alt->type = $comic['type'];
             $comic_alt->artists = implode(", " ,$comic['artists']);
             $comic_alt->writers = implode(", " ,$comic['writers']);
            
            $comic_alt->save();
        }
    }
}
