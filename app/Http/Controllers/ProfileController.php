<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::all();
        return view('account', ['profile' => $profile]);

        //query builder
        //$profile = DB::table('profiles')->get();
    }

    public function show($username)
    {
        $profile = Profile::where('username', $username)->first();
        return view('account', ['profile' => $profile]);
    }
}
