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

/* themes/custom/actadigitech/templates/component/intro_featured_image_content/eck-entity--component--introduction_featured_content.html.twig */
class __TwigTemplate_a1838cc14915ef121c775872cd42dbde52873c1cb1b8e16664ee55ee1dbaca9d extends \Twig\Template
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
        $context["body_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_intro_title", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2);
        // line 3
        $context["intro_img"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_intro_image", [], "any", false, false, true, 3), "entity", [], "any", false, false, true, 3), "uri", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3);
        // line 4
        $context["image_alt"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_intro_image", [], "any", false, false, true, 4), "entity", [], "any", false, false, true, 4), "uri", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4);
        // line 5
        $context["links"] = twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_quick_links", [], "any", false, false, true, 5);
        // line 6
        echo "
";
        // line 7
        $context["link_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_link", [], "any", false, false, true, 7), 0, [], "any", false, false, true, 7), "url", [], "any", false, false, true, 7);
        // line 8
        $context["link_text"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_link", [], "any", false, false, true, 8), 0, [], "any", false, false, true, 8), "title", [], "any", false, false, true, 8);
        // line 9
        echo "
";
        // line 10
        $context["classes"] = [0 => "intro-jim"];
        // line 13
        echo "
<section";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 14), 14, $this->source), "html", null, true);
        echo ">
  ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 15, $this->source), "html", null, true);
        echo "
  ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 16, $this->source), "html", null, true);
        echo "
  <div class=\"content_width_plus_padding\">
    <div class=\"content_width s_inner\">
      <div class=\"meet\">
        <div class=\"col\">
          <img src=\"";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["intro_img"] ?? null), 21, $this->source)]), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_alt"] ?? null), 21, $this->source), "html", null, true);
        echo "\">
        </div>
        <div class=\"col\">
          <h2 class=\"meet__heading\">";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_title"] ?? null), 24, $this->source), "html", null, true);
        echo "</h2>
          <div class=\"meet__text\">";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 25, $this->source));
        echo "</div>
          <ul class=\"meet__social\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["subentity"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 28
                echo "              <li><a target=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["subentity"], "options", [], "any", false, false, true, 28)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["attributes"] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["target"] ?? null) : null), 28, $this->source), "html", null, true);
                echo "\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subentity"], "url", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "\"><i class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["subentity"], "options", [], "any", false, false, true, 28)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["attributes"] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["class"] ?? null) : null), 28, $this->source), "html", null, true);
                echo "\"></i></a></li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['subentity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "          </ul>
          <a href=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null), 31, $this->source), "html", null, true);
        echo "\" class=\"btn btn_primary\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_text"] ?? null), 31, $this->source), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/intro_featured_image_content/eck-entity--component--introduction_featured_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 31,  116 => 30,  102 => 28,  97 => 27,  92 => 25,  88 => 24,  80 => 21,  72 => 16,  68 => 15,  64 => 14,  61 => 13,  59 => 10,  56 => 9,  54 => 8,  52 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set body = eck_entity.field_description.getValue().0.value %}
{% set body_title = eck_entity.field_intro_title.value %}
{% set intro_img = eck_entity.field_intro_image.entity.uri.value %}
{% set image_alt = eck_entity.field_intro_image.entity.uri.value %}
{% set links = eck_entity.field_quick_links %}

{% set link_url = eck_entity.field_link.0.url %}
{% set link_text = eck_entity.field_link.0.title %}

{% set classes = [
'intro-jim',
] %}

<section{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {{ title_suffix }}
  <div class=\"content_width_plus_padding\">
    <div class=\"content_width s_inner\">
      <div class=\"meet\">
        <div class=\"col\">
          <img src=\"{{ file_url(intro_img) }}\" alt=\"{{ image_alt }}\">
        </div>
        <div class=\"col\">
          <h2 class=\"meet__heading\">{{ body_title }}</h2>
          <div class=\"meet__text\">{{ body|raw }}</div>
          <ul class=\"meet__social\">
            {% for key,subentity in links if key|first != '#' %}
              <li><a target=\"{{ subentity.options['attributes']['target'] }}\" href=\"{{ subentity.url}}\"><i class=\"{{ subentity.options['attributes']['class'] }}\"></i></a></li>
            {% endfor %}
          </ul>
          <a href=\"{{ link_url }}\" class=\"btn btn_primary\">{{ link_text }}</a>
        </div>
      </div>
    </div>
  </div>
</section>", "themes/custom/actadigitech/templates/component/intro_featured_image_content/eck-entity--component--introduction_featured_content.html.twig", "/var/www/html/jimdetert/web/themes/custom/actadigitech/templates/component/intro_featured_image_content/eck-entity--component--introduction_featured_content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 27);
        static $filters = array("escape" => 14, "raw" => 25, "first" => 27);
        static $functions = array("file_url" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'raw', 'first'],
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
