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

/* base/components/datatable/layout.ready.js.twig */
class __TwigTemplate_ba9322f6c7ce3290de0055ae28c9fdfa extends Template
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
        $context["sListId"] = twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sListId"], "method", false, false, false, 3);
        // line 4
        $context["sListIDForVarSuffix"] = $this->env->getFilter('sanitize')->getCallable()(("" . ($context["sListId"] ?? null)), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME"));
        // line 5
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "iPageSize"], "method", false, false, false, 5))) {
            // line 6
            echo "    ";
            $context["iPageSize"] = twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "iPageSize"], "method", false, false, false, 6);
        } else {
            // line 8
            echo "    ";
            $context["iPageSize"] = 10;
        }
        // line 10
        echo "
\$('#";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 11), "html", null, true);
        echo "').closest(\"[role=dialog]\").on(\"dialogbeforeclose\", function () {
    \$('#";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 12), "html", null, true);
        echo "').DataTable().clear();
});

\$('#";
        // line 15
        echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
        echo "').data('target', 'ibo-datatables--outer');

if (\$('#";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 17), "html", null, true);
        echo "') != 'undefined' && \$.fn.dataTable.isDataTable('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 17), "html", null, true);
        echo "')) {
    \$('#";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 18), "html", null, true);
        echo "').DataTable().destroy(false);
}

var oTable";
        // line 21
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo " = \$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 21), "html", null, true);
        echo "').DataTable({
    language: {
        processing: \"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Processing"), "html", null, true);
        echo "\",
        search: \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Search"), "html", null, true);
        echo "\",
        lengthMenu: \"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:LengthMenu"), "html", null, true);
        echo "\",
        zeroRecords: \"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:ZeroRecords"), "html", null, true);
        echo "\",
        info: \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Info"), "html", null, true);
        echo "\",
        infoEmpty: \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:InfoEmpty"), "html", null, true);
        echo "\",
        infoFiltered: \"(";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:InfoFiltered"), "html", null, true);
        echo ")\",
        emptyTable: \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:EmptyTable"), "html", null, true);
        echo "\",
        errorMessage: \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Error"), "html", null, true);
        echo "\",
        buttonOk: \"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Button:Ok"), "html", null, true);
        echo "\",
        paginate: {
            first: \"<i class=\\\"fas fa-angle-double-left\\\"></i>\",
            previous: \"<i class=\\\"fas fa-angle-left\\\"></i>\",
            next: \"<i class=\\\"fas fa-angle-right\\\"></i>\",
            last: \"<i class=\\\"fas fa-angle-double-right\\\"></i>\"
        },
        aria: {
            sortAscending: \": ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Sort:Ascending"), "html", null, true);
        echo "\",
            sortDescending: \": ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Sort:Descending"), "html", null, true);
        echo "\"
        }
    },
    scrollX: true,
    ";
        // line 45
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sMaxHeight"], "method", false, false, false, 45))) {
            // line 46
            echo "    scrollY: \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sMaxHeight"], "method", false, false, false, 46), "html", null, true);
            echo "\",
    ";
        }
        // line 48
        echo "    scrollCollapse: true,
    ";
        // line 49
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "printVersion"], "method", false, false, false, 49))) {
            // line 50
            echo "    paging: false,
    info: false,
    ";
        }
        // line 53
        echo "    lengthMenu: [[ ";
        echo twig_escape_filter($this->env, ($context["iPageSize"] ?? null), "html", null, true);
        echo ",  ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 2), "html", null, true);
        echo ",  ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 3), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 4), "html", null, true);
        echo ", -1], [ ";
        echo twig_escape_filter($this->env, ($context["iPageSize"] ?? null), "html", null, true);
        echo ",  ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 2), "html", null, true);
        echo ",  ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 3), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (($context["iPageSize"] ?? null) * 4), "html", null, true);
        echo ", \"";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:DisplayLength:All"), "html", null, true);
        echo "\"]],
    dom: \"<'ibo-datatable--toolbar'<'ibo-datatable--toolbar-left' pl><'ibo-datatable--toolbar-right' i>>t<'ibo-datatable--toolbar'<'ibo-datatable--toolbar-left' pl><'ibo-datatable--toolbar-right' i>>\",
    ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sort"], "method", false, true, false, 55), 0, [], "array", true, true, false, 55)) {
            // line 56
            echo "    order: [[";
            echo twig_escape_filter($this->env, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOptions", [], "method", false, false, false, 56)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["sort"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, (($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOptions", [], "method", false, false, false, 56)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["sort"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null), "html", null, true);
            echo "']],
    ";
        } else {
            // line 58
            echo "    order: [],
    ";
        }
        // line 60
        echo "    ordering: true,
    ";
        // line 61
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method", false, false, false, 61))) {
            // line 62
            echo "    select: {
        style: \"";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method", false, false, false, 63) == "multiple")) {
                echo "multi";
            } else {
                echo "single";
            }
            echo "\",
        info: false
    },
    rowCallback: function (oRow, oData) {
        if (\$(this).closest('.ibo-panel--body').find('[name=selectionMode]').val() === \"negative\")
        {
            if (oSelectedItems";
            // line 69
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo ".indexOf(oData.id) === -1)
            {
                this.api().row(\$(oRow)).select();
                //   \$(oRow).addClass('selected');
                \$(oRow).find('td:first-child input').prop('checked', true);
            }
        }
        else
        {
            if (oSelectedItems";
            // line 78
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo ".indexOf(oData.id) > -1)
            {
                this.api().row(\$(oRow)).select();
                \$(oRow).find('td:first-child input').prop('checked', true);
            }
        }
    },
    drawCallback: function (settings) {
        if(settings.json)
        {
            \$(this).closest('.ibo-panel').find('.ibo-datatable--result-count').html(settings.json.recordsTotal);
        }
        if (\$(this).closest('.ibo-panel--body').find('[name=selectionMode]').val() === \"negative\")
        {
            \$(this).closest('.dataTables_wrapper').find('.checkAll')[0].checked = true;
        }
        bSelectAllowed";
            // line 94
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = true;

        // Hiding pagination if only one page
        if (\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate:last .paginate_button:not(.previous):not(.next)').length < 2)
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').hide();
        }
        else
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').show();
        }

        \$(this).closest('.dataTables_wrapper').unblock();

        // Disable hyperlinks if necessary
        ";
            // line 109
            if ( !(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "disable_hyperlinks"], "method", false, false, false, 109) === false)) {
                // line 110
                echo "        \$(\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 110), "html", null, true);
                echo " a\").on('click', function (e) {
                e.preventDefault();
            });
        ";
            }
            // line 114
            echo "        
    },
    ";
        } else {
            // line 117
            echo "    drawCallback: function (settings) {
        if(settings.json)
        {
            \$(this).closest('.ibo-panel').find('.ibo-datatable--result-count').html(settings.json.recordsTotal);
        }
        \$(this).closest('.dataTables_wrapper').unblock();
        // Hiding pagination if only one page
        if (\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate:last .paginate_button:not(.previous):not(.next)').length < 2)
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').hide();
        }
        else
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').show();
        }
        
        // Disable hyperlinks if necessary
        ";
            // line 134
            if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "disable_hyperlinks"], "method", false, false, false, 134) === true)) {
                // line 135
                echo "        \$(\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 135), "html", null, true);
                echo " a\").on('click', function (e) {
            e.preventDefault();
        });
        ";
            }
            // line 139
            echo "    },
    ";
        }
        // line 141
        echo "    rowId: \"id\",
    filter: false,
    retrieve: true,
    destroy: true,
    processing: true,
    serverSide: true,
    columns: [
        ";
        // line 148
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method", false, false, false, 148))) {
            // line 149
            echo "        {
            width: \"20px\",
            searchable: false,
            sortable: false,
            orderable: false,
            title:
                    ";
            // line 155
            if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method", false, false, false, 155) != "single")) {
                // line 156
                echo "                '<span class=\"row_input\"><input type=\"checkbox\" onclick=\"checkAllDataTable(\\'";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 156), "html", null, true);
                echo "\\',this.checked,\\'";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sListId"], "method", false, false, false, 156), "html", null, true);
                echo "\\');\" class=\"checkAll\" id=\"field_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 156), "html", null, true);
                echo "_check_all\" name=\"field_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 156), "html", null, true);
                echo "_check_all\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:SearchValue:CheckAll"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:SearchValue:UncheckAll"), "html", null, true);
                echo "\"/></span>'
            ";
            } else {
                // line 158
                echo "                '<span class=\"row_input\"><input type=\"checkbox\" style=\"display: none;\" onclick=\"checkAllDataTable(\\'";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 158), "html", null, true);
                echo "\\',this.checked,\\'";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sListId"], "method", false, false, false, 158), "html", null, true);
                echo "\\');\" class=\"checkAll\" id=\"field_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 158), "html", null, true);
                echo "_check_all\" name=\"field_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 158), "html", null, true);
                echo "_check_all\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:SearchValue:CheckAll"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:SearchValue:UncheckAll"), "html", null, true);
                echo "\"/></span>'
            ";
            }
            // line 159
            echo ",
            type: \"html\",
            data: \"id\",
            render: function (data, type, row) {
                let oCheckboxElem =
                ";
            // line 164
            if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method", false, false, false, 164) != "single")) {
                // line 165
                echo "                    \$('<span class=\"row_input\"><input type=\"checkbox\" class=\"selectList";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 165), "html", null, true);
                echo "\" name=\"selectObject[]\" value=\"'+row.id+'\"></span>');
                ";
            } else {
                // line 167
                echo "                     \$('<span class=\"row_input\"><input type=\"radio\" class=\"selectList";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 167), "html", null, true);
                echo "\" name=\"selectObject[]\" value=\"'+row.id+'\"></span>');
                ";
            }
            // line 169
            echo "                if (row.limited_access) {
                    oCheckboxElem.html('-');
                } else {
                    oCheckboxElem.find(':input').attr('data-object-id', row.id).attr('data-target-object-id', row.target_id);
                }
                return oCheckboxElem.prop('outerHTML');
            }
        },
        ";
        }
        // line 178
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDisplayColumns", [], "method", false, false, false, 178));
        foreach ($context['_seq'] as $context["_key"] => $context["aColumn"]) {
            // line 179
            echo "        {
            // width: 100,
            autoWidth: true,
            searchable: false,
            sortable: true,
            title: \"";
            // line 184
            echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["aColumn"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["attribute_label"] ?? null) : null), "html", null, true);
            echo "\",
            defaultContent: \"\",
            type: \"html\",
            metadata: {
                object_class: \"";
            // line 188
            echo twig_escape_filter($this->env, (($__internal_compile_5 = $context["aColumn"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["object_class"] ?? null) : null), "html", null, true);
            echo "\",
                attribute_code: \"";
            // line 189
            echo twig_escape_filter($this->env, (($__internal_compile_6 = $context["aColumn"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["attribute_code"] ?? null) : null), "html", null, true);
            echo "\",
                attribute_type: \"";
            // line 190
            echo twig_escape_filter($this->env, (($__internal_compile_7 = $context["aColumn"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["attribute_type"] ?? null) : null), "html", null, true);
            echo "\",
                attribute_label: \"";
            // line 191
            echo twig_escape_filter($this->env, (($__internal_compile_8 = $context["aColumn"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["attribute_label"] ?? null) : null), "html", null, true);
            echo "\"
            },
            data: \"";
            // line 193
            echo twig_escape_filter($this->env, (($__internal_compile_9 = $context["aColumn"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["class_alias"] ?? null) : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (($__internal_compile_10 = $context["aColumn"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["attribute_code"] ?? null) : null), "html", null, true);
            echo "\",
            createdCell: function (td, cellData, rowData, row, col) {
                \$(td).attr('data-object-class', '";
            // line 195
            echo twig_escape_filter($this->env, (($__internal_compile_11 = $context["aColumn"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["object_class"] ?? null) : null), "html", null, true);
            echo "');
                \$(td).attr('data-attribute-label', '";
            // line 196
            echo twig_escape_filter($this->env, (($__internal_compile_12 = $context["aColumn"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["attribute_label"] ?? null) : null), "html", null, true);
            echo "');
                ";
            // line 197
            if (((($__internal_compile_13 = $context["aColumn"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["attribute_code"] ?? null) : null) != "_key_")) {
                // line 198
                echo "                \$(td).attr('data-attribute-code', '";
                echo twig_escape_filter($this->env, (($__internal_compile_14 = $context["aColumn"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["attribute_code"] ?? null) : null), "html", null, true);
                echo "');
                \$(td).attr('data-attribute-type', '";
                // line 199
                echo twig_escape_filter($this->env, (($__internal_compile_15 = $context["aColumn"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["attribute_type"] ?? null) : null), "html", null, true);
                echo "');
                ";
            }
            // line 201
            echo "                if (rowData[\"";
            echo twig_escape_filter($this->env, (($__internal_compile_16 = $context["aColumn"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["class_alias"] ?? null) : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (($__internal_compile_17 = $context["aColumn"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["attribute_code"] ?? null) : null), "html", null, true);
            echo "/raw\"]) {
                    \$(td).attr('data-value-raw', rowData[\"";
            // line 202
            echo twig_escape_filter($this->env, (($__internal_compile_18 = $context["aColumn"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["class_alias"] ?? null) : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (($__internal_compile_19 = $context["aColumn"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["attribute_code"] ?? null) : null), "html", null, true);
            echo "/raw\"]);
                }
            },
            render: {
                display: function (data, type, row) {  ";
            // line 206
            echo (($__internal_compile_20 = $context["aColumn"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["render"] ?? null) : null);
            echo "},
                _: \"";
            // line 207
            echo twig_escape_filter($this->env, (($__internal_compile_21 = $context["aColumn"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["class_alias"] ?? null) : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (($__internal_compile_22 = $context["aColumn"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["attribute_code"] ?? null) : null), "html", null, true);
            echo "\"
            }
        },
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aColumn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRowActions", [], "method", false, false, false, 211)) {
            // line 212
            echo "            getRowActionsColumnDefinition('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 212), "html", null, true);
            echo "'),
        ";
        }
        // line 214
        echo "    ],
    ajax: \$.fn.dataTable.pipeline({
                url: \"";
        // line 216
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAjaxUrl", [], "method", false, false, false, 216), "html", null, true);
        echo "\",
                data: ";
        // line 217
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetJsonAjaxData", [], "method", false, false, false, 217);
        echo ",
                method: \"post\",
                pages: 1
            }, // number of pages to cache
            ";
        // line 221
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetJsonInitDisplayData", [], "method", false, false, false, 221);
        echo "
    ),
    createdRow: function (row, data, dataIndex) {
        if (data['@class'] !== undefined)
        {
            \$(row).addClass(data['@class']);
        }
    },
    initComplete: function () {
        if (this.api().page.info().pages < 2)
        {
            this.closest('.dataTables_wrapper').find('.dataTables_length').hide();
        }
        this.closest('.dataTables_wrapper').unblock();

        ";
        // line 236
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method", false, false, false, 236))) {
            // line 237
            echo "        updateDataTableSelection('";
            echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 237), "html", null, true);
            echo "');
        ";
            // line 238
            if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method", false, false, false, 238) != "single")) {
                // line 239
                echo "        this.api().on('select', function (oEvent, dt, type, indexes) {
            if (bSelectAllowed";
                // line 240
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ")
            {
                let aData = oTable";
                // line 242
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".rows(indexes).data().toArray();
                if (\$(this).closest('.ibo-panel--body').find('[name=selectionMode]').val() === \"negative\")
                {
                    // Checking input
                    \$('#";
                // line 246
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 246), "html", null, true);
                echo "  tbody tr.selected td:first-child input').prop('checked', true);
                    // Saving values in temp array
                    for (let i in aData)
                    {
                        let iItemId = aData[i].id;
                        if (oSelectedItems";
                // line 251
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId) > -1)
                        {
                            oSelectedItems";
                // line 253
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".splice(oSelectedItems";
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId), 1);
                            updateDataTableSelection('";
                // line 254
                echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 254), "html", null, true);
                echo "');
                        }
                    }
                }
                else
                {
                    // Checking input
                    \$('#";
                // line 261
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 261), "html", null, true);
                echo " tbody tr.selected td:first-child input').prop('checked', true);
                    // Saving values in temp array
                    for (let i in aData)
                    {
                        let iItemId = aData[i].id;
                        if (oSelectedItems";
                // line 266
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId) === -1)
                        {
                            oSelectedItems";
                // line 268
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".push(iItemId);
                            updateDataTableSelection('";
                // line 269
                echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 269), "html", null, true);
                echo "');
                        }
                    }
                }
            }
        });

        this.api().off('deselect').on('deselect', function (oEvent, dt, type, indexes) {
            if (bSelectAllowed";
                // line 277
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo " )
            {
                let aData = oTable";
                // line 279
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".rows(indexes).data().toArray();
                // Checking input
                \$('#";
                // line 281
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 281), "html", null, true);
                echo " tbody tr:not(.selected) td:first-child input').prop('checked', false);
                // Saving values in temp array
                if (\$(this).closest('.ibo-panel--body').find('[name=selectionMode]').val() === \"negative\")
                {
                    for (let i in aData)
                    {
                        let iItemId = aData[i].id;
                        if (oSelectedItems";
                // line 288
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId) === -1)
                        {
                            oSelectedItems";
                // line 290
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".push(iItemId);
                            updateDataTableSelection('";
                // line 291
                echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 291), "html", null, true);
                echo "');
                        }
                    }
                }
                else
                {
                    for (let i in aData)
                    {
                        let iItemId = aData[i].id;
                        if (oSelectedItems";
                // line 300
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId) > -1)
                        {
                            oSelectedItems";
                // line 302
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".splice(oSelectedItems";
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId), 1);
                            updateDataTableSelection('";
                // line 303
                echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 303), "html", null, true);
                echo "');
                        }
                    }
                }
            }
        });
        ";
            } else {
                // line 310
                echo "        this.api().off('select').on('select', function (oEvent, dt, type, indexes) {
            if (bSelectAllowed";
                // line 311
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo " )
            {
                let aData = oTable";
                // line 313
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".rows(indexes).data().toArray();
                // Checking input
                \$('#";
                // line 315
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 315), "html", null, true);
                echo "  tbody tr.selected td:first-child input').prop('checked', true);
                // Saving values in temp array
                for (let i in aData)
                {
                    let iItemId = aData[i].id;
                    if (oSelectedItems";
                // line 320
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId) === -1)
                    {
                        oSelectedItems";
                // line 322
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".push(iItemId);
                        updateDataTableSelection('";
                // line 323
                echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 323), "html", null, true);
                echo "');
                    }
                }
            }
        });

        this.api().off('deselect').on('deselect', function (oEvent, dt, type, indexes) {
            if (bSelectAllowed";
                // line 330
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo " )
            {
                let aData = oTable";
                // line 332
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".rows(indexes).data().toArray();

                // Checking input
                \$('#";
                // line 335
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 335), "html", null, true);
                echo " tr tbody tr:not(.selected) td:first-child input').prop('checked', false);
                // Saving values in temp array
                for (let i in aData)
                {
                    let iItemId = aData[i].id;
                    if (oSelectedItems";
                // line 340
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId) > -1)
                    {
                        oSelectedItems";
                // line 342
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".splice(oSelectedItems";
                echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                echo ".indexOf(iItemId), 1);
                        updateDataTableSelection('";
                // line 343
                echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 343), "html", null, true);
                echo "');
                    }
                }
            }
        });
        ";
            }
            // line 349
            echo "
        ";
            // line 350
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDisabledSelect", [], "method", false, false, false, 350))) {
                // line 351
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDisabledSelect", [], "method", false, false, false, 351));
                foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                    // line 352
                    echo "        \$('.selectList";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 352), "html", null, true);
                    echo "[value=";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "]').prop(\"disabled\", \"disabled\");
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 354
                echo "        ";
            }
            // line 355
            echo "        ";
        }
        // line 356
        echo "        
        // Set header and body datatables status as loaded
        this.attr('data-status', 'loaded');
        this.closest('.dataTables_scroll').find('.dataTables_scrollHead .ibo-datatable').attr('data-status', 'loaded');
    }
});

oTable";
        // line 363
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo ".select();

\$('#";
        // line 365
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 365), "html", null, true);
        echo "').on('refresh.datatable.itop', function (){
    oTable";
        // line 366
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo ".clearPipeline();
    oTable";
        // line 367
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo ".ajax.reload(null, false);
});

";
        // line 370
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetModalCreationHandler", [], "method", false, false, false, 370))) {
            // line 371
            echo "\$('body').on('open_creation_modal.object.itop','#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 371), "html", null, true);
            echo "', function (){
    ";
            // line 372
            echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetModalCreationHandler", [], "method", false, false, false, 372);
            echo "
});
";
        }
        // line 375
        echo "
";
        // line 376
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sCountSelector"], "method", false, false, false, 376))) {
            // line 377
            echo "\$('#";
            echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
            echo " [name=\"selectionCount\"]').bind('change', function () {
    \$('";
            // line 378
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sCountSelector"], "method", false, false, false, 378), "html", null, true);
            echo "').val(\$('#";
            echo twig_escape_filter($this->env, ($context["sListId"] ?? null), "html", null, true);
            echo " [name=\"selectionCount\"]').val());
    \$('";
            // line 379
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sCountSelector"], "method", false, false, false, 379), "html", null, true);
            echo "').trigger('change');
});
";
        }
        // line 382
        echo "
\$('#datatable_dlg_";
        // line 383
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 383), "html", null, true);
        echo "').dialog(
        {
            autoOpen: false,
            title: \"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:ListConfigurationTitle"), "html", null, true);
        echo "\",
            width: 500,
            modal: true,
            open: function () {
                \$('#datatable_dlg_";
        // line 390
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 390), "html", null, true);
        echo "').find('[name=action]').val(\"none\");
            },
            close: function (event, ui) { //save data and refresh
                if (\$('#datatable_dlg_";
        // line 393
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 393), "html", null, true);
        echo "').find('[name=action]').val() === \"none\")
                {
                    \$('#datatable_dlg_";
        // line 395
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 395), "html", null, true);
        echo "').DataTableSettings('onDlgCancel');
                }
            },
            buttons: [
                {
                    text: \"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Button:Cancel"), "html", null, true);
        echo "\",
                    class: \"ibo-is-alternative ibo-is-neutral\",
                    click: function() {
                        \$(this).dialog( \"close\" );
                    }
                },
                {
                    text: \"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Button:Ok"), "html", null, true);
        echo "\",
                    class: \"ibo-is-regular ibo-is-primary\",
                    click: function() {
                        \$(this).DataTableSettings('onDlgOk');
                    }
                }
            ]
        });

var aOptions";
        // line 416
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo " = {
    sListId: '";
        // line 417
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 417), "html", null, true);
        echo "',
    oColumns: ";
        // line 418
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetResultColumnsAsJson", [], "method", false, false, false, 418);
        echo ",
    sSelectMode: \"";
        // line 419
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method", false, false, false, 419), "html", null, true);
        echo "\",
    sSelectedItemsName: \"oSelectedItems";
        // line 420
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "\",
    sViewLink: '";
        // line 421
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "bViewLink"], "method", false, false, false, 421), "html", null, true);
        echo "',
    iPageSize: ";
        // line 422
        echo twig_escape_filter($this->env, ($context["iPageSize"] ?? null), "html", null, true);
        echo ",
    oClassAliases: JSON.parse('";
        // line 423
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "oClassAliases"], "method", false, false, false, 423);
        echo "'),
    sTableId: '";
        // line 424
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sTableId"], "method", false, false, false, 424), "html", null, true);
        echo "',
    sRenderUrl: \"";
        // line 425
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAjaxUrl", [], "method", false, false, false, 425), "html", null, true);
        echo "\",
    oData: ";
        // line 426
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetJsonAjaxData", [], "method", false, false, false, 426);
        echo ",
    oDefaultSettings: ";
        // line 427
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "oDefaultSettings"], "method", false, false, false, 427);
        echo ",
    oLabels: {moveup: \"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Button:MoveUp"), "html", null, true);
        echo "\", movedown: \"";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Button:MoveDown"), "html", null, true);
        echo "\"},
    bHasRowActions: ";
        // line 429
        echo twig_escape_filter($this->env, var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRowActions", [], "method", false, false, false, 429)), "html", null, true);
        echo ",
};

if (\$('#datatable_dlg_";
        // line 432
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 432), "html", null, true);
        echo "').hasClass('itop-datatable'))
{
    \$('#datatable_dlg_";
        // line 434
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 434), "html", null, true);
        echo "').DataTableSettings('destroy');
}
\$('#datatable_dlg_";
        // line 436
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 436), "html", null, true);
        echo "').DataTableSettings(aOptions";
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo ");

if(window.ResizeObserver){
        let oTable";
        // line 439
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout = null;
        const oTable";
        // line 440
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "Resize = new ResizeObserver(function(){
            clearTimeout(oTable";
        // line 441
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout);
            oTable";
        // line 442
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout = setTimeout(function(){
                \$('#";
        // line 443
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 443), "html", null, true);
        echo "').DataTable().columns.adjust();
            }, 120);
        });
        oTable";
        // line 446
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "Resize.observe(\$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 446), "html", null, true);
        echo "')[0]);
}

";
        // line 449
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRowActions", [], "method", false, false, false, 449)) {
            // line 450
            echo "    ";
            $this->loadTemplate("base/components/datatable/row-actions/handler.js.twig", "base/components/datatable/layout.ready.js.twig", 450)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "base/components/datatable/layout.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1033 => 450,  1031 => 449,  1023 => 446,  1017 => 443,  1013 => 442,  1009 => 441,  1005 => 440,  1001 => 439,  993 => 436,  988 => 434,  983 => 432,  977 => 429,  971 => 428,  967 => 427,  963 => 426,  959 => 425,  955 => 424,  951 => 423,  947 => 422,  943 => 421,  939 => 420,  935 => 419,  931 => 418,  927 => 417,  923 => 416,  911 => 407,  901 => 400,  893 => 395,  888 => 393,  882 => 390,  875 => 386,  869 => 383,  866 => 382,  860 => 379,  854 => 378,  849 => 377,  847 => 376,  844 => 375,  838 => 372,  833 => 371,  831 => 370,  825 => 367,  821 => 366,  817 => 365,  812 => 363,  803 => 356,  800 => 355,  797 => 354,  786 => 352,  781 => 351,  779 => 350,  776 => 349,  765 => 343,  759 => 342,  754 => 340,  746 => 335,  740 => 332,  735 => 330,  723 => 323,  719 => 322,  714 => 320,  706 => 315,  701 => 313,  696 => 311,  693 => 310,  681 => 303,  675 => 302,  670 => 300,  656 => 291,  652 => 290,  647 => 288,  637 => 281,  632 => 279,  627 => 277,  614 => 269,  610 => 268,  605 => 266,  597 => 261,  585 => 254,  579 => 253,  574 => 251,  566 => 246,  559 => 242,  554 => 240,  551 => 239,  549 => 238,  542 => 237,  540 => 236,  522 => 221,  515 => 217,  511 => 216,  507 => 214,  501 => 212,  498 => 211,  486 => 207,  482 => 206,  473 => 202,  466 => 201,  461 => 199,  456 => 198,  454 => 197,  450 => 196,  446 => 195,  439 => 193,  434 => 191,  430 => 190,  426 => 189,  422 => 188,  415 => 184,  408 => 179,  403 => 178,  392 => 169,  386 => 167,  380 => 165,  378 => 164,  371 => 159,  355 => 158,  339 => 156,  337 => 155,  329 => 149,  327 => 148,  318 => 141,  314 => 139,  306 => 135,  304 => 134,  285 => 117,  280 => 114,  272 => 110,  270 => 109,  252 => 94,  233 => 78,  221 => 69,  208 => 63,  205 => 62,  203 => 61,  200 => 60,  196 => 58,  188 => 56,  186 => 55,  164 => 53,  159 => 50,  157 => 49,  154 => 48,  148 => 46,  146 => 45,  139 => 41,  135 => 40,  124 => 32,  120 => 31,  116 => 30,  112 => 29,  108 => 28,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  81 => 21,  75 => 18,  69 => 17,  64 => 15,  58 => 12,  54 => 11,  51 => 10,  47 => 8,  43 => 6,  41 => 5,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/layout.ready.js.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\components\\datatable\\layout.ready.js.twig");
    }
}
