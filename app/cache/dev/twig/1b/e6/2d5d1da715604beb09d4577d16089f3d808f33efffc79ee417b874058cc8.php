<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_1be62d5d1da715604beb09d4577d16089f3d808f33efffc79ee417b874058cc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'contenido' => array($this, 'block_contenido'),
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_titulo($context, array $blocks = array())
    {
        echo "Perfil";
    }

    // line 15
    public function block_contenido($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
            ";
        // line 18
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 26
        echo "
            <h2>";
        // line 27
        $this->displayBlock('sonata_profile_title', $context, $blocks);
        echo "</h2>

            <div class=\"sonata-user-show row row-fluid\">

                <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
                    ";
        // line 32
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 35
        echo "                </div>

                <div class=\"span10 col-lg-10\">
                    ";
        // line 38
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        echo "  
                    ";
        // line 39
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 40
        echo "                </div>

            </div>
    </div>
";
    }

    // line 18
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        // line 19
        echo "                ";
        if ((!array_key_exists("breadcrumb_context", $context))) {
            // line 20
            echo "                    ";
            $context["breadcrumb_context"] = "user_index";
            // line 21
            echo "                ";
        }
        // line 22
        echo "                <div class=\"row-fluid clearfix\">
                    ";
        // line 23
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => (isset($context["breadcrumb_context"]) ? $context["breadcrumb_context"] : $this->getContext($context, "breadcrumb_context")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "requestUri"))));
        echo "
                </div>
            ";
    }

    // line 27
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
    }

    // line 32
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        // line 33
        echo "                        ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "requestUri"))));
        echo "
                    ";
    }

    // line 39
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  111 => 33,  108 => 32,  102 => 27,  95 => 23,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  80 => 18,  70 => 39,  66 => 38,  61 => 35,  59 => 32,  46 => 18,  39 => 15,  33 => 13,  149 => 48,  143 => 47,  137 => 45,  134 => 44,  130 => 43,  122 => 42,  119 => 41,  115 => 39,  109 => 38,  103 => 36,  100 => 35,  96 => 34,  93 => 33,  91 => 32,  87 => 30,  81 => 29,  75 => 27,  72 => 40,  68 => 25,  60 => 24,  57 => 23,  51 => 27,  48 => 26,  45 => 20,  42 => 16,  37 => 18,  35 => 17,  31 => 15,  28 => 14,);
    }
}
