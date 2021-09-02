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

/* modules/contrib/social_sharing/templates/social-sharing-share-services.html.twig */
class __TwigTemplate_72546f2a7467723830f2d1fb525c8595ff48f420bb5b85c13cd1aa95539abebf extends \Twig\Template
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
        // line 17
        echo "
";
        // line 19
        $context["classes"] = [0 => "mrcs-social-share--share-services"];
        // line 23
        echo "
<ul";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 24), 24, $this->source), "html", null, true);
        echo ">
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["share_services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["share_service"]) {
            // line 26
            echo "    <li>
      <a id=\"";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("share-service-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["share_service"], "id", [], "any", false, false, true, 27), 27, $this->source)), "html", null, true);
            echo "\" class=\"share-service-link ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("share-service-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["share_service"], "id", [], "any", false, false, true, 27), 27, $this->source)), "html", null, true);
            echo "\" target=\"_blank\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["share_service"], "url", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["share_service"], "name", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\" rel=\"noopener noreferrer\">
        <span class=\"share-service-name\">";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["share_service"], "name", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</span>
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['share_service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/social_sharing/templates/social-sharing-share-services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 32,  68 => 28,  58 => 27,  55 => 26,  51 => 25,  47 => 24,  44 => 23,  42 => 19,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/social_sharing/templates/social-sharing-share-services.html.twig", "/home/actadigitech/all-sites/jd2.jimdetert.com/web/modules/contrib/social_sharing/templates/social-sharing-share-services.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 19, "for" => 25);
        static $filters = array("escape" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
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
