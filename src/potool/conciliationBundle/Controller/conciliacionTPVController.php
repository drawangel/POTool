<?php

namespace potool\conciliationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class conciliacionTPVController extends Controller
{
    public function indexAction($country)
    {

         $st_countries = $this->getDoctrine()
                            ->getRepository('potoolconciliationBundle:Country')
                            ->findAll();

        $returnValues = array('name' => $country,
            'title' => 'Conciliacion TPV ',
            'countries' => $st_countries);

        return $this->render('potoolconciliationBundle:Default:conciliacionTPV.html.twig', $returnValues);
    }
}
