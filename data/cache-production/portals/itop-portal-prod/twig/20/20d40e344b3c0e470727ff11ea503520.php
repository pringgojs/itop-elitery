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

/* itop-portal-base/portal/templates/helpers/tagset_clic_handler.js.twig */
class __TwigTemplate_8cb374a359923683cddc5b0a7230ec5f extends Template
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
        echo "/**
 * When clicking on a TagSet item in a list (BrowseBrick or ManageBrick), filters the list using the item label
 * @since 2.6.0 N°931 AttributeTagSet
 */
\$(\"#main-content\").on(\"click\", \".table.dataTable .attribute.attribute-set.attribute-tag-set > .attribute-set-item\", function () {
\tvar \$this = \$(this),
\t\t\$dataTableWrapper = \$this.closest(\".dataTables_wrapper\"),
\t\t\$searchField = \$dataTableWrapper.find(\".dataTables_filter input.form-control\"),
\t\tiNbInputsFound = \$searchField.length;

\tif (iNbInputsFound === 0)
\t{
\t\treturn;
\t}
\tif (iNbInputsFound > 1)
\t{
\t\treturn;
\t}

\tvar sTagLabel = \$this.text();
\t\$searchField.prop(\"value\", sTagLabel);
\t\$searchField.trigger(\"keyup\");
});";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/helpers/tagset_clic_handler.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/helpers/tagset_clic_handler.js.twig", "D:\\laragon-www\\itop-3.1\\env-production\\itop-portal-base\\portal\\templates\\helpers\\tagset_clic_handler.js.twig");
    }
}
