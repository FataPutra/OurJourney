<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Mendapatkan user yang sedang login
        $user = Auth::user();
        $users = User::with('profile', 'posts')->get();

        // Mendapatkan profile dari user yang sedang login melalui relasi
        $profile = null; // Inisialisasi $profile dengan null

        if ($user) {
            $profile = $user->profile; // Menggunakan relasi yang telah didefinisikan di model User

            // Alternatif: Menggunakan Query Builder untuk mendapatkan profile
            // $profile = DB::table('profiles')->where('user_id', $user->id)->first();
        }

        // Cek apakah profile ditemukan atau tidak
        if ($profile) {
            return view('home', ['profile' => $profile, 'users' => $users]);
        } else {
            // Jika profile tidak ditemukan, bisa berikan nilai default atau pesan yang sesuai
            return view('login', ['profile' => 'Profile tidak ditemukan']);
        }
    }
}
