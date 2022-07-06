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

/* themes/spectheme/templates/page.html.twig */
class __TwigTemplate_d8229bad0fefe4f1b2d26a3814b6e3dd extends \Twig\Template
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
        // line 48
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "
  </header>

  ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "
  ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "

  ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "

  ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "

  ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "

  <main role=\"main\">

  ";
        // line 66
        echo "\t<div class=\"title-section\">
\t\t<h1>Lorem ipsum dolor. Ismet</h1>
\t\t<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</span>
\t</div>

";
        // line 72
        echo "    ";
        // line 118
        echo "

<div class=\"container-fluid\">
    <div id=\"custom_carousel\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\">
        <div class=\"controls\">
            <ul class=\"nav\">
                <li data-target=\"#custom_carousel\" data-slide-to=\"0\" class=\"active\"><a href=\"#\">Featured Conferences</a></li>
                <li data-target=\"#custom_carousel\" data-slide-to=\"1\"><a href=\"#\">Recommended Conferences</a></li>
                <li data-target=\"#custom_carousel\" data-slide-to=\"2\"><a href=\"#\">Past Conferences</a></li>
            </ul>
        </div>
        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                          ";
        // line 135
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("carousel", "block_1"), "html", null, true);
        echo "  
                        </div>
                    </div>
                </div>            
            </div> 
            <div class=\"item\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                          ";
        // line 144
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("carousel", "block_2"), "html", null, true);
        echo "  
                        </div>
                    </div>
                </div>            
            </div> 
            <div class=\"item\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                          ";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("carousel", "block_3"), "html", null, true);
        echo "  
                        </div>
                    </div>
                </div>           
            </div> 


            </div> 
        <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->

    </div>
    <!-- End Carousel -->
</div>


";
        // line 171
        echo "    ";
        // line 174
        echo "    ";
        // line 175
        echo "

";
        // line 178
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 178)) {
            // line 179
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 180
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 183
        echo "
    ";
        // line 184
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 184)) {
            // line 185
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 186
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 189
        echo "
  </main>

  ";
        // line 192
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 192)) {
            // line 193
            echo "    <footer role=\"contentinfo\">
      ";
            // line 194
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 197
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/spectheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 197,  192 => 194,  189 => 193,  187 => 192,  182 => 189,  176 => 186,  173 => 185,  171 => 184,  168 => 183,  162 => 180,  159 => 179,  156 => 178,  152 => 175,  150 => 174,  148 => 171,  128 => 153,  116 => 144,  104 => 135,  85 => 118,  83 => 72,  76 => 66,  69 => 61,  64 => 59,  59 => 57,  54 => 55,  50 => 54,  44 => 51,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}
<div class=\"layout-container\">

  <header role=\"banner\">
    {{ page.header }}
  </header>

  {{ page.primary_menu }}
  {{ page.secondary_menu }}

  {{ page.breadcrumb }}

  {{ page.highlighted }}

  {{ page.help }}

  <main role=\"main\">

  {# showcase section starts here #}
\t<div class=\"title-section\">
\t\t<h1>Lorem ipsum dolor. Ismet</h1>
\t\t<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</span>
\t</div>

{# carousel content #}
    {# <div class=\"container-fluid\">
    <div id=\"custom_carousel\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\">
        <div class=\"controls\">
            <ul class=\"nav\">
                <li data-target=\"#custom_carousel\" data-slide-to=\"0\"><a href=\"#\">Featured Conferences</a></li>
                <li data-target=\"#custom_carousel\" data-slide-to=\"1\"><a href=\"#\">Recommended Conferences</a></li>
                <li data-target=\"#custom_carousel\" data-slide-to=\"2\"><a href=\"#\">Past Conferences</a></li>
            </ul>
        </div>
        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
        <!-- Cards start -->
            <!-- Card 1 -->
            <div class=\"item active\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            {{ drupal_view('carousel', 'block_1') }}
                        </div>
                    </div>
                </div>            
            </div> 
            <div class=\"item\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            {{ drupal_view('carousel', 'block_2') }}
                        </div>
                    </div>
                </div>            
            </div> 
            <div class=\"item\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                        {{ drupal_view('carousel', 'block_3') }}
                        </div>
                    </div>
                </div>           
            </div> 
        <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
    </div>
    <!-- End Carousel -->
</div> #}


<div class=\"container-fluid\">
    <div id=\"custom_carousel\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\">
        <div class=\"controls\">
            <ul class=\"nav\">
                <li data-target=\"#custom_carousel\" data-slide-to=\"0\" class=\"active\"><a href=\"#\">Featured Conferences</a></li>
                <li data-target=\"#custom_carousel\" data-slide-to=\"1\"><a href=\"#\">Recommended Conferences</a></li>
                <li data-target=\"#custom_carousel\" data-slide-to=\"2\"><a href=\"#\">Past Conferences</a></li>
            </ul>
        </div>
        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                          {{ drupal_view('carousel', 'block_1') }}  
                        </div>
                    </div>
                </div>            
            </div> 
            <div class=\"item\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                          {{ drupal_view('carousel', 'block_2') }}  
                        </div>
                    </div>
                </div>            
            </div> 
            <div class=\"item\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                          {{ drupal_view('carousel', 'block_3') }}  
                        </div>
                    </div>
                </div>           
            </div> 


            </div> 
        <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->

    </div>
    <!-- End Carousel -->
</div>


{# main content, not styled, everything present at one spot #}
    {# <div class=\"layout-content\">
      {{ page.content }}
    </div> #}
    {# /.layout-content #}


{# disabled, so no content, wont show up on page unless enabled and filled with content #}
    {% if page.sidebar_first %}
      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        {{ page.sidebar_first }}
      </aside>
    {% endif %}

    {% if page.sidebar_second %}
      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        {{ page.sidebar_second }}
      </aside>
    {% endif %}

  </main>

  {% if page.footer %}
    <footer role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endif %}

</div>{# /.layout-container #}
", "themes/spectheme/templates/page.html.twig", "C:\\Xampp_new\\htdocs\\sproject\\themes\\spectheme\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 178);
        static $filters = array("escape" => 51);
        static $functions = array("drupal_view" => 135);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
