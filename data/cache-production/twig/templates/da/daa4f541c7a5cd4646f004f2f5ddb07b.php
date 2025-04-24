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

/* base/layouts/tab-container/tab/layout.html.twig */
class __TwigTemplate_424a0cc3ce32f27e2effea5d9e6b1200 extends Template
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
        // line 3
        echo "<div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 3), "html", null, true);
        echo "\" class=\"ibo-tab\" data-role=\"ibo-tab\">
    ";
        // line 4
        $this->displayBlock('iboContentBlockContainer', $context, $blocks);
        // line 9
        echo "</div>";
    }

    // line 4
    public function block_iboContentBlockContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 6
            echo "            ";
            echo $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base/layouts/tab-container/tab/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 8,  58 => 6,  53 => 5,  49 => 4,  45 => 9,  43 => 4,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/tab-container/tab/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\layouts\\tab-container\\tab\\layout.html.twig");
    }
}
