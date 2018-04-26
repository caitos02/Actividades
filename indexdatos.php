<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

Route::get('/' function (){


$client = new Client([
    'base_uri' => 'https://openweathermap.org',
    'timeout'  => 2.0,
]);

$response = $client->request('GET', 'current');//https://openweathermap.org/current 


dd($response->getBody()->getContents());


//api.openweathermap.org/data/2.5/weather?zip=3521082,mx

//1af7288168a8759d536b862ca737da54 (api key)


api.openweathermap.org/data/2.5/forecast?id=524901&APPID=1111111111




});
$app->run();