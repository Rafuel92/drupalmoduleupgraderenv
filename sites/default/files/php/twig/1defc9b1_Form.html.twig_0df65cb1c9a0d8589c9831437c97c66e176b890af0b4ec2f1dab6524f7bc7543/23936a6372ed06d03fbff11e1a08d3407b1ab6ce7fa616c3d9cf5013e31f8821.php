<?php

/* modules/contrib/drupalmoduleupgrader/templates/Form.html.twig */
class __TwigTemplate_8fecc9eb484cb26f19fccd8a05bdafd48f0146d6fd2d8cae1c683f8e9c021921 extends Twig_Template
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
        $tags = array("if" => 10);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
        echo "<?php

/**
 * @file
 * Contains \\Drupal\\";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["module"]) ? $context["module"] : null), "html", null, true));
        echo "\\Form\\";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true));
        echo ".
 */

namespace Drupal\\";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["module"]) ? $context["module"] : null), "html", null, true));
        echo "\\Form;

use Drupal\\Core\\Form\\";
        // line 10
        if ((isset($context["config"]) ? $context["config"] : null)) {
            echo "Config";
        }
        echo "FormBase;
use Drupal\\Core\\Form\\FormStateInterface;
use Drupal\\Core\\Render\\Element;

class ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true));
        echo " extends ";
        if ((isset($context["config"]) ? $context["config"] : null)) {
            echo "Config";
        }
        echo "FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return '";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["form_id"]) ? $context["form_id"] : null), "html", null, true));
        echo "';
  }

  ";
        // line 23
        if ((isset($context["config"]) ? $context["config"] : null)) {
            // line 24
            echo "  /**
   * {@inheritdoc}
   */
  public function submitForm(array &\$form, FormStateInterface \$form_state) {
    \$config = \$this->config('";
            // line 28
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["module"]) ? $context["module"] : null), "html", null, true));
            echo ".settings');

    foreach (Element::children(\$form) as \$variable) {
      \$config->set(\$variable, \$form_state->getValue(\$form[\$variable]['#parents']));
    }
    \$config->save();

    if (method_exists(\$this, '_submitForm')) {
      \$this->_submitForm(\$form, \$form_state);
    }

    parent::submitForm(\$form, \$form_state);
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['";
            // line 46
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["module"]) ? $context["module"] : null), "html", null, true));
            echo ".settings'];
  }
  ";
        }
        // line 49
        echo "
}
?>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/drupalmoduleupgrader/templates/Form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 49,  119 => 46,  98 => 28,  92 => 24,  90 => 23,  84 => 20,  71 => 14,  62 => 10,  57 => 8,  49 => 5,  43 => 1,);
    }
}
/* <?php*/
/* */
/* /***/
/*  * @file*/
/*  * Contains \Drupal\{{ module }}\Form\{{ class }}.*/
/*  *//* */
/* */
/* namespace Drupal\{{ module }}\Form;*/
/* */
/* use Drupal\Core\Form\{% if config %}Config{% endif %}FormBase;*/
/* use Drupal\Core\Form\FormStateInterface;*/
/* use Drupal\Core\Render\Element;*/
/* */
/* class {{ class }} extends {% if config %}Config{% endif %}FormBase {*/
/* */
/*   /***/
/*    * {@inheritdoc}*/
/*    *//* */
/*   public function getFormId() {*/
/*     return '{{ form_id }}';*/
/*   }*/
/* */
/*   {% if config %}*/
/*   /***/
/*    * {@inheritdoc}*/
/*    *//* */
/*   public function submitForm(array &$form, FormStateInterface $form_state) {*/
/*     $config = $this->config('{{ module }}.settings');*/
/* */
/*     foreach (Element::children($form) as $variable) {*/
/*       $config->set($variable, $form_state->getValue($form[$variable]['#parents']));*/
/*     }*/
/*     $config->save();*/
/* */
/*     if (method_exists($this, '_submitForm')) {*/
/*       $this->_submitForm($form, $form_state);*/
/*     }*/
/* */
/*     parent::submitForm($form, $form_state);*/
/*   }*/
/* */
/*   /***/
/*    * {@inheritdoc}*/
/*    *//* */
/*   protected function getEditableConfigNames() {*/
/*     return ['{{ module }}.settings'];*/
/*   }*/
/*   {% endif %}*/
/* */
/* }*/
/* ?>*/
/* */
