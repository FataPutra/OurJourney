<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home = Profile::all();
        return view('home', ['home' => $home]);

        //query builder
        //$profile = DB::table('profiles')->get();
    }
}
