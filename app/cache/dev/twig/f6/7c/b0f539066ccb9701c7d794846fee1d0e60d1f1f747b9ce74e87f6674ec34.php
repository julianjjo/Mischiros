<?php

/* IgaRssBundle:Rss:noticias.html.twig */
class __TwigTemplate_f67cb0f539066ccb9701c7d794846fee1d0e60d1f1f747b9ce74e87f6674ec34 extends Twig_Template
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
        echo "Noticias";
    }

    // line 5
    public function block_barradenavegacion($context, array $blocks = array())
    {
        // line 6
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a></li>
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("listarportipo", array("tipo" => 1));
        echo "\">Comprar</a></li>
    <li class=\"active\"><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("noticias");
        echo "\">Noticias</a></li>
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("contactenos");
        echo "\">Contactenos</a></li>
";
    }

    // line 12
    public function block_contenido($context, array $blocks = array())
    {
        // line 13
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            echo "\t\t
\t\t<br><br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10 col-md-offset-1\">\t\t\t\t\t\t
\t\t            <strong><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "link"), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title"), "html", null, true);
            echo "</a></strong>
\t\t            <div>";
            // line 18
            echo $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "description");
            echo "</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "IgaRssBundle:Rss:noticias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  71 => 17,  61 => 13,  58 => 12,  52 => 9,  48 => 8,  44 => 7,  39 => 6,  36 => 5,  30 => 3,);
    }
}
