<?php

namespace PGLabs\KendoUIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PGLabsKendoUIBundle:Default:index.html.twig', array('name' => $name));
    }
}
