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

/* themes/custom/actadigitech/templates/block/block--views-block--banner-header-block-1.html.twig */
class __TwigTemplate_46d7ee02be18b9c072954b4dabc4a869495dc7a91d72f0c90f65b0e28de2df30 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "  
  <div class=\"banner-block\">
    ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 50, $this->source), "html", null, true);
        echo "
    ";
        // line 51
        if (($context["label"] ?? null)) {
            // line 52
            echo "      <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 52), 52, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 52, $this->source), "html", null, true);
            echo "</h2>
    ";
        }
        // line 54
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 54, $this->source), "html", null, true);
        echo "

    ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "  </div>


";
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 57, $this->source), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/block/block--views-block--banner-header-block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 57,  73 => 56,  66 => 59,  64 => 56,  58 => 54,  50 => 52,  48 => 51,  44 => 50,  40 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/actadigitech/templates/block/block--views-block--banner-header-block-1.html.twig", "/var/www/html/jimdetert/web/themes/custom/actadigitech/templates/block/block--views-block--banner-header-block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 51, "block" => 56);
        static $filters = array("escape" => 50);
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
