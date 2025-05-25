<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/Login', [PagesController::class, 'indexView']);


Route::get('/task',function(){
    return view ('task');
});







