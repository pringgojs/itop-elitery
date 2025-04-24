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

/* base/layouts/navigation-menu/layout.html.twig */
class __TwigTemplate_dd4b8178a8cba2e5450f3d53d85d47c3 extends Template
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
        echo "<nav id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsExpanded", [], "method", false, false, false, 1) == true)) {
            echo "ibo-is-expanded";
        }
        echo "\" data-role=\"ibo-navigation-menu\">
\t<div class=\"ibo-navigation-menu--body\">
\t\t<div class=\"ibo-navigation-menu--top-part\">
\t\t\t<a class=\"ibo-navigation-menu--square-company-logo\" data-role=\"ibo-navigation-menu--square-company-logo\" title=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAppRevisionNumber", [], "method", false, false, false, 4), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAppIconLink", [], "method", false, false, false, 4), "html", null, true);
        echo "\">
\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAppSquareIconUrl", [], "method", false, false, false, 5), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:CompanyLogo:AltText"), "html", null, true);
        echo "\">
\t\t\t</a>
\t\t\t<a class=\"ibo-navigation-menu--full-company-logo\" data-role=\"ibo-navigation-menu--full-company-logo\" title=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "AppRevisionNumber", [], "any", false, false, false, 7), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "AppIconLink", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
\t\t\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "AppFullIconUrl", [], "any", false, false, false, 8), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:CompanyLogo:AltText"), "html", null, true);
        echo "\">
\t\t\t</a>
\t\t\t<a class=\"ibo-navigation-menu--toggler\" data-role=\"ibo-navigation-menu--toggler\"
               aria-label=\"";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasSiloSelected", [], "method", false, false, false, 11)) {
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_format')->getCallable()("UI:Layout:NavigationMenu:Toggler:TooltipWithSiloLabel", twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSiloLabel", [], "method", false, false, false, 11)), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:Toggler:Tooltip"), "html", null, true);
        }
        echo "\"
               data-tooltip-content=\"";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasSiloSelected", [], "method", false, false, false, 12)) {
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_format')->getCallable()("UI:Layout:NavigationMenu:Toggler:TooltipWithSiloLabel", twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSiloLabel", [], "method", false, false, false, 12)), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:Toggler:Tooltip"), "html", null, true);
        }
        echo "\"
\t\t\t   data-tooltip-placement=\"right\"
\t\t\t   data-tooltip-distance-offset=\"20\"
\t\t\t   href=\"#\">
\t\t\t\t<span class=\"ibo-navigation-menu--toggler-icon\">
\t\t\t\t\t<span class=\"ibo-navigation-menu--toggler-bar\"></span>
\t\t\t\t\t<span class=\"ibo-navigation-menu--toggler-bar\"></span>
\t\t\t\t\t<span class=\"ibo-navigation-menu--toggler-bar\"></span>
\t\t\t\t</span>
\t\t\t\t";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasSiloSelected", [], "method", false, false, false, 21)) {
            // line 22
            echo "\t\t\t\t\t<span class=\"ibo-navigation-menu--silo-visual-hint\"></span>
\t\t\t\t";
        }
        // line 24
        echo "\t\t\t</a>
\t\t\t<div class=\"ibo-navigation-menu--silo-selection\">
\t\t\t\t";
        // line 26
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSiloSelection", [], "method", false, false, false, 26), "html", [], "any", false, false, false, 26);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ibo-navigation-menu--middle-part\">
\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMenuGroups", [], "method", false, false, false, 30));
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
        foreach ($context['_seq'] as $context["_key"] => $context["aMenuGroup"]) {
            // line 31
            echo "\t\t\t\t";
            echo twig_include($this->env, $context, "base/layouts/navigation-menu/menu-group.html.twig", ["aMenuGroup" => $context["aMenuGroup"]]);
            echo "
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aMenuGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t</div>
\t\t<div class=\"ibo-navigation-menu--bottom-part\">
\t\t\t";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsNewsroomEnabled", [], "method", false, false, false, 35) == true)) {
            // line 36
            echo "\t\t\t\t<div class=\"ibo-navigation-menu--notifications\">
\t\t\t\t\t<a class=\"ibo-navigation-menu--notifications-toggler ibo-is-empty\" data-role=\"ibo-navigation-menu--notifications-toggler\" data-tooltip-content=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Newsroom:NoNewMessage"), "html", null, true);
            echo "\" data-tooltip-placement=\"right\" data-tooltip-distance-offset=\"25\">
\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t<div class=\"ibo-navigation-menu--notifications-toggler--new-messages\"></div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"ibo-navigation-menu--notifications-menu\">
\t\t\t\t\t\t";
            // line 42
            echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetNewsroomMenu", [], "method", false, false, false, 42), ["aPage" => ($context["aPage"] ?? null)]);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 46
        echo "            <div class=\"ibo-navigation-menu--user-info\">
                <div class=\"ibo-navigation-menu--user-picture\">
                    <a data-role=\"ibo-navigation-menu--user-menu--toggler\" href=\"#\" aria-label=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:UserMenu:Toggler:Label"), "html", null, true);
        echo "\">
                        <img class=\"ibo-navigation-menu--user-picture--image\"
                             data-role=\"ibo-navigation-menu--user-picture--image\"
                             src=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetUserData", [], "method", false, false, false, 51), "sPictureUrl", [], "any", false, false, false, 51), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t alt=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_format')->getCallable()("UI:Layout:NavigationMenu:UserInfo:Picture:AltText", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetUserData", [], "method", false, false, false, 52), "sFirstname", [], "any", false, false, false, 52)), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t data-tooltip-content=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetUserData", [], "method", false, false, false, 53), "sLogonMessage", [], "any", false, false, false, 53), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t data-tooltip-placement=\"right\"
\t\t\t\t\t\t\t data-tooltip-distance-offset=\"20\"
\t\t\t\t\t\t>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ibo-navigation-menu--user-welcome-message\">
\t\t\t\t\t<a data-role=\"ibo-navigation-menu--user-menu--toggler\" href=\"#\" aria-label=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:UserMenu:Toggler:Label"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div class=\"ibo-navigation-menu--user-welcome-message--text\">
\t\t\t\t\t\t\t<a class=\"ibo-navigation-menu--user-welcome-message--toggler\" data-role=\"ibo-navigation-menu--user-menu--toggler\" href=\"#\">
\t\t\t\t\t\t\t\t";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetUserData", [], "method", false, false, false, 63), "sWelcomeMessage", [], "any", false, false, false, 63), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<span class=\"ibo-navigation-menu--user-welcome-message--toggler\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-caret-down\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t";
        // line 71
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsNewsroomEnabled", [], "method", false, false, false, 71) == true)) {
            // line 72
            echo "\t\t\t\t\t<div class=\"ibo-navigation-menu--user-notifications\">
\t\t\t\t\t\t<a class=\"ibo-navigation-menu--user-notifications--text ibo-navigation-menu--user-notifications--toggler\" data-role=\"ibo-navigation-menu--notifications-toggler\" href=\"#\">
                            <span class=\"ibo-navigation-menu--user-notifications--toggler--message\" data-role=\"ibo-navigation-menu--user-notifications--toggler--message\">
                                ";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Newsroom:NoNewMessage"), "html", null, true);
            echo "
                            </span>
\t\t\t\t\t\t\t<span class=\"ibo-navigation-menu--user-notifications--toggler--icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"ibo-navigation-menu--notifications-toggler--new-messages\"></span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"ibo-navigation-menu--user-notifications-menu\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t<div class=\"ibo-navigation-menu--user-organization\">
\t\t\t\t\t<div class=\"ibo-navigation-menu--user-organization--text\">
\t\t\t\t\t\t";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetUserData", [], "method", false, false, false, 87), "sOrganization", [], "any", false, false, false, 87), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ibo-navigation-menu--user-menu-container\" data-role=\"ibo-navigation-menu--user-menu-container\">
                    ";
        // line 91
        echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetUserMenu", [], "method", false, false, false, 91), ["aPage" => ($context["aPage"] ?? null)]);
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"ibo-navigation-menu--drawer\" data-role=\"ibo-navigation-menu--drawer\">
        <div class=\"ibo-navigation-menu--menu-filter\" data-role=\"ibo-nav-menu--menu-filter\">
            ";
        // line 99
        echo "            <input class=\"ibo-navigation-menu--menu-filter-input\" data-role=\"ibo-navigation-menu--menu-filter-input\" type=\"text\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:MenuFilter:Input:Placeholder"), "html", null, true);
        echo "\" data-tooltip-content=\"";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:MenuFilter:Input:Tooltip"), "html", null, true);
        echo "\"
                   data-tooltip-trigger=\"mouseenter\">
            <a class=\"ibo-navigation-menu--menu-filter-clear\" data-role=\"ibo-navigation-menu--menu-filter-clear\" href=\"#\"><span class=\"fas fa-times\"></span></a>
            <span class=\"ibo-navigation-menu--menu-filter-hotkey\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMenuFilterHotkeyLabel", [], "method", false, false, false, 102), "html", null, true);
        echo "</span>
            ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasMenuFilterHint", [], "method", false, false, false, 103)) {
            // line 104
            echo "                <div class=\"ibo-navigation-menu--menu-filter-hint\" data-role=\"ibo-navigation-menu--menu-filter-hint\">
                    ";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:MenuFilter:Input:Hint"), "html", null, true);
            echo "
                    <a class=\"ibo-navigation-menu--menu-filter-hint-close\" data-role=\"ibo-navigation-menu--menu-filter-hint-close\" aria-label=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Button:Close"), "html", null, true);
            echo "\" href=\"#\"><span class=\"fas fa-times\"></span></a>
                </div>
            ";
        }
        // line 109
        echo "        </div>
        <div class=\"ibo-navigation-menu--menu--placeholder\" data-role=\"ibo-navigation-menu--menu--placeholder\">
            <div class=\"ibo-navigation-menu--menu--placeholder-image ibo-svg-illustration--container\">
                ";
        // line 112
        echo twig_source($this->env, "illustrations/undraw_empty.svg");
        echo "
\t\t\t</div>
\t\t\t<div class=\"ibo-navigation-menu--menu--placeholder-hint\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:MenuFilter:Placeholder:Hint"), "html", null, true);
        echo "</div>
\t\t</div>

\t\t<div class=\"ibo-navigation-menu--menu-groups\">
\t\t\t";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMenuGroups", [], "method", false, false, false, 118));
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
        foreach ($context['_seq'] as $context["_key"] => $context["aMenuGroup"]) {
            // line 119
            echo "\t\t\t\t";
            echo twig_include($this->env, $context, "base/layouts/navigation-menu/menu-nodes.html.twig", ["aMenuGroup" => $context["aMenuGroup"]]);
            echo "
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aMenuGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "\t\t</div>
\t</div>
</nav>";
    }

    public function getTemplateName()
    {
        return "base/layouts/navigation-menu/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 121,  326 => 119,  309 => 118,  302 => 114,  297 => 112,  292 => 109,  286 => 106,  282 => 105,  279 => 104,  277 => 103,  273 => 102,  264 => 99,  254 => 91,  247 => 87,  243 => 85,  230 => 75,  225 => 72,  223 => 71,  212 => 63,  206 => 60,  196 => 53,  192 => 52,  188 => 51,  182 => 48,  178 => 46,  171 => 42,  163 => 37,  160 => 36,  158 => 35,  154 => 33,  137 => 31,  120 => 30,  113 => 26,  109 => 24,  105 => 22,  103 => 21,  87 => 12,  79 => 11,  71 => 8,  65 => 7,  58 => 5,  52 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/navigation-menu/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\layouts\\navigation-menu\\layout.html.twig");
    }
}
