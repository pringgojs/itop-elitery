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

/* pages/backoffice/setuppage/layout.html.twig */
class __TwigTemplate_5c0ca4020ba1a14fd61940a88b5b9da6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'iboPageBodyHtml' => [$this, 'block_iboPageBodyHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "pages/backoffice/webpage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("pages/backoffice/webpage/layout.html.twig", "pages/backoffice/setuppage/layout.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_iboPageBodyHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div id=\"ibo_setup_container\">
        ";
        // line 7
        echo $this->env->getFunction('render_block')->getCallable()(($context["oLayout"] ?? null), ["aPage" => ($context["aPage"] ?? null)]);
        echo "

        ";
        // line 10
        echo "        <div id=\"at_the_end\">";
        echo twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "sDeferredContent", [], "any", false, false, false, 10);
        echo "</div>
        <div style=\"display:none\" title=\"ex2\" id=\"ex2\">Please wait...</div>
        <div style=\"display:none\" title=\"dialog\" id=\"ModalDlg\"></div>
        <div style=\"display:none\" id=\"ajax_content\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "pages/backoffice/setuppage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  53 => 7,  50 => 6,  46 => 5,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/backoffice/setuppage/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\pages\\backoffice\\setuppage\\layout.html.twig");
    }
}
