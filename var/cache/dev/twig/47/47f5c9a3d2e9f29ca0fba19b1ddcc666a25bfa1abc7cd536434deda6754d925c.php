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

/* etudiant/espace/cours/liste_ue/s1.html.twig */
class __TwigTemplate_8e128753d474a543a8997eb2a18f162b9fdef61df9a2d551088cb53a3b749eb4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contenu' => [$this, 'block_contenu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "etudiant/espace/cours/liste_ue/list-ue.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/cours/liste_ue/s1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/cours/liste_ue/s1.html.twig"));

        $this->parent = $this->loadTemplate("etudiant/espace/cours/liste_ue/list-ue.html.twig", "etudiant/espace/cours/liste_ue/s1.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        echo "<div class=\"tab-content\">
        <div class=\"card-body\">
            <div class=\"row\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["s1"]) || array_key_exists("s1", $context) ? $context["s1"] : (function () { throw new RuntimeError('Variable "s1" does not exist.', 7, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["UE"]) {
            // line 8
            echo "                    ";
            $context["nbr"] = twig_get_attribute($this->env, $this->source, $context["UE"], "no", [], "any", false, false, false, 8);
            // line 9
            echo "                    <div class=\"cont  col-md-6\">
                        <h5 style=\"margin-left:15px\" class=\"mb-4 mt-3 col-md-12\"><span class=\"badge badge-dark\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UE"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "
                                                        </span><small class=\"h6 text-info\" style=\"font-weight:bold;\">
                                ";
            // line 12
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new RuntimeError('Variable "nbr" does not exist.', 12, $this->source); })())), 0))) {
                echo " ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new RuntimeError('Variable "nbr" does not exist.', 12, $this->source); })())), "html", null, true);
                echo " matières
                                ";
            } else {
                // line 14
                echo "                                    vide
                                ";
            }
            // line 15
            echo "</small></h5>

                        <div class=\"col-md-12\">
                            <div class=\"bg-white rounded border shadow-sm mb-4\">

                                ";
            // line 20
            $context["somme"] = 0;
            // line 21
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["UE"], "no", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
                // line 22
                echo "                                    ";
                $context["somme"] = ((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 22, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["ec"], "coeff", [], "any", false, false, false, 22));
                // line 23
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
                                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["UE"], "no", [], "any", false, false, false, 25));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
                // line 26
                echo "                                    ";
                $context["cour"] = [];
                // line 27
                echo "                                    ";
                $context["i"] = 0;
                // line 28
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ec"], "cours", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                    // line 29
                    echo "                                        ";
                    $context["cour"] = twig_array_merge((isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 29, $this->source); })()), [(isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 29, $this->source); })()) => $context["cours"]]);
                    // line 30
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "
                                    <div class=\"gold-members p-3 border-bottom\">
                                        ";
                // line 33
                if ((isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 33, $this->source); })())) {
                    // line 34
                    echo "                                            ";
                    $context["data"] = twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 34, $this->source); })()), 0, [], "array", false, false, false, 34);
                    // line 35
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
                    echo "\" class=\"float-right badge badge-warning\">suivre cours</a>
                                        ";
                } else {
                    // line 37
                    echo "                                            <a href=\"\" disabled class=\"float-right badge badge-warning\">suivre cours</a>
                                        ";
                }
                // line 39
                echo "                                        <h6 class=\"float-right badge badge-info\">Crédit: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ec"], "coeff", [], "any", false, false, false, 39), "html", null, true);
                echo "</h6>
                                        <div class=\"media\">
                                            <div class=\"mr-3\"><i
                                                        class=\"icofont-ui-press
                                                                            ";
                // line 43
                $context["cpt"] = 0;
                // line 44
                echo "                                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ec"], "statusEcs", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
                    // line 45
                    echo "                                                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["Status"]) || array_key_exists("Status", $context) ? $context["Status"] : (function () { throw new RuntimeError('Variable "Status" does not exist.', 45, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
                        // line 46
                        echo "                                                                                             ";
                        if (((0 === twig_compare($context["stat"], $context["st"])) && twig_get_attribute($this->env, $this->source, $context["stat"], "status", [], "any", false, false, false, 46))) {
                            // line 47
                            echo "                                                                                             ";
                            $context["cpt"] = 1;
                            // line 48
                            echo "                                                                                                         text-success
                                                                                             ";
                        }
                        // line 50
                        echo "                                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "                                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                                                                            ";
                if ((0 === twig_compare((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 52, $this->source); })()), 0))) {
                    // line 53
                    echo "                                                                                text-danger
                                                                            ";
                }
                // line 55
                echo "                                                                             food-item\"></i>
                                            </div>
                                            <div class=\"media-body\">
                                                <h6 class=\"mb-1\">";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ec"], "name", [], "any", false, false, false, 58), "html", null, true);
                echo "</h6>
                                            </div>
                                        </div>
                                    </div>

                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 64
                echo "                                    <div class=\"gold-members p-3 border-bottom\">
                                        <div class=\"media\">
                                            <div class=\"mr-3\"><i class=\"icofont-ui-press text-secondary food-item\"></i></div>
                                            <div class=\"media-body\">
                                                <h6 class=\"mb-1\"><p>Unité vide pour l'instant</p></h6>
                                            </div>
                                        </div>
                                    </div>

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                                ";
            if ((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 74, $this->source); })())) {
                // line 75
                echo "                                    <div class=\"total\"> crédit total: ";
                echo twig_escape_filter($this->env, (isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 75, $this->source); })()), "html", null, true);
                echo "</div>
                                ";
            }
            // line 77
            echo "                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            echo "                    <p>il n'y as pas d'UE disponible en Semestre 1 pour l\"instant</p>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['UE'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            </div>
        </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/espace/cours/liste_ue/s1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 84,  267 => 81,  259 => 77,  253 => 75,  250 => 74,  235 => 64,  224 => 58,  219 => 55,  215 => 53,  212 => 52,  206 => 51,  200 => 50,  196 => 48,  193 => 47,  190 => 46,  185 => 45,  180 => 44,  178 => 43,  170 => 39,  166 => 37,  160 => 35,  157 => 34,  155 => 33,  151 => 31,  145 => 30,  142 => 29,  137 => 28,  134 => 27,  131 => 26,  126 => 25,  123 => 24,  117 => 23,  114 => 22,  109 => 21,  107 => 20,  100 => 15,  96 => 14,  89 => 12,  84 => 10,  81 => 9,  78 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'etudiant/espace/cours/liste_ue/list-ue.html.twig' %}

{% block contenu %}
<div class=\"tab-content\">
        <div class=\"card-body\">
            <div class=\"row\">
                {% for UE in s1 %}
                    {% set nbr = UE.no %}
                    <div class=\"cont  col-md-6\">
                        <h5 style=\"margin-left:15px\" class=\"mb-4 mt-3 col-md-12\"><span class=\"badge badge-dark\">{{ UE.name }}
                                                        </span><small class=\"h6 text-info\" style=\"font-weight:bold;\">
                                {% if nbr | length > 0 %} {{  nbr | length }} matières
                                {% else %}
                                    vide
                                {% endif %}</small></h5>

                        <div class=\"col-md-12\">
                            <div class=\"bg-white rounded border shadow-sm mb-4\">

                                {% set somme=0 %}
                                {% for ec in UE.no %}
                                    {% set somme = somme + ec.coeff %}
                                {% endfor %}

                                {% for ec in UE.no %}
                                    {% set cour = [] %}
                                    {% set i = 0 %}
                                    {% for cours in ec.cours %}
                                        {% set cour = cour|merge({ (i) : cours })   %}
                                    {% endfor %}

                                    <div class=\"gold-members p-3 border-bottom\">
                                        {% if cour %}
                                            {% set data = cour[0] %}
                                            <a href=\"{{ path('cours' ,{ 'id' :data.id }) }}\" class=\"float-right badge badge-warning\">suivre cours</a>
                                        {% else %}
                                            <a href=\"\" disabled class=\"float-right badge badge-warning\">suivre cours</a>
                                        {% endif %}
                                        <h6 class=\"float-right badge badge-info\">Crédit: {{ ec.coeff }}</h6>
                                        <div class=\"media\">
                                            <div class=\"mr-3\"><i
                                                        class=\"icofont-ui-press
                                                                            {% set cpt=0 %}
                                                                            {% for stat in ec.statusEcs %}
                                                                                {% for st in Status %}
                                                                                             {% if stat == st and stat.status%}
                                                                                             {% set cpt=1 %}
                                                                                                         text-success
                                                                                             {% endif %}
                                                                                {% endfor %}
                                                                            {% endfor %}
                                                                            {% if cpt == 0 %}
                                                                                text-danger
                                                                            {% endif %}
                                                                             food-item\"></i>
                                            </div>
                                            <div class=\"media-body\">
                                                <h6 class=\"mb-1\">{{ ec.name }}</h6>
                                            </div>
                                        </div>
                                    </div>

                                {% else %}
                                    <div class=\"gold-members p-3 border-bottom\">
                                        <div class=\"media\">
                                            <div class=\"mr-3\"><i class=\"icofont-ui-press text-secondary food-item\"></i></div>
                                            <div class=\"media-body\">
                                                <h6 class=\"mb-1\"><p>Unité vide pour l'instant</p></h6>
                                            </div>
                                        </div>
                                    </div>

                                {% endfor %}
                                {% if somme %}
                                    <div class=\"total\"> crédit total: {{ somme }}</div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% else %}
                    <p>il n'y as pas d'UE disponible en Semestre 1 pour l\"instant</p>

                {% endfor %}
            </div>
        </div>


{% endblock %}
", "etudiant/espace/cours/liste_ue/s1.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\etudiant\\espace\\cours\\liste_ue\\s1.html.twig");
    }
}
