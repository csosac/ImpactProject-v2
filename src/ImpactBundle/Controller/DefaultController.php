<?php

namespace ImpactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ImpactBundle:Default:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('ImpactBundle:Public:about.html.twig');
    }
}
