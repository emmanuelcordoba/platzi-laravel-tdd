<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Tag;

Route::get('/', function () {
    return view('welcome',[ 'tags' => Tag::get()]);
});
