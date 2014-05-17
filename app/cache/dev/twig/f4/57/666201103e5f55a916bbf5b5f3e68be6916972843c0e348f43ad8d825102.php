<?php

/* MischirosTiendaBundle:Ropa:comprar.html.twig */
class __TwigTemplate_f457666201103e5f55a916bbf5b5f3e68be6916972843c0e348f43ad8d825102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'barradenavegacion' => array($this, 'block_barradenavegacion'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "Comprar";
    }

    // line 5
    public function block_barradenavegacion($context, array $blocks = array())
    {
        // line 6
        echo "    <li><a href=\"/\">Home</a></li>
    <li class=\"active\"><a href=\"/comprar/listar\">Comprar</a></li>
    <li><a href=\"#\">Contactenos</a></li>
";
    }

    // line 11
    public function block_contenido($context, array $blocks = array())
    {
        // line 15
        echo "
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2 col-md-offset-1\">
\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t<span class=\"badge\">14</span>
\t\t\t\t\t\t<a href=\"#\">Hombre</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t<span class=\"badge\">2</span>
\t\t\t\t\t\t<a href=\"#\">Mujer</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t<span class=\"badge\">1</span>
\t\t\t\t\t\t<a href=\"#\">Niñ</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<br>
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 pull-right\">";
        // line 37
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["prendas"]) ? $context["prendas"] : $this->getContext($context, "prendas")), "Ordenar por Precio de venta", "p.precio_venta");
        echo "<br><br><br></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 40
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
            // line 41
            echo "\t\t\t\t\t";
            if (((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 3) == 0) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") > 1))) {
                // line 42
                echo "\t\t\t\t\t\t<div class=\"col-md-4 producto\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">";
                // line 44
                echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "media"), "small", array());
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">\$";
                // line 47
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "precioVenta"), 0, ",", "."), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\"><a href=\"#\" class=\"btn btn-primary\">Comprar</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            } elseif ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) {
                // line 54
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } else {
                // line 56
                echo "\t\t\t\t\t\t<div class=\"col-md-4 producto\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">";
                // line 58
                echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "media"), "small", array());
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">\$";
                // line 61
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "precioVenta"), 0, ",", "."), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\"><a href=\"#\" class=\"btn btn-primary\">Comprar</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 66
            echo "
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
        // line 67
        echo "\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 pull-right\">";
        // line 69
        echo $this->env->getExtension('knp_pagination')->render((isset($context["prendas"]) ? $context["prendas"] : $this->getContext($context, "prendas")));
        echo "</div>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "MischirosTiendaBundle:Ropa:comprar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 69,  156 => 67,  141 => 66,  133 => 61,  127 => 58,  123 => 56,  119 => 54,  109 => 47,  103 => 44,  99 => 42,  96 => 41,  79 => 40,  73 => 37,  49 => 15,  46 => 11,  39 => 6,  36 => 5,  30 => 3,);
    }
}
