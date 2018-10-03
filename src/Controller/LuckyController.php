<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


use GuzzleHttp\Client;

class LuckyController extends AbstractController
{
	    public function number()
    {
        $number = random_int(0, 100);

       return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
    
    
    

    
}

//var_dump(openssl_get_cert_locations());

$client = new Client();
$res = $client->request('GET', 'https://api.github.com/user', [
    'auth' => ['martin0charley@gmail.com', 'Ddioat1sim']
]);
echo $res->getStatusCode();
// "200"
//echo $res->getHeaders('content-type');
// 'application/json; charset=utf8'
echo $res->getBody();
// {"type":"User"...'

// Send an asynchronous request.
$request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
$promise = $client->sendAsync($request)->then(function ($response) {
    echo 'I completed! ' . $response->getBody();
});
$promise->wait();

