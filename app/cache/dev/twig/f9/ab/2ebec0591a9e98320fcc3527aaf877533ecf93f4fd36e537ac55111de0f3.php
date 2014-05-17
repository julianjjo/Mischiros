<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_f9ab2ebec0591a9e98320fcc3527aaf877533ecf93f4fd36e537ac55111de0f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"col-md-3\">
        <div>
            <h4>
                ";
        // line 18
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method")) {
            // line 19
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 21
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
            echo "
                ";
        }
        // line 23
        echo "
                ";
        // line 24
        if (((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")) && ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method") > 0))) {
            // line 25
            echo "                    <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                ";
        }
        // line 27
        echo "            </h4>
        </div>

        <ul>
            ";
        // line 31
        if ((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager"))) {
            // line 32
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 33
                echo "                    ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method")) {
                    // line 34
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                    echo "</a></li>
                    ";
                } else {
                    // line 36
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                    echo "</i></li>
                    ";
                }
                // line 38
                echo "                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 39
                echo "                    ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
                    // line 40
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo " ~ <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a></i></li>
                    ";
                } else {
                    // line 42
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</i></li>
                    ";
                }
                // line 44
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            ";
        } else {
            // line 46
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
                // line 47
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo " ~ <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a></i></li>
                ";
            } else {
                // line 49
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo "</i></li>
                ";
            }
            // line 51
            echo "            ";
        }
        // line 52
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  846 => 205,  841 => 203,  833 => 199,  825 => 196,  817 => 192,  814 => 191,  809 => 189,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  772 => 172,  751 => 163,  746 => 161,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  617 => 112,  614 => 111,  596 => 106,  593 => 105,  576 => 101,  557 => 96,  550 => 94,  547 => 93,  527 => 91,  524 => 90,  503 => 81,  496 => 79,  442 => 62,  433 => 60,  426 => 58,  414 => 52,  403 => 48,  400 => 47,  390 => 43,  377 => 37,  371 => 35,  350 => 26,  344 => 24,  342 => 23,  316 => 16,  276 => 395,  271 => 374,  266 => 366,  263 => 365,  248 => 336,  215 => 280,  181 => 232,  233 => 304,  153 => 55,  786 => 238,  780 => 176,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  664 => 206,  661 => 205,  658 => 124,  652 => 200,  648 => 198,  646 => 197,  598 => 107,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  581 => 185,  568 => 178,  542 => 149,  539 => 148,  521 => 166,  512 => 84,  483 => 156,  481 => 155,  478 => 74,  476 => 147,  467 => 72,  462 => 143,  456 => 68,  441 => 136,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  388 => 42,  382 => 115,  363 => 32,  353 => 103,  348 => 101,  346 => 100,  338 => 99,  325 => 94,  308 => 13,  299 => 8,  289 => 83,  286 => 82,  267 => 74,  260 => 363,  255 => 353,  245 => 335,  172 => 46,  952 => 251,  949 => 270,  946 => 269,  942 => 302,  938 => 300,  932 => 297,  929 => 296,  927 => 295,  921 => 292,  913 => 291,  910 => 290,  908 => 289,  905 => 288,  899 => 286,  897 => 227,  894 => 226,  888 => 282,  886 => 281,  883 => 280,  877 => 278,  875 => 277,  872 => 276,  866 => 274,  864 => 273,  861 => 272,  859 => 269,  856 => 268,  853 => 267,  849 => 206,  844 => 204,  836 => 253,  830 => 198,  828 => 197,  824 => 246,  818 => 244,  816 => 243,  812 => 190,  806 => 238,  803 => 237,  801 => 185,  798 => 184,  795 => 234,  792 => 233,  787 => 262,  784 => 233,  781 => 232,  776 => 303,  774 => 267,  769 => 171,  767 => 170,  764 => 169,  761 => 230,  756 => 165,  753 => 164,  749 => 162,  745 => 218,  739 => 156,  734 => 214,  728 => 213,  716 => 211,  713 => 210,  709 => 209,  702 => 208,  696 => 140,  693 => 206,  690 => 205,  687 => 204,  682 => 203,  680 => 134,  673 => 199,  669 => 207,  665 => 196,  663 => 195,  660 => 194,  657 => 193,  650 => 192,  647 => 191,  644 => 190,  641 => 196,  632 => 187,  629 => 186,  626 => 184,  619 => 113,  616 => 182,  610 => 181,  603 => 192,  600 => 178,  597 => 177,  588 => 175,  584 => 186,  570 => 164,  564 => 99,  561 => 175,  558 => 174,  554 => 153,  548 => 151,  546 => 175,  543 => 174,  540 => 160,  537 => 159,  531 => 225,  525 => 157,  522 => 156,  515 => 85,  513 => 230,  509 => 83,  482 => 136,  479 => 135,  471 => 129,  468 => 128,  464 => 71,  460 => 123,  454 => 121,  451 => 120,  448 => 119,  434 => 118,  428 => 59,  418 => 112,  408 => 50,  405 => 49,  373 => 102,  370 => 101,  366 => 33,  356 => 105,  343 => 92,  332 => 20,  311 => 14,  304 => 81,  301 => 80,  296 => 151,  293 => 6,  291 => 84,  288 => 4,  279 => 77,  274 => 53,  265 => 51,  250 => 341,  244 => 43,  236 => 42,  228 => 41,  216 => 35,  197 => 249,  191 => 246,  165 => 61,  155 => 73,  185 => 61,  167 => 56,  200 => 73,  188 => 25,  174 => 217,  146 => 181,  635 => 117,  624 => 194,  620 => 223,  612 => 220,  607 => 193,  601 => 216,  599 => 215,  594 => 176,  585 => 209,  580 => 207,  577 => 206,  574 => 205,  572 => 180,  566 => 177,  563 => 176,  559 => 201,  555 => 95,  551 => 221,  545 => 198,  536 => 147,  532 => 192,  529 => 92,  526 => 190,  523 => 167,  518 => 165,  514 => 167,  511 => 166,  507 => 160,  504 => 159,  501 => 80,  497 => 156,  493 => 78,  490 => 77,  485 => 124,  470 => 73,  463 => 117,  459 => 69,  455 => 115,  450 => 64,  447 => 137,  424 => 114,  421 => 90,  415 => 127,  412 => 126,  410 => 127,  406 => 111,  404 => 125,  401 => 124,  391 => 163,  385 => 41,  376 => 113,  369 => 111,  359 => 107,  354 => 101,  351 => 102,  347 => 140,  340 => 91,  335 => 21,  333 => 132,  329 => 96,  326 => 86,  323 => 85,  320 => 84,  318 => 86,  313 => 15,  310 => 83,  307 => 82,  302 => 79,  284 => 76,  281 => 411,  261 => 50,  239 => 64,  212 => 279,  210 => 270,  207 => 269,  198 => 53,  195 => 51,  192 => 53,  186 => 239,  180 => 66,  84 => 41,  58 => 22,  127 => 32,  77 => 31,  65 => 29,  152 => 62,  124 => 132,  330 => 103,  327 => 102,  321 => 100,  315 => 91,  306 => 88,  303 => 87,  300 => 93,  292 => 91,  290 => 5,  287 => 77,  280 => 78,  275 => 86,  270 => 75,  262 => 81,  256 => 79,  253 => 342,  237 => 71,  231 => 69,  225 => 298,  222 => 297,  206 => 57,  202 => 266,  194 => 248,  190 => 49,  184 => 233,  178 => 48,  175 => 74,  126 => 147,  97 => 39,  76 => 27,  110 => 42,  104 => 18,  90 => 38,  12 => 36,  20 => 1,  70 => 29,  160 => 38,  148 => 49,  113 => 40,  100 => 40,  81 => 33,  53 => 24,  161 => 202,  150 => 61,  137 => 29,  134 => 55,  129 => 148,  118 => 29,  114 => 111,  34 => 18,  23 => 13,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 139,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 134,  427 => 143,  423 => 57,  413 => 128,  409 => 132,  407 => 126,  402 => 107,  398 => 123,  393 => 168,  387 => 122,  384 => 106,  381 => 105,  379 => 104,  374 => 36,  368 => 34,  365 => 111,  362 => 148,  360 => 128,  355 => 27,  341 => 105,  337 => 22,  322 => 101,  314 => 99,  312 => 90,  309 => 82,  305 => 95,  298 => 91,  294 => 85,  285 => 3,  283 => 88,  278 => 410,  268 => 373,  264 => 73,  258 => 354,  252 => 68,  247 => 75,  241 => 77,  229 => 73,  220 => 290,  214 => 75,  177 => 65,  169 => 210,  140 => 52,  132 => 34,  128 => 47,  107 => 25,  61 => 27,  273 => 394,  269 => 94,  254 => 46,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 79,  221 => 38,  219 => 76,  217 => 289,  208 => 57,  204 => 267,  179 => 224,  159 => 196,  143 => 38,  135 => 35,  119 => 117,  102 => 19,  71 => 29,  67 => 31,  63 => 27,  59 => 185,  38 => 7,  87 => 57,  94 => 16,  89 => 33,  85 => 32,  75 => 33,  68 => 30,  56 => 21,  201 => 56,  196 => 52,  183 => 46,  171 => 216,  166 => 209,  163 => 40,  158 => 74,  156 => 64,  151 => 188,  142 => 30,  138 => 49,  136 => 168,  121 => 131,  117 => 175,  105 => 44,  91 => 56,  62 => 24,  49 => 123,  93 => 39,  88 => 37,  78 => 34,  44 => 21,  31 => 15,  27 => 16,  25 => 12,  21 => 11,  46 => 19,  26 => 14,  28 => 14,  24 => 13,  19 => 11,  79 => 31,  72 => 31,  69 => 32,  47 => 22,  40 => 20,  37 => 17,  22 => 12,  246 => 67,  157 => 57,  145 => 60,  139 => 169,  131 => 160,  123 => 52,  120 => 51,  115 => 28,  111 => 47,  108 => 21,  101 => 42,  98 => 36,  96 => 67,  83 => 37,  74 => 30,  66 => 27,  55 => 25,  52 => 20,  50 => 23,  43 => 18,  41 => 18,  35 => 17,  32 => 21,  29 => 15,  209 => 58,  203 => 32,  199 => 265,  193 => 50,  189 => 240,  187 => 69,  182 => 23,  176 => 223,  173 => 46,  168 => 69,  164 => 203,  162 => 68,  154 => 189,  149 => 182,  147 => 52,  144 => 51,  141 => 58,  133 => 69,  130 => 33,  125 => 46,  122 => 45,  116 => 44,  112 => 27,  109 => 46,  106 => 104,  103 => 38,  99 => 41,  95 => 41,  92 => 38,  86 => 36,  82 => 33,  80 => 36,  73 => 29,  64 => 3,  60 => 23,  57 => 19,  54 => 23,  51 => 25,  48 => 24,  45 => 23,  42 => 21,  39 => 19,  36 => 19,  33 => 13,  30 => 15,);
    }
}
