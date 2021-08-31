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

/* themes/custom/actadigitech/templates/component/banner_inner/eck-entity--component--inner_banner.html.twig */
class __TwigTemplate_0a000374436503686b48fd4e65499480890f38778a762f4e053ce3e38e44f2d4 extends \Twig\Template
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
        $context["display_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_display_title", [], "any", false, false, true, 1), "getValue", [], "method", false, false, true, 1), 0, [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1);
        // line 2
        $context["image_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_side_image", [], "any", false, false, true, 2), "entity", [], "any", false, false, true, 2), "uri", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2);
        // line 3
        $context["image_alt"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_side_image", [], "any", false, false, true, 3), "entity", [], "any", false, false, true, 3), "uri", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3);
        // line 4
        $context["variation_class"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_background_colour", [], "any", false, false, true, 4), "entity", [], "any", false, false, true, 4), "uri", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4);
        // line 5
        echo "
";
        // line 6
        $context["download_link_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_download_link", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), "url", [], "any", false, false, true, 6);
        // line 7
        $context["download_link_text"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_download_link", [], "any", false, false, true, 7), 0, [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7);
        // line 8
        echo "
";
        // line 9
        $context["white_font"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_white_font", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9);
        // line 10
        echo "
";
        // line 11
        if ((($context["white_font"] ?? null) == 1)) {
            // line 12
            echo "  ";
            $context["font_class"] = "white-font";
        } else {
            // line 14
            echo "  ";
            $context["font_class"] = "";
        }
        // line 16
        echo "
";
        // line 17
        $context["classes"] = [0 => "page_title_and_image"];
        // line 20
        echo "
<div";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 21), 21, $this->source), "html", null, true);
        echo ">
  ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 22, $this->source), "html", null, true);
        echo "
  ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 23, $this->source), "html", null, true);
        echo "
    <h1 class=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["font_class"] ?? null), 24, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["display_title"] ?? null), 24, $this->source));
        echo "</h1>
    <div class=\"s_image\">
      <img src=\"";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["image_url"] ?? null), 26, $this->source)]), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_alt"] ?? null), 26, $this->source), "html", null, true);
        echo "\">
    </div>
</div>


  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/banner_inner/eck-entity--component--inner_banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  77 => 20,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  62 => 11,  59 => 10,  57 => 9,  54 => 8,  52 => 7,  50 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set display_title = eck_entity.field_display_title.getValue().0.value %}
{% set image_url = eck_entity.field_side_image.entity.uri.value %}
{% set image_alt = eck_entity.field_side_image.entity.uri.value %}
{% set variation_class = eck_entity.field_background_colour.entity.uri.value %}

{% set download_link_url = eck_entity.field_download_link.0.url %}
{% set download_link_text = eck_entity.field_download_link.0.title %}

{% set white_font = eck_entity.field_white_font.value %}

{% if white_font == 1 %}
  {% set font_class = 'white-font' %}
{% else %}
  {% set font_class = '' %}
{% endif %}

{% set classes = [
'page_title_and_image',
] %}

<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {{ title_suffix }}
    <h1 class=\"{{ font_class }}\">{{ display_title|raw }}</h1>
    <div class=\"s_image\">
      <img src=\"{{ file_url(image_url) }}\" alt=\"{{ image_alt }}\">
    </div>
</div>


  ", "themes/custom/actadigitech/templates/component/banner_inner/eck-entity--component--inner_banner.html.twig", "D:\\xampp\\htdocs\\jimdetert\\web\\themes\\custom\\actadigitech\\templates\\component\\banner_inner\\eck-entity--component--inner_banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 11);
        static $filters = array("escape" => 21, "raw" => 24);
        static $functions = array("file_url" => 26);

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
