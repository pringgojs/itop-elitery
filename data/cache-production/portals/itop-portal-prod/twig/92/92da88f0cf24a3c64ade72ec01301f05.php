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

/* itop-portal-base/portal/templates/home/layout.html.twig */
class __TwigTemplate_84618b26f28736030ae3d4478b5bc972 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pPageBodyClass' => [$this, 'block_pPageBodyClass'],
            'pMainWrapper' => [$this, 'block_pMainWrapper'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["app"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 3), "templates", [], "any", false, false, false, 3), "layout", [], "any", false, false, false, 3), "itop-portal-base/portal/templates/home/layout.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pPageBodyClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "home";
    }

    // line 7
    public function block_pMainWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $context["iCurrentTileIndex"] = 0;
        // line 9
        echo "<div class=\"container-fluid\" id=\"main-wrapper\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-9 col-md-10 col-sm-offset-3 col-md-offset-2\">
\t\t\t<section class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t";
        // line 14
        $this->loadTemplate("itop-portal-base/portal/templates/helpers/session_messages/session_messages.html.twig", "itop-portal-base/portal/templates/home/layout.html.twig", 14)->display($context);
        // line 15
        echo "\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"row tiles_wrapper\">
\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["app"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["brick_collection"] ?? null) : null), "home_ordering", [], "any", false, false, false, 18));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["brick"]) {
            // line 19
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["brick"], "GetVisibleHome", [], "any", false, false, false, 19)) {
                // line 20
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["aTilesRendering"] ?? null), twig_get_attribute($this->env, $this->source, $context["brick"], "GetId", [], "any", false, false, false, 20), [], "array", true, true, false, 20)) {
                    // line 21
                    echo "\t\t\t\t\t\t\t";
                    echo (($__internal_compile_2 = ($context["aTilesRendering"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["brick"], "GetId", [], "any", false, false, false, 21)] ?? null) : null);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t\t\t";
                    $this->loadTemplate(("" . twig_get_attribute($this->env, $this->source, $context["brick"], "GetTileTemplatePath", [], "any", false, false, false, 23)), "itop-portal-base/portal/templates/home/layout.html.twig", 23)->display(twig_array_merge($context, ["brick" => $context["brick"]]));
                    // line 24
                    echo "\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t</section>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/home/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 27,  111 => 26,  108 => 25,  105 => 24,  102 => 23,  96 => 21,  93 => 20,  90 => 19,  73 => 18,  68 => 15,  66 => 14,  59 => 9,  57 => 8,  53 => 7,  46 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/home/layout.html.twig", "D:\\laragon-www\\itop-3.1\\env-production\\itop-portal-base\\portal\\templates\\home\\layout.html.twig");
    }
}
