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

/* prof/mes_mentions/index.html.twig */
class __TwigTemplate_618de7997a171ae919b0aa2548947d59d58c6378fbd5f6d1c0c1490fcf41b73c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/mes_mentions/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/mes_mentions/index.html.twig"));

        $this->parent = $this->loadTemplate("prof/dashboard/base.html.twig", "prof/mes_mentions/index.html.twig", 1);
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

        echo "Prof | Mes Mentions";
        
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
        .niveau{
            background-color: #369d41;
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
    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Mes Mentions</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\"><a class=\"tb\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_dashbord");
        echo "\">Tableau de bord</a>/ Mes Mentions</li>
        </ol>
        <div class=\"row\">
            ";
        // line 55
        $context["data"] = [];
        // line 56
        echo "            ";
        $context["i"] = 0;
        // line 57
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ecs"]) || array_key_exists("ecs", $context) ? $context["ecs"] : (function () { throw new RuntimeError('Variable "ecs" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
            // line 58
            echo "                ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ec"], "ue", [], "any", false, false, false, 58), "mention", [], "any", false, false, false, 58), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()))) {
                // line 59
                echo "                ";
            } else {
                // line 60
                echo "                    ";
                $context["data"] = twig_array_merge((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()), [(isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 60, $this->source); })()) => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ec"], "ue", [], "any", false, false, false, 60), "mention", [], "any", false, false, false, 60)]);
                // line 61
                echo "                    ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 61, $this->source); })()) + 1);
                // line 62
                echo "                ";
            }
            // line 63
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
            ";
        // line 65
        $context["_data"] = [];
        // line 66
        echo "            ";
        $context["i"] = 0;
        // line 67
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ecs"]) || array_key_exists("ecs", $context) ? $context["ecs"] : (function () { throw new RuntimeError('Variable "ecs" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
            // line 68
            echo "                ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ec"], "ue", [], "any", false, false, false, 68), "mention", [], "any", false, false, false, 68), "parcours", [], "any", false, false, false, 68), (isset($context["_data"]) || array_key_exists("_data", $context) ? $context["_data"] : (function () { throw new RuntimeError('Variable "_data" does not exist.', 68, $this->source); })()))) {
                // line 69
                echo "                ";
            } else {
                // line 70
                echo "                    ";
                $context["_data"] = twig_array_merge((isset($context["_data"]) || array_key_exists("_data", $context) ? $context["_data"] : (function () { throw new RuntimeError('Variable "_data" does not exist.', 70, $this->source); })()), [(isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 70, $this->source); })()) => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ec"], "ue", [], "any", false, false, false, 70), "mention", [], "any", false, false, false, 70), "parcours", [], "any", false, false, false, 70)]);
                // line 71
                echo "                    ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 71, $this->source); })()) + 1);
                // line 72
                echo "                ";
            }
            // line 73
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 76
            echo "                <div class=\"col-xl-12\">
                <div class=\"card bg-ui text-royal mb-4\">
                    <div class=\"card-header\"><i class=\"fas fa-graduation-cap mr-1\"></i> ";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 78), "name", [], "any", false, false, false, 78), "html", null, true);
            echo "</div>
                    <div class=\"card-body\" id=\"overlay\">
                        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["_data"]) || array_key_exists("_data", $context) ? $context["_data"] : (function () { throw new RuntimeError('Variable "_data" does not exist.', 80, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["parcour"]) {
                // line 81
                echo "                            ";
                if ((0 === twig_compare($context["parcour"], twig_get_attribute($this->env, $this->source, $context["item"], "parcours", [], "any", false, false, false, 81)))) {
                    // line 82
                    echo "                                <div class=\"row\">
                                    <div class=\"col-xl-4\">
                                        <div class=\"card bg-ui text-royal mb-4\">
                                            <div class=\"card-body \">
                                                <p class=\"tx-mg\"><span class=\"niveau\">";
                    // line 86
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "cycle", [], "any", false, false, false, 86), "code", [], "any", false, false, false, 86), "html", null, true);
                    echo "</span> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "parcours", [], "any", false, false, false, 86), "name", [], "any", false, false, false, 86), "html", null, true);
                    echo "</p>
                                            </div>
                                            <div class=\"card-footer\"><a class=\"btn-cours\" href=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_cours", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                    echo "\"><i class=\"feather-eye\"></i> Voir les cours</a></div>
                                        </div>
                                    </div>
                                </div>
                            ";
                }
                // line 93
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parcour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "       </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
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
        return "prof/mes_mentions/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 100,  285 => 97,  277 => 94,  271 => 93,  263 => 88,  256 => 86,  250 => 82,  247 => 81,  243 => 80,  238 => 78,  234 => 76,  230 => 75,  227 => 74,  221 => 73,  218 => 72,  215 => 71,  212 => 70,  209 => 69,  206 => 68,  201 => 67,  198 => 66,  196 => 65,  193 => 64,  187 => 63,  184 => 62,  181 => 61,  178 => 60,  175 => 59,  172 => 58,  167 => 57,  164 => 56,  162 => 55,  156 => 52,  108 => 6,  98 => 5,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'prof/dashboard/base.html.twig' %}
{% block title %}Prof | Mes Mentions{% endblock %}
{% block css %}
{% endblock %}
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
        .niveau{
            background-color: #369d41;
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
    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Mes Mentions</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\"><a class=\"tb\" href=\"{{ path('prof_dashbord') }}\">Tableau de bord</a>/ Mes Mentions</li>
        </ol>
        <div class=\"row\">
            {% set data = [] %}
            {% set i = 0 %}
            {% for ec in ecs %}
                {% if ec.ue.mention in data %}
                {% else %}
                    {% set data = data| merge( { (i) : ec.ue.mention } ) %}
                    {% set i = i+1 %}
                {% endif %}
            {% endfor %}

            {% set _data = [] %}
            {% set i = 0 %}
            {% for ec in ecs %}
                {% if ec.ue.mention.parcours in _data %}
                {% else %}
                    {% set _data = _data| merge( { (i) : ec.ue.mention.parcours } ) %}
                    {% set i = i+1 %}
                {% endif %}
            {% endfor %}

            {% for item in data %}
                <div class=\"col-xl-12\">
                <div class=\"card bg-ui text-royal mb-4\">
                    <div class=\"card-header\"><i class=\"fas fa-graduation-cap mr-1\"></i> {{ item.code.name }}</div>
                    <div class=\"card-body\" id=\"overlay\">
                        {% for parcour in _data %}
                            {% if parcour == item.parcours %}
                                <div class=\"row\">
                                    <div class=\"col-xl-4\">
                                        <div class=\"card bg-ui text-royal mb-4\">
                                            <div class=\"card-body \">
                                                <p class=\"tx-mg\"><span class=\"niveau\">{{ item.cycle.code }}</span> {{ item.parcours.name }}</p>
                                            </div>
                                            <div class=\"card-footer\"><a class=\"btn-cours\" href=\"{{ path('prof_cours',{'id':item.id }) }}\"><i class=\"feather-eye\"></i> Voir les cours</a></div>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% endfor %}
       </div>
    </div>
{% endblock %}
{% block javascript %}
{% endblock %}", "prof/mes_mentions/index.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\prof\\mes_mentions\\index.html.twig");
    }
}
