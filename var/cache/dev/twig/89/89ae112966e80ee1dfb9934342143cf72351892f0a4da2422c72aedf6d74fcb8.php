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

/* vitrine/timeline.html.twig */
class __TwigTemplate_bb32a97410a69d254258269a330466725f0721e71744991bfa8047afef79b2ce extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/timeline.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/timeline.html.twig"));

        // line 1
        echo "<section class=\"page-section\">
    <div class=\"container\">
        <div class=\"section-title row text-center\">
            <div class=\"col-md-8 offset-md-2\">
                <h3>NOS MENTIONS DE FORMATION</h3>
            </div>
        </div>
        <div class=\"timeline\">
            <div class=\"timeline__wrap\">
                <div class=\"timeline__items\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mentions"]) || array_key_exists("mentions", $context) ? $context["mentions"] : (function () { throw new RuntimeError('Variable "mentions" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "                        <div class=\"timeline__item\">
                            <div class=\"timeline__content\">
                                <h2><img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/fichier_icon/" . twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 14))), "html", null, true);
            echo "\" alt=\"...\" width=\"40px\" height=\"40px\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo " </h2>
                                <p></p>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  63 => 14,  59 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"page-section\">
    <div class=\"container\">
        <div class=\"section-title row text-center\">
            <div class=\"col-md-8 offset-md-2\">
                <h3>NOS MENTIONS DE FORMATION</h3>
            </div>
        </div>
        <div class=\"timeline\">
            <div class=\"timeline__wrap\">
                <div class=\"timeline__items\">
                    {% for item in mentions %}
                        <div class=\"timeline__item\">
                            <div class=\"timeline__content\">
                                <h2><img src=\"{{ asset('images/fichier_icon/'~item.icon ) }}\" alt=\"...\" width=\"40px\" height=\"40px\"> {{ item.name }} </h2>
                                <p></p>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</section>", "vitrine/timeline.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\vitrine\\timeline.html.twig");
    }
}
