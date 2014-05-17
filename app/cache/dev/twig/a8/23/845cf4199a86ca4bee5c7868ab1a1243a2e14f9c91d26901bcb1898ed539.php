<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_a823845cf4199a86ca4bee5c7868ab1a1243a2e14f9c91d26901bcb1898ed539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "driver"), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "host"), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  672 => 345,  651 => 337,  613 => 320,  609 => 319,  602 => 317,  552 => 293,  541 => 290,  533 => 284,  519 => 278,  499 => 268,  489 => 262,  465 => 249,  438 => 236,  397 => 213,  383 => 207,  389 => 160,  386 => 159,  378 => 157,  334 => 141,  328 => 139,  807 => 491,  788 => 486,  727 => 476,  686 => 468,  679 => 466,  677 => 465,  634 => 456,  622 => 323,  606 => 318,  567 => 414,  517 => 404,  446 => 197,  394 => 168,  367 => 198,  395 => 145,  336 => 107,  2767 => 862,  2758 => 861,  2756 => 860,  2753 => 859,  2735 => 855,  2728 => 854,  2725 => 853,  2722 => 852,  2719 => 851,  2716 => 850,  2714 => 849,  2711 => 848,  2687 => 844,  2662 => 843,  2660 => 842,  2657 => 841,  2645 => 836,  2642 => 835,  2639 => 834,  2636 => 833,  2633 => 832,  2630 => 831,  2627 => 830,  2624 => 829,  2621 => 828,  2618 => 827,  2615 => 826,  2612 => 825,  2609 => 824,  2606 => 823,  2603 => 822,  2600 => 821,  2597 => 820,  2592 => 819,  2590 => 818,  2587 => 817,  2578 => 811,  2572 => 809,  2569 => 808,  2564 => 807,  2562 => 806,  2559 => 805,  2553 => 801,  2549 => 799,  2547 => 798,  2544 => 797,  2535 => 795,  2531 => 794,  2524 => 793,  2520 => 791,  2517 => 790,  2515 => 789,  2512 => 788,  2509 => 787,  2506 => 786,  2504 => 785,  2501 => 784,  2498 => 783,  2495 => 782,  2493 => 781,  2490 => 780,  2482 => 776,  2479 => 775,  2476 => 774,  2473 => 773,  2465 => 769,  2463 => 768,  2460 => 767,  2451 => 762,  2448 => 761,  2442 => 759,  2439 => 758,  2433 => 756,  2430 => 755,  2424 => 753,  2421 => 752,  2415 => 750,  2413 => 749,  2410 => 748,  2404 => 746,  2401 => 745,  2399 => 744,  2396 => 743,  2387 => 738,  2385 => 737,  2361 => 736,  2358 => 735,  2355 => 734,  2352 => 733,  2350 => 732,  2347 => 731,  2341 => 729,  2339 => 728,  2336 => 727,  2330 => 725,  2328 => 724,  2325 => 723,  2319 => 721,  2317 => 720,  2314 => 719,  2308 => 717,  2306 => 716,  2303 => 715,  2297 => 713,  2294 => 712,  2292 => 711,  2289 => 710,  2286 => 709,  2283 => 708,  2280 => 707,  2277 => 706,  2274 => 705,  2271 => 704,  2269 => 703,  2266 => 702,  2259 => 698,  2255 => 697,  2250 => 696,  2248 => 695,  2245 => 694,  2238 => 689,  2235 => 688,  2228 => 685,  2225 => 684,  2217 => 678,  2215 => 677,  2210 => 675,  2207 => 674,  2196 => 672,  2193 => 671,  2191 => 670,  2188 => 669,  2185 => 668,  2183 => 667,  2180 => 666,  2177 => 665,  2174 => 664,  2171 => 663,  2168 => 662,  2165 => 661,  2162 => 660,  2159 => 659,  2156 => 658,  2153 => 657,  2150 => 656,  2147 => 655,  2145 => 654,  2142 => 653,  2139 => 652,  2136 => 651,  2134 => 650,  2131 => 649,  2122 => 644,  2119 => 643,  2116 => 642,  2113 => 641,  2110 => 640,  2107 => 639,  2105 => 638,  2102 => 637,  2093 => 632,  2089 => 630,  2083 => 628,  2081 => 627,  2076 => 626,  2070 => 624,  2068 => 623,  2063 => 622,  2060 => 621,  2057 => 620,  2054 => 619,  2051 => 618,  2048 => 617,  2045 => 616,  2042 => 615,  2039 => 614,  2036 => 613,  2033 => 612,  2030 => 611,  2027 => 610,  2025 => 609,  2022 => 608,  2015 => 604,  2011 => 602,  2006 => 600,  2002 => 599,  1998 => 598,  1993 => 597,  1987 => 594,  1983 => 593,  1979 => 592,  1973 => 591,  1968 => 590,  1966 => 589,  1960 => 588,  1957 => 587,  1954 => 586,  1952 => 585,  1949 => 584,  1946 => 583,  1943 => 582,  1940 => 581,  1937 => 580,  1934 => 579,  1931 => 578,  1928 => 577,  1925 => 576,  1922 => 575,  1919 => 574,  1916 => 573,  1914 => 572,  1911 => 571,  1908 => 570,  1905 => 569,  1903 => 568,  1900 => 567,  1892 => 563,  1890 => 559,  1888 => 558,  1885 => 557,  1880 => 553,  1858 => 548,  1855 => 547,  1852 => 546,  1849 => 545,  1846 => 544,  1843 => 543,  1840 => 542,  1837 => 541,  1834 => 540,  1832 => 539,  1829 => 538,  1826 => 537,  1823 => 536,  1820 => 535,  1817 => 534,  1814 => 533,  1812 => 532,  1809 => 531,  1806 => 530,  1803 => 529,  1801 => 528,  1798 => 527,  1795 => 526,  1792 => 525,  1790 => 524,  1787 => 523,  1784 => 522,  1781 => 521,  1778 => 520,  1775 => 519,  1772 => 518,  1769 => 517,  1766 => 516,  1763 => 515,  1761 => 514,  1758 => 513,  1755 => 512,  1753 => 511,  1750 => 510,  1742 => 505,  1738 => 504,  1733 => 503,  1730 => 502,  1722 => 498,  1719 => 497,  1717 => 496,  1714 => 495,  1706 => 491,  1703 => 490,  1701 => 489,  1698 => 488,  1683 => 484,  1680 => 483,  1677 => 482,  1674 => 481,  1671 => 480,  1668 => 479,  1665 => 478,  1662 => 477,  1659 => 476,  1657 => 475,  1654 => 474,  1646 => 470,  1643 => 469,  1641 => 468,  1638 => 467,  1630 => 463,  1627 => 462,  1625 => 461,  1622 => 460,  1614 => 456,  1611 => 455,  1609 => 454,  1606 => 453,  1597 => 447,  1594 => 446,  1591 => 445,  1589 => 444,  1586 => 443,  1578 => 439,  1575 => 438,  1573 => 437,  1570 => 436,  1562 => 432,  1559 => 431,  1557 => 430,  1554 => 429,  1547 => 424,  1545 => 420,  1542 => 419,  1540 => 418,  1537 => 417,  1529 => 413,  1526 => 412,  1524 => 411,  1521 => 410,  1513 => 406,  1510 => 405,  1508 => 404,  1506 => 403,  1503 => 402,  1496 => 397,  1490 => 396,  1485 => 395,  1481 => 394,  1476 => 393,  1473 => 392,  1470 => 391,  1464 => 389,  1461 => 388,  1459 => 387,  1456 => 386,  1448 => 380,  1446 => 379,  1445 => 378,  1444 => 377,  1443 => 376,  1438 => 375,  1435 => 374,  1429 => 372,  1426 => 371,  1424 => 370,  1421 => 369,  1412 => 363,  1404 => 361,  1395 => 359,  1392 => 358,  1386 => 356,  1381 => 354,  1378 => 353,  1362 => 349,  1360 => 348,  1357 => 347,  1329 => 336,  1324 => 333,  1322 => 332,  1316 => 330,  1310 => 328,  1304 => 325,  1300 => 324,  1284 => 323,  1281 => 322,  1278 => 321,  1275 => 320,  1272 => 319,  1269 => 318,  1266 => 317,  1263 => 316,  1260 => 315,  1257 => 314,  1255 => 313,  1243 => 309,  1238 => 307,  1225 => 304,  1222 => 303,  1220 => 302,  1217 => 301,  1214 => 300,  1208 => 298,  1205 => 297,  1199 => 295,  1196 => 294,  1193 => 293,  1191 => 292,  1188 => 291,  1186 => 290,  1183 => 289,  1180 => 288,  1178 => 287,  1175 => 286,  1165 => 281,  1161 => 279,  1156 => 276,  1148 => 273,  1142 => 271,  1136 => 268,  1132 => 267,  1116 => 266,  1113 => 265,  1110 => 264,  1107 => 263,  1104 => 262,  1101 => 261,  1092 => 258,  1089 => 257,  1087 => 256,  1076 => 253,  1071 => 251,  1061 => 249,  1058 => 248,  1055 => 247,  1052 => 246,  1050 => 245,  1047 => 244,  1044 => 243,  1041 => 242,  1038 => 241,  1035 => 240,  1026 => 237,  1023 => 236,  1020 => 235,  1017 => 234,  1006 => 230,  1003 => 229,  1001 => 228,  998 => 227,  981 => 223,  969 => 221,  962 => 218,  960 => 217,  917 => 206,  914 => 205,  906 => 202,  901 => 201,  898 => 200,  895 => 199,  880 => 197,  871 => 195,  868 => 194,  863 => 192,  854 => 187,  848 => 186,  842 => 184,  829 => 180,  822 => 178,  819 => 177,  810 => 492,  804 => 170,  799 => 168,  789 => 162,  773 => 158,  765 => 156,  763 => 155,  760 => 154,  757 => 153,  754 => 152,  752 => 151,  743 => 148,  741 => 147,  738 => 146,  735 => 145,  733 => 144,  730 => 143,  723 => 138,  714 => 135,  706 => 473,  698 => 471,  684 => 125,  681 => 124,  670 => 120,  668 => 344,  659 => 114,  636 => 107,  628 => 104,  623 => 103,  621 => 102,  608 => 98,  604 => 96,  591 => 309,  571 => 85,  562 => 82,  556 => 80,  534 => 71,  505 => 270,  498 => 57,  488 => 51,  473 => 254,  458 => 43,  431 => 189,  429 => 188,  399 => 147,  396 => 22,  357 => 123,  345 => 147,  297 => 179,  223 => 63,  14 => 1,  218 => 61,  205 => 108,  295 => 178,  242 => 113,  170 => 96,  232 => 88,  560 => 187,  553 => 79,  549 => 411,  528 => 173,  508 => 165,  491 => 186,  487 => 156,  449 => 198,  439 => 195,  436 => 235,  420 => 30,  411 => 154,  380 => 206,  331 => 140,  317 => 185,  272 => 134,  249 => 74,  692 => 399,  676 => 122,  656 => 378,  645 => 369,  631 => 327,  625 => 453,  615 => 354,  590 => 338,  583 => 89,  579 => 332,  575 => 328,  569 => 300,  565 => 83,  516 => 3,  510 => 293,  500 => 58,  495 => 56,  486 => 50,  452 => 171,  417 => 157,  361 => 195,  339 => 108,  324 => 113,  282 => 90,  259 => 103,  226 => 84,  358 => 151,  319 => 779,  277 => 136,  257 => 103,  251 => 75,  213 => 78,  211 => 56,  1414 => 421,  1408 => 362,  1402 => 417,  1400 => 360,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 355,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 343,  1339 => 342,  1336 => 341,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 311,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 306,  1228 => 305,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 299,  1202 => 296,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 282,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 275,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 260,  1095 => 259,  1088 => 308,  1084 => 255,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 250,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 239,  1029 => 238,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 233,  1012 => 232,  1009 => 231,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 216,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 214,  931 => 240,  923 => 236,  920 => 207,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  892 => 225,  889 => 224,  881 => 220,  878 => 196,  876 => 218,  873 => 217,  865 => 193,  862 => 212,  860 => 191,  857 => 210,  846 => 205,  841 => 203,  833 => 181,  825 => 196,  817 => 192,  814 => 191,  809 => 189,  796 => 489,  793 => 182,  785 => 178,  783 => 177,  772 => 172,  751 => 163,  746 => 478,  729 => 155,  724 => 154,  721 => 137,  715 => 151,  712 => 150,  710 => 475,  707 => 148,  699 => 142,  697 => 141,  695 => 139,  694 => 470,  689 => 137,  683 => 393,  678 => 123,  675 => 132,  666 => 382,  662 => 125,  654 => 123,  649 => 462,  643 => 120,  640 => 334,  638 => 118,  617 => 112,  614 => 111,  596 => 106,  593 => 310,  576 => 101,  557 => 295,  550 => 94,  547 => 93,  527 => 281,  524 => 297,  503 => 81,  496 => 79,  442 => 37,  433 => 130,  426 => 32,  414 => 28,  403 => 149,  400 => 214,  390 => 43,  377 => 15,  371 => 156,  350 => 327,  344 => 119,  342 => 137,  316 => 16,  276 => 111,  271 => 636,  266 => 607,  263 => 95,  248 => 97,  215 => 60,  181 => 65,  233 => 87,  153 => 77,  786 => 238,  780 => 176,  777 => 234,  775 => 485,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 134,  708 => 212,  691 => 210,  674 => 209,  664 => 342,  661 => 380,  658 => 124,  652 => 376,  648 => 198,  646 => 197,  598 => 107,  595 => 190,  592 => 189,  589 => 188,  586 => 90,  581 => 305,  568 => 84,  542 => 149,  539 => 148,  521 => 166,  512 => 2,  483 => 258,  481 => 184,  478 => 74,  476 => 180,  467 => 46,  462 => 202,  456 => 68,  441 => 196,  425 => 132,  422 => 226,  419 => 158,  416 => 129,  388 => 141,  382 => 17,  363 => 153,  353 => 193,  348 => 140,  346 => 100,  338 => 135,  325 => 129,  308 => 287,  299 => 701,  289 => 113,  286 => 112,  267 => 101,  260 => 98,  255 => 101,  245 => 73,  172 => 64,  952 => 215,  949 => 270,  946 => 269,  942 => 302,  938 => 300,  932 => 213,  929 => 212,  927 => 295,  921 => 292,  913 => 291,  910 => 290,  908 => 203,  905 => 288,  899 => 286,  897 => 227,  894 => 226,  888 => 282,  886 => 281,  883 => 280,  877 => 278,  875 => 277,  872 => 276,  866 => 274,  864 => 273,  861 => 272,  859 => 269,  856 => 268,  853 => 267,  849 => 206,  844 => 204,  836 => 182,  830 => 198,  828 => 197,  824 => 179,  818 => 244,  816 => 243,  812 => 190,  806 => 238,  803 => 237,  801 => 169,  798 => 184,  795 => 234,  792 => 488,  787 => 161,  784 => 233,  781 => 232,  776 => 159,  774 => 267,  769 => 171,  767 => 170,  764 => 169,  761 => 230,  756 => 165,  753 => 164,  749 => 479,  745 => 218,  739 => 156,  734 => 214,  728 => 213,  716 => 211,  713 => 210,  709 => 133,  702 => 472,  696 => 129,  693 => 128,  690 => 469,  687 => 126,  682 => 467,  680 => 134,  673 => 121,  669 => 207,  665 => 118,  663 => 195,  660 => 340,  657 => 193,  650 => 192,  647 => 336,  644 => 335,  641 => 368,  632 => 187,  629 => 326,  626 => 325,  619 => 113,  616 => 100,  610 => 181,  603 => 192,  600 => 95,  597 => 342,  588 => 308,  584 => 186,  570 => 164,  564 => 99,  561 => 175,  558 => 186,  554 => 153,  548 => 292,  546 => 175,  543 => 179,  540 => 73,  537 => 72,  531 => 283,  525 => 280,  522 => 279,  515 => 276,  513 => 62,  509 => 272,  482 => 285,  479 => 256,  471 => 253,  468 => 128,  464 => 45,  460 => 174,  454 => 244,  451 => 120,  448 => 240,  434 => 256,  428 => 230,  418 => 224,  408 => 176,  405 => 25,  373 => 156,  370 => 101,  366 => 125,  356 => 119,  343 => 146,  332 => 116,  311 => 118,  304 => 181,  301 => 144,  296 => 121,  293 => 120,  291 => 102,  288 => 176,  279 => 649,  274 => 110,  265 => 105,  250 => 93,  244 => 140,  236 => 109,  228 => 65,  216 => 79,  197 => 104,  191 => 67,  165 => 83,  155 => 47,  185 => 74,  167 => 76,  200 => 72,  188 => 102,  174 => 65,  146 => 45,  635 => 365,  624 => 194,  620 => 451,  612 => 99,  607 => 349,  601 => 446,  599 => 215,  594 => 93,  585 => 307,  580 => 88,  577 => 303,  574 => 86,  572 => 180,  566 => 177,  563 => 298,  559 => 296,  555 => 185,  551 => 78,  545 => 291,  536 => 306,  532 => 410,  529 => 409,  526 => 68,  523 => 171,  518 => 4,  514 => 168,  511 => 167,  507 => 60,  504 => 292,  501 => 1,  497 => 267,  493 => 78,  490 => 287,  485 => 124,  470 => 47,  463 => 248,  459 => 246,  455 => 42,  450 => 40,  447 => 39,  424 => 114,  421 => 244,  415 => 180,  412 => 222,  410 => 221,  406 => 111,  404 => 125,  401 => 172,  391 => 143,  385 => 18,  376 => 205,  369 => 128,  359 => 7,  354 => 5,  351 => 192,  347 => 191,  340 => 145,  335 => 134,  333 => 132,  329 => 188,  326 => 138,  323 => 128,  320 => 127,  318 => 111,  313 => 183,  310 => 171,  307 => 128,  302 => 125,  284 => 684,  281 => 114,  261 => 566,  239 => 97,  212 => 78,  210 => 77,  207 => 75,  198 => 54,  195 => 53,  192 => 50,  186 => 50,  180 => 46,  84 => 25,  58 => 15,  127 => 35,  77 => 20,  65 => 17,  152 => 46,  124 => 27,  330 => 103,  327 => 114,  321 => 135,  315 => 131,  306 => 107,  303 => 106,  300 => 180,  292 => 91,  290 => 119,  287 => 93,  280 => 78,  275 => 105,  270 => 102,  262 => 98,  256 => 96,  253 => 100,  237 => 86,  231 => 83,  225 => 60,  222 => 83,  206 => 54,  202 => 94,  194 => 68,  190 => 76,  184 => 101,  178 => 66,  175 => 65,  126 => 40,  97 => 41,  76 => 31,  110 => 38,  104 => 31,  90 => 27,  12 => 36,  20 => 1,  70 => 19,  160 => 352,  148 => 286,  113 => 48,  100 => 39,  81 => 24,  53 => 11,  161 => 63,  150 => 55,  137 => 33,  134 => 54,  129 => 46,  118 => 49,  114 => 27,  34 => 4,  23 => 12,  480 => 75,  474 => 150,  469 => 158,  461 => 44,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 168,  435 => 146,  430 => 255,  427 => 162,  423 => 160,  413 => 155,  409 => 132,  407 => 151,  402 => 215,  398 => 115,  393 => 211,  387 => 164,  384 => 140,  381 => 137,  379 => 136,  374 => 217,  368 => 10,  365 => 197,  362 => 8,  360 => 104,  355 => 150,  341 => 189,  337 => 840,  322 => 780,  314 => 772,  312 => 130,  309 => 129,  305 => 115,  298 => 120,  294 => 98,  285 => 175,  283 => 115,  278 => 98,  268 => 83,  264 => 567,  258 => 94,  252 => 68,  247 => 75,  241 => 93,  229 => 87,  220 => 81,  214 => 99,  177 => 47,  169 => 74,  140 => 58,  132 => 108,  128 => 30,  107 => 37,  61 => 17,  273 => 174,  269 => 107,  254 => 147,  243 => 92,  240 => 71,  238 => 502,  235 => 89,  230 => 494,  227 => 86,  224 => 81,  221 => 79,  219 => 58,  217 => 79,  208 => 76,  204 => 73,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 30,  71 => 13,  67 => 16,  63 => 18,  59 => 17,  38 => 6,  87 => 26,  94 => 21,  89 => 30,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  201 => 106,  196 => 92,  183 => 49,  171 => 45,  166 => 95,  163 => 53,  158 => 62,  156 => 62,  151 => 59,  142 => 35,  138 => 212,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 29,  62 => 14,  49 => 12,  93 => 28,  88 => 28,  78 => 24,  44 => 8,  31 => 3,  27 => 3,  25 => 35,  21 => 2,  46 => 10,  26 => 3,  28 => 3,  24 => 2,  19 => 1,  79 => 21,  72 => 21,  69 => 16,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 96,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 33,  101 => 33,  98 => 29,  96 => 37,  83 => 33,  74 => 22,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 5,  29 => 3,  209 => 55,  203 => 73,  199 => 93,  193 => 429,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 19,  162 => 59,  154 => 60,  149 => 73,  147 => 43,  144 => 42,  141 => 73,  133 => 32,  130 => 46,  125 => 51,  122 => 41,  116 => 57,  112 => 39,  109 => 27,  106 => 51,  103 => 23,  99 => 23,  95 => 39,  92 => 31,  86 => 23,  82 => 25,  80 => 24,  73 => 24,  64 => 19,  60 => 20,  57 => 39,  54 => 15,  51 => 13,  48 => 10,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
