<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_c712280d20568571da49b94f90d9a335e17a4ddf8db2e3f00c14d600abb4fc12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ((!$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "catalogue"));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "safe")) {
            // line 21
            echo "        ";
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 103,  327 => 102,  321 => 100,  315 => 98,  306 => 95,  303 => 94,  300 => 93,  292 => 91,  290 => 90,  287 => 89,  280 => 87,  275 => 86,  270 => 84,  262 => 81,  256 => 79,  253 => 78,  237 => 71,  231 => 69,  225 => 67,  222 => 66,  206 => 57,  202 => 55,  194 => 52,  190 => 49,  184 => 48,  178 => 46,  175 => 45,  126 => 24,  97 => 56,  76 => 18,  110 => 63,  104 => 34,  90 => 24,  12 => 36,  20 => 11,  70 => 39,  160 => 40,  148 => 68,  113 => 39,  100 => 43,  81 => 20,  53 => 13,  161 => 53,  150 => 34,  137 => 29,  134 => 28,  129 => 25,  118 => 39,  114 => 46,  34 => 15,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 97,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 82,  258 => 81,  252 => 80,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 27,  273 => 85,  269 => 94,  254 => 92,  243 => 73,  240 => 72,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 64,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 47,  135 => 53,  119 => 108,  102 => 60,  71 => 23,  67 => 30,  63 => 17,  59 => 13,  38 => 5,  87 => 38,  94 => 30,  89 => 39,  85 => 25,  75 => 27,  68 => 22,  56 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 44,  166 => 54,  163 => 62,  158 => 67,  156 => 38,  151 => 63,  142 => 30,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 45,  91 => 32,  62 => 14,  49 => 20,  93 => 33,  88 => 19,  78 => 35,  44 => 12,  31 => 14,  27 => 4,  25 => 4,  21 => 11,  46 => 19,  26 => 14,  28 => 13,  24 => 13,  19 => 11,  79 => 18,  72 => 40,  69 => 16,  47 => 19,  40 => 17,  37 => 16,  22 => 12,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 54,  123 => 49,  120 => 40,  115 => 39,  111 => 33,  108 => 32,  101 => 32,  98 => 31,  96 => 34,  83 => 37,  74 => 14,  66 => 38,  55 => 21,  52 => 22,  50 => 8,  43 => 18,  41 => 6,  35 => 20,  32 => 15,  29 => 15,  209 => 58,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 43,  164 => 59,  162 => 41,  154 => 58,  149 => 48,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 43,  125 => 44,  122 => 42,  116 => 107,  112 => 105,  109 => 38,  106 => 36,  103 => 36,  99 => 31,  95 => 41,  92 => 27,  86 => 28,  82 => 22,  80 => 18,  73 => 33,  64 => 31,  60 => 18,  57 => 23,  54 => 16,  51 => 21,  48 => 14,  45 => 20,  42 => 16,  39 => 17,  36 => 16,  33 => 16,  30 => 2,);
    }
}
