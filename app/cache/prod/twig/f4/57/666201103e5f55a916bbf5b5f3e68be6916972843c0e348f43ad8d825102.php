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
    public function block_contenido($context, array $blocks = array())
    {
        // line 9
        echo "\t<table>
\t<tr>
\t";
        // line 12
        echo "\t    <th";
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "isSorted", array(0 => "p.precio_venta"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : null), "Precio de venta", "p.precio_venta");
        echo "</th>
\t</tr>

\t";
        // line 16
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["prenda"]) {
            // line 17
            echo "\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 producto\"></div>
\t\t\t\t\t<div class=\"col-md-4 producto\"></div>
\t\t\t\t\t<div class=\"col-md-4 producto\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prenda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t</table>
\t";
        // line 27
        echo "\t";
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
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
        return array (  74 => 27,  71 => 25,  58 => 17,  53 => 16,  42 => 12,  38 => 9,  35 => 5,  29 => 3,);
    }
}
