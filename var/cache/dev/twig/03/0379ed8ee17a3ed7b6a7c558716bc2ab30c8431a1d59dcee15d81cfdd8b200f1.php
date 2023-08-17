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

/* admin/gestionCours/cours.html.twig */
class __TwigTemplate_fdee156e0a376a956765fd50890112f679d73c90d8de6f71e02fd577bb3cccbd extends Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestionCours/cours.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestionCours/cours.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/gestionCours/cours.html.twig", 1);
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

        echo " Gestion des cours | Cours ";
        
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
        echo "<style>
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
    <h1 class=\"mt-4\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mention"]) || array_key_exists("mention", $context) ? $context["mention"] : (function () { throw new RuntimeError('Variable "mention" does not exist.', 39, $this->source); })()), "parcours", [], "any", false, false, false, 39), "fullname", [], "any", false, false, false, 39), "html", null, true);
        echo "</h1>
    <ol class=\"breadcrumb mb-4\">
        <li class=\"breadcrumb-item active\"><a class=\"tb text-info\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">
                Tableau de bord</a>
            <a class=\"text-info\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_admin_gestion_cours");
        echo "\">/Mention</a>
            <a class=\"text-info\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parcours_admin_gestion_cours", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mention"]) || array_key_exists("mention", $context) ? $context["mention"] : (function () { throw new RuntimeError('Variable "mention" does not exist.', 44, $this->source); })()), "code", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\">/Parcours</a></li>/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mention"]) || array_key_exists("mention", $context) ? $context["mention"] : (function () { throw new RuntimeError('Variable "mention" does not exist.', 44, $this->source); })()), "parcours", [], "any", false, false, false, 44), "fullname", [], "any", false, false, false, 44), "html", null, true);
        echo "
    </ol>
    <div class=\"row\">
        <div class=\"col-xl-12\">
            <div class=\"card text-white mb-4\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-xl-12\">
                            <div class=\"card text-black-50 mb-4\">
                                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ues"]) || array_key_exists("ues", $context) ? $context["ues"] : (function () { throw new RuntimeError('Variable "ues" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ue"]) {
            // line 54
            echo "                                     <div class=\"card-header header-card\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "name", [], "any", false, false, false, 54), "html", null, true);
            echo "</div>
                                     ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ue"], "no", [], "any", false, false, false, 55));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
                // line 56
                echo "
                                            <div class=\"gold-members p-3 border-bottom\">
                                                <div class=\"float-right\">

                                                    <h6 class=\"badge badge-info\" >Crédit: ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ec"], "coeff", [], "any", false, false, false, 60), "html", null, true);
                echo "</h6>
                                                    <a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cours_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ec"], "cours", [], "any", false, false, false, 61), 0, [], "array", false, false, false, 61), "id", [], "any", false, false, false, 61)]), "html", null, true);
                echo "\" class=\"badge badge-success\"><i class=\"feather-edit\"></i></a>
                                                    <a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cours_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ec"], "cours", [], "any", false, false, false, 62), 0, [], "array", false, false, false, 62), "id", [], "any", false, false, false, 62)]), "html", null, true);
                echo "\" class=\"badge badge-secondary \"><i class=\"feather-eye\"></i></a>

                                                </div>
                                                <div class=\"media\">
                                                    <div></div>
                                                    <div class=\"media-body\">
                                                        <h6 class=\"mb-1\">";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ec"], "name", [], "any", false, false, false, 68), "html", null, true);
                echo "</h6>
                                                    </div>
                                                </div>
                                            </div>
                                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 73
                echo "                                         <p class=\"text-center\">( Vide )</p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                            </div>
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

    // line 86
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
        return "admin/gestionCours/cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 86,  212 => 76,  206 => 75,  199 => 73,  189 => 68,  180 => 62,  176 => 61,  172 => 60,  166 => 56,  161 => 55,  156 => 54,  152 => 53,  138 => 44,  134 => 43,  129 => 41,  124 => 39,  89 => 6,  79 => 5,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard/base.html.twig' %}
{% block title %} Gestion des cours | Cours {% endblock %}


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
    <h1 class=\"mt-4\">{{ mention.parcours.fullname }}</h1>
    <ol class=\"breadcrumb mb-4\">
        <li class=\"breadcrumb-item active\"><a class=\"tb text-info\" href=\"{{ path('admin_dashboard') }}\">
                Tableau de bord</a>
            <a class=\"text-info\" href=\"{{ path('index_admin_gestion_cours') }}\">/Mention</a>
            <a class=\"text-info\" href=\"{{ path('parcours_admin_gestion_cours',{'id' : mention.code.id }) }}\">/Parcours</a></li>/{{ mention.parcours.fullname }}
    </ol>
    <div class=\"row\">
        <div class=\"col-xl-12\">
            <div class=\"card text-white mb-4\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-xl-12\">
                            <div class=\"card text-black-50 mb-4\">
                                {% for ue in ues %}
                                     <div class=\"card-header header-card\">{{ ue.name }}</div>
                                     {% for ec in ue.no %}

                                            <div class=\"gold-members p-3 border-bottom\">
                                                <div class=\"float-right\">

                                                    <h6 class=\"badge badge-info\" >Crédit: {{ ec.coeff }}</h6>
                                                    <a href=\"{{ path('admin_cours_edit' ,{'id': ec.cours[0].id }) }}\" class=\"badge badge-success\"><i class=\"feather-edit\"></i></a>
                                                    <a href=\"{{ path('admin_cours_show' ,{'id': ec.cours[0].id }) }}\" class=\"badge badge-secondary \"><i class=\"feather-eye\"></i></a>

                                                </div>
                                                <div class=\"media\">
                                                    <div></div>
                                                    <div class=\"media-body\">
                                                        <h6 class=\"mb-1\">{{ ec.name }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                    {% else %}
                                         <p class=\"text-center\">( Vide )</p>
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
", "admin/gestionCours/cours.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\admin\\gestionCours\\cours.html.twig");
    }
}
