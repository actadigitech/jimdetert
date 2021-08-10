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

/* themes/custom/actadigitech/templates/component/intro_text_with_cta/eck-entity--component--intro_text_with_cta.html.twig */
class __TwigTemplate_c4a26367629266e1458e9d8bcb484a3ea9a5d81564f38caa9606fde4815e3b54 extends \Twig\Template
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
        $context["title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_title", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2);
        // line 3
        $context["image_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_side_image", [], "any", false, false, true, 3), "entity", [], "any", false, false, true, 3), "uri", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3);
        // line 4
        $context["image_alt"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_side_image", [], "any", false, false, true, 4), "entity", [], "any", false, false, true, 4), "uri", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4);
        // line 5
        echo "
";
        // line 6
        $context["link_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_link", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), "url", [], "any", false, false, true, 6);
        // line 7
        $context["link_text"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_link", [], "any", false, false, true, 7), 0, [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7);
        // line 8
        echo "
";
        // line 9
        $context["classes"] = [0 => "guide-block guide-block_assessments"];
        // line 12
        echo "
<section";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 13), "setAttribute", [0 => "id", 1 => "def_mom_sit"], "method", false, false, true, 13), 13, $this->source), "html", null, true);
        echo ">
  ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 14, $this->source), "html", null, true);
        echo "
  ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 15, $this->source), "html", null, true);
        echo "
  <div class=\"content_width_plus_padding\">
    <div class=\"content_width\">
      <div class=\"guide-block__content s_text\"><!-- @CMC: the XD spec has this
      element vertically centered within the the blue zone-->
        <h3>";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 20, $this->source), "html", null, true);
        echo "</h3>
        <!-- @CMC: XD spec has spacing between these two elements. Ideally the 'a' would be within a 'div' too, but that's not vital :) -->
        <a href=\"";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null), 22, $this->source), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn_secondary btn_icon\">
          ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_text"] ?? null), 23, $this->source), "html", null, true);
        echo "
          <img src=\"/themes/custom/actadigitech/images/open-link.png\" alt=\"\">
        </a>
        ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 26, $this->source));
        echo "
        <div class=\"guide-block__image\">
          <img src=\"";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["image_url"] ?? null), 28, $this->source)]), "html", null, true);
        echo "\" alt=\"\">
        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/intro_text_with_cta/eck-entity--component--intro_text_with_cta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  93 => 26,  87 => 23,  83 => 22,  78 => 20,  70 => 15,  66 => 14,  62 => 13,  59 => 12,  57 => 9,  54 => 8,  52 => 7,  50 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set body = eck_entity.field_description.getValue().0.value %}
{% set title = eck_entity.field_title.value %}
{% set image_url = eck_entity.field_side_image.entity.uri.value %}
{% set image_alt = eck_entity.field_side_image.entity.uri.value %}

{% set link_url = eck_entity.field_link.0.url %}
{% set link_text = eck_entity.field_link.0.title %}

{% set classes = [
'guide-block guide-block_assessments',
] %}

<section{{ attributes.addClass(classes).setAttribute('id', 'def_mom_sit') }}>
  {{ title_prefix }}
  {{ title_suffix }}
  <div class=\"content_width_plus_padding\">
    <div class=\"content_width\">
      <div class=\"guide-block__content s_text\"><!-- @CMC: the XD spec has this
      element vertically centered within the the blue zone-->
        <h3>{{ title }}</h3>
        <!-- @CMC: XD spec has spacing between these two elements. Ideally the 'a' would be within a 'div' too, but that's not vital :) -->
        <a href=\"{{ link_url }}\" target=\"_blank\" class=\"btn btn_secondary btn_icon\">
          {{ link_text }}
          <img src=\"/themes/custom/actadigitech/images/open-link.png\" alt=\"\">
        </a>
        {{ body|raw }}
        <div class=\"guide-block__image\">
          <img src=\"{{ file_url(image_url) }}\" alt=\"\">
        </div>
      </div>
    </div>
  </div>
</section>", "themes/custom/actadigitech/templates/component/intro_text_with_cta/eck-entity--component--intro_text_with_cta.html.twig", "D:\\xampp\\htdocs\\jimdetert\\web\\themes\\custom\\actadigitech\\templates\\component\\intro_text_with_cta\\eck-entity--component--intro_text_with_cta.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("escape" => 13, "raw" => 26);
        static $functions = array("file_url" => 28);

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
