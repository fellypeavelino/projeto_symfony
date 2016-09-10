<?php

namespace Acme\symfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('symfonyBundle:Default:index.html.twig');
    }
}
