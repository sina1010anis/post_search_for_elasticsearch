<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\PostFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // PostFactory::new()->count(2000)->create();

        $file = json_decode(file_get_contents(public_path('posts.json')), true);

        foreach ($file as $item) {

            print_r(Http::get('http://127.0.0.1:9200/products/_search', [
                'query' => [
                    "match_all" => []
                ]
                ]));

                exit;


            // Http::put('http://127.0.0.1:9200/products/_doc/'.$item['id'], [

            //     'title' => $item['title'],

            //     'descrtion' => $item['descrtion'],

            //     'download' => $item['download'],

            //     'view' => $item['view'],

            //     'keyword' => $item['keyword'],

            //     'created_at' => $item['created_at']

            // ]);

        }



    }
}
