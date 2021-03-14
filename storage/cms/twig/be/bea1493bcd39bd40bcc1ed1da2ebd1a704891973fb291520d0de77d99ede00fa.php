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

/* C:\Users\askaz\Desktop\OpenServer\domains\rush.loc/themes/rush royal/partials/global/header.htm */
class __TwigTemplate_6a577bd1aebb14b3caf80ba3eac1738a0a0c6d35b3edb4f1b5e3210606dcd307 extends \Twig\Template
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
        $filters = array("escape" => 8, "theme" => 12);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'theme'],
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
        echo "<!DOCTYPE html>
<html lang=\"ru\">

<head>

\t<meta charset=\"utf-8\">

\t<title>";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "landing_1_title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</title>
\t<meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 9), "landing_1_description", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t<link rel=\"icon\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/favicon/favicon.png");
        echo "\">

\t<link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.min.css");
        echo "\" rel=\"stylesheet\">
\t";
        // line 18
        echo "
</head>

<body class=\"is_";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 21), "id", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        ((($context["class"] ?? null)) ? (print (twig_escape_filter($this->env, (" " . ($context["class"] ?? null)), "html", null, true))) : (print ("")));
        echo "\">";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\askaz\\Desktop\\OpenServer\\domains\\rush.loc/themes/rush royal/partials/global/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 21,  90 => 18,  86 => 14,  81 => 12,  75 => 9,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ru\">

<head>

\t<meta charset=\"utf-8\">

\t<title>{{ this.theme.landing_1_title }}</title>
\t<meta name=\"description\" content=\"{{ this.theme.landing_1_description }}\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t<link rel=\"icon\" href=\"{{ 'assets/favicon/favicon.png' | theme }}\">

\t<link href=\"{{ 'assets/css/theme.min.css' | theme }}\" rel=\"stylesheet\">
\t{# Uncomment to view plugins CSS assets for preprocessor styles import
\t{% styles %}
\t#}

</head>

<body class=\"is_{{ this.page.id }}{{ class ? ' ' ~ class }}\">", "C:\\Users\\askaz\\Desktop\\OpenServer\\domains\\rush.loc/themes/rush royal/partials/global/header.htm", "");
    }
}
