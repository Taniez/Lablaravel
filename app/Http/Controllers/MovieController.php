<?php

namespace App\Http\Controllers;
use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
       $movies = ["Deadpool & Wolverine","Detective Conan: The Million-dollar Pentagram","Alien: Romulus"];
       return view("movie",compact("movies"));
    }
}
