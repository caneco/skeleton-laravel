<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('mail', fn() => new App\Mail\Example);
