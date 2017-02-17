<?php

namespace treballadorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('treballadorBundle:Default:index.html.twig');
    }
}
