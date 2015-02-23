<?php

namespace potool\conciliationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('potoolconciliationBundle:Default:index.html.twig', array('name' => $name));
    }
}
