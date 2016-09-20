<?php

// Route::get('/', function () {
//   $people = ['Mike', 'Juan', 'Gill', 'Barry'];
//
//   return view('welcome', compact('people'));
// });

Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');
