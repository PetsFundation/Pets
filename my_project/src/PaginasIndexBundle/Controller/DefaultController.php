<?php

namespace PaginasIndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PaginasIndexBundle:Default:index.html.twig');
    }
}
