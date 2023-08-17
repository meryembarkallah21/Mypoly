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

/* admin/gestionCours/parcours.html.twig */
class __TwigTemplate_39b36588076fd9a8c440c63bb850e2b1fbe958a9e2f221222967f7e208096ccd extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestionCours/parcours.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestionCours/parcours.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/gestionCours/parcours.html.twig", 1);
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

        echo " Gestion des cours | parcours ";
        
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
        echo "    <style>
        .tb{
            color:royalblue;
            margin-right:5px;
        }
        .bg-ui{
            background-color: #c1cbcb;
        }
        #overlay{
            background-size: cover;
            opacity: 0.9;
            background-color: #737c7c;

        }

        .niveau1{
            background-color: #369d41;
            padding:20px;
            border-radius:30px;
            color: #ffffff;
            opacity:0.8;
            font-weight: bold;
            z-index: -1;
        }
        .niveau2{
            background-color: rgba(38,82,223,0.81);
            padding:20px;
            border-radius:30px;
            color: #ffffff;
            opacity:0.8;
            font-weight: bold;
            z-index: -1;
        }
        .niveau3{
            background-color: rgb(214, 58, 31);
            padding:20px;
            border-radius:30px;
            color: #ffffff;
            opacity:0.8;
            font-weight: bold;
            z-index: -1;
        }

        .tx-mg{
            margin-top:20px;
            color: #1c1b1b;
            font-weight:bold;
        }
        .text-black{
            color: #1c1b1b;
            font-weight: bold;
        }
        .btn-cours{
            color: royalblue;
        }
        .btn-cours:hover{
            color: #e1416e;
        }
        .card-footer{
            background-color: #dbdbf6;
        }
        .card-header{
            background-color: #d9d9e5;
        }
        .text-royal{
            color: royalblue;
        }
        #card-body{
            height: 120px;
        }
    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Mes Mentions</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\"><a class=\"tb text-info\" href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">
                    Tableau de bord</a><a class=\"text-info\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_admin_gestion_cours", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82)]), "html", null, true);
        echo "\">/Mention</a>/Parcours</li>
        </ol>
        <div class=\"row\">


                    <div class=\"col-xl-12\">
                        <div class=\"card bg-ui text-royal mb-4\">
                            <div class=\"card-header\"><i class=\"fas fa-graduation-cap mr-1\"></i>Licence 1</div>

                                <div class=\"card-body\" id=\"overlay\">
                                    <div class=\"row\">
                                        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mentionL1"]) || array_key_exists("mentionL1", $context) ? $context["mentionL1"] : (function () { throw new RuntimeError('Variable "mentionL1" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mention"]) {
            // line 94
            echo "                                            <div class=\"col-xl-4\">
                                                <div class=\"card bg-ui text-royal mb-4\">
                                                    <div class=\"card-body \" id=\"card-body\">
                                                        <p class=\"tx-mg\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-3\">
                                                                <span class=\"niveau1\">";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mention"], "cycle", [], "any", false, false, false, 100), "code", [], "any", false, false, false, 100), "html", null, true);
            echo "</span>
                                                            </div>
                                                            <div class=\"col-md-9\">
                                                                <div class=\"text-black\"> ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mention"], "parcours", [], "any", false, false, false, 103), "fullname", [], "any", false, false, false, 103), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mention"], "parcours", [], "any", false, false, false, 103), "name", [], "any", false, false, false, 103), "html", null, true);
            echo ")</div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                    </div>
                                                    <div class=\"card-footer\"><a class=\"btn-cours\" href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cours", ["id" => twig_get_attribute($this->env, $this->source, $context["mention"], "id", [], "any", false, false, false, 108)]), "html", null, true);
            echo "\"><i class=\"feather-eye\"></i> Voir les cours</a></div>
                                                </div>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                                    </div>
                                </div>

                        </div>
                    </div>


                    <div class=\"col-xl-12\">
                        <div class=\"card bg-ui text-royal mb-4\">
                            <div class=\"card-header\"><i class=\"fas fa-graduation-cap mr-1\"></i>Licence 2</div>

                                <div class=\"card-body\" id=\"overlay\">
                                    <div class=\"row\">
                                        ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mentionL2"]) || array_key_exists("mentionL2", $context) ? $context["mentionL2"] : (function () { throw new RuntimeError('Variable "mentionL2" does not exist.', 125, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mention"]) {
            // line 126
            echo "                                            <div class=\"col-xl-4\">
                                                <div class=\"card bg-ui text-royal mb-4\">
                                                    <div class=\"card-body\" id=\"card-body\">
                                                        <p class=\"tx-mg\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-3\">
                                                                <span class=\"niveau2\">";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mention"], "cycle", [], "any", false, false, false, 132), "code", [], "any", false, false, false, 132), "html", null, true);
            echo "</span>
                                                            </div>
                                                            <div class=\"col-md-9\">
                                                                <div class=\"text-black\"> ";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mention"], "parcours", [], "any", false, false, false, 135), "fullname", [], "any", false, false, false, 135), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mention"], "parcours", [], "any", false, false, false, 135), "name", [], "any", false, false, false, 135), "html", null, true);
            echo ")</div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                    </div>
                                                    <div class=\"card-footer\"><a class=\"btn-cours\" href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cours", ["id" => twig_get_attribute($this->env, $this->source, $context["mention"], "id", [], "any", false, false, false, 140)]), "html", null, true);
            echo "\"><i class=\"feather-eye\"></i> Voir les cours</a></div>
                                                </div>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                                    </div>

                                </div>
                        </div>
                    </div>


                    <div class=\"col-xl-12\">
                        <div class=\"card bg-ui text-royal mb-4\">
                            <div class=\"card-header\"><i class=\"fas fa-graduation-cap mr-1\"></i>Licence 3</div>
                            <div class=\"card-body\" id=\"overlay\">

                                        <div class=\"row\">
                                            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mentionL3"]) || array_key_exists("mentionL3", $context) ? $context["mentionL3"] : (function () { throw new RuntimeError('Variable "mentionL3" does not exist.', 157, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mention"]) {
            // line 158
            echo "                                                <div class=\"col-xl-4\">
                                                    <div class=\"card bg-ui text-royal mb-4\">
                                                        <div class=\"card-body\" id=\"card-body\">
                                                            <p class=\"tx-mg\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-3\">
                                                                        <span class=\"niveau3\">";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mention"], "cycle", [], "any", false, false, false, 164), "code", [], "any", false, false, false, 164), "html", null, true);
            echo "</span>
                                                                    </div>
                                                                    <div class=\"col-md-9\">
                                                                        <div class=\"text-black\"> ";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mention"], "parcours", [], "any", false, false, false, 167), "fullname", [], "any", false, false, false, 167), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mention"], "parcours", [], "any", false, false, false, 167), "name", [], "any", false, false, false, 167), "html", null, true);
            echo ")</div>
                                                                    </div>
                                                                </div>
                                                            </p>
                                                        </div>
                                                        <div class=\"card-footer\"><a class=\"btn-cours\" href=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cours", ["id" => twig_get_attribute($this->env, $this->source, $context["mention"], "id", [], "any", false, false, false, 172)]), "html", null, true);
            echo "\"><i class=\"feather-eye\"></i> Voir les cours</a></div>
                                                    </div>
                                                </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                                        </div>


                            </div>
                        </div>
                    </div>

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 188
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/gestionCours/parcours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 188,  327 => 176,  317 => 172,  307 => 167,  301 => 164,  293 => 158,  289 => 157,  274 => 144,  264 => 140,  254 => 135,  248 => 132,  240 => 126,  236 => 125,  221 => 112,  211 => 108,  201 => 103,  195 => 100,  187 => 94,  183 => 93,  169 => 82,  165 => 81,  89 => 7,  79 => 6,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard/base.html.twig' %}
{% block title %} Gestion des cours | parcours {% endblock %}



{% block main %}
    <style>
        .tb{
            color:royalblue;
            margin-right:5px;
        }
        .bg-ui{
            background-color: #c1cbcb;
        }
        #overlay{
            background-size: cover;
            opacity: 0.9;
            background-color: #737c7c;

        }

        .niveau1{
            background-color: #369d41;
            padding:20px;
            border-radius:30px;
            color: #ffffff;
            opacity:0.8;
            font-weight: bold;
            z-index: -1;
        }
        .niveau2{
            background-color: rgba(38,82,223,0.81);
            padding:20px;
            border-radius:30px;
            color: #ffffff;
            opacity:0.8;
            font-weight: bold;
            z-index: -1;
        }
        .niveau3{
            background-color: rgb(214, 58, 31);
            padding:20px;
            border-radius:30px;
            color: #ffffff;
            opacity:0.8;
            font-weight: bold;
            z-index: -1;
        }

        .tx-mg{
            margin-top:20px;
            color: #1c1b1b;
            font-weight:bold;
        }
        .text-black{
            color: #1c1b1b;
            font-weight: bold;
        }
        .btn-cours{
            color: royalblue;
        }
        .btn-cours:hover{
            color: #e1416e;
        }
        .card-footer{
            background-color: #dbdbf6;
        }
        .card-header{
            background-color: #d9d9e5;
        }
        .text-royal{
            color: royalblue;
        }
        #card-body{
            height: 120px;
        }
    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Mes Mentions</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\"><a class=\"tb text-info\" href=\"{{ path('admin_dashboard') }}\">
                    Tableau de bord</a><a class=\"text-info\" href=\"{{ path('index_admin_gestion_cours',{'id' : code.id }) }}\">/Mention</a>/Parcours</li>
        </ol>
        <div class=\"row\">


                    <div class=\"col-xl-12\">
                        <div class=\"card bg-ui text-royal mb-4\">
                            <div class=\"card-header\"><i class=\"fas fa-graduation-cap mr-1\"></i>Licence 1</div>

                                <div class=\"card-body\" id=\"overlay\">
                                    <div class=\"row\">
                                        {% for mention in mentionL1 %}
                                            <div class=\"col-xl-4\">
                                                <div class=\"card bg-ui text-royal mb-4\">
                                                    <div class=\"card-body \" id=\"card-body\">
                                                        <p class=\"tx-mg\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-3\">
                                                                <span class=\"niveau1\">{{ mention.cycle.code }}</span>
                                                            </div>
                                                            <div class=\"col-md-9\">
                                                                <div class=\"text-black\"> {{ mention.parcours.fullname }} ({{ mention.parcours.name }})</div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                    </div>
                                                    <div class=\"card-footer\"><a class=\"btn-cours\" href=\"{{ path('admin_cours',{'id':mention.id }) }}\"><i class=\"feather-eye\"></i> Voir les cours</a></div>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    </div>
                                </div>

                        </div>
                    </div>


                    <div class=\"col-xl-12\">
                        <div class=\"card bg-ui text-royal mb-4\">
                            <div class=\"card-header\"><i class=\"fas fa-graduation-cap mr-1\"></i>Licence 2</div>

                                <div class=\"card-body\" id=\"overlay\">
                                    <div class=\"row\">
                                        {% for mention in mentionL2 %}
                                            <div class=\"col-xl-4\">
                                                <div class=\"card bg-ui text-royal mb-4\">
                                                    <div class=\"card-body\" id=\"card-body\">
                                                        <p class=\"tx-mg\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-3\">
                                                                <span class=\"niveau2\">{{ mention.cycle.code }}</span>
                                                            </div>
                                                            <div class=\"col-md-9\">
                                                                <div class=\"text-black\"> {{ mention.parcours.fullname }} ({{ mention.parcours.name }})</div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                    </div>
                                                    <div class=\"card-footer\"><a class=\"btn-cours\" href=\"{{ path('admin_cours',{'id':mention.id }) }}\"><i class=\"feather-eye\"></i> Voir les cours</a></div>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    </div>

                                </div>
                        </div>
                    </div>


                    <div class=\"col-xl-12\">
                        <div class=\"card bg-ui text-royal mb-4\">
                            <div class=\"card-header\"><i class=\"fas fa-graduation-cap mr-1\"></i>Licence 3</div>
                            <div class=\"card-body\" id=\"overlay\">

                                        <div class=\"row\">
                                            {% for mention in mentionL3 %}
                                                <div class=\"col-xl-4\">
                                                    <div class=\"card bg-ui text-royal mb-4\">
                                                        <div class=\"card-body\" id=\"card-body\">
                                                            <p class=\"tx-mg\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-3\">
                                                                        <span class=\"niveau3\">{{ mention.cycle.code }}</span>
                                                                    </div>
                                                                    <div class=\"col-md-9\">
                                                                        <div class=\"text-black\"> {{ mention.parcours.fullname }} ({{ mention.parcours.name }})</div>
                                                                    </div>
                                                                </div>
                                                            </p>
                                                        </div>
                                                        <div class=\"card-footer\"><a class=\"btn-cours\" href=\"{{ path('admin_cours',{'id':mention.id }) }}\"><i class=\"feather-eye\"></i> Voir les cours</a></div>
                                                    </div>
                                                </div>
                                            {% endfor %}
                                        </div>


                            </div>
                        </div>
                    </div>

        </div>
    </div>

{% endblock %}

{% block javascripts %}
{% endblock %}", "admin/gestionCours/parcours.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\admin\\gestionCours\\parcours.html.twig");
    }
}
