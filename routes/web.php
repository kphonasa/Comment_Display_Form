<?php


//On Get
Route::get('/', 'CommentTableController@index');

//On Post
Route::post('/submit', 'CommentFormController@store');



