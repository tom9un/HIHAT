<?php
require 'vendor/autoload.php';

$client = Elasticsearch\ClientBuilder::create()->build();

$params = [
    'index' => 'honeyweb2',
    'body' => [
        'mappings' => [
                        'properties' => [
                            "attackerip" => [
                            "type" => "ip"
                            ],
                            "attackerbrowser"=> [
                            "type" => "text"
                            ],
                            "source"=> [
                            "type" => "text"
                            ],
                            "value_server"=> [
                            "type" => "text"
                            ],
                            "value_get"=> [
                            "type" => "text"
                            ],
                            "value_post"=> [
                            "type" => "text"
                            ],
                            "value_cookie"=> [
                            "type" => "text"
                            ],
                            "creation"=> [
                            "type" => "date"
                            ],
                            "module"=> [
                            "type" => "keyword"
                            ],
                            "download_checked"=> [
                            "type" => "integer"
                            ]
                        ]
                    ]
                ]
            ];


$response = $client->indices()->create($params);
