<?php

use App\Http\Controllers\InsertDataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('insert/elasticsearch', [InsertDataController::class, "elasticsearch"]);
