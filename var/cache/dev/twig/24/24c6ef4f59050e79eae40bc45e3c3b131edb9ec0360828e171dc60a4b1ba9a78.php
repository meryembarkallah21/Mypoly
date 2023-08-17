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

/* admin/admin/index.html.twig */
class __TwigTemplate_78429429cf22967c412d9460f99ef5cb655c0bf0e39d66c7e5ef174c8dba1f48 extends Template
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
        return "admin/dashboard/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/admin/index.html.twig", 1);
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

        echo " Liste des administrateurs!";
        
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
      .breadcrumb-link{
          color:royalblue;
      }
      .btn-ajout{
          background-color: #115ea1;
          border-color: white;
          font-size: 15px;
      }
      a[disabled=\"disabled\"] {
          pointer-events: none;
      }
    </style>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                <div class=\"page-header\">
                    <h2 class=\"pageheader-title d-flex justify-content-between pt-5\">
                        Liste des administrateurs
                        ";
        // line 25
        $context["n"] = 0;
        // line 26
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 27
            echo "                            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, $context["admin"], "name", [], "any", false, false, false, 27)))) {
                // line 28
                echo "                                ";
                $context["n"] = ((isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 28, $this->source); })()) + 1);
                // line 29
                echo "                            ";
            }
            // line 30
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 32
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_admin_new");
            echo "\"  class=\"btn btn-primary btn-sm btn-ajout title-btn mr-1\" ><i class=\"fas fa-user-plus\"></i><br>admin</a>
                        ";
        } else {
            // line 34
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_admin_new");
            echo "\" disabled=\"disabled\" class=\"btn btn-primary btn-sm btn-ajout title-btn mr-1\" ><i class=\"fas fa-user-plus\"></i><br>Admin</a>
                        ";
        }
        // line 36
        echo "                    </h2>
                    <div class=\"page-breadcrumb\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"breadcrumb-link\">Tableau de bord</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                            <tr>
                                <th>Profil</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>tel</th>
                                <th>Statut</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 63, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 64
            echo "                                <tr>
                                    <td> <img class=\"rounded-circle\" width=\"40px\" src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, $context["admin"], "avatar", [], "any", false, false, false, 65))), "html", null, true);
            echo "\" alt=\"...\"></td>
                                    <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "name", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                    <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "email", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                                    <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "tel", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                                    <td>";
            // line 69
            echo twig_include($this->env, $context, "admin/admin/status.html.twig", ["etat_statut" => twig_get_attribute($this->env, $this->source, $context["admin"], "status", [], "any", false, false, false, 69)]);
            echo "</td>
                                    <td>
                                        ";
            // line 71
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 72
                echo "                                            ";
                echo twig_include($this->env, $context, "admin/admin/_supprimer_form.html.twig");
                echo "
                                        ";
            } else {
                // line 74
                echo "                                            ";
                echo twig_include($this->env, $context, "admin/admin/_delete_form.html.twig");
                echo "
                                        ";
            }
            // line 76
            echo "                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 79
            echo "                                    <tr>
                                        <td colspan=\"5\">no records found</td>
                                    </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                        </tbody>
                    </table>
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
        return "admin/admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 83,  249 => 79,  234 => 76,  228 => 74,  222 => 72,  220 => 71,  215 => 69,  211 => 68,  207 => 67,  203 => 66,  199 => 65,  196 => 64,  178 => 63,  152 => 40,  146 => 36,  140 => 34,  134 => 32,  131 => 31,  125 => 30,  122 => 29,  119 => 28,  116 => 27,  111 => 26,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard/base.html.twig' %}

{% block title %} Liste des administrateurs!{% endblock %}

{% block main %}
    <style>
      .breadcrumb-link{
          color:royalblue;
      }
      .btn-ajout{
          background-color: #115ea1;
          border-color: white;
          font-size: 15px;
      }
      a[disabled=\"disabled\"] {
          pointer-events: none;
      }
    </style>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                <div class=\"page-header\">
                    <h2 class=\"pageheader-title d-flex justify-content-between pt-5\">
                        Liste des administrateurs
                        {% set n = 0 %}
                        {% for admin in admins %}
                            {% if app.user.name == admin.name %}
                                {% set n = n + 1 %}
                            {% endif %}
                        {% endfor %}
                        {% if is_granted('ROLE_SUPER_ADMIN') %}
                            <a href=\"{{ path('admin_admin_new') }}\"  class=\"btn btn-primary btn-sm btn-ajout title-btn mr-1\" ><i class=\"fas fa-user-plus\"></i><br>admin</a>
                        {% else %}
                            <a href=\"{{ path('admin_admin_new') }}\" disabled=\"disabled\" class=\"btn btn-primary btn-sm btn-ajout title-btn mr-1\" ><i class=\"fas fa-user-plus\"></i><br>Admin</a>
                        {% endif %}
                    </h2>
                    <div class=\"page-breadcrumb\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a href=\"{{ path('admin_dashboard') }}\" class=\"breadcrumb-link\">Tableau de bord</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                            <tr>
                                <th>Profil</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>tel</th>
                                <th>Statut</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for admin in admins %}
                                <tr>
                                    <td> <img class=\"rounded-circle\" width=\"40px\" src=\"{{ asset('images/avatars/'~admin.avatar )}}\" alt=\"...\"></td>
                                    <td>{{ admin.name }}</td>
                                    <td>{{ admin.email }}</td>
                                    <td>{{ admin.tel }}</td>
                                    <td>{{ include('admin/admin/status.html.twig', { 'etat_statut': admin.status}) }}</td>
                                    <td>
                                        {% if is_granted('ROLE_SUPER_ADMIN') %}
                                            {{ include('admin/admin/_supprimer_form.html.twig') }}
                                        {% else %}
                                            {{ include('admin/admin/_delete_form.html.twig') }}
                                        {% endif %}
                                    </td>
                                </tr>
                            {% else %}
                                    <tr>
                                        <td colspan=\"5\">no records found</td>
                                    </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/admin/index.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\admin\\index.html.twig");
    }
}
