<?php

/* SonataUserBundle::layout.html.twig */
class __TwigTemplate_f4631bbb9ae917443ae8e755eab5652c02e72df3106d97b7a2ea91d388b9e5e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        // line 3
        echo "\t<div>
\t    ";
        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 6
        echo "\t</div>
";
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "\t    ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  42 => 4,  37 => 6,  35 => 4,  32 => 3,  29 => 2,  160 => 75,  148 => 68,  137 => 60,  123 => 49,  113 => 42,  107 => 39,  100 => 35,  94 => 33,  91 => 32,  87 => 30,  81 => 28,  78 => 27,  75 => 26,  69 => 80,  67 => 32,  64 => 31,  62 => 26,  54 => 21,  49 => 18,  46 => 17,  40 => 83,  38 => 17,  34 => 15,  31 => 14,);
    }
}
