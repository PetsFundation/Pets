<?php

namespace AnunciosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AnunciosBundle:Default:index.html.twig');
    }
}
