<?php

/* IngetisSiteBundle::Carousel.html.twig */
class __TwigTemplate_e5bc8635a48da7b41b1be7fce19c0f3d508c2e3fa161c1dc5d6e01d295988378 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->

        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\" class=\"\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"item\">
                <img data-src=\"http://www.ingetis.com/images/panell/32.jpg\" alt=\"First slide\" src=\"http://www.ingetis.com/images/panell/20.jpg\">
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1> Réunion d'information tous les mercredis à 11h </h1>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <img data-src=\"holder.js/900x500/auto/#666:#6a6a6a/text:Second slide\" alt=\"Second slide\" src=\"http://www.ingetis.com/images/panell/23.jpg\">
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1>Un cursus - Deux fillières - Réseau ou Développement</h1>
                    </div>
                </div>
            </div>
            <div class=\"item active\">
                <img data-src=\"http://www.ingetis.com/images/panell/32.jpg\" alt=\"Third slide\" src=\"http://www.ingetis.com/images/panell/32.jpg\">
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1>Devenez ingénieur informatique en 3 ans grâce à INGETIS</h1>s
                    </div>
                </div>
            </div>
        </div>

        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
</div>";
    }

    public function getTemplateName()
    {
        return "IngetisSiteBundle::Carousel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
