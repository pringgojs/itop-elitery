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

/* base/components/input/layout.html.twig */
class __TwigTemplate_c723aba23e640f7ce511483d1b6f4242 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iboInputLabel' => [$this, 'block_iboInputLabel'],
            'iboInput' => [$this, 'block_iboInput'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('iboInputLabel', $context, $blocks);
        // line 3
        $this->displayBlock('iboInput', $context, $blocks);
    }

    // line 1
    public function block_iboInputLabel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 3
    public function block_iboInput($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <input type=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetType", [], "method", false, false, false, 5), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 5), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetName", [], "method", false, false, false, 5), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetValue", [], "method", false, false, false, 5), "html", null, true);
        echo "\"
           class=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 6), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 6), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 6)) {
            echo "ibo-is-hidden";
        }
        echo "\"
           data-role=\"ibo-input\"
            ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsChecked", [], "method", false, false, false, 8)) {
            echo " checked=\"checked\"";
        }
        // line 9
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsDisabled", [], "method", false, false, false, 9)) {
            echo " disabled";
        }
        // line 10
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsReadonly", [], "method", false, false, false, 10)) {
            echo " readonly";
        }
        // line 11
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 11)) {
            // line 12
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 12));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 13
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
            // line 15
            echo "            ";
        }
        // line 16
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetPlaceHolder", [], "method", false, false, false, 16)) {
            echo "  placeholder=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetPlaceHolder", [], "method", false, false, false, 16), "html", null, true);
            echo "\" ";
        }
        // line 17
        echo "    >
    ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasLabel", [], "method", false, false, false, 18)) {
            echo "<label for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 18), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 18);
            echo "</label>";
        }
    }

    public function getTemplateName()
    {
        return "base/components/input/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  125 => 18,  122 => 17,  115 => 16,  112 => 15,  101 => 13,  96 => 12,  93 => 11,  88 => 10,  83 => 9,  79 => 8,  68 => 6,  58 => 5,  55 => 4,  51 => 3,  45 => 1,  41 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\input\\layout.html.twig");
    }
}
