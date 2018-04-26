<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request; //Uso de interfaces PSR-7 para solicitudes, respuestas y transmisiones.

$client = new GuzzleHttp\Client(['base_uri' => 'http://api.openweathermap.org/data/2.5/']); // Crea un cliente y proporciona una URL base

$response = $client->request('GET', 'forecast?zip=72000,mx&appid=1af7288168a8759d536b862ca737da54');// Envio de solicitud a openweathermap

header("Content-type: application/json");// Da formato a la respuesta optenida

echo $response -> getBody();//salida del Json de la solicitud