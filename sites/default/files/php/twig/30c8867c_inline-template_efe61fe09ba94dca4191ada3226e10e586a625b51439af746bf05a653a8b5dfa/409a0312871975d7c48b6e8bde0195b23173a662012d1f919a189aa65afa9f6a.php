<?php

/* {# inline_template_start #}<div class="row">
   <div class="thumb-view">
		<div class="col-sm-4">
			{{ field_image }}
		</div>
		<div class="col-sm-8 thumb-view-content">
			<h5>
				{{ title }}
			</h5>
		</div>
   </div>
</div> */
class __TwigTemplate_9158e4874273bf54503f7f142380fc513c41e13c2bb5809c73649c896aab3a16 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
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

        // line 1
        echo "<div class=\"row\">
   <div class=\"thumb-view\">
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "
\t\t</div>
\t\t<div class=\"col-sm-8 thumb-view-content\">
\t\t\t<h5>
\t\t\t\t";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "
\t\t\t</h5>
\t\t</div>
   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"row\">
   <div class=\"thumb-view\">
\t\t<div class=\"col-sm-4\">
\t\t\t{{ field_image }}
\t\t</div>
\t\t<div class=\"col-sm-8 thumb-view-content\">
\t\t\t<h5>
\t\t\t\t{{ title }}
\t\t\t</h5>
\t\t</div>
   </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  59 => 4,  54 => 1,);
    }
}
/* {# inline_template_start #}<div class="row">*/
/*    <div class="thumb-view">*/
/* 		<div class="col-sm-4">*/
/* 			{{ field_image }}*/
/* 		</div>*/
/* 		<div class="col-sm-8 thumb-view-content">*/
/* 			<h5>*/
/* 				{{ title }}*/
/* 			</h5>*/
/* 		</div>*/
/*    </div>*/
/* </div>*/
