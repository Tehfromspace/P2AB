<?php

namespace Ingetis\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ingetis\SiteBundle\Entity\Imghost;

class DefaultController extends Controller
{
    public function LayoutAction()
    {
    	    	$em=$this->getDoctrine()->getEntityManager();
    			$Imghost=$em->getRepository("IngetisSiteBundle:Imghost")->findAll();
    }

    {
        return $this->render('IngetisSiteBundle::Layout.html.twig', array('Imghost'=>$Imghost));
    }
         public function ContentAction()
    {
        return $this->render('IngetisSiteBundle::content.html.twig', array());
    }
}
}
