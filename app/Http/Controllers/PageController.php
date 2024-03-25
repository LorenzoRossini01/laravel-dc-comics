<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    // #home page 
    public function homepage(){
          return view('pages.homepage');

    }

    // #characters page 
    public function characters(){
          return view('pages.characters');

    }

    // #comics page 
    public function comics(){
        $comics=config('comics');
        return view('pages.comics', compact('comics'));
    }

    // #comic details page 
    public function comicDetails($index, $title){
        $comics=config('comics');

        if(!array_key_exists($index,$comics))abort(404,'chiave non trovata');

        $comic=$comics[$index];
        $title=$comic['title'];
        return view('pages.comicDetails', compact('comic'));
    }

    // #movies page 

    public function movies(){
        return view('pages.movies');

    }

    // #tv page 

    public function tv(){
         return view('pages.tv');

    }

    // #games page 

    public function games(){
         return view('pages.games');

    }

    // #collectibles page 

    public function collectibles(){
        return view('pages.collectibles');

    }

    // #videos page 

    public function videos(){
        return view('pages.videos');

    }

    // #fans page 

    public function fans(){
         return view('pages.fans');

    }

    // #news page 

    public function news(){
         return view('pages.news');

    }

}
