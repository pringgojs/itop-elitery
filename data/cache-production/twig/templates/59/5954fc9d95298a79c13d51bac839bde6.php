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

/* base/components/dashlet/dashlet-header-static.html.twig */
class __TwigTemplate_14bf7d094b9c4960afa666e50415b19f extends Template
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
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 4), "html", null, true);
        echo "\" class=\"ibo-dashlet-header-static ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 4)) {
            echo "ibo-is-hidden";
        }
        echo "\" data-role=\"ibo-dashlet-header-static\">
        <div class=\"ibo-dashlet-header-static--body\">
            ";
        // line 6
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconUrl", [], "method", false, false, false, 6))) {
            // line 7
            echo "                <div class=\"ibo-dashlet-header-static--icon-container\">
                    ";
            // line 9
            echo "                    <img class=\"ibo-dashlet-header-static--icon\" src=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconUrl", [], "method", false, false, false, 9);
            echo "\" alt=\"\">
                </div>
            ";
        }
        // line 12
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTitle", [], "method", false, false, false, 12))) {
            // line 13
            echo "                <div class=\"ibo-dashlet-header-static--title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTitle", [], "method", false, false, false, 13), "html", null, true);
            echo "</div>
            ";
        }
        // line 15
        echo "        </div>
    </div>
";
        $___internal_parse_6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_6_);
    }

    public function getTemplateName()
    {
        return "base/components/dashlet/dashlet-header-static.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 3,  70 => 15,  64 => 13,  61 => 12,  54 => 9,  51 => 7,  49 => 6,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/dashlet/dashlet-header-static.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\dashlet\\dashlet-header-static.html.twig");
    }
}
