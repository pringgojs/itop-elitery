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

/* base/components/panel/layout.html.twig */
class __TwigTemplate_d1a16c9b0691634ac500e89e91e83b79 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iboPanelMetaData' => [$this, 'block_iboPanelMetaData'],
            'iboPanelHeaderOuter' => [$this, 'block_iboPanelHeaderOuter'],
            'iboPanelHeader' => [$this, 'block_iboPanelHeader'],
            'iboPanelHeaderLeft' => [$this, 'block_iboPanelHeaderLeft'],
            'iboPanelIcon' => [$this, 'block_iboPanelIcon'],
            'iboPanelTitles' => [$this, 'block_iboPanelTitles'],
            'iboPanelTitle' => [$this, 'block_iboPanelTitle'],
            'iboPanelSubTitle' => [$this, 'block_iboPanelSubTitle'],
            'iboPanelHeaderRight' => [$this, 'block_iboPanelHeaderRight'],
            'iboPanelToolbar' => [$this, 'block_iboPanelToolbar'],
            'iboPanelBodyOuter' => [$this, 'block_iboPanelBodyOuter'],
            'iboPanelBody' => [$this, 'block_iboPanelBody'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 3), "html", null, true);
        echo "\"
         class=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 4), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 4), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCSSColorClass", [], "method", false, false, false, 4), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasIcon", [], "method", false, false, false, 4)) {
            echo "ibo-has-icon";
        }
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsIconAsMedallion", [], "method", false, false, false, 4)) {
            echo "ibo-has-medallion-icon";
        }
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 4)) {
            echo "ibo-is-hidden";
        }
        echo " ibo-is-opened\"
            ";
        // line 5
        $this->displayBlock('iboPanelMetaData', $context, $blocks);
        // line 6
        echo "         data-role=\"ibo-panel\">
        ";
        // line 7
        $this->displayBlock('iboPanelHeaderOuter', $context, $blocks);
        // line 53
        echo "        ";
        $this->displayBlock('iboPanelBodyOuter', $context, $blocks);
        // line 62
        echo "    </div>";
    }

    // line 5
    public function block_iboPanelMetaData($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 7
    public function block_iboPanelHeaderOuter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <div class=\"ibo-panel--header\" data-role=\"ibo-panel--header\">
            ";
        // line 9
        $this->displayBlock('iboPanelHeader', $context, $blocks);
        // line 51
        echo "        </div>
        ";
    }

    // line 9
    public function block_iboPanelHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                <div class=\"ibo-panel--header-left\" data-role=\"ibo-panel--header-left\">
                    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "isCollapsible", [], "method", false, false, false, 11)) {
            // line 12
            echo "                        <div class=\"ibo-panel--collapsible-toggler\" data-role=\"ibo-panel--collapsible-toggler\">
                            <i class=\"fas fa-caret-right ibo-panel--collapsible-toggler--closed\"></i>
                            <i class=\"fas fa-caret-down ibo-panel--collapsible-toggler--opened\"></i>
                        </div>
                    ";
        }
        // line 17
        echo "                    ";
        $this->displayBlock('iboPanelHeaderLeft', $context, $blocks);
        // line 38
        echo "                </div>
                <div class=\"ibo-panel--header-right\" data-role=\"ibo-panel--header-right\">
                    ";
        // line 40
        $this->displayBlock('iboPanelHeaderRight', $context, $blocks);
        // line 49
        echo "                </div>
            ";
    }

    // line 17
    public function block_iboPanelHeaderLeft($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasIcon", [], "method", false, false, false, 18)) {
            // line 19
            echo "                            <div class=\"ibo-panel--icon\" data-role=\"ibo-panel--icon\">
                                ";
            // line 20
            $this->displayBlock('iboPanelIcon', $context, $blocks);
            // line 23
            echo "                            </div>
                        ";
        }
        // line 25
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasTitle", [], "method", false, false, false, 25) || twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasSubTitle", [], "method", false, false, false, 25))) {
            // line 26
            echo "                            <div class=\"ibo-panel--titles\" data-role=\"ibo-panel--titles\">
                                ";
            // line 27
            $this->displayBlock('iboPanelTitles', $context, $blocks);
            // line 35
            echo "                            </div>
                        ";
        }
        // line 37
        echo "                    ";
    }

    // line 20
    public function block_iboPanelIcon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                                    <div class=\"ibo-panel--icon-background ibo-panel--icon-background--must-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconCoverMethod", [], "method", false, false, false, 21), "html", null, true);
        echo "\" data-role=\"ibo-panel--icon-background\" style=\"background-image: url('";
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconUrl", [], "method", false, false, false, 21);
        echo "');\"></div>
                                ";
    }

    // line 27
    public function block_iboPanelTitles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasTitle", [], "method", false, false, false, 28)) {
            // line 29
            echo "                                        <div class=\"ibo-panel--title\" data-role=\"ibo-panel--title\">";
            $this->displayBlock('iboPanelTitle', $context, $blocks);
            echo "</div>
                                    ";
        }
        // line 31
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasSubTitle", [], "method", false, false, false, 31)) {
            // line 32
            echo "                                        <div class=\"ibo-panel--subtitle\" data-role=\"ibo-panel--subtitle\">";
            $this->displayBlock('iboPanelSubTitle', $context, $blocks);
            echo "</div>
                                    ";
        }
        // line 34
        echo "                                ";
    }

    // line 29
    public function block_iboPanelTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTitleBlock", [], "method", false, false, false, 29));
    }

    // line 32
    public function block_iboPanelSubTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubTitleBlock", [], "method", false, false, false, 32));
    }

    // line 40
    public function block_iboPanelHeaderRight($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                        <div class=\"ibo-panel--toolbar\">
                            ";
        // line 42
        $this->displayBlock('iboPanelToolbar', $context, $blocks);
        // line 47
        echo "                        </div>
                    ";
    }

    // line 42
    public function block_iboPanelToolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetToolbarBlocks", [], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["oToolbarBlock"]) {
            // line 44
            echo "                                    ";
            echo $this->env->getFunction('render_block')->getCallable()($context["oToolbarBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oToolbarBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                            ";
    }

    // line 53
    public function block_iboPanelBodyOuter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "        <div class=\"ibo-panel--body\" data-role=\"ibo-panel--body\">
            ";
        // line 55
        $this->displayBlock('iboPanelBody', $context, $blocks);
        // line 60
        echo "        </div>
        ";
    }

    // line 55
    public function block_iboPanelBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMainBlocks", [], "method", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["oMainBlock"]) {
            // line 57
            echo "                    ";
            echo $this->env->getFunction('render_block')->getCallable()($context["oMainBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oMainBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "            ";
    }

    public function getTemplateName()
    {
        return "base/components/panel/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 59,  282 => 57,  277 => 56,  273 => 55,  268 => 60,  266 => 55,  263 => 54,  259 => 53,  255 => 46,  246 => 44,  241 => 43,  237 => 42,  232 => 47,  230 => 42,  227 => 41,  223 => 40,  216 => 32,  209 => 29,  205 => 34,  199 => 32,  196 => 31,  190 => 29,  187 => 28,  183 => 27,  174 => 21,  170 => 20,  166 => 37,  162 => 35,  160 => 27,  157 => 26,  154 => 25,  150 => 23,  148 => 20,  145 => 19,  142 => 18,  138 => 17,  133 => 49,  131 => 40,  127 => 38,  124 => 17,  117 => 12,  115 => 11,  112 => 10,  108 => 9,  103 => 51,  101 => 9,  98 => 8,  94 => 7,  88 => 5,  84 => 62,  81 => 53,  79 => 7,  76 => 6,  74 => 5,  54 => 4,  49 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/panel/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\panel\\layout.html.twig");
    }
}
