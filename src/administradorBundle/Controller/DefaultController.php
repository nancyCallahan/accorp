<?php

namespace administradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('administradorBundle:Default:index.html.twig');
    }
}
