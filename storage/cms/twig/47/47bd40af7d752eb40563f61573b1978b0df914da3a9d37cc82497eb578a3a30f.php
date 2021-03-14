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

/* C:\Users\askaz\Desktop\OpenServer\domains\rush.loc/themes/rush royal/partials/footer.htm */
class __TwigTemplate_efb3fd958b7c1c544b6e1be7e9c72e1a9064a710849b7a842dff7f88837e1b2b extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array("theme" => 1);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/theme.min.js");
        echo "\"></script>
\t";
        // line 6
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\askaz\\Desktop\\OpenServer\\domains\\rush.loc/themes/rush royal/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"{{ 'assets/js/theme.min.js' | theme }}\"></script>
\t{# Uncomment to view plugins assets for concatenation in app.js scripts & preprocessor styles
\t{% framework extras %}
\t{% scripts %}
\t#}

</body>
</html>", "C:\\Users\\askaz\\Desktop\\OpenServer\\domains\\rush.loc/themes/rush royal/partials/footer.htm", "");
    }
}
