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

/* themes/custom/actadigitech/templates/component/dynamic_content/article/views-view-table--articles--block_1.html.twig */
class __TwigTemplate_7a62901fdb0de247a72de9b6a918c91e48513f37cdc27fc2e548fde853e09082 extends \Twig\Template
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
<section class=\"opportunities-section articles_section white\">
    <div class=\"narrow_width_plus_padding\">
        <div class=\"narrow_width s_inner\">
            <div class=\"tab-content\">
                <div id=\"tab-1\" class=\"tab active\">
                    <h2>Articles for Managers and Professionals</h2>
                    <ul class=\"article paginate paginate-0\">
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 30
            echo "                            <li class=\"article__item\" style=\"opacity: 1;\">
                                <div class=\"article__top\">
                                    <span class=\"article__name\">";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 32), "field_sub_title", [], "any", false, false, true, 32), "content", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "</span>
                                    <span>|</span>
                                    <span class=\"article__time\"><time datetime=\"";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 34), "field_date", [], "any", false, false, true, 34), "content", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 34), "field_date", [], "any", false, false, true, 34), "content", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "</time></span>
                                </div>
                                <h6 class=\"article__heading\">
                                    <a target=\"_blank\" href=\"";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 37), "field_external_link", [], "any", false, false, true, 37), "content", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "\">
                                        ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 38), "title", [], "any", false, false, true, 38), "content", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "
                                        <i class=\"icon-open\"></i>
                                    </a>
                                </h6>
                                ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 42), "body", [], "any", false, false, true, 42), "content", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/dynamic_content/article/views-view-table--articles--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 45,  81 => 42,  74 => 38,  70 => 37,  62 => 34,  57 => 32,  53 => 30,  49 => 29,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/actadigitech/templates/component/dynamic_content/article/views-view-table--articles--block_1.html.twig", "E:\\xampp\\htdocs\\jimdetert\\web\\themes\\custom\\actadigitech\\templates\\component\\dynamic_content\\article\\views-view-table--articles--block_1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 29);
        static $filters = array("escape" => 32);
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
