set_time_limit(0);
date_default_timezone_set('America/Lima');
require("vendor/autoload.php");
 
$client = new GuzzleHttp\Client();
$response = $client->request('GET', "http://localhost/api/v1",[
    'exceptions' => false, // Para que no muestre Excepciones
    //'verify' => false, //si no deseas verificar certificado.
    //'verify' => './cacert.pem', //si deseas verificar certificado.
    //'auth' => array('user', 'pass'),
    'headers' => [
        'User-Agent' => 'testing/1.0',
        'Accept'     => 'application/json',
        'X-Foo'      => ['Bar', 'Baz']
    ]
]);
$response->getStatusCode(); // devuelve el Código de estado HTTP
$response->getBody(); // Devuelve el contenido de la respuesta.