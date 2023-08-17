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

/* etudiant/espace/cours/liste_ue/s2.html.twig */
class __TwigTemplate_803835008114a2e4f541b804ae569f37899180f09400fe7b4527de090ac697c2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/cours/liste_ue/s2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/cours/liste_ue/s2.html.twig"));

        $this->parent = $this->loadTemplate("etudiant/espace/cours/liste_ue/list-ue.html.twig", "etudiant/espace/cours/liste_ue/s2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo "
            <div class=\"card-body\">
                <div class=\"row\">
                    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["s2"]) || array_key_exists("s2", $context) ? $context["s2"] : (function () { throw new RuntimeError('Variable "s2" does not exist.', 8, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["UE"]) {
            // line 9
            echo "                        ";
            $context["nbr"] = twig_get_attribute($this->env, $this->source, $context["UE"], "no", [], "any", false, false, false, 9);
            // line 10
            echo "                        <div class=\"cont  col-md-6\">
                            <h5 style=\"margin-left:15px\" class=\"mb-4 mt-3 col-md-12\"><span class=\"badge badge-dark\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UE"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "
                                                                </span><small class=\"h6 text-info\" style=\"font-weight:bold;\">
                                    ";
            // line 13
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new RuntimeError('Variable "nbr" does not exist.', 13, $this->source); })())), 0))) {
                echo " ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new RuntimeError('Variable "nbr" does not exist.', 13, $this->source); })())), "html", null, true);
                echo " matières
                                    ";
            } else {
                // line 15
                echo "                                        vide
                                    ";
            }
            // line 16
            echo "</small></h5>

                            <div class=\"col-md-12\">
                                <div class=\"bg-white rounded border shadow-sm mb-4\">
                                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["UE"], "no", [], "any", false, false, false, 20));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
                // line 21
                echo "                                        ";
                $context["cour"] = [];
                // line 22
                echo "                                        ";
                $context["i"] = 0;
                // line 23
                echo "
                                        ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ec"], "cours", [], "any", false, false, false, 24));
                foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                    // line 25
                    echo "                                            ";
                    $context["cour"] = twig_array_merge((isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 25, $this->source); })()), [(isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 25, $this->source); })()) => $context["cours"]]);
                    // line 26
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                                        <div class=\"gold-members p-3 border-bottom\">
                                            ";
                // line 28
                if ((isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 28, $this->source); })())) {
                    // line 29
                    echo "                                                ";
                    $context["data"] = twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 29, $this->source); })()), 0, [], "array", false, false, false, 29);
                    // line 30
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
                    echo "\" class=\"float-right badge badge-warning\">suivre cours</a>
                                            ";
                } else {
                    // line 32
                    echo "                                                <a href=\"\" disabled class=\"float-right badge badge-warning\">suivre cours</a>
                                            ";
                }
                // line 34
                echo "                                            <h6 class=\"float-right badge badge-info\">Crédit: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ec"], "coeff", [], "any", false, false, false, 34), "html", null, true);
                echo "</h6>
                                            <div class=\"media\">
                                                <div class=\"mr-3\"><i
                                                            class=\"icofont-ui-press
                                                                            ";
                // line 38
                $context["cpt"] = 0;
                // line 39
                echo "                                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ec"], "statusEcs", [], "any", false, false, false, 39));
                foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
                    // line 40
                    echo "                                                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["Status"]) || array_key_exists("Status", $context) ? $context["Status"] : (function () { throw new RuntimeError('Variable "Status" does not exist.', 40, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
                        // line 41
                        echo "                                                                                             ";
                        if (((0 === twig_compare($context["stat"], $context["st"])) && twig_get_attribute($this->env, $this->source, $context["stat"], "status", [], "any", false, false, false, 41))) {
                            // line 42
                            echo "                                                                                             ";
                            $context["cpt"] = 1;
                            // line 43
                            echo "                                                                                                         text-success
                                                                                             ";
                        }
                        // line 45
                        echo "                                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "                                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                                                                            ";
                if ((0 === twig_compare((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 47, $this->source); })()), 0))) {
                    // line 48
                    echo "                                                                                text-danger
                                                                            ";
                }
                // line 50
                echo "                                                                             food-item\"></i>
                                                </div>
                                                <div class=\"media-body\">
                                                    <h6 class=\"mb-1\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ec"], "name", [], "any", false, false, false, 53), "html", null, true);
                echo "</h6>
                                                </div>
                                            </div>
                                        </div>

                                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 59
                echo "                                        <div class=\"gold-members p-3 border-bottom\">
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
            // line 69
            echo "                                </div>
                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 73
            echo "                        <p>il n'y as pas d'UE disponible en Semestre 2 pour l\"instant</p>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['UE'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                </div>
            </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/espace/cours/liste_ue/s2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 76,  239 => 73,  231 => 69,  216 => 59,  205 => 53,  200 => 50,  196 => 48,  193 => 47,  187 => 46,  181 => 45,  177 => 43,  174 => 42,  171 => 41,  166 => 40,  161 => 39,  159 => 38,  151 => 34,  147 => 32,  141 => 30,  138 => 29,  136 => 28,  133 => 27,  127 => 26,  124 => 25,  120 => 24,  117 => 23,  114 => 22,  111 => 21,  106 => 20,  100 => 16,  96 => 15,  89 => 13,  84 => 11,  81 => 10,  78 => 9,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'etudiant/espace/cours/liste_ue/list-ue.html.twig' %}


{% block contenu %}

            <div class=\"card-body\">
                <div class=\"row\">
                    {% for UE in s2 %}
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
                                </div>
                            </div>
                        </div>
                    {% else %}
                        <p>il n'y as pas d'UE disponible en Semestre 2 pour l\"instant</p>

                    {% endfor %}
                </div>
            </div>




{% endblock %}
", "etudiant/espace/cours/liste_ue/s2.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\etudiant\\espace\\cours\\liste_ue\\s2.html.twig");
    }
}
