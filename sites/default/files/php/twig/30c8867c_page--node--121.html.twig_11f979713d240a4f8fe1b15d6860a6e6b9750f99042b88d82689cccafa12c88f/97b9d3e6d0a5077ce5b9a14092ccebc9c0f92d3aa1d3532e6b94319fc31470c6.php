<?php

/* themes/bootstrap_subtheme/templates/page--node--121.html.twig */
class __TwigTemplate_f54bcdf1f6d2ed8047b52107a6dece7d83edcbc16736e159422cce01233a08bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'advertise' => array($this, 'block_advertise'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'advertise_second' => array($this, 'block_advertise_second'),
            'newsrow_six_first' => array($this, 'block_newsrow_six_first'),
            'newsrow_six_second' => array($this, 'block_newsrow_six_second'),
            'footer_first' => array($this, 'block_footer_first'),
            'footer_second' => array($this, 'block_footer_second'),
            'footer_third' => array($this, 'block_footer_third'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 73, "if" => 75, "block" => 76);
        $filters = array("clean_class" => 81, "t" => 90);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 59
        echo "<div class=\"container\">
    <div class=\"custom-header\">
 
        <div class=\"logo_custom\">
 
        </div> 
\t\t<div id=\"custom-date-data\">
            <div class=\"custom-english-date\">২ আগস্ট ২০১৬ ইং</div><span> | </span>
            <div class=\"custom-bangla-date\">১৮ শ্রাবণ ১৪২৩ বঙ্গাব্দ</div><span> | </span>
            <div class=\"custom-hijri-date\">২৬ শাওয়াল ১৪৩৭ হিজরী</div>
      </div>
    </div>\t
</div>

";
        // line 73
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 75
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 76
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 107
        echo "
";
        // line 109
        $this->displayBlock('main', $context, $blocks);
        // line 227
        echo "
<div class=\"main-container bg\">
\t<div class=\"container\">
\t\t<div class=\"row footer-area\">
\t\t";
        // line 231
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
            // line 232
            echo "\t\t  ";
            $this->displayBlock('footer_first', $context, $blocks);
            // line 237
            echo "\t\t";
        }
        // line 238
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
            // line 239
            echo "\t\t  ";
            $this->displayBlock('footer_second', $context, $blocks);
            // line 244
            echo "\t\t";
        }
        // line 245
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
            // line 246
            echo "\t\t  ";
            $this->displayBlock('footer_third', $context, $blocks);
            // line 251
            echo "\t\t";
        }
        // line 252
        echo "\t\t</div>
\t</div>
</div>
<div class=\"main-container\" style=\"background-color:#0D0D0D;\">
\t<div class=\"container\">
\t\t<p style=\"color:#fefcef; padding-top:10px; padding-bottom:10px;\">© ২০১৬ সর্বস্বত্ব স্বত্বাধিকার সংরক্ষিত </p>
\t</div>
</div>

";
        // line 261
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 262
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 76
    public function block_navbar($context, array $blocks = array())
    {
        // line 77
        echo "    ";
        // line 78
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 80
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 81
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 84
        echo "    <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      <div class=\"navbar-header\">
        ";
        // line 86
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 88
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 89
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">";
            // line 90
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 96
        echo "      </div>

      ";
        // line 99
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 100
            echo "        <div class=\"navbar-collapse collapse\">
          ";
            // line 101
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 104
        echo "    </header>
  ";
    }

    // line 109
    public function block_main($context, array $blocks = array())
    {
        // line 110
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 114
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 115
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 120
            echo "      ";
        }
        // line 121
        echo "\t  
\t  ";
        // line 123
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "advertise", array())) {
            // line 124
            echo "        ";
            $this->displayBlock('advertise', $context, $blocks);
            // line 129
            echo "      ";
        }
        // line 130
        echo "
      ";
        // line 132
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 133
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 138
            echo "      ";
        }
        // line 139
        echo "
      ";
        // line 141
        echo "      ";
        // line 142
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 143
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 144
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 145
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-8") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 146
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 149
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 152
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 153
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 156
            echo "        ";
        }
        // line 157
        echo "
        ";
        // line 159
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 160
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 163
            echo "        ";
        }
        // line 164
        echo "
        ";
        // line 166
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 167
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 170
            echo "        ";
        }
        // line 171
        echo "
        ";
        // line 173
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 174
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 177
            echo "        ";
        }
        // line 178
        echo "
        ";
        // line 180
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 184
        echo "      </section>

      ";
        // line 187
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 188
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 193
            echo "      ";
        }
        // line 194
        echo "    </div>
\t<div class=\"row\">
\t    ";
        // line 197
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "advertise_second", array())) {
            // line 198
            echo "        ";
            $this->displayBlock('advertise_second', $context, $blocks);
            // line 203
            echo "      ";
        }
        // line 204
        echo "\t</div>
\t<div class=\"row\">\t
\t";
        // line 207
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_six_first", array())) {
            // line 208
            echo "        ";
            $this->displayBlock('newsrow_six_first', $context, $blocks);
            // line 213
            echo "      ";
        }
        // line 214
        echo "\t  
\t";
        // line 216
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_six_second", array())) {
            // line 217
            echo "        ";
            $this->displayBlock('newsrow_six_second', $context, $blocks);
            // line 222
            echo "      ";
        }
        // line 223
        echo "\t  
\t</div>
  </div>
";
    }

    // line 115
    public function block_header($context, array $blocks = array())
    {
        // line 116
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 117
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 124
    public function block_advertise($context, array $blocks = array())
    {
        // line 125
        echo "          <div class=\"col-xs-24 col-sm-12 advertise-style\">
            ";
        // line 126
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "advertise", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 133
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 134
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 135
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 153
    public function block_highlighted($context, array $blocks = array())
    {
        // line 154
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 160
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 161
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
    }

    // line 167
    public function block_action_links($context, array $blocks = array())
    {
        // line 168
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 174
    public function block_help($context, array $blocks = array())
    {
        // line 175
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 180
    public function block_content($context, array $blocks = array())
    {
        // line 181
        echo "          <a id=\"main-content\"></a>
          ";
        // line 182
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 188
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 189
        echo "          <aside class=\"col-sm-4\" role=\"complementary\">
            ";
        // line 190
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 198
    public function block_advertise_second($context, array $blocks = array())
    {
        // line 199
        echo "          <div class=\"col-sm-12 advertise-style\">
            ";
        // line 200
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "advertise_second", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 208
    public function block_newsrow_six_first($context, array $blocks = array())
    {
        // line 209
        echo "          <aside class=\"col-sm-6\" >
            ";
        // line 210
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_six_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 217
    public function block_newsrow_six_second($context, array $blocks = array())
    {
        // line 218
        echo "          <aside class=\"col-sm-6\" >
            ";
        // line 219
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_six_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 232
    public function block_footer_first($context, array $blocks = array())
    {
        // line 233
        echo "\t\t\t<aside class=\"col-sm-4     \" >
\t\t\t\t";
        // line 234
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
        echo "
\t\t\t  </aside>
\t\t  ";
    }

    // line 239
    public function block_footer_second($context, array $blocks = array())
    {
        // line 240
        echo "\t\t\t<aside class=\"col-sm-4     \" >
\t\t\t\t";
        // line 241
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
        echo "
\t\t\t  </aside>
\t\t  ";
    }

    // line 246
    public function block_footer_third($context, array $blocks = array())
    {
        // line 247
        echo "\t\t\t<aside class=\"col-sm-4     \" >
\t\t\t\t";
        // line 248
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
        echo "
\t\t\t  </aside>
\t\t  ";
    }

    // line 262
    public function block_footer($context, array $blocks = array())
    {
        // line 263
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 264
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_subtheme/templates/page--node--121.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  555 => 264,  550 => 263,  547 => 262,  540 => 248,  537 => 247,  534 => 246,  527 => 241,  524 => 240,  521 => 239,  514 => 234,  511 => 233,  508 => 232,  501 => 219,  498 => 218,  495 => 217,  488 => 210,  485 => 209,  482 => 208,  475 => 200,  472 => 199,  469 => 198,  462 => 190,  459 => 189,  456 => 188,  450 => 182,  447 => 181,  444 => 180,  437 => 175,  434 => 174,  427 => 168,  424 => 167,  417 => 161,  414 => 160,  407 => 154,  404 => 153,  397 => 135,  394 => 134,  391 => 133,  384 => 126,  381 => 125,  378 => 124,  371 => 117,  368 => 116,  365 => 115,  358 => 223,  355 => 222,  352 => 217,  349 => 216,  346 => 214,  343 => 213,  340 => 208,  337 => 207,  333 => 204,  330 => 203,  327 => 198,  324 => 197,  320 => 194,  317 => 193,  314 => 188,  311 => 187,  307 => 184,  304 => 180,  301 => 178,  298 => 177,  295 => 174,  292 => 173,  289 => 171,  286 => 170,  283 => 167,  280 => 166,  277 => 164,  274 => 163,  271 => 160,  268 => 159,  265 => 157,  262 => 156,  259 => 153,  256 => 152,  250 => 149,  248 => 146,  247 => 145,  246 => 144,  245 => 143,  244 => 142,  242 => 141,  239 => 139,  236 => 138,  233 => 133,  230 => 132,  227 => 130,  224 => 129,  221 => 124,  218 => 123,  215 => 121,  212 => 120,  209 => 115,  206 => 114,  199 => 110,  196 => 109,  191 => 104,  185 => 101,  182 => 100,  179 => 99,  175 => 96,  166 => 90,  163 => 89,  160 => 88,  156 => 86,  150 => 84,  148 => 81,  147 => 80,  146 => 78,  144 => 77,  141 => 76,  135 => 262,  133 => 261,  122 => 252,  119 => 251,  116 => 246,  113 => 245,  110 => 244,  107 => 239,  104 => 238,  101 => 237,  98 => 232,  96 => 231,  90 => 227,  88 => 109,  85 => 107,  81 => 76,  79 => 75,  77 => 73,  61 => 59,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Navigation:*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the navigation region.*/
/*  * - page.navigation_collapsible: Items for the navigation (collapsible) region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* <div class="container">*/
/*     <div class="custom-header">*/
/*  */
/*         <div class="logo_custom">*/
/*  */
/*         </div> */
/* 		<div id="custom-date-data">*/
/*             <div class="custom-english-date">২ আগস্ট ২০১৬ ইং</div><span> | </span>*/
/*             <div class="custom-bangla-date">১৮ শ্রাবণ ১৪২৩ বঙ্গাব্দ</div><span> | </span>*/
/*             <div class="custom-hijri-date">২৬ শাওয়াল ১৪৩৭ হিজরী</div>*/
/*       </div>*/
/*     </div>	*/
/* </div>*/
/* */
/* {% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}*/
/* {# Navbar #}*/
/* {% if page.navigation or page.navigation_collapsible %}*/
/*   {% block navbar %}*/
/*     {%*/
/*       set navbar_classes = [*/
/*         'navbar',*/
/*         theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',*/
/*         theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,*/
/*       ]*/
/*     %}*/
/*     <header{{ navbar_attributes.addClass(navbar_classes) }} id="navbar" role="banner">*/
/*       <div class="navbar-header">*/
/*         {{ page.navigation }}*/
/*         {# .btn-navbar is used as the toggle for collapsed navbar content #}*/
/*         {% if page.navigation_collapsible %}*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*             <span class="sr-only">{{ 'Toggle navigation'|t }}</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       {# Navigation (collapsible) #}*/
/*       {% if page.navigation_collapsible %}*/
/*         <div class="navbar-collapse collapse">*/
/*           {{ page.navigation_collapsible }}*/
/*         </div>*/
/*       {% endif %}*/
/*     </header>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* {# Main #}*/
/* {% block main %}*/
/*   <div role="main" class="main-container {{ container }} js-quickedit-main-content">*/
/*     <div class="row">*/
/* */
/*       {# Header #}*/
/*       {% if page.header %}*/
/*         {% block header %}*/
/*           <div class="col-sm-12" role="heading">*/
/*             {{ page.header }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	  {# Advertise #}*/
/*       {% if page.advertise %}*/
/*         {% block advertise %}*/
/*           <div class="col-xs-24 col-sm-12 advertise-style">*/
/*             {{ page.advertise }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Sidebar First #}*/
/*       {% if page.sidebar_first %}*/
/*         {% block sidebar_first %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Content #}*/
/*       {%*/
/*         set content_classes = [*/
/*           page.sidebar_first and page.sidebar_second ? 'col-sm-6',*/
/*           page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',*/
/*           page.sidebar_second and page.sidebar_first is empty ? 'col-sm-8',*/
/*           page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'*/
/*         ]*/
/*       %}*/
/*       <section{{ content_attributes.addClass(content_classes) }}>*/
/* */
/*         {# Highlighted #}*/
/*         {% if page.highlighted %}*/
/*           {% block highlighted %}*/
/*             <div class="highlighted">{{ page.highlighted }}</div>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Breadcrumbs #}*/
/*         {% if breadcrumb %}*/
/*           {% block breadcrumb %}*/
/*             {{ breadcrumb }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Action Links #}*/
/*         {% if action_links %}*/
/*           {% block action_links %}*/
/*             <ul class="action-links">{{ action_links }}</ul>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Help #}*/
/*         {% if page.help %}*/
/*           {% block help %}*/
/*             {{ page.help }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Content #}*/
/*         {% block content %}*/
/*           <a id="main-content"></a>*/
/*           {{ page.content }}*/
/*         {% endblock %}*/
/*       </section>*/
/* */
/*       {# Sidebar Second #}*/
/*       {% if page.sidebar_second %}*/
/*         {% block sidebar_second %}*/
/*           <aside class="col-sm-4" role="complementary">*/
/*             {{ page.sidebar_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/*     </div>*/
/* 	<div class="row">*/
/* 	    {# Advertise second #}*/
/*       {% if page.advertise_second %}*/
/*         {% block advertise_second %}*/
/*           <div class="col-sm-12 advertise-style">*/
/*             {{ page.advertise_second }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	</div>*/
/* 	<div class="row">	*/
/* 	{# newsrow_six_first #}*/
/*       {% if page.newsrow_six_first %}*/
/*         {% block newsrow_six_first %}*/
/*           <aside class="col-sm-6" >*/
/*             {{ page.newsrow_six_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	{# newsrow_six_second #}*/
/*       {% if page.newsrow_six_second %}*/
/*         {% block newsrow_six_second %}*/
/*           <aside class="col-sm-6" >*/
/*             {{ page.newsrow_six_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	</div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* <div class="main-container bg">*/
/* 	<div class="container">*/
/* 		<div class="row footer-area">*/
/* 		{% if page.footer_first %}*/
/* 		  {% block footer_first %}*/
/* 			<aside class="col-sm-4     " >*/
/* 				{{ page.footer_first }}*/
/* 			  </aside>*/
/* 		  {% endblock %}*/
/* 		{% endif %}*/
/* 			{% if page.footer_second %}*/
/* 		  {% block footer_second %}*/
/* 			<aside class="col-sm-4     " >*/
/* 				{{ page.footer_second }}*/
/* 			  </aside>*/
/* 		  {% endblock %}*/
/* 		{% endif %}*/
/* 			{% if page.footer_third %}*/
/* 		  {% block footer_third %}*/
/* 			<aside class="col-sm-4     " >*/
/* 				{{ page.footer_third }}*/
/* 			  </aside>*/
/* 		  {% endblock %}*/
/* 		{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div class="main-container" style="background-color:#0D0D0D;">*/
/* 	<div class="container">*/
/* 		<p style="color:#fefcef; padding-top:10px; padding-bottom:10px;">© ২০১৬ সর্বস্বত্ব স্বত্বাধিকার সংরক্ষিত </p>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% if page.footer %}*/
/*   {% block footer %}*/
/*     <footer class="footer {{ container }}" role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
