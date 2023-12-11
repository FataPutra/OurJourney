<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::all();
        return view('account', ['profile' => $profile]);
    }
}
