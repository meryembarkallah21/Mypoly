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

/* admin/bibliotheque/index.html.twig */
class __TwigTemplate_afbe76874f292ab0185387d9b9a130c91928cdc02b16738b87d883ae239626e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/dashboard/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/bibliotheque/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/bibliotheque/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/bibliotheque/index.html.twig", 1);
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

        echo "Bibliothèque";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "
    <style>
        .btn-purple{
            background-color: rgba(123,11,191,0.9);
            color: white;
        }
        .tb{
            font-size: 12px;
        }
        .bt{
            margin-right: 5px;
            margin-bottom: 5px;
        }
        .bg-corrige{
            background-color: #bd2130;
        }
        .bg-admin{
            background-color: #0062cc;
        }
    </style>
<div class=\"container-fluid\">
    <h1 class=\"mt-4\">Bibliothèque</h1>
    <ol class=\"breadcrumb mb-4\">
        <li class=\"breadcrumb-item active\">Bibliothèque</li>
    </ol>
    <div class=\"card mb-4\">
        <div class=\"card-header card-header-mention\">
            <div class=\"row\">
                <div class=\"col-md-10\">
                    <ul class=\"nav\">
                        <li class=\"nav-item\">
                            <a href=\"#sujet\" class=\"nav-link btn bt btn-warning\" role=\"tab\" data-toggle=\"tab\">Sujet d'éxamen</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#exercice\" class=\"nav-link btn bt btn-success\" role=\"tab\" data-toggle=\"tab\">Exercices</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#corrige\" class=\"nav-link btn bt btn-danger\" role=\"tab\" data-toggle=\"tab\">Corrigés</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#administration\" class=\"nav-link btn bt btn-primary\" role=\"tab\" data-toggle=\"tab\">Administration</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-2 col-sm-6\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#creer\" class=\"pull-right btn btn-success \"> <i class=\"fas fa-calendar-plus\"></i> Créer </a></li>
                </div>
            </div>

        </div>
        <div class=\"card-body\">

            <div class=\"tab-content\">

                <div class=\"tab-pane active\" role=\"tabpanel\" id=\"sujet\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered\" id=\"sujet-dataTable\" width=\"100%\" cellspacing=\"0\">
                                <thead>
                                    <tr class=\"bg-warning text-center tb text-white\">
                                        <th>Mention</th>
                                        <th>Niveau</th>
                                        <th>Parcours</th>
                                        <th>Semestre</th>
                                        <th>Ec</th>
                                        <th>Titre</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bibliotheques"]) || array_key_exists("bibliotheques", $context) ? $context["bibliotheques"] : (function () { throw new RuntimeError('Variable "bibliotheques" does not exist.', 78, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bibliotheque"]) {
            // line 79
            echo "                                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "type", [], "any", false, false, false, 79), "Sujet d'examen"))) {
                // line 80
                echo "
                                        <tr>
                                            ";
                // line 82
                if (twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 83), "code", [], "any", false, false, false, 83), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 84
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 84), "cycle", [], "any", false, false, false, 84), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 85), "parcours", [], "any", false, false, false, 85), "html", null, true);
                    echo "</td>
                                            ";
                } else {
                    // line 87
                    echo "                                                <td>Tous les mentions</td>
                                                <td>Tous les niveaux</td>
                                                <td>Tous les parcours</td>
                                            ";
                }
                // line 91
                echo "                                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "semestre", [], "any", false, false, false, 91), "html", null, true);
                echo "</td>
                                            <td>";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "ec", [], "any", false, false, false, 92), "html", null, true);
                echo "</td>
                                            <td>";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "title", [], "any", false, false, false, 93), "html", null, true);
                echo "</td>
                                            <td>";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "description", [], "any", false, false, false, 94);
                echo "</td>
                                            <td>";
                // line 95
                echo ((twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "status", [], "any", false, false, false, 95)) ? ("Yes") : ("No"));
                echo "</td>
                                            <td>
                                                <a class=\"btn btn-sm btn-purple\" href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bibliotheque_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                echo "\"><span class=\"fas fa-edit\"></span></a>
                                                <a class=\"btn btn-sm btn-danger\" href=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bibliotheque_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "id", [], "any", false, false, false, 98)]), "html", null, true);
                echo "\"><span class=\"fas fa-trash-alt\"></span></a>
                                            </td>
                                        </tr>

                                    ";
            }
            // line 103
            echo "                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 104
            echo "                                    <tr>
                                        <td colspan=\"9\">Aucun Enregistrement</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliotheque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                                </tbody>
                            </table>
                        </div>
                </div>
                <div class=\"tab-pane\" role=\"tabpanel\" id=\"exercice\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered\" id=\"exercice-dataTable\" width=\"100%\" cellspacing=\"0\">
                                <thead>
                                <tr class=\"text-center text-white tb bg-success\">
                                    <th>Mention</th>
                                    <th>Niveau</th>
                                    <th>Parcours</th>
                                    <th>Semestre</th>
                                    <th>Ec</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bibliotheques"]) || array_key_exists("bibliotheques", $context) ? $context["bibliotheques"] : (function () { throw new RuntimeError('Variable "bibliotheques" does not exist.', 129, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bibliotheque"]) {
            // line 130
            echo "                                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "type", [], "any", false, false, false, 130), "Exercice"))) {
                // line 131
                echo "
                                        <tr>
                                            ";
                // line 133
                if (twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 133)) {
                    // line 134
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 134), "code", [], "any", false, false, false, 134), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 135
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 135), "cycle", [], "any", false, false, false, 135), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 136
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 136), "parcours", [], "any", false, false, false, 136), "html", null, true);
                    echo "</td>
                                            ";
                } else {
                    // line 138
                    echo "                                                <td>Tous les mentions</td>
                                                <td>Tous les niveaux</td>
                                                <td>Tous les parcours</td>
                                            ";
                }
                // line 142
                echo "                                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "semestre", [], "any", false, false, false, 142), "html", null, true);
                echo "</td>
                                            <td>";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "ec", [], "any", false, false, false, 143), "html", null, true);
                echo "</td>
                                            <td>";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "title", [], "any", false, false, false, 144), "html", null, true);
                echo "</td>
                                            <td>";
                // line 145
                echo twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "description", [], "any", false, false, false, 145);
                echo "</td>
                                            <td>";
                // line 146
                echo ((twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "status", [], "any", false, false, false, 146)) ? ("Yes") : ("No"));
                echo "</td>
                                            <td>
                                                <a class=\"btn btn-sm btn-purple\" href=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bibliotheque_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "id", [], "any", false, false, false, 148)]), "html", null, true);
                echo "\"><span class=\"fas fa-edit\"></span></a>
                                                <a class=\"btn btn-sm btn-danger\" href=\"";
                // line 149
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bibliotheque_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "id", [], "any", false, false, false, 149)]), "html", null, true);
                echo "\"><span class=\"fas fa-trash-alt\"></span></a>
                                            </td>
                                        </tr>

                                    ";
            }
            // line 154
            echo "                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 155
            echo "                                    <tr>
                                        <td colspan=\"9\">Aucun Enregistrement</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliotheque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "                                </tbody>
                            </table>
                        </div>
                </div>

                <div class=\"tab-pane\" role=\"tabpanel\" id=\"corrige\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered\" id=\"corrige-dataTable\" width=\"100%\" cellspacing=\"0\">
                                <thead>
                                <tr class=\"text-center text-white tb bg-corrige\">
                                    <th>Mention</th>
                                    <th>Niveau</th>
                                    <th>Parcours</th>
                                    <th>Semestre</th>
                                    <th>Ec</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bibliotheques"]) || array_key_exists("bibliotheques", $context) ? $context["bibliotheques"] : (function () { throw new RuntimeError('Variable "bibliotheques" does not exist.', 181, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bibliotheque"]) {
            // line 182
            echo "                                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "type", [], "any", false, false, false, 182), "Corrigé"))) {
                // line 183
                echo "
                                        <tr>
                                            ";
                // line 185
                if (twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 185)) {
                    // line 186
                    echo "                                                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 186), "code", [], "any", false, false, false, 186), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 187
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 187), "cycle", [], "any", false, false, false, 187), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 188
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 188), "parcours", [], "any", false, false, false, 188), "html", null, true);
                    echo "</td>
                                            ";
                } else {
                    // line 190
                    echo "                                                <td>Tous les mentions</td>
                                                <td>Tous les niveaux</td>
                                                <td>Tous les parcours</td>
                                            ";
                }
                // line 194
                echo "                                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "semestre", [], "any", false, false, false, 194), "html", null, true);
                echo "</td>
                                            <td>";
                // line 195
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "ec", [], "any", false, false, false, 195), "html", null, true);
                echo "</td>
                                            <td>";
                // line 196
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "title", [], "any", false, false, false, 196), "html", null, true);
                echo "</td>
                                            <td>";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "description", [], "any", false, false, false, 197);
                echo "</td>
                                            <td>";
                // line 198
                echo ((twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "status", [], "any", false, false, false, 198)) ? ("Yes") : ("No"));
                echo "</td>
                                            <td>
                                                <a class=\"btn btn-sm btn-purple\" href=\"";
                // line 200
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bibliotheque_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "id", [], "any", false, false, false, 200)]), "html", null, true);
                echo "\"><span class=\"fas fa-edit\"></span></a>
                                                <a class=\"btn btn-sm btn-danger\" href=\"";
                // line 201
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bibliotheque_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "id", [], "any", false, false, false, 201)]), "html", null, true);
                echo "\"><span class=\"fas fa-trash-alt\"></span></a>
                                            </td>
                                        </tr>

                                    ";
            }
            // line 206
            echo "                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 207
            echo "                                    <tr>
                                        <td colspan=\"9\">Aucun Enregistrement</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliotheque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "                                </tbody>
                            </table>
                        </div>
                </div>

                <div class=\"tab-pane\" role=\"tabpanel\" id=\"administration\">

                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered\" id=\"administration-dataTable\" width=\"100%\" cellspacing=\"0\">
                                <thead>
                                <tr class=\"text-center text-white tb bg-admin\">
                                    <th>Mention</th>
                                    <th>Niveau</th>
                                    <th>Parcours</th>
                                    <th>Semestre</th>
                                    <th>Ec</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bibliotheques"]) || array_key_exists("bibliotheques", $context) ? $context["bibliotheques"] : (function () { throw new RuntimeError('Variable "bibliotheques" does not exist.', 234, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bibliotheque"]) {
            // line 235
            echo "                                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "type", [], "any", false, false, false, 235), "Administration"))) {
                // line 236
                echo "                                    <tr>
                                        ";
                // line 237
                if (twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 237)) {
                    // line 238
                    echo "                                            <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 238), "code", [], "any", false, false, false, 238), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 239
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 239), "cycle", [], "any", false, false, false, 239), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 240
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 240), "parcours", [], "any", false, false, false, 240), "html", null, true);
                    echo "</td>
                                        ";
                } else {
                    // line 242
                    echo "                                            <td>Tous les mentions</td>
                                            <td>Tous les niveaux</td>
                                            <td>Tous les parcours</td>
                                        ";
                }
                // line 246
                echo "                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "semestre", [], "any", false, false, false, 246), "html", null, true);
                echo "</td>
                                        <td>";
                // line 247
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "ec", [], "any", false, false, false, 247), "html", null, true);
                echo "</td>
                                        <td>";
                // line 248
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "title", [], "any", false, false, false, 248), "html", null, true);
                echo "</td>
                                        <td>";
                // line 249
                echo twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "description", [], "any", false, false, false, 249);
                echo "</td>
                                        <td>";
                // line 250
                echo ((twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "status", [], "any", false, false, false, 250)) ? ("Yes") : ("No"));
                echo "</td>
                                        <td>
                                            <a class=\"btn btn-sm btn-purple\" href=\"";
                // line 252
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bibliotheque_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "id", [], "any", false, false, false, 252)]), "html", null, true);
                echo "\"><span class=\"fas fa-edit\"></span></a>
                                            <a class=\"btn btn-sm btn-danger\" href=\"";
                // line 253
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bibliotheque_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "id", [], "any", false, false, false, 253)]), "html", null, true);
                echo "\"><span class=\"fas fa-trash-alt\"></span></a>
                                        </td>
                                    </tr>
                                    ";
            }
            // line 257
            echo "                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 258
            echo "                                    <tr>
                                        <td colspan=\"9\">Aucun Enregistrement</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliotheque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "                                </tbody>
                            </table>
                        </div>
                </div>

            </div>


        </div>
    </div>
</div>
";
        // line 273
        echo twig_include($this->env, $context, "admin/bibliotheque/modal/creer.html.twig");
        echo "

    <script>
        \$(document).ready(function () {

                var sujet_table =  \$('#sujet-dataTable').DataTable({
                    \"language\": {
                        \"decimal\": \"\",
                        \"emptyTable\": \"aucune donnée trouvée\",
                        \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                        \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                        \"infoFiltered\": \"\",
                        \"infoPostFix\": \"\",
                        \"thousands\": \",\",
                        \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                        \"loadingRecords\": \"Loading...\",
                        \"processing\": \"Processing...\",
                        \"search\": \"Recherche:\",
                        \"zeroRecords\": \"aucun élément trouvé\",
                        \"paginate\": {
                            \"first\": \"premier\",
                            \"last\": \"dernier\",
                            \"next\": \"Suivant\",
                            \"previous\": \"Précédant\"
                        }
                    }
                });

                var exercice_table = \$('#exercice-dataTable').DataTable({
                    \"language\": {
                        \"decimal\": \"\",
                        \"emptyTable\": \"aucune donnée trouvée\",
                        \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                        \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                        \"infoFiltered\": \"\",
                        \"infoPostFix\": \"\",
                        \"thousands\": \",\",
                        \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                        \"loadingRecords\": \"Loading...\",
                        \"processing\": \"Processing...\",
                        \"search\": \"Recherche:\",
                        \"zeroRecords\": \"aucun élément trouvé\",
                        \"paginate\": {
                            \"first\": \"premier\",
                            \"last\": \"dernier\",
                            \"next\": \"Suivant\",
                            \"previous\": \"Précédant\"
                        }
                    }
                });

                var corrige_table =  \$('#corrige-dataTable').DataTable({
                    \"language\": {
                        \"decimal\": \"\",
                        \"emptyTable\": \"aucune donnée trouvée\",
                        \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                        \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                        \"infoFiltered\": \"\",
                        \"infoPostFix\": \"\",
                        \"thousands\": \",\",
                        \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                        \"loadingRecords\": \"Loading...\",
                        \"processing\": \"Processing...\",
                        \"search\": \"Recherche:\",
                        \"zeroRecords\": \"aucun élément trouvé\",
                        \"paginate\": {
                            \"first\": \"premier\",
                            \"last\": \"dernier\",
                            \"next\": \"Suivant\",
                            \"previous\": \"Précédant\"
                        }
                    }
                });

                var administration_table =  \$('#administration-dataTable').DataTable({
                    \"language\": {
                        \"decimal\": \"\",
                        \"emptyTable\": \"aucune donnée trouvée\",
                        \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                        \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                        \"infoFiltered\": \"\",
                        \"infoPostFix\": \"\",
                        \"thousands\": \",\",
                        \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                        \"loadingRecords\": \"Loading...\",
                        \"processing\": \"Processing...\",
                        \"search\": \"Recherche:\",
                        \"zeroRecords\": \"aucun élément trouvé\",
                        \"paginate\": {
                            \"first\": \"premier\",
                            \"last\": \"dernier\",
                            \"next\": \"Suivant\",
                            \"previous\": \"Précédant\"
                        }
                    }
                });


        });


    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/bibliotheque/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  591 => 273,  578 => 262,  569 => 258,  564 => 257,  557 => 253,  553 => 252,  548 => 250,  544 => 249,  540 => 248,  536 => 247,  531 => 246,  525 => 242,  520 => 240,  516 => 239,  511 => 238,  509 => 237,  506 => 236,  503 => 235,  498 => 234,  473 => 211,  464 => 207,  459 => 206,  451 => 201,  447 => 200,  442 => 198,  438 => 197,  434 => 196,  430 => 195,  425 => 194,  419 => 190,  414 => 188,  410 => 187,  405 => 186,  403 => 185,  399 => 183,  396 => 182,  391 => 181,  367 => 159,  358 => 155,  353 => 154,  345 => 149,  341 => 148,  336 => 146,  332 => 145,  328 => 144,  324 => 143,  319 => 142,  313 => 138,  308 => 136,  304 => 135,  299 => 134,  297 => 133,  293 => 131,  290 => 130,  285 => 129,  262 => 108,  253 => 104,  248 => 103,  240 => 98,  236 => 97,  231 => 95,  227 => 94,  223 => 93,  219 => 92,  214 => 91,  208 => 87,  203 => 85,  199 => 84,  194 => 83,  192 => 82,  188 => 80,  185 => 79,  180 => 78,  107 => 7,  97 => 6,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard/base.html.twig' %}

{% block title %}Bibliothèque{% endblock %}
{% block css %}
{% endblock %}
{% block main %}

    <style>
        .btn-purple{
            background-color: rgba(123,11,191,0.9);
            color: white;
        }
        .tb{
            font-size: 12px;
        }
        .bt{
            margin-right: 5px;
            margin-bottom: 5px;
        }
        .bg-corrige{
            background-color: #bd2130;
        }
        .bg-admin{
            background-color: #0062cc;
        }
    </style>
<div class=\"container-fluid\">
    <h1 class=\"mt-4\">Bibliothèque</h1>
    <ol class=\"breadcrumb mb-4\">
        <li class=\"breadcrumb-item active\">Bibliothèque</li>
    </ol>
    <div class=\"card mb-4\">
        <div class=\"card-header card-header-mention\">
            <div class=\"row\">
                <div class=\"col-md-10\">
                    <ul class=\"nav\">
                        <li class=\"nav-item\">
                            <a href=\"#sujet\" class=\"nav-link btn bt btn-warning\" role=\"tab\" data-toggle=\"tab\">Sujet d'éxamen</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#exercice\" class=\"nav-link btn bt btn-success\" role=\"tab\" data-toggle=\"tab\">Exercices</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#corrige\" class=\"nav-link btn bt btn-danger\" role=\"tab\" data-toggle=\"tab\">Corrigés</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#administration\" class=\"nav-link btn bt btn-primary\" role=\"tab\" data-toggle=\"tab\">Administration</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-2 col-sm-6\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#creer\" class=\"pull-right btn btn-success \"> <i class=\"fas fa-calendar-plus\"></i> Créer </a></li>
                </div>
            </div>

        </div>
        <div class=\"card-body\">

            <div class=\"tab-content\">

                <div class=\"tab-pane active\" role=\"tabpanel\" id=\"sujet\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered\" id=\"sujet-dataTable\" width=\"100%\" cellspacing=\"0\">
                                <thead>
                                    <tr class=\"bg-warning text-center tb text-white\">
                                        <th>Mention</th>
                                        <th>Niveau</th>
                                        <th>Parcours</th>
                                        <th>Semestre</th>
                                        <th>Ec</th>
                                        <th>Titre</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for bibliotheque in bibliotheques %}
                                    {% if bibliotheque.type == \"Sujet d'examen\" %}

                                        <tr>
                                            {% if bibliotheque.mention %}
                                                <td>{{ bibliotheque.mention.code }}</td>
                                                <td>{{ bibliotheque.mention.cycle }}</td>
                                                <td>{{ bibliotheque.mention.parcours }}</td>
                                            {% else %}
                                                <td>Tous les mentions</td>
                                                <td>Tous les niveaux</td>
                                                <td>Tous les parcours</td>
                                            {% endif %}
                                            <td>{{ bibliotheque.semestre }}</td>
                                            <td>{{ bibliotheque.ec }}</td>
                                            <td>{{ bibliotheque.title }}</td>
                                            <td>{{ bibliotheque.description | raw }}</td>
                                            <td>{{ bibliotheque.status ? 'Yes' : 'No' }}</td>
                                            <td>
                                                <a class=\"btn btn-sm btn-purple\" href=\"{{ path('admin_bibliotheque_edit', {'id': bibliotheque.id}) }}\"><span class=\"fas fa-edit\"></span></a>
                                                <a class=\"btn btn-sm btn-danger\" href=\"{{ path('admin_bibliotheque_delete', {'id': bibliotheque.id}) }}\"><span class=\"fas fa-trash-alt\"></span></a>
                                            </td>
                                        </tr>

                                    {% endif %}
                                {% else %}
                                    <tr>
                                        <td colspan=\"9\">Aucun Enregistrement</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                </div>
                <div class=\"tab-pane\" role=\"tabpanel\" id=\"exercice\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered\" id=\"exercice-dataTable\" width=\"100%\" cellspacing=\"0\">
                                <thead>
                                <tr class=\"text-center text-white tb bg-success\">
                                    <th>Mention</th>
                                    <th>Niveau</th>
                                    <th>Parcours</th>
                                    <th>Semestre</th>
                                    <th>Ec</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for bibliotheque in bibliotheques %}
                                    {% if bibliotheque.type == \"Exercice\" %}

                                        <tr>
                                            {% if bibliotheque.mention %}
                                                <td>{{ bibliotheque.mention.code }}</td>
                                                <td>{{ bibliotheque.mention.cycle }}</td>
                                                <td>{{ bibliotheque.mention.parcours }}</td>
                                            {% else %}
                                                <td>Tous les mentions</td>
                                                <td>Tous les niveaux</td>
                                                <td>Tous les parcours</td>
                                            {% endif %}
                                            <td>{{ bibliotheque.semestre }}</td>
                                            <td>{{ bibliotheque.ec }}</td>
                                            <td>{{ bibliotheque.title }}</td>
                                            <td>{{ bibliotheque.description | raw }}</td>
                                            <td>{{ bibliotheque.status ? 'Yes' : 'No' }}</td>
                                            <td>
                                                <a class=\"btn btn-sm btn-purple\" href=\"{{ path('admin_bibliotheque_edit', {'id': bibliotheque.id}) }}\"><span class=\"fas fa-edit\"></span></a>
                                                <a class=\"btn btn-sm btn-danger\" href=\"{{ path('admin_bibliotheque_delete', {'id': bibliotheque.id}) }}\"><span class=\"fas fa-trash-alt\"></span></a>
                                            </td>
                                        </tr>

                                    {% endif %}
                                {% else %}
                                    <tr>
                                        <td colspan=\"9\">Aucun Enregistrement</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                </div>

                <div class=\"tab-pane\" role=\"tabpanel\" id=\"corrige\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered\" id=\"corrige-dataTable\" width=\"100%\" cellspacing=\"0\">
                                <thead>
                                <tr class=\"text-center text-white tb bg-corrige\">
                                    <th>Mention</th>
                                    <th>Niveau</th>
                                    <th>Parcours</th>
                                    <th>Semestre</th>
                                    <th>Ec</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for bibliotheque in bibliotheques %}
                                    {% if bibliotheque.type == \"Corrigé\" %}

                                        <tr>
                                            {% if bibliotheque.mention %}
                                                <td>{{ bibliotheque.mention.code }}</td>
                                                <td>{{ bibliotheque.mention.cycle }}</td>
                                                <td>{{ bibliotheque.mention.parcours }}</td>
                                            {% else %}
                                                <td>Tous les mentions</td>
                                                <td>Tous les niveaux</td>
                                                <td>Tous les parcours</td>
                                            {% endif %}
                                            <td>{{ bibliotheque.semestre }}</td>
                                            <td>{{ bibliotheque.ec }}</td>
                                            <td>{{ bibliotheque.title }}</td>
                                            <td>{{ bibliotheque.description | raw }}</td>
                                            <td>{{ bibliotheque.status ? 'Yes' : 'No' }}</td>
                                            <td>
                                                <a class=\"btn btn-sm btn-purple\" href=\"{{ path('admin_bibliotheque_edit', {'id': bibliotheque.id}) }}\"><span class=\"fas fa-edit\"></span></a>
                                                <a class=\"btn btn-sm btn-danger\" href=\"{{ path('admin_bibliotheque_delete', {'id': bibliotheque.id}) }}\"><span class=\"fas fa-trash-alt\"></span></a>
                                            </td>
                                        </tr>

                                    {% endif %}
                                {% else %}
                                    <tr>
                                        <td colspan=\"9\">Aucun Enregistrement</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                </div>

                <div class=\"tab-pane\" role=\"tabpanel\" id=\"administration\">

                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered\" id=\"administration-dataTable\" width=\"100%\" cellspacing=\"0\">
                                <thead>
                                <tr class=\"text-center text-white tb bg-admin\">
                                    <th>Mention</th>
                                    <th>Niveau</th>
                                    <th>Parcours</th>
                                    <th>Semestre</th>
                                    <th>Ec</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for bibliotheque in bibliotheques  %}
                                    {% if bibliotheque.type == \"Administration\" %}
                                    <tr>
                                        {% if bibliotheque.mention %}
                                            <td>{{ bibliotheque.mention.code }}</td>
                                            <td>{{ bibliotheque.mention.cycle }}</td>
                                            <td>{{ bibliotheque.mention.parcours }}</td>
                                        {% else %}
                                            <td>Tous les mentions</td>
                                            <td>Tous les niveaux</td>
                                            <td>Tous les parcours</td>
                                        {% endif %}
                                        <td>{{ bibliotheque.semestre }}</td>
                                        <td>{{ bibliotheque.ec }}</td>
                                        <td>{{ bibliotheque.title }}</td>
                                        <td>{{ bibliotheque.description | raw }}</td>
                                        <td>{{ bibliotheque.status ? 'Yes' : 'No' }}</td>
                                        <td>
                                            <a class=\"btn btn-sm btn-purple\" href=\"{{ path('admin_bibliotheque_edit', {'id': bibliotheque.id}) }}\"><span class=\"fas fa-edit\"></span></a>
                                            <a class=\"btn btn-sm btn-danger\" href=\"{{ path('admin_bibliotheque_delete', {'id': bibliotheque.id}) }}\"><span class=\"fas fa-trash-alt\"></span></a>
                                        </td>
                                    </tr>
                                    {% endif %}
                                {% else %}
                                    <tr>
                                        <td colspan=\"9\">Aucun Enregistrement</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                </div>

            </div>


        </div>
    </div>
</div>
{{ include('admin/bibliotheque/modal/creer.html.twig') }}

    <script>
        \$(document).ready(function () {

                var sujet_table =  \$('#sujet-dataTable').DataTable({
                    \"language\": {
                        \"decimal\": \"\",
                        \"emptyTable\": \"aucune donnée trouvée\",
                        \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                        \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                        \"infoFiltered\": \"\",
                        \"infoPostFix\": \"\",
                        \"thousands\": \",\",
                        \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                        \"loadingRecords\": \"Loading...\",
                        \"processing\": \"Processing...\",
                        \"search\": \"Recherche:\",
                        \"zeroRecords\": \"aucun élément trouvé\",
                        \"paginate\": {
                            \"first\": \"premier\",
                            \"last\": \"dernier\",
                            \"next\": \"Suivant\",
                            \"previous\": \"Précédant\"
                        }
                    }
                });

                var exercice_table = \$('#exercice-dataTable').DataTable({
                    \"language\": {
                        \"decimal\": \"\",
                        \"emptyTable\": \"aucune donnée trouvée\",
                        \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                        \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                        \"infoFiltered\": \"\",
                        \"infoPostFix\": \"\",
                        \"thousands\": \",\",
                        \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                        \"loadingRecords\": \"Loading...\",
                        \"processing\": \"Processing...\",
                        \"search\": \"Recherche:\",
                        \"zeroRecords\": \"aucun élément trouvé\",
                        \"paginate\": {
                            \"first\": \"premier\",
                            \"last\": \"dernier\",
                            \"next\": \"Suivant\",
                            \"previous\": \"Précédant\"
                        }
                    }
                });

                var corrige_table =  \$('#corrige-dataTable').DataTable({
                    \"language\": {
                        \"decimal\": \"\",
                        \"emptyTable\": \"aucune donnée trouvée\",
                        \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                        \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                        \"infoFiltered\": \"\",
                        \"infoPostFix\": \"\",
                        \"thousands\": \",\",
                        \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                        \"loadingRecords\": \"Loading...\",
                        \"processing\": \"Processing...\",
                        \"search\": \"Recherche:\",
                        \"zeroRecords\": \"aucun élément trouvé\",
                        \"paginate\": {
                            \"first\": \"premier\",
                            \"last\": \"dernier\",
                            \"next\": \"Suivant\",
                            \"previous\": \"Précédant\"
                        }
                    }
                });

                var administration_table =  \$('#administration-dataTable').DataTable({
                    \"language\": {
                        \"decimal\": \"\",
                        \"emptyTable\": \"aucune donnée trouvée\",
                        \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                        \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                        \"infoFiltered\": \"\",
                        \"infoPostFix\": \"\",
                        \"thousands\": \",\",
                        \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                        \"loadingRecords\": \"Loading...\",
                        \"processing\": \"Processing...\",
                        \"search\": \"Recherche:\",
                        \"zeroRecords\": \"aucun élément trouvé\",
                        \"paginate\": {
                            \"first\": \"premier\",
                            \"last\": \"dernier\",
                            \"next\": \"Suivant\",
                            \"previous\": \"Précédant\"
                        }
                    }
                });


        });


    </script>

{% endblock %}


", "admin/bibliotheque/index.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\bibliotheque\\index.html.twig");
    }
}
