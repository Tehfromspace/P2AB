<?php

namespace Ingetis\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function NewsAction()
    {
    	{
    	    	$em=$this->getDoctrine()->getManager();
    			$Imghost=$em->getRepository("IngetisSiteBundle:Imghost")->findAll();
    	}

        return $this->render('IngetisNewsBundle::News.html.twig', array());
    }
    public function AjoutAction()
    {

    }
}

