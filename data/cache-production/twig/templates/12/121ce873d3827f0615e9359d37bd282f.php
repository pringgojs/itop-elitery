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

/* application/display-block/block-list/layout.html.twig */
class __TwigTemplate_4534edc7d4d2050f3e02f8625a8b043d extends Template
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
        echo "
    ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "bEmptySet", [], "any", false, false, false, 5) || twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "bNotAuthorized", [], "any", false, false, false, 5))) {
            // line 6
            echo "        <div class=\"ibo-block-list--empty-text\">";
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:NoObjectToDisplay"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "
    ";
        // line 10
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "bCreateNew", [], "any", false, false, false, 10)) {
            // line 11
            echo "        <div class=\"ibo-block-list--create-action\">
            <a";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sLinkTarget", [], "any", false, false, false, 12), "html", null, true);
            echo " href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sAbsoluteUrlAppRoot", [], "any", false, false, false, 12), "html", null, true);
            echo "pages/UI.php?operation=new&class=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sClass", [], "any", false, false, false, 12), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sParams", [], "any", false, false, false, 12), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sDefault", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
                <span class=\"ibo-block-list--create-icon\">
                    <span class=\"fas fa-plus\"></span>
                </span>
                <span class=\"ibo-block-list--create-label\">";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_format')->getCallable()("UI:ClickToCreateNew", twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sClassLabel", [], "any", false, false, false, 16)), "html", null, true);
            echo "</span>
            </a>
        </div>
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 22
            echo "        ";
            echo $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
";
        $___internal_parse_8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_8_);
    }

    public function getTemplateName()
    {
        return "application/display-block/block-list/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 3,  96 => 24,  87 => 22,  83 => 21,  80 => 20,  73 => 16,  59 => 12,  56 => 11,  53 => 10,  50 => 8,  44 => 6,  42 => 5,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "application/display-block/block-list/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\application\\display-block\\block-list\\layout.html.twig");
    }
}
