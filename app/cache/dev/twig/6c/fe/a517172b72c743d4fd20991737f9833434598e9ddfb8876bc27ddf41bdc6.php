<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_6cfea517172b72c743d4fd20991737f9833434598e9ddfb8876bc27ddf41bdc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 15,  26 => 14,  118 => 39,  111 => 33,  108 => 32,  102 => 27,  95 => 23,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  80 => 18,  70 => 39,  66 => 38,  61 => 35,  59 => 32,  46 => 18,  39 => 15,  33 => 13,  149 => 48,  143 => 47,  137 => 45,  134 => 44,  130 => 43,  122 => 42,  119 => 41,  115 => 39,  109 => 38,  103 => 36,  100 => 35,  96 => 34,  93 => 33,  91 => 32,  87 => 30,  81 => 29,  75 => 27,  72 => 40,  68 => 25,  60 => 24,  57 => 23,  51 => 27,  48 => 26,  45 => 20,  42 => 16,  37 => 18,  35 => 17,  31 => 15,  28 => 14,);
    }
}
