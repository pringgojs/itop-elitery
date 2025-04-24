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

/* base/components/form/layout.html.twig */
class __TwigTemplate_364802d2d2c63f9e8c9f7e4511f043d4 extends Template
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
        // line 1
        echo "<form method=\"post\" enctype=\"multipart/form-data\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        echo "\"
      class=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 2)) {
            echo "ibo-is-hidden";
        }
        echo "\"
      data-role=\"ibo-form\"
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnSubmitJsCode", [], "method", false, false, false, 4)) {
            // line 5
            echo "            onSubmit=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnSubmitJsCode", [], "method", false, false, false, 5), "html", null, true);
            echo "\"
        ";
        }
        // line 7
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAction", [], "method", false, false, false, 7)) {
            // line 8
            echo "            action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAction", [], "method", false, false, false, 8), "html", null, true);
            echo "\"
        ";
        }
        // line 10
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 10)) {
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 11));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 12
                echo "                data-";
                echo twig_escape_filter($this->env, $context["sName"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["sValue"], "html", null, true);
                echo "\"
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sName'], $context['sValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        ";
        }
        // line 15
        echo ">
    ";
        // line 16
        ob_start(function () { return ''; });
        // line 17
        echo "        ";
        $this->displayBlock('iboContentBlockContainer', $context, $blocks);
        // line 22
        echo "    ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo twig_spaceless($___internal_parse_0_);
        // line 23
        echo "</form>";
    }

    // line 17
    public function block_iboContentBlockContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 19
            echo "                ";
            echo $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base/components/form/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 21,  119 => 19,  114 => 18,  110 => 17,  106 => 23,  104 => 16,  101 => 22,  98 => 17,  96 => 16,  93 => 15,  90 => 14,  79 => 12,  74 => 11,  71 => 10,  65 => 8,  62 => 7,  56 => 5,  54 => 4,  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/form/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\form\\layout.html.twig");
    }
}
