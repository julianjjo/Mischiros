<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_a016786dab4a013150dc27c99231bda17cd908c70b38995fd8d0ce5a4dd993ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle::standard_layout.html.twig");

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 61,  167 => 56,  200 => 54,  188 => 48,  174 => 42,  146 => 34,  635 => 226,  624 => 224,  620 => 223,  612 => 220,  607 => 218,  601 => 216,  599 => 215,  594 => 212,  585 => 209,  580 => 207,  577 => 206,  574 => 205,  572 => 204,  566 => 203,  563 => 202,  559 => 201,  555 => 200,  551 => 199,  545 => 198,  536 => 194,  532 => 192,  529 => 191,  526 => 190,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  507 => 165,  504 => 164,  501 => 163,  497 => 156,  493 => 155,  490 => 154,  485 => 124,  470 => 121,  463 => 117,  459 => 116,  455 => 115,  450 => 114,  447 => 113,  424 => 91,  421 => 90,  415 => 127,  412 => 126,  410 => 113,  406 => 111,  404 => 90,  401 => 89,  391 => 163,  385 => 159,  376 => 153,  369 => 148,  359 => 144,  354 => 142,  351 => 141,  347 => 140,  340 => 136,  335 => 133,  333 => 132,  329 => 130,  326 => 129,  323 => 88,  320 => 87,  318 => 86,  313 => 84,  310 => 83,  307 => 82,  302 => 79,  284 => 76,  281 => 75,  261 => 73,  239 => 64,  212 => 60,  210 => 59,  207 => 58,  198 => 55,  195 => 54,  192 => 53,  186 => 47,  180 => 49,  84 => 34,  58 => 22,  127 => 52,  77 => 29,  65 => 29,  152 => 36,  124 => 25,  330 => 103,  327 => 102,  321 => 100,  315 => 98,  306 => 95,  303 => 94,  300 => 93,  292 => 91,  290 => 90,  287 => 77,  280 => 87,  275 => 86,  270 => 84,  262 => 81,  256 => 79,  253 => 78,  237 => 71,  231 => 69,  225 => 67,  222 => 66,  206 => 57,  202 => 55,  194 => 66,  190 => 49,  184 => 48,  178 => 48,  175 => 47,  126 => 26,  97 => 41,  76 => 35,  110 => 41,  104 => 43,  90 => 16,  12 => 36,  20 => 1,  70 => 29,  160 => 38,  148 => 49,  113 => 40,  100 => 81,  81 => 31,  53 => 18,  161 => 53,  150 => 35,  137 => 29,  134 => 182,  129 => 44,  118 => 23,  114 => 50,  34 => 14,  23 => 12,  480 => 162,  474 => 122,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 88,  393 => 168,  387 => 122,  384 => 121,  381 => 157,  379 => 154,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 97,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 74,  258 => 72,  252 => 68,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 43,  169 => 44,  140 => 51,  132 => 28,  128 => 47,  107 => 37,  61 => 28,  273 => 85,  269 => 94,  254 => 92,  243 => 66,  240 => 72,  238 => 85,  235 => 63,  230 => 62,  227 => 81,  224 => 61,  221 => 77,  219 => 76,  217 => 56,  208 => 68,  204 => 57,  179 => 44,  159 => 61,  143 => 33,  135 => 53,  119 => 44,  102 => 19,  71 => 11,  67 => 19,  63 => 20,  59 => 23,  38 => 18,  87 => 14,  94 => 34,  89 => 42,  85 => 32,  75 => 32,  68 => 30,  56 => 27,  201 => 56,  196 => 52,  183 => 46,  171 => 57,  166 => 54,  163 => 40,  158 => 67,  156 => 38,  151 => 63,  142 => 30,  138 => 54,  136 => 47,  121 => 24,  117 => 175,  105 => 20,  91 => 38,  62 => 24,  49 => 17,  93 => 17,  88 => 37,  78 => 36,  44 => 16,  31 => 15,  27 => 14,  25 => 13,  21 => 11,  46 => 19,  26 => 2,  28 => 14,  24 => 13,  19 => 11,  79 => 35,  72 => 31,  69 => 33,  47 => 20,  40 => 20,  37 => 20,  22 => 12,  246 => 67,  157 => 51,  145 => 60,  139 => 59,  131 => 48,  123 => 48,  120 => 42,  115 => 45,  111 => 39,  108 => 21,  101 => 40,  98 => 35,  96 => 18,  83 => 32,  74 => 29,  66 => 30,  55 => 22,  52 => 21,  50 => 20,  43 => 21,  41 => 20,  35 => 16,  32 => 4,  29 => 3,  209 => 58,  203 => 55,  199 => 67,  193 => 51,  189 => 63,  187 => 84,  182 => 66,  176 => 58,  173 => 46,  168 => 41,  164 => 55,  162 => 54,  154 => 36,  149 => 62,  147 => 58,  144 => 48,  141 => 48,  133 => 46,  130 => 57,  125 => 46,  122 => 45,  116 => 41,  112 => 105,  109 => 46,  106 => 36,  103 => 41,  99 => 45,  95 => 71,  92 => 43,  86 => 33,  82 => 33,  80 => 13,  73 => 27,  64 => 24,  60 => 24,  57 => 20,  54 => 19,  51 => 9,  48 => 8,  45 => 18,  42 => 17,  39 => 15,  36 => 6,  33 => 16,  30 => 15,);
    }
}
