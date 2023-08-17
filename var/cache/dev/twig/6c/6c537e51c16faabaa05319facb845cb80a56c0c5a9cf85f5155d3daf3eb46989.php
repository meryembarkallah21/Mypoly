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

/* admin/dashboard/liste_etudiant.html.twig */
class __TwigTemplate_65da466031aae57b359fc548f2c6c7b9a1c404d47823540b4051b13b3e0ebc11 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/liste_etudiant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/liste_etudiant.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/dashboard/liste_etudiant.html.twig", 1);
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

        echo " Tableau de Bord";
        
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
        .mt-4{
            font-family: \"SansSerif\";
        }
        .card-header-mention{
            background-color:#4949bd;
            color:white;
        }
        .tb{
            color:royalblue;
            margin-right: 10px;
        }
    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 20, $this->source); })()), "fullName", [], "any", false, false, false, 20), "html", null, true);
        echo " -- ";
        echo twig_escape_filter($this->env, (isset($context["cycle"]) || array_key_exists("cycle", $context) ? $context["cycle"] : (function () { throw new RuntimeError('Variable "cycle" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " en ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 20, $this->source); })()), "code", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\"><a class=\"tb\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">Tableau de Bord</a>/ ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 22, $this->source); })()), "fullName", [], "any", false, false, false, 22), "html", null, true);
        echo " -- ";
        echo twig_escape_filter($this->env, (isset($context["cycle"]) || array_key_exists("cycle", $context) ? $context["cycle"] : (function () { throw new RuntimeError('Variable "cycle" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " en ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 22, $this->source); })()), "code", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "</li>
        </ol>
        <div class=\"card mb-4\">
            <div class=\"card-header card-header-mention\">
                <i class=\"fas fa-table mr-1\"></i>
                Liste des étudiants
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr class=\"text-uppercase\">
                            <th>Profil</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Tél</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!----><!---->
                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscrire"]) {
            // line 44
            echo "                            ";
            if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["inscrire"], "parcours", [], "any", false, false, false, 44), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "parcours", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, (isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44))))) {
                // line 45
                echo "                            <tr>
                                <td><img class=\"img-profile rounded-circle\" src=\"/images/avatars/";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "etudiant", [], "any", false, false, false, 46), "avatar", [], "any", false, false, false, 46), "html", null, true);
                echo "\"></td>
                                <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "etudiant", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                                <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "etudiant", [], "any", false, false, false, 48), "email", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                                <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "etudiant", [], "any", false, false, false, 49), "tel", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                                <td><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_show", ["id" => twig_get_attribute($this->env, $this->source, $context["inscrire"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fw fa-eye\"></i> Voir</a></td>
                            </tr>
                            ";
            }
            // line 53
            echo "                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "                            <tr>
                                <td colspan=\"3\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                        </tbody>
                    </table>
                    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fw fa-reply\"></i> Retour</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard/liste_etudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 60,  209 => 58,  200 => 54,  195 => 53,  189 => 50,  185 => 49,  181 => 48,  177 => 47,  173 => 46,  170 => 45,  167 => 44,  162 => 43,  132 => 22,  123 => 20,  107 => 6,  97 => 5,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard/base.html.twig' %}
{% block title %} Tableau de Bord{% endblock %}
{% block css %}
{% endblock %}
{% block main %}
    <style>
        .mt-4{
            font-family: \"SansSerif\";
        }
        .card-header-mention{
            background-color:#4949bd;
            color:white;
        }
        .tb{
            color:royalblue;
            margin-right: 10px;
        }
    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">{{ parcours.fullName }} -- {{ cycle }} en {{ parcours.code.name }}</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\"><a class=\"tb\" href=\"{{ path('admin_dashboard') }}\">Tableau de Bord</a>/ {{ parcours.fullName }} -- {{ cycle }} en {{ parcours.code.name }}</li>
        </ol>
        <div class=\"card mb-4\">
            <div class=\"card-header card-header-mention\">
                <i class=\"fas fa-table mr-1\"></i>
                Liste des étudiants
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr class=\"text-uppercase\">
                            <th>Profil</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Tél</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!----><!---->
                        {% for inscrire in inscrires %}
                            {% if inscrire.parcours != null and inscrire.parcours.id == parcours.id %}
                            <tr>
                                <td><img class=\"img-profile rounded-circle\" src=\"/images/avatars/{{ inscrire.etudiant.avatar }}\"></td>
                                <td>{{ inscrire.etudiant.name }}</td>
                                <td>{{ inscrire.etudiant.email }}</td>
                                <td>{{ inscrire.etudiant.tel }}</td>
                                <td><a href=\"{{ path('profil_show', {'id': inscrire.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fa fw fa-eye\"></i> Voir</a></td>
                            </tr>
                            {% endif %}
                        {% else %}
                            <tr>
                                <td colspan=\"3\">no records found</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                    <a href=\"{{ path('admin_dashboard') }}\" class=\"btn btn-primary\"><i class=\"fa fw fa-reply\"></i> Retour</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "admin/dashboard/liste_etudiant.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\admin\\dashboard\\liste_etudiant.html.twig");
    }
}
