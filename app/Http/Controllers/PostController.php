<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        // $profile = Profile::where('username', $username)->first();
        // return view('account', ['profile' => $profile]);
        return view('create');
    }

    public function store(Request $request)
    {
        // Mendapatkan user yang sedang login
        $user = Auth::user();

        // Mengecek apakah user ditemukan
        if ($user) {
            // Validasi data yang dikirimkan dari formulir (bisa ditambahkan)
            $validatedData = $request->validate([
                'images' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'caption' => 'required|string', // Validasi jenis file foto (opsional)
            ]);

            // Menyimpan data profile baru
            $post = new Post();
            $post->user_id = $user->id; // Menggunakan ID dari user yang sedang login
            $post->caption = $validatedData['caption'];

            // Mengelola proses upload foto (jika diperlukan)
            if ($request->hasFile('images')) {
                $images = $request->file('images');
                $fileName = time() . '_' . $images->getClientOriginalName();

                // Simpan foto ke dalam direktori 'uploads' di folder 'public'
                $destinationPath = public_path('images');
                $images->move($destinationPath, $fileName);

                // Menyimpan nama file foto ke dalam kolom 'photos' di tabel database
                $post->images = $fileName;
            }

            // Menyimpan data profile
            $post->save();

            return redirect('/')->with('success', 'Post berhasil disimpan!');
        }

        return redirect()->back()->with('error', 'User tidak ditemukan!');
    }
}
