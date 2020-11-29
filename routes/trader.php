<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('trader')->user();

    //dd($users);

    return view('trader.home');
})->name('home');

