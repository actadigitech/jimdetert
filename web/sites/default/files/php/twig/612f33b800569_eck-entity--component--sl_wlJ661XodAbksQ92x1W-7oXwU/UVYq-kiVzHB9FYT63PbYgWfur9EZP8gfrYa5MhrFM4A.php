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

/* themes/custom/actadigitech/templates/component/slider_component_with_description/eck-entity--component--slider_component_with_descriptio.html.twig */
class __TwigTemplate_7c16b34dc2a194e55970da0f8a0a5e802a37480778e478f6fb177da367ae02a6 extends \Twig\Template
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
        $context["title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "title", [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1);
        // line 2
        $context["image_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_side_image", [], "any", false, false, true, 2), "entity", [], "any", false, false, true, 2), "uri", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2);
        // line 3
        $context["image_alt"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_side_image", [], "any", false, false, true, 3), "entity", [], "any", false, false, true, 3), "uri", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3);
        // line 4
        $context["items"] = twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_add_component", [], "any", false, false, true, 4);
        // line 5
        $context["link_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_link", [], "any", false, false, true, 5), 0, [], "any", false, false, true, 5), "url", [], "any", false, false, true, 5);
        // line 6
        $context["link_text"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_link", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6);
        // line 7
        echo "
";
        // line 8
        $context["classes"] = [0 => "courage-gallery-section"];
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
    <div class=\"medium_width\">
      <h2 class=\"flush_with_top_of_letters section_title\">";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 16, $this->source), "html", null, true);
        echo "</h2>
      <div class=\"text-gallery\">
        <div class=\"text-gallery__tabs-block\">
          <div class=\"slick-arrow prev\"><img src=\"/themes/custom/actadigitech/images/arrow-left.svg\" alt=\"\"></div>
          <div class=\"text-gallery__tabs slider-nav\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["subentity"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 22
                echo "              <div class=\"text-gallery__tab\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 22), "title", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "</div>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['subentity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "          </div>
          <div class=\"slick-arrow next\"><img src=\"/themes/custom/actadigitech/images/arrow-left.svg\" alt=\"\"></div>
        </div>
        <div class=\"text-gallery__content-block\">
          <div class=\"slick-arrow prev\"><img src=\"/themes/custom/actadigitech/images/arrow-left.svg\" alt=\"\"></div>
          <div class=\"slider-for\">
              ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["subentity"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 31
                echo "                <div class=\"text-gallery__item\">
                  <h3>";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 32), "title", [], "any", false, false, true, 32), "value", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "</h4>
                  <div class=\"text-gallery__text df-row\">
                    ";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 34), "field_description", [], "any", false, false, true, 34), "getValue", [], "method", false, false, true, 34), 0, [], "any", false, false, true, 34), "value", [], "any", false, false, true, 34), 34, $this->source));
                echo "
                  </div>
                </div>
              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['subentity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "          </div>
          <div class=\"slick-arrow next\"><img src=\"/themes/custom/actadigitech/images/arrow-left.svg\" alt=\"\"></div>
        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/slider_component_with_description/eck-entity--component--slider_component_with_descriptio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 38,  116 => 34,  111 => 32,  108 => 31,  103 => 30,  95 => 24,  85 => 22,  80 => 21,  72 => 16,  67 => 14,  63 => 13,  59 => 12,  56 => 11,  54 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/actadigitech/templates/component/slider_component_with_description/eck-entity--component--slider_component_with_descriptio.html.twig", "/home/actadigitech/all-sites/jd2.jimdetert.com/web/themes/custom/actadigitech/templates/component/slider_component_with_description/eck-entity--component--slider_component_with_descriptio.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 21);
        static $filters = array("escape" => 12, "first" => 21, "raw" => 34);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'first', 'raw'],
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
