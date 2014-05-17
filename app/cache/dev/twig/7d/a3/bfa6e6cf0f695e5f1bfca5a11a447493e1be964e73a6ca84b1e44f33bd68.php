<?php

/* SonataMediaBundle:MediaAdmin:list_custom.html.twig */
class __TwigTemplate_7da3bfa6e6cf0f695e5f1bfca5a11a447493e1be964e73a6ca84b1e44f33bd68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"pull-left span1\">
        ";
        // line 16
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 17
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('sonata_core_template')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))))), "method"), "html", null, true);
            echo "\" style=\"float: left; margin-right: 6px;\">";
            echo $this->env->getExtension('sonata_media')->thumbnail((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "admin", array("width" => 75, "height" => 60));
            echo "</a>
        ";
        } else {
            // line 19
            echo "            ";
            echo $this->env->getExtension('sonata_media')->thumbnail((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "admin", array("width" => 75, "height" => 60, "style" => "float: left; margin-right: 6px"));
            // line 20
            echo "        ";
        }
        // line 21
        echo "        <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "name"), "html", null, true);
        echo "</strong> <br />
        <span type=\"label\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "providerName"), array(), "SonataMediaBundle"), "html", null, true);
        echo "</span>
    </div>

    <div class=\"span1 pull-left\">
        <ul>
            <li>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.size", array(), "SonataMediaBundle"), "html", null, true);
        echo ": ";
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "width")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "width"), "html", null, true);
            if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "height")) {
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "height"), "html", null, true);
            }
            echo "px";
        }
        echo "</li>
            ";
        // line 28
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "length") > 0)) {
            // line 29
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.length", array(), "SonataMediaBundle"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "length"), "html", null, true);
            echo "</li>
            ";
        }
        // line 31
        echo "            <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.content_type", array(), "SonataMediaBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contenttype"), "html", null, true);
        echo "</li>
        </ul>
    </div>

    <div class=\"span1 pull-left\">
        <ul>
            ";
        // line 37
        if ((!twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "copyright")))) {
            // line 38
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.copyright", array(), "SonataMediaBundle"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "copyright"), "html", null, true);
            echo "</li>
            ";
        }
        // line 40
        echo "            ";
        if ((!twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "authorname")))) {
            // line 41
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.author_name", array(), "SonataMediaBundle"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "authorname"), "html", null, true);
            echo "</li>
            ";
        }
        // line 43
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list_custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 142,  242 => 113,  170 => 77,  232 => 84,  560 => 187,  553 => 184,  549 => 182,  528 => 173,  508 => 165,  491 => 157,  487 => 156,  449 => 138,  439 => 133,  436 => 132,  420 => 123,  411 => 120,  380 => 107,  331 => 96,  317 => 121,  272 => 134,  249 => 74,  692 => 399,  676 => 385,  656 => 378,  645 => 369,  631 => 364,  625 => 361,  615 => 354,  590 => 338,  583 => 334,  579 => 332,  575 => 328,  569 => 325,  565 => 324,  516 => 294,  510 => 293,  500 => 291,  495 => 158,  486 => 286,  452 => 268,  417 => 243,  361 => 207,  339 => 191,  324 => 179,  282 => 161,  259 => 149,  226 => 131,  358 => 103,  319 => 124,  277 => 136,  257 => 103,  251 => 101,  213 => 69,  211 => 81,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  846 => 205,  841 => 203,  833 => 199,  825 => 196,  817 => 192,  814 => 191,  809 => 189,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  772 => 172,  751 => 163,  746 => 161,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  695 => 139,  694 => 138,  689 => 137,  683 => 393,  678 => 390,  675 => 132,  666 => 382,  662 => 125,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  617 => 112,  614 => 111,  596 => 106,  593 => 105,  576 => 101,  557 => 96,  550 => 94,  547 => 93,  527 => 91,  524 => 297,  503 => 81,  496 => 79,  442 => 134,  433 => 130,  426 => 126,  414 => 52,  403 => 117,  400 => 116,  390 => 43,  377 => 37,  371 => 35,  350 => 26,  344 => 193,  342 => 23,  316 => 16,  276 => 395,  271 => 108,  266 => 366,  263 => 365,  248 => 116,  215 => 78,  181 => 81,  233 => 71,  153 => 72,  786 => 238,  780 => 176,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  664 => 206,  661 => 380,  658 => 124,  652 => 376,  648 => 198,  646 => 197,  598 => 107,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  581 => 185,  568 => 178,  542 => 149,  539 => 148,  521 => 166,  512 => 84,  483 => 156,  481 => 155,  478 => 74,  476 => 147,  467 => 72,  462 => 143,  456 => 68,  441 => 136,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  388 => 42,  382 => 115,  363 => 32,  353 => 103,  348 => 101,  346 => 100,  338 => 130,  325 => 94,  308 => 86,  299 => 112,  289 => 140,  286 => 82,  267 => 78,  260 => 98,  255 => 353,  245 => 335,  172 => 51,  952 => 251,  949 => 270,  946 => 269,  942 => 302,  938 => 300,  932 => 297,  929 => 296,  927 => 295,  921 => 292,  913 => 291,  910 => 290,  908 => 289,  905 => 288,  899 => 286,  897 => 227,  894 => 226,  888 => 282,  886 => 281,  883 => 280,  877 => 278,  875 => 277,  872 => 276,  866 => 274,  864 => 273,  861 => 272,  859 => 269,  856 => 268,  853 => 267,  849 => 206,  844 => 204,  836 => 253,  830 => 198,  828 => 197,  824 => 246,  818 => 244,  816 => 243,  812 => 190,  806 => 238,  803 => 237,  801 => 185,  798 => 184,  795 => 234,  792 => 233,  787 => 262,  784 => 233,  781 => 232,  776 => 303,  774 => 267,  769 => 171,  767 => 170,  764 => 169,  761 => 230,  756 => 165,  753 => 164,  749 => 162,  745 => 218,  739 => 156,  734 => 214,  728 => 213,  716 => 211,  713 => 210,  709 => 209,  702 => 208,  696 => 140,  693 => 206,  690 => 205,  687 => 204,  682 => 203,  680 => 134,  673 => 199,  669 => 207,  665 => 196,  663 => 195,  660 => 194,  657 => 193,  650 => 192,  647 => 191,  644 => 190,  641 => 368,  632 => 187,  629 => 186,  626 => 184,  619 => 113,  616 => 182,  610 => 181,  603 => 192,  600 => 178,  597 => 342,  588 => 175,  584 => 186,  570 => 164,  564 => 99,  561 => 175,  558 => 186,  554 => 153,  548 => 313,  546 => 175,  543 => 179,  540 => 308,  537 => 176,  531 => 225,  525 => 172,  522 => 156,  515 => 85,  513 => 230,  509 => 83,  482 => 285,  479 => 135,  471 => 129,  468 => 128,  464 => 275,  460 => 143,  454 => 121,  451 => 120,  448 => 119,  434 => 256,  428 => 59,  418 => 112,  408 => 50,  405 => 118,  373 => 102,  370 => 101,  366 => 106,  356 => 105,  343 => 132,  332 => 20,  311 => 118,  304 => 85,  301 => 144,  296 => 167,  293 => 109,  291 => 84,  288 => 107,  279 => 104,  274 => 135,  265 => 130,  250 => 93,  244 => 140,  236 => 109,  228 => 83,  216 => 100,  197 => 90,  191 => 69,  165 => 75,  155 => 75,  185 => 86,  167 => 76,  200 => 73,  188 => 88,  174 => 64,  146 => 49,  635 => 365,  624 => 194,  620 => 223,  612 => 220,  607 => 349,  601 => 216,  599 => 215,  594 => 176,  585 => 209,  580 => 207,  577 => 329,  574 => 205,  572 => 180,  566 => 177,  563 => 188,  559 => 201,  555 => 185,  551 => 221,  545 => 198,  536 => 306,  532 => 174,  529 => 299,  526 => 190,  523 => 171,  518 => 170,  514 => 168,  511 => 167,  507 => 160,  504 => 292,  501 => 161,  497 => 156,  493 => 78,  490 => 287,  485 => 124,  470 => 278,  463 => 117,  459 => 273,  455 => 141,  450 => 64,  447 => 137,  424 => 114,  421 => 244,  415 => 121,  412 => 126,  410 => 127,  406 => 111,  404 => 125,  401 => 124,  391 => 163,  385 => 225,  376 => 113,  369 => 111,  359 => 107,  354 => 101,  351 => 135,  347 => 134,  340 => 91,  335 => 21,  333 => 132,  329 => 96,  326 => 86,  323 => 125,  320 => 122,  318 => 86,  313 => 15,  310 => 171,  307 => 82,  302 => 168,  284 => 106,  281 => 105,  261 => 50,  239 => 97,  212 => 74,  210 => 75,  207 => 269,  198 => 66,  195 => 51,  192 => 88,  186 => 82,  180 => 56,  84 => 27,  58 => 25,  127 => 32,  77 => 28,  65 => 23,  152 => 74,  124 => 62,  330 => 103,  327 => 154,  321 => 152,  315 => 150,  306 => 88,  303 => 87,  300 => 93,  292 => 91,  290 => 5,  287 => 77,  280 => 78,  275 => 103,  270 => 157,  262 => 105,  256 => 96,  253 => 95,  237 => 86,  231 => 133,  225 => 87,  222 => 81,  206 => 71,  202 => 68,  194 => 248,  190 => 49,  184 => 233,  178 => 80,  175 => 77,  126 => 45,  97 => 52,  76 => 27,  110 => 51,  104 => 51,  90 => 34,  12 => 36,  20 => 1,  70 => 22,  160 => 76,  148 => 69,  113 => 55,  100 => 34,  81 => 25,  53 => 14,  161 => 71,  150 => 65,  137 => 48,  134 => 21,  129 => 46,  118 => 29,  114 => 39,  34 => 16,  23 => 18,  480 => 75,  474 => 150,  469 => 158,  461 => 70,  457 => 153,  453 => 139,  444 => 263,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 143,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 115,  393 => 112,  387 => 110,  384 => 109,  381 => 105,  379 => 104,  374 => 217,  368 => 34,  365 => 141,  362 => 148,  360 => 104,  355 => 27,  341 => 131,  337 => 97,  322 => 93,  314 => 88,  312 => 149,  309 => 148,  305 => 115,  298 => 91,  294 => 85,  285 => 111,  283 => 138,  278 => 160,  268 => 3,  264 => 2,  258 => 354,  252 => 68,  247 => 75,  241 => 77,  229 => 73,  220 => 80,  214 => 99,  177 => 54,  169 => 74,  140 => 66,  132 => 65,  128 => 60,  107 => 33,  61 => 26,  273 => 394,  269 => 133,  254 => 147,  243 => 89,  240 => 72,  238 => 312,  235 => 311,  230 => 106,  227 => 301,  224 => 103,  221 => 79,  219 => 101,  217 => 79,  208 => 124,  204 => 73,  179 => 84,  159 => 70,  143 => 24,  135 => 35,  119 => 43,  102 => 37,  71 => 29,  67 => 17,  63 => 27,  59 => 22,  38 => 17,  87 => 31,  94 => 40,  89 => 28,  85 => 32,  75 => 43,  68 => 36,  56 => 21,  201 => 72,  196 => 68,  183 => 46,  171 => 81,  166 => 79,  163 => 78,  158 => 75,  156 => 68,  151 => 51,  142 => 61,  138 => 69,  136 => 60,  121 => 46,  117 => 45,  105 => 35,  91 => 29,  62 => 19,  49 => 22,  93 => 35,  88 => 33,  78 => 24,  44 => 19,  31 => 15,  27 => 5,  25 => 3,  21 => 12,  46 => 21,  26 => 14,  28 => 14,  24 => 14,  19 => 11,  79 => 29,  72 => 37,  69 => 36,  47 => 20,  40 => 26,  37 => 19,  22 => 12,  246 => 99,  157 => 57,  145 => 50,  139 => 60,  131 => 20,  123 => 58,  120 => 43,  115 => 50,  111 => 41,  108 => 39,  101 => 38,  98 => 47,  96 => 48,  83 => 44,  74 => 23,  66 => 39,  55 => 22,  52 => 23,  50 => 21,  43 => 20,  41 => 18,  35 => 18,  32 => 15,  29 => 14,  209 => 96,  203 => 93,  199 => 265,  193 => 50,  189 => 65,  187 => 84,  182 => 85,  176 => 82,  173 => 46,  168 => 80,  164 => 72,  162 => 74,  154 => 52,  149 => 73,  147 => 69,  144 => 68,  141 => 70,  133 => 69,  130 => 57,  125 => 59,  122 => 44,  116 => 45,  112 => 41,  109 => 40,  106 => 104,  103 => 39,  99 => 37,  95 => 36,  92 => 45,  86 => 30,  82 => 33,  80 => 43,  73 => 18,  64 => 21,  60 => 22,  57 => 20,  54 => 19,  51 => 20,  48 => 17,  45 => 19,  42 => 18,  39 => 19,  36 => 17,  33 => 22,  30 => 21,);
    }
}
