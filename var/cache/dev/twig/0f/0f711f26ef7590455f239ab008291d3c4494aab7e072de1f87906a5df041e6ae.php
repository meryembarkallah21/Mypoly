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

/* admin/parcours/new.html.twig */
class __TwigTemplate_fe7806a1e9b328bb67731c08ba7931bb1fccbaa786a45ccda834cfaaae38261d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'contenu' => [$this, 'block_contenu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/parametre/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parcours/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parcours/new.html.twig"));

        $this->parent = $this->loadTemplate("admin/parametre/index.html.twig", "admin/parcours/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Parcours";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "    <style>
        #card-header{
            background-color: #0f6674;
            color:white;
        }
    </style>
    <div class=\"col-xl-12\">
        <div class=\"card mb-4\">
            <div class=\"card-header\" id=\"card-header\">
                <i class=\"fas fa-chart-bar mr-1\"></i>
                Créer Un Parcours
            </div>
            <div class=\"card-body\">
                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
                <table>
                    <tr>
                        <td width=\"300px\">Mention</td>
                        <td ";
        // line 23
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "code", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "valid", [], "any", false, false, false, 23)) {
            echo "errors";
        }
        echo " width=\"500px\">
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "code", [], "any", false, false, false, 24), 'widget');
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td width=\"300px\">Niveau</td>
                        <td ";
        // line 29
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "cycle", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "valid", [], "any", false, false, false, 29)) {
            echo "errors";
        }
        echo " width=\"500px\">
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "cycle", [], "any", false, false, false, 30), 'widget');
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td width=\"300px\">Nom</td>
                        <td ";
        // line 35
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "valid", [], "any", false, false, false, 35)) {
            echo "errors";
        }
        echo " width=\"500px\">
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "fullName", [], "any", false, false, false, 36), 'widget');
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td width=\"300px\">Code</td>
                        <td ";
        // line 41
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "fullName", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "valid", [], "any", false, false, false, 41)) {
            echo "errors";
        }
        echo " width=\"500px\">
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), 'widget');
        echo "
                        </td>
                    </tr>


                    <tr>
                        <td></td>
                        <td><br><button class=\"btn btn-primary\">";
        // line 49
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 49, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button></td>
                    </tr>
                </table>
                ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        ";
        // line 55
        $this->loadTemplate("admin/parcours/affiche.html.twig", "admin/parcours/new.html.twig", 55)->display($context);
        // line 56
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/parcours/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 56,  180 => 55,  174 => 52,  168 => 49,  158 => 42,  152 => 41,  144 => 36,  138 => 35,  130 => 30,  124 => 29,  116 => 24,  110 => 23,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/parametre/index.html.twig' %}

{% block title %}New Parcours{% endblock %}

{% block contenu %}
    <style>
        #card-header{
            background-color: #0f6674;
            color:white;
        }
    </style>
    <div class=\"col-xl-12\">
        <div class=\"card mb-4\">
            <div class=\"card-header\" id=\"card-header\">
                <i class=\"fas fa-chart-bar mr-1\"></i>
                Créer Un Parcours
            </div>
            <div class=\"card-body\">
                {{ form_start(form) }}
                <table>
                    <tr>
                        <td width=\"300px\">Mention</td>
                        <td {% if not form.code.vars.valid %}errors{% endif %} width=\"500px\">
                            {{ form_widget(form.code) }}
                        </td>
                    </tr>
                    <tr>
                        <td width=\"300px\">Niveau</td>
                        <td {% if not form.cycle.vars.valid %}errors{% endif %} width=\"500px\">
                            {{ form_widget(form.cycle) }}
                        </td>
                    </tr>
                    <tr>
                        <td width=\"300px\">Nom</td>
                        <td {% if not form.name.vars.valid %}errors{% endif %} width=\"500px\">
                            {{ form_widget(form.fullName) }}
                        </td>
                    </tr>
                    <tr>
                        <td width=\"300px\">Code</td>
                        <td {% if not form.fullName.vars.valid %}errors{% endif %} width=\"500px\">
                            {{ form_widget(form.name) }}
                        </td>
                    </tr>


                    <tr>
                        <td></td>
                        <td><br><button class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button></td>
                    </tr>
                </table>
                {{ form_end(form) }}
            </div>
        </div>
        {% include 'admin/parcours/affiche.html.twig' %}
    </div>
{% endblock %}
", "admin/parcours/new.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\parcours\\new.html.twig");
    }
}
