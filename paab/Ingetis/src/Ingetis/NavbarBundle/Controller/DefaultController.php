<?php

namespace Ingetis\NavbarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function NavbarAction()
    {
        return $this->render('IngetisNavbarBundle::Navbar.html.twig', array());
    }
}
