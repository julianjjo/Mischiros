<?php

/* FOSCommentBundle:Thread:comment_new.html.twig */
class __TwigTemplate_424ee10c5b386aa7440981ef003cdb650ee1f04f016c63cfe93c2e50db4c9925 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        $this->env->loadTemplate("FOSCommentBundle:Thread:comment_new_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  21 => 2,  19 => 11,);
    }
}
