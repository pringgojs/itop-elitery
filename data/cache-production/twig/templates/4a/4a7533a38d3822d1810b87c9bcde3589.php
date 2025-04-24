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

/* base/components/datatable/layout.html.twig */
class __TwigTemplate_c96428a96b4abdda19dc3fdcabf4285f extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            echo $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2
        echo "
";
        // line 3
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOptions", [0 => "select_mode"], "method", false, false, false, 3))) {
            // line 4
            echo "    <input type=\"hidden\" name=\"selectionMode\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "selectionMode"], "method", false, false, false, 4), "html", null, true);
            echo "\">
    <input type=\"hidden\" name=\"selectionCount\" value=\"0\">
    <div data-target=\"ibo-datatable--selection\"></div>
    ";
            // line 7
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAjaxData", [0 => "extra_params"], "method", false, false, false, 7))) {
                // line 8
                echo "        <input type=\"hidden\" name=\"extra_params\" value=\"";
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAjaxData", [0 => "extra_params"], "method", false, false, false, 8)), "html", null, true);
                echo "\">
    ";
            }
            // line 10
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAjaxData", [0 => "filter"], "method", false, false, false, 10))) {
                // line 11
                echo "        <input type=\"hidden\" name=\"filter\" value=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAjaxData", [0 => "filter"], "method", false, false, false, 11);
                echo "\">
    ";
            }
        }
        // line 14
        echo "
<table id=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 15), "html", null, true);
        echo "\" width=\"100%\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 15), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 15), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 15)) {
            echo "ibo-is-hidden";
        }
        echo "\" data-role=\"ibo-datatable\" data-status=\"loading\">
    <thead>
    ";
        // line 17
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method", false, false, false, 17))) {
            // line 18
            echo "        <th></th>
    ";
        }
        // line 20
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDisplayColumns", [], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["aColumn"]) {
            // line 21
            echo "        <th class=\"ibo-datatable-header\" ";
            if ( !twig_test_empty((($__internal_compile_0 = $context["aColumn"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["description"] ?? null) : null))) {
                echo "title=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["aColumn"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["description"] ?? null) : null), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["aColumn"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["attribute_label"] ?? null) : null), "html", null, true);
            echo " </th>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aColumn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRowActions", [], "method", false, false, false, 23)) {
            // line 24
            echo "        <th class=\"ibo-datatable-header\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Column:RowActions:Description"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Column:RowActions:Label"), "html", null, true);
            echo " </th>
    ";
        }
        // line 26
        echo "    </thead>
</table>

";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRowActions", [], "method", false, false, false, 29)) {
            // line 30
            echo "    ";
            echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRowActionsTemplate", [], "method", false, false, false, 30));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "base/components/datatable/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 30,  134 => 29,  129 => 26,  121 => 24,  118 => 23,  103 => 21,  98 => 20,  94 => 18,  92 => 17,  79 => 15,  76 => 14,  69 => 11,  66 => 10,  60 => 8,  58 => 7,  51 => 4,  49 => 3,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\datatable\\layout.html.twig");
    }
}
