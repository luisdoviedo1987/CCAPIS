<?php
/**
 * Created by IntelliJ IDEA.
 * User: chanto
 * Date: 9/6/18
 * Time: 14:02
 */

return [
    'debug' => true,
    'appName'  => 'Autoapis Grupo Montecristo',
    'author'  => 'Ulemus',
    'version-js' => 'version1.0',
    'tempRoute' => '/var/www/html/api/autowolkvox/temp/',
    'db' => [
        'processing'  => [
            "db_host" => 'localhost',
            "db_user" => 'remotefe' ,
            "db_pass" => 'f3-p0s-r3m0t3-Bd*!' ,
            "db_name" => 'callbd'
        ],
        'mysql' => [
            'db-server' => 'mysqli',
            'db-host'   => 'localhost',
            'db-user'   => "remotefe",
            'db-pass'   => 'f3-p0s-r3m0t3-Bd*!',
            'db-name'  => 'callbd'
        ], 'oracle' => ''
    ], "api-zh"=>[
        "url_base" => 'https://api.blueehr.com/blueehr/public',
        "facility" => 'metrolive',
        "clientId" => 'hnhuep1jvf4cpt3p479l01zqejqoh4yzx3n2akf9dqgw6xbyb6p6cvg2m3pa4mfl42qqa95v',
        "clientSecret" => 'kewzsr7imcjzyrgixi7ww3u3zwga0xtpzwmn91zmecc5790n7q71ligbd24faxyfzdw65c7d',
        "accessToken" => 'bc18590f617194c99321dd38540c4f2b9e83d625',
        
        "url_base_metropolitano" => 'https://metropolitano.blueehr.com/public',
        "public_key_metropolitano" => '90bdee00af86542583be8d946e45395aadfd2fc2',
        "private_key_metropolitano" => 'b03471eebef1693396bf2bcda5d38d49696a275a',
        "prefix_metropolitano" => 'PRE',
        "user_type_metropolitano" => 'user',
        "device_id_metropolitano" => 'PROD_REST_API'
    ],
    'googleMaps' =>[
        'keyMapAPI'=> 'AIzaSyD2_rAzQNRYJKVDWSc7ikJmhBVt1fDp1gU'
    ]
];