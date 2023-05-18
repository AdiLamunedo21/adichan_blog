<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class ArtikelController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $namaUser = User::find($post->id_user)->name;

        return view('artikel.show', compact('post', 'namaUser'));
    }
}
