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

/* base/components/popover-menu/layout.js.twig */
class __TwigTemplate_372c9e5bc2d8da9342aed68f27af1286 extends Template
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
        echo "').popover_menu({
    toggler: ";
        // line 2
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTogglerJSSelector", [], "method", false, false, false, 2));
        echo ",
    container: ";
        // line 3
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetContainer", [], "method", false, false, false, 3));
        echo ",
    position: {
        target: ";
        // line 5
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTargetForPositionJSSelector", [], "method", false, false, false, 5));
        echo ",
        vertical: ";
        // line 6
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetVerticalPosition", [], "method", false, false, false, 6));
        echo ",
        horizontal: ";
        // line 7
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetHorizontalPosition", [], "method", false, false, false, 7));
        echo ",
    },
    add_visual_hint_to_toggler: ";
        // line 9
        echo twig_escape_filter($this->env, var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasVisualHintToAddToToggler", [], "method", false, false, false, 9)), "html", null, true);
        echo "
});";
    }

    public function getTemplateName()
    {
        return "base/components/popover-menu/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  59 => 7,  55 => 6,  51 => 5,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/popover-menu/layout.js.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\popover-menu\\layout.js.twig");
    }
}
