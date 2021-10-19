<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreatePostController extends Controller
{
    public function index()
    {
        return View('createPost');
    }

    public function create(Request $request)
    {
        $title = $request->title;
        Post::create([
            'title' => $title,
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);
        return redirect()->back();
    }
}
