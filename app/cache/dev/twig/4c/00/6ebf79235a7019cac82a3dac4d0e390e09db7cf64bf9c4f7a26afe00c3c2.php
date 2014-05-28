<?php

/* MischirosTiendaBundle::listarbase.html.twig */
class __TwigTemplate_4c006ebf79235a7019cac82a3dac4d0e390e09db7cf64bf9c4f7a26afe00c3c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
            'menulateral' => array($this, 'block_menulateral'),
            'paginador' => array($this, 'block_paginador'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"container\">
\t\t<br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t";
        // line 8
        $this->displayBlock('menulateral', $context, $blocks);
        // line 9
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t";
        // line 11
        $this->displayBlock('paginador', $context, $blocks);
        // line 12
        echo "\t\t\t</div>
\t\t</div>\t\t
\t</div>
";
    }

    // line 8
    public function block_menulateral($context, array $blocks = array())
    {
    }

    // line 11
    public function block_paginador($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MischirosTiendaBundle::listarbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  54 => 8,  47 => 12,  41 => 9,  39 => 8,  33 => 4,  30 => 3,  266 => 94,  262 => 92,  245 => 91,  236 => 85,  232 => 84,  224 => 79,  218 => 75,  214 => 73,  203 => 65,  199 => 64,  191 => 59,  185 => 55,  182 => 54,  165 => 53,  161 => 51,  156 => 49,  144 => 44,  140 => 43,  132 => 38,  126 => 34,  122 => 33,  119 => 32,  117 => 31,  112 => 29,  109 => 28,  103 => 27,  100 => 26,  95 => 25,  92 => 24,  89 => 23,  84 => 20,  75 => 17,  71 => 16,  67 => 15,  61 => 14,  58 => 13,  55 => 12,  49 => 8,  45 => 11,  40 => 6,  37 => 5,  31 => 3,);
    }
}
