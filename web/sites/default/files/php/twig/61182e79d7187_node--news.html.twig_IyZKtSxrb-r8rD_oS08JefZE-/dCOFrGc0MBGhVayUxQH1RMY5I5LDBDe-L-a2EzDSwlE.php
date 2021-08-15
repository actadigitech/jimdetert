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

/* themes/custom/actadigitech/templates/node/node--news.html.twig */
class __TwigTemplate_5b46ae4f57a2130778fbc5742d4b2c27330c968e7ac5e2a55d4d1d18093896b9 extends \Twig\Template
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
  <div class=\"blog__wrapper\">
    <div class=\"blog__wrapper_left\">
      <div class=\"sub-title\">
        ";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_sub_title", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"main-title\">
        ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lable"] ?? null), 88, $this->source), "html", null, true);
        echo "
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
        ";
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
      <div class=\"blog-authpr\">
        <p>Written By</p>
        ";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_written_by", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"social-buttons\">
        <div class=\"s_row\">
          <span class=\"s_image\">
            <div>
            <img src=\"/themes/custom/actadigitech/images/linkedin.svg\">
            </div>
          </span>
          <a target=\"_blank\" class=\"s_text\" href=\"https://www.linkedin.com/in/jim-detert-785464b7/\">
            Follow Jim On Linkedin
          </a>
        </div>
        <div class=\"s_row\">
          <span class=\"s_image\">
            <img src=\"/themes/custom/actadigitech/images/mail.svg\">
          </span>
          <a target=\"_blank\" class=\"s_text\" href=\"https://facebook.com\">
            Follow Jim On Facebook
          </a>
        </div>
      </div>
      <div class=\"recent-post\">
        OTHER RECENT POSTS
        ";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("recent_news", "block_1"), "html", null, true);
        echo "
      </div>
    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/node/node--news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 133,  109 => 109,  100 => 103,  94 => 100,  88 => 97,  82 => 94,  76 => 91,  70 => 88,  64 => 85,  57 => 81,  53 => 80,  49 => 79,  46 => 78,  44 => 74,  43 => 73,  42 => 72,  41 => 71,  40 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @ingroup templates
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
{%
  set classes = [
    node.bundle|clean_class,
    node.isPromoted() ? 'is-promoted',
    node.isSticky() ? 'is-sticky',
    not node.isPublished() ? 'is-unpublished',
    view_mode ? view_mode|clean_class,
    'clearfix',
  ]
%}

<article{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {{ title_suffix }}
  <div class=\"blog__wrapper\">
    <div class=\"blog__wrapper_left\">
      <div class=\"sub-title\">
        {{ content.field_sub_title }}
      </div>
      <div class=\"main-title\">
        {{ lable }}
      </div>
      <div class=\"blog-date\">
        {{ content.field_date }}
      </div>
      <div class=\"blog-img\">
        {{ content.field_news_image }}
      </div>
      <div class=\"social-share\">
        {{ content.social_sharing }}
      </div>
      <div class=\"blog-body\">
        {{ content.field_main_body }}
      </div>
      <div class=\"blog-tags\">
        {{ content.field_tags }}
      </div>
    </div>
    <div class=\"blog__wrapper_right\">
      <div class=\"blog-authpr\">
        <p>Written By</p>
        {{ content.field_written_by }}
      </div>
      <div class=\"social-buttons\">
        <div class=\"s_row\">
          <span class=\"s_image\">
            <div>
            <img src=\"/themes/custom/actadigitech/images/linkedin.svg\">
            </div>
          </span>
          <a target=\"_blank\" class=\"s_text\" href=\"https://www.linkedin.com/in/jim-detert-785464b7/\">
            Follow Jim On Linkedin
          </a>
        </div>
        <div class=\"s_row\">
          <span class=\"s_image\">
            <img src=\"/themes/custom/actadigitech/images/mail.svg\">
          </span>
          <a target=\"_blank\" class=\"s_text\" href=\"https://facebook.com\">
            Follow Jim On Facebook
          </a>
        </div>
      </div>
      <div class=\"recent-post\">
        OTHER RECENT POSTS
        {{ drupal_view('recent_news', 'block_1') }}
      </div>
    </div>
</article>
", "themes/custom/actadigitech/templates/node/node--news.html.twig", "D:\\xampp\\htdocs\\jimdetert\\web\\themes\\custom\\actadigitech\\templates\\node\\node--news.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 69);
        static $filters = array("clean_class" => 70, "escape" => 79);
        static $functions = array("drupal_view" => 133);

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
