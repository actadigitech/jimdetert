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

/* themes/custom/actadigitech/templates/component/advance_praises/eck-entity--component--advance_praises.html.twig */
class __TwigTemplate_053b0c7c8bb472f48dfefb50257475ea6d7cfa18fd334ede439567bdcdcae9e3 extends \Twig\Template
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
        $context["cards"] = twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_single_praises_", [], "any", false, false, true, 2);
        // line 3
        $context["variation"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_variation", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3);
        // line 4
        echo "
";
        // line 5
        if ((($context["variation"] ?? null) == "variation_1")) {
            // line 6
            echo "  ";
            $context["classes"] = [0 => "advance-section"];
            // line 9
            echo "

  <section";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 11), 11, $this->source), "html", null, true);
            echo " class=\"advance-praise-section\">
    ";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 12, $this->source), "html", null, true);
            echo "
    ";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 13, $this->source), "html", null, true);
            echo "
    <div class=\"content_width_plus_padding\">
      <div class=\"content_width s_inner\">
        <div class=\"advance-section__block\">
          <div class=\"advance-section__text\">";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 17, $this->source), "html", null, true);
            echo "</div>
          <div class=\"advance-section__cards-block\">
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cards"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["subentity"]) {
                if ((twig_first($this->env, $context["key"]) != "#")) {
                    // line 20
                    echo "              <div class=\"review-card\">
               ";
                    // line 21
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 21), "field_bio", [], "any", false, false, true, 21), "getValue", [], "method", false, false, true, 21), 0, [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21), 21, $this->source));
                    echo "
                <div class=\"review-card__author\">";
                    // line 22
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 22), "field_author", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                    echo "</div>
                  <div class=\"review-card__author-details\">
                     ";
                    // line 24
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 24), "field_author_details", [], "any", false, false, true, 24), "getValue", [], "method", false, false, true, 24), 0, [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24), 24, $this->source));
                    echo "
                  </div>
              </div>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['subentity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "          </div>
        </div>
      </div>
    </div>
  </section>
";
        } else {
            // line 34
            echo "
<section class=\"advance-praise-section\">
  ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 36, $this->source), "html", null, true);
            echo "
  ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 37, $this->source), "html", null, true);
            echo "
  <div class=\"content_width_plus_padding\">
    <div class=\"content_width s_inner\">
      <div class=\"book-cards\">
        <h3 class=\"top-line\">";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 41, $this->source));
            echo "</h3>
        <div class=\"book-cards__block\">
          ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cards"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["subentity"]) {
                if ((twig_first($this->env, $context["key"]) != "#")) {
                    // line 44
                    echo "            <div class=\"review-card\">
             ";
                    // line 45
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 45), "field_bio", [], "any", false, false, true, 45), "getValue", [], "method", false, false, true, 45), 0, [], "any", false, false, true, 45), "value", [], "any", false, false, true, 45), 45, $this->source));
                    echo "
              <div class=\"review-card__author\">";
                    // line 46
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 46), "field_author", [], "any", false, false, true, 46), "value", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                    echo "</div>
                <div class=\"review-card__author-details\">
                   ";
                    // line 48
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 48), "field_author_details", [], "any", false, false, true, 48), "getValue", [], "method", false, false, true, 48), 0, [], "any", false, false, true, 48), "value", [], "any", false, false, true, 48), 48, $this->source));
                    echo "
                </div>
            </div>
          ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['subentity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </div>
      </div>
    </div>
  </div>
</section>

";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/advance_praises/eck-entity--component--advance_praises.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 52,  150 => 48,  145 => 46,  141 => 45,  138 => 44,  133 => 43,  128 => 41,  121 => 37,  117 => 36,  113 => 34,  105 => 28,  94 => 24,  89 => 22,  85 => 21,  82 => 20,  77 => 19,  72 => 17,  65 => 13,  61 => 12,  57 => 11,  53 => 9,  50 => 6,  48 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set title = eck_entity.title.value %}
{% set cards = eck_entity.field_single_praises_ %}
{% set variation = eck_entity.field_variation.value %}

{% if variation == \"variation_1\" %}
  {% set classes = [
  'advance-section',
  ] %}


  <section{{ attributes.addClass(classes) }} class=\"advance-praise-section\">
    {{ title_prefix }}
    {{ title_suffix }}
    <div class=\"content_width_plus_padding\">
      <div class=\"content_width s_inner\">
        <div class=\"advance-section__block\">
          <div class=\"advance-section__text\">{{ title }}</div>
          <div class=\"advance-section__cards-block\">
            {% for key,subentity in cards if key|first != '#' %}
              <div class=\"review-card\">
               {{ subentity.entity.field_bio.getValue().0.value|raw }}
                <div class=\"review-card__author\">{{ subentity.entity.field_author.value }}</div>
                  <div class=\"review-card__author-details\">
                     {{ subentity.entity.field_author_details.getValue().0.value|raw }}
                  </div>
              </div>
            {% endfor %}
          </div>
        </div>
      </div>
    </div>
  </section>
{% else %}

<section class=\"advance-praise-section\">
  {{ title_prefix }}
  {{ title_suffix }}
  <div class=\"content_width_plus_padding\">
    <div class=\"content_width s_inner\">
      <div class=\"book-cards\">
        <h3 class=\"top-line\">{{ title|raw }}</h3>
        <div class=\"book-cards__block\">
          {% for key,subentity in cards if key|first != '#' %}
            <div class=\"review-card\">
             {{ subentity.entity.field_bio.getValue().0.value|raw }}
              <div class=\"review-card__author\">{{ subentity.entity.field_author.value }}</div>
                <div class=\"review-card__author-details\">
                   {{ subentity.entity.field_author_details.getValue().0.value|raw }}
                </div>
            </div>
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</section>

{% endif %}", "themes/custom/actadigitech/templates/component/advance_praises/eck-entity--component--advance_praises.html.twig", "D:\\xampp\\htdocs\\jimdetert\\web\\themes\\custom\\actadigitech\\templates\\component\\advance_praises\\eck-entity--component--advance_praises.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 5, "for" => 19);
        static $filters = array("escape" => 11, "first" => 19, "raw" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
