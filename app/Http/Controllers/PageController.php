<?php

namespace App\Http\Controllers;

use App\Models\Comic;
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
