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

/* base/components/global-search/layout.html.twig */
class __TwigTemplate_d1f6712fde335129bbc79a752407a3c5 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        echo "\"
\t ";
        // line 3
        echo "\t ";
        // line 4
        echo "     class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 4), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 4), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasQuery", [], "method", false, false, false, 4)) {
            echo "ibo-is-opened";
        }
        echo "\"
     data-role=\"ibo-global-search\">
\t<form action=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetEndpoint", [], "method", false, false, false, 6), "html", null, true);
        echo "\" method=\"get\" class=\"ibo-global-search--head\" data-role=\"ibo-global-search--head\">
\t\t<a href=\"#\" class=\"ibo-global-search--icon\" data-role=\"ibo-global-search--icon\"
           aria-label=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Component:GlobalSearch:Tooltip"), "html", null, true);
        echo "\"
           data-tooltip-content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Component:GlobalSearch:Tooltip"), "html", null, true);
        echo "\"
           data-tooltip-placement=\"bottom-start\"
           data-tooltip-distance-offset=\"25\"
        >
\t\t\t<span class=\"fas fa-search\"></span>
\t\t</a>
\t\t<input type=\"text\" name=\"text\" class=\"ibo-global-search--input\" data-role=\"ibo-global-search--input\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Component:GlobalSearch:Input:Placeholder"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetQuery", [], "method", false, false, false, 15), "html", null, true);
        echo "\" autocomplete=\"off\">
\t\t<input type=\"hidden\" name=\"operation\" value=\"full_text\">
\t</form>
\t<div class=\"ibo-global-search--drawer\" data-role=\"ibo-global-search--drawer\">
\t\t<div class=\"ibo-global-search--compartment\">
\t\t\t<div class=\"ibo-global-search--compartment-title\" data-role=\"ibo-global-search--compartment-title\">
\t\t\t\t<span>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Component:GlobalSearch:Recents:Title"), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t\t<div class=\"ibo-global-search--compartment-content\" data-role=\"ibo-global-search--compartment-content\">
\t\t\t\t";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetShowHistory", [], "any", false, false, false, 24) == false)) {
            // line 25
            echo "\t\t\t\t\t<div class=\"ibo-global-search--compartment--placeholder\">
\t\t\t\t\t\t<div class=\"ibo-global-search--compartment--placeholder-hint\">";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Component:QuickCreate:HistoryDisabled"), "html", null, true);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
        } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 28
($context["oUIBlock"] ?? null), "GetLastQueries", [], "method", false, false, false, 28)) > 0)) {
            // line 29
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLastQueries", [], "method", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["aQuery"]) {
                // line 30
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aQuery"], "target_url", [], "any", false, false, false, 30), "html", null, true);
                echo "\" class=\"ibo-global-search--compartment-element\" data-role=\"ibo-global-search--compartment-element\" data-query-raw=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aQuery"], "query", [], "any", false, false, false, 30), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aQuery"], "query", [], "any", false, false, false, 30), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 31
                if (twig_get_attribute($this->env, $this->source, $context["aQuery"], "icon_url", [], "any", true, true, false, 31)) {
                    // line 32
                    echo "                                ";
                    // line 33
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aQuery"], "icon_url", [], "any", false, false, false, 33), "html", null, true);
                    echo "\" alt=\"\" class=\"ibo-global-search--compartment-element-image\">
\t\t\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, $context["aQuery"], "label_html", [], "any", false, false, false, 35);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aQuery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t\t<div class=\"ibo-global-search--compartment--placeholder\">
\t\t\t\t\t\t<div class=\"ibo-global-search--compartment--placeholder-image ibo-svg-illustration--container\">
\t\t\t\t\t\t\t ";
            // line 41
            echo twig_source($this->env, "illustrations/undraw_search.svg");
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ibo-global-search--compartment--placeholder-hint\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Component:GlobalSearch:LastQueries:NoQuery:Placeholder"), "html", null, true);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 46
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "base/components/global-search/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 46,  149 => 43,  144 => 41,  140 => 39,  137 => 38,  127 => 35,  121 => 33,  119 => 32,  117 => 31,  108 => 30,  103 => 29,  101 => 28,  96 => 26,  93 => 25,  91 => 24,  85 => 21,  74 => 15,  65 => 9,  61 => 8,  56 => 6,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/global-search/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\global-search\\layout.html.twig");
    }
}
