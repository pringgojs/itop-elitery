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

/* base/components/panel/layout.js.twig */
class __TwigTemplate_1141b74185c8c90770dd085b44a88fe6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iboWidgetInstantiation' => [$this, 'block_iboWidgetInstantiation'],
            'iboMiscHandlers' => [$this, 'block_iboMiscHandlers'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->displayBlock('iboWidgetInstantiation', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('iboMiscHandlers', $context, $blocks);
    }

    // line 3
    public function block_iboWidgetInstantiation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    \$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 4), "html", null, true);
        echo "').panel({
        is_header_visible_on_scroll: ";
        // line 5
        echo twig_escape_filter($this->env, var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHeaderVisibleOnScroll", [], "any", false, false, false, 5)), "html", null, true);
        echo "
    });
";
    }

    // line 9
    public function block_iboMiscHandlers($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "isCollapsible", [], "method", false, false, false, 10)) {
            // line 11
            echo "        \$('#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 11), "html", null, true);
            echo "').find('[data-role=\"ibo-panel--collapsible-toggler\"]').on('click', function(){
            \$('#";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 12), "html", null, true);
            echo "').toggleClass('ibo-is-opened');
        });
    ";
        }
    }

    public function getTemplateName()
    {
        return "base/components/panel/layout.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 12,  71 => 11,  68 => 10,  64 => 9,  57 => 5,  52 => 4,  48 => 3,  44 => 9,  41 => 8,  39 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/panel/layout.js.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\panel\\layout.js.twig");
    }
}
