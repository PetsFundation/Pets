<?php

namespace ContactameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ContactameBundle:Default:contenido_index.html.twig');
    }
}
