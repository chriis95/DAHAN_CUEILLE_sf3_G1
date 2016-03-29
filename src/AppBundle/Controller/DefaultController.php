<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/hello-world")
     */
    public function indexAction()
    {
        return new Response(
            '<html><body>Hello world</body></html>'
        );
    }

    /**
     * @Route("/list")
     */
    public function listAction()
    {

    }
}
