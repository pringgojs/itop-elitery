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

/* base/components/breadcrumbs/layout.html.twig */
class __TwigTemplate_c4298cc7bd0d422e6633f07b7d39ba62 extends Template
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
        echo "\" data-role=\"ibo-breadcrumbs\">
    <span class=\"ibo-breadcrumbs--previous-items-container ibo-is-hidden\" data-role=\"ibo-breadcrumbs--previous-items-container\">
        <button class=\"ibo-breadcrumbs--previous-items-list-toggler ibo-button ibo-is-alternative ibo-is-neutral\" data-role=\"ibo-breadcrumbs--previous-items-list-toggler\"
           aria-label=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Component:Breadcrumbs:PreviousItemsListToggler:Label"), "html", null, true);
        echo "\"
           data-tooltip-content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Component:Breadcrumbs:PreviousItemsListToggler:Label"), "html", null, true);
        echo "\"
        >
            <span class=\"fas fa-ellipsis-h\"></span>
        </button>
        <div class=\"ibo-breadcrumbs--previous-items-list ibo-is-hidden\" data-role=\"ibo-breadcrumbs--previous-items-list\"></div>
    </span>
</div>";
    }

    public function getTemplateName()
    {
        return "base/components/breadcrumbs/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/breadcrumbs/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\breadcrumbs\\layout.html.twig");
    }
}
