<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_23693a793138730dfd6aaf501602e0082d3ec5002f5fca368fef29d504c5348b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 19
    public function block_tab_menu($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 21
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
            echo "
    ";
        }
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "
    Redefine the content block in your action template

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 26,  56 => 25,  48 => 21,  45 => 20,  42 => 19,  36 => 16,  31 => 15,  28 => 14,  251 => 105,  241 => 101,  233 => 98,  229 => 96,  225 => 95,  218 => 91,  212 => 88,  205 => 84,  198 => 80,  194 => 79,  184 => 74,  177 => 72,  173 => 71,  168 => 69,  163 => 66,  158 => 64,  153 => 63,  147 => 61,  145 => 60,  140 => 58,  134 => 55,  130 => 54,  124 => 51,  120 => 50,  114 => 47,  110 => 46,  104 => 43,  100 => 42,  94 => 39,  90 => 38,  84 => 35,  80 => 34,  77 => 33,  69 => 30,  65 => 28,  63 => 27,  57 => 24,  53 => 22,  51 => 21,  44 => 19,  38 => 17,  35 => 16,  29 => 14,);
    }
}
