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

/* prof/security/forgotten_password.html.twig */
class __TwigTemplate_f26a3b0d600b4194715f101f1ea01b0866c81403676caac4c1d0798f0d17d66f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "prof/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/security/forgotten_password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/security/forgotten_password.html.twig"));

        $this->parent = $this->loadTemplate("prof/base.html.twig", "prof/security/forgotten_password.html.twig", 1);
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

        echo "Mot de passe oublié";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "   <style>
        .errors ul li {
            color: red;
            list-style: none;
            margin-left: -37px;
        }
        .errors.form-label-group>input{
            border-bottom: 1px solid red !important;
            box-shadow: none !important;
         }
    </style>
    <div class=\"container-fluid\">
         <div class=\"row no-gutter\">
            <div class=\"d-none d-md-flex col-md-4 col-lg-6 col-md-6 osahan-login-left px-0\"></div>
            <div class=\"col-md-8 col-lg-6 justify-content-center flex-column px-0\">
               <div class=\"login d-flex align-items-center py-5\">
                  <div class=\"container\">
                     <div class=\"row\">
                        <div class=\"col-md-9 col-lg-8 mx-auto pl-5 pr-5\">
                           <h3 class=\"login-heading mb-4\">Réinitialisez votre mot de passe!</h3>
                           ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start');
        echo "
                              <div class=\"form-label-group ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "valid", [], "any", false, false, false, 27)) {
            echo "errors";
        }
        echo " \">
                                 
                                 ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'widget');
        echo "
                                 ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'errors');
        echo "
                                 ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'label');
        echo "
                                 
                              </div>
                              <button type=\"submit\" class=\"btn btn-lg btn-outline-primary btn-block btn-login text-uppercase font-weight-bold mb-2\">";
        // line 34
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 34, $this->source); })()), "Envoyer")) : ("Envoyer")), "html", null, true);
        echo "</button>
                              <div class=\"text-center pt-3\">
                                  Vous avez déjà un compte?<a class=\"font-weight-bold\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_login");
        echo "\"> Se connecte</a>
                              </div>
                            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
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
        return "prof/security/forgotten_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 38,  140 => 36,  135 => 34,  129 => 31,  125 => 30,  121 => 29,  114 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'prof/base.html.twig' %}

{% block title %}Mot de passe oublié{% endblock %}

{% block content %}
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
    </style>
    <div class=\"container-fluid\">
         <div class=\"row no-gutter\">
            <div class=\"d-none d-md-flex col-md-4 col-lg-6 col-md-6 osahan-login-left px-0\"></div>
            <div class=\"col-md-8 col-lg-6 justify-content-center flex-column px-0\">
               <div class=\"login d-flex align-items-center py-5\">
                  <div class=\"container\">
                     <div class=\"row\">
                        <div class=\"col-md-9 col-lg-8 mx-auto pl-5 pr-5\">
                           <h3 class=\"login-heading mb-4\">Réinitialisez votre mot de passe!</h3>
                           {{ form_start(form) }}
                              <div class=\"form-label-group {% if not form.email.vars.valid %}errors{% endif %} \">
                                 
                                 {{ form_widget(form.email) }}
                                 {{ form_errors(form.email) }}
                                 {{ form_label(form.email) }}
                                 
                              </div>
                              <button type=\"submit\" class=\"btn btn-lg btn-outline-primary btn-block btn-login text-uppercase font-weight-bold mb-2\">{{ button_label|default('Envoyer') }}</button>
                              <div class=\"text-center pt-3\">
                                  Vous avez déjà un compte?<a class=\"font-weight-bold\" href=\"{{ path('prof_login') }}\"> Se connecte</a>
                              </div>
                            {{ form_end(form) }}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
{% endblock %}
", "prof/security/forgotten_password.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\prof\\security\\forgotten_password.html.twig");
    }
}
