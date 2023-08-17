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

/* admin/dashboard/profil.html.twig */
class __TwigTemplate_d16ba9285f66c47e8179884805cb0d1e21d4a8ad445432139862d7a79f89ac59 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/profil.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/dashboard/profil.html.twig", 1);
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

        echo "Profil";
        
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
   .mt{
       margin:10px auto;
   }
   .mh{
       background-color: #3030c9;
   }
   .mk{
       background-color: #3030c9;
       width:115px;
       padding:10px;
       color:white;
       margin-bottom:0px;
       border-radius:5px;
   }
   #fa-eye{
       color: #323839;
       float: right;
   }
</style>
<div class=\"container-fluid\">
    <h1 class=\"mt-4\">Profil</h1>
    <ol class=\"breadcrumb mb-4\">
        <li class=\"breadcrumb-item active\">Profil</li>
    </ol>
    <div class=\"row\">
        <div class=\"col-xl-4 col-md-6\">
            <div class=\"card mb-4\">
                <div class=\"card-header mh\">
                </div>
                <div class=\"card-body\">
                    <div class=\"osahan-user text-center\">
                        <div class=\"osahan-user-media\">
                            <img class=\"mb-3 rounded-pill shadow-sm mt-1\" width=\"200px\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 39, $this->source); })()), "etudiant", [], "any", false, false, false, 39), "avatar", [], "any", false, false, false, 39))), "html", null, true);
        echo "\" alt=\"gurdeep singh osahan\">
                            <div class=\"osahan-user-media-body\">
                                <h6 class=\"mb-2\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 41, $this->source); })()), "etudiant", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "</h6>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type=\"text\" class=\"form-control mt\" disabled value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 46, $this->source); })()), "etudiant", [], "any", false, false, false, 46), "email", [], "any", false, false, false, 46), "html", null, true);
        echo "\">
                        <input type=\"text\" class=\"form-control mt\" disabled value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 47, $this->source); })()), "etudiant", [], "any", false, false, false, 47), "tel", [], "any", false, false, false, 47), "html", null, true);
        echo "\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-8 col-md-6\">
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <p class=\"mk\">Informations</p>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-xl-4 col-md-6 mt\">
                            Mention
                        </div>
                        <div class=\"col-xl-8 col-md-6 mt\">
                            <input type=\"text\" class=\"form-control\" disabled value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 63, $this->source); })()), "mention", [], "any", false, false, false, 63), "code", [], "any", false, false, false, 63), "name", [], "any", false, false, false, 63), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-xl-4 col-md-6 mt\">
                            Niveau
                        </div>
                        <div class=\"col-xl-8 col-md-6 mt\">
                            <input type=\"text\" class=\"form-control\" disabled value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 69, $this->source); })()), "mention", [], "any", false, false, false, 69), "cycle", [], "any", false, false, false, 69), "code", [], "any", false, false, false, 69), "html", null, true);
        echo "\">
                        </div>
                        ";
        // line 71
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 71, $this->source); })()), "parcours", [], "any", false, false, false, 71), null))) {
            // line 72
            echo "                            <div class=\"col-xl-4 col-md-6 mt\">
                                Parcours
                            </div>
                            <div class=\"col-xl-8 col-md-6 mt\">
                                <input type=\"text\" class=\"form-control\" disabled value=\"";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 76, $this->source); })()), "parcours", [], "any", false, false, false, 76), "name", [], "any", false, false, false, 76), "html", null, true);
            echo "\">
                            </div>
                        ";
        }
        // line 79
        echo "                        <div class=\"col-xl-4 col-md-6 mt\">
                            Date d'inscription
                        </div>
                        <div class=\"col-xl-8 col-md-6 mt\">
                            <input type=\"text\" class=\"form-control\" disabled value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 83, $this->source); })()), "dateInscription", [], "any", false, false, false, 83), "format", [0 => "Y-m-d"], "method", false, false, false, 83), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-xl-4 col-md-6 mt\">
                            Année universitaire
                        </div>
                        <div class=\"col-xl-8 col-md-6 mt\">
                            <input type=\"text\" class=\"form-control\" disabled value=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 89, $this->source); })()), "year", [], "any", false, false, false, 89), "html", null, true);
        echo "\">
                        </div>
                        ";
        // line 91
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 91, $this->source); })()), "mention", [], "any", false, false, false, 91), "cycle", [], "any", false, false, false, 91), "code", [], "any", false, false, false, 91), "L1"))) {
            // line 92
            echo "                            <div class=\"col-xl-4 col-md-6 mt\">
                                Fichier de virement
                            </div>
                            <div class=\"col-xl-8 col-md-6 mt\">
                                ";
            // line 96
            if (twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 96, $this->source); })()), "fichierVirement", [], "any", false, false, false, 96)) {
                // line 97
                echo "                                    <div>
                                        <figure>
                                            <img src=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 99, $this->source); })()), "fichierVirement", [], "any", false, false, false, 99))), "html", null, true);
                echo "\" alt=\"...\" width=\"100%\">
                                            <a href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 100, $this->source); })()), "fichierVirement", [], "any", false, false, false, 100))), "html", null, true);
                echo "\" title=\"Diplôme Bacc ou relever des notes\" id=\"fa-eye\"><i class=\"fa fw fa-eye\"></i> Voir</a>
                                        </figure>
                                    </div>
                                ";
            } else {
                // line 104
                echo "                                    <div><p>Aucune</p></div>
                                ";
            }
            // line 106
            echo "                            </div>
                        ";
        }
        // line 108
        echo "                        <div class=\"col-xl-4 col-md-6 mt\"></div>
                        <div class=\"col-xl-8 col-md-6 mt\">
                            ";
        // line 110
        echo twig_include($this->env, $context, "admin/inscrire/_supprimer_form.html.twig");
        echo "
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

    public function getTemplateName()
    {
        return "admin/dashboard/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 110,  240 => 108,  236 => 106,  232 => 104,  225 => 100,  221 => 99,  217 => 97,  215 => 96,  209 => 92,  207 => 91,  202 => 89,  193 => 83,  187 => 79,  181 => 76,  175 => 72,  173 => 71,  168 => 69,  159 => 63,  140 => 47,  136 => 46,  128 => 41,  123 => 39,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard/base.html.twig' %}

{% block title %}Profil{% endblock %}

{% block main %}
<style>
   .mt{
       margin:10px auto;
   }
   .mh{
       background-color: #3030c9;
   }
   .mk{
       background-color: #3030c9;
       width:115px;
       padding:10px;
       color:white;
       margin-bottom:0px;
       border-radius:5px;
   }
   #fa-eye{
       color: #323839;
       float: right;
   }
</style>
<div class=\"container-fluid\">
    <h1 class=\"mt-4\">Profil</h1>
    <ol class=\"breadcrumb mb-4\">
        <li class=\"breadcrumb-item active\">Profil</li>
    </ol>
    <div class=\"row\">
        <div class=\"col-xl-4 col-md-6\">
            <div class=\"card mb-4\">
                <div class=\"card-header mh\">
                </div>
                <div class=\"card-body\">
                    <div class=\"osahan-user text-center\">
                        <div class=\"osahan-user-media\">
                            <img class=\"mb-3 rounded-pill shadow-sm mt-1\" width=\"200px\" src=\"{{ asset('images/avatars/'~inscrire.etudiant.avatar )}}\" alt=\"gurdeep singh osahan\">
                            <div class=\"osahan-user-media-body\">
                                <h6 class=\"mb-2\">{{ inscrire.etudiant.name }}</h6>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type=\"text\" class=\"form-control mt\" disabled value=\"{{ inscrire.etudiant.email }}\">
                        <input type=\"text\" class=\"form-control mt\" disabled value=\"{{ inscrire.etudiant.tel }}\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-8 col-md-6\">
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <p class=\"mk\">Informations</p>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-xl-4 col-md-6 mt\">
                            Mention
                        </div>
                        <div class=\"col-xl-8 col-md-6 mt\">
                            <input type=\"text\" class=\"form-control\" disabled value=\"{{ inscrire.mention.code.name }}\">
                        </div>
                        <div class=\"col-xl-4 col-md-6 mt\">
                            Niveau
                        </div>
                        <div class=\"col-xl-8 col-md-6 mt\">
                            <input type=\"text\" class=\"form-control\" disabled value=\"{{ inscrire.mention.cycle.code }}\">
                        </div>
                        {% if inscrire.parcours != null %}
                            <div class=\"col-xl-4 col-md-6 mt\">
                                Parcours
                            </div>
                            <div class=\"col-xl-8 col-md-6 mt\">
                                <input type=\"text\" class=\"form-control\" disabled value=\"{{ inscrire.parcours.name }}\">
                            </div>
                        {% endif %}
                        <div class=\"col-xl-4 col-md-6 mt\">
                            Date d'inscription
                        </div>
                        <div class=\"col-xl-8 col-md-6 mt\">
                            <input type=\"text\" class=\"form-control\" disabled value=\"{{ inscrire.dateInscription.format(\"Y-m-d\")}}\">
                        </div>
                        <div class=\"col-xl-4 col-md-6 mt\">
                            Année universitaire
                        </div>
                        <div class=\"col-xl-8 col-md-6 mt\">
                            <input type=\"text\" class=\"form-control\" disabled value=\"{{ inscrire.year }}\">
                        </div>
                        {% if inscrire.mention.cycle.code == \"L1\" %}
                            <div class=\"col-xl-4 col-md-6 mt\">
                                Fichier de virement
                            </div>
                            <div class=\"col-xl-8 col-md-6 mt\">
                                {% if inscrire.fichierVirement %}
                                    <div>
                                        <figure>
                                            <img src=\"{{ asset('images/avatars/'~inscrire.fichierVirement )}}\" alt=\"...\" width=\"100%\">
                                            <a href=\"{{ asset('images/avatars/'~inscrire.fichierVirement )}}\" title=\"Diplôme Bacc ou relever des notes\" id=\"fa-eye\"><i class=\"fa fw fa-eye\"></i> Voir</a>
                                        </figure>
                                    </div>
                                {% else %}
                                    <div><p>Aucune</p></div>
                                {% endif %}
                            </div>
                        {% endif %}
                        <div class=\"col-xl-4 col-md-6 mt\"></div>
                        <div class=\"col-xl-8 col-md-6 mt\">
                            {{ include('admin/inscrire/_supprimer_form.html.twig') }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "admin/dashboard/profil.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\admin\\dashboard\\profil.html.twig");
    }
}
