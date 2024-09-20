<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\car;
use App\Models\User;
class carcontroller extends Controller
{
    //
    public function index(){
        // $users = User::all();
        $cars = car::all();
        $users = User::all();
        return view('car', compact('cars', 'users'));
     }
}
