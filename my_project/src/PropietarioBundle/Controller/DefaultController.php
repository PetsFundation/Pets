<?php

namespace app\src\PropieatioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PropietarioBundle:Default:index.html.twig');
    }
}
