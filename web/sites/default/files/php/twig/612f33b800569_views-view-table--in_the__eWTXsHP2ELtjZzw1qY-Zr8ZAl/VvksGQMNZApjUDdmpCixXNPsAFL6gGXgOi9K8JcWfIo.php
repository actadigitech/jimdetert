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

/* themes/custom/actadigitech/templates/component/dynamic_content/news_insights/views-view-table--in_the_news--block_1.html.twig */
class __TwigTemplate_20a2b0e344a3c4b626c1205478bf09eac8f4e63abe8fc8ecbaf747bf18a3bf61 extends \Twig\Template
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
        // line 21
        echo "
<section class=\"section_news\">
    <div class=\"medium_width_plus_padding\">
        ";
        // line 25
        echo "        <div class=\"section_news__holder tab-content\">
            <div id=\"tab-1\" class=\"tab active\">
                <ul class=\"article-news article paginate paginate-0\">
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 29
            echo "                        <li class=\"article__item\" style=\"opacity: 1;\">
                            <div class=\"article__row df-row\">
                                <div class=\"image_column col-sm-3 col-md-4\">
                                    <div class=\"logo-holder\">
                                        <img src=\"";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 33), "field_news_image", [], "any", false, false, true, 33), "content", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"text_column col-sm-9 col-md-8\">
                                    <div class=\"article__top\">
                                        <span class=\"article__name\">";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 38), "field_tag_line", [], "any", false, false, true, 38), "content", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "</span>
                                        <span>&nbsp;|&nbsp;</span>
                                        <span class=\"article__time\"><time>";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 40), "field_date", [], "any", false, false, true, 40), "content", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "</time></span>
                                    </div>
                                    <h3 class=\"article__heading\">
                                        ";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 43), "title", [], "any", false, false, true, 43), "content", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "
                                    </h3>
                                    <span class=\"author\">";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 45), "field_sub_title", [], "any", false, false, true, 45), "content", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </ul>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/dynamic_content/news_insights/views-view-table--in_the_news--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 50,  83 => 45,  78 => 43,  72 => 40,  67 => 38,  59 => 33,  53 => 29,  49 => 28,  44 => 25,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/actadigitech/templates/component/dynamic_content/news_insights/views-view-table--in_the_news--block_1.html.twig", "/home/actadigitech/all-sites/jd2.jimdetert.com/web/themes/custom/actadigitech/templates/component/dynamic_content/news_insights/views-view-table--in_the_news--block_1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 28);
        static $filters = array("escape" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
