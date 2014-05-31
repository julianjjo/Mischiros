<?php

/* FOSCommentBundle:Thread:comment_new_content.html.twig */
class __TwigTemplate_eb0148a21a9568409411b561dd2b70eb652db4a0c58e08c57787092394b2db69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_comment_comment_form_holder' => array($this, 'block_fos_comment_comment_form_holder'),
            'fos_comment_form_title' => array($this, 'block_fos_comment_form_title'),
            'fos_comment_comment_new_form' => array($this, 'block_fos_comment_comment_new_form'),
            'fos_comment_form_fields' => array($this, 'block_fos_comment_form_fields'),
            'fos_comment_form_submit' => array($this, 'block_fos_comment_form_submit'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $context["first"] = ((array_key_exists("first", $context)) ? (_twig_default_filter((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), false)) : (false));
        // line 13
        echo "
";
        // line 14
        $context["url_parameters"] = array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        // line 15
        if ((!(null === (isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent"))))) {
            // line 16
            echo "    ";
            $context["url_parameters"] = twig_array_merge((isset($context["url_parameters"]) ? $context["url_parameters"] : $this->getContext($context, "url_parameters")), array("parentId" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id")));
        }
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('fos_comment_comment_form_holder', $context, $blocks);
    }

    public function block_fos_comment_comment_form_holder($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"fos_comment_comment_form_holder\">
        ";
        // line 21
        $this->displayBlock('fos_comment_form_title', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('fos_comment_comment_new_form', $context, $blocks);
        // line 55
        echo "
    </div>
";
    }

    // line 21
    public function block_fos_comment_form_title($context, array $blocks = array())
    {
        // line 22
        echo "            ";
        if ((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))) {
            // line 23
            echo "                <h3>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_headline_first", array(), "FOSCommentBundle");
            echo "</h3>
            ";
        } elseif ((!(null === (isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent"))))) {
            // line 25
            echo "                <h3>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_reply_reply_to", array("%name%" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "authorName")), "FOSCommentBundle");
            echo "</h3>
            ";
        } else {
            // line 27
            echo "                <h3>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_headline", array(), "FOSCommentBundle");
            echo "</h3>
            ";
        }
        // line 29
        echo "        ";
    }

    // line 31
    public function block_fos_comment_comment_new_form($context, array $blocks = array())
    {
        // line 32
        echo "            <form class=\"fos_comment_comment_new_form\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_post_thread_comments", (isset($context["url_parameters"]) ? $context["url_parameters"] : $this->getContext($context, "url_parameters"))), "html", null, true);
        echo "\" data-parent=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "id"))) : ("")), "html", null, true);
        echo "\" method=\"POST\">

                ";
        // line 34
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 43
        echo "
                <div class=\"fos_comment_submit\">
                    ";
        // line 45
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 51
        echo "                </div>

            </form>
        ";
    }

    // line 34
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        // line 35
        echo "                    <div class=\"fos_comment_form_errors\">
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'errors');
        echo "
                    </div>
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'widget');
        echo "

                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                ";
    }

    // line 45
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        // line 46
        echo "                        ";
        if ((!(null === (isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent"))))) {
            // line 47
            echo "                            <input type=\"button\" value=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_reply_cancel", array(), "FOSCommentBundle");
            echo "\" class=\"fos_comment_comment_reply_cancel\" />
                        ";
        }
        // line 49
        echo "                        <input type=\"submit\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_submit", array(), "FOSCommentBundle");
        echo "\" />
                    ";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 49,  151 => 47,  148 => 46,  145 => 45,  139 => 41,  134 => 39,  129 => 37,  125 => 36,  122 => 35,  119 => 34,  112 => 51,  110 => 45,  106 => 43,  104 => 34,  96 => 32,  93 => 31,  89 => 29,  83 => 27,  77 => 25,  71 => 23,  68 => 22,  65 => 21,  59 => 55,  57 => 31,  54 => 30,  52 => 21,  49 => 20,  43 => 19,  40 => 18,  36 => 16,  34 => 15,  32 => 14,  29 => 13,  27 => 12,  24 => 11,  22 => 12,  21 => 2,  19 => 11,);
    }
}
