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

/* themes/custom/actadigitech/templates/system/page.html.twig */
class __TwigTemplate_e8d99ac367495f7b2ca10706d8d0efcc2783c91d04f818807bfaf9a1ce0c8994 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "<div class=\"layout_container\">
";
        // line 55
        if (($context["banner_url"] ?? null)) {
            // line 56
            echo "  <header role=\"banner\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_class"] ?? null), 56, $this->source), "html", null, true);
            echo "\" style=\"background: url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_url"] ?? null), 56, $this->source), "html", null, true);
            echo ") no-repeat 50% 50%/cover;\">
";
        } else {
            // line 58
            echo "  <header role=\"banner\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_class"] ?? null), 58, $this->source), "html", null, true);
            echo "\">
";
        }
        // line 60
        echo "  <div class=\"content_width_plus_padding\">
    <div class=\"content_width\">
      <div class=\"top\">
        ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
      </div>
      ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "
    </div>
  </div>
</header>

";
        // line 71
        $this->displayBlock('main', $context, $blocks);
        // line 84
        echo "
";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 85)) {
            // line 86
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 103
        echo "</div>
";
    }

    // line 71
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "<div class=\"js-quickedit-main-content\">
  <main role=\"main\">
      ";
        // line 75
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "  </main>
</div>
";
    }

    // line 75
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "       <a id=\"main-content\"></a>
      <div class=\"region region-content\">
        ";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "
      </div>
    ";
    }

    // line 86
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "    <footer class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 87, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
      <div class=\"content_width_plus_padding\">
        <div class=\"content_width\">
          <div class=\"region region-footer\">
            <div class=\"foot\">
              ";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"small_print\">
              ";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      </div>
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 95,  140 => 92,  131 => 87,  127 => 86,  120 => 78,  116 => 76,  112 => 75,  106 => 81,  103 => 75,  99 => 72,  95 => 71,  90 => 103,  86 => 86,  84 => 85,  81 => 84,  79 => 71,  71 => 65,  66 => 63,  61 => 60,  55 => 58,  47 => 56,  45 => 55,  42 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"layout_container\">
{% if banner_url %}
  <header role=\"banner\" class=\"{{ banner_class }}\" style=\"background: url({{ banner_url }}) no-repeat 50% 50%/cover;\">
{% else %}
  <header role=\"banner\" class=\"{{ banner_class }}\">
{% endif %}
  <div class=\"content_width_plus_padding\">
    <div class=\"content_width\">
      <div class=\"top\">
        {{ page.navigation }}
      </div>
      {{ page.banner }}
    </div>
  </div>
</header>

{# Main #}
{% block main %}
<div class=\"js-quickedit-main-content\">
  <main role=\"main\">
      {# Content #}
      {% block content %}
       <a id=\"main-content\"></a>
      <div class=\"region region-content\">
        {{ page.content }}
      </div>
    {% endblock %}
  </main>
</div>
{% endblock %}

{% if page.footer %}
  {% block footer %}
    <footer class=\"footer {{ container }}\" role=\"contentinfo\">
      <div class=\"content_width_plus_padding\">
        <div class=\"content_width\">
          <div class=\"region region-footer\">
            <div class=\"foot\">
              {{ page.footer }}
            </div>
            <div class=\"small_print\">
              {{ page.footer_bottom }}
            </div>
          </div>
        </div>
      </div>
    </footer>
  {% endblock %}
{% endif %}
</div>
", "themes/custom/actadigitech/templates/system/page.html.twig", "/var/www/html/jimdetert/web/themes/custom/actadigitech/templates/system/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 55, "block" => 71);
        static $filters = array("escape" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
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
