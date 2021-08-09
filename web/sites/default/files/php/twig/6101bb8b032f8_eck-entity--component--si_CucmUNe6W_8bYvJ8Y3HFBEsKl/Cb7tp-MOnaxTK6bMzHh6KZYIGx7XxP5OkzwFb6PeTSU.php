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

/* themes/custom/actadigitech/templates/component/sign_post_card_group/eck-entity--component--sign_post_card_group.html.twig */
class __TwigTemplate_5ca13f769e12dc2d06d719aa4b88461e30a9256cc9447d318cec0d6aef9027f3 extends \Twig\Template
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
        echo "
";
        // line 3
        $context["cards"] = twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_add_card", [], "any", false, false, true, 3);
        // line 4
        echo "


";
        // line 7
        $context["classes"] = [0 => "resources-section"];
        // line 10
        echo "
<section";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 11), 11, $this->source), "html", null, true);
        echo ">
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
      <div class=\"container\">
        ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 17, $this->source));
        echo "
        <div class=\"intro-card__block\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cards"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["subentity"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 20
                echo "          <div class=\"intro-card\">
            <div class=\"intro-card__top\">
              <span class=\"intro-card__heading\">";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 22), "field_title", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "</span>
              <div class=\"intro-card__icon-block\">
                <img src=\"";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 24), "field_icon_image", [], "any", false, false, true, 24), "entity", [], "any", false, false, true, 24), "uri", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24), 24, $this->source)]), "html", null, true);
                echo "\" alt=\"\">
              </div>
            </div>
            ";
                // line 27
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 27), "field_description", [], "any", false, false, true, 27), "getValue", [], "method", false, false, true, 27), 0, [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27), 27, $this->source));
                echo "
            <a href=\".";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 28), "field_link", [], "any", false, false, true, 28), 0, [], "any", false, false, true, 28), "url", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "\" class=\"btn btn_secondary\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subentity"], "entity", [], "any", false, false, true, 28), "field_link", [], "any", false, false, true, 28), 0, [], "any", false, false, true, 28), "title", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "</a>
          </div>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['subentity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
      </div>
    </div>
  </div>
</section>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/sign_post_card_group/eck-entity--component--sign_post_card_group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  100 => 28,  96 => 27,  90 => 24,  85 => 22,  81 => 20,  76 => 19,  71 => 17,  64 => 13,  60 => 12,  56 => 11,  53 => 10,  51 => 7,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/actadigitech/templates/component/sign_post_card_group/eck-entity--component--sign_post_card_group.html.twig", "/var/www/html/jimdetert/web/themes/custom/actadigitech/templates/component/sign_post_card_group/eck-entity--component--sign_post_card_group.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 19);
        static $filters = array("escape" => 11, "raw" => 17, "first" => 19);
        static $functions = array("file_url" => 24);

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
