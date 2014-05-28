<?php

/* MischirosTiendaBundle:Ropa:listar.html.twig */
class __TwigTemplate_6bbafc4f65b354e0b5b26109a3e8932045cf66efba813d870cd9469af4f0b0f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MischirosTiendaBundle::listarbase.html.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'barradenavegacion' => array($this, 'block_barradenavegacion'),
            'menulateral' => array($this, 'block_menulateral'),
            'paginador' => array($this, 'block_paginador'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MischirosTiendaBundle::listarbase.html.twig";
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
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a></li>
    <li class=\"active\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("listarportipo", array("tipo" => 1));
        echo "\">Comprar</a></li>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("contactenos");
        echo "\">Contactenos</a></li>
";
    }

    // line 12
    public function block_menulateral($context, array $blocks = array())
    {
        // line 13
        echo "\t<ul class=\"nav nav-pills nav-stacked\">
\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipos"]) ? $context["tipos"] : $this->getContext($context, "tipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
            echo "\t\t\t\t\t\t
\t\t\t<li><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listarportipo", array("tipo" => $this->getAttribute((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")), "id"))), "html", null, true);
            echo "\">\t\t\t
\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")), "descripcion"), "html", null, true);
            echo " 
\t\t\t\t<span class=\"badge\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")), "cantidad"), "html", null, true);
            echo "</span></a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t</ul>
";
    }

    // line 23
    public function block_paginador($context, array $blocks = array())
    {
        // line 24
        echo "\t";
        $context["cantidad"] = 0;
        // line 25
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cantidades"]) ? $context["cantidades"] : $this->getContext($context, "cantidades")));
        foreach ($context['_seq'] as $context["_key"] => $context["cantida"]) {
            // line 26
            echo "\t\t";
            $context["cantidad"] = $this->getAttribute((isset($context["cantida"]) ? $context["cantida"] : $this->getContext($context, "cantida")), "cantidad");
            // line 27
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cantida'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 pull-right\">";
        // line 29
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["prendas"]) ? $context["prendas"] : $this->getContext($context, "prendas")), "Ordenar por Precio de venta", "p.precio_venta");
        echo "<br><br><br></div>
\t\t</div>\t\t
\t\t";
        // line 31
        if (((isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")) < 3)) {
            // line 32
            echo "\t\t\t<div class=\"row\">
\t\t\t";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prendas"]) ? $context["prendas"] : $this->getContext($context, "prendas")));
            foreach ($context['_seq'] as $context["_key"] => $context["prenda"]) {
                // line 34
                echo "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t    <div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">";
                // line 38
                echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "media"), "chica", array());
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-5\">\$";
                // line 43
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "precioVenta"), 0, ",", "."), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-7\"><a href=\"/comprar/mostrar/";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "id"), "html", null, true);
                echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\"></span> Detalle</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prenda'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t
\t\t\t</div>\t
\t\t";
        } else {
            // line 51
            echo "\t\t\t
\t\t\t<div class=\"row\">
\t\t\t";
            // line 53
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
                // line 54
                echo "\t\t\t\t";
                if (((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 3) == 0) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") >= 1))) {
                    // line 55
                    echo "\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t    <div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">";
                    // line 59
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "media"), "chica", array());
                    echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">\$";
                    // line 64
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "precioVenta"), 0, ",", "."), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\"><a href=\"/comprar/mostrar/";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "id"), "html", null, true);
                    echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\"></span> Detalle</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t";
                } elseif ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) {
                    // line 73
                    echo "\t\t\t\t\t</div>
\t\t\t\t";
                } else {
                    // line 75
                    echo "\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t    <div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">";
                    // line 79
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "media"), "chica", array());
                    echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">\$";
                    // line 84
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "precioVenta"), 0, ",", "."), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\"><a href=\"/comprar/mostrar/";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "id"), "html", null, true);
                    echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\"></span> Detalle</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 91
                echo "\t\t\t";
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
            echo "\t\t
\t\t";
        }
        // line 92
        echo "\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 pull-right\">";
        // line 94
        echo $this->env->getExtension('knp_pagination')->render((isset($context["prendas"]) ? $context["prendas"] : $this->getContext($context, "prendas")));
        echo "</div>
\t\t</div>\t
";
    }

    public function getTemplateName()
    {
        return "MischirosTiendaBundle:Ropa:listar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 94,  262 => 92,  245 => 91,  236 => 85,  232 => 84,  224 => 79,  218 => 75,  214 => 73,  203 => 65,  199 => 64,  191 => 59,  185 => 55,  182 => 54,  165 => 53,  161 => 51,  156 => 49,  144 => 44,  140 => 43,  132 => 38,  126 => 34,  122 => 33,  119 => 32,  117 => 31,  112 => 29,  109 => 28,  103 => 27,  100 => 26,  95 => 25,  92 => 24,  89 => 23,  84 => 20,  75 => 17,  71 => 16,  67 => 15,  61 => 14,  58 => 13,  55 => 12,  49 => 8,  45 => 7,  40 => 6,  37 => 5,  31 => 3,);
    }
}
