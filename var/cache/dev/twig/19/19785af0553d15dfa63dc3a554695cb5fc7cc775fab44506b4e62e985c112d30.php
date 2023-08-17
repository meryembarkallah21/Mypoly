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

/* admin/security/forgotten_password.html.twig */
class __TwigTemplate_ccaffd9fca116201a3f86742b7b82657fd557dd2371e20c85283ef5ca8b6a74c extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.security.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/forgotten_password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/forgotten_password.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.security.html.twig", "admin/security/forgotten_password.html.twig", 1);
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

        echo "Reccupération de mot de passe";
        
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
        echo "    <style>
        .errors ul li {
            color: red;
            list-style: none;
            margin-left: -37px;
        }
        .errors.form-label-group>input{
            border-bottom: 1px solid red !important;
            box-shadow: none !important;
        }
        .col-lg-5{
            margin-top: 150px;
        }
    </style>
    <div id=\"layoutAuthentication\">
        <div id=\"layoutAuthentication_content\">
            <main>
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-5\">
                            <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                                <div class=\"card-header\"><h3 class=\"text-center font-weight-light my-4\">Récupération de mot de passe</h3></div>
                                <div class=\"card-body\">
                                    <div class=\"small mb-3 text-muted\">Entrez votre adresse e-mail et nous vous enverrons un lien pour réinitialiser votre mot de passe</div>
                                    ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start');
        echo "
                                        <div class=\"form-group ";
        // line 31
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "valid", [], "any", false, false, false, 31)) {
            echo "errors";
        }
        echo " \">
                                            <label class=\"small mb-1\" for=\"forgote_password_email\">E-mail</label>
                                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control py-4"]]);
        echo "
                                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'errors');
        echo "
                                        </div>
                                        <div class=\"form-group d-flex align-items-center justify-content-between mt-4 mb-0\">
                                            <a class=\"small\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_login");
        echo "\">Return to login</a>
                                            <button type=\"submit\" class=\"btn btn-primary\">Réinitialiser le mot de passe</button>
                                        </div>
                                    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        echo "
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/security/forgotten_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 40,  135 => 37,  129 => 34,  125 => 33,  118 => 31,  114 => 30,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.security.html.twig' %}

{% block title %}Reccupération de mot de passe{% endblock %}

{% block body %}
    <style>
        .errors ul li {
            color: red;
            list-style: none;
            margin-left: -37px;
        }
        .errors.form-label-group>input{
            border-bottom: 1px solid red !important;
            box-shadow: none !important;
        }
        .col-lg-5{
            margin-top: 150px;
        }
    </style>
    <div id=\"layoutAuthentication\">
        <div id=\"layoutAuthentication_content\">
            <main>
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-5\">
                            <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                                <div class=\"card-header\"><h3 class=\"text-center font-weight-light my-4\">Récupération de mot de passe</h3></div>
                                <div class=\"card-body\">
                                    <div class=\"small mb-3 text-muted\">Entrez votre adresse e-mail et nous vous enverrons un lien pour réinitialiser votre mot de passe</div>
                                    {{ form_start(form) }}
                                        <div class=\"form-group {% if not form.email.vars.valid %}errors{% endif %} \">
                                            <label class=\"small mb-1\" for=\"forgote_password_email\">E-mail</label>
                                            {{ form_widget(form.email, {'attr': {'class': 'form-control py-4'}}) }}
                                            {{ form_errors(form.email) }}
                                        </div>
                                        <div class=\"form-group d-flex align-items-center justify-content-between mt-4 mb-0\">
                                            <a class=\"small\" href=\"{{ path('admin_login')}}\">Return to login</a>
                                            <button type=\"submit\" class=\"btn btn-primary\">Réinitialiser le mot de passe</button>
                                        </div>
                                    {{ form_end(form) }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
{% endblock %}
", "admin/security/forgotten_password.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\security\\forgotten_password.html.twig");
    }
}
