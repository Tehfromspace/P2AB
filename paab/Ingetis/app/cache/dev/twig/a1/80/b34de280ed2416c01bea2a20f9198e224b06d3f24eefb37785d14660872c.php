<?php

/* IngetisSiteBundle::content.html.twig */
class __TwigTemplate_a180b34de280ed2416c01bea2a20f9198e224b06d3f24eefb37785d14660872c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IngetisSiteBundle::Layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'colleft' => array($this, 'block_colleft'),
            'colright' => array($this, 'block_colright'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IngetisSiteBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "

<div id=\"body\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-md-8 \">
                    ";
        // line 12
        $this->displayBlock('colleft', $context, $blocks);
        // line 13
        echo "                </div>




                <div class=\"col-md-4\">
                    <div id=\"colright\"> 
                            ";
        // line 20
        $this->displayBlock('colright', $context, $blocks);
        // line 21
        echo "                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
    }

    // line 12
    public function block_colleft($context, array $blocks = array())
    {
    }

    // line 20
    public function block_colright($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "IngetisSiteBundle::content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  74 => 12,  62 => 21,  60 => 20,  51 => 13,  49 => 12,  40 => 5,  37 => 4,  31 => 3,);
    }
}
