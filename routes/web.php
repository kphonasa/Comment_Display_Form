<?php

use App\comment;
use Illuminate\Http\Request;
use App\author;

//On Get
Route::get('/', function () {
    $comments = comment::orderBy('created_at', 'asc')->get();

    return view('welcome', [
        'welcome' => $comments
    ]);
});

//On Post
Route::post('/', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'authorComment' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $comments = new comment();
    $comments->authorName = $request->authorName;
    $comments->authorEmail = $request->authorEmail;
    $comments->authorComment = $request->authorComment;
    $comments->save();

    return redirect('/');
});



