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

/* themes/custom/actadigitech/templates/component/tab_component/eck-entity--component--tab_component.html.twig */
class __TwigTemplate_3cdd36a2467e3dfb3372ba9002711efa8c70e6c8991994ae0fbcf161b13e9c27 extends \Twig\Template
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
        $context["items"] = twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_add_content", [], "any", false, false, true, 1);
        // line 2
        echo "
";
        // line 3
        $context["classes"] = [0 => "opportunities-section white"];
        // line 6
        echo "
<section";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 7), 7, $this->source), "html", null, true);
        echo ">
  ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 8, $this->source), "html", null, true);
        echo "
  ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 9, $this->source), "html", null, true);
        echo "
  <div class=\"medium_width_plus_padding\">
    <div class=\"medium_width s_inner\">
      <div class=\"tabset-block\">
        <ul class=\"tabset\">
          ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["subentity"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 15
                echo "            <li class=\"\">
              <a href=\"#tab-";
                // line 16
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 16), "id", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 16), "title", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "</a>
            </li>
          ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['subentity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </ul>
      </div>
    </div>
  </div>
</section>

<section class=\"opportunities-section white\">
  <div class=\"narrow_width_plus_padding\">
    <div class=\"narrow_width s_inner\">
      <div class=\"tab-content\" style=\"\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["subentity"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 30
                echo "          <div id=\"tab-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 30), "id", [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "\" class=\"tab\" style=\"\">
            ";
                // line 31
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 31), "field_description", [], "any", false, false, true, 31), "getValue", [], "method", false, false, true, 31), 0, [], "any", false, false, true, 31), "value", [], "any", false, false, true, 31), 31, $this->source));
                echo "
          </div>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['subentity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "      </div>
    </div>
  </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/tab_component/eck-entity--component--tab_component.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  107 => 31,  102 => 30,  97 => 29,  85 => 19,  73 => 16,  70 => 15,  65 => 14,  57 => 9,  53 => 8,  49 => 7,  46 => 6,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/actadigitech/templates/component/tab_component/eck-entity--component--tab_component.html.twig", "/home/actadigitech/all-sites/jd2.jimdetert.com/web/themes/custom/actadigitech/templates/component/tab_component/eck-entity--component--tab_component.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 14);
        static $filters = array("escape" => 7, "first" => 14, "raw" => 31);
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
