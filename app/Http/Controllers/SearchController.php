<?php

namespace App\Http\Controllers;

use App\ConElasticsearch\Elasticsearch;
use Elastic\Elasticsearch\ClientBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{

    public function searchPost(Request $request)
    {

        $query = [
            'query' => [
                'match' => [
                    'descrtion' => $request->search,
                ]
            ],
            'highlight'=>[
                "fields"=>[
                    "descrtion"=> new \stdClass()
                ],
                'pre_tags' => "<i>",
                'post_tags' => "</i>",
            ],
            'aggs' => [
                'sum_views' => [
                    "sum" => [
                        'field' => "view"
                    ]
                ]
            ]
        ];

        return json_decode(Elasticsearch::run('posts/_search', $query));

    }

    public function searchTitlePost(Request $request)
    {

        if ($request->search != null || $request->search != "") {
            $query = [
                'query' => [
                    'match_phrase' => [
                        'keyword' => [
                            "query" => $request->search,
                        ]
                    ]
                ]
            ];

            return json_decode(Elasticsearch::run('posts/_search', $query));
        }



    }

}
