<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_0e6201083a63b3653f8b65c6c79faeeb94dd27a23eefa7456b7eb7c6e554fba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 75,  148 => 68,  113 => 42,  100 => 35,  81 => 28,  53 => 13,  161 => 53,  150 => 6,  137 => 60,  134 => 55,  129 => 53,  118 => 47,  114 => 46,  34 => 5,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 32,  63 => 17,  59 => 14,  38 => 17,  87 => 30,  94 => 33,  89 => 20,  85 => 25,  75 => 26,  68 => 14,  56 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 54,  163 => 62,  158 => 67,  156 => 7,  151 => 63,  142 => 58,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 32,  62 => 26,  49 => 18,  93 => 38,  88 => 19,  78 => 27,  44 => 12,  31 => 4,  27 => 4,  25 => 3,  21 => 2,  46 => 17,  26 => 2,  28 => 3,  24 => 6,  19 => 1,  79 => 18,  72 => 16,  69 => 80,  47 => 9,  40 => 83,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 54,  123 => 49,  120 => 40,  115 => 43,  111 => 45,  108 => 36,  101 => 32,  98 => 31,  96 => 39,  83 => 25,  74 => 14,  66 => 14,  55 => 11,  52 => 21,  50 => 8,  43 => 8,  41 => 10,  35 => 4,  32 => 3,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 25,  109 => 23,  106 => 36,  103 => 43,  99 => 31,  95 => 28,  92 => 20,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 31,  60 => 12,  57 => 11,  54 => 21,  51 => 14,  48 => 11,  45 => 5,  42 => 8,  39 => 6,  36 => 8,  33 => 6,  30 => 1,);
    }
}
