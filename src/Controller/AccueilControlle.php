<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of AccueilControlle
 *
 * @author Snow
 */
class AccueilControlle extends AbstractController {
    
    /**
     * @Route("/", name="accueil")
     * @return Response
     */
    public function index () : Response{
        return $this->render ("pages/accueil.html.twig");
    }
}
