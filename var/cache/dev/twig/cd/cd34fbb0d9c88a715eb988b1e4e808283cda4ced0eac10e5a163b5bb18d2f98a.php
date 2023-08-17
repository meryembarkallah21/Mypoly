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

/* etudiant/security/register.html.twig */
class __TwigTemplate_81b89723906c5e38fcf7b36058b6719c74554d7ae881a8e520959e605298f373 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "etudiant/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/security/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/security/register.html.twig"));

        $this->parent = $this->loadTemplate("etudiant/base.html.twig", "etudiant/security/register.html.twig", 1);
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

        echo "S'inscrire";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 119
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "            <style>
                .errors ul li {
                    color: red;
                    list-style: none;
                    margin-left: -37px;
                }

                .errors.form-label-group > input {
                    border-bottom: 1px solid red !important;
                    box-shadow: none !important;
                }

                .iti.iti--allow-dropdown {
                    width: 100% !important;
                }

                .iti.iti--allow-dropdown > input {
                    background: transparent !important;
                    border: 0 !important;
                    border-bottom: 1px solid #ced4da !important;
                    border-radius: 0 !important;
                }

                .tel-errors .iti.iti--allow-dropdown > input { 
                    border-bottom: 1px solid red !important;
                }

                .iti.iti--allow-dropdown .form-control {
                    box-shadow: none !important;
                }
            </style>

    <div class=\"container-fluid\">
        <div class=\"row no-gutter\">
            <div class=\"d-none d-md-flex col-md-4 col-lg-6 osahan-login-left px-0\"></div>
            <div class=\"col-md-8 col-lg-6 justify-content-center flex-column px-0\" >
                <div class=\"login d-flex align-items-center py-5\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-9 col-lg-8 mx-auto pl-5 pr-5\">
                                <h3 class=\"login-heading mb-4\">S'inscrire</h3>
                                ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_start');
        echo "
                                <div class=\"form-label-group ";
        // line 49
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "valid", [], "any", false, false, false, 49)) {
            echo "errors";
        }
        echo " \">

                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'widget');
        echo "
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), 'errors');
        echo "
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), 'label');
        echo "

                                </div>
                                <div class=\"form-label-group\" id=\"tel-container\">
                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "tel", [], "any", false, false, false, 57), 'widget');
        echo "
                                </div>
                                <div class=\"form-label-group ";
        // line 59
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "password", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "valid", [], "any", false, false, false, 59)) {
            echo "errors";
        }
        echo " \">
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "password", [], "any", false, false, false, 60), 'widget');
        echo "
                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "password", [], "any", false, false, false, 61), 'label');
        echo "
                                </div>
                                <div class=\"form-label-group mb-4 ";
        // line 63
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "valid", [], "any", false, false, false, 63)) {
            echo "errors";
        }
        echo " \">
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "name", [], "any", false, false, false, 64), 'widget');
        echo "
                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), 'label');
        echo "
                                </div>
                                <button type=\"submit\" id=\"btn-customer-register\"
                                        class=\"btn btn-lg btn-outline-primary btn-block btn-login text-uppercase font-weight-bold mb-2\">";
        // line 68
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 68, $this->source); })()), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
                                <div class=\"text-center pt-3\">
                                    Vous avez déjà un compte? <a class=\"font-weight-bold\"
                                                                 href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Se connecter</a>
                                </div>
                                ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
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
        jQuery(document).ready(function (\$) {


                    var input = document.querySelector(\"#user_tel\");

                    errorMsg = document.querySelector(\"#error-msg\"),
                        validMsg = document.querySelector(\"#valid-msg\");
                    var tel_parent = document.getElementById(\"tel-container\");

                    // here, the index maps to the error code returned from getValidationError - see readme
                    var errorMap = [\"Invalid number\", \"Invalid country code\", \"Too short\", \"Too long\", \"Invalid number\"];
                    var iti = window.intlTelInput(input, {
                        utilsScript: \"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tel/js/utils.js"), "html", null, true);
        echo "\", // just for formatting/placeholders etc
                        nationalMode: false,
                    });
                    var reset = function () {
                        tel_parent.classList.remove(\"tel-errors\");
                    };
                    // on blur: validate
                    input.addEventListener('blur', function () {
                        if (input.value.trim()) {
                            if (iti.isValidNumber()) {
                                //validMsg.classList.remove(\"hide\");
                            } else {
                                console.log(\"erreur\");
                                tel_parent.classList.add(\"tel-errors\");
                                document.getElementById(\"btn-customer-register\").disabled = true;
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
        return "etudiant/security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 95,  230 => 73,  225 => 71,  219 => 68,  213 => 65,  209 => 64,  203 => 63,  198 => 61,  194 => 60,  188 => 59,  183 => 57,  176 => 53,  172 => 52,  168 => 51,  161 => 49,  157 => 48,  114 => 7,  104 => 6,  92 => 119,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'etudiant/base.html.twig' %}

{% block title %}S'inscrire{% endblock %}

{% block body %}
    {% block content %}
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

                .iti.iti--allow-dropdown {
                    width: 100% !important;
                }

                .iti.iti--allow-dropdown > input {
                    background: transparent !important;
                    border: 0 !important;
                    border-bottom: 1px solid #ced4da !important;
                    border-radius: 0 !important;
                }

                .tel-errors .iti.iti--allow-dropdown > input { 
                    border-bottom: 1px solid red !important;
                }

                .iti.iti--allow-dropdown .form-control {
                    box-shadow: none !important;
                }
            </style>

    <div class=\"container-fluid\">
        <div class=\"row no-gutter\">
            <div class=\"d-none d-md-flex col-md-4 col-lg-6 osahan-login-left px-0\"></div>
            <div class=\"col-md-8 col-lg-6 justify-content-center flex-column px-0\" >
                <div class=\"login d-flex align-items-center py-5\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-9 col-lg-8 mx-auto pl-5 pr-5\">
                                <h3 class=\"login-heading mb-4\">S'inscrire</h3>
                                {{ form_start(form) }}
                                <div class=\"form-label-group {% if not form.email.vars.valid %}errors{% endif %} \">

                                    {{ form_widget(form.email) }}
                                    {{ form_errors(form.email) }}
                                    {{ form_label(form.email) }}

                                </div>
                                <div class=\"form-label-group\" id=\"tel-container\">
                                    {{ form_widget(form.tel) }}
                                </div>
                                <div class=\"form-label-group {% if not form.password.vars.valid %}errors{% endif %} \">
                                    {{ form_widget(form.password) }}
                                    {{ form_label(form.password) }}
                                </div>
                                <div class=\"form-label-group mb-4 {% if not form.name.vars.valid %}errors{% endif %} \">
                                    {{ form_widget(form.name) }}
                                    {{ form_label(form.name) }}
                                </div>
                                <button type=\"submit\" id=\"btn-customer-register\"
                                        class=\"btn btn-lg btn-outline-primary btn-block btn-login text-uppercase font-weight-bold mb-2\">{{ button_label|default('Valider') }}</button>
                                <div class=\"text-center pt-3\">
                                    Vous avez déjà un compte? <a class=\"font-weight-bold\"
                                                                 href=\"{{ path('app_login') }}\">Se connecter</a>
                                </div>
                                {{ form_end(form) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function (\$) {


                    var input = document.querySelector(\"#user_tel\");

                    errorMsg = document.querySelector(\"#error-msg\"),
                        validMsg = document.querySelector(\"#valid-msg\");
                    var tel_parent = document.getElementById(\"tel-container\");

                    // here, the index maps to the error code returned from getValidationError - see readme
                    var errorMap = [\"Invalid number\", \"Invalid country code\", \"Too short\", \"Too long\", \"Invalid number\"];
                    var iti = window.intlTelInput(input, {
                        utilsScript: \"{{ asset('vendor/tel/js/utils.js') }}\", // just for formatting/placeholders etc
                        nationalMode: false,
                    });
                    var reset = function () {
                        tel_parent.classList.remove(\"tel-errors\");
                    };
                    // on blur: validate
                    input.addEventListener('blur', function () {
                        if (input.value.trim()) {
                            if (iti.isValidNumber()) {
                                //validMsg.classList.remove(\"hide\");
                            } else {
                                console.log(\"erreur\");
                                tel_parent.classList.add(\"tel-errors\");
                                document.getElementById(\"btn-customer-register\").disabled = true;
                            }
                        }
                    });
                    // on keyup / change flag: reset
                    input.addEventListener('change', reset);
                    input.addEventListener('keyup', reset);
                });
            </script>
    {% endblock %}


{% endblock %}
", "etudiant/security/register.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\etudiant\\security\\register.html.twig");
    }
}
