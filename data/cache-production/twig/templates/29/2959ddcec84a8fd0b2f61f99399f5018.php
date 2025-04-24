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

/* pages/backoffice/itopwebpage/layout.html.twig */
class __TwigTemplate_b5f45e9f05e826460cdbe8637c1b2fc9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'iboPageBodyHtml' => [$this, 'block_iboPageBodyHtml'],
            'iboDeferredBlocks' => [$this, 'block_iboDeferredBlocks'],
            'iboPageTemplates' => [$this, 'block_iboPageTemplates'],
            'iboCapturedOutput' => [$this, 'block_iboCapturedOutput'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "pages/backoffice/nicewebpage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("pages/backoffice/nicewebpage/layout.html.twig", "pages/backoffice/itopwebpage/layout.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_iboPageBodyHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t\t";
        echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["aLayouts"] ?? null), "oNavigationMenu", [], "any", false, false, false, 5), ["aPage" => ($context["aPage"] ?? null)]);
        echo "
\t\t<div id=\"ibo-page-container\" class=\"ibo-page-container\" data-role=\"ibo-page-container\">
\t\t\t<div id=\"ibo-top-container\" class=\"ibo-top-container\" data-role=\"ibo-top-container\">
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, "pages/backoffice/extension-blocks/banner.html.twig");
        echo "
\t\t\t\t";
        // line 9
        echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["aLayouts"] ?? null), "oTopBar", [], "any", false, false, false, 9), ["aPage" => ($context["aPage"] ?? null)]);
        echo "
\t\t\t</div>
\t\t\t";
        // line 11
        echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["aLayouts"] ?? null), "oPageContent", [], "any", false, false, false, 11), ["aPage" => ($context["aPage"] ?? null), "aLayouts" => ($context["aLayouts"] ?? null)]);
        echo "

\t\t\t";
        // line 14
        echo "\t\t\t<div id=\"at_the_end\">";
        echo twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "sDeferredContent", [], "any", false, false, false, 14);
        echo "</div>
\t\t\t<div style=\"display:none\" title=\"ex2\" id=\"ex2\">Please wait...</div>
\t\t\t<div style=\"display:none\" title=\"dialog\" id=\"ModalDlg\"></div>
\t\t\t<div style=\"display:none\" id=\"ajax_content\"></div>
\t\t\t<div id=\"ibo-user-disconnected-dialog\" class=\"ibo-user-disconnected-dialog ibo-is-hidden\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:DisconnectedDlgMessage"), "html", null, true);
        echo "</div>
\t\t</div>
";
    }

    // line 22
    public function block_iboDeferredBlocks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "isPrintable", [], "any", false, false, false, 23)) {
            // line 24
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["aDeferredBlocks"] ?? null), "oPageContent", [], "any", false, false, false, 24)) {
                // line 25
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aDeferredBlocks"] ?? null), "oPageContent", [], "any", false, false, false, 25));
                foreach ($context['_seq'] as $context["_key"] => $context["oBlock"]) {
                    // line 26
                    echo "\t\t\t\t";
                    echo $this->env->getFunction('render_block')->getCallable()($context["oBlock"], ["aPage" => ($context["aPage"] ?? null)]);
                    echo "
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oBlock'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t\t";
            }
            // line 29
            echo "\t";
        } else {
            // line 30
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aDeferredBlocks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["aBlocks"]) {
                // line 31
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["aBlocks"]);
                foreach ($context['_seq'] as $context["_key"] => $context["oBlock"]) {
                    // line 32
                    echo "\t\t\t\t";
                    echo $this->env->getFunction('render_block')->getCallable()($context["oBlock"], ["aPage" => ($context["aPage"] ?? null)]);
                    echo "
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oBlock'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aBlocks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t";
        }
    }

    // line 38
    public function block_iboPageTemplates($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    ";
        // line 40
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aTemplates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["oTemplate"]) {
            // line 41
            echo "        ";
            echo $this->env->getFunction('render_block')->getCallable()($context["oTemplate"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oTemplate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
";
    }

    // line 46
    public function block_iboCapturedOutput($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    <div id=\"ibo-raw-output\" class=\"ibo-raw-output ibo-is-hidden\" title=\"Debug Output\">";
        echo twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "sCapturedOutput", [], "any", false, false, false, 47);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "pages/backoffice/itopwebpage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 47,  174 => 46,  169 => 43,  160 => 41,  155 => 40,  153 => 39,  149 => 38,  144 => 35,  138 => 34,  129 => 32,  124 => 31,  119 => 30,  116 => 29,  113 => 28,  104 => 26,  99 => 25,  96 => 24,  93 => 23,  89 => 22,  82 => 18,  74 => 14,  69 => 11,  64 => 9,  60 => 8,  53 => 5,  49 => 4,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/backoffice/itopwebpage/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\pages\\backoffice\\itopwebpage\\layout.html.twig");
    }
}
