<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_0454c9c94a79b7df591f152e0a145947474ffc8278138451d641babf5a791d7f extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-10 col-md-offset-1\">
        <div class=\"panel panel-success\">
            <div class=\"panel-heading\">
                <h2 class=\"panel-title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_registration", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register form-horizontal\">

                    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

                    <div class=\"form-actions\">
                        <input type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success pull-right\" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 13,  38 => 10,  25 => 5,  19 => 1,  31 => 8,  28 => 3,);
    }
}
