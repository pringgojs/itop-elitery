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

/* pages/backoffice/extension-blocks/banner.html.twig */
class __TwigTemplate_c00f99650fe8b2fd54edb15cdca96318 extends Template
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
        echo "\t<div id=\"ibo-page-banner\" data-role=\"ibo-page-banner\">
\t\t";
        // line 5
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["aLayouts"] ?? null), "sBanner", [], "any", false, false, false, 5))) {
            // line 6
            echo "\t\t\t";
            echo twig_get_attribute($this->env, $this->source, ($context["aLayouts"] ?? null), "sBanner", [], "any", false, false, false, 6);
            echo "
\t\t";
        }
        // line 8
        echo "\t\t";
        echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["aLayouts"] ?? null), "oBanner", [], "any", false, false, false, 8), ["aPage" => ($context["aPage"] ?? null)]);
        echo "
\t</div>
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_0_);
    }

    public function getTemplateName()
    {
        return "pages/backoffice/extension-blocks/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 3,  50 => 8,  44 => 6,  42 => 5,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/backoffice/extension-blocks/banner.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\pages\\backoffice\\extension-blocks\\banner.html.twig");
    }
}
