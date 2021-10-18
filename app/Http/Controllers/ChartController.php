<?php

namespace App\Http\Controllers;

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
            ->groupBy('created_at')->get()->pluck('post_count');
        return View('chartJs')->with('postcount', $postcounts);
    }
}
