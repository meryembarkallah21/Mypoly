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

/* admin/profile/index.html.twig */
class __TwigTemplate_a461c873285ed09a526a676f7f6b02d827c7435d722a5dfb89e09340db02bccc extends Template
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
            'footer' => [$this, 'block_footer'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/profile/index.html.twig", 1);
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

        echo "Profil!
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
    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\"><span class=\"feather-user\"></span>Mon Profil</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item \"><a class=\"text-info\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">Tableau de bord</a></li>
            <li class=\"breadcrumb-item active\">Mon Profil</li>
        </ol>
    </div>
    <section class=\"section pt-4 pb-4 osahan-account-page\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 41
        echo "                ";
        echo twig_include($this->env, $context, "admin/sidebar.html.twig");
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
                                                                <label>Telephone</label>
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
                                                                <label>Photo de profil</label>
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
                                                            <div class=\"form-group ";
        // line 67
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "avatarfile", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "valid", [], "any", false, false, false, 67)) {
            echo "errors";
        }
        echo "\">
                                                                <label for=\"\">Ville</label>
                                                                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "ville", [], "any", false, false, false, 69), 'widget');
        echo "
                                                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "ville", [], "any", false, false, false, 70), 'errors');
        echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-7 add_top_30\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-12\">
                                                                <div class=\"form-group ";
        // line 77
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "name", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "valid", [], "any", false, false, false, 77)) {
            echo "errors";
        }
        echo "\">
                                                                    <label>Nom</label>
                                                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "name", [], "any", false, false, false, 79), 'widget');
        echo "
                                                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "name", [], "any", false, false, false, 80), 'errors');
        echo "
                                                                </div>
                                                            </div>
                                                            <div class=\"col-md-12\">
                                                                <div class=\"form-group ";
        // line 84
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "email", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "valid", [], "any", false, false, false, 84)) {
            echo "errors";
        }
        echo "\">
                                                                    <label>Email</label>
                                                                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "email", [], "any", false, false, false, 86), 'widget');
        echo "
                                                                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "email", [], "any", false, false, false, 87), 'errors');
        echo "
                                                                </div>
                                                            </div>
                                                            <div class=\"col-md-12\">
                                                                <div class=\"form-group\">
                                                                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "adresse", [], "any", false, false, false, 92), 'label');
        echo "
                                                                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "adresse", [], "any", false, false, false, 93), 'widget');
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
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'form_end');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 mx-auto\">
                                    <div class=\"card mb-4 order-list\">
                                        ";
        // line 110
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 110, $this->source); })()), 'form_start');
        echo "
                                            <div class=\"gold-members\">
                                                <div class=\"box_general padding_bottom\">
                                                    <div class=\"header_box version_2 border-bottom p-3\">
                                                        <h6 class=\"m-0\">
                                                            <i class=\"fa fa-lock text-muted mr-2\"></i>Change password</h6>
                                                    </div>
                                                    <div class=\"p-3\">
                                                        <div class=\"form-group ";
        // line 118
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 118, $this->source); })()), "oldPassword", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "valid", [], "any", false, false, false, 118)) {
            echo "errors";
        }
        echo " \">
                                                            <label>Mot de passe actuel</label>
                                                            ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 120, $this->source); })()), "oldPassword", [], "any", false, false, false, 120), 'widget');
        echo "
                                                            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 121, $this->source); })()), "oldPassword", [], "any", false, false, false, 121), 'errors');
        echo "
                                                        </div>
                                                        <div class=\"form-group ";
        // line 123
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 123, $this->source); })()), "newPassword", [], "any", false, false, false, 123), "vars", [], "any", false, false, false, 123), "valid", [], "any", false, false, false, 123)) {
            echo "errors";
        }
        echo " \">
                                                            <label>Nouveau mot de passe</label>
                                                            ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 125, $this->source); })()), "newPassword", [], "any", false, false, false, 125), 'widget');
        echo "
                                                            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 126, $this->source); })()), "newPassword", [], "any", false, false, false, 126), 'errors');
        echo "
                                                        </div>
                                                        <div class=\"form-group ";
        // line 128
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 128, $this->source); })()), "confirmPassword", [], "any", false, false, false, 128), "vars", [], "any", false, false, false, 128), "valid", [], "any", false, false, false, 128)) {
            echo "errors";
        }
        echo " \">
                                                            <label>Confirmation du nouveau mot de passe</label>
                                                            ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 130, $this->source); })()), "confirmPassword", [], "any", false, false, false, 130), 'widget');
        echo "
                                                            ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 131, $this->source); })()), "confirmPassword", [], "any", false, false, false, 131), 'errors');
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"save mb-2 text-center\">
                                                    <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                                                </div>
                                            </div>
                                        ";
        // line 139
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_pass"]) || array_key_exists("form_pass", $context) ? $context["form_pass"] : (function () { throw new RuntimeError('Variable "form_pass" does not exist.', 139, $this->source); })()), 'form_end');
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 150
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 152
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 153
        echo "
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
        // line 168
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
        return "admin/profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 168,  375 => 153,  365 => 152,  347 => 150,  326 => 139,  315 => 131,  311 => 130,  304 => 128,  299 => 126,  295 => 125,  288 => 123,  283 => 121,  279 => 120,  272 => 118,  261 => 110,  250 => 102,  238 => 93,  234 => 92,  226 => 87,  222 => 86,  215 => 84,  208 => 80,  204 => 79,  197 => 77,  187 => 70,  183 => 69,  176 => 67,  169 => 63,  165 => 62,  158 => 60,  151 => 56,  141 => 49,  129 => 41,  119 => 33,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard/base.html.twig' %}

{% block title %}Profil!
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
            <li class=\"breadcrumb-item \"><a class=\"text-info\" href=\"{{ path('admin_dashboard') }}\">Tableau de bord</a></li>
            <li class=\"breadcrumb-item active\">Mon Profil</li>
        </ol>
    </div>
    <section class=\"section pt-4 pb-4 osahan-account-page\">
        <div class=\"container\">
            <div class=\"row\">
                {# include eto #}
                {{ include('admin/sidebar.html.twig') }}
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
                                                                <label>Telephone</label>
                                                                {{ form_widget(form.tel) }}
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-12\">
                                                            <div class=\"form-group {% if not form.avatarfile.vars.valid %}errors{% endif %}\">
                                                                <label>Photo de profil</label>
                                                                {{ form_widget(form.avatarfile) }}
                                                                {{ form_errors(form.avatarfile) }}
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-12\">
                                                            <div class=\"form-group {% if not form.avatarfile.vars.valid %}errors{% endif %}\">
                                                                <label for=\"\">Ville</label>
                                                                {{ form_widget(form.ville) }}
                                                                {{ form_errors(form.ville) }}
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
                                                            <i class=\"fa fa-lock text-muted mr-2\"></i>Change password</h6>
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
                                                            <label>Confirmation du nouveau mot de passe</label>
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
{% endblock %}
{% block footer %}
{% endblock %}
{% block javascript %}

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

", "admin/profile/index.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\profile\\index.html.twig");
    }
}
