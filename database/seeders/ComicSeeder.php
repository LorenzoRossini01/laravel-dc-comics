<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;



class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $comics=config("comics");

        foreach($comics as $currComic){
            $comic=new Comic();
            $comic->title=$currComic['title'];
            $comic->description=$currComic['description'];
            $comic->image=$currComic['thumb'];
            $comic->price=$currComic['price'];
            $comic->series=$currComic['series'];
            $comic->sale_date=$currComic['sale_date'];
            $comic->save();
        }
        // for($i=0;$i<50;$i++){

        //     $comic=new Comic();
        //     $comic->title=$faker->userName();
        //     $comic->description=$faker->paragraph();
        //     $comic->image=$faker->imageUrl(640, 480, 'comic', true);
        //     $comic->price=$faker->randomFloat(2,10,50);
        //     $comic->series=$faker->userName();
        //     $comic->sale_date=$faker->date();
        //     $comic->save();
        // }
        //
    }
}
