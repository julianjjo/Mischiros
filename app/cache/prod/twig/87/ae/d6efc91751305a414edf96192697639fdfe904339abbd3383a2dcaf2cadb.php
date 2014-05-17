<?php

/* MischirosTiendaBundle:Default:index.html.twig */
class __TwigTemplate_87aed6efc91751305a414edf96192697639fdfe904339abbd3383a2dcaf2cadb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "Bienvenido";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"row\">
\t\t<div class=\"col-md-8 col-md-offset-2\">

\t    </div>
\t</div>\t    
";
    }

    public function getTemplateName()
    {
        return "MischirosTiendaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
