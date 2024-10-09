<?php

namespace App\ConElasticsearch;

abstract class Connection
{

    protected $header = ["Content-Type: application/json"];


    protected function con(string $url, string $query)
    {

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, "http://localhost:9200/".$url);

        curl_setopt($curl,CURLOPT_HTTPHEADER, $this->header);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $query);

        $res = curl_exec($curl);

        curl_close($curl);

        return $res;

    }

}
