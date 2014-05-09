<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_2370f4db8031896894e2aab71523274d9713b434d4e116681097cc05df1c339f extends Twig_Template
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
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content");
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 4,  268 => 3,  264 => 2,  253 => 1,  243 => 83,  233 => 81,  221 => 79,  212 => 74,  210 => 73,  208 => 72,  206 => 71,  202 => 68,  198 => 66,  196 => 65,  192 => 64,  189 => 61,  187 => 60,  185 => 59,  182 => 57,  180 => 56,  177 => 54,  175 => 53,  172 => 51,  169 => 49,  167 => 48,  165 => 47,  163 => 45,  160 => 44,  156 => 41,  154 => 40,  120 => 36,  113 => 31,  90 => 20,  65 => 83,  50 => 44,  47 => 43,  40 => 20,  30 => 9,  129 => 59,  117 => 34,  107 => 52,  105 => 51,  101 => 49,  97 => 47,  84 => 16,  82 => 39,  79 => 37,  77 => 36,  74 => 11,  69 => 9,  64 => 28,  62 => 82,  55 => 79,  52 => 78,  44 => 18,  36 => 16,  34 => 15,  32 => 14,  27 => 8,  25 => 12,  20 => 11,  29 => 15,  26 => 14,  118 => 39,  111 => 30,  108 => 28,  102 => 27,  95 => 22,  92 => 22,  89 => 43,  86 => 17,  83 => 19,  80 => 18,  70 => 39,  66 => 29,  61 => 35,  59 => 32,  46 => 18,  39 => 17,  33 => 13,  149 => 48,  143 => 47,  137 => 37,  134 => 44,  130 => 43,  122 => 42,  119 => 41,  115 => 33,  109 => 53,  103 => 50,  100 => 23,  96 => 34,  93 => 21,  91 => 44,  87 => 30,  81 => 15,  75 => 27,  72 => 10,  68 => 25,  60 => 81,  57 => 80,  51 => 27,  48 => 26,  45 => 28,  42 => 27,  37 => 19,  35 => 15,  31 => 14,  28 => 14,);
    }
}
