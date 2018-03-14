<?php

/* core/themes/classy/templates/form/form.html.twig */
class __TwigTemplate_2c4b39cfc450511c9b8669dd9a816f85a6479bcb26bd36be8735841b77b0ed47 extends Twig_Template
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
        $__internal_e34aea97720cd1463cfceb5515c662b6099a899945f1f820aef4bea7706b4c84 = $this->env->getExtension("native_profiler");
        $__internal_e34aea97720cd1463cfceb5515c662b6099a899945f1f820aef4bea7706b4c84->enter($__internal_e34aea97720cd1463cfceb5515c662b6099a899945f1f820aef4bea7706b4c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/form.html.twig"));

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

        // line 13
        echo "<form";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
</form>
";
        
        $__internal_e34aea97720cd1463cfceb5515c662b6099a899945f1f820aef4bea7706b4c84->leave($__internal_e34aea97720cd1463cfceb5515c662b6099a899945f1f820aef4bea7706b4c84_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  46 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a 'form' element.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the wrapper element.*/
/*  * - children: The child elements of the form.*/
/*  **/
/*  * @see template_preprocess_form()*/
/*  *//* */
/* #}*/
/* <form{{ attributes }}>*/
/*   {{ children }}*/
/* </form>*/
/* */
