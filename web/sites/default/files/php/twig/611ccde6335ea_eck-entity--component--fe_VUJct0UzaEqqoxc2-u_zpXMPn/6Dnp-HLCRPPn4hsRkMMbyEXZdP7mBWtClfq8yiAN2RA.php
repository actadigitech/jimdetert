<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/actadigitech/templates/component/featured_center_simple/eck-entity--component--featured_center_simple.html.twig */
class __TwigTemplate_675f00105f89de32e360511315153f9c1c1dcce5417557e3e093d9d4d8237efe extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["body"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_description", [], "any", false, false, true, 1), "getValue", [], "method", false, false, true, 1), 0, [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1);
        // line 2
        $context["intro_text"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_intro_text", [], "any", false, false, true, 2), "getValue", [], "method", false, false, true, 2), 0, [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2);
        // line 3
        $context["body_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_title", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3);
        // line 4
        $context["image_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_intro_image", [], "any", false, false, true, 4), "entity", [], "any", false, false, true, 4), "uri", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4);
        // line 5
        $context["image_alt"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_intro_image", [], "any", false, false, true, 5), "entity", [], "any", false, false, true, 5), "uri", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5);
        // line 6
        echo "
";
        // line 7
        $context["variation_options"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_variation_options", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7);
        // line 8
        $context["link_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_link", [], "any", false, false, true, 8), 0, [], "any", false, false, true, 8), "url", [], "any", false, false, true, 8);
        // line 9
        $context["link_text"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_link", [], "any", false, false, true, 9), 0, [], "any", false, false, true, 9), "title", [], "any", false, false, true, 9);
        // line 10
        echo "
";
        // line 11
        if ((($context["variation_options"] ?? null) == "variation_1")) {
            // line 12
            echo "
  ";
            // line 13
            $context["classes"] = [0 => "climb-section"];
            // line 16
            echo "
  <section";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 17), 17, $this->source), "html", null, true);
            echo ">
    ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 18, $this->source), "html", null, true);
            echo "
    ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 19, $this->source), "html", null, true);
            echo "
      <div class=\"container\">
        <div class=\"ladder\">
          <div class=\"ladder__image-block\">
            <img src=\"";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["image_url"] ?? null), 23, $this->source)]), "html", null, true);
            echo "\" alt=\"\">
          </div>
          <div class=\"ladder__text-block\">
            <h3>";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_title"] ?? null), 26, $this->source), "html", null, true);
            echo "</h3>
            ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 27, $this->source));
            echo "
            <div class=\"ladder__btn\">
              <a href=\"";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null), 29, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn_primary\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_text"] ?? null), 29, $this->source), "html", null, true);
            echo "</a>
            </div>
          </div>
        </div>
      </div>
    </section>

";
        } else {
            // line 37
            echo "  
    ";
            // line 38
            $context["classes"] = [0 => "resources-section"];
            // line 41
            echo "<section";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
            echo ">
    ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 42, $this->source), "html", null, true);
            echo "
    ";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 43, $this->source), "html", null, true);
            echo "
    <div class=\"container\">
      ";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["intro_text"] ?? null), 45, $this->source));
            echo "
      <div class=\"journey-invitation\">
        <div class=\"journey-invitation__text-block\">
          <h3>";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_title"] ?? null), 48, $this->source), "html", null, true);
            echo "</h3>
          ";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 49, $this->source));
            echo "
          <div class=\"journey-invitation__btn\">
            <a href=\"";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null), 51, $this->source), "html", null, true);
            echo "\" target=\"\" class=\"btn btn_secondary\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_text"] ?? null), 51, $this->source), "html", null, true);
            echo "</a>
          </div>
        </div>
        <div class=\"journey-invitation__image-block\">
          <img src=\"";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["image_url"] ?? null), 55, $this->source)]), "html", null, true);
            echo "\" alt=\"\">
        </div>
      </div>
    </div>
  </section>

";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/featured_center_simple/eck-entity--component--featured_center_simple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 55,  148 => 51,  143 => 49,  139 => 48,  133 => 45,  128 => 43,  124 => 42,  119 => 41,  117 => 38,  114 => 37,  101 => 29,  96 => 27,  92 => 26,  86 => 23,  79 => 19,  75 => 18,  71 => 17,  68 => 16,  66 => 13,  63 => 12,  61 => 11,  58 => 10,  56 => 9,  54 => 8,  52 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set body = eck_entity.field_description.getValue().0.value %}
{% set intro_text = eck_entity.field_intro_text.getValue().0.value %}
{% set body_title = eck_entity.field_title.value %}
{% set image_url = eck_entity.field_intro_image.entity.uri.value %}
{% set image_alt = eck_entity.field_intro_image.entity.uri.value %}

{% set variation_options = eck_entity.field_variation_options.value %}
{% set link_url = eck_entity.field_link.0.url %}
{% set link_text = eck_entity.field_link.0.title %}

{% if variation_options == 'variation_1' %}

  {% set classes = [
  'climb-section',
  ] %}

  <section{{ attributes.addClass(classes) }}>
    {{ title_prefix }}
    {{ title_suffix }}
      <div class=\"container\">
        <div class=\"ladder\">
          <div class=\"ladder__image-block\">
            <img src=\"{{ file_url(image_url) }}\" alt=\"\">
          </div>
          <div class=\"ladder__text-block\">
            <h3>{{ body_title }}</h3>
            {{ body|raw }}
            <div class=\"ladder__btn\">
              <a href=\"{{ link_url }}\" target=\"_blank\" class=\"btn btn_primary\">{{ link_text }}</a>
            </div>
          </div>
        </div>
      </div>
    </section>

{% else %}
  
    {% set classes = [
    'resources-section',
    ] %}
<section{{ attributes.addClass(classes) }}>
    {{ title_prefix }}
    {{ title_suffix }}
    <div class=\"container\">
      {{ intro_text|raw }}
      <div class=\"journey-invitation\">
        <div class=\"journey-invitation__text-block\">
          <h3>{{ body_title }}</h3>
          {{ body|raw }}
          <div class=\"journey-invitation__btn\">
            <a href=\"{{ link_url }}\" target=\"\" class=\"btn btn_secondary\">{{ link_text }}</a>
          </div>
        </div>
        <div class=\"journey-invitation__image-block\">
          <img src=\"{{ file_url(image_url) }}\" alt=\"\">
        </div>
      </div>
    </div>
  </section>

{% endif %}", "themes/custom/actadigitech/templates/component/featured_center_simple/eck-entity--component--featured_center_simple.html.twig", "D:\\xampp\\htdocs\\jimdetert\\web\\themes\\custom\\actadigitech\\templates\\component\\featured_center_simple\\eck-entity--component--featured_center_simple.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 11);
        static $filters = array("escape" => 17, "raw" => 27);
        static $functions = array("file_url" => 23);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw'],
                ['file_url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
