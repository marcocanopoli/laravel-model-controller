<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class HomeController extends Controller {
    
    public function index() {
        $allMovies = Movies::all();
        // return view('home', compact('movies'));
        return view('home', compact('allMovies'));
    }
}
