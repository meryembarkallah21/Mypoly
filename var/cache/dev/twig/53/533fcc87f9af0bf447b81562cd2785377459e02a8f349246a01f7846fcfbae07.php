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

/* admin/ec/new.html.twig */
class __TwigTemplate_76ba5f8f316917f433bac53affa5dfb53bb8cd803a031574b6782d035bc98ec1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ec/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ec/new.html.twig"));

        $this->parent = $this->loadTemplate("admin/parametre/index.html.twig", "admin/ec/new.html.twig", 1);
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

        echo "New Ec";
        
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
                Créer Un Elément Constitutif
            </div>
            <div class=\"card-body\">
                ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
                <table>
                    <tr>
                        <td width=\"300px\">Unité d'Enseignement</td>
                        <td ";
        // line 24
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "ue", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "valid", [], "any", false, false, false, 24)) {
            echo "errors";
        }
        echo " width=\"500px\">
                            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "ue", [], "any", false, false, false, 25), 'widget');
        echo "
                        </td>
                    </tr>

                    <tr>
                        <td width=\"300px\">Nom</td>
                        <td ";
        // line 31
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "valid", [], "any", false, false, false, 31)) {
            echo "errors";
        }
        echo " width=\"500px\">
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), 'widget');
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td width=\"300px\">Code</td>
                        <td ";
        // line 37
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "code", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "valid", [], "any", false, false, false, 37)) {
            echo "errors";
        }
        echo " width=\"500px\">
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "code", [], "any", false, false, false, 38), 'widget');
        echo "
                        </td>
                    </tr>

                    <tr>
                        <td width=\"300px\">Prof</td>
                        <td width=\"500px\">
                            <select class=\"form-control validate\" name=\"profs\" required>
                                <option value=\"\" >--- Choisir Prof ---</option>
                                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prof"]) || array_key_exists("prof", $context) ? $context["prof"] : (function () { throw new RuntimeError('Variable "prof" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 48), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td width=\"300px\">Crédit</td>
                        <td ";
        // line 56
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "coeff", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "valid", [], "any", false, false, false, 56)) {
            echo "errors";
        }
        echo " width=\"500px\">
                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "coeff", [], "any", false, false, false, 57), 'widget');
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td width=\"300px\">Status</td>
                        <td ";
        // line 62
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "status", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "valid", [], "any", false, false, false, 62)) {
            echo "errors";
        }
        echo " width=\"500px\">
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "status", [], "any", false, false, false, 63), 'widget');
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><br><button class=\"btn btn-danger\">";
        // line 68
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 68, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button></td>
                    </tr>
                </table>
                ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        ";
        // line 74
        $this->loadTemplate("admin/ec/affiche.html.twig", "admin/ec/new.html.twig", 74)->display($context);
        // line 75
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/ec/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 75,  221 => 74,  215 => 71,  209 => 68,  201 => 63,  195 => 62,  187 => 57,  181 => 56,  173 => 50,  162 => 48,  158 => 47,  146 => 38,  140 => 37,  132 => 32,  126 => 31,  117 => 25,  111 => 24,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/parametre/index.html.twig' %}

{% block title %}New Ec{% endblock %}

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
                Créer Un Elément Constitutif
            </div>
            <div class=\"card-body\">
                {{ form_start(form) }}
                <table>
                    <tr>
                        <td width=\"300px\">Unité d'Enseignement</td>
                        <td {% if not form.ue.vars.valid %}errors{% endif %} width=\"500px\">
                            {{ form_widget(form.ue) }}
                        </td>
                    </tr>

                    <tr>
                        <td width=\"300px\">Nom</td>
                        <td {% if not form.name.vars.valid %}errors{% endif %} width=\"500px\">
                            {{ form_widget(form.name) }}
                        </td>
                    </tr>
                    <tr>
                        <td width=\"300px\">Code</td>
                        <td {% if not form.code.vars.valid %}errors{% endif %} width=\"500px\">
                            {{ form_widget(form.code) }}
                        </td>
                    </tr>

                    <tr>
                        <td width=\"300px\">Prof</td>
                        <td width=\"500px\">
                            <select class=\"form-control validate\" name=\"profs\" required>
                                <option value=\"\" >--- Choisir Prof ---</option>
                                {%for item in prof %}
                                    <option value=\"{{item.id}}\">{{item.name}}</option>
                                {%endfor%}
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td width=\"300px\">Crédit</td>
                        <td {% if not form.coeff.vars.valid %}errors{% endif %} width=\"500px\">
                            {{ form_widget(form.coeff) }}
                        </td>
                    </tr>
                    <tr>
                        <td width=\"300px\">Status</td>
                        <td {% if not form.status.vars.valid %}errors{% endif %} width=\"500px\">
                            {{ form_widget(form.status) }}
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><br><button class=\"btn btn-danger\">{{ button_label|default('Enregistrer') }}</button></td>
                    </tr>
                </table>
                {{ form_end(form) }}
            </div>
        </div>
        {% include 'admin/ec/affiche.html.twig' %}
    </div>
{% endblock %}
", "admin/ec/new.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\ec\\new.html.twig");
    }
}
