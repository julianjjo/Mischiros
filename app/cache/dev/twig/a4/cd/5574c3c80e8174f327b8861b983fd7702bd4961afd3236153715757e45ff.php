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
        echo "<div class=\"row\">
  <div class=\"col-md-10 col-md-offset-1\">
    ";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 5
        echo "  </div>
</div>";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layoutcambiarcontra.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  26 => 5,  24 => 3,  20 => 1,  75 => 41,  73 => 40,  67 => 37,  54 => 27,  49 => 25,  45 => 24,  37 => 19,  31 => 3,  28 => 3,);
    }
}
