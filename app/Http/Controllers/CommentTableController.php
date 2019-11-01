<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class CommentTableController extends Controller
{
    /*Grabs top 5 most recent comments to display in comment table*/
    public function index()
        {
            $comments = DB::table('comments')->select('authorName','authorComment')
                ->orderBy('created_at', 'desc')->take(5)->get();

            return view('welcome')->with('comments', $comments);
        }
}
