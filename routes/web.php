<?php


//On Get
Route::get('/', 'CommentTableController@index');

Route::post('/submit', 'CommentFormController@store');



