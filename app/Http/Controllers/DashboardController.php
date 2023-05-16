<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function dashboard()
{
    $jumlah_post = Post::count();
    $posts = Post::whereDate('created_at', Carbon::today())->get();

    return view('admin.dashboard', compact('jumlah_post', 'posts'));
}
}
