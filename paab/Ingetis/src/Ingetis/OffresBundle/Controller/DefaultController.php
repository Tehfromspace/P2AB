<?php

namespace Ingetis\OffresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function OffresAction()
    {
        return $this->render('IngetisOffresBundle::Offres.html.twig', array());
    }
}
