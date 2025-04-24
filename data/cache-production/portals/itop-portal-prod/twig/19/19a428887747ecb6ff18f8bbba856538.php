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

/* itop-portal-base/portal/templates/bricks/layout.html.twig */
class __TwigTemplate_a4f96275cfca319d84045cfafb73dd7a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pPageTitle' => [$this, 'block_pPageTitle'],
            'pPageBodyClass' => [$this, 'block_pPageBodyClass'],
            'pMainHeader' => [$this, 'block_pMainHeader'],
            'pMainHeaderTitle' => [$this, 'block_pMainHeaderTitle'],
            'pMainHeaderSubtitle' => [$this, 'block_pMainHeaderSubtitle'],
            'pMainHeaderActions' => [$this, 'block_pMainHeaderActions'],
            'pMainContent' => [$this, 'block_pMainContent'],
            'pMainContentHolder' => [$this, 'block_pMainContentHolder'],
            'pPageLiveScriptHelpers' => [$this, 'block_pPageLiveScriptHelpers'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["app"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 3), "templates", [], "any", false, false, false, 3), "layout", [], "any", false, false, false, 3), "itop-portal-base/portal/templates/bricks/layout.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pPageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t";
        // line 7
        echo "\t";
        if (((array_key_exists("oBrick", $context) &&  !(null === ($context["oBrick"] ?? null))) && (twig_get_attribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetTitle", [], "method", false, false, false, 7) != ""))) {
            // line 8
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetTitle", [], "method", false, false, false, 8)), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_constant("ITOP_APPLICATION_SHORT"), "html", null, true);
            echo "
\t";
        } else {
            // line 10
            echo "\t\t";
            $this->displayParentBlock("pPageTitle", $context, $blocks);
            echo "
\t";
        }
    }

    // line 14
    public function block_pPageBodyClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("pPageBodyClass", $context, $blocks);
        echo " ";
        if ((array_key_exists("oBrick", $context) &&  !(null === ($context["oBrick"] ?? null)))) {
            echo "page_brick_of_id_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetId", [], "method", false, false, false, 14), "html", null, true);
        }
    }

    // line 16
    public function block_pMainHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "\t<div class=\"col-xs-12\">
\t\t<div id=\"main-header-title\">
\t\t\t<h2>
\t\t\t\t";
        // line 20
        $this->displayBlock('pMainHeaderTitle', $context, $blocks);
        // line 21
        echo "\t\t\t\t";
        $this->displayBlock('pMainHeaderSubtitle', $context, $blocks);
        // line 26
        echo "\t\t\t</h2>
\t\t</div>
\t\t<div id=\"main-header-actions\">
\t\t\t";
        // line 29
        $this->displayBlock('pMainHeaderActions', $context, $blocks);
        // line 31
        echo "\t\t</div>
\t</div>
";
    }

    // line 20
    public function block_pMainHeaderTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 21
    public function block_pMainHeaderSubtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "\t\t\t\t\t";
        if ((array_key_exists("sBrickSubtitle", $context) &&  !(null === ($context["sBrickSubtitle"] ?? null)))) {
            // line 23
            echo "\t\t\t\t\t\t<small class=\"subtitle\">";
            echo twig_escape_filter($this->env, ($context["sBrickSubtitle"] ?? null), "html", null, true);
            echo "</small>
\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t";
    }

    // line 29
    public function block_pMainHeaderActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "\t\t\t";
    }

    // line 35
    public function block_pMainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "<div class=\"col-xs-12\">
\t";
        // line 37
        $this->displayBlock('pMainContentHolder', $context, $blocks);
        // line 39
        echo "</div>
";
    }

    // line 37
    public function block_pMainContentHolder($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "\t";
    }

    // line 42
    public function block_pPageLiveScriptHelpers($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "    ";
        $this->displayParentBlock("pPageLiveScriptHelpers", $context, $blocks);
        echo "

\t// Helpers used for brick's opening target
\tvar SetActionUrl = function(oElem, sUrl)
\t{
\t\toElem.attr('href', sUrl);
\t};
\tvar SetActionOpeningTarget = function(oElem, sMode)
\t{
\t\tif(sMode === '";
        // line 52
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\PortalBrick::ENUM_OPENING_TARGET_MODAL"), "html", null, true);
        echo "')
\t\t{
\t\t\toElem.attr('data-toggle', 'modal').attr('data-target', '#modal-for-all');
\t\t}
\t\telse if(sMode === '";
        // line 56
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\PortalBrick::ENUM_OPENING_TARGET_SELF"), "html", null, true);
        echo "')
\t\t{
\t\t\toElem.attr('target', '_self');
\t\t}
\t\telse if(sMode === '";
        // line 60
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\PortalBrick::ENUM_OPENING_TARGET_NEW"), "html", null, true);
        echo "')
\t\t{
\t\t\toElem.attr('target', '_blank');
\t\t}
\t};
";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/bricks/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 60,  194 => 56,  187 => 52,  174 => 43,  170 => 42,  166 => 38,  162 => 37,  157 => 39,  155 => 37,  152 => 36,  148 => 35,  144 => 30,  140 => 29,  136 => 25,  130 => 23,  127 => 22,  123 => 21,  117 => 20,  111 => 31,  109 => 29,  104 => 26,  101 => 21,  99 => 20,  94 => 17,  90 => 16,  78 => 14,  70 => 10,  62 => 8,  59 => 7,  57 => 6,  53 => 5,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/bricks/layout.html.twig", "D:\\laragon-www\\itop-3.1\\env-production\\itop-portal-base\\portal\\templates\\bricks\\layout.html.twig");
    }
}
