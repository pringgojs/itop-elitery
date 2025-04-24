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

/* base/layouts/navigation-menu/layout.js.twig */
class __TwigTemplate_836bcc1bcfecf4c953aaabc7ba31383e extends Template
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
        echo "\$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        echo "').navigation_menu({
    display_counts: ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetShowMenusCount", [], "method", false, false, false, 2)) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
    org_id: '";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOrgId", [], "method", false, false, false, 3), "html", null, true);
        echo "'
});

\$('#";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 6), "html", null, true);
        echo "').navigation_menu('refreshCounts', null);

";
        // line 8
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSiloSelection", [], "method", false, false, false, 8), "js", [], "any", false, false, false, 8);
    }

    public function getTemplateName()
    {
        return "base/layouts/navigation-menu/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  56 => 6,  50 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/navigation-menu/layout.js.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\layouts\\navigation-menu\\layout.js.twig");
    }
}
