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

/* themes/custom/actadigitech/templates/component/banner/eck-entity--component--banner_content.html.twig */
class __TwigTemplate_ca2f4b9092909ca3b8c4f59636ddffdc8591204442191e9fc403fab347f2865b extends \Twig\Template
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
        $context["description"] = $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_description", [], "any", false, false, true, 2), "getValue", [], "method", false, false, true, 2), 0, [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2), 2, $this->source);
        // line 3
        $context["links"] = twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_quick_links", [], "any", false, false, true, 3);
        // line 4
        $context["quick_links_display_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_quick_links_title", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4);
        // line 5
        $context["image_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_background_image", [], "any", false, false, true, 5), "entity", [], "any", false, false, true, 5), "uri", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5);
        // line 6
        $context["image_alt"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_background_image", [], "any", false, false, true, 6), "entity", [], "any", false, false, true, 6), "uri", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6);
        // line 7
        echo "
";
        // line 8
        $context["download_link_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_download_link", [], "any", false, false, true, 8), 0, [], "any", false, false, true, 8), "url", [], "any", false, false, true, 8);
        // line 9
        $context["download_link_text"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_download_link", [], "any", false, false, true, 9), 0, [], "any", false, false, true, 9), "title", [], "any", false, false, true, 9);
        // line 10
        echo "
";
        // line 11
        $context["classes"] = [0 => "intro"];
        // line 14
        echo "<div";
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
  <div class=\"intro__top\">
    <div class=\"intro__text-block\">
      ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["display_title"] ?? null), 19, $this->source));
        echo "
      ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 20, $this->source));
        echo "
    </div>
    <div class=\"intro__button-block\">
      <div class=\"intro__download-button\">
        <a href=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["download_link_url"] ?? null), 24, $this->source), "html", null, true);
        echo "\" target=\"_blank\">
          <i class=\"icon-download\"></i>
        </a>
      </div>
      <span class=\"intro__button-text\">
        <a href=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["download_link_url"] ?? null), 29, $this->source), "html", null, true);
        echo "\" target=\"_blank\">
          ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["download_link_text"] ?? null), 30, $this->source), "html", null, true);
        echo "
        </a>
      </span>
    </div>
  </div>
  <div class=\"intro__bottom\">
    <div class=\"intro__order-text\">
      <div class=\"intro__order-text-heading\">pre-order</div>
      <div class=\"intro__order-text-date\">";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["quick_links_display_title"] ?? null), 38, $this->source), "html", null, true);
        echo "</div>
    </div>
    <div class=\"intro__stores-list\">
      ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["subentity"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 42
                echo "        <a class=\"btn btn_primary\" target=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["subentity"], "options", [], "any", false, false, true, 42)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["attributes"] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["target"] ?? null) : null), 42, $this->source), "html", null, true);
                echo "\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subentity"], "url", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subentity"], "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "</a>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['subentity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>
  </div>
</div>


  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/banner/eck-entity--component--banner_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 44,  123 => 42,  118 => 41,  112 => 38,  101 => 30,  97 => 29,  89 => 24,  82 => 20,  78 => 19,  72 => 16,  68 => 15,  63 => 14,  61 => 11,  58 => 10,  56 => 9,  54 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/actadigitech/templates/component/banner/eck-entity--component--banner_content.html.twig", "/var/www/html/jimdetert/web/themes/custom/actadigitech/templates/component/banner/eck-entity--component--banner_content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 41);
        static $filters = array("raw" => 2, "escape" => 14, "first" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['raw', 'escape', 'first'],
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
