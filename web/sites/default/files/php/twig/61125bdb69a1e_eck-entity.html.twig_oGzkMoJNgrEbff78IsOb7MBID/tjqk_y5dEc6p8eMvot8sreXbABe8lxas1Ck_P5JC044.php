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

/* modules/contrib/eck/templates/eck-entity.html.twig */
class __TwigTemplate_09d85e0ea66e1f258bd859fff62676d22057dc8aaa06b8eab161a0cbcb3660d1 extends \Twig\Template
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
        // line 23
        $context["classes"] = [0 => "eck-entity"];
        // line 26
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 26), 26, $this->source), "html", null, true);
        echo ">
    ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 27, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/eck/templates/eck-entity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 27,  41 => 26,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display an ECK entity.
 *
 * Available variables:
 * - eck_entity: The full ECK entity with limited access to object properties
 *   and methods. Only \"getter\" methods (method names starting with \"get\",
 *   \"has\", or \"is\") and a few common methods such as \"id\" and \"label\" are
 *   available. Calling other methods (such as node.delete) will result in an
 *   exception.
 * - content: All ECK entity items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *
 * @see template_preprocess_eck_entity()
 *
 * @ingroup themeable
 */
#}
{% set classes = [
'eck-entity',
] %}
<div{{ attributes.addClass(classes) }}>
    {{ content }}
</div>
", "modules/contrib/eck/templates/eck-entity.html.twig", "/var/www/html/jimdetert/web/modules/contrib/eck/templates/eck-entity.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23);
        static $filters = array("escape" => 26);
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
