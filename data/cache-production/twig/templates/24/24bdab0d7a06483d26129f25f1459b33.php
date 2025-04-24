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

/* base/components/button/buttonurl.html.twig */
class __TwigTemplate_3a5ccdc8c4a3cb36a4bff7cc1c9503d6 extends Template
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
        $context["sAriaLabel"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 1))) ? (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 1)) : ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTooltip", [], "method", false, false, false, 1))) ? (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTooltip", [], "method", false, false, false, 1)) : (""))));
        // line 2
        echo "<a id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 2), "html", null, true);
        echo "\"
        class=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 3), "html", null, true);
        echo " ibo-is-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetActionType", [], "method", false, false, false, 3), "html", null, true);
        echo " ibo-is-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetColor", [], "method", false, false, false, 3), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 3)) {
            echo "ibo-is-hidden";
        }
        echo "\"
        data-role=\"ibo-button\"
        ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 5)) {
            // line 6
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 6));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 7
                echo "                data-";
                echo twig_escape_filter($this->env, $context["sName"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["sValue"], "html", null, true);
                echo "\"
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sName'], $context['sValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        ";
        }
        // line 10
        echo "        href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetURL", [], "method", false, false, false, 10), "html", null, true);
        echo "\"
        target=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTarget", [], "method", false, false, false, 11), "html", null, true);
        echo "\"
        ";
        // line 13
        echo "        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTooltip", [], "method", false, false, false, 13))) {
            // line 14
            echo "            data-tooltip-content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTooltip", [], "method", false, false, false, 14), "html", null, true);
            echo "\"
        ";
        } else {
            // line 16
            echo "            title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 16), "html", null, true);
            echo "\"
        ";
        }
        // line 18
        echo "        ";
        // line 19
        echo "        ";
        if ( !twig_test_empty(($context["sAriaLabel"] ?? null))) {
            // line 20
            echo "            aria-label=\"";
            echo twig_escape_filter($this->env, ($context["sAriaLabel"] ?? null), "html", null, true);
            echo "\"
        ";
        }
        // line 22
        echo ">
    <span class=\"ibo-button--loading-icon fas fa-spinner fa-pulse\"></span>
    ";
        // line 24
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconClass", [], "method", false, false, false, 24))) {
            // line 25
            echo "        <span class=\"ibo-button--icon ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconClass", [], "method", false, false, false, 25), "html", null, true);
            echo "\"></span>
    ";
        }
        // line 27
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 27))) {
            // line 28
            echo "        <span class=\"ibo-button--label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 28), "html", null, true);
            echo "</span>
    ";
        }
        // line 30
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "base/components/button/buttonurl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 30,  130 => 28,  127 => 27,  121 => 25,  119 => 24,  115 => 22,  109 => 20,  106 => 19,  104 => 18,  98 => 16,  92 => 14,  89 => 13,  85 => 11,  80 => 10,  77 => 9,  66 => 7,  61 => 6,  59 => 5,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/button/buttonurl.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\button\\buttonurl.html.twig");
    }
}
