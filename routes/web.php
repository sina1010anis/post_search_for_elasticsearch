<?php

use App\Http\Controllers\InsertDataController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('insert/elasticsearch', [InsertDataController::class, "elasticsearch"])->name("post.inseart_data");

Route::post("/search/post", [SearchController::class, "searchPost"])->name("post.search");
