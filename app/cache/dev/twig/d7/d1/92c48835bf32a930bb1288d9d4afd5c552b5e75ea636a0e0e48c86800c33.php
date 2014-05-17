<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_d7d192c48835bf32a930bb1288d9d4afd5c552b5e75ea636a0e0e48c86800c33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars"), "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 34,  58 => 25,  127 => 52,  77 => 33,  65 => 29,  152 => 61,  124 => 51,  330 => 103,  327 => 102,  321 => 100,  315 => 98,  306 => 95,  303 => 94,  300 => 93,  292 => 91,  290 => 90,  287 => 89,  280 => 87,  275 => 86,  270 => 84,  262 => 81,  256 => 79,  253 => 78,  237 => 71,  231 => 69,  225 => 67,  222 => 66,  206 => 57,  202 => 55,  194 => 52,  190 => 49,  184 => 48,  178 => 46,  175 => 45,  126 => 48,  97 => 41,  76 => 35,  110 => 45,  104 => 43,  90 => 36,  12 => 36,  20 => 11,  70 => 29,  160 => 57,  148 => 68,  113 => 46,  100 => 43,  81 => 33,  53 => 27,  161 => 53,  150 => 56,  137 => 29,  134 => 28,  129 => 49,  118 => 49,  114 => 44,  34 => 15,  23 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 97,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 82,  258 => 81,  252 => 80,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 65,  169 => 60,  140 => 51,  132 => 42,  128 => 49,  107 => 38,  61 => 26,  273 => 85,  269 => 94,  254 => 92,  243 => 73,  240 => 72,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 64,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 47,  135 => 53,  119 => 108,  102 => 37,  71 => 31,  67 => 30,  63 => 17,  59 => 27,  38 => 14,  87 => 35,  94 => 40,  89 => 17,  85 => 36,  75 => 21,  68 => 28,  56 => 26,  201 => 92,  196 => 90,  183 => 82,  171 => 44,  166 => 54,  163 => 58,  158 => 67,  156 => 38,  151 => 63,  142 => 30,  138 => 54,  136 => 56,  121 => 50,  117 => 45,  105 => 41,  91 => 39,  62 => 28,  49 => 28,  93 => 39,  88 => 38,  78 => 32,  44 => 18,  31 => 15,  27 => 14,  25 => 12,  21 => 11,  46 => 22,  26 => 13,  28 => 14,  24 => 14,  19 => 11,  79 => 34,  72 => 30,  69 => 19,  47 => 19,  40 => 20,  37 => 23,  22 => 11,  246 => 90,  157 => 56,  145 => 54,  139 => 45,  131 => 54,  123 => 47,  120 => 46,  115 => 47,  111 => 43,  108 => 42,  101 => 39,  98 => 41,  96 => 37,  83 => 15,  74 => 33,  66 => 28,  55 => 24,  52 => 23,  50 => 23,  43 => 26,  41 => 25,  35 => 16,  32 => 14,  29 => 15,  209 => 58,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 43,  164 => 59,  162 => 41,  154 => 58,  149 => 48,  147 => 58,  144 => 49,  141 => 48,  133 => 49,  130 => 43,  125 => 44,  122 => 42,  116 => 48,  112 => 105,  109 => 46,  106 => 36,  103 => 43,  99 => 38,  95 => 19,  92 => 28,  86 => 25,  82 => 23,  80 => 25,  73 => 30,  64 => 27,  60 => 16,  57 => 15,  54 => 23,  51 => 14,  48 => 22,  45 => 21,  42 => 20,  39 => 20,  36 => 18,  33 => 16,  30 => 15,);
    }
}
