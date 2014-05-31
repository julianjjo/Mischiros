<?php

/* SonataUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_6087b53f17f2e9fb1efcc43e1d8611a3d80b18b9757e94f40794a051c36f77e5 extends Twig_Template
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
        echo "

<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("sonata_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password form-horizontal\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <button type=\"submit\" class=\"btn btn-danger pull-right\"><i class=\"icon-lock icon-white glyphicon glyphicon-lock\"></i>&nbsp;";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  29 => 4,  23 => 3,  19 => 1,  34 => 4,  26 => 5,  24 => 3,  20 => 1,  75 => 41,  73 => 40,  67 => 37,  54 => 27,  49 => 25,  45 => 24,  37 => 19,  31 => 3,  28 => 3,);
    }
}
