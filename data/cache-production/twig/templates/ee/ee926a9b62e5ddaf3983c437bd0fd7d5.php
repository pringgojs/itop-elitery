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

/* base/layouts/tab-container/layout.js.twig */
class __TwigTemplate_bf284301bfdedd4dd26ce2d2b8e8bb03 extends Template
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
        echo "
";
        // line 4
        if ( !twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "isPrintable", [], "any", false, false, false, 4)) {
            // line 5
            echo "\$('#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 5), "html", null, true);
            echo "').tab_container({'remote_tab_load_dict': '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UIBlock:TabContainer:RemoteTabLoad"), "js"), "html", null, true);
            echo "'});
";
        } else {
            // line 7
            echo "
function refresh_status() {
    var loaded = true;
    \$('#";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 10), "html", null, true);
            echo "').find('.ibo-tab-container--tab-container').each(function (i, elt) {
        if (\$(elt).attr('data-status') != 'loaded')
        {
            loaded = false;
        }
    });
    if (loaded)
    {
        \$('#";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 18), "html", null, true);
            echo "').attr('data-status', 'loaded');
    }
}

";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["oTab"]) {
                // line 23
                echo "oHiddeableChapters['tab_";
                echo twig_escape_filter($this->env, $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, $context["oTab"], "GetId", [], "method", false, false, false, 23), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
                echo "'] = '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["oTab"], "GetTitle", [], "method", false, false, false, 23), "js"), "html", null, true);
                echo "';
";
                // line 24
                if ((twig_get_attribute($this->env, $this->source, $context["oTab"], "GetType", [], "method", false, false, false, 24) == twig_constant("TabManager::ENUM_TAB_TYPE_AJAX"))) {
                    // line 25
                    echo "\$.post('";
                    echo twig_get_attribute($this->env, $this->source, $context["oTab"], "GetUrl", [], "method", false, false, false, 25);
                    echo "', {printable: '1'}, function (data) {
    \$('#tab_";
                    // line 26
                    echo twig_escape_filter($this->env, $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, $context["oTab"], "GetId", [], "method", false, false, false, 26), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
                    echo " > .printable-tab-content').append(data);
    \$('#tab_";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, $context["oTab"], "GetId", [], "method", false, false, false, 27), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
                    echo "').attr('data-status', 'loaded');
    refresh_status();
});
";
                } else {
                    // line 31
                    echo "\$('#tab_";
                    echo twig_escape_filter($this->env, $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, $context["oTab"], "GetId", [], "method", false, false, false, 31), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
                    echo "').attr('data-status', 'loaded');
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oTab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "refresh_status();
";
        }
        // line 36
        echo "

";
    }

    public function getTemplateName()
    {
        return "base/layouts/tab-container/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 36,  112 => 34,  102 => 31,  95 => 27,  91 => 26,  86 => 25,  84 => 24,  77 => 23,  73 => 22,  66 => 18,  55 => 10,  50 => 7,  42 => 5,  40 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/tab-container/layout.js.twig", "D:\\laragon-www\\itop-3.1\\templates\\base\\layouts\\tab-container\\layout.js.twig");
    }
}
