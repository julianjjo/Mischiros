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
        echo $this->env->getExtension('routing')->getPath("noticias");
        echo "\">Noticias</a></li>
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("contactenos");
        echo "\">Contactenos</a></li>
";
    }

    // line 13
    public function block_menulateral($context, array $blocks = array())
    {
        // line 14
        echo "\t<ul class=\"nav nav-pills nav-stacked\">
\t\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipos"]) ? $context["tipos"] : $this->getContext($context, "tipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
            echo "\t\t\t\t\t\t
\t\t\t<li><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listarportipo", array("tipo" => $this->getAttribute((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")), "id"))), "html", null, true);
            echo "\">\t\t\t
\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")), "descripcion"), "html", null, true);
            echo " 
\t\t\t\t<span class=\"badge\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")), "cantidad"), "html", null, true);
            echo "</span></a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t</ul>
";
    }

    // line 24
    public function block_paginador($context, array $blocks = array())
    {
        // line 25
        echo "\t";
        $context["cantidad"] = 0;
        // line 26
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cantidades"]) ? $context["cantidades"] : $this->getContext($context, "cantidades")));
        foreach ($context['_seq'] as $context["_key"] => $context["cantida"]) {
            // line 27
            echo "\t\t";
            $context["cantidad"] = $this->getAttribute((isset($context["cantida"]) ? $context["cantida"] : $this->getContext($context, "cantida")), "cantidad");
            // line 28
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cantida'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 pull-right\">";
        // line 30
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["prendas"]) ? $context["prendas"] : $this->getContext($context, "prendas")), "Ordenar por Precio de venta", "p.precio_venta");
        echo "<br><br><br></div>
\t\t</div>\t\t
\t\t";
        // line 32
        if (((isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")) < 3)) {
            // line 33
            echo "\t\t\t<div class=\"row\">
\t\t\t";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prendas"]) ? $context["prendas"] : $this->getContext($context, "prendas")));
            foreach ($context['_seq'] as $context["_key"] => $context["prenda"]) {
                // line 35
                echo "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t    <div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">";
                // line 39
                echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "media"), "chica", array());
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-5\">\$";
                // line 44
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "precioVenta"), 0, ",", "."), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-7\"><a href=\"/comprar/mostrar/";
                // line 45
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
            // line 50
            echo "\t\t\t
\t\t\t</div>\t
\t\t";
        } else {
            // line 52
            echo "\t\t\t
\t\t\t<div class=\"row\">
\t\t\t";
            // line 54
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
                // line 55
                echo "\t\t\t\t";
                if (((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 3) == 0) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") >= 1))) {
                    // line 56
                    echo "\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t    <div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">";
                    // line 60
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "media"), "chica", array());
                    echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">\$";
                    // line 65
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "precioVenta"), 0, ",", "."), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\"><a href=\"/comprar/mostrar/";
                    // line 66
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
                    // line 74
                    echo "\t\t\t\t\t</div>
\t\t\t\t";
                } else {
                    // line 76
                    echo "\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t    <div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">";
                    // line 80
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "media"), "chica", array());
                    echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">\$";
                    // line 85
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "precioVenta"), 0, ",", "."), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\"><a href=\"/comprar/mostrar/";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "id"), "html", null, true);
                    echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\"></span> Detalle</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 92
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
        // line 93
        echo "\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 pull-right\">";
        // line 95
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
        return array (  270 => 95,  266 => 93,  249 => 92,  240 => 86,  236 => 85,  228 => 80,  222 => 76,  218 => 74,  207 => 66,  203 => 65,  195 => 60,  189 => 56,  186 => 55,  169 => 54,  165 => 52,  160 => 50,  148 => 45,  144 => 44,  136 => 39,  130 => 35,  126 => 34,  123 => 33,  121 => 32,  116 => 30,  113 => 29,  107 => 28,  104 => 27,  99 => 26,  96 => 25,  93 => 24,  88 => 21,  79 => 18,  75 => 17,  71 => 16,  65 => 15,  62 => 14,  59 => 13,  53 => 9,  49 => 8,  45 => 7,  40 => 6,  37 => 5,  31 => 3,);
    }
}
