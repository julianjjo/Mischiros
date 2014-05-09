<?php

/* ::base.html.twig */
class __TwigTemplate_bb2f68f912e30216a3549a709bb9914b0d8f73518287807f9066e06445243905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'estilos' => array($this, 'block_estilos'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('estilos', $context, $blocks);
        // line 8
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 10
        $this->env->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig")->display($context);
        // line 11
        echo "    </head>
    <body>
        <nav class=\"navbar navbar-inverse\" role=\"navigation\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/\">Mischiros.com</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"/\">Home</a></li>
                        <li><a href=\"#\">Comprar</a></li>
                        <li><a href=\"#\">Contactenos</a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 34
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 35
            echo "                            <li>
                                <p class=\"navbar-text\">Bienvenido <a href=\"/perfil\" class=\"navbar-link\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</a></p>
                            </li>
                            <form class=\"navbar-form navbar-left\" role=\"form\"> 
                                <a href=\"/perfil\" class=\"btn btn-primary\">Perfil</a>
                                <a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                            </form>
                        ";
        } else {
            // line 42
            echo "                            
                            <a href=\"/login\" class=\"btn btn-primary navbar-btn\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                            <a href=\"/registro\" class=\"btn btn-primary navbar-btn\">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 46
        echo "                    </ul>
                </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        ";
        // line 50
        $this->displayBlock('contenido', $context, $blocks);
        // line 51
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "        <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <!-- Include all JavaScripts, compiled by Assetic -->
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
    }

    // line 6
    public function block_titulo($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_estilos($context, array $blocks = array())
    {
    }

    // line 50
    public function block_contenido($context, array $blocks = array())
    {
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 51,  142 => 50,  137 => 7,  131 => 6,  123 => 55,  118 => 53,  115 => 52,  112 => 51,  110 => 50,  104 => 46,  99 => 44,  95 => 43,  92 => 42,  84 => 40,  77 => 36,  74 => 35,  72 => 34,  47 => 11,  45 => 10,  41 => 9,  36 => 8,  34 => 7,  30 => 6,  23 => 1,  38 => 6,  35 => 5,  29 => 3,);
    }
}
