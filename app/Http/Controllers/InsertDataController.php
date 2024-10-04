<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InsertDataController extends Controller
{
    public function elasticsearch ()
    {

        $file = json_decode(file_get_contents(public_path('posts.json')), true);

        // return Http::put("http://127.0.0.1:9200/posts/");

        foreach ($file as $item) {

            Http::put('http://127.0.0.1:9200/posts/_doc/'.$item['id'], [

                'title' => $item['title'],

                'descrtion' => $item['descrtion'],

                'download' => $item['download'],

                'view' => $item['view'],

                'keyword' => $item['keyword'],

                'created_at' => $item['created_at']

            ]);

        }


    }
}
