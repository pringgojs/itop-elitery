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

/* base/layouts/dashboard/column/layout.html.twig */
class __TwigTemplate_75579def196ca8957ee8c1ecae2d54af extends Template
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
        // line 4
        ob_start(function () { return ''; });
        // line 5
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsEditMode", [], "method", false, false, false, 5)) {
            // line 6
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsLastRow", [], "method", false, false, false, 6)) {
                // line 7
                echo "            ";
                $context["sCellClass"] = "layout_cell edit_mode layout_extension";
                // line 8
                echo "        ";
            } else {
                // line 9
                echo "            ";
                $context["sCellClass"] = "layout_cell edit_mode";
                // line 10
                echo "        ";
            }
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "        ";
            $context["sCellClass"] = "dashboard";
            // line 13
            echo "    ";
        }
        // line 14
        echo "    <div class=\"ibo-dashboard--grid-column ibo-dashboard--grid-cell ";
        echo twig_escape_filter($this->env, ($context["sCellClass"] ?? null), "html", null, true);
        echo "\"
         data-role=\"ibo-dashboard--grid-cell\"
         data-dashboard-grid-column-index=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetColumnIndex", [], "method", false, false, false, 16), "html", null, true);
        echo "\"
         data-dashboard-grid-cell-index=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCellIndex", [], "method", false, false, false, 17), "html", null, true);
        echo "\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 19
            echo "            ";
            echo $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
";
        $___internal_parse_5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo twig_spaceless($___internal_parse_5_);
    }

    public function getTemplateName()
    {
        return "base/layouts/dashboard/column/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 4,  93 => 21,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  66 => 14,  63 => 13,  60 => 12,  57 => 11,  54 => 10,  51 => 9,  48 => 8,  45 => 7,  42 => 6,  39 => 5,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/dashboard/column/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\layouts\\dashboard\\column\\layout.html.twig");
    }
}
