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

/* etudiant/espace/agenda/agenda.html.twig */
class __TwigTemplate_1788b7371015249b31d10516ed009b156a771e54a3e36e652a33e6a5d9fdaff3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "etudiant/espace/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/agenda/agenda.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/agenda/agenda.html.twig"));

        $this->parent = $this->loadTemplate("etudiant/espace/base.html.twig", "etudiant/espace/agenda/agenda.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Agendas";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "    <style>
        .tb{
            color: royalblue;
        }

    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Agendas</h1>
        <ol class=\"breadcrumb mb-4\">
            <li><a href=\"\" class=\"tb\">Tableau de bord /</a></li>
            <li class=\"breadcrumb-item active\">Agendas
        </ol>
        <div class=\"container-fluid\">

            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>De</th>
                                <th>A</th>
                                <th>Date</th>
                                <th>Mention</th>
                            </tr>
                            </thead>
                            <tbody>

                            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agendas"]) || array_key_exists("agendas", $context) ? $context["agendas"] : (function () { throw new RuntimeError('Variable "agendas" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["agenda"]) {
            // line 36
            echo "                                ";
            $context["cpt"] = 1;
            // line 37
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 37, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["inscrire"]) {
                // line 38
                echo "                                    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, $context["agenda"], "mention", [], "any", false, false, false, 38)))) {
                    // line 39
                    echo "                                    <tr>
                                        <td style=\"background-color:";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "backgroundColor", [], "any", false, false, false, 40), "html", null, true);
                    echo ";color:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "textColor", [], "any", false, false, false, 40), "html", null, true);
                    echo ";border:2px solid ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "borderColor", [], "any", false, false, false, 40), "html", null, true);
                    echo ";\"><b>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "title", [], "any", false, false, false, 40), "html", null, true);
                    echo "</b></td>
                                        <td style=\"border:2px solid ";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "borderColor", [], "any", false, false, false, 41), "html", null, true);
                    echo ";\">";
                    echo twig_get_attribute($this->env, $this->source, $context["agenda"], "description", [], "any", false, false, false, 41);
                    echo "</td>
                                        <td style=\"border:2px solid ";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "borderColor", [], "any", false, false, false, 42), "html", null, true);
                    echo ";\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "start", [], "any", false, false, false, 42), "H:i:s"), "html", null, true);
                    echo "</td>
                                        <td style=\"border:2px solid ";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "borderColor", [], "any", false, false, false, 43), "html", null, true);
                    echo ";\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "end", [], "any", false, false, false, 43), "H:i:s"), "html", null, true);
                    echo "</td>
                                        <td style=\"border:2px solid ";
                    // line 44
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "borderColor", [], "any", false, false, false, 44), "html", null, true);
                    echo ";\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "start", [], "any", false, false, false, 44), "d-m-Y"), "html", null, true);
                    echo "</td>
                                        ";
                    // line 45
                    if (twig_get_attribute($this->env, $this->source, $context["agenda"], "mention", [], "any", false, false, false, 45)) {
                        // line 46
                        echo "                                            <td style=\"border:2px solid ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "borderColor", [], "any", false, false, false, 46), "html", null, true);
                        echo ";\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "mention", [], "any", false, false, false, 46), "parcours", [], "any", false, false, false, 46), "html", null, true);
                        echo " -- ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "mention", [], "any", false, false, false, 46), "cycle", [], "any", false, false, false, 46), "code", [], "any", false, false, false, 46), "html", null, true);
                        echo " en ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "mention", [], "any", false, false, false, 46), "code", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
                        echo "</td>
                                        ";
                    } else {
                        // line 48
                        echo "                                            <td style=\"border:2px solid ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "borderColor", [], "any", false, false, false, 48), "html", null, true);
                        echo ";\">Toutes les Mentions</td>
                                        ";
                    }
                    // line 50
                    echo "
                                    </tr>
                                    ";
                } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 52
$context["agenda"], "mention", [], "any", false, false, false, 52), null)) && (isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 52, $this->source); })()))) {
                    // line 53
                    echo "                                        <tr>
                                            <td style=\"background-color:";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "backgroundColor", [], "any", false, false, false, 54), "html", null, true);
                    echo ";color:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "textColor", [], "any", false, false, false, 54), "html", null, true);
                    echo ";border:2px solid ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "borderColor", [], "any", false, false, false, 54), "html", null, true);
                    echo ";\"><b>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "title", [], "any", false, false, false, 54), "html", null, true);
                    echo "</b></td>
                                            <td style=\"border:2px solid ";
                    // line 55
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "borderColor", [], "any", false, false, false, 55), "html", null, true);
                    echo ";\">";
                    echo twig_get_attribute($this->env, $this->source, $context["agenda"], "description", [], "any", false, false, false, 55);
                    echo "</td>
                                            <td style=\"border:2px solid ";
                    // line 56
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "borderColor", [], "any", false, false, false, 56), "html", null, true);
                    echo ";\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "start", [], "any", false, false, false, 56), "H:i:s"), "html", null, true);
                    echo "</td>
                                            <td style=\"border:2px solid ";
                    // line 57
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "borderColor", [], "any", false, false, false, 57), "html", null, true);
                    echo ";\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "end", [], "any", false, false, false, 57), "H:i:s"), "html", null, true);
                    echo "</td>
                                            <td style=\"border:2px solid ";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "borderColor", [], "any", false, false, false, 58), "html", null, true);
                    echo ";\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "start", [], "any", false, false, false, 58), "d-m-Y"), "html", null, true);
                    echo "</td>
                                            ";
                    // line 59
                    if (twig_get_attribute($this->env, $this->source, $context["agenda"], "mention", [], "any", false, false, false, 59)) {
                        // line 60
                        echo "                                                <td style=\"border:2px solid ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "borderColor", [], "any", false, false, false, 60), "html", null, true);
                        echo ";\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "mention", [], "any", false, false, false, 60), "parcours", [], "any", false, false, false, 60), "html", null, true);
                        echo " -- ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "mention", [], "any", false, false, false, 60), "cycle", [], "any", false, false, false, 60), "code", [], "any", false, false, false, 60), "html", null, true);
                        echo " en ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["agenda"], "mention", [], "any", false, false, false, 60), "code", [], "any", false, false, false, 60), "name", [], "any", false, false, false, 60), "html", null, true);
                        echo "</td>
                                            ";
                    } else {
                        // line 62
                        echo "                                                <td style=\"border:2px solid ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agenda"], "borderColor", [], "any", false, false, false, 62), "html", null, true);
                        echo ";\">Toutes les Mentions</td>
                                            ";
                    }
                    // line 64
                    echo "
                                        </tr>
                                        ";
                    // line 66
                    $context["cpt"] = 0;
                    // line 67
                    echo "                                    ";
                }
                // line 68
                echo "                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 69
                echo "                                    <tr>
                                        <td colspan=\"7\">no records found</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agenda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/espace/agenda/agenda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 83,  286 => 74,  280 => 73,  271 => 69,  266 => 68,  263 => 67,  261 => 66,  257 => 64,  251 => 62,  239 => 60,  237 => 59,  231 => 58,  225 => 57,  219 => 56,  213 => 55,  203 => 54,  200 => 53,  198 => 52,  194 => 50,  188 => 48,  176 => 46,  174 => 45,  168 => 44,  162 => 43,  156 => 42,  150 => 41,  140 => 40,  137 => 39,  134 => 38,  128 => 37,  125 => 36,  121 => 35,  89 => 5,  79 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'etudiant/espace/base.html.twig' %}
{% block title %}Agendas{% endblock %}

{% block main %}
    <style>
        .tb{
            color: royalblue;
        }

    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Agendas</h1>
        <ol class=\"breadcrumb mb-4\">
            <li><a href=\"\" class=\"tb\">Tableau de bord /</a></li>
            <li class=\"breadcrumb-item active\">Agendas
        </ol>
        <div class=\"container-fluid\">

            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>De</th>
                                <th>A</th>
                                <th>Date</th>
                                <th>Mention</th>
                            </tr>
                            </thead>
                            <tbody>

                            {% for agenda in agendas %}
                                {% set cpt = 1 %}
                                {% for inscrire in inscrires %}
                                    {% if inscrire.mention == agenda.mention %}
                                    <tr>
                                        <td style=\"background-color:{{ agenda.backgroundColor }};color:{{ agenda.textColor }};border:2px solid {{ agenda.borderColor }};\"><b>{{ agenda.title }}</b></td>
                                        <td style=\"border:2px solid {{ agenda.borderColor }};\">{{ agenda.description | raw}}</td>
                                        <td style=\"border:2px solid {{ agenda.borderColor }};\">{{ agenda.start | date('H:i:s') }}</td>
                                        <td style=\"border:2px solid {{ agenda.borderColor }};\">{{ agenda.end | date('H:i:s') }}</td>
                                        <td style=\"border:2px solid {{ agenda.borderColor }};\">{{ agenda.start | date('d-m-Y') }}</td>
                                        {% if agenda.mention %}
                                            <td style=\"border:2px solid {{ agenda.borderColor }};\">{{ agenda.mention.parcours }} -- {{ agenda.mention.cycle.code }} en {{ agenda.mention.code.name }}</td>
                                        {% else %}
                                            <td style=\"border:2px solid {{ agenda.borderColor }};\">Toutes les Mentions</td>
                                        {% endif %}

                                    </tr>
                                    {% elseif agenda.mention == null and cpt %}
                                        <tr>
                                            <td style=\"background-color:{{ agenda.backgroundColor }};color:{{ agenda.textColor }};border:2px solid {{ agenda.borderColor }};\"><b>{{ agenda.title }}</b></td>
                                            <td style=\"border:2px solid {{ agenda.borderColor }};\">{{ agenda.description | raw}}</td>
                                            <td style=\"border:2px solid {{ agenda.borderColor }};\">{{ agenda.start | date('H:i:s') }}</td>
                                            <td style=\"border:2px solid {{ agenda.borderColor }};\">{{ agenda.end | date('H:i:s') }}</td>
                                            <td style=\"border:2px solid {{ agenda.borderColor }};\">{{ agenda.start | date('d-m-Y') }}</td>
                                            {% if agenda.mention %}
                                                <td style=\"border:2px solid {{ agenda.borderColor }};\">{{ agenda.mention.parcours }} -- {{ agenda.mention.cycle.code }} en {{ agenda.mention.code.name }}</td>
                                            {% else %}
                                                <td style=\"border:2px solid {{ agenda.borderColor }};\">Toutes les Mentions</td>
                                            {% endif %}

                                        </tr>
                                        {% set cpt = 0 %}
                                    {% endif %}
                                {% else %}
                                    <tr>
                                        <td colspan=\"7\">no records found</td>
                                    </tr>
                                {% endfor %}
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
{% block javascript %}
{% endblock %}

", "etudiant/espace/agenda/agenda.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\etudiant\\espace\\agenda\\agenda.html.twig");
    }
}
