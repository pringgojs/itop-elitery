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

/* base/components/pill/layout.html.twig */
class __TwigTemplate_d4f2cec2db8f424f11b6e920940e9caa extends Template
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
        $context["sTagName"] = ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasUrl", [], "method", false, false, false, 3)) ? ("a") : ("span"));
        // line 4
        echo "<";
        echo twig_escape_filter($this->env, ($context["sTagName"] ?? null), "html", null, true);
        echo " id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 4), "html", null, true);
        echo "\"
    ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasUrl", [], "method", false, false, false, 5)) {
            echo "href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetUrl", [], "method", false, false, false, 5);
            echo "\"";
        }
        // line 6
        echo "    class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 6), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 6), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCSSColorClass", [], "method", false, false, false, 6), "html", null, true);
        echo "\"
    data-role=\"ibo-pill\"
    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasTooltip", [], "method", false, false, false, 8)) {
            echo "data-tooltip-content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTooltip", [], "method", false, false, false, 8), "html", null, true);
            echo "\" data-tooltip-show-delay=\"500\"";
        }
        echo ">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 10
            echo "        ";
            echo $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</";
        echo twig_escape_filter($this->env, ($context["sTagName"] ?? null), "html", null, true);
        echo ">";
    }

    public function getTemplateName()
    {
        return "base/components/pill/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 12,  74 => 10,  70 => 9,  62 => 8,  52 => 6,  46 => 5,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/pill/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\pill\\layout.html.twig");
    }
}
