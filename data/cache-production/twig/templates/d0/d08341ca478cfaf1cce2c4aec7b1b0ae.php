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

/* base/components/datatable/config/layout.html.twig */
class __TwigTemplate_af6c28452441188cda21aaac39c9c4e5 extends Template
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
        // line 1
        echo "<div id=\"datatable_dlg_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 1), "html", null, true);
        echo "\" style=\"display: none;\" class=\" ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlockCode", [], "method", false, false, false, 1), "html", null, true);
        echo "\" role=\"datatable-settings-dialog\">
    <input type=\"hidden\" name=\"action\" value=\"none\">
    <form id=\"form_";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 3), "html", null, true);
        echo "\" onsubmit=\"return false\">
        <div>
            <input id=\"dtbl_dlg_settings_";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 5), "html", null, true);
        echo "\" type=\"radio\" name=\"settings\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "bUseCustomSettings"], "method", false, false, false, 5) == false)) {
            echo " checked ";
        }
        echo " value=\"defaults\">
            <label for=\"dtbl_dlg_settings_";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 6), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:UseDefaultSettings"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"ibo-datatableconfig--attributes-panel ibo-panel ibo-is-neutral ibo-is-opened\" data-role=\"ibo-panel\">
            <div class=\"ibo-panel--header\">
                <div class=\"ibo-panel--header-left\">
                    <input id=\"dtbl_dlg_specific_";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 11), "html", null, true);
        echo "\" type=\"radio\" class=\"specific_settings\" name=\"settings\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "bUseCustomSettings"], "method", false, false, false, 11)) {
            echo " checked ";
        }
        echo " value=\"specific\">
                    <label for=\"dtbl_dlg_specific_";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 12), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:UseSpecificSettings"), "html", null, true);
        echo "</label>
                </div>
            </div>
            <div class=\"ibo-panel--body\">
                ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:ColumnsAndSortOrder"), "html", null, true);
        echo "<br>
                <div class=\"ibo-multi-column\">
                    <div class=\"ibo-column ibo-without-margin ibo-list-column\">
                        <ul class=\"sortable_field_list\" id=\"sfl_";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 19), "html", null, true);
        echo "\">
                        </ul>
                    </div>
                </div>
                <p> ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Display_X_ItemsPerPage_prefix"), "html", null, true);
        echo "<input class=\"ibo-datatableconfig--attributes-panel--per-page--input\" type=\"text\" size=\"4\" name=\"page_size\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "iPageSize"], "method", false, false, false, 23), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Display_X_ItemsPerPage_suffix"), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"ibo-datatableconfig--settings-panel ibo-panel ibo-is-neutral ibo-is-opened\" data-role=\"ibo-panel\">
            <div class=\"ibo-panel--header\">
                <div class=\"ibo-panel--header-left\">
                    <input id=\"dtbl_dlg_save_";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 29), "html", null, true);
        echo "\" type=\"checkbox\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sTableId"], "method", false, false, false, 29) != null)) {
            echo "checked";
        }
        echo " name=\"save_settings\">
                    <label for=\"dtbl_dlg_save_";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 30), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:UseSavetheSettings"), "html", null, true);
        echo "</label>
                </div>
            </div>
            <div class=\"ibo-panel--body\">
                <div class=\"ibo-datatableconfig--settings-panel--options-container\">
                    <div class=\"ibo-datatableconfig--settings-panel--option\">
                        <input id=\"dtbl_dlg_this_list_";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 36), "html", null, true);
        echo "\" type=\"radio\" name=\"scope\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sTableId"], "method", false, false, false, 36) != null)) {
            echo " checked ";
        } else {
            echo " disabled=\"disabled\" stay-disabled=\"true\"";
        }
        echo " value=\"this_list\">
                        <label for=\"dtbl_dlg_this_list_";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 37), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:OnlyForThisList"), "html", null, true);
        echo "</label>
                    </div>
                </div>
                <div class=\"ibo-datatableconfig--settings-panel--options-container\">
                    <div class=\"ibo-datatableconfig--settings-panel--option\">
                    <input id=\"dtbl_dlg_all_";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 42), "html", null, true);
        echo "\" type=\"radio\" name=\"scope\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sTableId"], "method", false, false, false, 42) == null)) {
            echo " checked ";
        }
        echo " value=\"defaults\">
                    <label for=\"dtbl_dlg_all_";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 43), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:ForAllLists"), "html", null, true);
        echo "</label>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "base/components/datatable/config/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 43,  150 => 42,  140 => 37,  130 => 36,  119 => 30,  111 => 29,  98 => 23,  91 => 19,  85 => 16,  76 => 12,  68 => 11,  58 => 6,  50 => 5,  45 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/config/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\datatable\\config\\layout.html.twig");
    }
}
