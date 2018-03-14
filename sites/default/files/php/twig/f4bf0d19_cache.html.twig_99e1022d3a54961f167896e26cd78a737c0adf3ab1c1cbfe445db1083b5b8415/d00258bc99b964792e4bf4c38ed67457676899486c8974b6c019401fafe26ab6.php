<?php

/* @webprofiler/Collector/cache.html.twig */
class __TwigTemplate_d1094656cc6a3e68998074e6a93e2ad8f095c0ac9d9f1dbbe76f32967d1159a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_619a8ccab33532bddf85ecb455a77868c4be819d81cfa906a84ef28c72961ecd = $this->env->getExtension("native_profiler");
        $__internal_619a8ccab33532bddf85ecb455a77868c4be819d81cfa906a84ef28c72961ecd->enter($__internal_619a8ccab33532bddf85ecb455a77868c4be819d81cfa906a84ef28c72961ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/cache.html.twig"));

        $tags = array("block" => 1, "set" => 2, "for" => 12);
        $filters = array("t" => 3, "default" => 21);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'set', 'for'),
                array('t', 'default'),
                array('url')
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
        $this->displayBlock('toolbar', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_619a8ccab33532bddf85ecb455a77868c4be819d81cfa906a84ef28c72961ecd->leave($__internal_619a8ccab33532bddf85ecb455a77868c4be819d81cfa906a84ef28c72961ecd_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_696befa1ac728ea1658b8c10e74de9d6b7685f92ce3a8be3fd2dd0e8b42cc2b5 = $this->env->getExtension("native_profiler");
        $__internal_696befa1ac728ea1658b8c10e74de9d6b7685f92ce3a8be3fd2dd0e8b42cc2b5->enter($__internal_696befa1ac728ea1658b8c10e74de9d6b7685f92ce3a8be3fd2dd0e8b42cc2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.dashboard", array("profile" => (isset($context["token"]) ? $context["token"] : null)), array("fragment" => "cache")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Cache")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Cache")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getCacheHitsCount", array()), "html", null, true));
        echo "
            / ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getCacheMissesCount", array()), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getCacheHits", array()));
        foreach ($context['_seq'] as $context["bin"] => $context["cids"]) {
            // line 13
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>";
            // line 14
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["bin"], "html", null, true));
            echo "</b>
            <span>";
            // line 15
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["cids"], "html", null, true));
            echo "</span>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['bin'], $context['cids'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_696befa1ac728ea1658b8c10e74de9d6b7685f92ce3a8be3fd2dd0e8b42cc2b5->leave($__internal_696befa1ac728ea1658b8c10e74de9d6b7685f92ce3a8be3fd2dd0e8b42cc2b5_prof);

    }

    // line 26
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc58e47029a2ecda71a348114a6d35a1481c1326d79941ececbd82839cd16977 = $this->env->getExtension("native_profiler");
        $__internal_cc58e47029a2ecda71a348114a6d35a1481c1326d79941ececbd82839cd16977->enter($__internal_cc58e47029a2ecda71a348114a6d35a1481c1326d79941ececbd82839cd16977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 27
        echo "    <script id=\"cache\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Cache")));
        echo "</h2>
        <% if( data.cache.length != 0){ %>
        <% _.each( data.cache, function( item, key ){ %>
        <div class=\"panel__container\">

            <ul class=\"list--inline\">
                <li><b>Bin</b> <%= key %></li>
            </ul>

            <table class=\"table--trio\">
                <thead>
                <tr>
                    <th>";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("ID")));
        echo "</th>
                    <th>";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("hit")));
        echo "</th>
                    <th>";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("miss")));
        echo "</th>
                </tr>
                </thead>
                <tbody>
                <% _.each( item, function( value, key ){ %>
                <tr>
                    <td><%= key %></td>
                    <td><%= value['bin_cids_hit'] %></td>
                    <td><%= value['bin_cids_miss'] %></td>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>
        <% }); %>
        <% } else { %>
        <div class=\"panel__container\">
            <p>";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("No results")));
        echo "</p>
        </div>
        <% } %>
    </script>
";
        
        $__internal_cc58e47029a2ecda71a348114a6d35a1481c1326d79941ececbd82839cd16977->leave($__internal_cc58e47029a2ecda71a348114a6d35a1481c1326d79941ececbd82839cd16977_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/cache.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  193 => 59,  173 => 42,  169 => 41,  165 => 40,  150 => 28,  147 => 27,  141 => 26,  131 => 22,  127 => 21,  123 => 19,  120 => 18,  111 => 15,  107 => 14,  104 => 13,  100 => 12,  97 => 11,  94 => 10,  88 => 7,  84 => 6,  80 => 5,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 26,  50 => 25,  48 => 1,);
    }
}
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*     <a href="{{ url("webprofiler.dashboard", {profile: token}, {fragment: 'cache'}) }}" title="{{ 'Cache'|t }}">*/
/*         <img width="20" height="28" alt="{{ 'Cache'|t }}"*/
/*              src="data:image/png;base64,{{ collector.icon }}"/>*/
/*         <span class="sf-toolbar-info-piece-additional sf-toolbar-status">{{ collector.getCacheHitsCount }}*/
/*             / {{ collector.getCacheMissesCount }}</span>*/
/*     </a>*/
/*     {% endset %}*/
/*     {% set text %}*/
/* */
/*     {% for bin, cids in collector.getCacheHits %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>{{ bin }}</b>*/
/*             <span>{{ cids }}</span>*/
/*         </div>*/
/*     {% endfor %}*/
/*     {% endset %}*/
/* */
/*     <div class="sf-toolbar-block">*/
/*         <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*         <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <script id="cache" type="text/template">*/
/*         <h2 class="panel__title">{{ 'Cache'|t }}</h2>*/
/*         <% if( data.cache.length != 0){ %>*/
/*         <% _.each( data.cache, function( item, key ){ %>*/
/*         <div class="panel__container">*/
/* */
/*             <ul class="list--inline">*/
/*                 <li><b>Bin</b> <%= key %></li>*/
/*             </ul>*/
/* */
/*             <table class="table--trio">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>{{ 'ID'|t }}</th>*/
/*                     <th>{{ 'hit'|t }}</th>*/
/*                     <th>{{ 'miss'|t }}</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <% _.each( item, function( value, key ){ %>*/
/*                 <tr>*/
/*                     <td><%= key %></td>*/
/*                     <td><%= value['bin_cids_hit'] %></td>*/
/*                     <td><%= value['bin_cids_miss'] %></td>*/
/*                 </tr>*/
/*                 <% }); %>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         <% }); %>*/
/*         <% } else { %>*/
/*         <div class="panel__container">*/
/*             <p>{{ 'No results'|t }}</p>*/
/*         </div>*/
/*         <% } %>*/
/*     </script>*/
/* {% endblock %}*/
/* */
