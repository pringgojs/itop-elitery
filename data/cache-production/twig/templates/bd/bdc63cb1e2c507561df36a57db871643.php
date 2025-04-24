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

/* base/components/alert/layout.html.twig */
class __TwigTemplate_14e58d7e6ba8e1d7d7e74a1159ff8cf8 extends Template
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
\t class=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        echo " ibo-is-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetColor", [], "method", false, false, false, 2), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsOpenedByDefault", [], "method", false, false, false, 2)) {
            echo " ibo-is-opened";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 2)) {
            echo " ibo-is-hidden";
        }
        echo "\"
     data-role=\"ibo-alert\">
\t";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsCollapsible", [], "method", false, false, false, 4)) {
            // line 5
            echo "\t\t<div class=\"ibo-alert--action-button ibo-alert--maximize-button\" data-role=\"ibo-alert--collapse-toggler\">
\t\t\t<i class=\"fas fa-caret-down\"></i>
\t\t</div>
\t\t<div class=\"ibo-alert--action-button ibo-alert--minimize-button\" data-role=\"ibo-alert--collapse-toggler\">
\t\t\t<i class=\"fas fa-caret-up\"></i>
\t\t</div>
\t";
        }
        // line 12
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsClosable", [], "method", false, false, false, 12)) {
            // line 13
            echo "\t\t<div class=\"ibo-alert--action-button ibo-alert--close-button\" data-role=\"ibo-alert--close-button\">
\t\t\t<i class=\"fas fa-times\"></i>
\t\t</div>
\t";
        }
        // line 17
        echo "\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTitle", [], "method", false, false, false, 17))) {
            // line 18
            echo "\t\t<div class=\"ibo-alert--title\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsCollapsible", [], "method", false, false, false, 18)) {
                echo "data-role=\"ibo-alert--collapse-toggler\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTitle", [], "method", false, false, false, 18), "html", null, true);
            echo "</div>
\t";
        }
        // line 20
        echo "\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 20))) {
            // line 21
            echo "\t\t<div class=\"ibo-alert--body\">
\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
                // line 23
                echo "\t\t\t\t";
                echo $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t</div>
\t";
        }
        // line 27
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "base/components/alert/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 27,  109 => 25,  100 => 23,  96 => 22,  93 => 21,  90 => 20,  80 => 18,  77 => 17,  71 => 13,  68 => 12,  59 => 5,  57 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/alert/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\alert\\layout.html.twig");
    }
}
