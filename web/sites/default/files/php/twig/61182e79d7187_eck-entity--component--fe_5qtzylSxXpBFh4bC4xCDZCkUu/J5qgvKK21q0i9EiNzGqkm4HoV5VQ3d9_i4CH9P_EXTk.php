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

/* themes/custom/actadigitech/templates/component/featured_sign_post/eck-entity--component--featured_signpost.html.twig */
class __TwigTemplate_822eef2e26e5d32472dc717c43321750bf38df73b6aca550b559e0bd73051daf extends \Twig\Template
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
        $context["title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_display_title", [], "any", false, false, true, 1), "getValue", [], "method", false, false, true, 1), 0, [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1);
        // line 2
        $context["image_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_side_image", [], "any", false, false, true, 2), "entity", [], "any", false, false, true, 2), "uri", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2);
        // line 3
        $context["image_alt"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_side_image", [], "any", false, false, true, 3), "entity", [], "any", false, false, true, 3), "uri", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3);
        // line 4
        echo "
";
        // line 5
        $context["link_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_link", [], "any", false, false, true, 5), 0, [], "any", false, false, true, 5), "url", [], "any", false, false, true, 5);
        // line 6
        $context["link_text"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_link", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6);
        // line 7
        echo "
";
        // line 8
        $context["classes"] = [0 => "guide-block guide-block_curriculum"];
        // line 11
        echo "
<section";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 12), 12, $this->source), "html", null, true);
        echo ">
  ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 13, $this->source), "html", null, true);
        echo "
  ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 14, $this->source), "html", null, true);
        echo "
  <div class=\"content_width_plus_padding\">
    <div class=\"content_width\">
      <div class=\"guide-block__content s_text\">
        ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 18, $this->source));
        echo "
        <a href=\"";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null), 19, $this->source), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn_secondary btn_icon\">
          ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_text"] ?? null), 20, $this->source), "html", null, true);
        echo "
        </a>
        <div class=\"guide-block__image\">
          <img src=\"";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["image_url"] ?? null), 23, $this->source)]), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_alt"] ?? null), 23, $this->source), "html", null, true);
        echo "\">
        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/featured_sign_post/eck-entity--component--featured_signpost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 23,  83 => 20,  79 => 19,  75 => 18,  68 => 14,  64 => 13,  60 => 12,  57 => 11,  55 => 8,  52 => 7,  50 => 6,  48 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set title = eck_entity.field_display_title.getValue().0.value %}
{% set image_url = eck_entity.field_side_image.entity.uri.value %}
{% set image_alt = eck_entity.field_side_image.entity.uri.value %}

{% set link_url = eck_entity.field_link.0.url %}
{% set link_text = eck_entity.field_link.0.title %}

{% set classes = [
'guide-block guide-block_curriculum',
] %}

<section{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {{ title_suffix }}
  <div class=\"content_width_plus_padding\">
    <div class=\"content_width\">
      <div class=\"guide-block__content s_text\">
        {{ title|raw }}
        <a href=\"{{ link_url }}\" target=\"_blank\" class=\"btn btn_secondary btn_icon\">
          {{ link_text }}
        </a>
        <div class=\"guide-block__image\">
          <img src=\"{{ file_url(image_url) }}\" alt=\"{{ image_alt }}\">
        </div>
      </div>
    </div>
  </div>
</section>", "themes/custom/actadigitech/templates/component/featured_sign_post/eck-entity--component--featured_signpost.html.twig", "D:\\xampp\\htdocs\\jimdetert\\web\\themes\\custom\\actadigitech\\templates\\component\\featured_sign_post\\eck-entity--component--featured_signpost.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("escape" => 12, "raw" => 18);
        static $functions = array("file_url" => 23);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
