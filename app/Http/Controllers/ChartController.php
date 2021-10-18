<?php

namespace App\Http\Controllers;

use Hekmatinasser\Verta\Verta;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index()
    {
        $postcounts = DB::table('posts')->where('created_at', '>', Carbon::now()->subDays('7'))
            ->select(DB::raw('count(id) as post_count,created_at'))
            ->orderBy('created_at', 'desc')
            ->groupBy('created_at')->get()->pluck('post_count', 'created_at');
        $shamsi = [];
        foreach ($postcounts as $created_at => $count) {
            $jalali = new Verta($created_at);
            $jalali = $jalali->format('Y-n-j');
            $shamsi[$jalali] = $count;
        }

        return View('chartJs')->with('postcount', $shamsi);
    }
    //last posts for last user
    public function showLastUserPost()
    {
        $lastuser = User::orderBy('id', 'desc')->first();
        $posts = $lastuser->posts()->limit(5)->get();
        return View('lastuser')->with('posts', $posts);
    }
    public function showPost()
    {
        $posts = Post::paginate(7);
        return View('posts')->with('posts', $posts);
    }
    public function showUser()
    {
        $users= User::all();
        return View('user')->with('users', $users);
    }
}
