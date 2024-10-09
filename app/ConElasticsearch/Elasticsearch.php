<?php

namespace App\ConElasticsearch;

class Elasticsearch extends Connection
{
    public static function run(string $url, string|array $query)
    {

        $class = new Elasticsearch;

        $query = json_encode($query);

        return $class->con($url, $query);

    }

}
