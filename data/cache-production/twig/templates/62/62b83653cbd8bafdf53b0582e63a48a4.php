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

/* base/layouts/navigation-menu/menu-node.html.twig */
class __TwigTemplate_b2e90e7f1300eed9cd699f7619f9a8e1 extends Template
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
        echo "<li class=\"ibo-navigation-menu--menu-node\" data-role=\"ibo-navigation-menu--menu-node\" data-menu-node-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "sId", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t";
        // line 2
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "sUrl", [], "any", false, false, false, 2))) {
            // line 3
            echo "\t\t";
            $context["sTarget"] = (((twig_get_attribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "bOpenInNewWindow", [], "any", false, false, false, 3) == true)) ? ("target=\"_blank\"") : (""));
            // line 4
            echo "\t\t<a class=\"ibo-navigation-menu--menu-node-title\" data-role=\"ibo-navigation-menu--menu-node-title\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "sUrl", [], "any", false, false, false, 4), "html", null, true);
            echo "\" ";
            echo ($context["sTarget"] ?? null);
            echo ">
\t\t\t<span class=\"ibo-navigation-menu--menu-node-label\" data-role=\"ibo-navigation-menu--menu-node-label\" title=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "sLabel", [], "any", false, false, false, 5), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "sTitle", [], "any", false, false, false, 5), "html", null, true);
            echo "</span>
\t\t\t";
            // line 6
            if (twig_get_attribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "bHasCount", [], "any", false, false, false, 6)) {
                // line 7
                echo "                ";
                // line 8
                echo "\t\t\t\t<span class=\"ibo-navigation-menu--menu-node-counter ibo-is-hidden\" data-menu-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "sId", [], "any", false, false, false, 8), "html", null, true);
                echo "\"></span>
\t\t\t";
            }
            // line 10
            echo "\t\t</a>
\t";
        } else {
            // line 12
            echo "\t\t<span class=\"ibo-navigation-menu--menu-node-title\" data-role=\"ibo-navigation-menu--menu-node-title\">
\t\t\t<span class=\"ibo-navigation-menu--menu-node-label\" data-role=\"ibo-navigation-menu--menu-node-label\" title=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "sLabel", [], "any", false, false, false, 13), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "sTitle", [], "any", false, false, false, 13), "html", null, true);
            echo "</span>
\t\t</span>
\t";
        }
        // line 16
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "aSubMenuNodes", [], "any", true, true, false, 16) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "aSubMenuNodes", [], "any", false, false, false, 16)) > 0))) {
            // line 17
            echo "\t\t<ul>
\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "aSubMenuNodes", [], "any", false, false, false, 18));
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
            foreach ($context['_seq'] as $context["_key"] => $context["aSubMenuNode"]) {
                // line 19
                echo "\t\t\t\t";
                echo twig_include($this->env, $context, "base/layouts/navigation-menu/menu-node.html.twig", ["aMenuNode" => $context["aSubMenuNode"]]);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aSubMenuNode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t</ul>
\t";
        }
        // line 23
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "base/layouts/navigation-menu/menu-node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 23,  125 => 21,  108 => 19,  91 => 18,  88 => 17,  85 => 16,  77 => 13,  74 => 12,  70 => 10,  64 => 8,  62 => 7,  60 => 6,  54 => 5,  47 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/navigation-menu/menu-node.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\layouts\\navigation-menu\\menu-node.html.twig");
    }
}
