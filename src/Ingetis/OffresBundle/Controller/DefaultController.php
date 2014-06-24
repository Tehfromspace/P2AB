<?php

namespace Ingetis\OffresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$offres = $this->getDoctrine()
		->getManager()
		->getRepository('IngetisOffresBundle:OffresEmplois');
		$offres = $offres->findBy(
		array(),
		array('idOffre' => 'DESC'),
		10,
		0
		);
        return $this->render('IngetisOffresBundle:Default:index.html.twig',array('offres' => $offres));
    }
    public function listindexAction()
    {
    	$offres = $this->getDoctrine()
		->getManager()
		->getRepository('IngetisOffresBundle:OffresEmplois');
		$offres = $offres->findBy(
		array(),
		array('idOffre' => 'DESC'),
		3,
		0
		);
        return $this->render('IngetisOffresBundle:Default:offres_panel.html.twig',array('offres' => $offres));
    }
}
