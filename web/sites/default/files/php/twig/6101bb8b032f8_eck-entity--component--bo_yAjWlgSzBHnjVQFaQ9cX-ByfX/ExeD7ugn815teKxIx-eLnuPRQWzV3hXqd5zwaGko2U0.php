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

/* themes/custom/actadigitech/templates/component/book_detail/eck-entity--component--book_detail.html.twig */
class __TwigTemplate_520a865d9914973aec6abcf58fdd5d376c43f2209ffe3ae21ac2a6ba77695269 extends \Twig\Template
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
        $context["book_desc"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_book_description", [], "any", false, false, true, 1), "getValue", [], "method", false, false, true, 1), 0, [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1);
        // line 2
        $context["quote"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_book_quote", [], "any", false, false, true, 2), "getValue", [], "method", false, false, true, 2), 0, [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2);
        // line 3
        echo "
";
        // line 4
        $context["title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_quick_link_title", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4);
        // line 5
        $context["sub_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_quick_link_sub_title", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5);
        // line 6
        echo "
";
        // line 7
        $context["book_image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_book_cover_", [], "any", false, false, true, 7), "entity", [], "any", false, false, true, 7), "uri", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7);
        // line 8
        echo "
";
        // line 9
        $context["chapter_link"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_chapter_link", [], "any", false, false, true, 9), 0, [], "any", false, false, true, 9), "url", [], "any", false, false, true, 9);
        // line 10
        $context["chapter_link_text"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_chapter_link", [], "any", false, false, true, 10), 0, [], "any", false, false, true, 10), "title", [], "any", false, false, true, 10);
        // line 11
        echo "
";
        // line 12
        $context["links"] = twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_quick_links", [], "any", false, false, true, 12);
        // line 13
        echo "
";
        // line 14
        $context["classes"] = [0 => "opportunities-section main-courage"];
        // line 17
        echo "
<section";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo ">
  ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 19, $this->source), "html", null, true);
        echo "
  ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 20, $this->source), "html", null, true);
        echo "
<section class=\"book intro intro_book\">
    <div class=\"content_width_plus_padding\">
      <div class=\"content_width s_inner\">
        <div class=\"book__block\">
          <div class=\"book__order\">
            <img class=\"book__image\" src=\"";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["book_image"] ?? null), 26, $this->source)]), "html", null, true);
        echo "\" alt=\"\">
            <div class=\"intro__button-block\"><!-- hidden by CSS -->
              <div class=\"intro__download-button\">
                <a href=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chapter_link"] ?? null), 29, $this->source), "html", null, true);
        echo "\" target=\"_blank\">
                  <i class=\"icon-download-thin\"></i>
                </a>
              </div>
              <span class=\"intro__button-text\">
                <a href=\"";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chapter_link"] ?? null), 34, $this->source), "html", null, true);
        echo "\" target=\"_blank\">
                  ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["chapter_link_text"] ?? null), 35, $this->source), "html", null, true);
        echo "
                </a>
              </span>
            </div>
            <div class=\"intro__bottom\">
              <div class=\"intro__order-text\">
                <div class=\"intro__order-text-heading\">";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 41, $this->source), "html", null, true);
        echo "</div>
                <div class=\"intro__order-text-date\">";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_title"] ?? null), 42, $this->source), "html", null, true);
        echo "</div>
              </div>
              <div class=\"intro__stores-list\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["subentity"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 46
                echo "                  <a class=\"btn btn_primary\" target=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["subentity"], "options", [], "any", false, false, true, 46)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["attributes"] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["target"] ?? null) : null), 46, $this->source), "html", null, true);
                echo "\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subentity"], "url", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subentity"], "title", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "</a>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['subentity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "              </div>
            </div>
          </div>
          <div class=\"book__content\">
            <div class=\"book__content-top\">
              <div class=\"book__quote-block\">
                ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["quote"] ?? null), 54, $this->source));
        echo "
              </div>
            <div class=\"book__content-bottom\">
              ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["book_desc"] ?? null), 57, $this->source));
        echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/book_detail/eck-entity--component--book_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 57,  156 => 54,  148 => 48,  134 => 46,  129 => 45,  123 => 42,  119 => 41,  110 => 35,  106 => 34,  98 => 29,  92 => 26,  83 => 20,  79 => 19,  75 => 18,  72 => 17,  70 => 14,  67 => 13,  65 => 12,  62 => 11,  60 => 10,  58 => 9,  55 => 8,  53 => 7,  50 => 6,  48 => 5,  46 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/actadigitech/templates/component/book_detail/eck-entity--component--book_detail.html.twig", "/var/www/html/jimdetert/web/themes/custom/actadigitech/templates/component/book_detail/eck-entity--component--book_detail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 45);
        static $filters = array("escape" => 18, "first" => 45, "raw" => 54);
        static $functions = array("file_url" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'first', 'raw'],
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
