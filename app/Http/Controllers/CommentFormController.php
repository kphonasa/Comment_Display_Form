<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;

class CommentFormController extends Controller
{
    /*On page load get session variable*/
   public function index()
   {
       $authorEmail = session()->get('$authorEmail');
       return view('welcome')->with('$authorEmail', $authorEmail);
   }

    /*Place holder to grab all session variables*/
    public function mySession(){
        return session()->all();
   }

   /*Validate and store comments. Set authorEmail session and set success message*/
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

        $authorEmail =  $comments->authorEmail = request('authorEmail');
        session(['authorEmail' => $authorEmail]);

        $comments->save();

       return redirect('/')->with('message','Your roast was successfully added!');
    }
}
