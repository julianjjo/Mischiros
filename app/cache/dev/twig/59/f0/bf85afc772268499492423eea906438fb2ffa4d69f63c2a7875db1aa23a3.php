<?php

/* SonataCoreBundle:FlashMessage:render.html.twig */
class __TwigTemplate_59f0bf85afc772268499492423eea906438fb2ffa4d69f63c2a7875db1aa23a3 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sonata_core_flashmessage')->getFlashMessagesTypes());
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 12
            echo "    ";
            $context["domain"] = ((array_key_exists("domain", $context)) ? ((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))) : (null));
            // line 13
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sonata_core_flashmessage')->getFlashMessages((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_core_status')->statusClass((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))), "html", null, true);
                echo " alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            ";
                // line 16
                echo (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"));
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:FlashMessage:render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 12,  19 => 11,  270 => 4,  268 => 3,  264 => 2,  253 => 1,  243 => 83,  233 => 81,  221 => 79,  212 => 74,  210 => 73,  208 => 72,  206 => 71,  202 => 68,  198 => 66,  196 => 65,  192 => 64,  189 => 61,  187 => 60,  185 => 59,  182 => 57,  180 => 56,  177 => 54,  175 => 53,  172 => 51,  169 => 49,  167 => 48,  165 => 47,  163 => 45,  160 => 44,  156 => 41,  154 => 40,  120 => 36,  113 => 31,  90 => 20,  65 => 83,  50 => 44,  47 => 43,  40 => 20,  30 => 9,  129 => 59,  117 => 34,  107 => 52,  105 => 51,  101 => 49,  97 => 47,  84 => 16,  82 => 39,  79 => 37,  77 => 36,  74 => 11,  69 => 9,  64 => 28,  62 => 82,  55 => 79,  52 => 78,  44 => 18,  36 => 16,  34 => 15,  32 => 14,  27 => 8,  25 => 12,  20 => 11,  29 => 15,  26 => 13,  118 => 39,  111 => 30,  108 => 28,  102 => 27,  95 => 22,  92 => 22,  89 => 43,  86 => 17,  83 => 19,  80 => 18,  70 => 39,  66 => 29,  61 => 35,  59 => 32,  46 => 18,  39 => 17,  33 => 13,  149 => 48,  143 => 47,  137 => 37,  134 => 44,  130 => 43,  122 => 42,  119 => 41,  115 => 33,  109 => 53,  103 => 50,  100 => 23,  96 => 34,  93 => 21,  91 => 44,  87 => 30,  81 => 15,  75 => 27,  72 => 10,  68 => 25,  60 => 81,  57 => 80,  51 => 27,  48 => 26,  45 => 28,  42 => 27,  37 => 16,  35 => 15,  31 => 14,  28 => 14,);
    }
}
