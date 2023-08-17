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

/* admin/admin/new.html.twig */
class __TwigTemplate_f80dd73016904ac1814ae444737823c81d8f558633833186b3f97c92edfc6d85 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin/new.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/admin/new.html.twig", 1);
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

        echo " Ajout d'un nouveau admin!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 5
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
        .breadcrumb-link{
            color:royalblue;
        }
        .btn-success{
            background-color: #cd5757;
            border-color:white;
        }
        .btn-success:hover{
            background-color:royalblue;
        }
        #btn-admin-edit-profile{
            margin-right: 323px;
        }

    </style>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                <div class=\"page-header\">
                    <h2 class=\"pageheader-title d-flex justify-content-between pt-5\">
                        Ajouter un nouveau admin
                    </h2>
                    <div class=\"page-breadcrumb\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"breadcrumb-link\">Tableau de bord</a></li>
                                <li class=\"breadcrumb-item\"><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_admin_index");
        echo "\" class=\"breadcrumb-link\">Liste Administrateurs</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Ajouter un nouveau admin</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"card mb-4 order-list col-md-12 mx-auto\">
                    <div class=\"gold-members p-4\">
                        ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_start');
        echo "
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group ";
        // line 68
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "avatarfile", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "valid", [], "any", false, false, false, 68)) {
            echo "errors";
        }
        echo "\">
                                        <label></label>
                                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "avatarfile", [], "any", false, false, false, 70), 'label');
        echo "
                                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "avatarfile", [], "any", false, false, false, 71), 'widget');
        echo "
                                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "avatarfile", [], "any", false, false, false, 72), 'errors');
        echo "
                                    </div>
                                    <div class=\"form-group\" id=\"tel-container\">
                                        <label>Telephone</label>
                                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "tel", [], "any", false, false, false, 76), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-md-6 add_top_30\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"form-group ";
        // line 82
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "name", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), "valid", [], "any", false, false, false, 82)) {
            echo "errors";
        }
        echo "\">
                                                <label>Name</label>
                                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "name", [], "any", false, false, false, 84), 'widget');
        echo "
                                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "name", [], "any", false, false, false, 85), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <div class=\"form-group ";
        // line 89
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "email", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "valid", [], "any", false, false, false, 89)) {
            echo "errors";
        }
        echo "\">
                                                <label>Email</label>
                                                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "email", [], "any", false, false, false, 91), 'widget');
        echo "
                                                ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "email", [], "any", false, false, false, 92), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"col-md-12\">
                                        <div class=\"save mb-2 ml-auto mr-5\">
                                            <button type=\"submit\" id=\"btn-admin-edit-profile\" class=\"btn btn-success\">Enregistrer</button>
                                        </div>
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
    </div>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery-3.3.1.slim.min.js"), "html", null, true);
        echo "\"></script>
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
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tel/js/utils.js"), "html", null, true);
        echo "\", // just for formatting/placeholders etc;
                nationalMode: false,
            });
            var reset = function() {
                tel_parent.classList.remove(\"tel-errors\");
                document.getElementById(\"btn-admin-edit-profile\").disabled = false;
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
                        document.getElementById(\"btn-admin-edit-profile\").disabled = true;
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
        return "admin/admin/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 122,  244 => 108,  235 => 102,  222 => 92,  218 => 91,  211 => 89,  204 => 85,  200 => 84,  193 => 82,  184 => 76,  177 => 72,  173 => 71,  169 => 70,  162 => 68,  156 => 65,  141 => 53,  137 => 52,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard/base.html.twig' %}

{% block title %} Ajout d'un nouveau admin!{% endblock %}
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
        .breadcrumb-link{
            color:royalblue;
        }
        .btn-success{
            background-color: #cd5757;
            border-color:white;
        }
        .btn-success:hover{
            background-color:royalblue;
        }
        #btn-admin-edit-profile{
            margin-right: 323px;
        }

    </style>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                <div class=\"page-header\">
                    <h2 class=\"pageheader-title d-flex justify-content-between pt-5\">
                        Ajouter un nouveau admin
                    </h2>
                    <div class=\"page-breadcrumb\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a href=\"{{ path('admin_dashboard') }}\" class=\"breadcrumb-link\">Tableau de bord</a></li>
                                <li class=\"breadcrumb-item\"><a href=\"{{ path('admin_admin_index') }}\" class=\"breadcrumb-link\">Liste Administrateurs</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Ajouter un nouveau admin</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"card mb-4 order-list col-md-12 mx-auto\">
                    <div class=\"gold-members p-4\">
                        {{ form_start(form) }}
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group {% if not form.avatarfile.vars.valid %}errors{% endif %}\">
                                        <label></label>
                                        {{ form_label(form.avatarfile) }}
                                        {{ form_widget(form.avatarfile) }}
                                        {{ form_errors(form.avatarfile) }}
                                    </div>
                                    <div class=\"form-group\" id=\"tel-container\">
                                        <label>Telephone</label>
                                        {{ form_widget(form.tel) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6 add_top_30\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"form-group {% if not form.name.vars.valid %}errors{% endif %}\">
                                                <label>Name</label>
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
                                        <div class=\"save mb-2 ml-auto mr-5\">
                                            <button type=\"submit\" id=\"btn-admin-edit-profile\" class=\"btn btn-success\">Enregistrer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src=\"{{ asset('vendor/jquery/jquery-3.3.1.slim.min.js') }}\"></script>
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
                document.getElementById(\"btn-admin-edit-profile\").disabled = false;
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
                        document.getElementById(\"btn-admin-edit-profile\").disabled = true;
                    }
                }
            });
            // on keyup / change flag: reset
            input.addEventListener('change', reset);
            input.addEventListener('keyup', reset);
        });

    </script>

{% endblock %}

", "admin/admin/new.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\admin\\new.html.twig");
    }
}
