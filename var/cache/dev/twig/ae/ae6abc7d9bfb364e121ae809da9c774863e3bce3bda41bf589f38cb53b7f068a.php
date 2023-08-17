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

/* admin/gestionCours/index.html.twig */
class __TwigTemplate_4fdb9bfbcf6ddb9c36a032f8e944aee8d875f10cea44c7fd6757816084ba9ae8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestionCours/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestionCours/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/gestionCours/index.html.twig", 1);
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

        echo " Admin | Gestion des cours ";
        
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

        .text-logo
        {
            font-family: 'Broadway BT', sans-serif;
            text-shadow: 2px 2px #1839DO;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }
        .filiere
        {
            margin: 15px 10%;
            width: 80%;
        }
        .breadcrumb{
            box-shadow: rgba(0,0,0,0.1) 0px 60px 40px -7px;
            backdrop-filter: blur(4px);
            color: rgba(59,76,255,0.91);
            font-weight: bold;
        }
        .txt{
            font-size: 25px;
            width: 270px;
        }

        .col-md-4 > a:hover{
            background-color: slategray;
        }
        .col-md-4 > a{
            background-color: rgba(19,19,19,0.74);
        }
        .card
        {
            border-radius:10px;
        }
        .content-header
        {
            margin-top: 20px;
        }

    </style>
    <div class=\"container-fluid\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">

                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h2 class=\"m-0 breadcrumb txt text-dark text-black\">Gestion des Cours </h2>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a class=\"text-info\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">Tableau de Bord</a></li>
                            <li class=\"breadcrumb-item active\">Mention</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class=\"card\" >
            <div class=\"card-header\">
                <p class=\"text-logo text-info\">Toutes les mentions</p>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mentions"]) || array_key_exists("mentions", $context) ? $context["mentions"] : (function () { throw new RuntimeError('Variable "mentions" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 74
            echo "                        <div class=\"col-md-4\">

                            <a class=\"text-white card  text-white mb-4\"  href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parcours_admin_gestion_cours", ["id" => twig_get_attribute($this->env, $this->source, $context["code"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\">
                                <div class=\"card-body filiere text-center\">
                                    <img width=\"30px\" style=\"margin-right: 20px\" src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/fichier_icon/" . twig_get_attribute($this->env, $this->source, $context["code"], "icon", [], "any", false, false, false, 78))), "html", null, true);
            echo "\" alt=\"logo\">
                                    ";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["code"], "name", [], "any", false, false, false, 79), "html", null, true);
            echo "
                                </div>
                                <div class=\"card-footer d-flex align-items-center justify-content-between\">

                                </div>
                            </a>

                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                </div>
            </div>

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/gestionCours/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 97,  208 => 96,  192 => 88,  177 => 79,  173 => 78,  168 => 76,  164 => 74,  160 => 73,  144 => 60,  89 => 7,  79 => 6,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard/base.html.twig' %}
{% block title %} Admin | Gestion des cours {% endblock %}



{% block main %}
    <style>

        .text-logo
        {
            font-family: 'Broadway BT', sans-serif;
            text-shadow: 2px 2px #1839DO;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }
        .filiere
        {
            margin: 15px 10%;
            width: 80%;
        }
        .breadcrumb{
            box-shadow: rgba(0,0,0,0.1) 0px 60px 40px -7px;
            backdrop-filter: blur(4px);
            color: rgba(59,76,255,0.91);
            font-weight: bold;
        }
        .txt{
            font-size: 25px;
            width: 270px;
        }

        .col-md-4 > a:hover{
            background-color: slategray;
        }
        .col-md-4 > a{
            background-color: rgba(19,19,19,0.74);
        }
        .card
        {
            border-radius:10px;
        }
        .content-header
        {
            margin-top: 20px;
        }

    </style>
    <div class=\"container-fluid\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">

                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h2 class=\"m-0 breadcrumb txt text-dark text-black\">Gestion des Cours </h2>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a class=\"text-info\" href=\"{{ path('admin_dashboard') }}\">Tableau de Bord</a></li>
                            <li class=\"breadcrumb-item active\">Mention</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class=\"card\" >
            <div class=\"card-header\">
                <p class=\"text-logo text-info\">Toutes les mentions</p>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    {% for code in mentions %}
                        <div class=\"col-md-4\">

                            <a class=\"text-white card  text-white mb-4\"  href=\"{{ path('parcours_admin_gestion_cours', {'id': code.id}) }}\">
                                <div class=\"card-body filiere text-center\">
                                    <img width=\"30px\" style=\"margin-right: 20px\" src=\"{{ asset('images/fichier_icon/'~code.icon) }}\" alt=\"logo\">
                                    {{ code.name }}
                                </div>
                                <div class=\"card-footer d-flex align-items-center justify-content-between\">

                                </div>
                            </a>

                        </div>
                    {% endfor %}
                </div>
            </div>

        </div>
    </div>

{% endblock %}

{% block javascripts %}

{% endblock %}", "admin/gestionCours/index.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\gestionCours\\index.html.twig");
    }
}
