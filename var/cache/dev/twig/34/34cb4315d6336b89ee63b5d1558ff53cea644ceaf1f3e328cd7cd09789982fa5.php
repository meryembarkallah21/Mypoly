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

/* admin/parametre/index.html.twig */
class __TwigTemplate_acfc395ee41007fd299a977b45bf0746f50e3d2cecbdf91fd9f157461292e3d7 extends Template
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
            'contenu' => [$this, 'block_contenu'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parametre/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parametre/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/parametre/index.html.twig", 1);
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
        .tb{
            color:royalblue;
            margin-right: 10px;
        }
    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Paramètre</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\"><a class=\"tb\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">Tableau de Bord</a>/ Paramètre</li>
        </ol>
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"card mb-4\">
                    <div class=\"card-header\">
                        ";
        // line 21
        $this->loadTemplate("admin/parametre/tab_menu_param.html.twig", "admin/parametre/index.html.twig", 21)->display($context);
        // line 22
        echo "                    </div>
                    <div class=\"card-body\">
                        <!-----formulaire d'ajout------->
                        <contenu>
                            ";
        // line 26
        $this->displayBlock('contenu', $context, $blocks);
        // line 83
        echo "                        </contenu>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("inscription/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Main JS-->
    <script type=\"text/javascript\">

        jQuery(document).ready(function (\$) {
            \$(\"#_filiere\").change(function (){
                var valfiliere = \$(this).val();

                \$(\"#_niveau\").change(function(){
                    var valNiveau = \$(this).val();
                    var data = \"niveau=\" + valNiveau +\"&code=\"+valfiliere;

                    \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get-parc");
        echo "\",
                        data: data,
                        success: function(data){
                            \$('#_parcours').empty();
                            if(data.parcours){
                                for(var i=0 ; i< data.parcours.length; i++){
                                    \$('#_parcours').append('<option  value= \"'+ data.parcours[i]['id'] +'\">'+ data.parcours[i]['name'] +'</option>');
                                }
                            }

                        }
                    })

                })

            })

        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 27
        echo "                                <style>
                                    #card-header{
                                        background-color: #0f6674;
                                        color:white;
                                    }
                                </style>
                                <div class=\"col-xl-12\">
                                    <div class=\"card mb-4\">
                                        <div class=\"card-header\" id=\"card-header\">
                                            <i class=\"fas fa-chart-bar mr-1\"></i>
                                            Créer Une Mention
                                        </div>
                                        <div class=\"card-body\">
                                            <form action=\"\" method=\"post\">
                                                <table>
                                                    <tr>
                                                        <td width=\"300px\">Filière</td>
                                                        <td width=\"500px\">
                                                            <select id=\"_filiere\"  name=\"_filiere\" class=\"form-control\">
                                                                <option class=\"text-center\" value=\"\">--- Choisir une filière ---</option>
                                                                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filieres"]) || array_key_exists("filieres", $context) ? $context["filieres"] : (function () { throw new RuntimeError('Variable "filieres" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["filiere"]) {
            // line 48
            echo "                                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filiere"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filiere"], "name", [], "any", false, false, false, 48), "html", null, true);
            echo "</option>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width=\"300px\">Niveau</td>
                                                        <td width=\"500px\">
                                                            <select id=\"_niveau\"  name=\"_niveau\" class=\"form-control\">
                                                                <option class=\"text-center\" value=\"\">--- Choisir niveau ---</option>
                                                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cycle"]) {
            // line 59
            echo "                                                                    <option  value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "code", [], "any", false, false, false, 59), "html", null, true);
            echo "</option>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cycle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width=\"300px\">Parcours</td>
                                                        <td  width=\"500px\">
                                                            <select id=\"_parcours\"  name=\"_parcours\" class=\"form-control\">
                                                                <option class=\"text-center\" value=\"\">--- Choisir parcours ---</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td><br><button class=\"btn btn-primary\">";
        // line 74
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 74, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button></td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                    </div>
                                    ";
        // line 80
        $this->loadTemplate("admin/mention/affiche.html.twig", "admin/parametre/index.html.twig", 80)->display($context);
        // line 81
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
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
        return "admin/parametre/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 126,  295 => 81,  293 => 80,  284 => 74,  269 => 61,  258 => 59,  254 => 58,  244 => 50,  233 => 48,  229 => 47,  207 => 27,  197 => 26,  166 => 105,  149 => 91,  139 => 83,  137 => 26,  131 => 22,  129 => 21,  120 => 15,  109 => 6,  99 => 5,  81 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard/base.html.twig' %}
{% block title %} Tableau de Bord{% endblock %}
{% block css %}
{% endblock %}
{% block main %}
    <style>
        .tb{
            color:royalblue;
            margin-right: 10px;
        }
    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Paramètre</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\"><a class=\"tb\" href=\"{{ path('admin_dashboard') }}\">Tableau de Bord</a>/ Paramètre</li>
        </ol>
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"card mb-4\">
                    <div class=\"card-header\">
                        {% include 'admin/parametre/tab_menu_param.html.twig' %}
                    </div>
                    <div class=\"card-body\">
                        <!-----formulaire d'ajout------->
                        <contenu>
                            {% block contenu %}
                                <style>
                                    #card-header{
                                        background-color: #0f6674;
                                        color:white;
                                    }
                                </style>
                                <div class=\"col-xl-12\">
                                    <div class=\"card mb-4\">
                                        <div class=\"card-header\" id=\"card-header\">
                                            <i class=\"fas fa-chart-bar mr-1\"></i>
                                            Créer Une Mention
                                        </div>
                                        <div class=\"card-body\">
                                            <form action=\"\" method=\"post\">
                                                <table>
                                                    <tr>
                                                        <td width=\"300px\">Filière</td>
                                                        <td width=\"500px\">
                                                            <select id=\"_filiere\"  name=\"_filiere\" class=\"form-control\">
                                                                <option class=\"text-center\" value=\"\">--- Choisir une filière ---</option>
                                                                {% for filiere in filieres %}
                                                                    <option value=\"{{ filiere.id }}\">{{ filiere.name }}</option>
                                                                {% endfor %}
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width=\"300px\">Niveau</td>
                                                        <td width=\"500px\">
                                                            <select id=\"_niveau\"  name=\"_niveau\" class=\"form-control\">
                                                                <option class=\"text-center\" value=\"\">--- Choisir niveau ---</option>
                                                                {% for cycle in niveaux %}
                                                                    <option  value=\"{{ cycle.id }}\"> {{ cycle.code }}</option>
                                                                {% endfor %}
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width=\"300px\">Parcours</td>
                                                        <td  width=\"500px\">
                                                            <select id=\"_parcours\"  name=\"_parcours\" class=\"form-control\">
                                                                <option class=\"text-center\" value=\"\">--- Choisir parcours ---</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td><br><button class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button></td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                    </div>
                                    {% include 'admin/mention/affiche.html.twig' %}
                                </div>
                            {% endblock %}
                        </contenu>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src=\"{{ asset('inscription/vendor/jquery/jquery.min.js') }}\"></script>
    <!-- Main JS-->
    <script type=\"text/javascript\">

        jQuery(document).ready(function (\$) {
            \$(\"#_filiere\").change(function (){
                var valfiliere = \$(this).val();

                \$(\"#_niveau\").change(function(){
                    var valNiveau = \$(this).val();
                    var data = \"niveau=\" + valNiveau +\"&code=\"+valfiliere;

                    \$.ajax({
                        type: \"GET\",
                        url: \"{{ path('get-parc') }}\",
                        data: data,
                        success: function(data){
                            \$('#_parcours').empty();
                            if(data.parcours){
                                for(var i=0 ; i< data.parcours.length; i++){
                                    \$('#_parcours').append('<option  value= \"'+ data.parcours[i]['id'] +'\">'+ data.parcours[i]['name'] +'</option>');
                                }
                            }

                        }
                    })

                })

            })

        });

    </script>
{% endblock %}
{% block javascript %}
{% endblock %}
", "admin/parametre/index.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\parametre\\index.html.twig");
    }
}
