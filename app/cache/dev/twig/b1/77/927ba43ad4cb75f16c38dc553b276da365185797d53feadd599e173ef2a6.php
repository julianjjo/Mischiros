<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_b177927ba43ad4cb75f16c38dc553b276da365185797d53feadd599e173ef2a6 extends Twig_Template
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
        echo "<a";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  59 => 11,  54 => 8,  47 => 12,  41 => 9,  39 => 8,  33 => 4,  30 => 3,  266 => 94,  262 => 92,  245 => 91,  236 => 85,  232 => 84,  224 => 79,  218 => 75,  214 => 73,  203 => 65,  199 => 64,  191 => 59,  185 => 55,  182 => 54,  165 => 53,  161 => 51,  156 => 49,  144 => 44,  140 => 43,  132 => 38,  126 => 34,  122 => 33,  119 => 32,  117 => 31,  112 => 29,  109 => 28,  103 => 27,  100 => 26,  95 => 25,  92 => 24,  89 => 23,  84 => 20,  75 => 17,  71 => 16,  67 => 15,  61 => 14,  58 => 13,  55 => 12,  49 => 8,  45 => 11,  40 => 6,  37 => 5,  31 => 3,);
    }
}
