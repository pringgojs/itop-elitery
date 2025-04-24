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

/* base/layouts/dashboard/layout.html.twig */
class __TwigTemplate_99d960b92d9f2d57233c493d929d3a00 extends Template
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
        // line 4
        ob_start(function () { return ''; });
        // line 5
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasTitle", [], "method", false, false, false, 5) || twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasToolbar", [], "method", false, false, false, 5))) {
            // line 6
            echo "        <div class=\"ibo-dashboard--top-bar\" data-role=\"ibo-dashboard--top-bar\">
            <div class=\"ibo-dashboard--top-bar-title\" data-role=\"ibo-dashboard--top-bar-title\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTitle", [], "method", false, false, false, 7), "html", null, true);
            echo "</div>
            ";
            // line 8
            echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetToolbar", [], "method", false, false, false, 8), ["aPage" => ($context["aPage"] ?? null)]);
            echo "
        </div>
    ";
        }
        // line 11
        echo "    <div class=\"ibo-dashboard--grid\" data-role=\"ibo-dashboard--grid\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDashboardRows", [], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 13
            echo "            ";
            echo $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </div>
";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo twig_spaceless($___internal_parse_3_);
    }

    public function getTemplateName()
    {
        return "base/layouts/dashboard/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 4,  71 => 15,  62 => 13,  58 => 12,  55 => 11,  49 => 8,  45 => 7,  42 => 6,  39 => 5,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/dashboard/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\layouts\\dashboard\\layout.html.twig");
    }
}
