<?php

/* MischirosTiendaBundle:Ropa:mostrar.html.twig */
class __TwigTemplate_4a73301310c2a60714cfb5306d0b642f99e9049903ee1a0f14d641706182040b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'estilos' => array($this, 'block_estilos'),
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
    public function block_estilos($context, array $blocks = array())
    {
        // line 4
        echo "\t<style type=\"text/css\">
\t\t.bordes{
\t\t\tborder-style:solid;
\t\t\tborder-width:5px;
\t\t}
\t</style>
";
    }

    // line 12
    public function block_titulo($context, array $blocks = array())
    {
        echo "Detalle";
    }

    // line 14
    public function block_barradenavegacion($context, array $blocks = array())
    {
        // line 15
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a></li>
    <li class=\"active\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("listarportipo", array("tipo" => 1));
        echo "\">Comprar</a></li>
    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("contactenos");
        echo "\">Contactenos</a></li>
";
    }

    // line 20
    public function block_contenido($context, array $blocks = array())
    {
        // line 21
        echo "\t<br><br>
\t<div class=\"row\">
\t\t<div class=\"col-md-4 col-md-offset-2\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-body\">\t\t\t\t   
\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "media"), "media", array());
        // line 27
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Precio:</td>
\t\t\t\t\t\t<td>\$";
        // line 41
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "precioVenta"), 0, ",", "."), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Cantidad:</td>
\t\t\t\t\t\t<td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "cantidadDisponible"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Tipo:</td>
\t\t\t\t\t\t<td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "Tipo"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Color:</td>
\t\t\t\t\t\t<td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prenda"]) ? $context["prenda"] : $this->getContext($context, "prenda")), "Tipo"), "color"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<form role=\"form\" action=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("comprar");
        echo "\" method=\"get\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t</form>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "MischirosTiendaBundle:Ropa:mostrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 59,  130 => 58,  124 => 57,  117 => 53,  110 => 49,  103 => 45,  96 => 41,  80 => 27,  78 => 26,  71 => 21,  68 => 20,  62 => 17,  58 => 16,  53 => 15,  50 => 14,  44 => 12,  34 => 4,  31 => 3,);
    }
}
