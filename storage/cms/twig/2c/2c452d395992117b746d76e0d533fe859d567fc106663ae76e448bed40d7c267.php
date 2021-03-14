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

/* C:\Users\askaz\Desktop\OpenServer\domains\rush.loc/themes/rush royal/partials/home-header.htm */
class __TwigTemplate_d83d76550792bec863b2305e4825ef69fa0c921f8ad64d80dc135ba8cdba1511 extends \Twig\Template
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
        $tags = array("for" => 32);
        $filters = array("media" => 9, "escape" => 9, "raw" => 50, "resize" => 65);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['media', 'escape', 'raw', 'resize'],
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
        echo "<!--#set var=\"title\" value=\"Create Cool Slider\" -->
<!--#include virtual=\"/parts/header.html\" -->

<header class=\"home-header\">

    <div class=\"top-line\">
        <a href=\"/\" class=\"logo\">
\t\t\t<span class=\"logo__img-wrapper\">
\t\t\t\t<img src=\"";
        // line 9
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 9), "logo_image", [], "any", false, false, true, 9), 9, $this->source));
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 9), "logo_text", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\" class=\"logo__image\">
\t\t\t</span>
            <span class=\"logo__text\">";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 11), "logo_text", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</span>
        </a>
        <div class=\"top-line__decoration\"></div>
        <div class=\"top-line__contacts\">
            Телефон: <span class=\"top-line__numbers\">";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 15), "phone", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</span>
            <span class=\"top-line__separator\"></span>
            <span class=\"top-line__address\">Адрес: <span class=\"top-line__text\">";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 17), "address", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</span></span>
        </div>
        <div class=\"top-line__decoration\"></div>
        <div class=\"menu-button-container\">
            <a href=\"#\" class=\"menu-button\"></a>
        </div>
    </div>

    <div class=\"home-header__content\">

        <aside class=\"home-aside\">

            <div class=\"home-aside__decoration\"></div>
            <div class=\"home-aside__soc\">
                <div class=\"home-aside__soc-items\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 32), "social", [], "any", false, false, true, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 33
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "link", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\" class=\"soc-item\" target=\"_blank\"><img src=\"";
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "image", [], "any", false, false, true, 33), 33, $this->source));
            echo "\" alt=\"Профили компаний\"></a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </div>
            </div>

            <div class=\"home-aside__share-icon\"></div>

        </aside>

        <div class=\"slider-container\">

            <div class=\"slider-text\">

                <div class=\"swiper-wrapper\">
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 47), "landing_1_slider", [], "any", false, false, true, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 48
            echo "                        <div class=\"swiper-slide slider-text__slide\">
                            <div class=\"slider-text__content\">
                                <h2 class=\"slider-text__heading\">";
            // line 50
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "header", [], "any", false, false, true, 50), 50, $this->source);
            echo "</h2>
                                <p class=\"slider-text__desc\">";
            // line 51
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "description", [], "any", false, false, true, 51), 51, $this->source);
            echo "</p>
                                <button data-micromodal-close=\"modal-1\" class=\"button button_slider\"><span class=\"button__text\">Оставить заявку</span></button>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </div>

            </div>

            <div class=\"slider-img\">

                <div class=\"swiper-wrapper\">
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 63), "landing_1_slider", [], "any", false, false, true, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 64
            echo "                    <div class=\"swiper-slide slider-img__slide\">
                        <div class=\"slider-img__bg\" data-swiper-parallax=\"20%\" style=\"background-image: url(";
            // line 65
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "image", [], "any", false, false, true, 65), 65, $this->source)), 2560, 1440, false, ["mode" => "crop", "quality" => 80]]);
            echo " );\"></div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </div>

            </div>

            <div class=\"slider-bottom\">

                <div class=\"slider-share\">
                    <div class=\"slider-share__items\">
                        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 76), "share", [], "any", false, false, true, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 77
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "link", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "\" class=\"soc-item slider-share__item\" target=\"_blank\"><img src=\"";
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "image", [], "any", false, false, true, 77), 77, $this->source));
            echo "\" alt=\"Лого соц. сети\"></a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                    </div>
                </div>

                <div class=\"slider-pagination mousehide\">
                    <div class=\"swiper-pagination\"></div>
                </div>

                <div class=\"slider-scrollbar\">
                    <div class=\"swiper-scrollbar\"></div>
                </div>

                <div class=\"slider-navigation\">
                    <div class=\"slider-navigation__container\">
                        <div class=\"swiper-button-prev\"></div>
                        <div class=\"swiper-button-next\"></div>
                    </div>
                </div>

            </div>

            <div class=\"slider-pagination-count\">
                <span class=\"current\">01</span> / <span class=\"total\"></span></div>
        </div>

        <div class=\"slider-pagination-current\">01<span class=\"slider-pagination-current__dot\">.</span></div>

        <div class=\"slider-gear\"></div>

    </div>

</header>

<!--#include virtual=\"/parts/footer.html\" -->";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\askaz\\Desktop\\OpenServer\\domains\\rush.loc/themes/rush royal/partials/home-header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 79,  200 => 77,  196 => 76,  186 => 68,  177 => 65,  174 => 64,  170 => 63,  161 => 56,  150 => 51,  146 => 50,  142 => 48,  138 => 47,  124 => 35,  113 => 33,  109 => 32,  91 => 17,  86 => 15,  79 => 11,  72 => 9,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--#set var=\"title\" value=\"Create Cool Slider\" -->
<!--#include virtual=\"/parts/header.html\" -->

<header class=\"home-header\">

    <div class=\"top-line\">
        <a href=\"/\" class=\"logo\">
\t\t\t<span class=\"logo__img-wrapper\">
\t\t\t\t<img src=\"{{ this.theme.logo_image | media }}\" alt=\"{{ this.theme.logo_text }}\" class=\"logo__image\">
\t\t\t</span>
            <span class=\"logo__text\">{{ this.theme.logo_text }}</span>
        </a>
        <div class=\"top-line__decoration\"></div>
        <div class=\"top-line__contacts\">
            Телефон: <span class=\"top-line__numbers\">{{ this.theme.phone }}</span>
            <span class=\"top-line__separator\"></span>
            <span class=\"top-line__address\">Адрес: <span class=\"top-line__text\">{{ this.theme.address }}</span></span>
        </div>
        <div class=\"top-line__decoration\"></div>
        <div class=\"menu-button-container\">
            <a href=\"#\" class=\"menu-button\"></a>
        </div>
    </div>

    <div class=\"home-header__content\">

        <aside class=\"home-aside\">

            <div class=\"home-aside__decoration\"></div>
            <div class=\"home-aside__soc\">
                <div class=\"home-aside__soc-items\">
                    {% for field in this.theme.social %}
                        <a href=\"{{ field.link }}\" class=\"soc-item\" target=\"_blank\"><img src=\"{{ field.image | media }}\" alt=\"Профили компаний\"></a>
                    {% endfor %}
                </div>
            </div>

            <div class=\"home-aside__share-icon\"></div>

        </aside>

        <div class=\"slider-container\">

            <div class=\"slider-text\">

                <div class=\"swiper-wrapper\">
                    {% for field in this.theme.landing_1_slider %}
                        <div class=\"swiper-slide slider-text__slide\">
                            <div class=\"slider-text__content\">
                                <h2 class=\"slider-text__heading\">{{ field.header | raw }}</h2>
                                <p class=\"slider-text__desc\">{{ field.description | raw }}</p>
                                <button data-micromodal-close=\"modal-1\" class=\"button button_slider\"><span class=\"button__text\">Оставить заявку</span></button>
                            </div>
                        </div>
                    {% endfor %}
                </div>

            </div>

            <div class=\"slider-img\">

                <div class=\"swiper-wrapper\">
                    {% for field in this.theme.landing_1_slider %}
                    <div class=\"swiper-slide slider-img__slide\">
                        <div class=\"slider-img__bg\" data-swiper-parallax=\"20%\" style=\"background-image: url({{ field.image| media | resize(2560, 1440, false, { mode: 'crop', 'quality': 80 }) }} );\"></div>
                    </div>
                    {% endfor %}
                </div>

            </div>

            <div class=\"slider-bottom\">

                <div class=\"slider-share\">
                    <div class=\"slider-share__items\">
                        {% for field in this.theme.share %}
                            <a href=\"{{ field.link }}\" class=\"soc-item slider-share__item\" target=\"_blank\"><img src=\"{{ field.image | media }}\" alt=\"Лого соц. сети\"></a>
                        {% endfor %}
                    </div>
                </div>

                <div class=\"slider-pagination mousehide\">
                    <div class=\"swiper-pagination\"></div>
                </div>

                <div class=\"slider-scrollbar\">
                    <div class=\"swiper-scrollbar\"></div>
                </div>

                <div class=\"slider-navigation\">
                    <div class=\"slider-navigation__container\">
                        <div class=\"swiper-button-prev\"></div>
                        <div class=\"swiper-button-next\"></div>
                    </div>
                </div>

            </div>

            <div class=\"slider-pagination-count\">
                <span class=\"current\">01</span> / <span class=\"total\"></span></div>
        </div>

        <div class=\"slider-pagination-current\">01<span class=\"slider-pagination-current__dot\">.</span></div>

        <div class=\"slider-gear\"></div>

    </div>

</header>

<!--#include virtual=\"/parts/footer.html\" -->", "C:\\Users\\askaz\\Desktop\\OpenServer\\domains\\rush.loc/themes/rush royal/partials/home-header.htm", "");
    }
}
