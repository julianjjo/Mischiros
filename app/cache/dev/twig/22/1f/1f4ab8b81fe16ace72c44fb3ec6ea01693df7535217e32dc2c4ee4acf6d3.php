<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_221f1f4ab8b81fe16ace72c44fb3ec6ea01693df7535217e32dc2c4ee4acf6d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars"), "errors")) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  635 => 226,  624 => 224,  620 => 223,  612 => 220,  607 => 218,  601 => 216,  599 => 215,  594 => 212,  585 => 209,  580 => 207,  577 => 206,  574 => 205,  572 => 204,  566 => 203,  563 => 202,  559 => 201,  555 => 200,  551 => 199,  545 => 198,  536 => 194,  532 => 192,  529 => 191,  526 => 190,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  507 => 165,  504 => 164,  501 => 163,  497 => 156,  493 => 155,  490 => 154,  485 => 124,  470 => 121,  463 => 117,  459 => 116,  455 => 115,  450 => 114,  447 => 113,  424 => 91,  421 => 90,  415 => 127,  412 => 126,  410 => 113,  406 => 111,  404 => 90,  401 => 89,  391 => 163,  385 => 159,  376 => 153,  369 => 148,  359 => 144,  354 => 142,  351 => 141,  347 => 140,  340 => 136,  335 => 133,  333 => 132,  329 => 130,  326 => 129,  323 => 88,  320 => 87,  318 => 86,  313 => 84,  310 => 83,  307 => 82,  302 => 79,  284 => 76,  281 => 75,  261 => 73,  239 => 64,  212 => 60,  210 => 59,  207 => 58,  198 => 55,  195 => 54,  192 => 53,  186 => 51,  180 => 49,  84 => 34,  58 => 22,  127 => 52,  77 => 30,  65 => 29,  152 => 36,  124 => 51,  330 => 103,  327 => 102,  321 => 100,  315 => 98,  306 => 95,  303 => 94,  300 => 93,  292 => 91,  290 => 90,  287 => 77,  280 => 87,  275 => 86,  270 => 84,  262 => 81,  256 => 79,  253 => 78,  237 => 71,  231 => 69,  225 => 67,  222 => 66,  206 => 57,  202 => 55,  194 => 52,  190 => 49,  184 => 48,  178 => 48,  175 => 47,  126 => 55,  97 => 41,  76 => 35,  110 => 41,  104 => 43,  90 => 34,  12 => 36,  20 => 11,  70 => 29,  160 => 39,  148 => 68,  113 => 42,  100 => 81,  81 => 33,  53 => 27,  161 => 53,  150 => 56,  137 => 29,  134 => 182,  129 => 56,  118 => 49,  114 => 50,  34 => 17,  23 => 12,  480 => 162,  474 => 122,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 88,  393 => 168,  387 => 122,  384 => 121,  381 => 157,  379 => 154,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 97,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 74,  258 => 72,  252 => 68,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 65,  169 => 44,  140 => 51,  132 => 57,  128 => 47,  107 => 48,  61 => 26,  273 => 85,  269 => 94,  254 => 92,  243 => 66,  240 => 72,  238 => 85,  235 => 63,  230 => 62,  227 => 81,  224 => 61,  221 => 77,  219 => 76,  217 => 64,  208 => 68,  204 => 57,  179 => 69,  159 => 61,  143 => 47,  135 => 53,  119 => 44,  102 => 37,  71 => 28,  67 => 26,  63 => 20,  59 => 27,  38 => 18,  87 => 35,  94 => 40,  89 => 42,  85 => 32,  75 => 21,  68 => 24,  56 => 27,  201 => 56,  196 => 90,  183 => 50,  171 => 44,  166 => 54,  163 => 40,  158 => 67,  156 => 38,  151 => 63,  142 => 30,  138 => 54,  136 => 56,  121 => 52,  117 => 175,  105 => 170,  91 => 39,  62 => 24,  49 => 23,  93 => 35,  88 => 38,  78 => 36,  44 => 19,  31 => 23,  27 => 14,  25 => 13,  21 => 11,  46 => 22,  26 => 14,  28 => 22,  24 => 13,  19 => 11,  79 => 34,  72 => 28,  69 => 33,  47 => 20,  40 => 20,  37 => 24,  22 => 12,  246 => 67,  157 => 56,  145 => 53,  139 => 51,  131 => 48,  123 => 47,  120 => 176,  115 => 47,  111 => 43,  108 => 171,  101 => 46,  98 => 36,  96 => 44,  83 => 32,  74 => 29,  66 => 32,  55 => 21,  52 => 23,  50 => 21,  43 => 19,  41 => 25,  35 => 16,  32 => 16,  29 => 15,  209 => 58,  203 => 78,  199 => 67,  193 => 73,  189 => 52,  187 => 84,  182 => 66,  176 => 64,  173 => 46,  168 => 43,  164 => 59,  162 => 41,  154 => 58,  149 => 35,  147 => 58,  144 => 26,  141 => 48,  133 => 49,  130 => 43,  125 => 46,  122 => 45,  116 => 43,  112 => 105,  109 => 46,  106 => 36,  103 => 38,  99 => 45,  95 => 71,  92 => 43,  86 => 33,  82 => 38,  80 => 31,  73 => 34,  64 => 19,  60 => 24,  57 => 18,  54 => 22,  51 => 16,  48 => 15,  45 => 14,  42 => 20,  39 => 25,  36 => 16,  33 => 15,  30 => 15,);
    }
}
