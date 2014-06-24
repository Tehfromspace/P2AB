<?php

namespace Ingetis\CarouselBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function CarouselAction()
    {
        return $this->render('IngetisCarouselBundle::Carousel.html.twig', array());
    }
}
