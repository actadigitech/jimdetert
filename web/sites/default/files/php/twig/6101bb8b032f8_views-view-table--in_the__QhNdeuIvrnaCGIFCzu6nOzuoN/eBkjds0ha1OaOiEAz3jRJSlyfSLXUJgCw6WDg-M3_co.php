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

/* themes/custom/actadigitech/templates/component/dynamic_content/news_insights/views-view-table--in_the_news--block_2.html.twig */
class __TwigTemplate_3bb74ef0e81987e107abcbdd1029be3c6b8af2b6f31bddaab2eed71d87868c04 extends \Twig\Template
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
<section class=\"section-blog\">
    <div class=\"content_width_plus_padding\">
        <h2 class=\"flush_with_top_of_letters section_title\">Insights from Jim</h2>
        <div class=\"ajax-filters-container\">
            <div class=\"ajax-filter-holder\">
                <div class=\"load-more-box\">
                    <div class=\"df-row ajax-load-content\">
                        <div class=\"card_ct col-sm-6 col-lg-4\">
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 31
            echo "                                <article class=\"card\">
                                    <div class=\"card-header\">
                                        <time>";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 33), "field_date", [], "any", false, false, true, 33), "content", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "</time>
                                        <p>
                                            ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 35), "title", [], "any", false, false, true, 35), "content", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
                                        </p>
                                    </div>
                                    <div class=\"content\">
                                        <a target=\"_blank\" href=\"";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_news_link"] ?? null), 39, $this->source), "html", null, true);
            echo "\" class=\"card-img\">
                                            <img src=\"";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 40), "field_news_image", [], "any", false, false, true, 40), "content", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "\" width=\"363\" height=\"221\" alt=\"\">
                                        </a>   
                                    </div>
                                </article>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/dynamic_content/news_insights/views-view-table--in_the_news--block_2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 45,  74 => 40,  70 => 39,  63 => 35,  58 => 33,  54 => 31,  50 => 30,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/actadigitech/templates/component/dynamic_content/news_insights/views-view-table--in_the_news--block_2.html.twig", "/var/www/html/jimdetert/web/themes/custom/actadigitech/templates/component/dynamic_content/news_insights/views-view-table--in_the_news--block_2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 30);
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
