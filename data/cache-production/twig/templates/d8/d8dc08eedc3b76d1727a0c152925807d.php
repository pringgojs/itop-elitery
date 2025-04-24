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

/* base/components/input/inputwithlabel.html.twig */
class __TwigTemplate_8d50baaacfa2b6266d90d7df8a44a371 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('iboInputLabel', $context, $blocks);
        // line 10
        echo "
";
    }

    // line 1
    public function block_iboInputLabel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsLabelBefore", [], "method", false, false, false, 2)) {
            // line 3
            echo "        <label for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 3), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasDescription", [], "method", false, false, false, 3)) {
                echo " class=\"ibo-input-with-label--label ibo-has-description\" data-tooltip-content=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDescription", [], "method", false, false, false, 3);
                echo "\" data-tooltip-max-width=\"600px\" data-tooltip-html-enabled=\"true\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 3);
            echo "</label>
        ";
            // line 4
            echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetInput", [], "method", false, false, false, 4));
            echo "
    ";
        } else {
            // line 6
            echo "        ";
            echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetInput", [], "method", false, false, false, 6));
            echo "
        <label for=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 7), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasDescription", [], "method", false, false, false, 7)) {
                echo " class=\"ibo-input-with-label--label ibo-has-description\" data-tooltip-content=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDescription", [], "method", false, false, false, 7);
                echo "\" data-tooltip-max-width=\"600px\" data-tooltip-html-enabled=\"true\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 7);
            echo "</label>
    ";
        }
    }

    public function getTemplateName()
    {
        return "base/components/input/inputwithlabel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 7,  70 => 6,  65 => 4,  52 => 3,  49 => 2,  45 => 1,  40 => 10,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/inputwithlabel.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\input\\inputwithlabel.html.twig");
    }
}
