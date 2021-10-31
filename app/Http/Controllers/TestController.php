<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class TestController extends Controller
{
    function index() {
        return "Hello World";
    }

    function getMovies() {
        return ['data' => Movie::all()];
    }
}
