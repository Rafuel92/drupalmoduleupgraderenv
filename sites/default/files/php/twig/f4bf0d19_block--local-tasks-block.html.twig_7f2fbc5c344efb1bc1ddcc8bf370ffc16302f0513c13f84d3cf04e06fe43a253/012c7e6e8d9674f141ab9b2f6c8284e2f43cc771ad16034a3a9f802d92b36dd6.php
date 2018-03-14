<?php

/* core/themes/classy/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_0eac5abd20927396a0319e8c2028139a2870e992cc6cf633c73f5a0415f7f533 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "core/themes/classy/templates/block/block--local-tasks-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_168a9eb4ab02735e1acafb9a78b6af5c3cfcb03e6baa640448fbbfefbafc7e2e = $this->env->getExtension("native_profiler");
        $__internal_168a9eb4ab02735e1acafb9a78b6af5c3cfcb03e6baa640448fbbfefbafc7e2e->enter($__internal_168a9eb4ab02735e1acafb9a78b6af5c3cfcb03e6baa640448fbbfefbafc7e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/block/block--local-tasks-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array("t" => 10);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_168a9eb4ab02735e1acafb9a78b6af5c3cfcb03e6baa640448fbbfefbafc7e2e->leave($__internal_168a9eb4ab02735e1acafb9a78b6af5c3cfcb03e6baa640448fbbfefbafc7e2e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_0e93a6e7a1ab409f506b598860ccf052ffe7a7c2b32460e1af694765925b6dcf = $this->env->getExtension("native_profiler");
        $__internal_0e93a6e7a1ab409f506b598860ccf052ffe7a7c2b32460e1af694765925b6dcf->enter($__internal_0e93a6e7a1ab409f506b598860ccf052ffe7a7c2b32460e1af694765925b6dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </nav>
  ";
        }
        
        $__internal_0e93a6e7a1ab409f506b598860ccf052ffe7a7c2b32460e1af694765925b6dcf->leave($__internal_0e93a6e7a1ab409f506b598860ccf052ffe7a7c2b32460e1af694765925b6dcf_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for tabs.*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*       {{ content }}*/
/*     </nav>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
