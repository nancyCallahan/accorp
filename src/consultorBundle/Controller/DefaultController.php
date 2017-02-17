<?php

namespace consultorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('consultorBundle:Default:index.html.twig');
    }
}
