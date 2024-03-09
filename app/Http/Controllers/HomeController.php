<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Database\Seeders\HomeSeeder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();

        return view("home.home", compact("homes"));
    }


    

    public function store(Request $request)
    {

        // we validate  our request  with customized conditions
        request()->validate([
            "name" => "required",
            "email" => "required"
        ]);
        // we create  a row  in  our database
        // we call our model
        
        Home::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "password"=> $request->password,

        ]);

// we redirect the user to specefic page 

        return redirect()->back();

    }
}
