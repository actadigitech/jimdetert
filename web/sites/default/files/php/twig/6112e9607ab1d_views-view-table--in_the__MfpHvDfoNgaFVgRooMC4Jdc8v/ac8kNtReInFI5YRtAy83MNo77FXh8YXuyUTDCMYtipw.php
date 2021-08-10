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
class __TwigTemplate_d8557e4f23ed59f653e2734c3a54f03753d8da5c674466962c99d620c391f811 extends \Twig\Template
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
<section class=\"section-blog blog-insites\">
    <div class=\"content_width_plus_padding\">
        <h2 class=\"flush_with_top_of_letters section_title\">Insights from Jim</h2>
        <div class=\"ajax-filters-container\">
            <div class=\"ajax-filter-holder\">
                <div class=\"load-more-box\">
                    <div class=\"df-row ajax-load-content\">
                            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 30
            echo "                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <article class=\"card\">
                                    <div class=\"card-header\">
                                        <time>";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 33), "field_date", [], "any", false, false, true, 33), "content", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "</time>
                                        <h4>
                                            ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 35), "title", [], "any", false, false, true, 35), "content", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
                                        </h4>
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
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                    </div>
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
        return array (  86 => 46,  74 => 40,  70 => 39,  63 => 35,  58 => 33,  53 => 30,  49 => 29,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a view template to display a list of rows.
 *
 * Available variables:
 * - attributes: HTML attributes for the container.
 * - rows: A list of rows for this list.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's contents.
 * - title: The title of this group of rows. May be empty.
 * - list: @todo.
 *   - type: Starting tag will be either a ul or ol.
 *   - attributes: HTML attributes for the list element.
 *
 * @see template_preprocess_views_view_list()
 *
 * @ingroup themeable
 */
#}

<section class=\"section-blog blog-insites\">
    <div class=\"content_width_plus_padding\">
        <h2 class=\"flush_with_top_of_letters section_title\">Insights from Jim</h2>
        <div class=\"ajax-filters-container\">
            <div class=\"ajax-filter-holder\">
                <div class=\"load-more-box\">
                    <div class=\"df-row ajax-load-content\">
                            {% for key,row in rows  %}
                            <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                <article class=\"card\">
                                    <div class=\"card-header\">
                                        <time>{{ row.columns.field_date.content }}</time>
                                        <h4>
                                            {{ row.columns.title.content }}
                                        </h4>
                                    </div>
                                    <div class=\"content\">
                                        <a target=\"_blank\" href=\"{{ field_news_link }}\" class=\"card-img\">
                                            <img src=\"{{ row.columns.field_news_image.content }}\" width=\"363\" height=\"221\" alt=\"\">
                                        </a>   
                                    </div>
                                </article>
                            </div>
                            {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "themes/custom/actadigitech/templates/component/dynamic_content/news_insights/views-view-table--in_the_news--block_2.html.twig", "D:\\xampp\\htdocs\\jimdetert\\web\\themes\\custom\\actadigitech\\templates\\component\\dynamic_content\\news_insights\\views-view-table--in_the_news--block_2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 29);
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
