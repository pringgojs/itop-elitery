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

/* itop-portal-base/portal/templates/layout.html.twig */
class __TwigTemplate_7ef8ec5a197d8005d071ceb8e56bd9a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pPageExtraMetas' => [$this, 'block_pPageExtraMetas'],
            'pPageTitle' => [$this, 'block_pPageTitle'],
            'pPageStylesheets' => [$this, 'block_pPageStylesheets'],
            'pStyleinline' => [$this, 'block_pStyleinline'],
            'pPageScripts' => [$this, 'block_pPageScripts'],
            'pPageBodyClass' => [$this, 'block_pPageBodyClass'],
            'pPageBodyWrapper' => [$this, 'block_pPageBodyWrapper'],
            'pEnvBannerWrapper' => [$this, 'block_pEnvBannerWrapper'],
            'pNavigationWrapper' => [$this, 'block_pNavigationWrapper'],
            'pNavigationTopMenuWrapper' => [$this, 'block_pNavigationTopMenuWrapper'],
            'pNavigationTopMenuLogo' => [$this, 'block_pNavigationTopMenuLogo'],
            'pNavigationTopBricks' => [$this, 'block_pNavigationTopBricks'],
            'pPageUIExtensionNavigationMenuTopbar' => [$this, 'block_pPageUIExtensionNavigationMenuTopbar'],
            'pNavigationSideMenuWrapper' => [$this, 'block_pNavigationSideMenuWrapper'],
            'pNavigationSideMenu' => [$this, 'block_pNavigationSideMenu'],
            'pPageUIExtensionNavigationMenuSidebar' => [$this, 'block_pPageUIExtensionNavigationMenuSidebar'],
            'pNavigationSideMenuLogo' => [$this, 'block_pNavigationSideMenuLogo'],
            'pMainWrapper' => [$this, 'block_pMainWrapper'],
            'pMainHeader' => [$this, 'block_pMainHeader'],
            'pMainContent' => [$this, 'block_pMainContent'],
            'pPageUIExtensionMainContent' => [$this, 'block_pPageUIExtensionMainContent'],
            'pPageFooter' => [$this, 'block_pPageFooter'],
            'pModalForAllWrapper' => [$this, 'block_pModalForAllWrapper'],
            'pModalForAlert' => [$this, 'block_pModalForAlert'],
            'pPageOverlay' => [$this, 'block_pPageOverlay'],
            'pPageUIExtensionBody' => [$this, 'block_pPageUIExtensionBody'],
            'pPageLiveScripts' => [$this, 'block_pPageLiveScripts'],
            'pPageLiveScriptHelpers' => [$this, 'block_pPageLiveScriptHelpers'],
            'pPageReadyScripts' => [$this, 'block_pPageReadyScripts'],
            'pPageExtensionsScripts' => [$this, 'block_pPageExtensionsScripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.current_user", [], "array", true, true, false, 4) &&  !(null === (($__internal_compile_0 = ($context["app"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["combodo.current_user"] ?? null) : null)))) {
            // line 5
            echo "\t";
            $context["bUserConnected"] = true;
            // line 6
            echo "\t";
            $context["sUserFullname"] = ((twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["app"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["combodo.current_user"] ?? null) : null), "Get", [0 => "first_name"], "method", false, false, false, 6) . " ") . twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["app"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["combodo.current_user"] ?? null) : null), "Get", [0 => "last_name"], "method", false, false, false, 6));
            // line 7
            echo "\t";
            $context["sUserEmail"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["app"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["combodo.current_user"] ?? null) : null), "Get", [0 => "email"], "method", false, false, false, 7);
            // line 8
            echo "\t";
            $context["sUserPhotoUrl"] = (($__internal_compile_4 = ($context["app"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["combodo.current_contact.photo_url"] ?? null) : null);
        } else {
            // line 10
            echo "\t";
            $context["bUserConnected"] = false;
            // line 11
            echo "\t";
            $context["sUserFullname"] = "";
            // line 12
            echo "\t";
            $context["sUserEmail"] = "";
            // line 13
            echo "\t";
            $context["sUserPhotoUrl"] = ((($__internal_compile_5 = ($context["app"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["combodo.portal.base.absolute_url"] ?? null) : null) . "img/user-profile-default-256px.png");
        }
        // line 15
        echo "
<!doctype html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t";
        // line 23
        echo "\t";
        $this->displayBlock('pPageExtraMetas', $context, $blocks);
        // line 25
        echo "\t<title>";
        $this->displayBlock('pPageTitle', $context, $blocks);
        echo "</title>
\t<link rel=\"shortcut icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, ((($__internal_compile_6 = ($context["app"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("images/favicon.ico")), "html", null, true);
        echo "\" />

\t";
        // line 28
        $this->displayBlock('pPageStylesheets', $context, $blocks);
        // line 76
        echo "
\t";
        // line 77
        $this->displayBlock('pStyleinline', $context, $blocks);
        // line 85
        echo "
\t";
        // line 86
        $this->displayBlock('pPageScripts', $context, $blocks);
        // line 165
        echo "</head>
<body class=\"";
        // line 166
        $this->displayBlock('pPageBodyClass', $context, $blocks);
        echo "\" data-gui-type=\"portal\">
\t";
        // line 167
        $this->displayBlock('pPageBodyWrapper', $context, $blocks);
        // line 406
        echo "\t
\t";
        // line 407
        $this->displayBlock('pPageLiveScripts', $context, $blocks);
        // line 552
        echo "
\t";
        // line 553
        $this->displayBlock('pPageExtensionsScripts', $context, $blocks);
        // line 561
        echo "</body>
</html>
";
    }

    // line 23
    public function block_pPageExtraMetas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "\t";
    }

    // line 25
    public function block_pPageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        if ((array_key_exists("sPageTitle", $context) &&  !(null === ($context["sPageTitle"] ?? null)))) {
            echo twig_escape_filter($this->env, ($context["sPageTitle"] ?? null), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_constant("ITOP_APPLICATION_SHORT"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_format')->getCallable()("Page:DefaultTitle", twig_constant("ITOP_APPLICATION_SHORT")), "html", null, true);
        }
    }

    // line 28
    public function block_pPageStylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "        ";
        // line 30
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_7 = ($context["app"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/bootstrap/css/bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 32
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_8 = ($context["app"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 34
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_9 = ($context["app"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/datatables/css/dataTables.bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, ((($__internal_compile_10 = ($context["app"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/datatables/css/fixedHeader.bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, ((($__internal_compile_11 = ($context["app"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/datatables/css/responsive.bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, ((($__internal_compile_12 = ($context["app"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/datatables/css/scroller.bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, ((($__internal_compile_13 = ($context["app"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/datatables/css/select.bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, ((($__internal_compile_14 = ($context["app"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/datatables/css/select.dataTables.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 41
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_15 = ($context["app"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("css/font-open-sans/font-open-sans.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 43
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_16 = ($context["app"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("css/font-combodo/font-combodo.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 45
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_17 = ($context["app"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("css/font-awesome/css/all.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 47
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_18 = ($context["app"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/typeahead/css/typeaheadjs.bootstrap.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 48
        echo twig_escape_filter($this->env, ((($__internal_compile_19 = ($context["app"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("css/selectize.default.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, ((($__internal_compile_20 = ($context["app"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("css/magnific-popup.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 50
        echo twig_escape_filter($this->env, ((($__internal_compile_21 = ($context["app"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("css/c3.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 51
        echo twig_escape_filter($this->env, ((($__internal_compile_22 = ($context["app"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/ckeditor/plugins/codesnippet/lib/highlight/styles/obsidian.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        // line 53
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_23 = ($context["app"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = ($context["app"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 53), "themes", [], "any", false, false, false, 53), "bootstrap", [], "any", false, false, false, 53))), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"css_bootstrap_theme\">
\t\t";
        // line 55
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_25 = ($context["app"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = ($context["app"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 55), "themes", [], "any", false, false, false, 55), "portal", [], "any", false, false, false, 55))), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"css_portal\">
\t\t";
        // line 57
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_27 = ($context["app"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/tippy.js/dist/tippy.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 58
        echo twig_escape_filter($this->env, ((($__internal_compile_28 = ($context["app"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/tippy.js/animations/shift-away-subtle.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        // line 60
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true, false, 60), "css_files", [], "any", true, true, false, 60)) {
            // line 61
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_29 = ($context["app"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["ui_extensions_helper"] ?? null) : null), "css_files", [], "any", false, false, false, 61));
            foreach ($context['_seq'] as $context["_key"] => $context["css_file"]) {
                // line 62
                echo "\t\t\t\t<link href=\"";
                echo twig_escape_filter($this->env, $this->env->getFilter('add_itop_version')->getCallable()($context["css_file"]), "html", null, true);
                echo "\" rel=\"stylesheet\">
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        ";
        }
        // line 65
        echo "\t\t";
        // line 66
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.conf", [], "array", false, true, false, 66), "properties", [], "any", false, true, false, 66), "themes", [], "any", false, true, false, 66), "custom", [], "any", true, true, false, 66)) {
            // line 67
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, ((($__internal_compile_30 = ($context["app"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_31 = ($context["app"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 67), "themes", [], "any", false, false, false, 67), "custom", [], "any", false, false, false, 67))), "html", null, true);
            echo "\" rel=\"stylesheet\">
\t\t";
        }
        // line 69
        echo "\t\t";
        // line 70
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.conf", [], "array", false, true, false, 70), "properties", [], "any", false, true, false, 70), "themes", [], "any", false, true, false, 70), "others", [], "any", true, true, false, 70)) {
            // line 71
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_32 = ($context["app"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 71), "themes", [], "any", false, false, false, 71), "others", [], "any", false, false, false, 71));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 72
                echo "\t\t\t\t<link href=\"";
                echo twig_escape_filter($this->env, ((($__internal_compile_33 = ($context["app"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()($context["theme"])), "html", null, true);
                echo "\" rel=\"stylesheet\">
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t";
        }
        // line 75
        echo "\t";
    }

    // line 77
    public function block_pStyleinline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "        ";
        // line 79
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (($__internal_compile_34 = ($context["app"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["ui_extensions_helper"] ?? null) : null), "css_inline", [], "any", false, false, false, 79))) {
            // line 80
            echo "\t\t\t<style>
\t\t\t\t";
            // line 81
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_35 = ($context["app"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["ui_extensions_helper"] ?? null) : null), "css_inline", [], "any", false, false, false, 81);
            echo "
\t\t\t</style>
        ";
        }
        // line 84
        echo "\t";
    }

    // line 86
    public function block_pPageScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_36 = ($context["app"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/jquery.min.js")), "html", null, true);
        echo "\"></script>
\t\t";
        // line 88
        if ($this->env->getFunction('is_development_environment')->getCallable()()) {
            // line 89
            echo "\t\t\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ((($__internal_compile_37 = ($context["app"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/jquery-migrate.dev.js")), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // line 91
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ((($__internal_compile_38 = ($context["app"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/jquery-migrate.prod.min.js")), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 93
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_39 = ($context["app"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/jquery-ui.custom.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, ((($__internal_compile_40 = ($context["app"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/jquery.magnific-popup.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, ((($__internal_compile_41 = ($context["app"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/jquery.iframe-transport.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, ((($__internal_compile_42 = ($context["app"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/jquery.fileupload.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, ((($__internal_compile_43 = ($context["app"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/utils.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, ((($__internal_compile_44 = ($context["app"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/toolbox.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, ((($__internal_compile_45 = ($context["app"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/d3.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, ((($__internal_compile_46 = ($context["app"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/c3.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, ((($__internal_compile_47 = ($context["app"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/bootstrap/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, ((($__internal_compile_48 = ($context["app"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/bootstrap-patches.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, ((($__internal_compile_49 = ($context["app"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/bootstrap-portal-modal.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, ((($__internal_compile_50 = ($context["app"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/latinise/latinise.min.js")), "html", null, true);
        echo "\"></script>
        ";
        // line 106
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_51 = ($context["app"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/@popperjs/core/dist/umd/popper.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, ((($__internal_compile_52 = ($context["app"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/tippy.js/dist/tippy-bundle.umd.js")), "html", null, true);
        echo "\"></script>
        ";
        // line 109
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_53 = ($context["app"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/jquery-visible/js/jquery.visible.min.js")), "html", null, true);
        echo "\"></script>
        ";
        // line 111
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_54 = ($context["app"] ?? null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/jquery-base64/js/jquery.base64.min.js")), "html", null, true);
        echo "\"></script>
        ";
        // line 113
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_55 = ($context["app"] ?? null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/moment-with-locales.min.js")), "html", null, true);
        echo "\"></script>
        ";
        // line 115
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_56 = ($context["app"] ?? null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/datatables.net/js/jquery.dataTables.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, ((($__internal_compile_57 = ($context["app"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/datatables/js/dataTables.bootstrap.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, ((($__internal_compile_58 = ($context["app"] ?? null)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, ((($__internal_compile_59 = ($context["app"] ?? null)) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/datatables.net-responsive/js/dataTables.responsive.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, ((($__internal_compile_60 = ($context["app"] ?? null)) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/datatables.net-scroller/js/dataTables.scroller.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, ((($__internal_compile_61 = ($context["app"] ?? null)) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/datatables.net-select/js/dataTables.select.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, ((($__internal_compile_62 = ($context["app"] ?? null)) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/datatables/js/datetime-moment.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, ((($__internal_compile_63 = ($context["app"] ?? null)) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/dataTables.accentNeutraliseForFilter.js")), "html", null, true);
        echo "\"></script>
        ";
        // line 124
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_64 = ($context["app"] ?? null)) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/export.js")), "html", null, true);
        echo "\"></script>
        ";
        // line 126
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_65 = ($context["app"] ?? null)) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/ckeditor/ckeditor.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, ((($__internal_compile_66 = ($context["app"] ?? null)) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/ckeditor/adapters/jquery.js")), "html", null, true);
        echo "\"></script>
        ";
        // line 129
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_67 = ($context["app"] ?? null)) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js")), "html", null, true);
        echo "\"></script>
        ";
        // line 131
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_68 = ($context["app"] ?? null)) && is_array($__internal_compile_68) || $__internal_compile_68 instanceof ArrayAccess ? ($__internal_compile_68["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/ckeditor.on-init.js")), "html", null, true);
        echo "\"></script>
        ";
        // line 133
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_69 = ($context["app"] ?? null)) && is_array($__internal_compile_69) || $__internal_compile_69 instanceof ArrayAccess ? ($__internal_compile_69["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js")), "html", null, true);
        echo "\"></script>
        ";
        // line 135
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_70 = ($context["app"] ?? null)) && is_array($__internal_compile_70) || $__internal_compile_70 instanceof ArrayAccess ? ($__internal_compile_70["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/typeahead/js/typeahead.bundle.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, ((($__internal_compile_71 = ($context["app"] ?? null)) && is_array($__internal_compile_71) || $__internal_compile_71 instanceof ArrayAccess ? ($__internal_compile_71["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/handlebars/js/handlebars.min-768ddbd.js")), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, ((($__internal_compile_72 = ($context["app"] ?? null)) && is_array($__internal_compile_72) || $__internal_compile_72 instanceof ArrayAccess ? ($__internal_compile_72["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/leave_handler.js")), "html", null, true);
        echo "\"></script>

        ";
        // line 141
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_73 = ($context["app"] ?? null)) && is_array($__internal_compile_73) || $__internal_compile_73 instanceof ArrayAccess ? ($__internal_compile_73["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/selectize.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, ((($__internal_compile_74 = ($context["app"] ?? null)) && is_array($__internal_compile_74) || $__internal_compile_74 instanceof ArrayAccess ? ($__internal_compile_74["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/jquery.itop-set-widget.js")), "html", null, true);
        echo "\"></script>
        ";
        // line 144
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_75 = ($context["app"] ?? null)) && is_array($__internal_compile_75) || $__internal_compile_75 instanceof ArrayAccess ? ($__internal_compile_75["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/form_handler.js")), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, ((($__internal_compile_76 = ($context["app"] ?? null)) && is_array($__internal_compile_76) || $__internal_compile_76 instanceof ArrayAccess ? ($__internal_compile_76["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/form_field.js")), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, ((($__internal_compile_77 = ($context["app"] ?? null)) && is_array($__internal_compile_77) || $__internal_compile_77 instanceof ArrayAccess ? ($__internal_compile_77["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/subform_field.js")), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, ((($__internal_compile_78 = ($context["app"] ?? null)) && is_array($__internal_compile_78) || $__internal_compile_78 instanceof ArrayAccess ? ($__internal_compile_78["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/field_set.js")), "html", null, true);
        echo "\"></script>
\t\t";
        // line 149
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_79 = ($context["app"] ?? null)) && is_array($__internal_compile_79) || $__internal_compile_79 instanceof ArrayAccess ? ($__internal_compile_79["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/portal_form_handler.js")), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, ((($__internal_compile_80 = ($context["app"] ?? null)) && is_array($__internal_compile_80) || $__internal_compile_80 instanceof ArrayAccess ? ($__internal_compile_80["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/portal_form_field.js")), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, ((($__internal_compile_81 = ($context["app"] ?? null)) && is_array($__internal_compile_81) || $__internal_compile_81 instanceof ArrayAccess ? ($__internal_compile_81["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/portal_form_field_html.js")), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, ((($__internal_compile_82 = ($context["app"] ?? null)) && is_array($__internal_compile_82) || $__internal_compile_82 instanceof ArrayAccess ? ($__internal_compile_82["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/portal_form_field_set.js")), "html", null, true);
        echo "\"></script>
\t\t";
        // line 154
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ((($__internal_compile_83 = ($context["app"] ?? null)) && is_array($__internal_compile_83) || $__internal_compile_83 instanceof ArrayAccess ? ($__internal_compile_83["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/clipboard.min.js")), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, ((($__internal_compile_84 = ($context["app"] ?? null)) && is_array($__internal_compile_84) || $__internal_compile_84 instanceof ArrayAccess ? ($__internal_compile_84["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/clipboardwidget.js")), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, ((($__internal_compile_85 = ($context["app"] ?? null)) && is_array($__internal_compile_85) || $__internal_compile_85 instanceof ArrayAccess ? ($__internal_compile_85["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/portal-clipboard.js")), "html", null, true);
        echo "\"></script>

\t\t";
        // line 159
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true, false, 159), "js_files", [], "any", true, true, false, 159)) {
            // line 160
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_86 = ($context["app"] ?? null)) && is_array($__internal_compile_86) || $__internal_compile_86 instanceof ArrayAccess ? ($__internal_compile_86["ui_extensions_helper"] ?? null) : null), "js_files", [], "any", false, false, false, 160));
            foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
                // line 161
                echo "\t\t\t\t<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getFilter('add_itop_version')->getCallable()($context["js_file"]), "html", null, true);
                echo "\"></script>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "        ";
        }
        // line 164
        echo "\t";
    }

    // line 166
    public function block_pPageBodyClass($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 167
    public function block_pPageBodyWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 168
        echo "\t\t";
        $this->displayBlock('pEnvBannerWrapper', $context, $blocks);
        // line 178
        echo "\t\t
\t\t";
        // line 179
        $this->displayBlock('pNavigationWrapper', $context, $blocks);
        // line 328
        echo "\t\t
\t\t";
        // line 329
        $this->displayBlock('pMainWrapper', $context, $blocks);
        // line 356
        echo "\t\t
\t\t<footer id=\"footer-wrapper\">
\t\t\t";
        // line 358
        $this->displayBlock('pPageFooter', $context, $blocks);
        // line 361
        echo "\t\t</footer>
\t
\t\t";
        // line 363
        $this->displayBlock('pModalForAllWrapper', $context, $blocks);
        // line 372
        echo "\t\t";
        $this->displayBlock('pModalForAlert', $context, $blocks);
        // line 391
        echo "
\t\t";
        // line 392
        $this->displayBlock('pPageOverlay', $context, $blocks);
        // line 399
        echo "
\t\t";
        // line 400
        $this->displayBlock('pPageUIExtensionBody', $context, $blocks);
        // line 405
        echo "\t";
    }

    // line 168
    public function block_pEnvBannerWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 169
        echo "\t\t\t";
        if (((($__internal_compile_87 = ($context["app"] ?? null)) && is_array($__internal_compile_87) || $__internal_compile_87 instanceof ArrayAccess ? ($__internal_compile_87["combodo.current_environment"] ?? null) : null) != "production")) {
            // line 170
            echo "\t\t\t\t<div id=\"envbanner\" class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t";
            // line 171
            echo $this->env->getFilter('dict_format')->getCallable()("Portal:EnvironmentBanner:Title", twig_upper_filter($this->env, (($__internal_compile_88 = ($context["app"] ?? null)) && is_array($__internal_compile_88) || $__internal_compile_88 instanceof ArrayAccess ? ($__internal_compile_88["combodo.current_environment"] ?? null) : null)));
            echo "
\t\t\t\t\t<button type=\"button\" onclick=\"window;location.href='";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_89 = ($context["app"] ?? null)) && is_array($__internal_compile_89) || $__internal_compile_89 instanceof ArrayAccess ? ($__internal_compile_89["url_generator"] ?? null) : null), "generate", [0 => "p_home", 1 => ["switch_env" => "production"]], "method", false, false, false, 172), "html", null, true);
            echo "'\">
\t\t\t\t\t\t";
            // line 173
            echo $this->env->getFilter('dict_s')->getCallable()("Portal:EnvironmentBanner:GoToProduction");
            echo "
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t";
        }
        // line 177
        echo "\t\t";
    }

    // line 179
    public function block_pNavigationWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 180
        echo "\t\t\t";
        // line 181
        echo "\t\t\t";
        $this->displayBlock('pNavigationTopMenuWrapper', $context, $blocks);
        // line 252
        echo "
\t\t\t";
        // line 254
        echo "\t\t\t";
        $this->displayBlock('pNavigationSideMenuWrapper', $context, $blocks);
        // line 327
        echo "\t\t";
    }

    // line 181
    public function block_pNavigationTopMenuWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 182
        echo "\t\t\t\t<nav class=\"navbar navbar-fixed-top navbar-default visible-xs\" id=\"topbar\" role=\"navigation\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\">
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t";
        // line 190
        $this->displayBlock('pNavigationTopMenuLogo', $context, $blocks);
        // line 199
        echo "\t\t\t\t\t\t\t<p class=\"navbar-text\">
\t\t\t\t\t\t\t\t<a class=\"navbar-link user_infos\" href=\"";
        // line 200
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 200), "generate", [0 => "p_user_profile_brick"], "method", false, false, false, 200), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"user_photo\" style=\"background-image: url('";
        // line 201
        echo twig_escape_filter($this->env, ($context["sUserPhotoUrl"] ?? null), "html", null, true);
        echo "');\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"user_fullname\">";
        // line 202
        echo twig_escape_filter($this->env, ($context["sUserFullname"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t";
        // line 208
        $this->displayBlock('pNavigationTopBricks', $context, $blocks);
        // line 226
        echo "\t\t\t\t\t\t\t\t";
        if (($context["bUserConnected"] ?? null)) {
            // line 227
            echo "\t\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 228), "generate", [0 => "p_user_profile_brick"], "method", false, false, false, 228), "html", null, true);
            echo "\"><span class=\"brick_icon fas fa-user fa-2x fa-fw\"></span>";
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["allowed_portals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["aPortal"]) {
                // line 230
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["aPortal"], "id", [], "any", false, false, false, 230) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_90 = ($context["app"] ?? null)) && is_array($__internal_compile_90) || $__internal_compile_90 instanceof ArrayAccess ? ($__internal_compile_90["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 230), "id", [], "any", false, false, false, 230))) {
                    // line 231
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context["sIconClass"] = (((twig_get_attribute($this->env, $this->source, $context["aPortal"], "id", [], "any", false, false, false, 231) == "backoffice")) ? ("far fa-list-alt") : ("fas fa-external-link-alt"));
                    // line 232
                    echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aPortal"], "url", [], "any", false, false, false, 232), "html", null, true);
                    echo "\" target=\"_blank\"><span class=\"brick_icon ";
                    echo twig_escape_filter($this->env, ($context["sIconClass"] ?? null), "html", null, true);
                    echo " fa-2x fa-fw\"></span>";
                    echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()(twig_get_attribute($this->env, $this->source, $context["aPortal"], "label", [], "any", false, false, false, 232)), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 234
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aPortal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "\t\t\t\t\t\t\t\t\t";
            // line 236
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, ($context["allowed_portals"] ?? null)) > 1)) {
                // line 237
                echo "\t\t\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 239
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_91 = ($context["app"] ?? null)) && is_array($__internal_compile_91) || $__internal_compile_91 instanceof ArrayAccess ? ($__internal_compile_91["combodo.absolute_url"] ?? null) : null), "html", null, true);
            echo "pages/logoff.php\"><span class=\"brick_icon fas fa-sign-out-alt fa-2x fa-fw\"></span>";
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Brick:Portal:UserProfile:Navigation:Dropdown:Logout"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 241
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

                        ";
        // line 244
        $this->displayBlock('pPageUIExtensionNavigationMenuTopbar', $context, $blocks);
        // line 249
        echo "\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t";
    }

    // line 190
    public function block_pNavigationTopMenuLogo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 191
        echo "\t\t\t\t\t\t\t\t<a class=\"navbar-brand pull-right\" href=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_92 = ($context["app"] ?? null)) && is_array($__internal_compile_92) || $__internal_compile_92 instanceof ArrayAccess ? ($__internal_compile_92["combodo.conf.app_icon_url"] ?? null) : null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t";
        // line 192
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_93 = ($context["app"] ?? null)) && is_array($__internal_compile_93) || $__internal_compile_93 instanceof ArrayAccess ? ($__internal_compile_93["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 192), "logo", [], "any", false, false, false, 192))) {
            // line 193
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_94 = ($context["app"] ?? null)) && is_array($__internal_compile_94) || $__internal_compile_94 instanceof ArrayAccess ? ($__internal_compile_94["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 193), "logo", [], "any", false, false, false, 193), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_95 = ($context["app"] ?? null)) && is_array($__internal_compile_95) || $__internal_compile_95 instanceof ArrayAccess ? ($__internal_compile_95["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 193), "name", [], "any", false, false, false, 193)), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 195
            echo "\t\t\t\t\t\t\t\t\t\tiTop
\t\t\t\t\t\t\t\t\t";
        }
        // line 197
        echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
    }

    // line 208
    public function block_pNavigationTopBricks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 209
        echo "\t\t\t\t\t\t\t\t\t<li class=\"brick_menu_item ";
        if ( !array_key_exists("oBrick", $context)) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 210), "generate", [0 => "p_home"], "method", false, false, false, 210), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"brick_icon fas fa-home fa-2x\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Page:Home"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_96 = ($context["app"] ?? null)) && is_array($__internal_compile_96) || $__internal_compile_96 instanceof ArrayAccess ? ($__internal_compile_96["brick_collection"] ?? null) : null), "navigation_menu_ordering", [], "any", false, false, false, 215));
        foreach ($context['_seq'] as $context["_key"] => $context["brick"]) {
            // line 216
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, $context["brick"], "GetActive", [], "any", false, false, false, 216) && twig_get_attribute($this->env, $this->source, $context["brick"], "GetVisibleNavigationMenu", [], "any", false, false, false, 216)) &&  !(null === twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 216)))) {
                // line 217
                echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"brick_menu_item ";
                if ((array_key_exists("oBrick", $context) && (twig_get_attribute($this->env, $this->source, $context["brick"], "id", [], "any", false, false, false, 217) == twig_get_attribute($this->env, $this->source, ($context["oBrick"] ?? null), "id", [], "any", false, false, false, 217)))) {
                    echo "active";
                }
                echo "\" data-brick-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brick"], "GetId", [], "any", false, false, false, 217), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 218
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 218), "generate", [0 => twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 218), 1 => ["sBrickId" => twig_get_attribute($this->env, $this->source, $context["brick"], "GetId", [], "any", false, false, false, 218)]], "method", false, false, false, 218), "html", null, true);
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true, false, 218), twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 218), [], "array", false, true, false, 218), "hash", [], "array", true, true, false, 218)) {
                    echo "#";
                    echo twig_escape_filter($this->env, (($__internal_compile_97 = (($__internal_compile_98 = (($__internal_compile_99 = ($context["app"] ?? null)) && is_array($__internal_compile_99) || $__internal_compile_99 instanceof ArrayAccess ? ($__internal_compile_99["combodo.portal.instance.routes"] ?? null) : null)) && is_array($__internal_compile_98) || $__internal_compile_98 instanceof ArrayAccess ? ($__internal_compile_98[twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 218)] ?? null) : null)) && is_array($__internal_compile_97) || $__internal_compile_97 instanceof ArrayAccess ? ($__internal_compile_97["hash"] ?? null) : null), "html", null, true);
                }
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true, false, 218), twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 218), [], "array", false, true, false, 218), "navigation_menu_attr", [], "array", true, true, false, 218)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_100 = (($__internal_compile_101 = (($__internal_compile_102 = ($context["app"] ?? null)) && is_array($__internal_compile_102) || $__internal_compile_102 instanceof ArrayAccess ? ($__internal_compile_102["combodo.portal.instance.routes"] ?? null) : null)) && is_array($__internal_compile_101) || $__internal_compile_101 instanceof ArrayAccess ? ($__internal_compile_101[twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 218)] ?? null) : null)) && is_array($__internal_compile_100) || $__internal_compile_100 instanceof ArrayAccess ? ($__internal_compile_100["navigation_menu_attr"] ?? null) : null));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        echo " ";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " ";
                if (twig_get_attribute($this->env, $this->source, $context["brick"], "GetModal", [], "any", false, false, false, 218)) {
                    echo "data-toggle=\"modal\" data-target=\"#modal-for-all\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"brick_icon ";
                // line 219
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brick"], "GetDecorationClassNavigationMenu", [], "any", false, false, false, 219), "html", null, true);
                echo "\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 220
                echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()(twig_get_attribute($this->env, $this->source, $context["brick"], "GetTitleNavigationMenu", [], "any", false, false, false, 220)), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 224
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "\t\t\t\t\t\t\t\t";
    }

    // line 244
    public function block_pPageUIExtensionNavigationMenuTopbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 245
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true, false, 245), "html", [], "any", false, true, false, 245), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU"), [], "array", true, true, false, 245)) {
            // line 246
            echo "                                ";
            echo (($__internal_compile_103 = twig_get_attribute($this->env, $this->source, (($__internal_compile_104 = ($context["app"] ?? null)) && is_array($__internal_compile_104) || $__internal_compile_104 instanceof ArrayAccess ? ($__internal_compile_104["ui_extensions_helper"] ?? null) : null), "html", [], "any", false, false, false, 246)) && is_array($__internal_compile_103) || $__internal_compile_103 instanceof ArrayAccess ? ($__internal_compile_103[twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU")] ?? null) : null);
            echo "
                            ";
        }
        // line 248
        echo "                        ";
    }

    // line 254
    public function block_pNavigationSideMenuWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 255
        echo "\t\t\t\t<nav class=\"navbar-default hidden-xs col-sm-3 col-md-2\" id=\"sidebar\" role=\"navigation\">
\t\t\t\t\t<div class=\"user_card bg-primary\">
\t\t\t\t\t\t<div class=\"user_photo\" style=\"background-image: url('";
        // line 257
        echo twig_escape_filter($this->env, ($context["sUserPhotoUrl"] ?? null), "html", null, true);
        echo "');\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"user_infos\">
\t\t\t\t\t\t\t<div class=\"user_fullname\">";
        // line 260
        echo twig_escape_filter($this->env, ($context["sUserFullname"] ?? null), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"user_email dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"user_options\">
\t\t\t\t\t\t\t\t\t";
        // line 263
        echo twig_escape_filter($this->env, ($context["sUserEmail"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu user_options\" aria-labelledby=\"user_options\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 267
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 267), "generate", [0 => "p_user_profile_brick"], "method", false, false, false, 267), "html", null, true);
        echo "\"><span class=\"brick_icon fas fa-user fa-lg fa-fw\"></span>";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        // line 268
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allowed_portals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aPortal"]) {
            // line 269
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["aPortal"], "id", [], "any", false, false, false, 269) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_105 = ($context["app"] ?? null)) && is_array($__internal_compile_105) || $__internal_compile_105 instanceof ArrayAccess ? ($__internal_compile_105["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 269), "id", [], "any", false, false, false, 269))) {
                // line 270
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["sGlyphiconClass"] = (((twig_get_attribute($this->env, $this->source, $context["aPortal"], "id", [], "any", false, false, false, 270) == "backoffice")) ? ("far fa-list-alt") : ("fas fa-external-link-alt"));
                // line 271
                echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aPortal"], "url", [], "any", false, false, false, 271), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_106 = ($context["app"] ?? null)) && is_array($__internal_compile_106) || $__internal_compile_106 instanceof ArrayAccess ? ($__internal_compile_106["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 271), "allowed_portals", [], "any", false, false, false, 271), "opening_mode", [], "any", false, false, false, 271) == "tab")) {
                    echo "target=\"_blank\"";
                }
                echo " title=\"";
                echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()(twig_get_attribute($this->env, $this->source, $context["aPortal"], "label", [], "any", false, false, false, 271)), "html", null, true);
                echo "\"><span class=\"brick_icon ";
                echo twig_escape_filter($this->env, ($context["sGlyphiconClass"] ?? null), "html", null, true);
                echo " fa-lg fa-fw\"></span>";
                echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()(twig_get_attribute($this->env, $this->source, $context["aPortal"], "label", [], "any", false, false, false, 271)), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 273
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aPortal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "\t\t\t\t\t\t\t\t\t";
        // line 275
        echo "\t\t\t\t\t\t\t\t\t";
        if ((twig_length_filter($this->env, ($context["allowed_portals"] ?? null)) > 1)) {
            // line 276
            echo "\t\t\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 278
        echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_107 = ($context["app"] ?? null)) && is_array($__internal_compile_107) || $__internal_compile_107 instanceof ArrayAccess ? ($__internal_compile_107["combodo.absolute_url"] ?? null) : null), "html", null, true);
        echo "pages/logoff.php\"><span class=\"brick_icon fas fa-sign-out-alt fa-lg fa-fw\"></span>";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Brick:Portal:UserProfile:Navigation:Dropdown:Logout"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t";
        // line 284
        $this->displayBlock('pNavigationSideMenu', $context, $blocks);
        // line 304
        echo "\t\t\t\t\t</div>

                    ";
        // line 306
        $this->displayBlock('pPageUIExtensionNavigationMenuSidebar', $context, $blocks);
        // line 311
        echo "
\t\t\t\t\t";
        // line 312
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_108 = ($context["app"] ?? null)) && is_array($__internal_compile_108) || $__internal_compile_108 instanceof ArrayAccess ? ($__internal_compile_108["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 312), "logo", [], "any", false, false, false, 312))) {
            // line 313
            echo "\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t";
            // line 314
            $this->displayBlock('pNavigationSideMenuLogo', $context, $blocks);
            // line 323
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 325
        echo "\t\t\t\t</nav>
\t\t\t";
    }

    // line 284
    public function block_pNavigationSideMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 285
        echo "\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t<li class=\"brick_menu_item ";
        // line 286
        if ( !array_key_exists("oBrick", $context)) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 287
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 287), "generate", [0 => "p_home"], "method", false, false, false, 287), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"brick_icon fas fa-home fa-2x\"></span>
\t\t\t\t\t\t\t\t\t\t";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Page:Home"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_109 = ($context["app"] ?? null)) && is_array($__internal_compile_109) || $__internal_compile_109 instanceof ArrayAccess ? ($__internal_compile_109["brick_collection"] ?? null) : null), "navigation_menu_ordering", [], "any", false, false, false, 292));
        foreach ($context['_seq'] as $context["_key"] => $context["brick"]) {
            // line 293
            echo "\t\t\t\t\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, $context["brick"], "GetActive", [], "any", false, false, false, 293) && twig_get_attribute($this->env, $this->source, $context["brick"], "GetVisibleNavigationMenu", [], "any", false, false, false, 293)) &&  !(null === twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 293)))) {
                // line 294
                echo "\t\t\t\t\t\t\t\t\t\t<li class=\"brick_menu_item ";
                if ((array_key_exists("oBrick", $context) && (twig_get_attribute($this->env, $this->source, $context["brick"], "id", [], "any", false, false, false, 294) == twig_get_attribute($this->env, $this->source, ($context["oBrick"] ?? null), "id", [], "any", false, false, false, 294)))) {
                    echo "active";
                }
                echo "\" data-brick-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brick"], "GetId", [], "any", false, false, false, 294), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 295
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 295), "generate", [0 => twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 295), 1 => ["sBrickId" => twig_get_attribute($this->env, $this->source, $context["brick"], "GetId", [], "any", false, false, false, 295)]], "method", false, false, false, 295), "html", null, true);
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true, false, 295), twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 295), [], "array", false, true, false, 295), "hash", [], "array", true, true, false, 295)) {
                    echo "#";
                    echo twig_escape_filter($this->env, (($__internal_compile_110 = (($__internal_compile_111 = (($__internal_compile_112 = ($context["app"] ?? null)) && is_array($__internal_compile_112) || $__internal_compile_112 instanceof ArrayAccess ? ($__internal_compile_112["combodo.portal.instance.routes"] ?? null) : null)) && is_array($__internal_compile_111) || $__internal_compile_111 instanceof ArrayAccess ? ($__internal_compile_111[twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 295)] ?? null) : null)) && is_array($__internal_compile_110) || $__internal_compile_110 instanceof ArrayAccess ? ($__internal_compile_110["hash"] ?? null) : null), "html", null, true);
                }
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true, false, 295), twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 295), [], "array", false, true, false, 295), "navigation_menu_attr", [], "array", true, true, false, 295)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_113 = (($__internal_compile_114 = (($__internal_compile_115 = ($context["app"] ?? null)) && is_array($__internal_compile_115) || $__internal_compile_115 instanceof ArrayAccess ? ($__internal_compile_115["combodo.portal.instance.routes"] ?? null) : null)) && is_array($__internal_compile_114) || $__internal_compile_114 instanceof ArrayAccess ? ($__internal_compile_114[twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 295)] ?? null) : null)) && is_array($__internal_compile_113) || $__internal_compile_113 instanceof ArrayAccess ? ($__internal_compile_113["navigation_menu_attr"] ?? null) : null));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        echo " ";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " ";
                if (twig_get_attribute($this->env, $this->source, $context["brick"], "GetModal", [], "any", false, false, false, 295)) {
                    echo "data-toggle=\"modal\" data-target=\"#modal-for-all\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"brick_icon ";
                // line 296
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brick"], "GetDecorationClassNavigationMenu", [], "any", false, false, false, 296), "html", null, true);
                echo "\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 297
                echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()(twig_get_attribute($this->env, $this->source, $context["brick"], "GetTitleNavigationMenu", [], "any", false, false, false, 297)), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 301
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
    }

    // line 306
    public function block_pPageUIExtensionNavigationMenuSidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 307
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true, false, 307), "html", [], "any", false, true, false, 307), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU"), [], "array", true, true, false, 307)) {
            // line 308
            echo "                            ";
            echo (($__internal_compile_116 = twig_get_attribute($this->env, $this->source, (($__internal_compile_117 = ($context["app"] ?? null)) && is_array($__internal_compile_117) || $__internal_compile_117 instanceof ArrayAccess ? ($__internal_compile_117["ui_extensions_helper"] ?? null) : null), "html", [], "any", false, false, false, 308)) && is_array($__internal_compile_116) || $__internal_compile_116 instanceof ArrayAccess ? ($__internal_compile_116[twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU")] ?? null) : null);
            echo "
                        ";
        }
        // line 310
        echo "                    ";
    }

    // line 314
    public function block_pNavigationSideMenuLogo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 315
        echo "\t\t\t\t\t\t\t\t";
        // line 316
        echo "\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, (($__internal_compile_118 = ($context["app"] ?? null)) && is_array($__internal_compile_118) || $__internal_compile_118 instanceof ArrayAccess ? ($__internal_compile_118["kernel"] ?? null) : null), "debug", [], "any", false, false, false, 316) == true)) {
            // line 317
            echo "\t\t\t\t\t\t\t\t\t<div style=\"position: fixed; bottom: 0px; left: 0px; z-index: 9999;\">Debug: Screen size <span class=\"hidden-sm hidden-md hidden-lg\">XS</span><span class=\"hidden-xs hidden-md hidden-lg\">SM</span><span class=\"hidden-xs hidden-sm hidden-lg\">MD</span><span class=\"hidden-xs hidden-sm hidden-md\">LG</span></div>
\t\t\t\t\t\t\t\t";
        }
        // line 319
        echo "\t\t\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_119 = ($context["app"] ?? null)) && is_array($__internal_compile_119) || $__internal_compile_119 instanceof ArrayAccess ? ($__internal_compile_119["combodo.conf.app_icon_url"] ?? null) : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_120 = ($context["app"] ?? null)) && is_array($__internal_compile_120) || $__internal_compile_120 instanceof ArrayAccess ? ($__internal_compile_120["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 319), "name", [], "any", false, false, false, 319)), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 320
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_121 = ($context["app"] ?? null)) && is_array($__internal_compile_121) || $__internal_compile_121 instanceof ArrayAccess ? ($__internal_compile_121["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 320), "logo", [], "any", false, false, false, 320), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_122 = ($context["app"] ?? null)) && is_array($__internal_compile_122) || $__internal_compile_122 instanceof ArrayAccess ? ($__internal_compile_122["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 320), "name", [], "any", false, false, false, 320)), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
    }

    // line 329
    public function block_pMainWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 330
        echo "\t\t<div class=\"container-fluid\" id=\"main-wrapper\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-9 col-md-10 col-sm-offset-3 col-md-offset-2\">
                    <section class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t";
        // line 335
        $this->loadTemplate("itop-portal-base/portal/templates/helpers/session_messages/session_messages.html.twig", "itop-portal-base/portal/templates/layout.html.twig", 335)->display($context);
        // line 336
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"row\" id=\"main-header\">
\t\t\t\t\t\t";
        // line 339
        $this->displayBlock('pMainHeader', $context, $blocks);
        // line 341
        echo "\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"row\" id=\"main-content\">
\t\t\t\t\t\t";
        // line 343
        $this->displayBlock('pMainContent', $context, $blocks);
        // line 345
        echo "\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 349
        $this->displayBlock('pPageUIExtensionMainContent', $context, $blocks);
        // line 354
        echo "\t\t</div>
\t\t";
    }

    // line 339
    public function block_pMainHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 340
        echo "\t\t\t\t\t\t";
    }

    // line 343
    public function block_pMainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 344
        echo "\t\t\t\t\t\t";
    }

    // line 349
    public function block_pPageUIExtensionMainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 350
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true, false, 350), "html", [], "any", false, true, false, 350), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_MAIN_CONTENT"), [], "array", true, true, false, 350)) {
            // line 351
            echo "                    ";
            echo (($__internal_compile_123 = twig_get_attribute($this->env, $this->source, (($__internal_compile_124 = ($context["app"] ?? null)) && is_array($__internal_compile_124) || $__internal_compile_124 instanceof ArrayAccess ? ($__internal_compile_124["ui_extensions_helper"] ?? null) : null), "html", [], "any", false, false, false, 351)) && is_array($__internal_compile_123) || $__internal_compile_123 instanceof ArrayAccess ? ($__internal_compile_123[twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_MAIN_CONTENT")] ?? null) : null);
            echo "
                ";
        }
        // line 353
        echo "\t\t\t";
    }

    // line 358
    public function block_pPageFooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 359
        echo "\t\t\t\t";
        // line 360
        echo "\t\t\t";
    }

    // line 363
    public function block_pModalForAllWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 364
        echo "\t\t\t<div class=\"modal fade\" id=\"modal-for-all\" role=\"dialog\" tabindex=\"-1\">
\t\t\t\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t";
        // line 367
        $this->loadTemplate("itop-portal-base/portal/templates/helpers/loader.html.twig", "itop-portal-base/portal/templates/layout.html.twig", 367)->display($context);
        // line 368
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
    }

    // line 372
    public function block_pModalForAlert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 373
        echo "\t\t\t<div class=\"modal fade\" id=\"modal-for-alert\" role=\"dialog\" tabindex=\"-1\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Portal:Button:Close"), "html", null, true);
        echo "\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\"></h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<div class=\"alert\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Portal:Button:Close"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
    }

    // line 392
    public function block_pPageOverlay($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 393
        echo "\t\t\t<div id=\"page_overlay\" class=\"global_overlay\">
\t\t\t\t<div class=\"overlay_content\">
\t\t\t\t\t";
        // line 395
        $this->loadTemplate("itop-portal-base/portal/templates/helpers/loader.html.twig", "itop-portal-base/portal/templates/layout.html.twig", 395)->display($context);
        // line 396
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
    }

    // line 400
    public function block_pPageUIExtensionBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 401
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true, false, 401), "html", [], "any", false, true, false, 401), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_BODY"), [], "array", true, true, false, 401)) {
            // line 402
            echo "\t\t\t\t";
            echo (($__internal_compile_125 = twig_get_attribute($this->env, $this->source, (($__internal_compile_126 = ($context["app"] ?? null)) && is_array($__internal_compile_126) || $__internal_compile_126 instanceof ArrayAccess ? ($__internal_compile_126["ui_extensions_helper"] ?? null) : null), "html", [], "any", false, false, false, 402)) && is_array($__internal_compile_125) || $__internal_compile_125 instanceof ArrayAccess ? ($__internal_compile_125[twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_BODY")] ?? null) : null);
            echo "
\t\t\t";
        }
        // line 404
        echo "\t\t";
    }

    // line 407
    public function block_pPageLiveScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 408
        echo "\t\t<script type=\"text/javascript\">
\t\t\t";
        // line 409
        $this->displayBlock('pPageLiveScriptHelpers', $context, $blocks);
        // line 478
        echo "
            \$(document).ready(function ()
            {
                const oBodyElem = \$('body');

                ";
        // line 483
        $this->displayBlock('pPageReadyScripts', $context, $blocks);
        // line 549
        echo "\t\t\t});
\t\t</script>
\t";
    }

    // line 409
    public function block_pPageLiveScriptHelpers($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 410
        echo "\t\t\t\t// Helper to get the application root url
\t\t\t\tvar GetAbsoluteUrlAppRoot = function()
\t\t\t\t{
\t\t\t\t\treturn '";
        // line 413
        echo twig_escape_filter($this->env, (($__internal_compile_127 = ($context["app"] ?? null)) && is_array($__internal_compile_127) || $__internal_compile_127 instanceof ArrayAccess ? ($__internal_compile_127["combodo.absolute_url"] ?? null) : null), "html", null, true);
        echo "';
\t\t\t\t};
\t\t\t\t// Note: We might want to expose URLs instead of this kind of stuff... 🤔
\t\t\t\tvar GetAddSessionMessageUrl = function()
\t\t\t\t{
\t\t\t\t\treturn '";
        // line 418
        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_128 = ($context["app"] ?? null)) && is_array($__internal_compile_128) || $__internal_compile_128 instanceof ArrayAccess ? ($__internal_compile_128["url_generator"] ?? null) : null), "generate", [0 => "p_session_message_add"], "method", false, false, false, 418);
        echo "';
\t\t\t\t};
\t\t\t\t/**
\t\t\t\t * @param sUrl {string} The URL to append the new param to
\t\t\t\t * @param sParamName {string} Name of the parameter
\t\t\t\t * @param sParamValue {string} Value of the param, needs to be already URL encoded
\t\t\t\t * @return {string} The sUrl parameters with the sParamName / sParamValue append at the right place
\t\t\t\t * @deprecated 3.0.0 N°4176
\t\t\t\t */
\t\t\t\tvar AddParameterToUrl = function(sUrl, sParamName, sParamValue)
\t\t\t\t{
\t\t\t\t\tsUrl += (sUrl.split('?')[1] ? '&':'?') + sParamName + '=' + sParamValue;
\t\t\t\t\treturn sUrl;
\t\t\t\t};
\t\t\t\t// Test is sString is a valid JSON string
\t\t\t\t// TODO 3.0.0: Move to CombodoGlobalToolbox and deprecate this one
\t\t\t\tvar IsJSONString = function(sString)
\t\t\t\t{
\t\t\t\t\ttry {
\t\t\t\t\t\tJSON.parse(sString);
\t\t\t\t\t} catch (oException) {
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\treturn true;
\t\t\t\t};
\t\t\t\t// TODO 3.0.0: Move to CombodoPortalToolbox and deprecate this one
\t\t\t\tvar GetContentLoaderTemplate = function()
\t\t\t\t{
\t\t\t\t\treturn '<div class=\"content_loader\"><div class=\"icon glyphicon glyphicon-refresh\"></div><div class=\"message\">";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Page:PleaseWait"), "html", null, true);
        echo "</div></div>';
\t\t\t\t};
\t\t\t\t// TODO 3.0.0: Move to CombodoPortalToolbox and deprecate this one
\t\t\t\tvar ShowLoginDialog = function()
\t\t\t\t{
                    var oModalElem = \$('#modal-for-alert').clone();
                    oModalElem.attr('id', '');
                    oModalElem.find('.modal-content .modal-header .modal-title').html('";
        // line 453
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Error:HTTP:401"), "js"), "html", null, true);
        echo "');
                    oModalElem.find('.modal-content .modal-body .alert').addClass('alert-danger').html('";
        // line 454
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Portal:ErrorUserLoggedOut"), "js"), "html", null, true);
        echo "');

                    oModalElem.find('.modal-content .modal-body button').replaceWith( \$('<button type=\"button\" class=\"btn btn-primary\" onclick=\"javascript:window.location.reload();\">";
        // line 456
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:LogOff:ClickHereToLoginAgain"), "js"), "html", null, true);
        echo "</button>') );

                    oModalElem.appendTo('body');
                    oModalElem.modal('show');
\t\t\t\t};
\t\t\t\t// TODO 3.0.0: Move to CombodoPortalToolbox and deprecate this one
\t\t\t\tvar ShowErrorDialog = function(sBody, sTitle)
\t\t\t\t{
\t\t\t\t    if(sTitle === undefined)
\t\t\t\t\t{
\t\t\t\t\t    sTitle = '";
        // line 466
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Error:HTTP:500"), "js"), "html", null, true);
        echo "';
\t\t\t\t\t}
\t\t\t\t    if(sBody === undefined)
\t\t\t\t\t{
                        sBody = '";
        // line 470
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getFilter('dict_format')->getCallable()("Error:XHR:Fail", twig_constant("ITOP_APPLICATION_SHORT")), "js"), "html", null, true);
        echo "';
\t\t\t\t\t}
\t\t\t\t\tvar oModalElem = \$('#modal-for-alert');
                    oModalElem.find('.modal-content .modal-header .modal-title').html(sTitle);
                    oModalElem.find('.modal-content .modal-body .alert').addClass('alert-danger').html(sBody);
                    oModalElem.modal('show');
\t\t\t\t};
\t\t\t";
    }

    // line 483
    public function block_pPageReadyScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 484
        echo "\t\t\t\t\t// Add proprietary header to identify our XHR calls
\t\t\t\t\t\$(document).ajaxSend(function(oEvent, oXHR, oOptions) {
\t\t\t\t\t\toXHR.setRequestHeader('X-Combodo-Ajax', 'true');
\t\t\t\t\t});
\t\t\t\t\t// Handle AJAX errors (exceptions (500), logout (401), ...)
\t\t\t\t\t\$(document).ajaxError(function(oEvent, oXHR, oSettings, sError){
\t\t\t\t\t    if(oXHR.status === 401)
\t\t\t\t\t\t{
\t\t\t\t\t\t    ShowLoginDialog();
\t\t\t\t\t\t}
                        else if(oXHR.status === 404)
                        {
                            ShowErrorDialog('";
        // line 496
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:ObjectDoesNotExist"), "js"), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Error:HTTP:404"), "js"), "html", null, true);
        echo "');
                        }
                      else if(oXHR.status === 0 && oXHR.readyState === 0)
                        {
                            //DO NOTHING the ajax call has been aborted
                        }
                        else if(oXHR.responseText !== undefined && IsJSONString(oXHR.responseText) === true)
                        {
                            var oData = JSON.parse(oXHR.responseText);
                            // Catching AJAX exception with detailed error.
                            if( (oData.error_message !== undefined) && (oData.error_title !== undefined) )
                            {
                                ShowErrorDialog(oData.error_message, oData.error_title);
                            } else
                            {
                                ShowErrorDialog();
                            }
                        } else
                        {
                            ShowErrorDialog();
                        }
                    });
                // All processing that should be done on an ajax return
                \$(document).ajaxSuccess(function ()
                {
                    // Init tooltips from async. markup, small timeout to allow markup to be built if necessary
                    setTimeout(function ()
                    {
                        CombodoTooltip.InitAllNonInstantiatedTooltips();
                    }, 1000);
                });

                // Enable tooltips based on existing HTML markup, for markup added dynamically after DOM ready (AJAX, ...) see .ajaxSuccess()...
                CombodoTooltip.InitAllNonInstantiatedTooltips();
                // ... object form which are handled with the following
                oBodyElem.on('form_built', function (oEvent)
                {
                    CombodoTooltip.InitAllNonInstantiatedTooltips(\$(oEvent.target), true);
                });
                // ... refresh of the dataTables
                oBodyElem.on('init.dt draw.dt', function (oEvent)
                {
                    CombodoTooltip.InitAllNonInstantiatedTooltips(\$(oEvent.target), true);
                });

                // Initialize confirmation message handler when a form with touched fields is closed
                oBodyElem.leave_handler({
                    'message': '";
        // line 543
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Portal:Form:Close:Warning"), "html", null, true);
        echo "',
                    'extra_events': {
                        'body': ['hide.bs.modal']
                    }
                });
                ";
    }

    // line 553
    public function block_pPageExtensionsScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 554
        echo "        ";
        // line 555
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (($__internal_compile_129 = ($context["app"] ?? null)) && is_array($__internal_compile_129) || $__internal_compile_129 instanceof ArrayAccess ? ($__internal_compile_129["ui_extensions_helper"] ?? null) : null), "js_inline", [], "any", false, false, false, 555))) {
            // line 556
            echo "\t\t\t<script type=\"text/javascript\">
\t\t\t\t";
            // line 557
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_130 = ($context["app"] ?? null)) && is_array($__internal_compile_130) || $__internal_compile_130 instanceof ArrayAccess ? ($__internal_compile_130["ui_extensions_helper"] ?? null) : null), "js_inline", [], "any", false, false, false, 557);
            echo "
\t\t\t</script>
        ";
        }
        // line 560
        echo "\t";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1577 => 560,  1571 => 557,  1568 => 556,  1565 => 555,  1563 => 554,  1559 => 553,  1549 => 543,  1497 => 496,  1483 => 484,  1479 => 483,  1467 => 470,  1460 => 466,  1447 => 456,  1442 => 454,  1438 => 453,  1428 => 446,  1397 => 418,  1389 => 413,  1384 => 410,  1380 => 409,  1374 => 549,  1372 => 483,  1365 => 478,  1363 => 409,  1360 => 408,  1356 => 407,  1352 => 404,  1346 => 402,  1343 => 401,  1339 => 400,  1333 => 396,  1331 => 395,  1327 => 393,  1323 => 392,  1312 => 384,  1302 => 377,  1296 => 373,  1292 => 372,  1285 => 368,  1283 => 367,  1278 => 364,  1274 => 363,  1270 => 360,  1268 => 359,  1264 => 358,  1260 => 353,  1254 => 351,  1251 => 350,  1247 => 349,  1243 => 344,  1239 => 343,  1235 => 340,  1231 => 339,  1226 => 354,  1224 => 349,  1218 => 345,  1216 => 343,  1212 => 341,  1210 => 339,  1205 => 336,  1203 => 335,  1196 => 330,  1192 => 329,  1183 => 320,  1176 => 319,  1172 => 317,  1169 => 316,  1167 => 315,  1163 => 314,  1159 => 310,  1153 => 308,  1150 => 307,  1146 => 306,  1141 => 302,  1135 => 301,  1128 => 297,  1124 => 296,  1097 => 295,  1088 => 294,  1085 => 293,  1081 => 292,  1075 => 289,  1070 => 287,  1064 => 286,  1061 => 285,  1057 => 284,  1052 => 325,  1048 => 323,  1046 => 314,  1043 => 313,  1041 => 312,  1038 => 311,  1036 => 306,  1032 => 304,  1030 => 284,  1018 => 278,  1014 => 276,  1011 => 275,  1009 => 274,  1003 => 273,  987 => 271,  984 => 270,  981 => 269,  977 => 268,  971 => 267,  964 => 263,  958 => 260,  952 => 257,  948 => 255,  944 => 254,  940 => 248,  934 => 246,  931 => 245,  927 => 244,  923 => 225,  917 => 224,  910 => 220,  906 => 219,  879 => 218,  870 => 217,  867 => 216,  863 => 215,  857 => 212,  852 => 210,  845 => 209,  841 => 208,  836 => 197,  832 => 195,  824 => 193,  822 => 192,  817 => 191,  813 => 190,  807 => 249,  805 => 244,  800 => 241,  792 => 239,  788 => 237,  785 => 236,  783 => 235,  777 => 234,  767 => 232,  764 => 231,  761 => 230,  757 => 229,  751 => 228,  748 => 227,  745 => 226,  743 => 208,  734 => 202,  730 => 201,  726 => 200,  723 => 199,  721 => 190,  711 => 182,  707 => 181,  703 => 327,  700 => 254,  697 => 252,  694 => 181,  692 => 180,  688 => 179,  684 => 177,  677 => 173,  673 => 172,  669 => 171,  666 => 170,  663 => 169,  659 => 168,  655 => 405,  653 => 400,  650 => 399,  648 => 392,  645 => 391,  642 => 372,  640 => 363,  636 => 361,  634 => 358,  630 => 356,  628 => 329,  625 => 328,  623 => 179,  620 => 178,  617 => 168,  613 => 167,  607 => 166,  603 => 164,  600 => 163,  591 => 161,  586 => 160,  583 => 159,  578 => 156,  574 => 155,  569 => 154,  565 => 152,  561 => 151,  557 => 150,  552 => 149,  548 => 147,  544 => 146,  540 => 145,  535 => 144,  531 => 142,  526 => 141,  521 => 138,  516 => 136,  511 => 135,  506 => 133,  501 => 131,  496 => 129,  492 => 127,  487 => 126,  482 => 124,  478 => 122,  474 => 121,  470 => 120,  466 => 119,  462 => 118,  458 => 117,  454 => 116,  449 => 115,  444 => 113,  439 => 111,  434 => 109,  430 => 107,  425 => 106,  421 => 104,  417 => 103,  413 => 102,  409 => 101,  405 => 100,  401 => 99,  397 => 98,  393 => 97,  389 => 96,  385 => 95,  381 => 94,  376 => 93,  370 => 91,  364 => 89,  362 => 88,  357 => 87,  353 => 86,  349 => 84,  343 => 81,  340 => 80,  337 => 79,  335 => 78,  331 => 77,  327 => 75,  324 => 74,  315 => 72,  310 => 71,  307 => 70,  305 => 69,  299 => 67,  296 => 66,  294 => 65,  291 => 64,  282 => 62,  277 => 61,  274 => 60,  270 => 58,  265 => 57,  260 => 55,  255 => 53,  251 => 51,  247 => 50,  243 => 49,  239 => 48,  234 => 47,  229 => 45,  224 => 43,  219 => 41,  215 => 39,  211 => 38,  207 => 37,  203 => 36,  199 => 35,  194 => 34,  189 => 32,  184 => 30,  182 => 29,  178 => 28,  165 => 25,  161 => 24,  157 => 23,  151 => 561,  149 => 553,  146 => 552,  144 => 407,  141 => 406,  139 => 167,  135 => 166,  132 => 165,  130 => 86,  127 => 85,  125 => 77,  122 => 76,  120 => 28,  115 => 26,  110 => 25,  107 => 23,  98 => 15,  94 => 13,  91 => 12,  88 => 11,  85 => 10,  81 => 8,  78 => 7,  75 => 6,  72 => 5,  70 => 4,  67 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/layout.html.twig", "D:\\laragon-www\\itop-3.1\\env-production\\itop-portal-base\\portal\\templates\\layout.html.twig");
    }
}
