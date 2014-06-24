<?php

/* IngetisSiteBundle::site.html.twig */
class __TwigTemplate_affc8d619ff49444cfed5d0ad147d7556f79f2bb84b03a24d187199d154e6122 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />

    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - Ingetis </title>
    <meta name=\"viewport\" content=\"width=device, initial-scale=1.0\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/add.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link href=\"//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
    <script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>
<body>
";
        // line 17
        $this->displayBlock('navbar', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/add.css"), "html", null, true);
        echo "\" type=\"text/css\" />

";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('footer', $context, $blocks);
        // line 147
        echo "
</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 17
    public function block_navbar($context, array $blocks = array())
    {
        // line 18
        echo "

    ";
        // line 20
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IngetisNavbarBundle:Default:Navbar"));
        echo "

";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        // line 30
        echo "<div id=\"wrapper-footer\">
    <div class=\"container\">
        <div id=\"wrapper-footer\">
            <div id=\"wrapper-footer-shadowline\">
                <div id=\"footer-container\">
                    <div class=\"one_fourth firstcols\">
                        <div class=\"widget-area\">
                            <ul><li id=\"text-2\" class=\"widget-container widget_text\">
                                    <div class=\"textwidget\">
                                        <h2 class=\"sitename\">Notre Brochure</h2>
                                        <a href=\"pdf/plaquette-ingetis.pdf\"><img src=\"http://www.ingetis.com/images/site/plaquette-ingetis.jpg\" alt=\"\" class=\"\" style=\"border:3px solid #FFF; margin-top:10px\"></a>
                                    </div>
                                </li></ul></div>
                    </div>
                    <div class=\"one_fourth\">
                        <div class=\"widget-area\">
                            <ul>
                                <li id=\"ts-recent-posts-2\" class=\"widget-container widget_ts_recent_posts\">
                                    <h2>Derniers Articles</h2>
                                    <ul class=\"latestpost\">
                                        <div class=\"frame alignleft\">
                                            <li>
                                                <div class=\"frame alignleft\">
                                                    <img src=\"http://ingetis.com/images/articles/envie-de-s-expatrier-au-canada-73.jpg\" alt=\"\" class=\"\" height=\"58\" width=\"58\">
                                                </div>
                                                <span class=\"lp-date\">14 May,2014</span><br>
                                                <span class=\"lp-title\"><a href=\"actualite/trouve-ton-entreprise-avec-ingetis/54\" rel=\"bookmark\" title=\"\">Trouve ton entreprise avec INGETIS</a></span>
                                                <div class=\"clearfix\"></div>
                                            </li>
                                            <li>
                                                <div class=\"frame alignleft\">
                                                    <img src=\"http://ingetis.com/images/articles/-75.jpg\" alt=\"\" class=\"\" height=\"58\" width=\"58\">
                                                </div>
                                                <span class=\"lp-date\">13 May,2014</span><br>
                                                <span class=\"lp-title\"><a href=\"actualite/fa-te-de-l-alternance/53\" rel=\"bookmark\" title=\"\">Fête de l'alternance</a></span>
                                                <div class=\"clearfix\"></div>
                                            </li>
                                            <li>
                                                <div class=\"frame alignleft\">
                                                    <img src=\"http://ingetis.com/images/articles/des-evaluations-360-qui-tournent-mal-chez-yahoo-67.jpg\" alt=\"\" class=\"\" height=\"58\" width=\"58\">
                                                </div>
                                                <span class=\"lp-date\">20 Nov,2013</span><br>
                                                <span class=\"lp-title\"><a href=\"actualite/des-a-valuations-360a-qui-tournent-mal-chez-yahoo/51\" rel=\"bookmark\" title=\"\">Des évaluations 360° qui tournent mal chez Yahoo</a></span>
                                                <div class=\"clearfix\"></div>
                                            </li>


                                        </div>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"one_fourth\">
                        <div class=\"widget-area\">
                            <ul>
                                <li>
                                    <h2>Vous êtes</h2>
                                    <div class=\"menu-activity-container\">
                                        <ul id=\"menu-activity\" class=\"menu\">
                                            <li><a href=\"demande-doc.php\">Candidat</a></li>
                                            <li><a href=\"7/se-loger\">Étudiant</a></li>
                                            <li><a href=\"17/contrat-de-professionnalisation\">Entreprise</a></li>
                                            <li><a href=\"4/enseignants\">Enseignant</a></li>
                                            <li><a href=\"#\">Ancien élève</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"one_fourth last\">
                        <div class=\"widget-area\">
                            <ul>
                                <li id=\"text-3\" class=\"widget-container widget_text\">
                                    <h2>Contact</h2>
                                    <div class=\"textwidget\">
                                        <ul>
                                            <li><img src=\"images/site/icon_phone.png\" alt=\"\" class=\"alignleft\">01 60 79 18 81</li>
                                            <li><img src=\"images/site/icon_mail.png\" alt=\"\" class=\"alignleft\"><a href=\"mailto:contact@ingetis.com\">contact@ingetis.com</a></li>
                                            <li><img src=\"images/site/icon_home.png\" alt=\"\" class=\"alignleft\">128 allée des Champs Elysées 91042 Evry Cedex</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id=\"sn\">
                            <ul class=\"sn\">
                                <li>
                                    <a href=\"http://www.twitter.com/ingetis\">
                                        <span class=\"icon-img\" style=\"background-image:url(images/site/twitter.png)\"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"http://www.facebook.com/ingetis\">
                                        <span class=\"icon-img\" style=\"background-image:url(images/site/facebook.png)\"></span>
                                    </a></li>
                                <li>
                                    <a href=\"#\">
                                        <span class=\"icon-img\" style=\"background-image:url(images/site/google.png)\"></span>
                                    </a>
                                </li>
                            </ul>
                        </div><!--#sn-->
                    </div>
                    <div class=\"clear\"></div><!-- end clear -->
                </div><!-- end footer-container -->
                <div id=\"footer-copyright\">
                    <h2>
                        <a href=\"http://www.ingetis.com/\">INGETIS.COM</a>
                    </h2>
                </div><!-- end footer-copyright -->
            </div> <!-- end wrapper-footer -shadowline-->
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "IngetisSiteBundle::site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 30,  118 => 29,  113 => 27,  108 => 24,  101 => 20,  97 => 18,  94 => 17,  89 => 14,  84 => 6,  78 => 147,  76 => 29,  73 => 28,  71 => 27,  65 => 25,  63 => 24,  60 => 23,  58 => 17,  54 => 15,  52 => 14,  48 => 13,  41 => 9,  37 => 8,  32 => 6,  25 => 1,  31 => 4,  28 => 3,);
    }
}
