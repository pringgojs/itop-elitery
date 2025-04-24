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

/* itop-portal-base/portal/templates/errors/layout.html.twig */
class __TwigTemplate_4ca09c61c7289dd0f35b524e093d1fd4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pStyleinline' => [$this, 'block_pStyleinline'],
            'pNavigationWrapper' => [$this, 'block_pNavigationWrapper'],
            'pMainWrapper' => [$this, 'block_pMainWrapper'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "itop-portal-base/portal/templates/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("itop-portal-base/portal/templates/layout.html.twig", "itop-portal-base/portal/templates/errors/layout.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pStyleinline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<style>
\t\t.well {
\t\t\tmargin: 50px auto;
\t\t\ttext-align: center;
\t\t\tpadding: 25px;
\t\t\tmin-width: 600px;
\t\t\tmax-width: 1000px;
\t\t}
\t\th1, h2, h3, p {
\t\t\tmargin: 0;
\t\t}
\t\tp {
\t\t\tfont-size: 17px;
\t\t\tmargin-top: 25px;
\t\t}
\t\tp a.btn {
\t\t\tmargin: 0 5px;
\t\t}

\t</style>
";
    }

    // line 28
    public function block_pNavigationWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 31
    public function block_pMainWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "\t<div class=\"container\">
\t\t<div class=\"well\">
\t\t\t<h1><div class=\"ion ion-alert-circled\"></div> ";
        // line 34
        echo twig_escape_filter($this->env, ($context["error_title"] ?? null), "html", null, true);
        echo "</h1>
\t\t\t<p>";
        // line 35
        echo twig_escape_filter($this->env, ($context["error_message"] ?? null), "html", null, true);
        echo "</p>
\t\t\t<p>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_format')->getCallable()("Error:HTTP:GetHelp", twig_constant("ITOP_APPLICATION_SHORT")), "html", null, true);
        echo "</p>
\t\t\t<p>
\t\t\t\t<a class=\"btn btn-default\" href=\"#\" onclick=\"history.back(); return false;\"><span class=\"fas fa-arrow-left\"></span> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Page:GoPreviousPage"), "html", null, true);
        echo "</a>
\t\t\t\t<a class=\"btn btn-default\" href=\"\"><span class=\"fas fa-redo\"></span> ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Page:ReloadPage"), "html", null, true);
        echo "</a>
\t\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["app"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["url_generator"] ?? null) : null), "generate", [0 => "p_home"], "method", false, false, false, 40), "html", null, true);
        echo "\"><span class=\"fas fa-home\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Page:GoPortalHome"), "html", null, true);
        echo "</a>
\t\t\t</p>
\t\t</div>


\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/errors/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 40,  107 => 39,  103 => 38,  98 => 36,  94 => 35,  90 => 34,  86 => 32,  82 => 31,  76 => 28,  52 => 6,  48 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/errors/layout.html.twig", "D:\\laragon-www\\itop-3.1\\env-production\\itop-portal-base\\portal\\templates\\errors\\layout.html.twig");
    }
}
