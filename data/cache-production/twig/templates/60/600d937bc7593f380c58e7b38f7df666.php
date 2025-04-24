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

/* pages/backoffice/ajaxpage/layout.html.twig */
class __TwigTemplate_be14cf39bd4f3f6a109da7bf6176b965 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iboPageJsInlineEarly' => [$this, 'block_iboPageJsInlineEarly'],
            'iboPageJsInlineLive' => [$this, 'block_iboPageJsInlineLive'],
            'iboPageJsFiles' => [$this, 'block_iboPageJsFiles'],
            'iboPageJsInlineOnDomReady' => [$this, 'block_iboPageJsInlineOnDomReady'],
            'iboPageCssFiles' => [$this, 'block_iboPageCssFiles'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "    ";
        $context["sId"] = $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oLayout"] ?? null), "GetId", [], "method", false, false, false, 4), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME"));
        // line 5
        echo "    ";
        $context["bHasOnInitOrOnDomReadyScripts"] = ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineOnInit", [], "any", false, false, false, 5)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineOnDomReady", [], "any", false, false, false, 5)));
        // line 6
        echo "    ";
        if (($context["bEscapeContent"] ?? null)) {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getFunction('render_block')->getCallable()(($context["oLayout"] ?? null), ["aPage" => ($context["aPage"] ?? null)]));
            echo "
    ";
        } else {
            // line 9
            echo "        ";
            echo $this->env->getFunction('render_block')->getCallable()(($context["oLayout"] ?? null), ["aPage" => ($context["aPage"] ?? null)]);
            echo "
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('iboPageJsInlineEarly', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('iboPageJsInlineLive', $context, $blocks);
        // line 29
        echo "
    ";
        // line 30
        if (($context["bHasOnInitOrOnDomReadyScripts"] ?? null)) {
            // line 31
            echo "        <script type=\"text/javascript\">
            let fOnJsFilesLoaded";
            // line 32
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo " = function (fResolve) {
                ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineOnInit", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
                // line 34
                echo "                ";
                echo $context["sJsInline"];
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsInline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineOnDomReady", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
                // line 38
                echo "                ";
                echo $context["sJsInline"];
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsInline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                fResolve();
            }
        </script>
    ";
        }
        // line 44
        echo "    
    ";
        // line 45
        $context["sPromiseId"] = twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "sPromiseId", [], "any", false, false, false, 45);
        // line 46
        echo "\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsFiles", [], "any", false, false, false, 46))) {
            // line 47
            echo "        ";
            $this->displayBlock('iboPageJsFiles', $context, $blocks);
            // line 164
            echo "    ";
        } else {
            // line 165
            echo "        ";
            if (($context["bHasOnInitOrOnDomReadyScripts"] ?? null)) {
                // line 166
                echo "            ";
                $this->displayBlock('iboPageJsInlineOnDomReady', $context, $blocks);
                // line 173
                echo "        ";
            }
            // line 174
            echo "    ";
        }
        // line 175
        echo "
    ";
        // line 176
        if ( !twig_test_empty(($context["aDeferredBlocks"] ?? null))) {
            // line 177
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aDeferredBlocks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oBlock"]) {
                // line 178
                echo "            ";
                echo $this->env->getFunction('render_block')->getCallable()($context["oBlock"], ["aPage" => ($context["aPage"] ?? null)]);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "    ";
        }
        // line 181
        echo "
    ";
        // line 182
        if (($context["sDeferredContent"] ?? null)) {
            // line 183
            echo "        <script type=\"text/javascript\">
            \$('body').append('";
            // line 184
            echo ($context["sDeferredContent"] ?? null);
            echo "');
        </script>
    ";
        }
        // line 187
        echo "
    ";
        // line 188
        $this->displayBlock('iboPageCssFiles', $context, $blocks);
        // line 195
        echo "
    ";
        // line 196
        echo twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "sCapturedOutput", [], "any", false, false, false, 196);
        echo "

";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_0_);
    }

    // line 12
    public function block_iboPageJsInlineEarly($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineEarly", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
            // line 14
            echo "            ";
            // line 15
            echo "            <script type=\"text/javascript\">
            ";
            // line 16
            echo $context["sJsInline"];
            echo "
            </script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsInline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    ";
    }

    // line 21
    public function block_iboPageJsInlineLive($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineLive", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
            // line 23
            echo "            ";
            // line 24
            echo "            <script type=\"text/javascript\">
                ";
            // line 25
            echo $context["sJsInline"];
            echo "
            </script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsInline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
    }

    // line 47
    public function block_iboPageJsFiles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "            <script type=\"text/javascript\">
                ";
        // line 49
        if ((($context["bHasOnInitOrOnDomReadyScripts"] ?? null) == false)) {
            // line 50
            echo "                // Define a dummy empty callback if there's no script to execute
                let fOnJsFilesLoaded";
            // line 51
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo " = function (fResolve) {
                    fResolve();
                }
                ";
        }
        // line 55
        echo "                
                window['";
        // line 56
        echo twig_escape_filter($this->env, ($context["sPromiseId"] ?? null), "html", null, true);
        echo "'] = new Promise(function (fAllJsFilesResolve, fAllJsFilesReject) {
                    /**
                     * @type {Array} aJsFilesToLoad Files required by the current \\AjaxPage
                     *
                     * For each file:
                     * - \"id\": Used as an identifier to check if file is already being handled
                     * - \"url\" is the URL that will be used for loading. It should include any relevant query args, including the cache buster
                     *
                     * ```
                     * [
                     *  {\"id\": \"https://itop/js/foo.js\", \"url\": \"https://itop/js/foo.js?cache_buster=123},
                     *  {\"id\": \"https://itop/js/bar.js\", \"url\": \"https://itop/js/bar.js?a=b&cache_buster=123\"},
                     *  ...
                     * ]
                     * ```
                     */
                    
                     // If these constants aren't defined by the main page, define them (global) ourselves
                    if (typeof aLoadedJsFilesRegister === \"undefined\") {
                        Object.defineProperty(window, \"aLoadedJsFilesRegister\", {
                            value: new Map(),
                            writable: false,
                            configurable: false,
                            enumerable: true
                        });
                    }      
                    
                    if (typeof aLoadedJsFilesResolveCallbacks === \"undefined\") {
                        Object.defineProperty(window, \"aLoadedJsFilesResolveCallbacks\", {
                            value: new Map(),
                            writable: false,
                            configurable: false,
                            enumerable: true
                        });
                    }
                    
                    let aJsFilesToLoad = [];
                    /**
                     * @type {Array} aJsFilesToLoadByOtherRequests Files required by the current \\AjaxPage but that are already being handled by another request (done or ongoing)
                     */
                    let aJsFilesToLoadByOtherRequests = [];

                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsFiles", [], "any", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsFile"]) {
            // line 99
            echo "                        aJsFilesToLoad.push({
                            \"id\": \"";
            // line 100
            echo $context["sJsFile"];
            echo "\",
                            \"url\": \"";
            // line 101
            echo $this->env->getFilter('add_itop_version')->getCallable()($context["sJsFile"]);
            echo "\"
                        });

                        // If file is already present in the register (see it declaration in \\WebPage TWIG template), let its original requester load it
                        if (aLoadedJsFilesRegister.has(\"";
            // line 105
            echo $context["sJsFile"];
            echo "\") === true) {
                            aJsFilesToLoadByOtherRequests.push(\"";
            // line 106
            echo $context["sJsFile"];
            echo "\");
                        }
                        // Otherwise add it to register and initialize corresponding promise
                        else {
                            aLoadedJsFilesRegister.set(\"";
            // line 110
            echo $context["sJsFile"];
            echo "\", new Promise(function(fJsFileResolve) {
                                aLoadedJsFilesResolveCallbacks.set(\"";
            // line 111
            echo $context["sJsFile"];
            echo "\", fJsFileResolve);
                            }));
                        }
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsFile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "
                    let iCurrentIdx = 0;
                    let iFilesToLoadCount = aJsFilesToLoad.length;
                    if (iFilesToLoadCount > 0)
                    {
                        let fLoadScript";
        // line 120
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo " = function () {
                            let sCurrentFileId = aJsFilesToLoad[iCurrentIdx][\"id\"];
                            let sCurrentFileUrl = aJsFilesToLoad[iCurrentIdx][\"url\"];

                            /** @type {Promise} oPromise Promise to use once file is loaded */
                            let oPromise = null;
                            // If file is handled by another request, retrieve the existing promise
                            if (\$.inArray(sCurrentFileId, aJsFilesToLoadByOtherRequests) !== -1) {
                                oPromise = aLoadedJsFilesRegister.get(sCurrentFileId)
                            }
                            // Otherwise create its own promise to load it
                            else {
                                oPromise = \$.when(
                                        \$.ajax({
                                            url: sCurrentFileUrl,
                                            dataType: 'script',
                                            cache: true
                                        }),
                                        aLoadedJsFilesResolveCallbacks.get(sCurrentFileId)()
                                );
                            }

                            // Only once file is loaded (by the request or another), proceed to next step
                            oPromise.then(function () {
                                iCurrentIdx++;
                                if (iCurrentIdx !== iFilesToLoadCount)
                                {
                                    fLoadScript";
        // line 147
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "();
                                }
                                else
                                {
                                    fOnJsFilesLoaded";
        // line 151
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "(fAllJsFilesResolve);
                                }
                            });
                        };
                        fLoadScript";
        // line 155
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "();
                    }
                    else
                    {
                        fOnJsFilesLoaded";
        // line 159
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "(fAllJsFilesResolve);
                    }
                });
            </script>
        ";
    }

    // line 166
    public function block_iboPageJsInlineOnDomReady($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 167
        echo "                <script type=\"text/javascript\">
                    window['";
        // line 168
        echo twig_escape_filter($this->env, ($context["sPromiseId"] ?? null), "html", null, true);
        echo "'] = new Promise(function (fNoJsFileResolve, fNoJsFileReject) {
                        fOnJsFilesLoaded";
        // line 169
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "(fNoJsFileResolve);
                    });
                </script>
            ";
    }

    // line 188
    public function block_iboPageCssFiles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "aCssFiles", [], "any", false, false, false, 189));
        foreach ($context['_seq'] as $context["_key"] => $context["aCssFileData"]) {
            // line 190
            echo "            <script type=\"text/javascript\">
                if (!\$('link[href=\"";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aCssFileData"], "link", [], "any", false, false, false, 191), "html", null, true);
            echo "\"]').length) \$('<link href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aCssFileData"], "link", [], "any", false, false, false, 191), "html", null, true);
            echo "\" rel=\"stylesheet\">').appendTo('head');
            </script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aCssFileData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "    ";
    }

    public function getTemplateName()
    {
        return "pages/backoffice/ajaxpage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 194,  464 => 191,  461 => 190,  456 => 189,  452 => 188,  444 => 169,  440 => 168,  437 => 167,  433 => 166,  424 => 159,  417 => 155,  410 => 151,  403 => 147,  373 => 120,  366 => 115,  356 => 111,  352 => 110,  345 => 106,  341 => 105,  334 => 101,  330 => 100,  327 => 99,  323 => 98,  278 => 56,  275 => 55,  268 => 51,  265 => 50,  263 => 49,  260 => 48,  256 => 47,  252 => 28,  243 => 25,  240 => 24,  238 => 23,  233 => 22,  229 => 21,  225 => 19,  216 => 16,  213 => 15,  211 => 14,  206 => 13,  202 => 12,  198 => 3,  192 => 196,  189 => 195,  187 => 188,  184 => 187,  178 => 184,  175 => 183,  173 => 182,  170 => 181,  167 => 180,  158 => 178,  153 => 177,  151 => 176,  148 => 175,  145 => 174,  142 => 173,  139 => 166,  136 => 165,  133 => 164,  130 => 47,  127 => 46,  125 => 45,  122 => 44,  116 => 40,  107 => 38,  103 => 37,  100 => 36,  91 => 34,  87 => 33,  83 => 32,  80 => 31,  78 => 30,  75 => 29,  73 => 21,  70 => 20,  68 => 12,  65 => 11,  59 => 9,  53 => 7,  50 => 6,  47 => 5,  44 => 4,  42 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/backoffice/ajaxpage/layout.html.twig", "D:\\laragon-www\\itop-3.1\\templates\\pages\\backoffice\\ajaxpage\\layout.html.twig");
    }
}
