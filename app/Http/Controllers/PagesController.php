<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PagesController extends Controller
{
    public function index()
    {   
        $movies = Movie::all();
        $data = [
            'movies' => $movies
        ];
        return view('index', $data);
    }
}
