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

/* themes/custom/actadigitech/templates/component/detailed_contact_us/eck-entity--component--detailed_contact_us.html.twig */
class __TwigTemplate_d539f64dc257dbbdd0a949efda5e49c82b87712a1f1317d3e5676c1bea95c786 extends \Twig\Template
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
        echo "
";
        // line 3
        $context["body_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_title", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3);
        // line 4
        echo "
";
        // line 5
        $context["intro_img"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_intro_image", [], "any", false, false, true, 5), "entity", [], "any", false, false, true, 5), "uri", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5);
        // line 6
        $context["image_alt"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_intro_image", [], "any", false, false, true, 6), "entity", [], "any", false, false, true, 6), "uri", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6);
        // line 7
        echo "

";
        // line 9
        $context["email_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_email_link", [], "any", false, false, true, 9), 0, [], "any", false, false, true, 9), "url", [], "any", false, false, true, 9);
        // line 10
        $context["email_text"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_email_link", [], "any", false, false, true, 10), 0, [], "any", false, false, true, 10), "title", [], "any", false, false, true, 10);
        // line 11
        echo "
";
        // line 12
        $context["linkedin_link"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_linkedin_link", [], "any", false, false, true, 12), 0, [], "any", false, false, true, 12), "url", [], "any", false, false, true, 12);
        // line 13
        $context["linkedin_link_text"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_linkedin_link", [], "any", false, false, true, 13), 0, [], "any", false, false, true, 13), "title", [], "any", false, false, true, 13);
        // line 14
        echo "
";
        // line 15
        $context["pdf_link"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_pdf_link", [], "any", false, false, true, 15), 0, [], "any", false, false, true, 15), "url", [], "any", false, false, true, 15);
        // line 16
        $context["pdf_link_text"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_pdf_link", [], "any", false, false, true, 16), 0, [], "any", false, false, true, 16), "title", [], "any", false, false, true, 16);
        // line 17
        echo "
";
        // line 18
        $context["google_paper_link"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_google_paper_link", [], "any", false, false, true, 18), 0, [], "any", false, false, true, 18), "url", [], "any", false, false, true, 18);
        // line 19
        $context["google_paper_link_text"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_google_paper_link", [], "any", false, false, true, 19), 0, [], "any", false, false, true, 19), "title", [], "any", false, false, true, 19);
        // line 20
        echo "
";
        // line 21
        $context["classes"] = [0 => "about-intro white"];
        // line 24
        echo "
<section";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 25), 25, $this->source), "html", null, true);
        echo ">
  ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 26, $this->source), "html", null, true);
        echo "
  ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 27, $this->source), "html", null, true);
        echo "

  <div class=\"content_width_plus_padding\">
    <div class=\"content_width s_inner\">
      <div class=\"sidebar_and_content\">

        <section class=\"right_content\">
          <h2 class=\"flush_with_top_of_letters flush_enough_top section_title\">
            ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_title"] ?? null), 35, $this->source), "html", null, true);
        echo "
          </h2>
          ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 37, $this->source));
        echo "
        </section>

        <div class=\"gutter_for_sidebar\">
          <!-- Gutter -->
        </div>

        <aside class=\"sidebar\">
          <div class=\"details_about_jim s_inner\">
            <div class=\"sbar_img jim bottom_aligned\">
              <img src=\"";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["intro_img"] ?? null), 47, $this->source)]), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_alt"] ?? null), 47, $this->source), "html", null, true);
        echo "\">
            </div>
            <h2 class=\"sidebar_title flush_top\">
              Contact Jim
            </h2>
            <div class=\"links_w_small_images\">
              <!-- todo: ask for links -->

              <div class=\"s_row\">
                <span class=\"s_image\">
                  <div>
                  <img src=\"/themes/custom/actadigitech/images/mail.svg\">
                  </div>
                </span>
                <a target=\"_blank\" class=\"s_text\" href=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email_url"] ?? null), 61, $this->source), "html", null, true);
        echo "\">
                  ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email_text"] ?? null), 62, $this->source), "html", null, true);
        echo "
                </a>
              </div>
              <div class=\"s_row\">
                <span class=\"s_image\">
                  <img src=\"/themes/custom/actadigitech/images/linkedin.svg\">
                </span>
                <a target=\"_blank\" class=\"s_text\" href=\"";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_link"] ?? null), 69, $this->source), "html", null, true);
        echo "\">
                  ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_link_text"] ?? null), 70, $this->source), "html", null, true);
        echo "
                </a>
              </div>
            </div>
            <div class=\"jim_cv\">
              <h2 class=\"sidebar_title\">
                Read Jim's CV
              </h2>
              <div class=\"links_w_small_images\">
                <!-- todo: quick search for CV in email, then ask, saying may have already got -->
                <div class=\"s_row\">
                  <span class=\"s_image\">
                    <img src=\"/themes/custom/actadigitech/images/download.svg\">
                  </span>
                  <a target=\"_blank\" class=\"s_text\" href=\"";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pdf_link"] ?? null), 84, $this->source), "html", null, true);
        echo "\">
                     ";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pdf_link_text"] ?? null), 85, $this->source), "html", null, true);
        echo "
                  </a>
                </div>
              </div>
            </div>
            <div>
              <h2 class=\"sidebar_title\">
                See Jim's Academic Papers
              </h2>
              <div class=\"links_w_small_images\">
                <!-- todo: quick search for CV in email, then ask, saying may have already got -->
                <div class=\"s_row\">
                  <span class=\"s_image\">
                    <img src=\"/themes/custom/actadigitech/images/google-scholar-20px.png\">
                  </span>
                  <a target=\"_blank\" class=\"s_text\" href=\"";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_paper_link"] ?? null), 100, $this->source), "html", null, true);
        echo "\">
                     ";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_paper_link_text"] ?? null), 101, $this->source), "html", null, true);
        echo "
                  </a>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/detailed_contact_us/eck-entity--component--detailed_contact_us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 101,  203 => 100,  185 => 85,  181 => 84,  164 => 70,  160 => 69,  150 => 62,  146 => 61,  127 => 47,  114 => 37,  109 => 35,  98 => 27,  94 => 26,  90 => 25,  87 => 24,  85 => 21,  82 => 20,  80 => 19,  78 => 18,  75 => 17,  73 => 16,  71 => 15,  68 => 14,  66 => 13,  64 => 12,  61 => 11,  59 => 10,  57 => 9,  53 => 7,  51 => 6,  49 => 5,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/actadigitech/templates/component/detailed_contact_us/eck-entity--component--detailed_contact_us.html.twig", "/var/www/html/jimdetert/web/themes/custom/actadigitech/templates/component/detailed_contact_us/eck-entity--component--detailed_contact_us.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("escape" => 25, "raw" => 37);
        static $functions = array("file_url" => 47);

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
