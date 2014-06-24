<?php

namespace Ingetis\DivIndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function DivIndexAction()
    {
        return $this->render('IngetisDivIndexBundle::DivIndex.html.twig', array());
    }
}
