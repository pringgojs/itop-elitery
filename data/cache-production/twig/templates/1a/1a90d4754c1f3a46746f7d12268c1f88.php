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

/* base/layouts/content-block/layout.html.twig */
class __TwigTemplate_ec8901038a62fbe1ded80b529712d96a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iboContentBlockContainer' => [$this, 'block_iboContentBlockContainer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        ob_start(function () { return ''; });
        // line 5
        echo "
    ";
        // line 7
        echo "    ";
        $context["bHasDiv"] = (((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 7) || twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 7)) || twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 7)) || twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasForcedDiv", [], "method", false, false, false, 7));
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('iboContentBlockContainer', $context, $blocks);
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo twig_spaceless($___internal_parse_0_);
    }

    // line 9
    public function block_iboContentBlockContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "        ";
        if (($context["bHasDiv"] ?? null)) {
            // line 11
            echo "            <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 11), "html", null, true);
            echo "\"
            class=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 12), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 12), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 12)) {
                echo "ibo-is-hidden";
            }
            echo "\"
            ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 13)) {
                // line 14
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 14));
                foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                    // line 15
                    echo "                    data-";
                    echo twig_escape_filter($this->env, $context["sName"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["sValue"], "html", null, true);
                    echo "\"
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['sName'], $context['sValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "            ";
            }
            // line 18
            echo "            > ";
        }
        // line 19
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            echo " ";
            echo $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        ";
        if (($context["bHasDiv"] ?? null)) {
            echo " </div> ";
        }
        // line 21
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "base/layouts/content-block/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 21,  114 => 20,  102 => 19,  99 => 18,  96 => 17,  85 => 15,  80 => 14,  78 => 13,  68 => 12,  63 => 11,  60 => 10,  56 => 9,  52 => 4,  49 => 9,  46 => 8,  43 => 7,  40 => 5,  38 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/content-block/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\layouts\\content-block\\layout.html.twig");
    }
}
