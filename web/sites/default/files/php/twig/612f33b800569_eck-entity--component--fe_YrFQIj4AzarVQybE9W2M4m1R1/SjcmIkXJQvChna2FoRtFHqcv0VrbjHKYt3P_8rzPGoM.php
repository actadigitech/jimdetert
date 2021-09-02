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

/* themes/custom/actadigitech/templates/component/featured_lhs_image/eck-entity--component--featured_lhs_image_.html.twig */
class __TwigTemplate_d69c171ca21a458653d49151567e97fae112a09d0f0e75045e6fb3dfa36944d9 extends \Twig\Template
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
        $context["body_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "title", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2);
        // line 3
        $context["image_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_side_image", [], "any", false, false, true, 3), "entity", [], "any", false, false, true, 3), "uri", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3);
        // line 4
        echo "

";
        // line 6
        $context["link_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_download_link", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), "url", [], "any", false, false, true, 6);
        // line 7
        $context["link_text"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_download_link", [], "any", false, false, true, 7), 0, [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7);
        // line 8
        echo "
";
        // line 9
        $context["classes"] = [0 => "guide-block guide-block_planning"];
        // line 12
        echo "
<section";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 13), 13, $this->source), "html", null, true);
        echo ">
  ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 14, $this->source), "html", null, true);
        echo "
  ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 15, $this->source), "html", null, true);
        echo "
  <div class=\"content_width_plus_padding\">
    <div class=\"content_width\">
      <div class=\"guide-block__content\">
        <h3>";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_title"] ?? null), 19, $this->source), "html", null, true);
        echo "</h3>
        ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 20, $this->source));
        echo "
        <a href=\"";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null), 21, $this->source), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn_secondary btn_icon\">
          ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_text"] ?? null), 22, $this->source), "html", null, true);
        echo "
          <img src=\"/themes/custom/actadigitech/images/download-blue.svg\" alt=\"\">
        </a>
        <div class=\"guide-block__image\">
          <img src=\"";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["image_url"] ?? null), 26, $this->source)]), "html", null, true);
        echo "\" alt=\"\">
        </div>
      </div>
    </div>
  </div>
</section>


  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/featured_lhs_image/eck-entity--component--featured_lhs_image_.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  69 => 15,  65 => 14,  61 => 13,  58 => 12,  56 => 9,  53 => 8,  51 => 7,  49 => 6,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/actadigitech/templates/component/featured_lhs_image/eck-entity--component--featured_lhs_image_.html.twig", "/home/actadigitech/all-sites/jd2.jimdetert.com/web/themes/custom/actadigitech/templates/component/featured_lhs_image/eck-entity--component--featured_lhs_image_.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("escape" => 13, "raw" => 20);
        static $functions = array("file_url" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'raw'],
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
