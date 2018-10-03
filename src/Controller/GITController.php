<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


use GuzzleHttp\Client;

class GITController extends AbstractController
{
    /**
     * @Route("/g/i/t", name="g_i_t")
     */
    public function index()
    {
             
        $client = new Client();
        $res = $client->request('GET', 'https://api.github.com/repos/Pylouface/TLD_Project/commits', [
            'auth' => ['martin0charley@gmail.com', 'Ddioat1sim']
        ]);

        //echo $res->getStatusCode();
        //echo $res->getHeaders('content-type');
        $retour= $res->getBody();

        // Send an asynchronous request.
        /*$request = new \GuzzleHttp\Psr7\Request('GET', 'https://api.github.com/repos/Pylouface/TLD_Project/commits');
        $promise = $client->sendAsync($request)->then(function ($response) {
            $retour = $response->getBody();
        });
        $promise->wait();*/

            
         return new Response(
            '<html><body> '.$retour.'</body></html>'
        );
    }
}
