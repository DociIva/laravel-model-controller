<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// COLLEGAMNETO AL DATABASE
use App\Movie;
class PageController extends Controller
{
    /**
     * HOMEPAGE
     */
    public function index() {
        
        // DA FARE CHIAMATA AL DATABASE
        
        $movies = Movie::all();
        dump($movies);
        return view('home', compact('movies'));
    }

   
}
