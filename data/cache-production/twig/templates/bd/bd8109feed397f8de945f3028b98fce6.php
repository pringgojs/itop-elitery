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

/* base/layouts/page-content/layout.html.twig */
class __TwigTemplate_77be5036fa96809047693473c5c61eb9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iboPageCenterContainerExtraClasses' => [$this, 'block_iboPageCenterContainerExtraClasses'],
            'iboPageCenterContainer' => [$this, 'block_iboPageCenterContainer'],
            'iboPageHeader' => [$this, 'block_iboPageHeader'],
            'iboPageMainContent' => [$this, 'block_iboPageMainContent'],
            'iboPageExtraHtml' => [$this, 'block_iboPageExtraHtml'],
            'iboPageFooter' => [$this, 'block_iboPageFooter'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"ibo-center-container\" class=\"ibo-center-container ";
        $this->displayBlock('iboPageCenterContainerExtraClasses', $context, $blocks);
        echo "\" data-role=\"ibo-center-container\">
\t";
        // line 2
        $this->displayBlock('iboPageCenterContainer', $context, $blocks);
        // line 24
        echo "</div>";
    }

    // line 1
    public function block_iboPageCenterContainerExtraClasses($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 2
    public function block_iboPageCenterContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t\t<main id=\"ibo-main-content\">
\t\t\t";
        // line 5
        echo "\t\t\t";
        $this->displayBlock('iboPageHeader', $context, $blocks);
        // line 8
        echo "
\t\t\t";
        // line 9
        $this->displayBlock('iboPageMainContent', $context, $blocks);
        // line 14
        echo "\t\t\t";
        $this->displayBlock('iboPageExtraHtml', $context, $blocks);
        // line 17
        echo "
\t\t\t";
        // line 19
        echo "\t\t\t";
        $this->displayBlock('iboPageFooter', $context, $blocks);
        // line 22
        echo "\t\t</main>
\t";
    }

    // line 5
    public function block_iboPageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t\t\t\t";
        echo twig_include($this->env, $context, "pages/backoffice/extension-blocks/header.html.twig");
        echo "
\t\t\t";
    }

    // line 9
    public function block_iboPageMainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMainBlocks", [], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 11
            echo "\t\t\t\t\t";
            echo $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t";
    }

    // line 14
    public function block_iboPageExtraHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "\t\t\t\t";
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetExtraHtmlContent", [], "method", false, false, false, 15);
        echo "
\t\t\t";
    }

    // line 19
    public function block_iboPageFooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "\t\t\t\t";
        echo twig_include($this->env, $context, "pages/backoffice/extension-blocks/footer.html.twig");
        echo "
\t\t\t";
    }

    public function getTemplateName()
    {
        return "base/layouts/page-content/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  137 => 20,  133 => 19,  126 => 15,  122 => 14,  118 => 13,  109 => 11,  104 => 10,  100 => 9,  93 => 6,  89 => 5,  84 => 22,  81 => 19,  78 => 17,  75 => 14,  73 => 9,  70 => 8,  67 => 5,  64 => 3,  60 => 2,  54 => 1,  50 => 24,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/page-content/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\layouts\\page-content\\layout.html.twig");
    }
}
