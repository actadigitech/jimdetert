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

/* themes/custom/actadigitech/templates/node/node--insights.html.twig */
class __TwigTemplate_247c7ee8e02d94260753cc83580474e1d9447f813c79db5741b0c210dd2b6bbe extends \Twig\Template
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
        // line 69
        $context["classes"] = [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "bundle", [], "any", false, false, true, 70), 70, $this->source)), 1 => ((twig_get_attribute($this->env, $this->source,         // line 71
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 71)) ? ("is-promoted") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 72)) ? ("is-sticky") : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 73)) ? ("is-unpublished") : ("")), 4 => ((        // line 74
($context["view_mode"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 74, $this->source))) : ("")), 5 => "clearfix"];
        // line 78
        echo "
<article";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 79), 79, $this->source), "html", null, true);
        echo ">
  ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 80, $this->source), "html", null, true);
        echo "
  ";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 81, $this->source), "html", null, true);
        echo "
  <div class=\"blog__wrapper content_width_plus_padding\">
    <div class=\"blog__wrapper_left\">
      <div class=\"sub-title\">
        ";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_sub_title", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"main-title\">
        <h2>";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 88), "value", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "</h2>
      </div>
      <div class=\"blog-date\">
        ";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_date", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"blog-img\">
        ";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_news_image", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"social-share\">
        <span>SHARE</span>";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "social_sharing", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"blog-body\">
        ";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_main_body", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"blog-tags\">
        ";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"blog__wrapper_right\">
      <div class=\"blog-author\">
        <p>Written By</p>
        ";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_written_by", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"social-buttons\">
        <div class=\"s_row\">
          <span class=\"icon-linkedin\"></span>
          <a target=\"_blank\" class=\"s_text\" href=\"https://www.linkedin.com/in/jim-detert-785464b7/\">
            Follow Jim On Linkedin
          </a>
        </div>
        <div class=\"s_row\">
          <span class=\"icon-facebook\"></span>
          <a target=\"_blank\" class=\"s_text\" href=\"https://www.facebook.com/Jim-Detert-110536281118493/\">
            Follow Jim On Facebook
          </a>
        </div>
      </div>
      <div class=\"recent-post\">
        <p>OTHER RECENT POSTS</p>
        ";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("recent_news", "block_1"), "html", null, true);
        echo "
      </div>
    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/node/node--insights.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 127,  109 => 109,  100 => 103,  94 => 100,  88 => 97,  82 => 94,  76 => 91,  70 => 88,  64 => 85,  57 => 81,  53 => 80,  49 => 79,  46 => 78,  44 => 74,  43 => 73,  42 => 72,  41 => 71,  40 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/actadigitech/templates/node/node--insights.html.twig", "/home/actadigitech/all-sites/jd2.jimdetert.com/web/themes/custom/actadigitech/templates/node/node--insights.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 69);
        static $filters = array("clean_class" => 70, "escape" => 79);
        static $functions = array("drupal_view" => 127);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
                ['drupal_view']
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
