<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_23693a793138730dfd6aaf501602e0082d3ec5002f5fca368fef29d504c5348b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 19
    public function block_tab_menu($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 21
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
            echo "
    ";
        }
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "
    Redefine the content block in your action template

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 52,  77 => 34,  65 => 29,  152 => 61,  124 => 51,  330 => 103,  327 => 102,  321 => 100,  315 => 98,  306 => 95,  303 => 94,  300 => 93,  292 => 91,  290 => 90,  287 => 89,  280 => 87,  275 => 86,  270 => 84,  262 => 81,  256 => 79,  253 => 78,  237 => 71,  231 => 69,  225 => 67,  222 => 66,  206 => 57,  202 => 55,  194 => 52,  190 => 49,  184 => 48,  178 => 46,  175 => 45,  126 => 24,  97 => 41,  76 => 35,  110 => 45,  104 => 43,  90 => 39,  12 => 36,  20 => 11,  70 => 27,  160 => 57,  148 => 68,  113 => 46,  100 => 43,  81 => 20,  53 => 27,  161 => 53,  150 => 56,  137 => 29,  134 => 28,  129 => 25,  118 => 49,  114 => 46,  34 => 17,  23 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 97,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 82,  258 => 81,  252 => 80,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 65,  169 => 60,  140 => 51,  132 => 51,  128 => 49,  107 => 44,  61 => 29,  273 => 85,  269 => 94,  254 => 92,  243 => 73,  240 => 72,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 64,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 47,  135 => 53,  119 => 108,  102 => 43,  71 => 32,  67 => 32,  63 => 29,  59 => 26,  38 => 21,  87 => 28,  94 => 40,  89 => 39,  85 => 36,  75 => 30,  68 => 28,  56 => 25,  201 => 92,  196 => 90,  183 => 82,  171 => 44,  166 => 54,  163 => 58,  158 => 67,  156 => 38,  151 => 63,  142 => 30,  138 => 54,  136 => 56,  121 => 51,  117 => 44,  105 => 44,  91 => 39,  62 => 28,  49 => 23,  93 => 39,  88 => 38,  78 => 35,  44 => 18,  31 => 15,  27 => 4,  25 => 4,  21 => 11,  46 => 22,  26 => 14,  28 => 14,  24 => 12,  19 => 11,  79 => 34,  72 => 29,  69 => 31,  47 => 19,  40 => 17,  37 => 16,  22 => 12,  246 => 90,  157 => 56,  145 => 54,  139 => 45,  131 => 54,  123 => 49,  120 => 46,  115 => 47,  111 => 33,  108 => 45,  101 => 43,  98 => 42,  96 => 40,  83 => 36,  74 => 33,  66 => 30,  55 => 21,  52 => 22,  50 => 21,  43 => 21,  41 => 20,  35 => 20,  32 => 19,  29 => 15,  209 => 58,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 43,  164 => 59,  162 => 41,  154 => 58,  149 => 48,  147 => 58,  144 => 49,  141 => 48,  133 => 49,  130 => 43,  125 => 44,  122 => 42,  116 => 48,  112 => 105,  109 => 46,  106 => 36,  103 => 44,  99 => 42,  95 => 38,  92 => 27,  86 => 37,  82 => 34,  80 => 35,  73 => 34,  64 => 31,  60 => 28,  57 => 27,  54 => 25,  51 => 26,  48 => 21,  45 => 20,  42 => 19,  39 => 17,  36 => 16,  33 => 16,  30 => 13,);
    }
}
