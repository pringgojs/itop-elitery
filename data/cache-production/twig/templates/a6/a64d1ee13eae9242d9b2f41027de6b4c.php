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

/* base/components/quick-create/layout.html.twig */
class __TwigTemplate_e745c686df046d8c2141a405ac8389e3 extends Template
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
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        echo "\" data-role=\"ibo-quick-create\">
\t<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetEndpoint", [], "method", false, false, false, 2), "html", null, true);
        echo "\" method=\"get\" class=\"ibo-quick-create--head\" data-role=\"ibo-quick-create--head\">
\t\t<input type=\"hidden\" name=\"operation\" value=\"new\">
\t\t<a href=\"#\" class=\"ibo-quick-create--icon\" data-role=\"ibo-quick-create--icon\"
           aria-label=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Component:QuickCreate:Tooltip"), "html", null, true);
        echo "\"
           data-tooltip-content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Component:QuickCreate:Tooltip"), "html", null, true);
        echo "\"
\t\t   data-tooltip-placement=\"bottom-start\"
           data-tooltip-distance-offset=\"25\"
        >
\t\t\t<span class=\"fas fa-plus\"></span>
\t\t</a>
\t\t<select name=\"class\" class=\"ibo-quick-create--input\" data-role=\"ibo-quick-create--input\">
\t\t\t<option value=\"\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Component:QuickCreate:Input:Placeholder"), "html", null, true);
        echo "</option>
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAvailableClasses", [], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["sClassCode"] => $context["sClassLabel"]) {
            // line 15
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["sClassCode"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["sClassLabel"], "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sClassCode'], $context['sClassLabel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t</select>
\t</form>
\t<div class=\"ibo-quick-create--drawer\" data-role=\"ibo-quick-create--drawer\">
\t\t<div class=\"ibo-quick-create--compartment\">
\t\t\t<div class=\"ibo-quick-create--compartment-content\" data-role=\"ibo-quick-create--compartment-results\">
\t\t\t</div>
\t\t\t<div class=\"ibo-quick-create--compartment-title\" data-role=\"ibo-quick-create--compartment-title\">
\t\t\t\t<span>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Component:QuickCreate:Recents:Title"), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t\t<div class=\"ibo-quick-create--compartment-content\" data-role=\"ibo-quick-create--compartment-content\">
\t\t\t\t";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetShowHistory", [], "any", false, false, false, 27) == false)) {
            // line 28
            echo "\t\t\t\t\t<div class=\"ibo-quick-create--compartment--placeholder\">
\t\t\t\t\t\t<div class=\"ibo-quick-create--compartment--placeholder-hint\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Component:QuickCreate:HistoryDisabled"), "html", null, true);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
        } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 31
($context["oUIBlock"] ?? null), "GetLastClasses", [], "method", false, false, false, 31)) > 0)) {
            // line 32
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLastClasses", [], "method", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["aClass"]) {
                // line 33
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aClass"], "target_url", [], "any", false, false, false, 33), "html", null, true);
                echo "\" class=\"ibo-quick-create--compartment-element\" data-role=\"ibo-quick-create--compartment-element\" data-class-code=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aQuery"] ?? null), "class", [], "any", false, false, false, 33), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 34
                if (twig_get_attribute($this->env, $this->source, $context["aClass"], "icon_url", [], "any", true, true, false, 34)) {
                    // line 35
                    echo "                                ";
                    // line 36
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aClass"], "icon_url", [], "any", false, false, false, 36), "html", null, true);
                    echo "\" alt=\"\" class=\"ibo-quick-create--compartment-element-image\">
\t\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, $context["aClass"], "label_html", [], "any", false, false, false, 38);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aClass'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t<div class=\"ibo-quick-create--compartment--placeholder\">
\t\t\t\t\t\t<div class=\"ibo-quick-create--compartment--placeholder-image ibo-svg-illustration--container\">
\t\t\t\t\t\t";
            // line 44
            echo twig_source($this->env, "illustrations/undraw_content.svg");
            echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"ibo-quick-create--compartment--placeholder-hint\">";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Component:QuickCreate:LastClasses:NoClass:Placeholder"), "html", null, true);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 50
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "base/components/quick-create/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 50,  157 => 47,  151 => 44,  147 => 42,  144 => 41,  134 => 38,  128 => 36,  126 => 35,  124 => 34,  117 => 33,  112 => 32,  110 => 31,  105 => 29,  102 => 28,  100 => 27,  94 => 24,  85 => 17,  74 => 15,  70 => 14,  66 => 13,  56 => 6,  52 => 5,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/quick-create/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\quick-create\\layout.html.twig");
    }
}
