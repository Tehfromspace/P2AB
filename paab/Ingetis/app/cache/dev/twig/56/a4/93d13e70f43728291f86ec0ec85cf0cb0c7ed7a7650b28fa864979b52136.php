<?php

/* IngetisSiteBundle::index.html.twig */
class __TwigTemplate_56a493d13e70f43728291f86ec0ec85cf0cb0c7ed7a7650b28fa864979b52136 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IngetisSiteBundle::Site.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'Carousel' => array($this, 'block_Carousel'),
            'news' => array($this, 'block_news'),
            'Offres' => array($this, 'block_Offres'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IngetisSiteBundle::Site.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"corps\">
\t<div id=\"body\">
\t\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div id=\"colleft\">        
\t            <div class=\"col-md-8 \">
\t            \t";
        // line 11
        $this->displayBlock('Carousel', $context, $blocks);
        // line 12
        echo "\t                ";
        $this->displayBlock('news', $context, $blocks);
        // line 13
        echo "\t               \t";
        $this->displayBlock('Offres', $context, $blocks);
        // line 14
        echo "\t            </div>
\t  \t\t</div>
\t\t\t<div id=\"colright\">    
\t            <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"widget-area\">
\t                        \t<h2 id=\"candidature\">
\t                                <a href=\"demande-doc.php\">Déposez votre candidature</a>
\t                            </h2>
\t                            
\t                            <div class=\"block\">
\t                                <img alt=\"\" src=\"http://cdn1.iconfinder.com/data/icons/dellipack/48/people.png\" class=\"alignleft\">
\t                                <br>
\t                                <h2>Ingetis si vous êtes</h2>
\t                                <div class=\"clear\"></div>
\t                                <ul class=\"menu_deco\">
\t                                    <li><a href=\"demande-doc.php\">Candidat</a></li>
\t                                    <li><a href=\"7/se-loger\">Étudiant</a></li>
\t                                    <li><a href=\"17/contrat-de-professionnalisation\">Entreprise</a></li>
\t                                    <li><a href=\"4/enseignants\">Enseignant</a></li>
\t                                    <li><a href=\"#\">Ancien élève</a></li>
\t                                </ul>
\t                            </div>
\t                            
\t                            <div class=\"block\">
\t                                <img alt=\"\" src=\"http://cdn1.iconfinder.com/data/icons/customicondesignoffice2/PNG/FAQ.png\" class=\"alignleft\">
\t                                <a href=\"http://ingetis.com/23/pourquoi-ingetis\"><h2>Les Raisons de choisir Ingetis</h2></a>
\t                                <div class=\"clear\"></div>
\t                            </div>

\t                            
\t                            <div class=\"block\" style=\"text-align:center;\">
\t                                <a href=\"http://ingetis.com/demande-doc.php\">
\t                                    <img src=\"http://www.ingetis.com/images/site/boutton_etudiants.jpg\" alt=\"Etudiant\">
\t                                </a>
\t                            </div>
\t                            <div class=\"block\" style=\"text-align:center;\">
\t                                <a href=\"http://ingetis.com/contact-entreprises.php\">
\t                                    <img src=\"http://itis-formation.com/images/site/boutton_entreprise.jpg\" alt=\"Etudiant\">
\t                                </a>
\t                            </div>
\t                            
\t                        </div>
\t        \t</div>    
\t\t\t</div>
\t\t</div>
\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    // line 11
    public function block_Carousel($context, array $blocks = array())
    {
    }

    // line 12
    public function block_news($context, array $blocks = array())
    {
    }

    // line 13
    public function block_Offres($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "IngetisSiteBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 13,  116 => 12,  111 => 11,  58 => 14,  55 => 13,  52 => 12,  50 => 11,  41 => 4,  38 => 3,  32 => 2,);
    }
}
