<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_5ab9c24d5db8a704cb42fd31b4d8ba79850374eab1b3177a7585db4a5b6b86e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-list\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,  1414 => 421,  1402 => 417,  1398 => 415,  1394 => 414,  1385 => 413,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1249 => 367,  1246 => 366,  1237 => 360,  1223 => 356,  1221 => 355,  1218 => 354,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1162 => 330,  1159 => 329,  1157 => 328,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1088 => 308,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1027 => 281,  1024 => 280,  1016 => 276,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  931 => 240,  923 => 236,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  892 => 225,  889 => 224,  881 => 220,  876 => 218,  873 => 217,  862 => 212,  857 => 210,  846 => 205,  841 => 203,  825 => 196,  817 => 192,  814 => 191,  809 => 189,  793 => 182,  785 => 178,  783 => 177,  772 => 172,  751 => 163,  729 => 155,  724 => 154,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  675 => 132,  666 => 126,  662 => 125,  654 => 123,  643 => 120,  640 => 119,  638 => 118,  617 => 112,  614 => 111,  596 => 106,  593 => 105,  576 => 101,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  527 => 91,  524 => 90,  503 => 81,  496 => 79,  480 => 75,  459 => 69,  433 => 60,  403 => 48,  400 => 47,  390 => 43,  371 => 35,  355 => 27,  344 => 24,  316 => 16,  313 => 15,  278 => 410,  268 => 373,  263 => 365,  258 => 354,  227 => 301,  212 => 279,  199 => 265,  189 => 240,  186 => 239,  181 => 232,  179 => 224,  154 => 189,  151 => 188,  149 => 182,  146 => 181,  139 => 169,  131 => 160,  114 => 111,  111 => 110,  109 => 105,  99 => 68,  96 => 67,  91 => 56,  84 => 41,  79 => 32,  74 => 20,  2767 => 862,  2758 => 861,  2756 => 860,  2753 => 859,  2735 => 855,  2728 => 854,  2725 => 853,  2722 => 852,  2719 => 851,  2716 => 850,  2714 => 849,  2711 => 848,  2687 => 844,  2662 => 843,  2660 => 842,  2657 => 841,  2645 => 836,  2642 => 835,  2639 => 834,  2636 => 833,  2633 => 832,  2630 => 831,  2627 => 830,  2624 => 829,  2621 => 828,  2618 => 827,  2615 => 826,  2612 => 825,  2609 => 824,  2606 => 823,  2603 => 822,  2600 => 821,  2597 => 820,  2592 => 819,  2590 => 818,  2587 => 817,  2578 => 811,  2572 => 809,  2569 => 808,  2564 => 807,  2562 => 806,  2559 => 805,  2553 => 801,  2549 => 799,  2547 => 798,  2544 => 797,  2535 => 795,  2531 => 794,  2524 => 793,  2520 => 791,  2517 => 790,  2515 => 789,  2512 => 788,  2509 => 787,  2506 => 786,  2504 => 785,  2501 => 784,  2498 => 783,  2495 => 782,  2493 => 781,  2490 => 780,  2482 => 776,  2479 => 775,  2476 => 774,  2473 => 773,  2465 => 769,  2463 => 768,  2460 => 767,  2451 => 762,  2448 => 761,  2442 => 759,  2439 => 758,  2433 => 756,  2430 => 755,  2424 => 753,  2421 => 752,  2415 => 750,  2413 => 749,  2410 => 748,  2404 => 746,  2401 => 745,  2399 => 744,  2396 => 743,  2387 => 738,  2385 => 737,  2361 => 736,  2358 => 735,  2355 => 734,  2352 => 733,  2350 => 732,  2347 => 731,  2341 => 729,  2339 => 728,  2336 => 727,  2330 => 725,  2328 => 724,  2325 => 723,  2319 => 721,  2317 => 720,  2314 => 719,  2308 => 717,  2306 => 716,  2303 => 715,  2297 => 713,  2294 => 712,  2292 => 711,  2289 => 710,  2286 => 709,  2283 => 708,  2280 => 707,  2277 => 706,  2274 => 705,  2271 => 704,  2269 => 703,  2266 => 702,  2259 => 698,  2255 => 697,  2250 => 696,  2248 => 695,  2245 => 694,  2238 => 689,  2235 => 688,  2228 => 685,  2225 => 684,  2217 => 678,  2215 => 677,  2210 => 675,  2207 => 674,  2196 => 672,  2193 => 671,  2191 => 670,  2188 => 669,  2185 => 668,  2183 => 667,  2180 => 666,  2177 => 665,  2174 => 664,  2171 => 663,  2168 => 662,  2165 => 661,  2162 => 660,  2159 => 659,  2156 => 658,  2153 => 657,  2150 => 656,  2147 => 655,  2145 => 654,  2142 => 653,  2139 => 652,  2136 => 651,  2134 => 650,  2131 => 649,  2122 => 644,  2119 => 643,  2116 => 642,  2113 => 641,  2110 => 640,  2107 => 639,  2105 => 638,  2102 => 637,  2093 => 632,  2089 => 630,  2083 => 628,  2081 => 627,  2076 => 626,  2070 => 624,  2068 => 623,  2063 => 622,  2060 => 621,  2057 => 620,  2054 => 619,  2051 => 618,  2048 => 617,  2045 => 616,  2042 => 615,  2039 => 614,  2036 => 613,  2033 => 612,  2030 => 611,  2027 => 610,  2025 => 609,  2022 => 608,  2015 => 604,  2011 => 602,  2006 => 600,  2002 => 599,  1998 => 598,  1993 => 597,  1987 => 594,  1983 => 593,  1979 => 592,  1973 => 591,  1968 => 590,  1966 => 589,  1960 => 588,  1957 => 587,  1954 => 586,  1952 => 585,  1949 => 584,  1946 => 583,  1943 => 582,  1940 => 581,  1937 => 580,  1934 => 579,  1931 => 578,  1928 => 577,  1925 => 576,  1922 => 575,  1919 => 574,  1916 => 573,  1914 => 572,  1911 => 571,  1908 => 570,  1905 => 569,  1903 => 568,  1900 => 567,  1892 => 563,  1890 => 559,  1888 => 558,  1885 => 557,  1880 => 553,  1858 => 548,  1855 => 547,  1852 => 546,  1849 => 545,  1846 => 544,  1843 => 543,  1840 => 542,  1837 => 541,  1834 => 540,  1832 => 539,  1829 => 538,  1826 => 537,  1823 => 536,  1820 => 535,  1817 => 534,  1814 => 533,  1812 => 532,  1809 => 531,  1806 => 530,  1803 => 529,  1801 => 528,  1798 => 527,  1795 => 526,  1792 => 525,  1790 => 524,  1787 => 523,  1784 => 522,  1781 => 521,  1778 => 520,  1775 => 519,  1772 => 518,  1769 => 517,  1766 => 516,  1763 => 515,  1761 => 514,  1758 => 513,  1755 => 512,  1753 => 511,  1750 => 510,  1742 => 505,  1738 => 504,  1733 => 503,  1730 => 502,  1722 => 498,  1719 => 497,  1717 => 496,  1714 => 495,  1706 => 491,  1703 => 490,  1701 => 489,  1698 => 488,  1683 => 484,  1680 => 483,  1677 => 482,  1674 => 481,  1671 => 480,  1668 => 479,  1665 => 478,  1662 => 477,  1659 => 476,  1657 => 475,  1654 => 474,  1646 => 470,  1643 => 469,  1641 => 468,  1638 => 467,  1630 => 463,  1627 => 462,  1625 => 461,  1622 => 460,  1614 => 456,  1611 => 455,  1609 => 454,  1606 => 453,  1597 => 447,  1594 => 446,  1591 => 445,  1589 => 444,  1586 => 443,  1578 => 439,  1575 => 438,  1573 => 437,  1570 => 436,  1562 => 432,  1559 => 431,  1557 => 430,  1554 => 429,  1547 => 424,  1545 => 420,  1542 => 419,  1540 => 418,  1537 => 417,  1529 => 413,  1526 => 412,  1524 => 411,  1521 => 410,  1513 => 406,  1510 => 405,  1508 => 404,  1506 => 403,  1503 => 402,  1496 => 397,  1490 => 396,  1485 => 395,  1481 => 394,  1476 => 393,  1473 => 392,  1470 => 391,  1464 => 389,  1461 => 388,  1459 => 387,  1456 => 386,  1448 => 380,  1446 => 379,  1445 => 378,  1444 => 377,  1443 => 376,  1438 => 375,  1435 => 374,  1429 => 372,  1426 => 371,  1424 => 370,  1421 => 369,  1412 => 363,  1408 => 419,  1404 => 361,  1400 => 416,  1395 => 359,  1392 => 358,  1386 => 356,  1383 => 412,  1381 => 354,  1378 => 353,  1362 => 349,  1360 => 348,  1357 => 347,  1341 => 397,  1339 => 396,  1336 => 395,  1329 => 336,  1324 => 333,  1322 => 332,  1316 => 330,  1310 => 328,  1304 => 325,  1300 => 324,  1284 => 323,  1281 => 322,  1278 => 321,  1275 => 320,  1272 => 319,  1269 => 318,  1266 => 317,  1263 => 316,  1260 => 315,  1257 => 314,  1255 => 313,  1251 => 368,  1243 => 309,  1238 => 307,  1231 => 358,  1228 => 357,  1225 => 304,  1222 => 303,  1220 => 302,  1217 => 301,  1214 => 300,  1211 => 349,  1208 => 298,  1205 => 297,  1202 => 347,  1199 => 295,  1196 => 294,  1193 => 293,  1191 => 292,  1188 => 291,  1186 => 290,  1183 => 289,  1180 => 288,  1178 => 287,  1175 => 286,  1168 => 332,  1165 => 281,  1161 => 279,  1156 => 276,  1154 => 327,  1148 => 273,  1142 => 271,  1136 => 268,  1132 => 267,  1116 => 266,  1113 => 265,  1110 => 264,  1107 => 263,  1104 => 262,  1101 => 261,  1098 => 313,  1095 => 312,  1092 => 258,  1089 => 257,  1087 => 256,  1084 => 307,  1076 => 253,  1071 => 251,  1064 => 298,  1061 => 249,  1058 => 248,  1055 => 247,  1052 => 246,  1050 => 245,  1047 => 244,  1044 => 243,  1041 => 242,  1038 => 241,  1035 => 240,  1032 => 283,  1029 => 282,  1026 => 237,  1023 => 236,  1020 => 235,  1017 => 234,  1014 => 272,  1012 => 271,  1009 => 270,  1006 => 230,  1003 => 229,  1001 => 228,  998 => 227,  981 => 223,  969 => 221,  962 => 218,  960 => 217,  955 => 252,  934 => 241,  920 => 235,  917 => 206,  914 => 205,  906 => 202,  901 => 201,  898 => 200,  895 => 199,  880 => 197,  878 => 219,  871 => 195,  868 => 194,  865 => 213,  863 => 192,  860 => 211,  854 => 187,  848 => 186,  842 => 184,  833 => 199,  829 => 180,  822 => 178,  819 => 177,  810 => 172,  804 => 170,  799 => 168,  796 => 183,  789 => 162,  773 => 158,  765 => 156,  763 => 155,  760 => 154,  757 => 153,  754 => 152,  752 => 151,  746 => 161,  743 => 148,  741 => 147,  738 => 146,  735 => 145,  733 => 144,  730 => 143,  723 => 138,  721 => 153,  714 => 135,  706 => 132,  698 => 130,  684 => 125,  681 => 124,  678 => 133,  676 => 122,  670 => 120,  668 => 119,  659 => 114,  649 => 122,  636 => 107,  628 => 104,  623 => 103,  621 => 102,  612 => 99,  608 => 98,  604 => 96,  591 => 92,  583 => 89,  580 => 88,  577 => 87,  574 => 86,  571 => 85,  565 => 83,  562 => 82,  559 => 81,  556 => 80,  553 => 79,  534 => 71,  526 => 68,  505 => 59,  500 => 58,  498 => 57,  495 => 56,  488 => 51,  486 => 50,  473 => 48,  470 => 73,  461 => 70,  458 => 43,  455 => 42,  452 => 41,  444 => 38,  442 => 62,  439 => 36,  431 => 34,  429 => 33,  426 => 58,  423 => 57,  420 => 30,  417 => 29,  414 => 52,  411 => 27,  399 => 23,  396 => 22,  393 => 21,  391 => 20,  380 => 16,  377 => 37,  368 => 34,  357 => 6,  350 => 26,  347 => 858,  345 => 848,  342 => 23,  324 => 804,  322 => 780,  319 => 779,  317 => 773,  314 => 772,  307 => 743,  302 => 702,  297 => 694,  284 => 684,  281 => 411,  276 => 395,  271 => 374,  266 => 366,  259 => 557,  251 => 553,  246 => 510,  238 => 312,  235 => 311,  233 => 304,  223 => 474,  218 => 467,  215 => 280,  213 => 460,  210 => 270,  205 => 452,  183 => 410,  180 => 409,  173 => 386,  163 => 353,  148 => 286,  145 => 285,  140 => 226,  125 => 176,  108 => 77,  93 => 15,  88 => 5,  85 => 4,  82 => 2,  14 => 1,  50 => 11,  42 => 8,  40 => 7,  28 => 3,  26 => 2,  20 => 1,  786 => 238,  780 => 176,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 134,  708 => 212,  691 => 210,  674 => 209,  664 => 206,  661 => 205,  658 => 124,  652 => 200,  648 => 198,  646 => 197,  624 => 194,  598 => 107,  595 => 190,  592 => 189,  589 => 188,  586 => 90,  581 => 185,  572 => 180,  568 => 84,  566 => 177,  563 => 176,  542 => 149,  539 => 148,  536 => 147,  523 => 167,  521 => 166,  518 => 63,  512 => 84,  483 => 156,  481 => 155,  478 => 74,  476 => 147,  467 => 72,  462 => 143,  456 => 68,  453 => 139,  450 => 64,  447 => 39,  441 => 136,  437 => 61,  430 => 134,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  413 => 128,  407 => 126,  404 => 125,  401 => 124,  398 => 123,  388 => 42,  385 => 41,  382 => 17,  374 => 36,  369 => 111,  363 => 32,  359 => 7,  353 => 103,  351 => 102,  348 => 101,  346 => 100,  338 => 99,  335 => 21,  329 => 814,  325 => 94,  308 => 13,  299 => 8,  294 => 693,  286 => 687,  267 => 74,  260 => 363,  255 => 353,  245 => 335,  208 => 453,  204 => 267,  198 => 436,  195 => 435,  193 => 429,  177 => 49,  172 => 46,  166 => 209,  164 => 203,  159 => 196,  143 => 227,  135 => 211,  130 => 190,  127 => 32,  124 => 132,  121 => 131,  118 => 143,  115 => 142,  107 => 25,  101 => 89,  89 => 47,  64 => 3,  56 => 184,  44 => 82,  39 => 69,  34 => 61,  31 => 4,  29 => 12,  295 => 142,  289 => 688,  283 => 138,  277 => 136,  272 => 134,  269 => 608,  248 => 336,  242 => 113,  230 => 303,  219 => 101,  192 => 88,  187 => 87,  185 => 416,  170 => 385,  153 => 341,  147 => 69,  144 => 176,  138 => 212,  132 => 34,  128 => 177,  120 => 166,  80 => 41,  75 => 39,  72 => 37,  70 => 33,  67 => 32,  35 => 5,  952 => 251,  949 => 270,  946 => 269,  942 => 302,  938 => 300,  932 => 213,  929 => 212,  927 => 295,  921 => 292,  913 => 291,  910 => 290,  908 => 203,  905 => 288,  899 => 286,  897 => 227,  894 => 226,  888 => 282,  886 => 281,  883 => 280,  877 => 278,  875 => 277,  872 => 276,  866 => 274,  864 => 273,  861 => 272,  859 => 269,  856 => 268,  853 => 267,  849 => 206,  844 => 204,  836 => 182,  830 => 198,  828 => 197,  824 => 179,  818 => 244,  816 => 243,  812 => 190,  806 => 238,  803 => 237,  801 => 185,  798 => 184,  795 => 234,  792 => 233,  787 => 161,  784 => 233,  781 => 232,  776 => 159,  774 => 267,  769 => 171,  767 => 170,  764 => 169,  761 => 230,  756 => 165,  753 => 164,  749 => 162,  745 => 218,  739 => 156,  734 => 214,  728 => 213,  716 => 211,  713 => 210,  709 => 133,  702 => 208,  696 => 140,  693 => 128,  690 => 127,  687 => 126,  682 => 203,  680 => 134,  673 => 121,  669 => 207,  665 => 118,  663 => 195,  660 => 194,  657 => 193,  650 => 192,  647 => 111,  644 => 110,  641 => 196,  635 => 117,  632 => 187,  629 => 186,  626 => 184,  619 => 113,  616 => 100,  610 => 181,  607 => 193,  603 => 192,  600 => 95,  597 => 177,  594 => 93,  588 => 91,  584 => 186,  570 => 164,  564 => 99,  561 => 175,  558 => 174,  554 => 153,  551 => 78,  548 => 77,  546 => 175,  543 => 174,  540 => 73,  537 => 72,  531 => 70,  529 => 92,  525 => 157,  522 => 156,  515 => 85,  513 => 62,  509 => 83,  507 => 60,  504 => 159,  501 => 80,  493 => 78,  490 => 77,  482 => 136,  479 => 135,  471 => 129,  468 => 128,  464 => 71,  460 => 123,  454 => 121,  451 => 120,  448 => 119,  434 => 118,  428 => 59,  424 => 114,  418 => 112,  410 => 127,  408 => 50,  405 => 49,  402 => 24,  384 => 106,  381 => 105,  379 => 104,  376 => 113,  373 => 102,  370 => 101,  366 => 33,  362 => 8,  360 => 128,  356 => 105,  354 => 5,  343 => 92,  340 => 841,  337 => 22,  332 => 20,  326 => 86,  323 => 85,  320 => 84,  311 => 14,  309 => 766,  304 => 742,  301 => 144,  296 => 151,  293 => 6,  291 => 691,  288 => 4,  285 => 3,  279 => 649,  274 => 637,  265 => 130,  261 => 566,  254 => 46,  250 => 341,  244 => 43,  236 => 109,  228 => 488,  224 => 103,  221 => 38,  216 => 100,  207 => 269,  203 => 443,  200 => 442,  197 => 249,  191 => 246,  188 => 417,  182 => 85,  176 => 223,  174 => 217,  169 => 210,  165 => 368,  161 => 202,  158 => 347,  155 => 346,  141 => 175,  136 => 168,  133 => 191,  123 => 167,  106 => 104,  103 => 68,  83 => 16,  66 => 12,  63 => 14,  61 => 2,  57 => 19,  53 => 17,  49 => 123,  47 => 14,  45 => 9,  330 => 103,  327 => 805,  321 => 152,  315 => 91,  312 => 767,  306 => 88,  303 => 87,  300 => 93,  292 => 91,  290 => 5,  287 => 89,  280 => 78,  275 => 86,  273 => 394,  270 => 75,  264 => 567,  262 => 81,  256 => 556,  253 => 342,  247 => 75,  243 => 327,  240 => 326,  237 => 71,  231 => 69,  225 => 298,  222 => 297,  220 => 290,  217 => 289,  214 => 61,  209 => 96,  206 => 57,  202 => 266,  194 => 248,  190 => 428,  184 => 233,  178 => 402,  175 => 401,  171 => 216,  168 => 369,  162 => 41,  160 => 352,  156 => 195,  150 => 340,  142 => 30,  137 => 29,  134 => 161,  129 => 148,  126 => 147,  119 => 117,  112 => 27,  105 => 76,  102 => 60,  100 => 67,  97 => 56,  95 => 55,  92 => 19,  87 => 57,  76 => 31,  73 => 12,  69 => 13,  62 => 29,  59 => 185,  55 => 18,  52 => 11,  46 => 122,  43 => 20,  41 => 81,  38 => 17,  36 => 68,  30 => 15,  24 => 13,  116 => 116,  113 => 118,  110 => 117,  104 => 90,  98 => 56,  94 => 57,  90 => 14,  86 => 46,  81 => 40,  78 => 14,  71 => 19,  68 => 22,  60 => 18,  54 => 12,  51 => 173,  48 => 14,  12 => 36,);
    }
}