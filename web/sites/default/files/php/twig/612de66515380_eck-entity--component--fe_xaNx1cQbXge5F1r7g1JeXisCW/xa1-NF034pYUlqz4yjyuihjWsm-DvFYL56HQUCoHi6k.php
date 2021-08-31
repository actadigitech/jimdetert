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

/* themes/custom/actadigitech/templates/component/featured_center_component/eck-entity--component--featured_center_component.html.twig */
class __TwigTemplate_33183a963e676ecdfa22051a4b19013538fea94d8fcf34d256d861f1b2ef6a28 extends \Twig\Template
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
        $context["sub_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_sub_title", [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1);
        // line 2
        $context["title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_title", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2);
        // line 3
        echo "
";
        // line 4
        $context["link_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_link", [], "any", false, false, true, 4), 0, [], "any", false, false, true, 4), "url", [], "any", false, false, true, 4);
        // line 5
        $context["link_text"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_link", [], "any", false, false, true, 5), 0, [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5);
        // line 6
        echo "
";
        // line 7
        $context["classes"] = [0 => "start-courage-section", 1 => "start-courage-new-section"];
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
  <div class=\"narrow_width_plus_padding\">
    <div class=\"narrow_width s_inner\">
      <div class=\"start-courage\">
        <h6 class=\"start-courage__heading\">";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_title"] ?? null), 18, $this->source), "html", null, true);
        echo "</h6>
        <p class=\"start-courage__text\">";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 19, $this->source), "html", null, true);
        echo "</p>
        <a target=\"_blank\" href=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null), 20, $this->source), "html", null, true);
        echo "\" class=\"btn btn_primary\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_text"] ?? null), 20, $this->source), "html", null, true);
        echo "</a>
        <div class=\"start-courage__image-block\">
          <img src=\"/themes/custom/actadigitech/images/ladder-woman.png\" alt=\"\">
          <img src=\"/themes/custom/actadigitech/images/ladder-woman-shadow-2.png\" alt=\"\">
        </div>
      </div>
    </div>
  </div>
</section>


  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/featured_center_component/eck-entity--component--featured_center_component.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  77 => 19,  73 => 18,  66 => 14,  62 => 13,  58 => 12,  55 => 11,  53 => 7,  50 => 6,  48 => 5,  46 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set sub_title = eck_entity.field_sub_title.value %}
{% set title = eck_entity.field_title.value %}

{% set link_url = eck_entity.field_link.0.url %}
{% set link_text = eck_entity.field_link.0.title %}

{% set classes = [
'start-courage-section',
'start-courage-new-section'
] %}

<section{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {{ title_suffix }}
  <div class=\"narrow_width_plus_padding\">
    <div class=\"narrow_width s_inner\">
      <div class=\"start-courage\">
        <h6 class=\"start-courage__heading\">{{ sub_title }}</h6>
        <p class=\"start-courage__text\">{{ title }}</p>
        <a target=\"_blank\" href=\"{{ link_url }}\" class=\"btn btn_primary\">{{ link_text }}</a>
        <div class=\"start-courage__image-block\">
          <img src=\"/themes/custom/actadigitech/images/ladder-woman.png\" alt=\"\">
          <img src=\"/themes/custom/actadigitech/images/ladder-woman-shadow-2.png\" alt=\"\">
        </div>
      </div>
    </div>
  </div>
</section>


  ", "themes/custom/actadigitech/templates/component/featured_center_component/eck-entity--component--featured_center_component.html.twig", "D:\\xampp\\htdocs\\jimdetert\\web\\themes\\custom\\actadigitech\\templates\\component\\featured_center_component\\eck-entity--component--featured_center_component.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("escape" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                []
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
