<?php

/* IngetisSiteBundle::Navbar.html.twig */
class __TwigTemplate_a20fc3e64f121a3a4d08a10bce10d1c1440dd8b31a90cd5b59d47bdcf130e600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Navbar' => array($this, 'block_Navbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('Navbar', $context, $blocks);
    }

    public function block_Navbar($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"wrapper-header-inner\">
  <div class=\"container-fluid\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/add.css"), "html", null, true);
        echo "\"/>
    <nav class=\"wrapper-header-inner\" role=\"navigation\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"wrapper-header-inner\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"><img src=\"http://www.ingetis.com/images/site/house.png\" alt=\"accueil\"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id='topnav'>
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"#\">CURSUS</a></li>
                        <li><a href=\"#\">CANDIDATURES</a></li>
                        <li><a href=\"#\">VIE ETUDIANTE</a></li>
                        <li><a href=\"#\">RELATION ENTREPRISE</a></li>
                        <li><a href=\"#\">V.A.E</a></li>
                        <li><a href=\"#\">CONTACT</a></li>

                    </ul>
            </div>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
  </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "IngetisSiteBundle::Navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  29 => 3,  23 => 2,  20 => 1,);
    }
}
