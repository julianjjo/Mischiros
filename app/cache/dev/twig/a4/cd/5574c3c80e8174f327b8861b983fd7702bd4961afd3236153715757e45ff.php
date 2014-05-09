<?php

/* FOSUserBundle::layoutcambiarcontra.html.twig */
class __TwigTemplate_a4cd5574c3c80e8174f327b8861b983fd7702bd4961afd3236153715757e45ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layoutcambiarcontra.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  29 => 2,  25 => 4,  23 => 2,  20 => 1,  71 => 37,  69 => 36,  63 => 33,  52 => 25,  47 => 23,  43 => 22,  37 => 19,  31 => 4,  28 => 3,);
    }
}
