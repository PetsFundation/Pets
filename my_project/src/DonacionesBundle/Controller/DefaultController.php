<?php

namespace DonacionesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DonacionesBundle:Default:contenido_index.html.twig');
    }
}
