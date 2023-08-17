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

/* etudiant/espace/inscription/inscription.html.twig */
class __TwigTemplate_e7e30e25cec1759701893d530fdd7bc8340b9cf6a0376ad86accb5b1c8e9de09 extends Template
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
        return "etudiant/espace/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/inscription/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/inscription/inscription.html.twig"));

        $this->parent = $this->loadTemplate("etudiant/espace/base.html.twig", "etudiant/espace/inscription/inscription.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("inscription/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/formStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
<style>
    .errors ul li {
        color: red;
        list-style: none;
        margin-left: -37px;
    }

    .errors.form-label-group > input {
        border-bottom: 1px solid red !important;
        box-shadow: none !important;
    }
    .content-header{
        margin-top: 20px;
    }

</style>

<div class=\"\" style=\"margin-top: -19px; \">

        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6 izy\">
                        <h1 class=\"breadcrumb text-tt text-info\">Inscription </h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\" class=\"text-info\">Inscription</a></li>
                            <li class=\"breadcrumb-item active\">Tableau de Bord</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class=\"page-wrapper p-t-45 p-b-50\">
            <div class=\"wrapper c wrapper--w790\">
                ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_start');
        echo "
                <h1 class=\"text-center titre text-black-50\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["annee"]) || array_key_exists("annee", $context) ? $context["annee"] : (function () { throw new RuntimeError('Variable "annee" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "</h1>
                <div class=\"card-body bg-info\">

                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <img class=\"mb-2 rounded-pill shadow-sm mt-1\" style=\"margin-left:0px;padding-left:0px;\"
                            width=\"120px\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "avatar", [], "any", false, false, false, 54))), "html", null, true);
        echo "\" alt=\"gurdeep singh osahan\">
                        </div>
                        <div class=\"col-md-9\" style=\"margin-top:20px;\">
                            <div class=\"name text-white\"><b>Nom : ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), "html", null, true);
        echo "</b></div>
                            <div class=\"name text-white\"><b>Adresse : ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "email", [], "any", false, false, false, 58), "html", null, true);
        echo "</b></div>
                            <div class=\"name text-white\"><b>Téléphone : ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "tel", [], "any", false, false, false, 59), "html", null, true);
        echo "</b></div>
                        </div>
                    </div>
                    <hr class=\"bg-white\">

                    </br>
                    <div class=\"row\">
                        <div class=\"col-md-12 ttr\">
                            <label for=\"matricule\" class=\"label\">Matricule :</label>
                            <input type=\"number\"  disabled value=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["matricule"]) || array_key_exists("matricule", $context) ? $context["matricule"] : (function () { throw new RuntimeError('Variable "matricule" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "\" class=\"effet text-white\" style=\"width: 15%;margin-left: -10px;border:none;\" id=\"matricule\" required name=\"matricule\">
                        </div>

                        <div class=\"col-md-6\">
                            <select id=\"cycle\"  name=\"cycle\">
                                <option value=\"\">---choix de niveau---</option>
                                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cycles"]) || array_key_exists("cycles", $context) ? $context["cycles"] : (function () { throw new RuntimeError('Variable "cycles" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cycle"]) {
            // line 75
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "id", [], "any", false, false, false, 75), "html", null, true);
            echo "\" class=\"text-white effet\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "name", [], "any", false, false, false, 75), "html", null, true);
            echo " ( ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "code", [], "any", false, false, false, 75), "html", null, true);
            echo " ) </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cycle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                            </select>
                        </div>
                        <div class=\"col-md-6\">
                            <select id=\"parcours\" class=\"parcours\" name=\"parcours\">
                                <option value=\"\">---choisir parcours---</option>
                            </select>
                        </div>

                        <div class=\"col-md-12\">
                            <p class=\"text-white-50 title1 text-center\">frais d'inscription</p><br>
                            <input type=\"text\" value=\"\" disabled class=\"droit\" placeholder=\"unité ariary\"/>
                        </div>

                        <div class=\"col-md-12\">
                            <div class=\"row\">
                                <div class=\"col-md-6\"><label for=\"payement\">type de payement:</label></div>
                                <div class=\"col-md-6\">
                                    <input type=\"radio\" id=\"mobileMoney\" onClick=\"bascule('boite1');\" class=\"disp1\" name=\"payement\"  value=\"mobile money\">
                                    <p class=\"label disp1\">mobile Money</p><br>
                                    <input type=\"radio\" class=\"disp2\" onClick=\"bascule('boite2');\" id=\"banque\" name=\"payement\" value=\"banque\">
                                    <p class=\"label disp2\">banque</p>
                                </div>
                            </div>

                           <div name=\"boite1\" id=\"boite1\" class=\"boite1\" style=\"display: none\">

                                <div class=\" text-center\"><h5 class=\"title1 text-white-50\">Veuillez virer votre frais d'inscription au numéro ci-dessous</h5></div><br>
                                            <center>
                                                <div class=\"form-group\" style=\"margin-top: -20px;\">
                                                    <ul>
                                                        ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comptes"]) || array_key_exists("comptes", $context) ? $context["comptes"] : (function () { throw new RuntimeError('Variable "comptes" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
            // line 108
            echo "                                                            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["compte"], "type", [], "any", false, false, false, 108), "banque"))) {
                // line 109
                echo "                                                                <li class=\"text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compte"], "titre", [], "any", false, false, false, 109), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compte"], "compte", [], "any", false, false, false, 109), "html", null, true);
                echo "</li>
                                                            ";
            }
            // line 111
            echo "                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </center>
                                <p class=\"text-white-50 title2 text-center\">Veuillez entrer le numero de référence de votre transaction<br>du frais d'inscription au compte ci-dessus</p><br>
                                ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "reference", [], "any", false, false, false, 117), 'widget');
        echo "

                           </div>

                            <div name=\"boite2\" id=\"boite2\" class=\"boite2\" style=\"display: none\">
                                <div class=\" text-center\"><h5 class=\"title1 text-white-50\">Veuillez virer votre droit d'inscription au numero de compte ci-dessous</h5></div><br>

                                ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comptes"]) || array_key_exists("comptes", $context) ? $context["comptes"] : (function () { throw new RuntimeError('Variable "comptes" does not exist.', 124, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
            // line 125
            echo "                                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["compte"], "type", [], "any", false, false, false, 125), "banque"))) {
                // line 126
                echo "                                        <div class=\"text-center text-white-50 compte\">( Compte ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compte"], "titre", [], "any", false, false, false, 126), "html", null, true);
                echo " )</div>
                                        <center>
                                            <div class=\"form-group\">
                                                <input type=\"text\" style=\"color:black;font-weight:bold;width:200px;border-color:#18B1D0;\" placeholder=\"";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compte"], "compte", [], "any", false, false, false, 129), "html", null, true);
                echo "\" disabled class=\"form-control somme text-center\"/>
                                            </div>
                                        </center>
                                    ";
            }
            // line 133
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                                <p class=\"text-white-50 title2 text-center\">inserer ici la photo du bordereau de versement <br> après l'avoir viré au compte ci-dessus</p><br>
                                <center>
                                    ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "fichierVir", [], "any", false, false, false, 136), 'widget');
        echo "
                                    ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "fichierVir", [], "any", false, false, false, 137), 'errors');
        echo "
                                </center>
                            </div>

                            <center><button  type=\"submit\">Valider</button></center>
                        </div>

                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
                <div class=\"outer\"></div>
                ";
        // line 151
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
</div>


    <!-- Jquery JS-->
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("inscription/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Main JS-->
                <script type=\"text/javascript\">

                    jQuery(document).ready(function (\$) {

                        \$(\"#cycle\").change(function(){
                            var valNiveau = \$(this).val();
                            var data = \"niveau=\" + valNiveau +\"&code=\"+";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 166, $this->source); })()), "id", [], "any", false, false, false, 166), "html", null, true);
        echo ";

                            \$.ajax({
                                type: \"GET\",
                                url: \"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiant_inscription_get_fee");
        echo "\",
                                data: data,
                                success: function(data){
                                    \$(\".droit\").val(data.droit +\" Ar\");
                                    \$('#parcours').empty();
                                    console.log(data.parcours)
                                    if(data.parcours){
                                        for(var i=0 ; i< data.parcours.length; i++){
                                            console.log(data.parcours);
                                            \$('#parcours').append('<option class=\"text-white text-center\" value= \"'+ data.parcours[i]['id'] +'\">'+ data.parcours[i]['name'] +'</option>');
                                        }
                                    }

                                }
                            })
                        })

                    });

                    function bascule(elem)
                    {
                        // Quel est l'état actuel ?
                        etat=document.getElementById(elem).style.display;
                        if(etat==\"none\"){
                            document.getElementById(elem).style.display=\"initial\";
                        }
                    }

                </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/espace/inscription/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 170,  345 => 166,  334 => 158,  324 => 151,  307 => 137,  303 => 136,  299 => 134,  293 => 133,  286 => 129,  279 => 126,  276 => 125,  272 => 124,  262 => 117,  255 => 112,  249 => 111,  241 => 109,  238 => 108,  234 => 107,  202 => 77,  189 => 75,  185 => 74,  176 => 68,  164 => 59,  160 => 58,  156 => 57,  150 => 54,  139 => 48,  135 => 47,  93 => 8,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'etudiant/espace/base.html.twig' %}


{% block title %}Inscription{% endblock %}

{% block main %}
<link href=\"{{ asset('inscription/css/main.css') }}\" rel=\"stylesheet\" media=\"all\">
<link href=\"{{ asset('css/formStyle.css') }}\" rel=\"stylesheet\" media=\"all\">
<style>
    .errors ul li {
        color: red;
        list-style: none;
        margin-left: -37px;
    }

    .errors.form-label-group > input {
        border-bottom: 1px solid red !important;
        box-shadow: none !important;
    }
    .content-header{
        margin-top: 20px;
    }

</style>

<div class=\"\" style=\"margin-top: -19px; \">

        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6 izy\">
                        <h1 class=\"breadcrumb text-tt text-info\">Inscription </h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\" class=\"text-info\">Inscription</a></li>
                            <li class=\"breadcrumb-item active\">Tableau de Bord</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class=\"page-wrapper p-t-45 p-b-50\">
            <div class=\"wrapper c wrapper--w790\">
                {{ form_start( form ) }}
                <h1 class=\"text-center titre text-black-50\">{{ code.name }} {{ annee }}</h1>
                <div class=\"card-body bg-info\">

                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <img class=\"mb-2 rounded-pill shadow-sm mt-1\" style=\"margin-left:0px;padding-left:0px;\"
                            width=\"120px\" src=\"{{ asset('images/avatars/'~app.user.avatar )}}\" alt=\"gurdeep singh osahan\">
                        </div>
                        <div class=\"col-md-9\" style=\"margin-top:20px;\">
                            <div class=\"name text-white\"><b>Nom : {{ user.name }}</b></div>
                            <div class=\"name text-white\"><b>Adresse : {{ user.email }}</b></div>
                            <div class=\"name text-white\"><b>Téléphone : {{ user.tel }}</b></div>
                        </div>
                    </div>
                    <hr class=\"bg-white\">

                    </br>
                    <div class=\"row\">
                        <div class=\"col-md-12 ttr\">
                            <label for=\"matricule\" class=\"label\">Matricule :</label>
                            <input type=\"number\"  disabled value=\"{{ matricule }}\" class=\"effet text-white\" style=\"width: 15%;margin-left: -10px;border:none;\" id=\"matricule\" required name=\"matricule\">
                        </div>

                        <div class=\"col-md-6\">
                            <select id=\"cycle\"  name=\"cycle\">
                                <option value=\"\">---choix de niveau---</option>
                                {% for cycle in cycles %}
                                    <option value=\"{{ cycle.id }}\" class=\"text-white effet\">{{ cycle.name }} ( {{ cycle.code }} ) </option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"col-md-6\">
                            <select id=\"parcours\" class=\"parcours\" name=\"parcours\">
                                <option value=\"\">---choisir parcours---</option>
                            </select>
                        </div>

                        <div class=\"col-md-12\">
                            <p class=\"text-white-50 title1 text-center\">frais d'inscription</p><br>
                            <input type=\"text\" value=\"\" disabled class=\"droit\" placeholder=\"unité ariary\"/>
                        </div>

                        <div class=\"col-md-12\">
                            <div class=\"row\">
                                <div class=\"col-md-6\"><label for=\"payement\">type de payement:</label></div>
                                <div class=\"col-md-6\">
                                    <input type=\"radio\" id=\"mobileMoney\" onClick=\"bascule('boite1');\" class=\"disp1\" name=\"payement\"  value=\"mobile money\">
                                    <p class=\"label disp1\">mobile Money</p><br>
                                    <input type=\"radio\" class=\"disp2\" onClick=\"bascule('boite2');\" id=\"banque\" name=\"payement\" value=\"banque\">
                                    <p class=\"label disp2\">banque</p>
                                </div>
                            </div>

                           <div name=\"boite1\" id=\"boite1\" class=\"boite1\" style=\"display: none\">

                                <div class=\" text-center\"><h5 class=\"title1 text-white-50\">Veuillez virer votre frais d'inscription au numéro ci-dessous</h5></div><br>
                                            <center>
                                                <div class=\"form-group\" style=\"margin-top: -20px;\">
                                                    <ul>
                                                        {% for compte in comptes %}
                                                            {% if compte.type != \"banque\" %}
                                                                <li class=\"text-white\">{{ compte.titre }}: {{ compte.compte }}</li>
                                                            {% endif %}
                                                        {% endfor %}
                                                        <li></li>
                                                    </ul>
                                                </div>
                                            </center>
                                <p class=\"text-white-50 title2 text-center\">Veuillez entrer le numero de référence de votre transaction<br>du frais d'inscription au compte ci-dessus</p><br>
                                {{ form_widget(form.reference) }}

                           </div>

                            <div name=\"boite2\" id=\"boite2\" class=\"boite2\" style=\"display: none\">
                                <div class=\" text-center\"><h5 class=\"title1 text-white-50\">Veuillez virer votre droit d'inscription au numero de compte ci-dessous</h5></div><br>

                                {% for compte in comptes %}
                                    {% if compte.type == \"banque\" %}
                                        <div class=\"text-center text-white-50 compte\">( Compte {{ compte.titre }} )</div>
                                        <center>
                                            <div class=\"form-group\">
                                                <input type=\"text\" style=\"color:black;font-weight:bold;width:200px;border-color:#18B1D0;\" placeholder=\"{{ compte.compte }}\" disabled class=\"form-control somme text-center\"/>
                                            </div>
                                        </center>
                                    {% endif %}
                                {% endfor %}
                                <p class=\"text-white-50 title2 text-center\">inserer ici la photo du bordereau de versement <br> après l'avoir viré au compte ci-dessus</p><br>
                                <center>
                                    {{ form_widget(form.fichierVir) }}
                                    {{ form_errors(form.fichierVir) }}
                                </center>
                            </div>

                            <center><button  type=\"submit\">Valider</button></center>
                        </div>

                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
                <div class=\"outer\"></div>
                {{ form_end(form) }}
            </div>
        </div>
</div>


    <!-- Jquery JS-->
    <script src=\"{{ asset('inscription/vendor/jquery/jquery.min.js') }}\"></script>
    <!-- Main JS-->
                <script type=\"text/javascript\">

                    jQuery(document).ready(function (\$) {

                        \$(\"#cycle\").change(function(){
                            var valNiveau = \$(this).val();
                            var data = \"niveau=\" + valNiveau +\"&code=\"+{{ code.id }};

                            \$.ajax({
                                type: \"GET\",
                                url: \"{{ path('etudiant_inscription_get_fee') }}\",
                                data: data,
                                success: function(data){
                                    \$(\".droit\").val(data.droit +\" Ar\");
                                    \$('#parcours').empty();
                                    console.log(data.parcours)
                                    if(data.parcours){
                                        for(var i=0 ; i< data.parcours.length; i++){
                                            console.log(data.parcours);
                                            \$('#parcours').append('<option class=\"text-white text-center\" value= \"'+ data.parcours[i]['id'] +'\">'+ data.parcours[i]['name'] +'</option>');
                                        }
                                    }

                                }
                            })
                        })

                    });

                    function bascule(elem)
                    {
                        // Quel est l'état actuel ?
                        etat=document.getElementById(elem).style.display;
                        if(etat==\"none\"){
                            document.getElementById(elem).style.display=\"initial\";
                        }
                    }

                </script>
{% endblock %}
", "etudiant/espace/inscription/inscription.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\etudiant\\espace\\inscription\\inscription.html.twig");
    }
}
