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

/* admin/mention/new.html.twig */
class __TwigTemplate_07b6bf67ab463d8ae6e8444a8fa3ba6d158c903046d3d6d26609892930f5da33 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'contenu' => [$this, 'block_contenu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/parametre/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/mention/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/mention/new.html.twig"));

        $this->parent = $this->loadTemplate("admin/parametre/index.html.twig", "admin/mention/new.html.twig", 1);
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

        echo "New Mention";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "    <style>
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
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filieres"]) || array_key_exists("filieres", $context) ? $context["filieres"] : (function () { throw new RuntimeError('Variable "filieres" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["filiere"]) {
            // line 27
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filiere"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filiere"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width=\"300px\">Niveau</td>
                        <td width=\"500px\">
                            <select id=\"_niveau\"  name=\"_niveau\" class=\"form-control\">
                                <option class=\"text-center\" value=\"\">--- Choisir niveau ---</option>
                                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cycle"]) {
            // line 38
            echo "                                    <option  value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "code", [], "any", false, false, false, 38), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cycle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                            </select>
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
        // line 53
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 53, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button></td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
        ";
        // line 59
        $this->loadTemplate("admin/mention/affiche.html.twig", "admin/mention/new.html.twig", 59)->display($context);
        // line 60
        echo "    </div>
    <!-- Jquery JS-->
    <script src=\"";
        // line 62
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
        // line 76
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

    public function getTemplateName()
    {
        return "admin/mention/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 76,  180 => 62,  176 => 60,  174 => 59,  165 => 53,  150 => 40,  139 => 38,  135 => 37,  125 => 29,  114 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/parametre/index.html.twig' %}

{% block title %}New Mention{% endblock %}

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
", "admin/mention/new.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\mention\\new.html.twig");
    }
}
