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

/* base/components/dashlet/dashlet-badge.html.twig */
class __TwigTemplate_798a6a4b8882005ebd0e56c68262bf7b extends Template
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
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "    <div class=\"ibo-dashlet-badge--body";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 4)) {
            echo " ibo-is-hidden";
        }
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 4), "html", null, true);
        echo "\"
         data-role=\"ibo-dashlet-badge--body\"
            ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasClassDescription", [], "method", false, false, false, 6)) {
            // line 7
            echo "                ";
            // line 8
            echo "                data-tooltip-content=\"";
            echo twig_escape_filter($this->env, "<div class=\"ibo-dashlet-badge--body--tooltip-title\">");
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetClassLabel", [], "method", false, false, false, 8), "html", null, true);
            echo twig_escape_filter($this->env, "</div><div class=\"ibo-dashlet-badge--body--tooltip-description\">");
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetClassDescription", [], "method", false, false, false, 8), "html", null, true);
            echo twig_escape_filter($this->env, "</div>");
            echo "\"
                data-tooltip-html-enabled=\"true\"
            ";
        } else {
            // line 11
            echo "                ";
            // line 12
            echo "                data-tooltip-content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetClassLabel", [], "method", false, false, false, 12), "html", null, true);
            echo "\"
            ";
        }
        // line 14
        echo "         ";
        // line 15
        echo "         data-tooltip-show-delay=\"300\">
        <div class=\"ibo-dashlet-badge--icon-container\">
            ";
        // line 18
        echo "            <img class=\"ibo-dashlet-badge--icon\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetClassIconUrl", [], "method", false, false, false, 18), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <div class=\"ibo-dashlet-badge--actions\">
            <a class=\"ibo-dashlet-badge--action-list\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetHyperlink", [], "method", false, false, false, 21), "html", null, true);
        echo "\" data-role=\"ibo-dashlet-badge--action-list\">
                <span class=\"ibo-dashlet-badge--action-list-count\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCount", [], "method", false, false, false, 22), "html", null, true);
        echo "</span>
                <span class=\"ibo-dashlet-badge--action-list-label\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetClassLabel", [], "method", false, false, false, 23), "html", null, true);
        echo "</span>
            </a>
            ";
        // line 25
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCreateActionUrl", [], "method", false, false, false, 25))) {
            // line 26
            echo "                <a class=\"ibo-dashlet-badge--action-create\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCreateActionUrl", [], "method", false, false, false, 26), "html", null, true);
            echo "\">
                    <span class=\"ibo-dashlet-badge--action-create-icon fas fa-plus\"></span>
                    <span class=\"ibo-dashlet-badge--action-create-label\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCreateActionLabel", [], "method", false, false, false, 28), "html", null, true);
            echo "</span>
                </a>
            ";
        }
        // line 31
        echo "        </div>
    </div>
";
        $___internal_parse_7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_7_);
    }

    public function getTemplateName()
    {
        return "base/components/dashlet/dashlet-badge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 3,  112 => 31,  106 => 28,  100 => 26,  98 => 25,  93 => 23,  89 => 22,  85 => 21,  78 => 18,  74 => 15,  72 => 14,  66 => 12,  64 => 11,  53 => 8,  51 => 7,  49 => 6,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/dashlet/dashlet-badge.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\dashlet\\dashlet-badge.html.twig");
    }
}
