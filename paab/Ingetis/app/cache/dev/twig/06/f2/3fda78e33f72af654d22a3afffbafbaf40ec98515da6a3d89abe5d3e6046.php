<?php

/* IngetisIndexBundle::index.html.twig */
class __TwigTemplate_06f23fda78e33f72af654d22a3afffbafbaf40ec98515da6a3d89abe5d3e6046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IngetisSiteBundle::content.html.twig");

        $this->blocks = array(
            'colleft' => array($this, 'block_colleft'),
            'colright' => array($this, 'block_colright'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IngetisSiteBundle::content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_colleft($context, array $blocks = array())
    {
        // line 4
        echo "\t\t";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IngetisCarouselBundle:Default:Carousel"));
        echo "
    \t";
        // line 5
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IngetisNewsBundle:Default:News"));
        echo "
        ";
        // line 6
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IngetisOffresBundle:Default:Offres"));
        echo "
        ";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IngetisAnnonceBundle:Default:Annonce"));
        echo "
";
    }

    // line 10
    public function block_colright($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"widget-area\">
\t<h2 id=\"candidature\">
\t    <a href=\"demande-doc.php\">Déposez votre candidature</a>
\t</h2>

\t<div class=\"block\">
\t    <img alt=\"\" src=\"http://cdn1.iconfinder.com/data/icons/dellipack/48/people.png\" class=\"alignleft\">
\t    <br>
\t    <h2>Ingetis si vous êtes</h2>
\t       \t\t<div class=\"clear\"></div>
\t                <ul class=\"menu_deco\">
\t                    <li><a href=\"demande-doc.php\">Candidat</a></li>
\t                    <li><a href=\"7/se-loger\">Étudiant</a></li>
\t                    <li><a href=\"17/contrat-de-professionnalisation\">Entreprise</a></li>
\t                    <li><a href=\"4/enseignants\">Enseignant</a></li>
\t                    <li><a href=\"#\">Ancien élève</a></li>
\t                </ul>
\t</div>

\t<div class=\"block\">
\t    <img alt=\"\" src=\"http://cdn1.iconfinder.com/data/icons/customicondesignoffice2/PNG/FAQ.png\" class=\"alignleft\">
\t    <a href=\"http://ingetis.com/23/pourquoi-ingetis\"><h2>Les Raisons de choisir Ingetis</h2></a>
\t    <div class=\"clear\"></div>
\t</div>


\t<div class=\"block\" style=\"text-align:center;\">
\t    <a href=\"http://ingetis.com/demande-doc.php\">
\t        <img src=\"http://www.ingetis.com/images/site/boutton_etudiants.jpg\" alt=\"Etudiant\">
\t    </a>
\t</div>
\t<div class=\"block\" style=\"text-align:center;\">
\t    <a href=\"http://ingetis.com/contact-entreprises.php\">
\t        <img src=\"http://itis-formation.com/images/site/boutton_entreprise.jpg\" alt=\"Etudiant\">
\t    </a>
\t</div>                            
</div>
";
    }

    public function getTemplateName()
    {
        return "IngetisIndexBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  51 => 10,  45 => 7,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
