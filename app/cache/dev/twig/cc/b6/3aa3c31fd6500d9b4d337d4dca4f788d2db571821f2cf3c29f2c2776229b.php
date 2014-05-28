<?php

/* MischirosTiendaBundle:Ropa:contacto.html.twig */
class __TwigTemplate_ccb63aa3c31fd6500d9b4d337d4dca4f788d2db571821f2cf3c29f2c2776229b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
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
    public function block_barradenavegacion($context, array $blocks = array())
    {
        // line 4
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a></li>
    <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("listarportipo", array("tipo" => 1));
        echo "\">Comprar</a></li>
    <li class=\"active\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("contactenos");
        echo "\">Contactenos</a></li>
";
    }

    // line 9
    public function block_contenido($context, array $blocks = array())
    {
        echo "\t
\t<br>
\t<div class=\"row\">
\t\t<div class=\"col-md-8 col-md-offset-2\">\t\t\t\t
\t\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t\t</div>
\t</div>\t
";
    }

    public function getTemplateName()
    {
        return "MischirosTiendaBundle:Ropa:contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  47 => 9,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
