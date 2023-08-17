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

/* etudiant/espace/cours/cours.html.twig */
class __TwigTemplate_56aa67c405cd17f534462d56e64f8e97d89a3de65249d1d13a8a2d6fc37dac01 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/cours/cours.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/cours/cours.html.twig"));

        $this->parent = $this->loadTemplate("etudiant/espace/base.html.twig", "etudiant/espace/cours/cours.html.twig", 1);
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

        echo "mes mentions";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <style>
        .card.offer-card h5 {
            border: 1px dotted #daceb7;
            display: inline-table;
            font-size: 15px;
            padding: 2px 10px 2px 6px;
            border-radius: 10px;
            background: #fffae6;
            position: relative;
        }
        .content-header
        {
            margin-top: 20px;
        }
        .content{
            font-size: 25px;
            margin: 10% 30%;
            text-align: center;
            font-weight: bold;
            color:  blue;
        }
        .card-text{
            width: 100%;
            font-size: 18px;
            font-family: cursive;
        }
        .parc{
            font-weight: bold;
        }
        .bt{
            margin-left: 70%;
        }
        .txt{
            font-size: 25px;
            width: 210px;
            font-weight: bold;
        }
        .card
        {
            border-radius:10px;
        }
        .card-title{
            border-radius: 60px;
        }
        .bg-back{
            background-color:mediumseagreen;
        }
        .bt-voir{
            background-color: #0a80cd;
        }

    </style>

    <!-- Content Header (Page header) -->
    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h2 class=\"m-0 breadcrumb text-primary txt text-info\">Mes mentions </h2>
                </div><!-- /.col -->
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                        <li class=\"breadcrumb-item\"><a class=\"text-info\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiant");
        echo "\">Tableau de Bord</a></li>
                        <li class=\"breadcrumb-item active\">mention</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
<div class=\"container-fluid\">

    <div class=\"card\">

        <div class=\"card-body\">
            <div class=\"row\">
                ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 83, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscrire"]) {
            // line 84
            echo "                    <div class=\"col-md-6 crd\" style=\"margin-bottom: 20px;\">
                        <div class=\"card border-info bg-back text-white offer-card  shadow-sm\">
                            <div class=\"card-body \">
                                <h5 class=\"card-title\">
                                    <img src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/fichier_icon/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 88), "code", [], "any", false, false, false, 88), "icon", [], "any", false, false, false, 88))), "html", null, true);
            echo "\" width=\"30px\" alt=\" \" style=\"margin-right:20px;\"><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 88), "code", [], "any", false, false, false, 88), "html", null, true);
            echo "</b>
                                </h5>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <h6 class=\"card-subtitle mb-2 text-warning\">
                                            Niveau: <span class=\"text-white\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 93), "cycle", [], "any", false, false, false, 93), "html", null, true);
            echo "</span>
                                            <br>Parcours: <span class=\"text-white parc\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscrire"], "parcours", [], "any", false, false, false, 94), "html", null, true);
            echo "</span>
                                            <br>Matricule: <span class=\"text-white parc\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscrire"], "matricule", [], "any", false, false, false, 95), "html", null, true);
            echo "</span>
                                        </h6>
                                    </div>
                                    <div class=\"col-md-8 float-right\">
                                        <p class=\"card-text text-white\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "parcours", [], "any", false, false, false, 99), "fullName", [], "any", false, false, false, 99), "html", null, true);
            echo "</p>
                                    </div>
                                </div>


                                <div class=\"card-footer border-info d-flex\">
                                    <div class=\"bt\">
                                        <a class=\"btn btn-sm bt-voir\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_cours", ["id" => twig_get_attribute($this->env, $this->source, $context["inscrire"], "id", [], "any", false, false, false, 106)]), "html", null, true);
            echo "\">voir les cours</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 113
            echo "                    <p class=\"content\">Vous n'êtes pas encore inscrit, <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mention");
            echo "\">s'inscrire ici?</a></p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "            </div>

        </div>
    </div>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/espace/cours/cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 115,  226 => 113,  214 => 106,  204 => 99,  197 => 95,  193 => 94,  189 => 93,  179 => 88,  173 => 84,  168 => 83,  152 => 70,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'etudiant/espace/base.html.twig' %}

{% block title %}mes mentions{% endblock %}



{% block main %}
    <style>
        .card.offer-card h5 {
            border: 1px dotted #daceb7;
            display: inline-table;
            font-size: 15px;
            padding: 2px 10px 2px 6px;
            border-radius: 10px;
            background: #fffae6;
            position: relative;
        }
        .content-header
        {
            margin-top: 20px;
        }
        .content{
            font-size: 25px;
            margin: 10% 30%;
            text-align: center;
            font-weight: bold;
            color:  blue;
        }
        .card-text{
            width: 100%;
            font-size: 18px;
            font-family: cursive;
        }
        .parc{
            font-weight: bold;
        }
        .bt{
            margin-left: 70%;
        }
        .txt{
            font-size: 25px;
            width: 210px;
            font-weight: bold;
        }
        .card
        {
            border-radius:10px;
        }
        .card-title{
            border-radius: 60px;
        }
        .bg-back{
            background-color:mediumseagreen;
        }
        .bt-voir{
            background-color: #0a80cd;
        }

    </style>

    <!-- Content Header (Page header) -->
    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h2 class=\"m-0 breadcrumb text-primary txt text-info\">Mes mentions </h2>
                </div><!-- /.col -->
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                        <li class=\"breadcrumb-item\"><a class=\"text-info\" href=\"{{ path('etudiant') }}\">Tableau de Bord</a></li>
                        <li class=\"breadcrumb-item active\">mention</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
<div class=\"container-fluid\">

    <div class=\"card\">

        <div class=\"card-body\">
            <div class=\"row\">
                {% for inscrire in inscrires %}
                    <div class=\"col-md-6 crd\" style=\"margin-bottom: 20px;\">
                        <div class=\"card border-info bg-back text-white offer-card  shadow-sm\">
                            <div class=\"card-body \">
                                <h5 class=\"card-title\">
                                    <img src=\"{{ asset('images/fichier_icon/'~inscrire.mention.code.icon) }}\" width=\"30px\" alt=\" \" style=\"margin-right:20px;\"><b>{{ inscrire.mention.code }}</b>
                                </h5>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <h6 class=\"card-subtitle mb-2 text-warning\">
                                            Niveau: <span class=\"text-white\">{{ inscrire.mention.cycle }}</span>
                                            <br>Parcours: <span class=\"text-white parc\">{{ inscrire.parcours }}</span>
                                            <br>Matricule: <span class=\"text-white parc\">{{ inscrire.matricule}}</span>
                                        </h6>
                                    </div>
                                    <div class=\"col-md-8 float-right\">
                                        <p class=\"card-text text-white\">{{ inscrire.parcours.fullName }}</p>
                                    </div>
                                </div>


                                <div class=\"card-footer border-info d-flex\">
                                    <div class=\"bt\">
                                        <a class=\"btn btn-sm bt-voir\" href=\"{{ path('mes_cours', {'id': inscrire.id }) }}\">voir les cours</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <p class=\"content\">Vous n'êtes pas encore inscrit, <a href=\"{{ path('mention') }}\">s'inscrire ici?</a></p>
                {% endfor %}
            </div>

        </div>
    </div>


</div>
{% endblock %}

", "etudiant/espace/cours/cours.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\etudiant\\espace\\cours\\cours.html.twig");
    }
}
