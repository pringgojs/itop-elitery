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

/* pages/backoffice/webpage/layout.html.twig */
class __TwigTemplate_da800169ac9f7556938874f5e78427d0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iboPageExtraMetas' => [$this, 'block_iboPageExtraMetas'],
            'iboPageCssFiles' => [$this, 'block_iboPageCssFiles'],
            'iboPageCssInline' => [$this, 'block_iboPageCssInline'],
            'iboPageJsInlineEarly' => [$this, 'block_iboPageJsInlineEarly'],
            'iboPageBodyHtml' => [$this, 'block_iboPageBodyHtml'],
            'iboDeferredBlocks' => [$this, 'block_iboDeferredBlocks'],
            'iboPageTemplates' => [$this, 'block_iboPageTemplates'],
            'iboPageJsFiles' => [$this, 'block_iboPageJsFiles'],
            'iboPageJsInlineScripts' => [$this, 'block_iboPageJsInlineScripts'],
            'iboPageJsInlineOnInit' => [$this, 'block_iboPageJsInlineOnInit'],
            'iboPageJsInlineOnDomReady' => [$this, 'block_iboPageJsInlineOnDomReady'],
            'iboPageJsInlineLive' => [$this, 'block_iboPageJsInlineLive'],
            'iboCapturedOutput' => [$this, 'block_iboCapturedOutput'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aMetadata", [], "any", false, false, false, 4), "sLang", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
<head>
    <meta charset=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aMetadata", [], "any", false, false, false, 6), "sCharset", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
    ";
        // line 8
        echo "    ";
        $this->displayBlock('iboPageExtraMetas', $context, $blocks);
        // line 10
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aMetadata", [], "any", false, true, false, 10), "sBaseUrl", [], "any", true, true, false, 10) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aMetadata", [], "any", false, true, false, 10), "sBaseTarget", [], "any", true, true, false, 10))) {
            // line 11
            echo "        <base ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aMetadata", [], "any", false, true, false, 11), "sBaseUrl", [], "any", true, true, false, 11)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aMetadata", [], "any", false, false, false, 11), "sBaseUrl", [], "any", false, false, false, 11), "html", null, true);
                echo "\"";
            }
            echo " ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aMetadata", [], "any", false, true, false, 11), "sBaseTarget", [], "any", true, true, false, 11)) {
                echo "target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aMetadata", [], "any", false, false, false, 11), "sBaseTarget", [], "any", false, false, false, 11), "html", null, true);
                echo "\"";
            }
            echo ">
    ";
        }
        // line 13
        echo "    <title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "sTitle", [], "any", false, false, false, 13), "html", null, true);
        echo "</title>
    ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "sFaviconUrl", [], "any", true, true, false, 14)) {
            // line 15
            echo "        <link rel=\"shortcut icon\" href=\"";
            echo $this->env->getFilter('add_itop_version')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "sFaviconUrl", [], "any", false, false, false, 15));
            echo "\">
    ";
        }
        // line 17
        echo "    <link rel=\"search\" type=\"application/opensearchdescription+xml\" title=\"iTop\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "sAbsoluteUrlAppRoot", [], "any", false, false, false, 17), "html", null, true);
        echo "pages/opensearch.xml.php\">
    ";
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aPreloadedFonts", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["aPreloadedFont"]) {
            // line 20
            echo "        <link rel=\"preload\" href=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["aPreloadedFont"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["font"] ?? null) : null), "html", null, true);
            echo "\" as=\"font\" type=\"font/";
            echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["aPreloadedFont"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["type"] ?? null) : null), "html", null, true);
            echo "\" crossorigin>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aPreloadedFont'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    ";
        // line 25
        echo "    ";
        $this->displayBlock('iboPageCssFiles', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('iboPageCssInline', $context, $blocks);
        // line 41
        echo "
    ";
        // line 42
        $this->displayBlock('iboPageJsInlineEarly', $context, $blocks);
        // line 50
        echo "</head>
<body data-gui-type=\"backoffice\">
";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "isPrintable", [], "any", false, false, false, 52)) {
            echo "<div class=\"printable-content\" style=\"width: 27.7cm;\">";
        }
        // line 53
        echo "    ";
        $this->displayBlock('iboPageBodyHtml', $context, $blocks);
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "isPrintable", [], "any", false, false, false, 58)) {
            echo "</div>";
        }
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('iboDeferredBlocks', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('iboPageTemplates', $context, $blocks);
        // line 68
        echo "
<script type=\"text/javascript\">
";
        // line 73
        echo "
/**
 * @var {Map} aLoadedJsFilesRegister
 * Register of all JS files loaded in this page, including the Promise corresponding to the loading state of each file.
 * A JS file MUST NOT be loaded more than once as it could compromise settings / plugins loaded after the first time.
 */
const aLoadedJsFilesRegister = new Map();
/**
 * @var {Map} aLoadedJsFilesResolveCallbacks
 * Resolve callbacks of JS files registered in aLoadedJsFilesRegister. Used -mostly in \\AjaxPage- to know when a file is done loading so the depending snippets can run
 */
const aLoadedJsFilesResolveCallbacks = new Map();
";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsFiles", [], "any", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsFile"]) {
            // line 86
            echo "aLoadedJsFilesRegister.set(\"";
            echo $context["sJsFile"];
            echo "\", new Promise(function(resolve) {
    aLoadedJsFilesResolveCallbacks.set(\"";
            // line 87
            echo $context["sJsFile"];
            echo "\", resolve);
    // Resolve promise right away as these files are loaded immediately before any inline JS is executed
    aLoadedJsFilesResolveCallbacks.get(\"";
            // line 89
            echo $context["sJsFile"];
            echo "\")();
}));
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsFile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "</script>

";
        // line 94
        $this->displayBlock('iboPageJsFiles', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('iboPageJsInlineScripts', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('iboCapturedOutput', $context, $blocks);
        // line 134
        echo "
</body>
</html>";
    }

    // line 8
    public function block_iboPageExtraMetas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
    }

    // line 25
    public function block_iboPageCssFiles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "\t    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aCssFiles", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["aCssFileData"]) {
            // line 27
            echo "\t\t    ";
            if (((($__internal_compile_2 = $context["aCssFileData"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["condition"] ?? null) : null) != "")) {
                echo "<!--[if ";
                echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["aCssFileData"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["condition"] ?? null) : null), "html", null, true);
                echo "]>";
            }
            // line 28
            echo "\t\t\t<link type=\"text/css\" href=\"";
            echo $this->env->getFilter('add_itop_version')->getCallable()((($__internal_compile_4 = $context["aCssFileData"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["link"] ?? null) : null));
            echo "\" rel=\"stylesheet\">
\t\t\t";
            // line 29
            if (((($__internal_compile_5 = $context["aCssFileData"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["condition"] ?? null) : null) != "")) {
                echo "<![endif]-->";
            }
            // line 30
            echo "\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aCssFileData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    ";
    }

    // line 33
    public function block_iboPageCssInline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "        ";
        // line 35
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aCssInline", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["sCssInline"]) {
            // line 36
            echo "            <style>
                ";
            // line 37
            echo $context["sCssInline"];
            echo "
            </style>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sCssInline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    ";
    }

    // line 42
    public function block_iboPageJsInlineEarly($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineEarly", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
            // line 44
            echo "            ";
            // line 45
            echo "            <script type=\"text/javascript\">
            ";
            // line 46
            echo $context["sJsInline"];
            echo "
            </script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsInline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    ";
    }

    // line 53
    public function block_iboPageBodyHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "        <div id=\"ibo-page-container\">
            ";
        // line 55
        echo $this->env->getFunction('render_block')->getCallable()(($context["oLayout"] ?? null), ["aPage" => ($context["aPage"] ?? null)]);
        echo "
        </div>
    ";
    }

    // line 60
    public function block_iboDeferredBlocks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aDeferredBlocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["oBlock"]) {
            // line 62
            echo "        ";
            echo $this->env->getFunction('render_block')->getCallable()($context["oBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 66
    public function block_iboPageTemplates($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 94
    public function block_iboPageJsFiles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsFiles", [], "any", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsFile"]) {
            // line 96
            echo "        <script type=\"text/javascript\" src=\"";
            echo $this->env->getFilter('add_itop_version')->getCallable()($context["sJsFile"]);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsFile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 100
    public function block_iboPageJsInlineScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "    ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineOnInit", [], "any", false, false, false, 101)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineOnDomReady", [], "any", false, false, false, 101)))) {
            // line 102
            echo "        <script type=\"text/javascript\">
            ";
            // line 104
            echo "            \$(document).ready(function () {
                ";
            // line 105
            $this->displayBlock('iboPageJsInlineOnInit', $context, $blocks);
            // line 110
            echo "
                ";
            // line 111
            $this->displayBlock('iboPageJsInlineOnDomReady', $context, $blocks);
            // line 118
            echo "            });
        </script>
    ";
        }
        // line 121
        echo "    ";
        $this->displayBlock('iboPageJsInlineLive', $context, $blocks);
    }

    // line 105
    public function block_iboPageJsInlineOnInit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineOnInit", [], "any", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
            // line 107
            echo "                        ";
            echo $context["sJsInline"];
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsInline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                ";
    }

    // line 111
    public function block_iboPageJsInlineOnDomReady($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "                    setTimeout(function () {
                        ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineOnDomReady", [], "any", false, false, false, 113));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
            // line 114
            echo "                        ";
            echo $context["sJsInline"];
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsInline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                    }, 50);
                ";
    }

    // line 121
    public function block_iboPageJsInlineLive($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineLive", [], "any", false, false, false, 122));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
            // line 123
            echo "            ";
            // line 124
            echo "            <script type=\"text/javascript\">
                ";
            // line 125
            echo $context["sJsInline"];
            echo "
            </script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsInline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "    ";
    }

    // line 131
    public function block_iboCapturedOutput($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "sCapturedOutput", [], "any", false, false, false, 132);
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/backoffice/webpage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 132,  482 => 131,  478 => 128,  469 => 125,  466 => 124,  464 => 123,  459 => 122,  455 => 121,  450 => 116,  441 => 114,  437 => 113,  434 => 112,  430 => 111,  426 => 109,  417 => 107,  412 => 106,  408 => 105,  403 => 121,  398 => 118,  396 => 111,  393 => 110,  391 => 105,  388 => 104,  385 => 102,  382 => 101,  378 => 100,  367 => 96,  362 => 95,  358 => 94,  352 => 66,  341 => 62,  336 => 61,  332 => 60,  325 => 55,  322 => 54,  318 => 53,  314 => 49,  305 => 46,  302 => 45,  300 => 44,  295 => 43,  291 => 42,  287 => 40,  278 => 37,  275 => 36,  270 => 35,  268 => 34,  264 => 33,  260 => 31,  254 => 30,  250 => 29,  245 => 28,  238 => 27,  233 => 26,  229 => 25,  225 => 9,  221 => 8,  215 => 134,  213 => 131,  210 => 130,  208 => 100,  205 => 99,  203 => 94,  199 => 92,  190 => 89,  185 => 87,  180 => 86,  176 => 85,  162 => 73,  158 => 68,  156 => 66,  153 => 65,  151 => 60,  148 => 59,  144 => 58,  141 => 53,  137 => 52,  133 => 50,  131 => 42,  128 => 41,  126 => 33,  123 => 32,  120 => 25,  118 => 22,  107 => 20,  102 => 19,  97 => 17,  91 => 15,  89 => 14,  84 => 13,  68 => 11,  65 => 10,  62 => 8,  58 => 6,  53 => 4,  50 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/backoffice/webpage/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\pages\\backoffice\\webpage\\layout.html.twig");
    }
}
