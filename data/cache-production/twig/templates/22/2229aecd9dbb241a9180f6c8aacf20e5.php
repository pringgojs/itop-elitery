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

/* base/components/button/layout.js.twig */
class __TwigTemplate_ce3c7ffef1c2137bd5b3af374dd89b22 extends Template
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
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnClickJsCode", [], "method", false, false, false, 1)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetJsCode", [], "method", false, false, false, 1)))) {
            // line 2
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnClickJsCode", [], "method", false, false, false, 2))) {
                // line 3
                echo "\$('#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 3), "html", null, true);
                echo "').on('click', function () {
    ";
                // line 4
                echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnClickJsCode", [], "method", false, false, false, 4);
                echo "
});
";
            }
            // line 7
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetJsCode", [], "method", false, false, false, 7))) {
                // line 8
                echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetJsCode", [], "method", false, false, false, 8);
                echo "
";
            }
        }
    }

    public function getTemplateName()
    {
        return "base/components/button/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  52 => 7,  46 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/button/layout.js.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\button\\layout.js.twig");
    }
}
