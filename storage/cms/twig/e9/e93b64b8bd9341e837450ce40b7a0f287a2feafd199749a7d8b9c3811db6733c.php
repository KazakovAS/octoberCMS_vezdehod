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

/* C:\Users\askaz\Desktop\OpenServer\domains\rush.loc/themes/rush royal/partials/modal.htm */
class __TwigTemplate_76419e8e55a2984b67a545e8f81e833391edc4595d66967b29ea9446c3dd3325 extends \Twig\Template
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
        $filters = array("escape" => 10);
        $functions = array("form_token" => 11);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['form_token']
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
        echo "<div class=\"modal micromodal-slide\" id=\"modal-1\" aria-hidden=\"true\">
\t<div class=\"modal__overlay\" tabindex=\"-1\" data-micromodal-close>
\t\t<div class=\"modal__container\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"modal-1-title\">
\t\t\t<header class=\"modal__header\">
\t\t\t\t<h2 class=\"modal__title\" id=\"modal-1-title\">
\t\t\t\t\tОставить заявку
\t\t\t\t</h2>
\t\t\t\t<button class=\"modal__close\" aria-label=\"Close modal\" data-micromodal-close></button>
\t\t\t</header>
\t\t\t<form data-request=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["sliderForm"] ?? null), 10, $this->source), "html", null, true);
        echo "::onFormSubmit\">
                ";
        // line 11
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
                <div id=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["sliderForm"] ?? null), 12, $this->source), "html", null, true);
        echo "_forms_flash\" class=\"popup_form-alert\"></div>
\t\t\t\t<main class=\"modal__content\" id=\"modal-1-content\">
\t\t\t\t\t<input class=\"form-input modal__input\" type=\"text\" name=\"VH-Name\" placeholder=\"Ваше имя...\">
\t\t\t\t\t<input class=\"form-input modal__input\" type=\"text\" name=\"VH-Phone\" placeholder=\"Ваш телефон...\" required>
\t\t\t\t\t<textarea class=\"form-input modal__input\" name=\"Message\" placeholder=\"Сообщение...\"></textarea>
\t\t\t\t</main>
\t\t\t\t<footer class=\"modal__footer\">
\t\t\t\t\t<button id=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["sliderForm"] ?? null), 19, $this->source), "html", null, true);
        echo "SubmitButton\" class=\"button\"><span class=\"button__text\">Отправить</span></button>
\t\t\t\t</footer>
\t\t\t</form>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\askaz\\Desktop\\OpenServer\\domains\\rush.loc/themes/rush royal/partials/modal.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  81 => 12,  77 => 11,  73 => 10,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal micromodal-slide\" id=\"modal-1\" aria-hidden=\"true\">
\t<div class=\"modal__overlay\" tabindex=\"-1\" data-micromodal-close>
\t\t<div class=\"modal__container\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"modal-1-title\">
\t\t\t<header class=\"modal__header\">
\t\t\t\t<h2 class=\"modal__title\" id=\"modal-1-title\">
\t\t\t\t\tОставить заявку
\t\t\t\t</h2>
\t\t\t\t<button class=\"modal__close\" aria-label=\"Close modal\" data-micromodal-close></button>
\t\t\t</header>
\t\t\t<form data-request=\"{{ sliderForm }}::onFormSubmit\">
                {{ form_token() }}
                <div id=\"{{ sliderForm }}_forms_flash\" class=\"popup_form-alert\"></div>
\t\t\t\t<main class=\"modal__content\" id=\"modal-1-content\">
\t\t\t\t\t<input class=\"form-input modal__input\" type=\"text\" name=\"VH-Name\" placeholder=\"Ваше имя...\">
\t\t\t\t\t<input class=\"form-input modal__input\" type=\"text\" name=\"VH-Phone\" placeholder=\"Ваш телефон...\" required>
\t\t\t\t\t<textarea class=\"form-input modal__input\" name=\"Message\" placeholder=\"Сообщение...\"></textarea>
\t\t\t\t</main>
\t\t\t\t<footer class=\"modal__footer\">
\t\t\t\t\t<button id=\"{{ sliderForm }}SubmitButton\" class=\"button\"><span class=\"button__text\">Отправить</span></button>
\t\t\t\t</footer>
\t\t\t</form>
\t\t</div>
\t</div>
</div>", "C:\\Users\\askaz\\Desktop\\OpenServer\\domains\\rush.loc/themes/rush royal/partials/modal.htm", "");
    }
}
