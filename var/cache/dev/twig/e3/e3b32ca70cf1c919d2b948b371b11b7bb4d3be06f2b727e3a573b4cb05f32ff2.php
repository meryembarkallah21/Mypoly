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

/* prof/mes_cours/index.html.twig */
class __TwigTemplate_abcc3a29bdd3eed653ca9f174c28a1ce4bae75a2ba88646299564049a2ac8403 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/mes_cours/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/mes_cours/index.html.twig"));

        $this->parent = $this->loadTemplate("prof/dashboard/base.html.twig", "prof/mes_cours/index.html.twig", 1);
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

        echo "Prof | Mes Cours";
        
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
        .ui{
            color:gray;
            font-size: 18px;
            font-weight: bold;
            margin-right:20px ;
            border:1px solid royalblue;
        }
        .ui:hover{
            background-color:royalblue;
            color: white;
        }
        .ui:active{
            background-color:royalblue;
            color: white;
        }
        .status{
            background-color: #1c7430;
            padding:9px;
            margin-right:10px;
            margin-top:2px;
            border-radius:9px;
        }
        .header-card{
            background-color: #6695a0;
            color:#fff;
        }
    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Mes Cours</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\"><a class=\"tb\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_dashbord");
        echo "\">Tableau de bord</a>/ <a class=\"tb\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_mentions");
        echo "\">Mes Mentions</a>/ Mes Cours</li>
        </ol>
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"card text-white mb-4\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-xl-12\">
                                <div class=\"card text-black-50 mb-4\">
                                    ";
        // line 50
        $context["data"] = [];
        // line 51
        echo "                                    ";
        $context["j"] = 0;
        // line 52
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ecs"]) || array_key_exists("ecs", $context) ? $context["ecs"] : (function () { throw new RuntimeError('Variable "ecs" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
            // line 53
            echo "                                        ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["ec"], "ue", [], "any", false, false, false, 53), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 53, $this->source); })()))) {
                // line 54
                echo "                                        ";
            } else {
                // line 55
                echo "                                            ";
                $context["data"] = twig_array_merge((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), [(isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 55, $this->source); })()) => twig_get_attribute($this->env, $this->source, $context["ec"], "ue", [], "any", false, false, false, 55)]);
                // line 56
                echo "                                            ";
                $context["j"] = ((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 56, $this->source); })()) + 1);
                // line 57
                echo "                                        ";
            }
            // line 58
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                    ";
        $context["i"] = 1;
        // line 60
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ues"]) || array_key_exists("ues", $context) ? $context["ues"] : (function () { throw new RuntimeError('Variable "ues" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ue"]) {
            // line 61
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 61, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 62
                echo "                                            ";
                if ((0 === twig_compare($context["ue"], $context["u"]))) {
                    // line 63
                    echo "                                                <div class=\"card-header header-card\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "name", [], "any", false, false, false, 63), "html", null, true);
                    echo "</div>
                                            ";
                }
                // line 65
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ecs"]) || array_key_exists("ecs", $context) ? $context["ecs"] : (function () { throw new RuntimeError('Variable "ecs" does not exist.', 66, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 67
                echo "                                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["e"], "ue", [], "any", false, false, false, 67), $context["ue"]))) {
                    // line 68
                    echo "                                                <div class=\"gold-members p-3 border-bottom\">
                                                    <div class=\"float-right\">
                                                        ";
                    // line 70
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 70, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
                        // line 71
                        echo "                                                            ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cour"], "ec", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 71)))) {
                            // line 72
                            echo "                                                                ";
                            $context["i"] = $context["cour"];
                            // line 73
                            echo "                                                            ";
                        }
                        // line 74
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "                                                        <h6 class=\"badge badge-info\" >Crédit: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "coeff", [], "any", false, false, false, 75), "html", null, true);
                    echo "</h6>
                                                        <a href=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)]), "html", null, true);
                    echo "\" class=\"badge badge-secondary \"><i class=\"feather-eye\"></i></a>
                                                        <a href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_ajout_cours", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)]), "html", null, true);
                    echo "\" class=\"badge badge-danger\"><i class=\"feather-folder-plus\"></i> Ajout support</a>
                                                    </div>
                                                    <div class=\"media\">
                                                        <div></div>
                                                        <div class=\"media-body\">
                                                            <h6 class=\"mb-1\">";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 82), "html", null, true);
                    echo "</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
                }
                // line 87
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
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
        return "prof/mes_cours/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 98,  286 => 89,  280 => 88,  274 => 87,  266 => 82,  258 => 77,  254 => 76,  249 => 75,  243 => 74,  240 => 73,  237 => 72,  234 => 71,  230 => 70,  226 => 68,  223 => 67,  218 => 66,  212 => 65,  206 => 63,  203 => 62,  198 => 61,  193 => 60,  190 => 59,  184 => 58,  181 => 57,  178 => 56,  175 => 55,  172 => 54,  169 => 53,  164 => 52,  161 => 51,  159 => 50,  145 => 41,  108 => 6,  98 => 5,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'prof/dashboard/base.html.twig' %}
{% block title %}Prof | Mes Cours{% endblock %}
{% block css %}
{% endblock %}
{% block main %}
    <style>
        .tb{
            color:royalblue;
            margin-right:5px;
        }
        .ui{
            color:gray;
            font-size: 18px;
            font-weight: bold;
            margin-right:20px ;
            border:1px solid royalblue;
        }
        .ui:hover{
            background-color:royalblue;
            color: white;
        }
        .ui:active{
            background-color:royalblue;
            color: white;
        }
        .status{
            background-color: #1c7430;
            padding:9px;
            margin-right:10px;
            margin-top:2px;
            border-radius:9px;
        }
        .header-card{
            background-color: #6695a0;
            color:#fff;
        }
    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Mes Cours</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\"><a class=\"tb\" href=\"{{ path('prof_dashbord') }}\">Tableau de bord</a>/ <a class=\"tb\" href=\"{{ path('prof_mentions') }}\">Mes Mentions</a>/ Mes Cours</li>
        </ol>
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"card text-white mb-4\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-xl-12\">
                                <div class=\"card text-black-50 mb-4\">
                                    {% set data = [] %}
                                    {% set j = 0 %}
                                    {% for ec in ecs %}
                                        {% if ec.ue in data %}
                                        {% else %}
                                            {% set data = data| merge( { (j) : ec.ue } ) %}
                                            {% set j = j+1 %}
                                        {% endif %}
                                    {% endfor %}
                                    {% set i=1 %}
                                    {% for ue in ues %}
                                        {% for u in data %}
                                            {% if ue == u %}
                                                <div class=\"card-header header-card\">{{ ue.name }}</div>
                                            {% endif %}
                                        {% endfor %}
                                        {% for e in ecs %}
                                            {% if e.ue == ue %}
                                                <div class=\"gold-members p-3 border-bottom\">
                                                    <div class=\"float-right\">
                                                        {% for cour in cours %}
                                                            {% if cour.ec.id == e.id  %}
                                                                {% set i = cour %}
                                                            {% endif %}
                                                        {% endfor %}
                                                        <h6 class=\"badge badge-info\" >Crédit: {{ e.coeff }}</h6>
                                                        <a href=\"{{ path('cours_show' ,{'id': i.id }) }}\" class=\"badge badge-secondary \"><i class=\"feather-eye\"></i></a>
                                                        <a href=\"{{ path('prof_ajout_cours' ,{'id': i.id }) }}\" class=\"badge badge-danger\"><i class=\"feather-folder-plus\"></i> Ajout support</a>
                                                    </div>
                                                    <div class=\"media\">
                                                        <div></div>
                                                        <div class=\"media-body\">
                                                            <h6 class=\"mb-1\">{{ e.name }}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            {% endif %}
                                        {% endfor %}
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascript %}
{% endblock %}
", "prof/mes_cours/index.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\prof\\mes_cours\\index.html.twig");
    }
}
