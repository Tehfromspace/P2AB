<?php

/* IngetisAnnonceBundle::Annonce.html.twig */
class __TwigTemplate_bbf33a3dae5dc262d948f168b5515321bbc6918c480a00b92b9931ad36f941a8 extends Twig_Template
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
        echo "<div class=\"block\">
    <div class=\"posttitle\">INGETIS</div>
    <div class=\"panel-body\">
        
            <div class=\"media-body\">
                <p>Soyez Ambitieux</p>


                        <p>Fort d’une dizaine d’années d’expérience dans la formation informatique, l’école Ingetis est devenue en 2013 un centre de préparation pour le titre de niveau I d’Expert en Système Informatique.</p>
                        <p>Intégrer Ingetis, c’est d’abord et avant tout faire le choix d’une formation à forte plus-value, professionnalisante, une formation tournée vers les métiers de l’ingénierie informatique, dans un secteur porteur et très dynamique.</p>
                        <p>En savoir plus...</p>
                        <p>&nbsp;</p>
            </div>           
    </div>
    <div class=\"panel-body\">
        <div class=\"media\">
            <a class=\"pull-left\" href=\"#\">
                <img class=\"media-object\" src=\"http://www.ingetis.com/images/media/nous-rencontrer-10.jpg\" alt=\"first photo\">
                 
        </div>
        ";
        // line 21
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IngetisDivIndexBundle:Default:DivIndex"));
        echo "
    </div> 
</div>
";
    }

    public function getTemplateName()
    {
        return "IngetisAnnonceBundle::Annonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 21,  19 => 1,);
    }
}
