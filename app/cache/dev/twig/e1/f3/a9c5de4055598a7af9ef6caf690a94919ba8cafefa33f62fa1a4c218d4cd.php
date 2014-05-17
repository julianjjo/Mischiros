<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_e1f3a9c5de4055598a7af9ef6caf690a94919ba8cafefa33f62fa1a4c218d4cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        [";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo " => ";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), "html", null, true);
            echo "]
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 11,  70 => 39,  160 => 75,  148 => 68,  113 => 42,  100 => 35,  81 => 29,  53 => 13,  161 => 53,  150 => 6,  137 => 45,  134 => 44,  129 => 53,  118 => 39,  114 => 46,  34 => 16,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 47,  135 => 53,  119 => 41,  102 => 27,  71 => 19,  67 => 32,  63 => 17,  59 => 32,  38 => 17,  87 => 30,  94 => 33,  89 => 21,  85 => 25,  75 => 27,  68 => 25,  56 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 54,  163 => 62,  158 => 67,  156 => 7,  151 => 63,  142 => 58,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 32,  62 => 26,  49 => 18,  93 => 33,  88 => 19,  78 => 27,  44 => 12,  31 => 19,  27 => 4,  25 => 4,  21 => 11,  46 => 18,  26 => 14,  28 => 13,  24 => 12,  19 => 1,  79 => 18,  72 => 40,  69 => 80,  47 => 25,  40 => 13,  37 => 21,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 54,  123 => 49,  120 => 40,  115 => 39,  111 => 33,  108 => 32,  101 => 32,  98 => 31,  96 => 34,  83 => 19,  74 => 14,  66 => 38,  55 => 11,  52 => 20,  50 => 8,  43 => 8,  41 => 23,  35 => 20,  32 => 3,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 48,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 43,  125 => 44,  122 => 42,  116 => 41,  112 => 25,  109 => 38,  106 => 36,  103 => 36,  99 => 31,  95 => 23,  92 => 22,  86 => 20,  82 => 22,  80 => 18,  73 => 19,  64 => 31,  60 => 24,  57 => 23,  54 => 21,  51 => 27,  48 => 26,  45 => 20,  42 => 16,  39 => 15,  36 => 18,  33 => 16,  30 => 3,);
    }
}
