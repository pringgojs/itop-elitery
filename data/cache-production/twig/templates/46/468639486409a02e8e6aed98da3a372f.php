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

/* base/layouts/tab-container/layout.html.twig */
class __TwigTemplate_0136214c8a2675c05a733902edb5fbfb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iboTabContainer' => [$this, 'block_iboTabContainer'],
            'iboTabContainerTabsList' => [$this, 'block_iboTabContainerTabsList'],
            'iboTabContainerTab' => [$this, 'block_iboTabContainerTab'],
            'iboTabContainerTabsContainers' => [$this, 'block_iboTabContainerTabsContainers'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 3), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 3), "html", null, true);
        echo " ibo-is-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLayout", [], "method", false, false, false, 3), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIsScrollable", [], "method", false, false, false, 3)) {
            echo " ibo-is-scrollable";
        }
        echo "\"
     data-role=\"ibo-tab-container\" data-status=\"loading\">
    ";
        // line 5
        $this->displayBlock('iboTabContainer', $context, $blocks);
        // line 99
        echo "</div>

";
    }

    // line 5
    public function block_iboTabContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        <ul class=\"ibo-tab-container--tabs-list\" data-role=\"ibo-tab-container--tabs-list\">
            ";
        // line 7
        if ( !twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "isPrintable", [], "any", false, false, false, 7)) {
            // line 8
            echo "                ";
            $this->displayBlock('iboTabContainerTabsList', $context, $blocks);
            // line 63
            echo "            ";
        }
        // line 64
        echo "        </ul>

        ";
        // line 66
        $this->displayBlock('iboTabContainerTabsContainers', $context, $blocks);
        // line 97
        echo "
    ";
    }

    // line 8
    public function block_iboTabContainerTabsList($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 9));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["oTab"]) {
            // line 10
            echo "                        ";
            $this->displayBlock('iboTabContainerTab', $context, $blocks);
            // line 38
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oTab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    <li class=\"ibo-tab-container--extra-tabs-container ibo-tab-container--tab-header ibo-is-hidden\" data-role=\"ibo-tab-container--extra-tabs-container\">
                        <a href=\"#\" class=\"ibo-tab-container--extra-tabs-list-toggler\" data-role=\"ibo-tab-container--extra-tabs-list-toggler\"
                           aria-label=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:TabContainer:ExtraTabsListToggler:Label"), "html", null, true);
        echo "\"
                           data-tooltip-content=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:TabContainer:ExtraTabsListToggler:Label"), "html", null, true);
        echo "\"
                        >
                            <span class=\"fas fa-ellipsis-v\"></span>
                        </a>
                        <div class=\"ibo-tab-container--extra-tabs-list ibo-is-hidden\" data-role=\"ibo-tab-container--extra-tabs-list\">
                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["oTab"]) {
            // line 48
            echo "                                <a href=\"#tab_";
            echo twig_escape_filter($this->env, $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, $context["oTab"], "GetId", [], "method", false, false, false, 48), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
            echo "\"
                                   class=\"ibo-tab-container--extra-tab-toggler\" data-role=\"ibo-tab-container--extra-tab-toggler\"
                                    ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, $context["oTab"], "HasDescription", [], "method", false, false, false, 50) == true)) {
                // line 51
                echo "                                        ";
                // line 52
                echo "                                        data-tooltip-content=\"";
                echo twig_escape_filter($this->env, "<div class=\"ibo-tab-container--extra-tab-toggler--tooltip-title\">");
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oTab"], "GetTitle", [], "method", false, false, false, 52), "html", null, true);
                echo twig_escape_filter($this->env, "</div><div class=\"ibo-tab-container--extra-tab-toggler--tooltip-description\">");
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oTab"], "GetDescription", [], "method", false, false, false, 52), "html", null, true);
                echo twig_escape_filter($this->env, "</div>");
                echo "\"
                                        data-tooltip-html-enabled=\"true\"
                                        ";
                // line 55
                echo "                                        data-tooltip-show-delay=\"300\"
                                    ";
            }
            // line 56
            echo ">
                                    <span>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oTab"], "GetTitle", [], "method", false, false, false, 57), "html", null, true);
            echo "</span>
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oTab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                        </div>
                    </li>
                ";
    }

    // line 10
    public function block_iboTabContainerTab($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oTab"] ?? null), "GetType", [], "method", false, false, false, 11) == twig_constant("TabManager::ENUM_TAB_TYPE_AJAX"))) {
            // line 12
            echo "                                <li class=\"ibo-tab-container--tab-header\" data-role=\"ibo-tab-container--tab-header\"
                                    data-tab-id=\"tab_";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oTab"] ?? null), "GetId", [], "method", false, false, false, 13), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
            echo "\"
                                    data-tab-type=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTab"] ?? null), "GetType", [], "method", false, false, false, 14), "html", null, true);
            echo "\"
                                    data-cache=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTab"] ?? null), "GetCache", [], "method", false, false, false, 15), "html", null, true);
            echo "\"
                                    data-placeholder=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTab"] ?? null), "GetPlaceholderAbsPath", [], "method", false, false, false, 16), "html", null, true);
            echo "\">
                                    <a data-target=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTab"] ?? null), "GetUrl", [], "method", false, false, false, 17), "html", null, true);
            echo "\" class=\"ibo-tab-container--tab-toggler\"
                                       data-role=\"ibo-tab-container--tab-toggler\">
                                        <span class=\"ibo-tab-container--tab-toggler-label\" data-role=\"ibo-tab-container--tab-toggler-label\" title=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTab"] ?? null), "GetTitle", [], "method", false, false, false, 19), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTab"] ?? null), "GetTitle", [], "method", false, false, false, 19), "html", null, true);
            echo "</span>
                                    </a>
                                </li>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 22
($context["oTab"] ?? null), "GetType", [], "method", false, false, false, 22) == twig_constant("TabManager::ENUM_TAB_TYPE_HTML"))) {
            // line 23
            echo "                                <li class=\"ibo-tab-container--tab-header\" data-role=\"ibo-tab-container--tab-header\"
                                    data-tab-id=\"tab_";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oTab"] ?? null), "GetId", [], "method", false, false, false, 24), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
            echo "\"
                                    data-tab-type=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTab"] ?? null), "GetType", [], "method", false, false, false, 25), "html", null, true);
            echo "\"
                                    ";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, ($context["oTab"] ?? null), "HasDescription", [], "method", false, false, false, 26) == true)) {
                // line 27
                echo "                                        data-tooltip-content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTab"] ?? null), "GetDescription", [], "method", false, false, false, 27), "html", null, true);
                echo "\"
                                        ";
                // line 29
                echo "                                        data-tooltip-show-delay=\"500\"
                                    ";
            }
            // line 30
            echo ">
                                    <a href=\"#tab_";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oTab"] ?? null), "GetId", [], "method", false, false, false, 31), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
            echo "\"
                                       class=\"ibo-tab-container--tab-toggler\" data-role=\"ibo-tab-container--tab-toggler\">
                                        <span class=\"ibo-tab-container--tab-toggler-label\" data-role=\"ibo-tab-container--tab-toggler-label\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oTab"] ?? null), "GetTitle", [], "method", false, false, false, 33), "html", null, true);
            echo "</span>
                                    </a>
                                </li>
                            ";
        }
        // line 37
        echo "                        ";
    }

    // line 66
    public function block_iboTabContainerTabsContainers($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "isPrintable", [], "any", false, false, false, 67)) {
            // line 68
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 68), "html", null, true);
            echo "--tab-container-list\" class=\"ibo-tab-container--tab-container-list";
            if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIsScrollable", [], "method", false, false, false, 68)) {
                echo " ibo-is-scrollable";
            }
            echo "\" data-role=\"ibo-tab-container--tab-container-list\">
                    ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 69));
            foreach ($context['_seq'] as $context["_key"] => $context["oTab"]) {
                // line 70
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["oTab"], "GetType", [], "method", false, false, false, 70) == twig_constant("TabManager::ENUM_TAB_TYPE_HTML"))) {
                    // line 71
                    echo "                            <div id=\"tab_";
                    echo twig_escape_filter($this->env, $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, $context["oTab"], "GetId", [], "method", false, false, false, 71), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
                    echo "\"
                                 class=\"ibo-tab-container--tab-container\">
                                <div class=\"ibo-tab-container--tab-container--label\"><span>";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oTab"], "GetTitle", [], "method", false, false, false, 73), "html", null, true);
                    echo "</span></div>
                                ";
                    // line 74
                    echo $this->env->getFunction('render_block')->getCallable()($context["oTab"], ["aPage" => ($context["aPage"] ?? null)]);
                    echo "
                            </div>
                        ";
                }
                // line 77
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oTab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                </div>
            ";
        } else {
            // line 80
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 80), "html", null, true);
            echo "--tab-container-list\" class=\"ibo-tab-container--tab-container-list\" data-role=\"ibo-tab-container--tab-container-list\">
                ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 81));
            foreach ($context['_seq'] as $context["_key"] => $context["oTab"]) {
                // line 82
                echo "                    <div id=\"tab_";
                echo twig_escape_filter($this->env, $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, $context["oTab"], "GetId", [], "method", false, false, false, 82), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
                echo "\"
                         class=\"ibo-tab-container--tab-container\">
                        <div class=\"ibo-title--text title\">
                            ";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oTab"], "GetTitle", [], "method", false, false, false, 85), "html", null, true);
                echo "
                        </div>
                        ";
                // line 87
                if ((twig_get_attribute($this->env, $this->source, $context["oTab"], "GetType", [], "method", false, false, false, 87) == twig_constant("TabManager::ENUM_TAB_TYPE_HTML"))) {
                    // line 88
                    echo "                            ";
                    echo $this->env->getFunction('render_block')->getCallable()($context["oTab"], ["aPage" => ($context["aPage"] ?? null)]);
                    echo "
                        ";
                } else {
                    // line 90
                    echo "                            <div class=\"printable-tab-content\"></div>
                        ";
                }
                // line 92
                echo "                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oTab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                </div>
            ";
        }
        // line 96
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base/layouts/tab-container/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 96,  362 => 94,  355 => 92,  351 => 90,  345 => 88,  343 => 87,  338 => 85,  331 => 82,  327 => 81,  322 => 80,  318 => 78,  312 => 77,  306 => 74,  302 => 73,  296 => 71,  293 => 70,  289 => 69,  280 => 68,  277 => 67,  273 => 66,  269 => 37,  262 => 33,  257 => 31,  254 => 30,  250 => 29,  245 => 27,  243 => 26,  239 => 25,  235 => 24,  232 => 23,  230 => 22,  222 => 19,  217 => 17,  213 => 16,  209 => 15,  205 => 14,  201 => 13,  198 => 12,  195 => 11,  191 => 10,  185 => 60,  176 => 57,  173 => 56,  169 => 55,  159 => 52,  157 => 51,  155 => 50,  149 => 48,  145 => 47,  137 => 42,  133 => 41,  129 => 39,  115 => 38,  112 => 10,  94 => 9,  90 => 8,  85 => 97,  83 => 66,  79 => 64,  76 => 63,  73 => 8,  71 => 7,  68 => 6,  64 => 5,  58 => 99,  56 => 5,  41 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/tab-container/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\layouts\\tab-container\\layout.html.twig");
    }
}
