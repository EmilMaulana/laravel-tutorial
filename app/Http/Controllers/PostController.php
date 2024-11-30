<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Menampilkan form untuk membuat post
    public function create()
    {
        return view('posts.create');
    }

    // Menyimpan post setelah divalidasi
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ], [
            'title.required' => 'Judul harus diisi!',
            'content.required' => 'Konten tidak boleh kosong!',
        ]);

        // Jika validasi berhasil, simpan data
        $post = new Post();
        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post berhasil dibuat!');
    }

}

