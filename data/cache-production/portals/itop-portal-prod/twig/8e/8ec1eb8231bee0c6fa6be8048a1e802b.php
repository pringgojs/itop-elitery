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

/* itop-portal-base/portal/templates/bricks/tile.html.twig */
class __TwigTemplate_de6affc4e14b37856bfe6d5109f9f77b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pTileWrapper' => [$this, 'block_pTileWrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
<div class=\"col-xs-12 col-sm-";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["brick"] ?? null), "GetWidth", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
\t";
        // line 5
        $this->displayBlock('pTileWrapper', $context, $blocks);
        // line 22
        echo "</div>";
    }

    // line 5
    public function block_pTileWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t\t<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 6), "generate", [0 => twig_get_attribute($this->env, $this->source, ($context["brick"] ?? null), "GetRouteName", [], "any", false, false, false, 6), 1 => ["sBrickId" => twig_get_attribute($this->env, $this->source, ($context["brick"] ?? null), "GetId", [], "any", false, false, false, 6)]], "method", false, false, false, 6), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true, false, 6), twig_get_attribute($this->env, $this->source, ($context["brick"] ?? null), "GetRouteName", [], "any", false, false, false, 6), [], "array", false, true, false, 6), "hash", [], "array", true, true, false, 6)) {
            echo "#";
            echo twig_escape_filter($this->env, (($__internal_compile_0 = (($__internal_compile_1 = (($__internal_compile_2 = ($context["app"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["combodo.portal.instance.routes"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, ($context["brick"] ?? null), "GetRouteName", [], "any", false, false, false, 6)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["hash"] ?? null) : null), "html", null, true);
        }
        echo "\"
\t\t\t";
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true, false, 7), twig_get_attribute($this->env, $this->source, ($context["brick"] ?? null), "GetRouteName", [], "any", false, false, false, 7), [], "array", false, true, false, 7), "navigation_menu_attr", [], "array", true, true, false, 7)) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_3 = (($__internal_compile_4 = (($__internal_compile_5 = ($context["app"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["combodo.portal.instance.routes"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, ($context["brick"] ?? null), "GetRouteName", [], "any", false, false, false, 7)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["navigation_menu_attr"] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 8
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["brick"] ?? null), "GetModal", [], "any", false, false, false, 8)) {
            echo "data-toggle=\"modal\" data-target=\"#modal-for-all\"";
        }
        // line 9
        echo "\t\t\t class=\"tile";
        echo "\" id=\"brick-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["brick"] ?? null), "GetId", [], "any", false, false, false, 9), "html", null, true);
        echo "\" data-brick-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["brick"] ?? null), "GetId", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
\t\t<div class=\"tile_decoration\">
\t\t\t<span class=\"icon ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["brick"] ?? null), "GetDecorationClassHome", [], "any", false, false, false, 11), "html", null, true);
        echo "\"></span>
\t\t\t
\t\t</div>
\t\t\t<div class=\"tile_body\">
\t\t\t\t<div class=\"tile_title\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["brick"] ?? null), "GetTitleHome", [], "any", false, false, false, 15)), "html", null, true);
        echo "</div>
\t\t\t\t";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["brick"] ?? null), "HasDescription", [], "any", false, false, false, 16)) {
            // line 17
            echo "\t\t\t\t\t<div class=\"tile_description\">";
            echo $this->env->getFilter('dict_s')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["brick"] ?? null), "GetDescription", [], "any", false, false, false, 17));
            echo "</div>
\t\t\t\t";
        }
        // line 19
        echo "\t\t\t</div>
\t\t</a>
\t";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/bricks/tile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 19,  106 => 17,  104 => 16,  100 => 15,  93 => 11,  84 => 9,  79 => 8,  64 => 7,  55 => 6,  51 => 5,  47 => 22,  45 => 5,  41 => 4,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/bricks/tile.html.twig", "D:\\laragon-www\\itop-3.1\\env-production\\itop-portal-base\\portal\\templates\\bricks\\tile.html.twig");
    }
}
