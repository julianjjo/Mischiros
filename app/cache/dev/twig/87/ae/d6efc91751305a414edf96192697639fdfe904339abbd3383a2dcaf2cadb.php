<?php

/* MischirosTiendaBundle:Default:index.html.twig */
class __TwigTemplate_87aed6efc91751305a414edf96192697639fdfe904339abbd3383a2dcaf2cadb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "Bienvenido";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "\t<br><br>\t
\t<div class=\"row\">
\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t<h2 class=\"text-center\">Bienvenido a tu mejor tienda de ropa online de colombia</h2><br><br>\t\t\t\t
\t    </div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t<!-- Indicators -->
\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
\t\t\t\t</ol>

\t\t\t\t<!-- Wrapper for slides -->
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prendas"]) ? $context["prendas"] : $this->getContext($context, "prendas")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["prenda"]) {
            // line 25
            echo "\t\t\t\t\t  \t";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                // line 26
                echo "\t\t\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t      ";
                // line 27
                echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "media"), "media", array());
                // line 28
                echo "\t\t\t\t\t\t      <div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t<h3>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "Tipo"), "descripcion"), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t";
            } else {
                // line 33
                echo "\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t      ";
                // line 34
                echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "media"), "media", array());
                // line 35
                echo "\t\t\t\t\t\t      <div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t<h3>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "Tipo"), "descripcion"), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t  \t";
            }
            // line 39
            echo "\t\t\t\t    
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prenda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t\t</div>

\t\t\t\t<!-- Controls -->
\t\t\t\t<a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-left\"></span>
\t\t\t\t</a>
\t\t\t\t<a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-right\"></span>
\t\t\t\t</a>
\t\t\t</div>\t  
\t\t</div>
\t</div>
\t  
";
    }

    public function getTemplateName()
    {
        return "MischirosTiendaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 41,  108 => 39,  101 => 36,  98 => 35,  96 => 34,  93 => 33,  86 => 29,  83 => 28,  81 => 27,  78 => 26,  75 => 25,  58 => 24,  38 => 6,  35 => 5,  29 => 3,);
    }
}
