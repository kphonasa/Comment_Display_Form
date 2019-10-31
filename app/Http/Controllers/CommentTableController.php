<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class CommentTableController extends Controller
{
    public function index()
        {
            $comments = DB::table('comments')->select('authorName','authorComment')
                ->orderBy('created_at', 'desc')->take(5)->get();

            return view('welcome')->with('comments', $comments);
        }
}
