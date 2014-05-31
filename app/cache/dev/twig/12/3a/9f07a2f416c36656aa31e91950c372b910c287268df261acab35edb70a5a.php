<?php

/* SonataBlockBundle:Block:block_core_rss.html.twig */
class __TwigTemplate_123a9f07a2f416c36656aa31e91950c372b910c287268df261acab35edb70a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3 class=\"sonata-feed-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title"), "html", null, true);
        echo "</h3>

    <div class=\"sonata-feeds-container\">
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 18
            echo "            <div>
                <strong><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "link"), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title"), "html", null, true);
            echo "</a></strong>
                <div>";
            // line 20
            echo $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "description");
            echo "</div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "                No feeds available.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  41 => 18,  270 => 4,  268 => 3,  264 => 2,  253 => 1,  243 => 83,  233 => 81,  221 => 79,  212 => 74,  210 => 73,  208 => 72,  206 => 71,  202 => 68,  198 => 66,  196 => 65,  192 => 64,  189 => 61,  187 => 60,  185 => 59,  182 => 57,  180 => 56,  177 => 54,  175 => 53,  172 => 51,  169 => 49,  167 => 48,  165 => 47,  163 => 45,  160 => 44,  156 => 41,  154 => 40,  120 => 36,  113 => 31,  90 => 20,  65 => 83,  50 => 44,  47 => 43,  40 => 20,  32 => 14,  30 => 9,  27 => 8,  129 => 59,  117 => 34,  107 => 52,  105 => 51,  101 => 49,  97 => 47,  84 => 16,  82 => 39,  79 => 37,  77 => 36,  74 => 11,  69 => 9,  64 => 28,  62 => 82,  55 => 79,  52 => 20,  44 => 19,  36 => 17,  34 => 15,  29 => 14,  26 => 13,  118 => 39,  111 => 30,  108 => 28,  102 => 27,  95 => 22,  92 => 22,  89 => 43,  86 => 17,  83 => 19,  80 => 18,  70 => 39,  66 => 29,  61 => 35,  59 => 32,  46 => 18,  39 => 17,  33 => 13,  149 => 48,  143 => 47,  137 => 37,  134 => 44,  130 => 43,  122 => 42,  119 => 41,  115 => 33,  109 => 53,  103 => 50,  100 => 23,  96 => 34,  93 => 21,  91 => 44,  87 => 30,  81 => 15,  75 => 27,  72 => 10,  68 => 25,  60 => 23,  57 => 80,  51 => 27,  48 => 26,  45 => 28,  42 => 27,  37 => 19,  35 => 15,  31 => 14,  28 => 14,);
    }
}
