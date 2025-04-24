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

/* base/layouts/navigation-menu/menu-group.html.twig */
class __TwigTemplate_4a2bb036795374596e1d01052fa2dd25 extends Template
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
        echo "<a class=\"ibo-navigation-menu--menu-group\" data-role=\"ibo-navigation-menu--menu-group\" data-menu-group-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aMenuGroup"] ?? null), "sId", [], "any", false, false, false, 1), "html", null, true);
        echo "\" href=\"#\">
\t<span class=\"ibo-navigation-menu--menu-group-icon fa-fw ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aMenuGroup"] ?? null), "sIconCssClasses", [], "any", false, false, false, 2), "html", null, true);
        echo "\" data-tooltip-content=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aMenuGroup"] ?? null), "sTitle", [], "any", false, false, false, 2), "html", null, true);
        echo "\" data-tooltip-placement=\"right\" data-tooltip-distance-offset=\"25\">";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["aMenuGroup"] ?? null), "sIconCssClasses", [], "any", false, false, false, 2))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aMenuGroup"] ?? null), "sInitials", [], "any", false, false, false, 2), "html", null, true);
        }
        echo "</span>
\t<span class=\"ibo-navigation-menu--menu-group-title\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aMenuGroup"] ?? null), "sTitle", [], "any", false, false, false, 3), "html", null, true);
        echo "</span>
</a>";
    }

    public function getTemplateName()
    {
        return "base/layouts/navigation-menu/menu-group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/navigation-menu/menu-group.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\layouts\\navigation-menu\\menu-group.html.twig");
    }
}
