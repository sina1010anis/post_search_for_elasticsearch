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

        // $param = '{"query" : {"match" : {"keyword" : "'.$request->search.'" }}';

        $param = [
            'query' => [
                'match' => [
                    'keyword' => $request->search
                ]
            ],
            'highlight'=>[
                "fields"=>[
                    "keyword"=> new \stdClass()
                ],
                'pre_tags' => "<i>",
                'post_tags' => "</i>",
            ]
        ];

        return json_decode(Elasticsearch::run('posts/_search', $param));

    }

}
