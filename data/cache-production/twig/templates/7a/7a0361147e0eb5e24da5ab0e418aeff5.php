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

/* base/layouts/top-bar/layout.html.twig */
class __TwigTemplate_ca3ff052f4ef452ea5ade2184bb150f4 extends Template
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
        echo "<nav id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        echo "\" data-role=\"ibo-top-bar\">
\t<div class=\"ibo-top-bar--quick-actions\" data-role=\"ibo-top-bar--quick-actions\">
\t\t";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasQuickCreate", [], "method", false, false, false, 3)) {
            // line 4
            echo "\t\t\t";
            echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetQuickCreate", [], "method", false, false, false, 4), ["aPage" => ($context["aPage"] ?? null)]);
            echo "
\t\t";
        }
        // line 6
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasGlobalSearch", [], "method", false, false, false, 6)) {
            // line 7
            echo "\t\t\t";
            echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetGlobalSearch", [], "method", false, false, false, 7), ["aPage" => ($context["aPage"] ?? null)]);
            echo "
\t\t";
        }
        // line 9
        echo "\t</div>
\t";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasBreadcrumbs", [], "method", false, false, false, 10)) {
            // line 11
            echo "\t\t";
            echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBreadcrumbs", [], "method", false, false, false, 11), ["aPage" => ($context["aPage"] ?? null)]);
            echo "
\t";
        }
        // line 13
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasToolBar", [], "method", false, false, false, 13)) {
            // line 14
            echo "\t\t<div class=\"ibo-top-bar--toolbar\">
\t\t\t";
            // line 15
            echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetToolBar", [], "method", false, false, false, 15), ["aPage" => ($context["aPage"] ?? null)]);
            echo "
\t\t</div>
\t";
        }
        // line 18
        echo "</nav>";
    }

    public function getTemplateName()
    {
        return "base/layouts/top-bar/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 18,  81 => 15,  78 => 14,  75 => 13,  69 => 11,  67 => 10,  64 => 9,  58 => 7,  55 => 6,  49 => 4,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/top-bar/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\layouts\\top-bar\\layout.html.twig");
    }
}
