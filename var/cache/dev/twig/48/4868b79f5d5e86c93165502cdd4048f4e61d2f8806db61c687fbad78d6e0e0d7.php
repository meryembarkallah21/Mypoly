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

/* etudiant/profile/index.html.twig */
class __TwigTemplate_58b84ac601971cf2c48468efa97e7bd8d44b66b7f4afcf1041e5878cdcdd58ab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/profile/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/profile/index.html.twig"));

        $this->parent = $this->loadTemplate("etudiant/espace/base.html.twig", "etudiant/profile/index.html.twig", 1);
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

        echo "Log in!
";
        
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
        .errors ul li {
            color: red;
            list-style: none;
            margin-left: -37px;
        }
        .errors input {
            border: 1px solid red;
        }
        .iti.iti--allow-dropdown{
            width: 100% !important;
         }
         .iti.iti--allow-dropdown>input {
            background: transparent !important;
            border-radius: 0 !important;
         }
         .tel-errors .iti.iti--allow-dropdown>input {
            border: 1px solid red !important;
         }
         .iti.iti--allow-dropdown .form-control {
            box-shadow: none !important;
         }
         .save{
             margin-left: 40%;
         }
         .save1{
             margin-left: -10%;
         }
         .separation{
             width: 70%;
             height: 1px;
             margin: auto;
             margin-bottom: 10px;
         }
         .save3{
             margin-left: 40%;
         }
         .ville{
             padding: 0 10px;
             width: 93%;
             margin-left: 10px;
         }
         .titre{
            font-weight: bold;
            margin-top: 5px;
            margin-bottom: -10px;
         }
    </style>
        <div class=\"container-fluid\">
            <!-- Content Header (Page header) -->
            <div class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-sm-6\">
                            <h2 class=\"m-0 text-black\">Profil <span class=\"feather-user text-info\"></span></h2>
                        </div><!-- /.col -->
                        <div class=\"col-sm-6\">
                            <ol class=\"breadcrumb float-sm-right\">
                                <li class=\"breadcrumb-item \"><a href=\"#\" class=\"text-info\">Tableau de Bord</a></li>
                                <li class=\"breadcrumb-item active\">bibliotheque</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
                <div class=\"card\">
                    <div class=\"row \">
                                ";
        // line 75
        echo "                                <div class=\"col-md-9\">
                                    <div class=\"osahan-account-page-right p-4 h-100\">
                                        <div class=\"tab-content \" id=\"myTabContent\">
                                            <div class=\"row\">
                                                <div class=\"col-xl-12\">

                                                    <div class=\"card mb-4 order-list\">
                                                        <div class=\"gold-members p-4\">
                                                            ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_start');
        echo "
                                                                <div class=\"row\">

                                                                    <div class=\"col-md-5\">
                                                                        <div class=\"col-md-12\">
                                                                            <div class=\"form-group\" id=\"tel-container\">
                                                                                <label>Telephone</label>
                                                                                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "tel", [], "any", false, false, false, 90), 'widget');
        echo "
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-12 form-group ";
        // line 93
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "avatarfile", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "valid", [], "any", false, false, false, 93)) {
            echo "errors";
        }
        echo "\">
                                                                            <label>Votre photo</label>
                                                                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "avatarfile", [], "any", false, false, false, 95), 'widget');
        echo "
                                                                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "avatarfile", [], "any", false, false, false, 96), 'errors');
        echo "
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-7 add_top_30\">
                                                                        <div class=\"row\">
                                                                            <div class=\"col-md-12\">
                                                                                <div class=\"form-group ";
        // line 102
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "name", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "valid", [], "any", false, false, false, 102)) {
            echo "errors";
        }
        echo "\">
                                                                                    <label>Nom</label>
                                                                                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "name", [], "any", false, false, false, 104), 'widget');
        echo "
                                                                                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "name", [], "any", false, false, false, 105), 'errors');
        echo "
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-md-12\">
                                                                                <div class=\"form-group ";
        // line 109
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "email", [], "any", false, false, false, 109), "vars", [], "any", false, false, false, 109), "valid", [], "any", false, false, false, 109)) {
            echo "errors";
        }
        echo "\">
                                                                                    <label>Email</label>
                                                                                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "email", [], "any", false, false, false, 111), 'widget');
        echo "
                                                                                    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "email", [], "any", false, false, false, 112), 'errors');
        echo "
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-5\">
                                                                        <div class=\"form-group\" >
                                                                            <label style=\"margin-left: 15px\">Ville</label>
                                                                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "ville", [], "any", false, false, false, 122), 'widget');
        echo "
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-7\">
                                                                        <div class=\"form-group\" >
                                                                            <label>Adresse</label>
                                                                            ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "adresse", [], "any", false, false, false, 128), 'widget');
        echo "
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <div class=\"save mb-2 mr-5\">
                                                                <button type=\"submit\" id=\"btn-etudiant-edit-profile\" class=\"btn btn-success\">Enregistrer</button>
                                                            </div>
                                                            ";
        // line 135
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), 'form_end');
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-12 mx-auto\">
                                                    <div class=\"card mb-4 order-list\">

                                                            <div class=\"gold-members\">
                                                                ";
        // line 145
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 145, $this->source); })()), 'form_start');
        echo "
                                                                <div class=\"box_general padding_bottom\">
                                                                    <div class=\"header_box version_2 border-bottom p-3\">
                                                                        <h6 class=\"m-0\">
                                                                            <i class=\"fa fa-lock text-muted mr-2\"></i>Changer de mot de passe</h6>
                                                                    </div>
                                                                    <div class=\"p-3\">
                                                                        <div class=\"form-group ";
        // line 152
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 152, $this->source); })()), "oldPassword", [], "any", false, false, false, 152), "vars", [], "any", false, false, false, 152), "valid", [], "any", false, false, false, 152)) {
            echo "errors";
        }
        echo " \">
                                                                            <label>Mot de passe actuel</label>
                                                                            ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 154, $this->source); })()), "oldPassword", [], "any", false, false, false, 154), 'widget');
        echo "
                                                                            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 155, $this->source); })()), "oldPassword", [], "any", false, false, false, 155), 'errors');
        echo "
                                                                        </div>
                                                                        <div class=\"form-group ";
        // line 157
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 157, $this->source); })()), "newPassword", [], "any", false, false, false, 157), "vars", [], "any", false, false, false, 157), "valid", [], "any", false, false, false, 157)) {
            echo "errors";
        }
        echo " \">
                                                                            <label>Nouveau mot de passe</label>
                                                                            ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 159, $this->source); })()), "newPassword", [], "any", false, false, false, 159), 'widget');
        echo "
                                                                            ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 160, $this->source); })()), "newPassword", [], "any", false, false, false, 160), 'errors');
        echo "
                                                                        </div>
                                                                        <div class=\"form-group ";
        // line 162
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 162, $this->source); })()), "confirmPassword", [], "any", false, false, false, 162), "vars", [], "any", false, false, false, 162), "valid", [], "any", false, false, false, 162)) {
            echo "errors";
        }
        echo " \">
                                                                            <label>Confirmer</label>
                                                                            ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 164, $this->source); })()), "confirmPassword", [], "any", false, false, false, 164), 'widget');
        echo "
                                                                            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 165, $this->source); })()), "confirmPassword", [], "any", false, false, false, 165), 'errors');
        echo "
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"save1 mb-2 text-center\">
                                                                    <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                                                                </div>
                                                                ";
        // line 172
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 172, $this->source); })()), 'form_end');
        echo "
                                                            </div>



                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-3 p-4\">

                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"card mb-4\" >
                                                <center>
                                                    <p class=\"text-center badge badge-info titre\" style=\"width: 40%;\">Ajout document</p>
                                                </center>
                                                ";
        // line 192
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDoc"]) || array_key_exists("formDoc", $context) ? $context["formDoc"] : (function () { throw new RuntimeError('Variable "formDoc" does not exist.', 192, $this->source); })()), 'form_start');
        echo "
                                                    <div class=\"gold-members p-4\">
                                                        <div class=\"col-md-12\">
                                                            <div class=\"form-group\" id=\"tel-container\">
                                                                <label>Titre:</label>
                                                                ";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formDoc"]) || array_key_exists("formDoc", $context) ? $context["formDoc"] : (function () { throw new RuntimeError('Variable "formDoc" does not exist.', 197, $this->source); })()), "title", [], "any", false, false, false, 197), 'widget');
        echo "
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-12 form-group ";
        // line 200
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "avatarfile", [], "any", false, false, false, 200), "vars", [], "any", false, false, false, 200), "valid", [], "any", false, false, false, 200)) {
            echo "errors";
        }
        echo "\">
                                                            <label>fichier du document</label>
                                                            ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formDoc"]) || array_key_exists("formDoc", $context) ? $context["formDoc"] : (function () { throw new RuntimeError('Variable "formDoc" does not exist.', 202, $this->source); })()), "fichierdoc", [], "any", false, false, false, 202), 'widget');
        echo "
                                                            ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formDoc"]) || array_key_exists("formDoc", $context) ? $context["formDoc"] : (function () { throw new RuntimeError('Variable "formDoc" does not exist.', 203, $this->source); })()), "fichierdoc", [], "any", false, false, false, 203), 'errors');
        echo "
                                                        </div>
                                                    </div>

                                                    <center><button type=\"submit\" class=\"btn btn-success\">Ajouter</button></center>

                                                ";
        // line 209
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDoc"]) || array_key_exists("formDoc", $context) ? $context["formDoc"] : (function () { throw new RuntimeError('Variable "formDoc" does not exist.', 209, $this->source); })()), 'form_end');
        echo "
                                                <hr>
                                                <center>
                                                    <p class=\"titre badge badge-info\" style=\"margin-bottom: 30px;width: 40%;\">
                                                        Mes documents:
                                                    </p>
                                                </center>
                                                ";
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 216, $this->source); })()), "document", [], "any", false, false, false, 216));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 217
            echo "                                                    <div class=\"row\">
                                                        <div class=\"col-md-4\">
                                                            <p style=\"text-align: center\">";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "title", [], "any", false, false, false, 219), "html", null, true);
            echo ":</p>
                                                        </div>
                                                        <div class=\"col-md-8\">
                                                            <center>
                                                                <p>
                                                                    <img src=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/motif_inscription_file/" . twig_get_attribute($this->env, $this->source, $context["doc"], "fichier", [], "any", false, false, false, 224))), "html", null, true);
            echo "\" width=\"60%\" alt=\"\">
                                                                </p>
                                                            </center>
                                                        </div>
                                                    </div>
                                                    <div class=\"separation bg-gradient-secondary\"></div>
                                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 231
            echo "                                                    <p style=\"font-size: 10px;text-align: center;margin-top: 20px;\">Vous n'avez pas encore de document enregistré,<br> veuillez l'insérer s'il vous plait</p>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "
                                            </div>
                                        </div>

                                    </div>

                                </div>
                </div>
            </div>
        </div>



<script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>
    <script type=\"text/javascript\">
      jQuery(document).ready(function(\$){

        
        var input = document.querySelector(\"#user_tel\");
        
         errorMsg = document.querySelector(\"#error-msg\"),
         validMsg = document.querySelector(\"#valid-msg\");
         var tel_parent = document.getElementById(\"tel-container\");

        // here, the index maps to the error code returned from getValidationError - see readme
        var errorMap = [\"Invalid number\", \"Invalid country code\", \"Too short\", \"Too long\", \"Invalid number\"];
        var iti = window.intlTelInput(input, {
            utilsScript: \"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tel/js/utils.js"), "html", null, true);
        echo "\", // just for formatting/placeholders etc;
            nationalMode: false,
        });
         var reset = function() {
            tel_parent.classList.remove(\"tel-errors\");
            document.getElementById(\"btn-etudiant-edit-profile\").disabled = false;
         };
         input.addEventListener(\"load\", function(){
             iti.setNumber(iti.getNumber());
         });
        // on blur: validate
        input.addEventListener('blur', function() {
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    //validMsg.classList.remove(\"hide\");
                } else {
                    console.log(\"erreur\");
                    tel_parent.classList.add(\"tel-errors\");
                    document.getElementById(\"btn-etudiant-edit-profile\").disabled = true;
                }
            }
        });
        // on keyup / change flag: reset
        input.addEventListener('change', reset);
        input.addEventListener('keyup', reset);
      });

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 260,  444 => 233,  437 => 231,  425 => 224,  417 => 219,  413 => 217,  408 => 216,  398 => 209,  389 => 203,  385 => 202,  378 => 200,  372 => 197,  364 => 192,  341 => 172,  331 => 165,  327 => 164,  320 => 162,  315 => 160,  311 => 159,  304 => 157,  299 => 155,  295 => 154,  288 => 152,  278 => 145,  265 => 135,  255 => 128,  246 => 122,  233 => 112,  229 => 111,  222 => 109,  215 => 105,  211 => 104,  204 => 102,  195 => 96,  191 => 95,  184 => 93,  178 => 90,  168 => 83,  158 => 75,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'etudiant/espace/base.html.twig' %}

{% block title %}Log in!
{% endblock %}

{% block main %}
    <style>
        .errors ul li {
            color: red;
            list-style: none;
            margin-left: -37px;
        }
        .errors input {
            border: 1px solid red;
        }
        .iti.iti--allow-dropdown{
            width: 100% !important;
         }
         .iti.iti--allow-dropdown>input {
            background: transparent !important;
            border-radius: 0 !important;
         }
         .tel-errors .iti.iti--allow-dropdown>input {
            border: 1px solid red !important;
         }
         .iti.iti--allow-dropdown .form-control {
            box-shadow: none !important;
         }
         .save{
             margin-left: 40%;
         }
         .save1{
             margin-left: -10%;
         }
         .separation{
             width: 70%;
             height: 1px;
             margin: auto;
             margin-bottom: 10px;
         }
         .save3{
             margin-left: 40%;
         }
         .ville{
             padding: 0 10px;
             width: 93%;
             margin-left: 10px;
         }
         .titre{
            font-weight: bold;
            margin-top: 5px;
            margin-bottom: -10px;
         }
    </style>
        <div class=\"container-fluid\">
            <!-- Content Header (Page header) -->
            <div class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-sm-6\">
                            <h2 class=\"m-0 text-black\">Profil <span class=\"feather-user text-info\"></span></h2>
                        </div><!-- /.col -->
                        <div class=\"col-sm-6\">
                            <ol class=\"breadcrumb float-sm-right\">
                                <li class=\"breadcrumb-item \"><a href=\"#\" class=\"text-info\">Tableau de Bord</a></li>
                                <li class=\"breadcrumb-item active\">bibliotheque</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
                <div class=\"card\">
                    <div class=\"row \">
                                {#  {{ include('etudiant/sidebar.html.twig') }} #}
                                <div class=\"col-md-9\">
                                    <div class=\"osahan-account-page-right p-4 h-100\">
                                        <div class=\"tab-content \" id=\"myTabContent\">
                                            <div class=\"row\">
                                                <div class=\"col-xl-12\">

                                                    <div class=\"card mb-4 order-list\">
                                                        <div class=\"gold-members p-4\">
                                                            {{ form_start(form) }}
                                                                <div class=\"row\">

                                                                    <div class=\"col-md-5\">
                                                                        <div class=\"col-md-12\">
                                                                            <div class=\"form-group\" id=\"tel-container\">
                                                                                <label>Telephone</label>
                                                                                {{ form_widget(form.tel) }}
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-md-12 form-group {% if not form.avatarfile.vars.valid %}errors{% endif %}\">
                                                                            <label>Votre photo</label>
                                                                            {{ form_widget(form.avatarfile) }}
                                                                            {{ form_errors(form.avatarfile) }}
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-7 add_top_30\">
                                                                        <div class=\"row\">
                                                                            <div class=\"col-md-12\">
                                                                                <div class=\"form-group {% if not form.name.vars.valid %}errors{% endif %}\">
                                                                                    <label>Nom</label>
                                                                                    {{ form_widget(form.name) }}
                                                                                    {{ form_errors(form.name) }}
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-md-12\">
                                                                                <div class=\"form-group {% if not form.email.vars.valid %}errors{% endif %}\">
                                                                                    <label>Email</label>
                                                                                    {{ form_widget(form.email) }}
                                                                                    {{ form_errors(form.email) }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-5\">
                                                                        <div class=\"form-group\" >
                                                                            <label style=\"margin-left: 15px\">Ville</label>
                                                                            {{ form_widget(form.ville) }}
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-7\">
                                                                        <div class=\"form-group\" >
                                                                            <label>Adresse</label>
                                                                            {{ form_widget(form.adresse) }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <div class=\"save mb-2 mr-5\">
                                                                <button type=\"submit\" id=\"btn-etudiant-edit-profile\" class=\"btn btn-success\">Enregistrer</button>
                                                            </div>
                                                            {{ form_end(form) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-12 mx-auto\">
                                                    <div class=\"card mb-4 order-list\">

                                                            <div class=\"gold-members\">
                                                                {{ form_start(form_pass)}}
                                                                <div class=\"box_general padding_bottom\">
                                                                    <div class=\"header_box version_2 border-bottom p-3\">
                                                                        <h6 class=\"m-0\">
                                                                            <i class=\"fa fa-lock text-muted mr-2\"></i>Changer de mot de passe</h6>
                                                                    </div>
                                                                    <div class=\"p-3\">
                                                                        <div class=\"form-group {% if not form_pass.oldPassword.vars.valid %}errors{% endif %} \">
                                                                            <label>Mot de passe actuel</label>
                                                                            {{ form_widget(form_pass.oldPassword) }}
                                                                            {{ form_errors(form_pass.oldPassword) }}
                                                                        </div>
                                                                        <div class=\"form-group {% if not form_pass.newPassword.vars.valid %}errors{% endif %} \">
                                                                            <label>Nouveau mot de passe</label>
                                                                            {{ form_widget(form_pass.newPassword) }}
                                                                            {{ form_errors(form_pass.newPassword) }}
                                                                        </div>
                                                                        <div class=\"form-group {% if not form_pass.confirmPassword.vars.valid %}errors{% endif %} \">
                                                                            <label>Confirmer</label>
                                                                            {{ form_widget(form_pass.confirmPassword) }}
                                                                            {{ form_errors(form_pass.confirmPassword) }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"save1 mb-2 text-center\">
                                                                    <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                                                                </div>
                                                                {{ form_end(form_pass) }}
                                                            </div>



                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-3 p-4\">

                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"card mb-4\" >
                                                <center>
                                                    <p class=\"text-center badge badge-info titre\" style=\"width: 40%;\">Ajout document</p>
                                                </center>
                                                {{ form_start(formDoc) }}
                                                    <div class=\"gold-members p-4\">
                                                        <div class=\"col-md-12\">
                                                            <div class=\"form-group\" id=\"tel-container\">
                                                                <label>Titre:</label>
                                                                {{ form_widget(formDoc.title) }}
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-12 form-group {% if not form.avatarfile.vars.valid %}errors{% endif %}\">
                                                            <label>fichier du document</label>
                                                            {{ form_widget(formDoc.fichierdoc) }}
                                                            {{ form_errors(formDoc.fichierdoc) }}
                                                        </div>
                                                    </div>

                                                    <center><button type=\"submit\" class=\"btn btn-success\">Ajouter</button></center>

                                                {{ form_end(formDoc) }}
                                                <hr>
                                                <center>
                                                    <p class=\"titre badge badge-info\" style=\"margin-bottom: 30px;width: 40%;\">
                                                        Mes documents:
                                                    </p>
                                                </center>
                                                {% for doc in user.document %}
                                                    <div class=\"row\">
                                                        <div class=\"col-md-4\">
                                                            <p style=\"text-align: center\">{{ doc.title }}:</p>
                                                        </div>
                                                        <div class=\"col-md-8\">
                                                            <center>
                                                                <p>
                                                                    <img src=\"{{ asset('images/motif_inscription_file/'~doc.fichier ) }}\" width=\"60%\" alt=\"\">
                                                                </p>
                                                            </center>
                                                        </div>
                                                    </div>
                                                    <div class=\"separation bg-gradient-secondary\"></div>
                                                {% else %}
                                                    <p style=\"font-size: 10px;text-align: center;margin-top: 20px;\">Vous n'avez pas encore de document enregistré,<br> veuillez l'insérer s'il vous plait</p>
                                                {% endfor %}

                                            </div>
                                        </div>

                                    </div>

                                </div>
                </div>
            </div>
        </div>



<script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>
    <script type=\"text/javascript\">
      jQuery(document).ready(function(\$){

        
        var input = document.querySelector(\"#user_tel\");
        
         errorMsg = document.querySelector(\"#error-msg\"),
         validMsg = document.querySelector(\"#valid-msg\");
         var tel_parent = document.getElementById(\"tel-container\");

        // here, the index maps to the error code returned from getValidationError - see readme
        var errorMap = [\"Invalid number\", \"Invalid country code\", \"Too short\", \"Too long\", \"Invalid number\"];
        var iti = window.intlTelInput(input, {
            utilsScript: \"{{ asset('vendor/tel/js/utils.js') }}\", // just for formatting/placeholders etc;
            nationalMode: false,
        });
         var reset = function() {
            tel_parent.classList.remove(\"tel-errors\");
            document.getElementById(\"btn-etudiant-edit-profile\").disabled = false;
         };
         input.addEventListener(\"load\", function(){
             iti.setNumber(iti.getNumber());
         });
        // on blur: validate
        input.addEventListener('blur', function() {
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    //validMsg.classList.remove(\"hide\");
                } else {
                    console.log(\"erreur\");
                    tel_parent.classList.add(\"tel-errors\");
                    document.getElementById(\"btn-etudiant-edit-profile\").disabled = true;
                }
            }
        });
        // on keyup / change flag: reset
        input.addEventListener('change', reset);
        input.addEventListener('keyup', reset);
      });

    </script>

{% endblock %}

", "etudiant/profile/index.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\etudiant\\profile\\index.html.twig");
    }
}
