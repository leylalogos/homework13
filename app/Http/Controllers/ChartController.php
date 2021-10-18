<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ChartController extends Controller
{
    public function index()
    {
        $posts = Post::where('created_at', '>', Carbon::now()->subDays('7'))->get();
        return view('chartJs')->with('posts', $posts);
    }
}
