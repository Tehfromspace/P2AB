<?php

namespace Ingetis\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function AnnonceAction()
    {
        return $this->render('IngetisAnnonceBundle::Annonce.html.twig', array());
    }
}
