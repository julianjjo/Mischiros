<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_a43cfad1f33eae6675ed806182dceadf9741712a7371a9ad37f05b3edea8b974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"editable\">
        <h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 5
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices"))) > 0)) {
            // line 8
            echo "    <div class=\"readonly\">
        <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 12
                echo "            <li>";
                echo twig_escape_filter($this->env, (isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  42 => 8,  40 => 7,  28 => 3,  26 => 2,  20 => 1,  786 => 238,  780 => 235,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  664 => 206,  661 => 205,  658 => 204,  652 => 200,  648 => 198,  646 => 197,  624 => 194,  598 => 191,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  581 => 185,  572 => 180,  568 => 178,  566 => 177,  563 => 176,  542 => 149,  539 => 148,  536 => 147,  523 => 167,  521 => 166,  518 => 165,  512 => 162,  483 => 156,  481 => 155,  478 => 154,  476 => 147,  467 => 146,  462 => 143,  456 => 140,  453 => 139,  450 => 138,  447 => 137,  441 => 136,  437 => 135,  430 => 134,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  413 => 128,  407 => 126,  404 => 125,  401 => 124,  398 => 123,  388 => 117,  385 => 116,  382 => 115,  374 => 112,  369 => 111,  363 => 109,  359 => 107,  353 => 103,  351 => 102,  348 => 101,  346 => 100,  338 => 99,  335 => 98,  329 => 96,  325 => 94,  308 => 89,  299 => 86,  294 => 85,  286 => 82,  267 => 74,  260 => 72,  255 => 71,  245 => 66,  208 => 57,  204 => 55,  198 => 53,  195 => 51,  193 => 50,  177 => 49,  172 => 46,  166 => 42,  164 => 41,  159 => 39,  143 => 38,  135 => 35,  130 => 33,  127 => 32,  124 => 31,  121 => 30,  118 => 29,  115 => 28,  107 => 25,  101 => 23,  89 => 18,  64 => 204,  56 => 184,  44 => 82,  39 => 69,  34 => 61,  31 => 4,  29 => 12,  295 => 142,  289 => 83,  283 => 138,  277 => 136,  272 => 134,  269 => 133,  248 => 116,  242 => 113,  230 => 106,  219 => 101,  192 => 88,  187 => 87,  185 => 86,  170 => 79,  153 => 72,  147 => 69,  144 => 68,  138 => 36,  132 => 34,  128 => 58,  120 => 56,  80 => 41,  75 => 39,  72 => 37,  70 => 33,  67 => 32,  35 => 5,  952 => 271,  949 => 270,  946 => 269,  942 => 302,  938 => 300,  932 => 297,  929 => 296,  927 => 295,  921 => 292,  913 => 291,  910 => 290,  908 => 289,  905 => 288,  899 => 286,  897 => 285,  894 => 284,  888 => 282,  886 => 281,  883 => 280,  877 => 278,  875 => 277,  872 => 276,  866 => 274,  864 => 273,  861 => 272,  859 => 269,  856 => 268,  853 => 267,  849 => 261,  844 => 258,  836 => 253,  830 => 249,  828 => 248,  824 => 246,  818 => 244,  816 => 243,  812 => 241,  806 => 238,  803 => 237,  801 => 236,  798 => 235,  795 => 234,  792 => 233,  787 => 262,  784 => 233,  781 => 232,  776 => 303,  774 => 267,  769 => 264,  767 => 232,  764 => 231,  761 => 230,  756 => 229,  753 => 228,  749 => 220,  745 => 218,  739 => 217,  734 => 214,  728 => 213,  716 => 211,  713 => 210,  709 => 209,  702 => 208,  696 => 207,  693 => 206,  690 => 205,  687 => 204,  682 => 203,  680 => 202,  673 => 199,  669 => 207,  665 => 196,  663 => 195,  660 => 194,  657 => 193,  650 => 192,  647 => 191,  644 => 190,  641 => 196,  635 => 188,  632 => 187,  629 => 186,  626 => 184,  619 => 183,  616 => 182,  610 => 181,  607 => 193,  603 => 192,  600 => 178,  597 => 177,  594 => 176,  588 => 175,  584 => 186,  570 => 164,  564 => 162,  561 => 175,  558 => 174,  554 => 153,  551 => 221,  548 => 151,  546 => 175,  543 => 174,  540 => 160,  537 => 159,  531 => 225,  529 => 169,  525 => 157,  522 => 156,  515 => 305,  513 => 230,  509 => 161,  507 => 160,  504 => 159,  501 => 158,  493 => 143,  490 => 142,  482 => 136,  479 => 135,  471 => 129,  468 => 128,  464 => 125,  460 => 123,  454 => 121,  451 => 120,  448 => 119,  434 => 118,  428 => 133,  424 => 114,  418 => 112,  410 => 127,  408 => 109,  405 => 108,  402 => 107,  384 => 106,  381 => 105,  379 => 104,  376 => 113,  373 => 102,  370 => 101,  366 => 110,  362 => 148,  360 => 128,  356 => 105,  354 => 101,  343 => 92,  340 => 91,  337 => 90,  332 => 97,  326 => 86,  323 => 85,  320 => 84,  311 => 83,  309 => 148,  304 => 81,  301 => 144,  296 => 151,  293 => 90,  291 => 84,  288 => 79,  285 => 78,  279 => 77,  274 => 135,  265 => 130,  261 => 50,  254 => 46,  250 => 69,  244 => 43,  236 => 109,  228 => 41,  224 => 103,  221 => 38,  216 => 100,  207 => 33,  203 => 93,  200 => 31,  197 => 90,  191 => 26,  188 => 25,  182 => 85,  176 => 82,  174 => 154,  169 => 44,  165 => 77,  161 => 75,  158 => 75,  155 => 73,  141 => 37,  136 => 60,  133 => 69,  123 => 57,  106 => 64,  103 => 63,  83 => 16,  66 => 217,  63 => 14,  61 => 203,  57 => 19,  53 => 17,  49 => 123,  47 => 14,  45 => 9,  330 => 103,  327 => 154,  321 => 152,  315 => 91,  312 => 90,  306 => 88,  303 => 87,  300 => 93,  292 => 91,  290 => 90,  287 => 89,  280 => 78,  275 => 86,  273 => 85,  270 => 75,  264 => 73,  262 => 81,  256 => 79,  253 => 70,  247 => 75,  243 => 73,  240 => 65,  237 => 71,  231 => 69,  225 => 64,  222 => 66,  220 => 63,  217 => 62,  214 => 61,  209 => 96,  206 => 57,  202 => 55,  194 => 52,  190 => 49,  184 => 48,  178 => 46,  175 => 45,  171 => 153,  168 => 43,  162 => 41,  160 => 76,  156 => 38,  150 => 34,  142 => 30,  137 => 29,  134 => 28,  129 => 67,  126 => 66,  119 => 108,  112 => 27,  105 => 61,  102 => 60,  100 => 62,  97 => 56,  95 => 20,  92 => 19,  87 => 57,  76 => 13,  73 => 12,  69 => 218,  62 => 29,  59 => 185,  55 => 18,  52 => 11,  46 => 122,  43 => 20,  41 => 81,  38 => 17,  36 => 68,  30 => 2,  24 => 1,  116 => 107,  113 => 39,  110 => 26,  104 => 24,  98 => 21,  94 => 60,  90 => 24,  86 => 17,  81 => 15,  78 => 14,  71 => 25,  68 => 22,  60 => 18,  54 => 12,  51 => 173,  48 => 14,  12 => 36,);
    }
}
