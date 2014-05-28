<?php

/* SonataMediaBundle:Provider:view_image.html.twig */
class __TwigTemplate_b32e69f4ef839f798f937da7f84e60980cad0d1d8acc1cbbd49ae65c125854e1 extends Twig_Template
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
        // line 11
        echo "
<img ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " />
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,  186 => 56,  181 => 55,  175 => 35,  171 => 34,  166 => 33,  163 => 32,  158 => 7,  152 => 6,  144 => 60,  139 => 58,  136 => 57,  133 => 56,  131 => 55,  125 => 51,  120 => 49,  116 => 48,  113 => 47,  105 => 45,  95 => 40,  89 => 37,  87 => 32,  67 => 14,  65 => 13,  61 => 12,  56 => 11,  42 => 9,  37 => 8,  31 => 6,  24 => 1,  123 => 41,  108 => 39,  101 => 36,  98 => 41,  96 => 34,  93 => 39,  86 => 29,  83 => 28,  81 => 27,  78 => 26,  75 => 25,  58 => 24,  38 => 6,  35 => 7,  29 => 3,);
    }
}
