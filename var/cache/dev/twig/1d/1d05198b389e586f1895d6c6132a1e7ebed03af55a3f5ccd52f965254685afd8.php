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

/* prof/bibliotheque/index.html.twig */
class __TwigTemplate_997a0f84b29be9807620cfcbb8216fd128ee33aa365a16d758db8611485aa00a extends Template
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
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "prof/dashboard/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/bibliotheque/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/bibliotheque/index.html.twig"));

        $this->parent = $this->loadTemplate("prof/dashboard/base.html.twig", "prof/bibliotheque/index.html.twig", 1);
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

        echo "Prof | Bibliothèque";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
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

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <style>
        .tb{
            color:royalblue;
        }
        .card-body{
            position: relative;
        }
        .card-body::before{
            position: absolute;
            content:\"\";
            width: 100%;
            height: 100%;
            left:0px;
            top:0px;
            -webkit-transition: all 0.4s ease;
            transition: all 0.4s ease;
            z-index: -1;
        }
        .mention{
            background-color: rgb(0,113,175);
            color: #fff8f8;
        }
        .niveau{
            background-color: rgb(30, 157, 162);
            color: #fff8f8;
        }
        .parcours{
            background-color: rgb(0,113,175);
            color: #fff8f8;
        }
        .semestre{
            background-color: rgb(30, 157, 162);
            color:  #fff8f8;
        }
        .cours{
            background-color: rgb(0,113,175);
            color:#fff8f8;
        }
        .supports{
            background-color: rgb(30, 157, 162);
            color:  #fff8f8;
        }
        .bl{
            color: #696769;
            font-weight: bold;
        }
        .f-file{
            color: #e26506;
            background-color: #f3f3ed;
            font-weight: bold;
            font-size:22px;
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
        .btn-purple{
            color:white;
            background-color: purple;
        }
    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Bibliothèque</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\"><a class=\"tb\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_dashbord");
        echo "\">Tableau de bord</a> / Bibliothèque</li>
        </ol>
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-md-10 col-sm-6\">
                                <ul class=\"nav\">
                                    <li class=\"nav-item\">
                                        <a href=\"#cours\" class=\"nav-link bt btn btn-info active\" role=\"tab\" data-toggle=\"tab\">Cours</a>
                                    </li>
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
                    <div class=\"card-body\" id=\"bible\" >
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" role=\"tabpanel\" id=\"cours\">
                                <div class=\"table-responsive\">
                                    <table class=\"table\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                        <thead>
                                        <tr class=\"text-uppercase\">
                                            <th class=\"mention\">Mention</th>
                                            <th class=\"niveau\">Niveau</th>
                                            <th class=\"parcours\">Parcours</th>
                                            <th class=\"semestre\">Semestre</th>
                                            <th class=\"cours\">Ec</th>
                                            <th class=\"supports\">Supports</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ecs"]) || array_key_exists("ecs", $context) ? $context["ecs"] : (function () { throw new RuntimeError('Variable "ecs" does not exist.', 123, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
            // line 124
            echo "                                            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ec"], "prof", [], "any", false, false, false, 124), twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124)))) {
                // line 125
                echo "                                            <tr>
                                                <td class=\"bl\">";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ec"], "ue", [], "any", false, false, false, 126), "mention", [], "any", false, false, false, 126), "code", [], "any", false, false, false, 126), "name", [], "any", false, false, false, 126), "html", null, true);
                echo "</td>
                                                <td class=\"bl\">";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ec"], "ue", [], "any", false, false, false, 127), "mention", [], "any", false, false, false, 127), "cycle", [], "any", false, false, false, 127), "code", [], "any", false, false, false, 127), "html", null, true);
                echo "</td>
                                                <td class=\"bl\">";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ec"], "ue", [], "any", false, false, false, 128), "mention", [], "any", false, false, false, 128), "parcours", [], "any", false, false, false, 128), "name", [], "any", false, false, false, 128), "html", null, true);
                echo "</td>
                                                <td class=\"bl\">";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ec"], "ue", [], "any", false, false, false, 129), "semestre", [], "any", false, false, false, 129), "name", [], "any", false, false, false, 129), "html", null, true);
                echo "</td>
                                                <td class=\"bl\">";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ec"], "name", [], "any", false, false, false, 130), "html", null, true);
                echo "</td>
                                                <td class=\"bl\">
                                                    ";
                // line 132
                $context["id"] = 0;
                // line 133
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 133, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
                    // line 134
                    echo "                                                        ";
                    if ((0 === twig_compare($context["ec"], twig_get_attribute($this->env, $this->source, $context["cour"], "ec", [], "any", false, false, false, 134)))) {
                        // line 135
                        echo "                                                            ";
                        $context["id"] = twig_get_attribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 135);
                        // line 136
                        echo "                                                        ";
                    }
                    // line 137
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_support", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 138, $this->source); })())]), "html", null, true);
                echo "\"><i class=\"fas f-file fa-file-archive\"></i></a>
                                                </td>
                                            </tr>
                                            ";
            }
            // line 142
            echo "                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 143
            echo "                                            <tr>
                                                <td class=\"bl\" colspan=\"6\">Aucun enregistrement</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class=\"tab-pane\" role=\"tabpanel\" id=\"sujet\">
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
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bibliotheques"]) || array_key_exists("bibliotheques", $context) ? $context["bibliotheques"] : (function () { throw new RuntimeError('Variable "bibliotheques" does not exist.', 168, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bibliotheque"]) {
            // line 169
            echo "                                            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "type", [], "any", false, false, false, 169), "Sujet d'examen"))) {
                // line 170
                echo "
                                                <tr>
                                                    ";
                // line 172
                if (twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 172)) {
                    // line 173
                    echo "                                                        <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 173), "code", [], "any", false, false, false, 173), "html", null, true);
                    echo "</td>
                                                        <td>";
                    // line 174
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 174), "cycle", [], "any", false, false, false, 174), "html", null, true);
                    echo "</td>
                                                        <td>";
                    // line 175
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 175), "parcours", [], "any", false, false, false, 175), "html", null, true);
                    echo "</td>
                                                    ";
                } else {
                    // line 177
                    echo "                                                        <td>Tous les mentions</td>
                                                        <td>Tous les niveaux</td>
                                                        <td>Tous les parcours</td>
                                                    ";
                }
                // line 181
                echo "                                                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "semestre", [], "any", false, false, false, 181), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 182
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "ec", [], "any", false, false, false, 182), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 183
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "title", [], "any", false, false, false, 183), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 184
                echo twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "description", [], "any", false, false, false, 184);
                echo "</td>
                                                    <td>";
                // line 185
                echo ((twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "status", [], "any", false, false, false, 185)) ? ("<span class=\"badge badge-success\">Publié</span>") : ("<span class=\"badge badge-danger\">Bloqué</span>"));
                echo "</td>
                                                    <td width=\"50px\">
                                                        <a class=\"btn btn-sm btn-purple\" href=\"";
                // line 187
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_bibliotheque_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "id", [], "any", false, false, false, 187)]), "html", null, true);
                echo "\"><span class=\"fas fa-edit\"></span></a>
                                                        <a class=\"btn btn-sm btn-danger\" id=\"supprimer_";
                // line 188
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "id", [], "any", false, false, false, 188), "html", null, true);
                echo "\" onclick=\"javascript:supprimerelement(this.id)\" href=\"\"><span class=\"fas fa-trash-alt\"></span></a>
                                                    </td>
                                                </tr>

                                            ";
            }
            // line 193
            echo "                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 194
            echo "                                            <tr>
                                                <td colspan=\"9\">Aucun Enregistrement</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliotheque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "                                        </tbody>
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
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bibliotheques"]) || array_key_exists("bibliotheques", $context) ? $context["bibliotheques"] : (function () { throw new RuntimeError('Variable "bibliotheques" does not exist.', 219, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bibliotheque"]) {
            // line 220
            echo "                                            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "type", [], "any", false, false, false, 220), "Exercice"))) {
                // line 221
                echo "
                                                <tr>
                                                    ";
                // line 223
                if (twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 223)) {
                    // line 224
                    echo "                                                        <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 224), "code", [], "any", false, false, false, 224), "html", null, true);
                    echo "</td>
                                                        <td>";
                    // line 225
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 225), "cycle", [], "any", false, false, false, 225), "html", null, true);
                    echo "</td>
                                                        <td>";
                    // line 226
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 226), "parcours", [], "any", false, false, false, 226), "html", null, true);
                    echo "</td>
                                                    ";
                } else {
                    // line 228
                    echo "                                                        <td>Tous les mentions</td>
                                                        <td>Tous les niveaux</td>
                                                        <td>Tous les parcours</td>
                                                    ";
                }
                // line 232
                echo "                                                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "semestre", [], "any", false, false, false, 232), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 233
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "ec", [], "any", false, false, false, 233), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 234
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "title", [], "any", false, false, false, 234), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 235
                echo twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "description", [], "any", false, false, false, 235);
                echo "</td>
                                                    <td>";
                // line 236
                echo ((twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "status", [], "any", false, false, false, 236)) ? ("<span class=\"badge badge-success\">Publié</span>") : ("<span class=\"badge badge-danger\">Bloqué</span>"));
                echo "</td>
                                                    <td width=\"50px\">
                                                        <a class=\"btn btn-sm btn-purple\" href=\"";
                // line 238
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_bibliotheque_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "id", [], "any", false, false, false, 238)]), "html", null, true);
                echo "\"><span class=\"fas fa-edit\"></span></a>
                                                        <a class=\"btn btn-sm btn-danger\" id=\"supprimer_";
                // line 239
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "id", [], "any", false, false, false, 239), "html", null, true);
                echo "\" onclick=\"javascript:supprimerelement(this.id)\" href=\"\"\"><span class=\"fas fa-trash-alt\"></span></a>
                                                    </td>
                                                </tr>

                                            ";
            }
            // line 244
            echo "                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 245
            echo "                                            <tr>
                                                <td colspan=\"9\">Aucun Enregistrement</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliotheque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "                                        </tbody>
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
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bibliotheques"]) || array_key_exists("bibliotheques", $context) ? $context["bibliotheques"] : (function () { throw new RuntimeError('Variable "bibliotheques" does not exist.', 271, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bibliotheque"]) {
            // line 272
            echo "                                            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "type", [], "any", false, false, false, 272), "Corrigé"))) {
                // line 273
                echo "
                                                <tr>
                                                    ";
                // line 275
                if (twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 275)) {
                    // line 276
                    echo "                                                        <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 276), "code", [], "any", false, false, false, 276), "html", null, true);
                    echo "</td>
                                                        <td>";
                    // line 277
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 277), "cycle", [], "any", false, false, false, 277), "html", null, true);
                    echo "</td>
                                                        <td>";
                    // line 278
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 278), "parcours", [], "any", false, false, false, 278), "html", null, true);
                    echo "</td>
                                                    ";
                } else {
                    // line 280
                    echo "                                                        <td>Tous les mentions</td>
                                                        <td>Tous les niveaux</td>
                                                        <td>Tous les parcours</td>
                                                    ";
                }
                // line 284
                echo "                                                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "semestre", [], "any", false, false, false, 284), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 285
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "ec", [], "any", false, false, false, 285), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 286
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "title", [], "any", false, false, false, 286), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 287
                echo twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "description", [], "any", false, false, false, 287);
                echo "</td>
                                                    <td>";
                // line 288
                echo ((twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "status", [], "any", false, false, false, 288)) ? ("<span class=\"badge badge-success\">Publié</span>") : ("<span class=\"badge badge-danger\">Bloqué</span>"));
                echo "</td>
                                                    <td width=\"50px\">
                                                        <a class=\"btn btn-sm btn-purple\" href=\"";
                // line 290
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_bibliotheque_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "id", [], "any", false, false, false, 290)]), "html", null, true);
                echo "\"><span class=\"fas fa-edit\"></span></a>
                                                        <a class=\"btn btn-sm btn-danger\"id=\"supprimer_";
                // line 291
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "id", [], "any", false, false, false, 291), "html", null, true);
                echo "\" onclick=\"javascript:supprimerelement(this.id)\" href=\"\"><span class=\"fas fa-trash-alt\"></span></a>
                                                    </td>
                                                </tr>

                                            ";
            }
            // line 296
            echo "                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 297
            echo "                                            <tr>
                                                <td colspan=\"9\">Aucun Enregistrement</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliotheque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        echo "                                        </tbody>
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
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bibliotheques"]) || array_key_exists("bibliotheques", $context) ? $context["bibliotheques"] : (function () { throw new RuntimeError('Variable "bibliotheques" does not exist.', 324, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bibliotheque"]) {
            // line 325
            echo "                                            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "type", [], "any", false, false, false, 325), "Administration"))) {
                // line 326
                echo "                                                <tr>
                                                    ";
                // line 327
                if (twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 327)) {
                    // line 328
                    echo "                                                        <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 328), "code", [], "any", false, false, false, 328), "html", null, true);
                    echo "</td>
                                                        <td>";
                    // line 329
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 329), "cycle", [], "any", false, false, false, 329), "html", null, true);
                    echo "</td>
                                                        <td>";
                    // line 330
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "mention", [], "any", false, false, false, 330), "parcours", [], "any", false, false, false, 330), "html", null, true);
                    echo "</td>
                                                    ";
                } else {
                    // line 332
                    echo "                                                        <td>Tous les mentions</td>
                                                        <td>Tous les niveaux</td>
                                                        <td>Tous les parcours</td>
                                                    ";
                }
                // line 336
                echo "                                                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "semestre", [], "any", false, false, false, 336), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 337
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "ec", [], "any", false, false, false, 337), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 338
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "title", [], "any", false, false, false, 338), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 339
                echo twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "description", [], "any", false, false, false, 339);
                echo "</td>
                                                    <td>";
                // line 340
                echo ((twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "status", [], "any", false, false, false, 340)) ? ("<span class=\"badge badge-success\">Publié</span>") : ("<span class=\"badge badge-danger\">Bloqué</span>"));
                echo "</td>
                                                    <td width=\"50px\">
                                                        <a class=\"btn btn-sm btn-purple\" href=\"";
                // line 342
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_bibliotheque_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "id", [], "any", false, false, false, 342)]), "html", null, true);
                echo "\"><span class=\"fas fa-edit\"></span></a>
                                                        <a class=\"btn btn-sm btn-danger\" id=\"supprimer_";
                // line 343
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bibliotheque"], "id", [], "any", false, false, false, 343), "html", null, true);
                echo "\" onclick=\"javascript:supprimerelement(this.id)\" href=\"\" ><span class=\"fas fa-trash-alt\"></span></a>
                                                    </td>
                                                </tr>
                                            ";
            }
            // line 347
            echo "                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 348
            echo "                                            <tr>
                                                <td colspan=\"9\">Aucun Enregistrement</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliotheque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 363
        echo twig_include($this->env, $context, "prof/bibliotheque/modal/creer.html.twig");
        echo "
    <!-- modal confirmation suppression -->
    <div class=\"bd-example\">
        <div class=\"modal fade\" id=\"suppression\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\" style=\"background-color: rgb(255, 65, 75);\">
                        <h4 class=\"modal-title\">Confirmation avant suppression</h4>
                        <button type=\"button\" class=\"close pull-right\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <form id=\"suppression_form\" method=\"POST\">
                        <div class=\"modal-body\">
                            <h4 id=\"titre_modal_suppression\"></h4>
                            <input type=\"hidden\" name=\"suppressionselected\" id=\"suppressionselected\">
                        </div>
                        <div class=\"modal-footer\">
                            <div class=\"row\">
                                <div class=\"col-lg-6 col-md-6 col-xs-6\">
                                    <button type=\"button\" class=\"form-control btn btn-default\" style=\"background-color: #cccccc\" data-dismiss=\"modal\">Non</button>
                                </div>
                                <div class=\"col-lg-6 col-md-6 col-xs-6\">
                                    <input type=\"submit\" class=\"form-control btn btn-danger\" value=\"Oui\" >
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
    <script type=\"text/javascript\">
        function supprimerelement(id_supprimer) {
            var s = \"supprimer_\";
            var t = s.length;
            var idchoisi = id_supprimer.substring(t, id_supprimer.length);
            var url = \"";
        // line 501
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_bibliotheque_delete", ["id" => "supprimer"]);
        echo "\";
            url = url.replace(\"supprimer\", idchoisi);
            \$(\"#suppression_form\").attr('action', url);
            \$(\"#titre_modal_suppression\").text(\"Etes-vous d'accord pour la suppression ?\");
            \$(\"#suppression\").modal();
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 509
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
        return "prof/bibliotheque/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  899 => 509,  881 => 501,  740 => 363,  727 => 352,  718 => 348,  713 => 347,  706 => 343,  702 => 342,  697 => 340,  693 => 339,  689 => 338,  685 => 337,  680 => 336,  674 => 332,  669 => 330,  665 => 329,  660 => 328,  658 => 327,  655 => 326,  652 => 325,  647 => 324,  622 => 301,  613 => 297,  608 => 296,  600 => 291,  596 => 290,  591 => 288,  587 => 287,  583 => 286,  579 => 285,  574 => 284,  568 => 280,  563 => 278,  559 => 277,  554 => 276,  552 => 275,  548 => 273,  545 => 272,  540 => 271,  516 => 249,  507 => 245,  502 => 244,  494 => 239,  490 => 238,  485 => 236,  481 => 235,  477 => 234,  473 => 233,  468 => 232,  462 => 228,  457 => 226,  453 => 225,  448 => 224,  446 => 223,  442 => 221,  439 => 220,  434 => 219,  411 => 198,  402 => 194,  397 => 193,  389 => 188,  385 => 187,  380 => 185,  376 => 184,  372 => 183,  368 => 182,  363 => 181,  357 => 177,  352 => 175,  348 => 174,  343 => 173,  341 => 172,  337 => 170,  334 => 169,  329 => 168,  306 => 147,  297 => 143,  292 => 142,  284 => 138,  278 => 137,  275 => 136,  272 => 135,  269 => 134,  264 => 133,  262 => 132,  257 => 130,  253 => 129,  249 => 128,  245 => 127,  241 => 126,  238 => 125,  235 => 124,  230 => 123,  180 => 76,  108 => 6,  98 => 5,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'prof/dashboard/base.html.twig' %}
{% block title %}Prof | Bibliothèque{% endblock %}
{% block css %}
{% endblock %}
{% block main %}
    <style>
        .tb{
            color:royalblue;
        }
        .card-body{
            position: relative;
        }
        .card-body::before{
            position: absolute;
            content:\"\";
            width: 100%;
            height: 100%;
            left:0px;
            top:0px;
            -webkit-transition: all 0.4s ease;
            transition: all 0.4s ease;
            z-index: -1;
        }
        .mention{
            background-color: rgb(0,113,175);
            color: #fff8f8;
        }
        .niveau{
            background-color: rgb(30, 157, 162);
            color: #fff8f8;
        }
        .parcours{
            background-color: rgb(0,113,175);
            color: #fff8f8;
        }
        .semestre{
            background-color: rgb(30, 157, 162);
            color:  #fff8f8;
        }
        .cours{
            background-color: rgb(0,113,175);
            color:#fff8f8;
        }
        .supports{
            background-color: rgb(30, 157, 162);
            color:  #fff8f8;
        }
        .bl{
            color: #696769;
            font-weight: bold;
        }
        .f-file{
            color: #e26506;
            background-color: #f3f3ed;
            font-weight: bold;
            font-size:22px;
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
        .btn-purple{
            color:white;
            background-color: purple;
        }
    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Bibliothèque</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\"><a class=\"tb\" href=\"{{ path('prof_dashbord') }}\">Tableau de bord</a> / Bibliothèque</li>
        </ol>
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-md-10 col-sm-6\">
                                <ul class=\"nav\">
                                    <li class=\"nav-item\">
                                        <a href=\"#cours\" class=\"nav-link bt btn btn-info active\" role=\"tab\" data-toggle=\"tab\">Cours</a>
                                    </li>
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
                    <div class=\"card-body\" id=\"bible\" >
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" role=\"tabpanel\" id=\"cours\">
                                <div class=\"table-responsive\">
                                    <table class=\"table\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                        <thead>
                                        <tr class=\"text-uppercase\">
                                            <th class=\"mention\">Mention</th>
                                            <th class=\"niveau\">Niveau</th>
                                            <th class=\"parcours\">Parcours</th>
                                            <th class=\"semestre\">Semestre</th>
                                            <th class=\"cours\">Ec</th>
                                            <th class=\"supports\">Supports</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for ec in ecs %}
                                            {% if ec.prof == app.user %}
                                            <tr>
                                                <td class=\"bl\">{{ ec.ue.mention.code.name }}</td>
                                                <td class=\"bl\">{{ ec.ue.mention.cycle.code }}</td>
                                                <td class=\"bl\">{{ ec.ue.mention.parcours.name }}</td>
                                                <td class=\"bl\">{{ ec.ue.semestre.name }}</td>
                                                <td class=\"bl\">{{ ec.name }}</td>
                                                <td class=\"bl\">
                                                    {% set id = 0 %}
                                                    {% for cour in cours %}
                                                        {% if ec == cour.ec %}
                                                            {% set id = cour.id %}
                                                        {% endif %}
                                                    {% endfor %}
                                                    <a href=\"{{ path('cours_support',{'id':id }) }}\"><i class=\"fas f-file fa-file-archive\"></i></a>
                                                </td>
                                            </tr>
                                            {% endif %}
                                        {% else %}
                                            <tr>
                                                <td class=\"bl\" colspan=\"6\">Aucun enregistrement</td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class=\"tab-pane\" role=\"tabpanel\" id=\"sujet\">
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
                                                    <td>{{ bibliotheque.status ? '<span class=\"badge badge-success\">Publié</span>' : '<span class=\"badge badge-danger\">Bloqué</span>' }}</td>
                                                    <td width=\"50px\">
                                                        <a class=\"btn btn-sm btn-purple\" href=\"{{ path('prof_bibliotheque_edit', {'id': bibliotheque.id}) }}\"><span class=\"fas fa-edit\"></span></a>
                                                        <a class=\"btn btn-sm btn-danger\" id=\"supprimer_{{ bibliotheque.id }}\" onclick=\"javascript:supprimerelement(this.id)\" href=\"\"><span class=\"fas fa-trash-alt\"></span></a>
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
                                                    <td>{{ bibliotheque.status ? '<span class=\"badge badge-success\">Publié</span>' : '<span class=\"badge badge-danger\">Bloqué</span>' }}</td>
                                                    <td width=\"50px\">
                                                        <a class=\"btn btn-sm btn-purple\" href=\"{{ path('prof_bibliotheque_edit', {'id': bibliotheque.id}) }}\"><span class=\"fas fa-edit\"></span></a>
                                                        <a class=\"btn btn-sm btn-danger\" id=\"supprimer_{{ bibliotheque.id }}\" onclick=\"javascript:supprimerelement(this.id)\" href=\"\"\"><span class=\"fas fa-trash-alt\"></span></a>
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
                                                    <td>{{ bibliotheque.status ? '<span class=\"badge badge-success\">Publié</span>' : '<span class=\"badge badge-danger\">Bloqué</span>' }}</td>
                                                    <td width=\"50px\">
                                                        <a class=\"btn btn-sm btn-purple\" href=\"{{ path('prof_bibliotheque_edit', {'id': bibliotheque.id}) }}\"><span class=\"fas fa-edit\"></span></a>
                                                        <a class=\"btn btn-sm btn-danger\"id=\"supprimer_{{ bibliotheque.id }}\" onclick=\"javascript:supprimerelement(this.id)\" href=\"\"><span class=\"fas fa-trash-alt\"></span></a>
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
                                                    <td>{{ bibliotheque.status ? '<span class=\"badge badge-success\">Publié</span>' : '<span class=\"badge badge-danger\">Bloqué</span>' }}</td>
                                                    <td width=\"50px\">
                                                        <a class=\"btn btn-sm btn-purple\" href=\"{{ path('prof_bibliotheque_edit', {'id': bibliotheque.id}) }}\"><span class=\"fas fa-edit\"></span></a>
                                                        <a class=\"btn btn-sm btn-danger\" id=\"supprimer_{{ bibliotheque.id }}\" onclick=\"javascript:supprimerelement(this.id)\" href=\"\" ><span class=\"fas fa-trash-alt\"></span></a>
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
        </div>
    </div>

    {{ include('prof/bibliotheque/modal/creer.html.twig') }}
    <!-- modal confirmation suppression -->
    <div class=\"bd-example\">
        <div class=\"modal fade\" id=\"suppression\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\" style=\"background-color: rgb(255, 65, 75);\">
                        <h4 class=\"modal-title\">Confirmation avant suppression</h4>
                        <button type=\"button\" class=\"close pull-right\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <form id=\"suppression_form\" method=\"POST\">
                        <div class=\"modal-body\">
                            <h4 id=\"titre_modal_suppression\"></h4>
                            <input type=\"hidden\" name=\"suppressionselected\" id=\"suppressionselected\">
                        </div>
                        <div class=\"modal-footer\">
                            <div class=\"row\">
                                <div class=\"col-lg-6 col-md-6 col-xs-6\">
                                    <button type=\"button\" class=\"form-control btn btn-default\" style=\"background-color: #cccccc\" data-dismiss=\"modal\">Non</button>
                                </div>
                                <div class=\"col-lg-6 col-md-6 col-xs-6\">
                                    <input type=\"submit\" class=\"form-control btn btn-danger\" value=\"Oui\" >
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
    <script type=\"text/javascript\">
        function supprimerelement(id_supprimer) {
            var s = \"supprimer_\";
            var t = s.length;
            var idchoisi = id_supprimer.substring(t, id_supprimer.length);
            var url = \"{{ path('prof_bibliotheque_delete', {'id': 'supprimer'}) }}\";
            url = url.replace(\"supprimer\", idchoisi);
            \$(\"#suppression_form\").attr('action', url);
            \$(\"#titre_modal_suppression\").text(\"Etes-vous d'accord pour la suppression ?\");
            \$(\"#suppression\").modal();
        }
    </script>
{% endblock %}
{% block javascript %}
{% endblock %}



", "prof/bibliotheque/index.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\prof\\bibliotheque\\index.html.twig");
    }
}
