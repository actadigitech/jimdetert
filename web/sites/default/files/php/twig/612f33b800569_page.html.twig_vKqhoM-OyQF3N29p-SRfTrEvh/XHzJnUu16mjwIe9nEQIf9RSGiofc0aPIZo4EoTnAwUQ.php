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

/* themes/custom/actadigitech/templates/system/page.html.twig */
class __TwigTemplate_bc0304ed3931cd54804b69300c9aa14973f9754d709ce51fd1ecb61f44cdc0f7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "<div class=\"layout_container\">
";
        // line 55
        if (($context["banner_url"] ?? null)) {
            // line 56
            echo "  <header role=\"banner\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_class"] ?? null), 56, $this->source), "html", null, true);
            echo "\" style=\"background: url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_url"] ?? null), 56, $this->source), "html", null, true);
            echo ") no-repeat 50% 50%/cover;\">
";
        } else {
            // line 58
            echo "  <header role=\"banner\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_class"] ?? null), 58, $this->source), "html", null, true);
            echo "\">
";
        }
        // line 60
        echo "  <div class=\"content_width_plus_padding\">
    <div class=\"content_width\">
      <div class=\"top\">
        ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
      </div>
      ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "
    </div>
  </div>
</header>

";
        // line 71
        $this->displayBlock('main', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 88)) {
            // line 89
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 106
        echo "</div>
";
    }

    // line 71
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "<div class=\"js-quickedit-main-content\">
  <main role=\"main\">
      <div class=\"region region-breadcrumb\">
       ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "
      </div>
      ";
        // line 78
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "  </main>
</div>
";
    }

    // line 78
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "       <a id=\"main-content\"></a>
      <div class=\"region region-content\">
        ";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "
      </div>
    ";
    }

    // line 89
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "    <footer class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 90, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
      <div class=\"content_width_plus_padding\">
        <div class=\"content_width\">
          <div class=\"region region-footer\">
            <div class=\"foot\">
              ";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"small_print\">
              ";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      </div>
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 98,  146 => 95,  137 => 90,  133 => 89,  126 => 81,  122 => 79,  118 => 78,  112 => 84,  109 => 78,  104 => 75,  99 => 72,  95 => 71,  90 => 106,  86 => 89,  84 => 88,  81 => 87,  79 => 71,  71 => 65,  66 => 63,  61 => 60,  55 => 58,  47 => 56,  45 => 55,  42 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/actadigitech/templates/system/page.html.twig", "/home/actadigitech/all-sites/jd2.jimdetert.com/web/themes/custom/actadigitech/templates/system/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 55, "block" => 71);
        static $filters = array("escape" => 56);
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
