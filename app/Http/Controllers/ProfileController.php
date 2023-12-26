<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::all();
        return view('account', ['profile' => $profile]);

        //query builder
        //$profile = DB::table('profiles')->get();
    }

    public function add()
    {
        // $profile = Profile::where('username', $username)->first();
        // return view('account', ['profile' => $profile]);
        return view('setup');
    }

    public function store(Request $request)
    {
        // Mendapatkan user yang sedang login
        $user = Auth::user();

        // Mengecek apakah user ditemukan
        if ($user) {
            // Validasi data yang dikirimkan dari formulir (bisa ditambahkan)
            $validatedData = $request->validate([
                'fullname' => 'required|string|max:255',
                'bio' => 'required|string',
                'photos' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi jenis file foto (opsional)
            ]);

            // Menyimpan data profile baru
            $profile = new Profile();
            $profile->user_id = $user->id; // Menggunakan ID dari user yang sedang login
            $profile->fullname = $validatedData['fullname'];
            $profile->bio = $validatedData['bio'];

            // Mengelola proses upload foto (jika diperlukan)
            if ($request->hasFile('photos')) {
                $photo = $request->file('photos');
                $fileName = time() . '_' . $photo->getClientOriginalName();

                // Simpan foto ke dalam direktori 'uploads' di folder 'public'
                $destinationPath = public_path('photos');
                $photo->move($destinationPath, $fileName);

                // Menyimpan nama file foto ke dalam kolom 'photos' di tabel database
                $profile->photos = $fileName;
            }

            // Menyimpan data profile
            $profile->save();

            return redirect('/')->with('success', 'Profile berhasil disimpan!');
        }

        return redirect()->back()->with('error', 'User tidak ditemukan!');
    }
}
