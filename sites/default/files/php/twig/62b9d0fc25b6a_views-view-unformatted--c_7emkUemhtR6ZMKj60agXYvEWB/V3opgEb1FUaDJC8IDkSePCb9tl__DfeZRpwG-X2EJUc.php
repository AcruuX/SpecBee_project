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

/* themes/spectheme/templates/views-view-unformatted--carousel--block-3.html.twig */
class __TwigTemplate_f7a91420692bae8c16c9ca53d572df6f extends \Twig\Template
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
        echo "
<div class = \"parent-div\">
\t<div class=\"carousel-wrapper arrow-slide\">

\t\t";
        // line 5
        if (($context["title"] ?? null)) {
            // line 6
            echo "\t\t<h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 6, $this->source), "html", null, true);
            echo "</h3>
\t\t";
        }
        // line 8
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 9
            echo "\t\t";
            // line 10
            $context["row_classes"] = [0 => ((            // line 11
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 14
            echo "\t\t<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 14), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 14), 14, $this->source), "html", null, true);
            echo ">";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            // line 16
            echo "</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  \t\t<div class=\"left-arrow\"></div>
  \t\t<div class=\"right-arrow\"></div>\t
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/spectheme/templates/views-view-unformatted--carousel--block-3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  69 => 16,  67 => 15,  63 => 14,  61 => 11,  60 => 10,  58 => 9,  53 => 8,  47 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class = \"parent-div\">
\t<div class=\"carousel-wrapper arrow-slide\">

\t\t{% if title %}
\t\t<h3>{{ title }}</h3>
\t\t{% endif %}
\t\t{% for row in rows %}
\t\t{%
\t\t\tset row_classes = [
\t\t\tdefault_row_class ? 'views-row',
\t\t\t]
\t\t%}
\t\t<div{{ row.attributes.addClass(row_classes) }}>
\t\t\t{{- row.content -}}
\t\t</div>
\t\t{% endfor %}
  \t\t<div class=\"left-arrow\"></div>
  \t\t<div class=\"right-arrow\"></div>\t
\t</div>
</div>
", "themes/spectheme/templates/views-view-unformatted--carousel--block-3.html.twig", "C:\\Xampp_new\\htdocs\\sproject\\themes\\spectheme\\templates\\views-view-unformatted--carousel--block-3.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5, "for" => 8, "set" => 10);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
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
