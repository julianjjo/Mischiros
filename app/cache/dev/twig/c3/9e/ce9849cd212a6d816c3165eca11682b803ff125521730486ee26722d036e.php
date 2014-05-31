<?php

/* MischirosTiendaBundle:Default:foro.html.twig */
class __TwigTemplate_c39ece9849cd212a6d816c3165eca11682b803ff125521730486ee26722d036e extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title></title>
\t<link rel=\"stylesheet\" href=\"\">
</head>
<body>\t
\t";
        // line 10
        $this->env->loadTemplate("FOSCommentBundle:Thread:async.html.twig")->display(array_merge($context, array("id" => "ropa")));
        // line 11
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "MischirosTiendaBundle:Default:foro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  30 => 10,  19 => 1,);
    }
}
