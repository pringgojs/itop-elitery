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

/* base/components/title/layout.html.twig */
class __TwigTemplate_493e00ae94fb57ae964760f56a70d98f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iboPageTitleText' => [$this, 'block_iboPageTitleText'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        ob_start(function () { return ''; });
        // line 2
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 2), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasIcon", [], "method", false, false, false, 2)) {
            echo "ibo-has-icon";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 2)) {
            echo " ibo-is-hidden";
        }
        echo "\" data-role=\"ibo-title\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasIcon", [], "method", false, false, false, 3)) {
            // line 4
            echo "            <div class=\"ibo-title--icon\">
                <div class=\"ibo-title--icon-background ibo-title--icon-background--must-";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconCoverMethod", [], "method", false, false, false, 5), "html", null, true);
            echo " ibo-title--icon-level-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLevel", [], "method", false, false, false, 5), "html", null, true);
            echo "\" style=\"background-image: url('";
            echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconUrl", [], "method", false, false, false, 5);
            echo "');\"></div>
            </div>
        ";
        }
        // line 8
        echo "        <div class=\"ibo-title--content\">
            ";
        // line 9
        $this->displayBlock('iboPageTitleText', $context, $blocks);
        // line 16
        echo "        </div>
    </div>
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_0_);
    }

    // line 9
    public function block_iboPageTitleText($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                <h";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLevel", [], "method", false, false, false, 10), "html", null, true);
        echo " class=\"ibo-title--text is-size-";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLevel", [], "method", false, false, false, 10) + 2), "html", null, true);
        echo "\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 12
            echo "                        ";
            echo $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                </h";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLevel", [], "method", false, false, false, 14), "html", null, true);
        echo ">
            ";
    }

    public function getTemplateName()
    {
        return "base/components/title/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 14,  100 => 12,  96 => 11,  89 => 10,  85 => 9,  81 => 1,  76 => 16,  74 => 9,  71 => 8,  61 => 5,  58 => 4,  56 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/title/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\title\\layout.html.twig");
    }
}
