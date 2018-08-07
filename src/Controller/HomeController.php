<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function helloWorld()
    {
        $html = "<html><body>Howdy, world!</body></html>"
        $response = new Response($html);
        return $response;
    }
}
