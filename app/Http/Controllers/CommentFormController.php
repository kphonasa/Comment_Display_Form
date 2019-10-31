<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;

class CommentFormController extends Controller
{
   public function index()
   {
       return view('welcome');
   }


    public function store(Request $request)
    {
       $this->validate($request, [
            'authorName' => 'required|string',
            'authorEmail' => 'required|email',
            'authorComment' => 'required',
        ]);

        $comments = new comment();

        $comments->authorName = request('authorName');
        $comments->authorEmail = request('authorEmail');
        $comments->authorComment = request('authorComment');
        $comments->save();


    /*    $comment = comment::create($request->all());
        broadcast(new comment($comment));
        return response()->json("success");*/


       return redirect('/')->with('message','Your roast was successfully added!');
    }
}
