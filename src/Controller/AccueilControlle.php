<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of AccueilControlle
 *
 * @author Snow
 */
class AccueilControlle {
    
    /**
     * @Route("/", name="accueil")
     * @return Response
     */
    public function index () : Response{
        return new Response('Hello world !');
    }
}
