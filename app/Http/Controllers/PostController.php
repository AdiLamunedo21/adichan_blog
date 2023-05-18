<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\file;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('admin.post.index', compact('post'));
    }

    public function create()
    {
        return view('admin.post.created');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'post_title' => 'required|max:255',
            'post_subtitle' => 'required|max:255',
            'konten' => 'required',
            'sampul' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->sampul->extension();
        $request->sampul->move(public_path('upload/post/'), $imageName);

        $post = new Post;
        $post->post_title = $validatedData['post_title'];
        $post->slug = strtolower(str_replace(' ','-', $request->post_title));
        $post->post_subtitle = $validatedData['post_subtitle'];
        $post->konten = $validatedData['konten'];
        $post->sampul = $imageName;

        // set user id
        $post->id_user = Auth::id();
        $post->save();

        return redirect()->route('post.index')->with('success', 'Post berhasil ditambahkan.');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post.edit', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'post_title' => 'required|max:255',
            'post_subtitle' => 'required|max:255',
            'konten' => 'required',
            'sampul' => 'nullable|image|max:2048',
        ]);

        $post = Post::find($id);
        $post->post_title = $request->post_title;
        $post->slug = strtolower(str_replace(' ','-', $request->post_title));
        $post->post_subtitle = $request->post_subtitle;
        $post->konten = $request->konten;

        if ($request->hasFile('sampul')) {
            $image = $request->file('sampul');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = public_path('/upload/post');
            $image->move($path, $filename);
            File::delete(public_path('/upload/post/' . $post->sampul));
            $post->sampul = $filename;
        }

        $post->save();

        return redirect('/post')->with('success', 'Post berhasil diupdate');
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        Storage::delete($post->sampul);
        $post->delete();
        return redirect('/post')->with('success', 'Post berhasil dihapus');
    }
}
