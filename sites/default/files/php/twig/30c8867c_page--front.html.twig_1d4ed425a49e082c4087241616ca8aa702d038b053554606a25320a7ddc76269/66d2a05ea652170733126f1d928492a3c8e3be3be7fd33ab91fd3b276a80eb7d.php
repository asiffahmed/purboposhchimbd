<?php

/* themes/bootstrap_subtheme/templates/page--front.html.twig */
class __TwigTemplate_ff9ee1c57a46c8d4c5d89285bab47697016656bbd0db8a1eed1337fd7863cd81 extends Twig_Template
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
            'newsrow_one_top_first' => array($this, 'block_newsrow_one_top_first'),
            'newsrow_one_top_second' => array($this, 'block_newsrow_one_top_second'),
            'newsrow_one_top_third' => array($this, 'block_newsrow_one_top_third'),
            'newsrow_one_fourth' => array($this, 'block_newsrow_one_fourth'),
            'advertise_second' => array($this, 'block_advertise_second'),
            'newsrow_two_first' => array($this, 'block_newsrow_two_first'),
            'newsrow_two_second_top' => array($this, 'block_newsrow_two_second_top'),
            'newsrow_two_third' => array($this, 'block_newsrow_two_third'),
            'newsrow_three_first' => array($this, 'block_newsrow_three_first'),
            'newsrow_three_second' => array($this, 'block_newsrow_three_second'),
            'newsrow_three_third' => array($this, 'block_newsrow_three_third'),
            'newsrow_four_first' => array($this, 'block_newsrow_four_first'),
            'newsrow_four_second' => array($this, 'block_newsrow_four_second'),
            'newsrow_five_first' => array($this, 'block_newsrow_five_first'),
            'newsrow_five_second' => array($this, 'block_newsrow_five_second'),
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
        $tags = array("set" => 72, "if" => 74, "block" => 75);
        $filters = array("clean_class" => 80, "t" => 89);
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
        // line 72
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 74
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 75
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 106
        echo "
";
        // line 108
        $this->displayBlock('main', $context, $blocks);
        // line 370
        echo "

<div class=\"main-container bg\">
\t<div class=\"container\">
\t\t<div class=\"row footer-area\">
\t\t";
        // line 375
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
            // line 376
            echo "\t\t  ";
            $this->displayBlock('footer_first', $context, $blocks);
            // line 381
            echo "\t\t";
        }
        // line 382
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
            // line 383
            echo "\t\t  ";
            $this->displayBlock('footer_second', $context, $blocks);
            // line 388
            echo "\t\t";
        }
        // line 389
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
            // line 390
            echo "\t\t  ";
            $this->displayBlock('footer_third', $context, $blocks);
            // line 395
            echo "\t\t";
        }
        // line 396
        echo "\t\t</div>
\t</div>
</div>
<div class=\"main-container\" style=\"background-color:#0D0D0D;\">
\t<div class=\"container\">
\t\t<p style=\"color:#fefcef; padding-top:10px; padding-bottom:10px;\">© ২০১৬ সর্বস্বত্ব স্বত্বাধিকার সংরক্ষিত </p>
\t</div>
</div>

";
        // line 405
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 406
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 412
        echo "
";
    }

    // line 75
    public function block_navbar($context, array $blocks = array())
    {
        // line 76
        echo "    ";
        // line 77
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 79
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 80
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 83
        echo "    <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      <div class=\"navbar-header\">
        ";
        // line 85
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 87
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 88
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">";
            // line 89
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 95
        echo "      </div>

      ";
        // line 98
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 99
            echo "        <div class=\"navbar-collapse collapse\">
          ";
            // line 100
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 103
        echo "    </header>
  ";
    }

    // line 108
    public function block_main($context, array $blocks = array())
    {
        // line 109
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">
\t\t
      ";
        // line 113
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 114
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 119
            echo "      ";
        }
        // line 120
        echo "\t  
\t   ";
        // line 122
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "advertise", array())) {
            // line 123
            echo "        ";
            $this->displayBlock('advertise', $context, $blocks);
            // line 128
            echo "      ";
        }
        // line 129
        echo "
      ";
        // line 131
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 132
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 137
            echo "      ";
        }
        // line 138
        echo "
      ";
        // line 140
        echo "      ";
        // line 141
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 142
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 143
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 144
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 145
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 148
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 151
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 152
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 155
            echo "        ";
        }
        // line 156
        echo "
        ";
        // line 158
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 159
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 162
            echo "        ";
        }
        // line 163
        echo "
        ";
        // line 165
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 166
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 169
            echo "        ";
        }
        // line 170
        echo "
        ";
        // line 172
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 173
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 176
            echo "        ";
        }
        // line 177
        echo "
        ";
        // line 179
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 183
        echo "      </section>

      ";
        // line 186
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 187
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 192
            echo "      ";
        }
        // line 193
        echo "    </div>
\t
\t<div class=\"row\">
\t  ";
        // line 197
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_first", array())) {
            // line 198
            echo "        ";
            $this->displayBlock('newsrow_one_top_first', $context, $blocks);
            // line 203
            echo "      ";
        }
        echo "\t

\t\t";
        // line 206
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_second", array())) {
            // line 207
            echo "        ";
            $this->displayBlock('newsrow_one_top_second', $context, $blocks);
            // line 212
            echo "      ";
        }
        // line 213
        echo "\t  
\t  ";
        // line 215
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_third", array())) {
            // line 216
            echo "        ";
            $this->displayBlock('newsrow_one_top_third', $context, $blocks);
            // line 221
            echo "      ";
        }
        // line 222
        echo "\t  
\t  ";
        // line 224
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_fourth", array())) {
            // line 225
            echo "        ";
            $this->displayBlock('newsrow_one_fourth', $context, $blocks);
            // line 230
            echo "      ";
        }
        // line 231
        echo "\t</div>
\t
\t<div class=\"row\">
\t    ";
        // line 235
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "advertise_second", array())) {
            // line 236
            echo "        ";
            $this->displayBlock('advertise_second', $context, $blocks);
            // line 241
            echo "      ";
        }
        // line 242
        echo "\t</div>
\t<div class=\"row\">
\t";
        // line 245
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_first", array())) {
            // line 246
            echo "        ";
            $this->displayBlock('newsrow_two_first', $context, $blocks);
            // line 251
            echo "      ";
        }
        // line 252
        echo "\t  
\t  ";
        // line 254
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_second_top", array())) {
            // line 255
            echo "        ";
            $this->displayBlock('newsrow_two_second_top', $context, $blocks);
            // line 261
            echo "      ";
        }
        // line 262
        echo "\t  
\t  
\t  ";
        // line 265
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_third", array())) {
            // line 266
            echo "        ";
            $this->displayBlock('newsrow_two_third', $context, $blocks);
            // line 271
            echo "      ";
        }
        // line 272
        echo "\t</div>
\t
\t<div class=\"row\">
\t
\t";
        // line 277
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_first", array())) {
            // line 278
            echo "        ";
            $this->displayBlock('newsrow_three_first', $context, $blocks);
            // line 283
            echo "      ";
        }
        // line 284
        echo "\t  
\t";
        // line 286
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_second", array())) {
            // line 287
            echo "        ";
            $this->displayBlock('newsrow_three_second', $context, $blocks);
            // line 292
            echo "      ";
        }
        // line 293
        echo "\t    
\t";
        // line 295
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_third", array())) {
            // line 296
            echo "        ";
            $this->displayBlock('newsrow_three_third', $context, $blocks);
            // line 301
            echo "      ";
        }
        // line 302
        echo "\t
\t</div>
\t
\t<div class=\"row\">\t
\t";
        // line 307
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_four_first", array())) {
            // line 308
            echo "        ";
            $this->displayBlock('newsrow_four_first', $context, $blocks);
            // line 313
            echo "      ";
        }
        // line 314
        echo "\t  
\t";
        // line 316
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_four_second", array())) {
            // line 317
            echo "        ";
            $this->displayBlock('newsrow_four_second', $context, $blocks);
            // line 322
            echo "      ";
        }
        // line 323
        echo "\t  
\t</div>
\t
\t<div class=\"row\">\t
\t";
        // line 328
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_five_first", array())) {
            // line 329
            echo "        ";
            $this->displayBlock('newsrow_five_first', $context, $blocks);
            // line 334
            echo "      ";
        }
        // line 335
        echo "\t  
\t";
        // line 337
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_five_second", array())) {
            // line 338
            echo "        ";
            $this->displayBlock('newsrow_five_second', $context, $blocks);
            // line 343
            echo "      ";
        }
        // line 344
        echo "\t  
\t</div>
\t
\t<div class=\"row\">\t
\t";
        // line 349
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_six_first", array())) {
            // line 350
            echo "        ";
            $this->displayBlock('newsrow_six_first', $context, $blocks);
            // line 355
            echo "      ";
        }
        // line 356
        echo "\t  
\t";
        // line 358
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_six_second", array())) {
            // line 359
            echo "        ";
            $this->displayBlock('newsrow_six_second', $context, $blocks);
            // line 364
            echo "      ";
        }
        // line 365
        echo "\t  
\t</div>
\t
  </div>
";
    }

    // line 114
    public function block_header($context, array $blocks = array())
    {
        // line 115
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 116
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 123
    public function block_advertise($context, array $blocks = array())
    {
        // line 124
        echo "          <div class=\"col-xs-24 col-sm-12 advertise-style\">
            ";
        // line 125
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "advertise", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 132
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 133
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 134
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 152
    public function block_highlighted($context, array $blocks = array())
    {
        // line 153
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 159
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 160
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
    }

    // line 166
    public function block_action_links($context, array $blocks = array())
    {
        // line 167
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 173
    public function block_help($context, array $blocks = array())
    {
        // line 174
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 179
    public function block_content($context, array $blocks = array())
    {
        // line 180
        echo "          <a id=\"main-content\"></a>
          ";
        // line 181
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 187
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 188
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 189
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 198
    public function block_newsrow_one_top_first($context, array $blocks = array())
    {
        // line 199
        echo "          <aside class=\"col-sm-3\" >
            ";
        // line 200
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 207
    public function block_newsrow_one_top_second($context, array $blocks = array())
    {
        // line 208
        echo "          <aside class=\"col-sm-3\" >
            ";
        // line 209
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 216
    public function block_newsrow_one_top_third($context, array $blocks = array())
    {
        // line 217
        echo "          <aside class=\"col-sm-3\" >
            ";
        // line 218
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_third", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 225
    public function block_newsrow_one_fourth($context, array $blocks = array())
    {
        // line 226
        echo "          <aside class=\"col-sm-3\" >
            ";
        // line 227
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_fourth", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 236
    public function block_advertise_second($context, array $blocks = array())
    {
        // line 237
        echo "          <div class=\"col-sm-12 advertise-style\">
            ";
        // line 238
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "advertise_second", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 246
    public function block_newsrow_two_first($context, array $blocks = array())
    {
        // line 247
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 248
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 255
    public function block_newsrow_two_second_top($context, array $blocks = array())
    {
        // line 256
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 257
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_second_top", array()), "html", null, true));
        echo "
\t\t\t";
        // line 258
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_second_bottom", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 266
    public function block_newsrow_two_third($context, array $blocks = array())
    {
        // line 267
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 268
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_third", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 278
    public function block_newsrow_three_first($context, array $blocks = array())
    {
        // line 279
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 280
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 287
    public function block_newsrow_three_second($context, array $blocks = array())
    {
        // line 288
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 289
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 296
    public function block_newsrow_three_third($context, array $blocks = array())
    {
        // line 297
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 298
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_third", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 308
    public function block_newsrow_four_first($context, array $blocks = array())
    {
        // line 309
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 310
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_four_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 317
    public function block_newsrow_four_second($context, array $blocks = array())
    {
        // line 318
        echo "          <aside class=\"col-sm-8\" >
            ";
        // line 319
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_four_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 329
    public function block_newsrow_five_first($context, array $blocks = array())
    {
        // line 330
        echo "          <aside class=\"col-sm-6\" >
            ";
        // line 331
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_five_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 338
    public function block_newsrow_five_second($context, array $blocks = array())
    {
        // line 339
        echo "          <aside class=\"col-sm-6\" >
            ";
        // line 340
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_five_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 350
    public function block_newsrow_six_first($context, array $blocks = array())
    {
        // line 351
        echo "          <aside class=\"col-sm-8\" >
            ";
        // line 352
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_six_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 359
    public function block_newsrow_six_second($context, array $blocks = array())
    {
        // line 360
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 361
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_six_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 376
    public function block_footer_first($context, array $blocks = array())
    {
        // line 377
        echo "\t\t\t<aside class=\"col-sm-4     \" >
\t\t\t\t";
        // line 378
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
        echo "
\t\t\t  </aside>
\t\t  ";
    }

    // line 383
    public function block_footer_second($context, array $blocks = array())
    {
        // line 384
        echo "\t\t\t<aside class=\"col-sm-4     \" >
\t\t\t\t";
        // line 385
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
        echo "
\t\t\t  </aside>
\t\t  ";
    }

    // line 390
    public function block_footer_third($context, array $blocks = array())
    {
        // line 391
        echo "\t\t\t<aside class=\"col-sm-4     \" >
\t\t\t\t";
        // line 392
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
        echo "
\t\t\t  </aside>
\t\t  ";
    }

    // line 406
    public function block_footer($context, array $blocks = array())
    {
        // line 407
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 408
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_subtheme/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  943 => 408,  938 => 407,  935 => 406,  928 => 392,  925 => 391,  922 => 390,  915 => 385,  912 => 384,  909 => 383,  902 => 378,  899 => 377,  896 => 376,  889 => 361,  886 => 360,  883 => 359,  876 => 352,  873 => 351,  870 => 350,  863 => 340,  860 => 339,  857 => 338,  850 => 331,  847 => 330,  844 => 329,  837 => 319,  834 => 318,  831 => 317,  824 => 310,  821 => 309,  818 => 308,  811 => 298,  808 => 297,  805 => 296,  798 => 289,  795 => 288,  792 => 287,  785 => 280,  782 => 279,  779 => 278,  772 => 268,  769 => 267,  766 => 266,  759 => 258,  755 => 257,  752 => 256,  749 => 255,  742 => 248,  739 => 247,  736 => 246,  729 => 238,  726 => 237,  723 => 236,  716 => 227,  713 => 226,  710 => 225,  703 => 218,  700 => 217,  697 => 216,  690 => 209,  687 => 208,  684 => 207,  677 => 200,  674 => 199,  671 => 198,  664 => 189,  661 => 188,  658 => 187,  652 => 181,  649 => 180,  646 => 179,  639 => 174,  636 => 173,  629 => 167,  626 => 166,  619 => 160,  616 => 159,  609 => 153,  606 => 152,  599 => 134,  596 => 133,  593 => 132,  586 => 125,  583 => 124,  580 => 123,  573 => 116,  570 => 115,  567 => 114,  559 => 365,  556 => 364,  553 => 359,  550 => 358,  547 => 356,  544 => 355,  541 => 350,  538 => 349,  532 => 344,  529 => 343,  526 => 338,  523 => 337,  520 => 335,  517 => 334,  514 => 329,  511 => 328,  505 => 323,  502 => 322,  499 => 317,  496 => 316,  493 => 314,  490 => 313,  487 => 308,  484 => 307,  478 => 302,  475 => 301,  472 => 296,  469 => 295,  466 => 293,  463 => 292,  460 => 287,  457 => 286,  454 => 284,  451 => 283,  448 => 278,  445 => 277,  439 => 272,  436 => 271,  433 => 266,  430 => 265,  426 => 262,  423 => 261,  420 => 255,  417 => 254,  414 => 252,  411 => 251,  408 => 246,  405 => 245,  401 => 242,  398 => 241,  395 => 236,  392 => 235,  387 => 231,  384 => 230,  381 => 225,  378 => 224,  375 => 222,  372 => 221,  369 => 216,  366 => 215,  363 => 213,  360 => 212,  357 => 207,  354 => 206,  348 => 203,  345 => 198,  342 => 197,  337 => 193,  334 => 192,  331 => 187,  328 => 186,  324 => 183,  321 => 179,  318 => 177,  315 => 176,  312 => 173,  309 => 172,  306 => 170,  303 => 169,  300 => 166,  297 => 165,  294 => 163,  291 => 162,  288 => 159,  285 => 158,  282 => 156,  279 => 155,  276 => 152,  273 => 151,  267 => 148,  265 => 145,  264 => 144,  263 => 143,  262 => 142,  261 => 141,  259 => 140,  256 => 138,  253 => 137,  250 => 132,  247 => 131,  244 => 129,  241 => 128,  238 => 123,  235 => 122,  232 => 120,  229 => 119,  226 => 114,  223 => 113,  216 => 109,  213 => 108,  208 => 103,  202 => 100,  199 => 99,  196 => 98,  192 => 95,  183 => 89,  180 => 88,  177 => 87,  173 => 85,  167 => 83,  165 => 80,  164 => 79,  163 => 77,  161 => 76,  158 => 75,  153 => 412,  149 => 406,  147 => 405,  136 => 396,  133 => 395,  130 => 390,  127 => 389,  124 => 388,  121 => 383,  118 => 382,  115 => 381,  112 => 376,  110 => 375,  103 => 370,  101 => 108,  98 => 106,  94 => 75,  92 => 74,  90 => 72,  75 => 59,);
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
/* 		*/
/*       {# Header #}*/
/*       {% if page.header %}*/
/*         {% block header %}*/
/*           <div class="col-sm-12" role="heading">*/
/*             {{ page.header }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	   {# Advertise #}*/
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
/*           page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',*/
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
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/*     </div>*/
/* 	*/
/* 	<div class="row">*/
/* 	  {# newsrow_one_top_first #}*/
/*       {% if page.newsrow_one_top_first %}*/
/*         {% block newsrow_one_top_first %}*/
/*           <aside class="col-sm-3" >*/
/*             {{ page.newsrow_one_top_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}	*/
/* */
/* 		{# newsrow_one_top_second #}*/
/*       {% if page.newsrow_one_top_second %}*/
/*         {% block newsrow_one_top_second %}*/
/*           <aside class="col-sm-3" >*/
/*             {{ page.newsrow_one_top_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	  {# newsrow_one_top_third #}*/
/*       {% if page.newsrow_one_top_third %}*/
/*         {% block newsrow_one_top_third %}*/
/*           <aside class="col-sm-3" >*/
/*             {{ page.newsrow_one_top_third }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	  {# newsrow_one_fourth #}*/
/*       {% if page.newsrow_one_fourth %}*/
/*         {% block newsrow_one_fourth %}*/
/*           <aside class="col-sm-3" >*/
/*             {{ page.newsrow_one_fourth }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	</div>*/
/* 	*/
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
/* 	<div class="row">*/
/* 	{# newsrow_two_first #}*/
/*       {% if page.newsrow_two_first %}*/
/*         {% block newsrow_two_first %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_two_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	  {# newsrow_two_second #}*/
/*       {% if page.newsrow_two_second_top %}*/
/*         {% block newsrow_two_second_top %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_two_second_top }}*/
/* 			{{ page.newsrow_two_second_bottom }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	  */
/* 	  {# newsrow_two_third #}*/
/*       {% if page.newsrow_two_third %}*/
/*         {% block newsrow_two_third %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_two_third }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	</div>*/
/* 	*/
/* 	<div class="row">*/
/* 	*/
/* 	{# newsrow_three_first #}*/
/*       {% if page.newsrow_three_first %}*/
/*         {% block newsrow_three_first %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_three_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	{# newsrow_three_second #}*/
/*       {% if page.newsrow_three_second %}*/
/*         {% block newsrow_three_second %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_three_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	    */
/* 	{# newsrow_three_third #}*/
/*       {% if page.newsrow_three_third %}*/
/*         {% block newsrow_three_third %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_three_third }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	*/
/* 	</div>*/
/* 	*/
/* 	<div class="row">	*/
/* 	{# newsrow_four_first #}*/
/*       {% if page.newsrow_four_first %}*/
/*         {% block newsrow_four_first %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_four_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	{# newsrow_four_second #}*/
/*       {% if page.newsrow_four_second %}*/
/*         {% block newsrow_four_second %}*/
/*           <aside class="col-sm-8" >*/
/*             {{ page.newsrow_four_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	</div>*/
/* 	*/
/* 	<div class="row">	*/
/* 	{# newsrow_five_first #}*/
/*       {% if page.newsrow_five_first %}*/
/*         {% block newsrow_five_first %}*/
/*           <aside class="col-sm-6" >*/
/*             {{ page.newsrow_five_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	{# newsrow_five_second #}*/
/*       {% if page.newsrow_five_second %}*/
/*         {% block newsrow_five_second %}*/
/*           <aside class="col-sm-6" >*/
/*             {{ page.newsrow_five_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	</div>*/
/* 	*/
/* 	<div class="row">	*/
/* 	{# newsrow_six_first #}*/
/*       {% if page.newsrow_six_first %}*/
/*         {% block newsrow_six_first %}*/
/*           <aside class="col-sm-8" >*/
/*             {{ page.newsrow_six_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	{# newsrow_six_second #}*/
/*       {% if page.newsrow_six_second %}*/
/*         {% block newsrow_six_second %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_six_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	</div>*/
/* 	*/
/*   </div>*/
/* {% endblock %}*/
/* */
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
/* */
