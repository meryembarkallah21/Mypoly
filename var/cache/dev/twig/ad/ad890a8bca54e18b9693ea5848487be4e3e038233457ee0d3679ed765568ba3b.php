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

/* prof/profile/index.html.twig */
class __TwigTemplate_c0e8fc9d236816a2e9989dffd5d12b7dee8a5d2da22ff31dc876390741838c06 extends Template
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
        return "prof/dashboard/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/profile/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/profile/index.html.twig"));

        $this->parent = $this->loadTemplate("prof/dashboard/base.html.twig", "prof/profile/index.html.twig", 1);
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

        echo "Prof | Profil
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
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
    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\"><span class=\"feather-user\"></span>Mon Profil</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\">Mon Profil</li>
        </ol>
    </div>
    <section class=\"section pt-4 pb-4 osahan-account-page\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 41
        echo "                ";
        echo twig_include($this->env, $context, "prof/sidebar.html.twig");
        echo "
                <div class=\"col-md-9\">
                    <div class=\"osahan-account-page-right shadow-sm bg-white p-4 h-100\">
                        <div class=\"tab-content\" id=\"myTabContent\">
                            <div class=\"row\">
                                <div class=\"col-xl-12\">
                                    <div class=\"card mb-4 order-list\">
                                        <div class=\"gold-members p-4\">
                                            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_start');
        echo "
                                                <div class=\"row\">
                                                    
                                                    <div class=\"col-md-5\">
                                                        <div class=\"col-md-12\">
                                                            <div class=\"form-group\" id=\"tel-container\">
                                                                <label>Téléphone</label>
                                                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "tel", [], "any", false, false, false, 56), 'widget');
        echo "
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-12\">
                                                            <div class=\"form-group ";
        // line 60
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "avatarfile", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "valid", [], "any", false, false, false, 60)) {
            echo "errors";
        }
        echo "\">
                                                                <label for=\"\">Photo de profil</label>
                                                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "avatarfile", [], "any", false, false, false, 62), 'widget');
        echo "
                                                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "avatarfile", [], "any", false, false, false, 63), 'errors');
        echo "
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-12\">
                                                            <div class=\"form-group\">
                                                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "ville", [], "any", false, false, false, 68), 'label');
        echo "
                                                                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "ville", [], "any", false, false, false, 69), 'widget');
        echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-7 add_top_30\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-12\">
                                                                <div class=\"form-group ";
        // line 76
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "name", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "valid", [], "any", false, false, false, 76)) {
            echo "errors";
        }
        echo "\">
                                                                    <label>Nom</label>
                                                                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "name", [], "any", false, false, false, 78), 'widget');
        echo "
                                                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "name", [], "any", false, false, false, 79), 'errors');
        echo "
                                                                </div>
                                                            </div>
                                                            <div class=\"col-md-12\">
                                                                <div class=\"form-group ";
        // line 83
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "email", [], "any", false, false, false, 83), "vars", [], "any", false, false, false, 83), "valid", [], "any", false, false, false, 83)) {
            echo "errors";
        }
        echo "\">
                                                                    <label>Email</label>
                                                                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "email", [], "any", false, false, false, 85), 'widget');
        echo "
                                                                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "email", [], "any", false, false, false, 86), 'errors');
        echo "
                                                                </div>
                                                            </div>
                                                            <div class=\"col-md-12\">
                                                                <div class=\"form-group\">
                                                                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "adresse", [], "any", false, false, false, 91), 'label');
        echo "
                                                                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "adresse", [], "any", false, false, false, 92), 'widget');
        echo "
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class=\"save mb-2 ml-auto mr-5\">
                                                            <button type=\"submit\" id=\"btn-etudiant-edit-profile\" class=\"btn btn-success\">Enregistrer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'form_end');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 mx-auto\">
                                    <div class=\"card mb-4 order-list\">
                                        ";
        // line 109
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 109, $this->source); })()), 'form_start');
        echo "
                                            <div class=\"gold-members\">
                                                <div class=\"box_general padding_bottom\">
                                                    <div class=\"header_box version_2 border-bottom p-3\">
                                                        <h6 class=\"m-0\">
                                                            <i class=\"fa fa-lock text-muted mr-2\"></i>Changer votre mot de passe</h6>
                                                    </div>
                                                    <div class=\"p-3\">
                                                        <div class=\"form-group ";
        // line 117
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 117, $this->source); })()), "oldPassword", [], "any", false, false, false, 117), "vars", [], "any", false, false, false, 117), "valid", [], "any", false, false, false, 117)) {
            echo "errors";
        }
        echo " \">
                                                            <label>Ancien mot de passe</label>
                                                            ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 119, $this->source); })()), "oldPassword", [], "any", false, false, false, 119), 'widget');
        echo "
                                                            ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 120, $this->source); })()), "oldPassword", [], "any", false, false, false, 120), 'errors');
        echo "
                                                        </div>
                                                        <div class=\"form-group ";
        // line 122
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 122, $this->source); })()), "newPassword", [], "any", false, false, false, 122), "vars", [], "any", false, false, false, 122), "valid", [], "any", false, false, false, 122)) {
            echo "errors";
        }
        echo " \">
                                                            <label>Nouveau mot de passe</label>
                                                            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 124, $this->source); })()), "newPassword", [], "any", false, false, false, 124), 'widget');
        echo "
                                                            ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 125, $this->source); })()), "newPassword", [], "any", false, false, false, 125), 'errors');
        echo "
                                                        </div>
                                                        <div class=\"form-group ";
        // line 127
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 127, $this->source); })()), "confirmPassword", [], "any", false, false, false, 127), "vars", [], "any", false, false, false, 127), "valid", [], "any", false, false, false, 127)) {
            echo "errors";
        }
        echo " \">
                                                            <label>Confirmer le nouveau mot de passe</label>
                                                            ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 129, $this->source); })()), "confirmPassword", [], "any", false, false, false, 129), 'widget');
        echo "
                                                            ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 130, $this->source); })()), "confirmPassword", [], "any", false, false, false, 130), 'errors');
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"save mb-2 text-center\">
                                                    <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                                                </div>
                                            </div>
                                        ";
        // line 138
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 138, $this->source); })()), 'form_end');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
        // line 161
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
        return "prof/profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 161,  314 => 138,  303 => 130,  299 => 129,  292 => 127,  287 => 125,  283 => 124,  276 => 122,  271 => 120,  267 => 119,  260 => 117,  249 => 109,  238 => 101,  226 => 92,  222 => 91,  214 => 86,  210 => 85,  203 => 83,  196 => 79,  192 => 78,  185 => 76,  175 => 69,  171 => 68,  163 => 63,  159 => 62,  152 => 60,  145 => 56,  135 => 49,  123 => 41,  89 => 8,  79 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'prof/dashboard/base.html.twig' %}

{% block title %}Prof | Profil
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
    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\"><span class=\"feather-user\"></span>Mon Profil</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\">Mon Profil</li>
        </ol>
    </div>
    <section class=\"section pt-4 pb-4 osahan-account-page\">
        <div class=\"container\">
            <div class=\"row\">
                {# include eto #}
                {{ include('prof/sidebar.html.twig') }}
                <div class=\"col-md-9\">
                    <div class=\"osahan-account-page-right shadow-sm bg-white p-4 h-100\">
                        <div class=\"tab-content\" id=\"myTabContent\">
                            <div class=\"row\">
                                <div class=\"col-xl-12\">
                                    <div class=\"card mb-4 order-list\">
                                        <div class=\"gold-members p-4\">
                                            {{ form_start(form) }}
                                                <div class=\"row\">
                                                    
                                                    <div class=\"col-md-5\">
                                                        <div class=\"col-md-12\">
                                                            <div class=\"form-group\" id=\"tel-container\">
                                                                <label>Téléphone</label>
                                                                {{ form_widget(form.tel) }}
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-12\">
                                                            <div class=\"form-group {% if not form.avatarfile.vars.valid %}errors{% endif %}\">
                                                                <label for=\"\">Photo de profil</label>
                                                                {{ form_widget(form.avatarfile) }}
                                                                {{ form_errors(form.avatarfile) }}
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-12\">
                                                            <div class=\"form-group\">
                                                                {{ form_label(form.ville) }}
                                                                {{ form_widget(form.ville) }}
                                                            </div>
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
                                                            <div class=\"col-md-12\">
                                                                <div class=\"form-group\">
                                                                    {{ form_label(form.adresse) }}
                                                                    {{ form_widget(form.adresse) }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class=\"save mb-2 ml-auto mr-5\">
                                                            <button type=\"submit\" id=\"btn-etudiant-edit-profile\" class=\"btn btn-success\">Enregistrer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            {{ form_end(form) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 mx-auto\">
                                    <div class=\"card mb-4 order-list\">
                                        {{ form_start(form_pass)}}
                                            <div class=\"gold-members\">
                                                <div class=\"box_general padding_bottom\">
                                                    <div class=\"header_box version_2 border-bottom p-3\">
                                                        <h6 class=\"m-0\">
                                                            <i class=\"fa fa-lock text-muted mr-2\"></i>Changer votre mot de passe</h6>
                                                    </div>
                                                    <div class=\"p-3\">
                                                        <div class=\"form-group {% if not form_pass.oldPassword.vars.valid %}errors{% endif %} \">
                                                            <label>Ancien mot de passe</label>
                                                            {{ form_widget(form_pass.oldPassword) }}
                                                            {{ form_errors(form_pass.oldPassword) }}
                                                        </div>
                                                        <div class=\"form-group {% if not form_pass.newPassword.vars.valid %}errors{% endif %} \">
                                                            <label>Nouveau mot de passe</label>
                                                            {{ form_widget(form_pass.newPassword) }}
                                                            {{ form_errors(form_pass.newPassword) }}
                                                        </div>
                                                        <div class=\"form-group {% if not form_pass.confirmPassword.vars.valid %}errors{% endif %} \">
                                                            <label>Confirmer le nouveau mot de passe</label>
                                                            {{ form_widget(form_pass.confirmPassword) }}
                                                            {{ form_errors(form_pass.confirmPassword) }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"save mb-2 text-center\">
                                                    <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                                                </div>
                                            </div>
                                        {{ form_end(form_pass) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

", "prof/profile/index.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\prof\\profile\\index.html.twig");
    }
}
