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
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e1507d7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1507d7_0") : $this->env->getExtension('assets')->getAssetUrl("css/bootstrap_1_bootstrap_1.css");
            // line 9
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\"/>
        ";
        } else {
            // asset "e1507d7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1507d7") : $this->env->getExtension('assets')->getAssetUrl("css/bootstrap_1.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mischirostienda/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 13
        $this->env->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig")->display($context);
        // line 14
        echo "    </head>
    <body>
        <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
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
                        <li><a href=\"/comprar/listar\">Comprar</a></li>
                        <li><a href=\"#\">Contactenos</a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 37
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 38
            echo "                            <li>
                                <p class=\"navbar-text\">Bienvenido <a href=\"/perfil\" class=\"navbar-link\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"), "html", null, true);
            echo "</a></p>
                            </li>
                            <form class=\"navbar-form navbar-left\" role=\"form\"> 
                                <a href=\"/perfil\" class=\"btn btn-primary\">Perfil</a>
                                <a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                            </form>
                        ";
        } else {
            // line 45
            echo "                            
                            <a href=\"/login\" class=\"btn btn-primary navbar-btn\">";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                            <a href=\"/registro\" class=\"btn btn-primary navbar-btn\">";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 49
        echo "                    </ul>
                </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        ";
        // line 53
        $this->displayBlock('contenido', $context, $blocks);
        // line 54
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "        <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <!-- Include all JavaScripts, compiled by Assetic -->
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
    }

    // line 6
    public function block_titulo($context, array $blocks = array())
    {
        echo "Mischiros.com la mejor ropa para ti";
    }

    // line 7
    public function block_estilos($context, array $blocks = array())
    {
    }

    // line 53
    public function block_contenido($context, array $blocks = array())
    {
    }

    // line 54
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
        return array (  166 => 54,  161 => 53,  156 => 7,  150 => 6,  142 => 58,  137 => 56,  134 => 55,  131 => 54,  129 => 53,  123 => 49,  118 => 47,  114 => 46,  111 => 45,  103 => 43,  96 => 39,  93 => 38,  91 => 37,  66 => 14,  64 => 13,  60 => 12,  55 => 11,  41 => 9,  36 => 8,  34 => 7,  30 => 6,  23 => 1,  38 => 6,  35 => 5,  29 => 3,);
    }
}
