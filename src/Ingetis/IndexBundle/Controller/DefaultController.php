<?php

namespace Ingetis\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IngetisIndexBundle:Default:index.html.twig');
    }
}
