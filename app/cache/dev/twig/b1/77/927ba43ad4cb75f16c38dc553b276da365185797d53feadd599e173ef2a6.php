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
        return array (  19 => 1,  166 => 54,  161 => 53,  156 => 7,  150 => 6,  142 => 58,  137 => 56,  134 => 55,  131 => 54,  129 => 53,  123 => 49,  118 => 47,  114 => 46,  111 => 45,  103 => 43,  96 => 39,  93 => 38,  91 => 37,  66 => 14,  64 => 13,  60 => 12,  55 => 11,  36 => 8,  34 => 7,  30 => 6,  23 => 1,  112 => 25,  109 => 23,  92 => 20,  88 => 19,  81 => 18,  63 => 17,  53 => 13,  48 => 12,  41 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
