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

/* prof/security/reset_password.html.twig */
class __TwigTemplate_3c848cd627d40c6164c0c2696755eed03e653ba7c677da35bd5e6e789730888c extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/security/reset_password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/security/reset_password.html.twig"));

        $this->parent = $this->loadTemplate("prof/base.html.twig", "prof/security/reset_password.html.twig", 1);
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

        echo "Réinitialisé mot de passe";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
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
            <div class=\"d-none d-md-flex col-md-4 col-lg-6 col-lg-6 osahan-login-left px-0\"></div>
            <div class=\"col-md-8 col-lg-6 justify-content-center flex-column px-0\">
               <div class=\"login d-flex align-items-center py-5\">
                  <div class=\"container\">
                     <div class=\"row\">
                        <div class=\"col-md-9 col-lg-8 mx-auto pl-5 pr-5\">
                           <h3 class=\"login-heading mb-4\">Réinitialisé mot de passe</h3>
                           <form method=\"post\" action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_reset_password", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 26, $this->source); })())]), "html", null, true);
        echo "\">
                              <div class=\"form-label-group\">
                                 <input type=\"password\" id=\"inputPassword\" name=\"newPass\" class=\"form-control\" placeholder=\"Password\">
                                 <label for=\"inputPassword\">Mot de passe</label>
                              </div>
                              <div class=\"form-label-group\">
                                 <input type=\"password\" id=\"inputPassword2\" name=\"confirmPass\" class=\"form-control\" placeholder=\"Password\">
                                 <label for=\"inputPassword2\">Confirmer votre mot de passe</label>
                              </div>
                              <button type=\"submit\" class=\"btn btn-lg btn-outline-primary btn-block btn-login text-uppercase font-weight-bold mb-2\">";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 35, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
                              <div class=\"text-center pt-3\">
                                 Vous avez déjà un compte? <a class=\"font-weight-bold\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_login");
        echo "\">Se connecter</a>
                              </div>
                            </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "         <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>
         <script type=\"text/javascript\">
            jQuery(document).ready(function(\$){

            });
         </script>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "prof/security/reset_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 48,  142 => 47,  129 => 37,  124 => 35,  112 => 26,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'prof/base.html.twig' %}

{% block title %}Réinitialisé mot de passe{% endblock %}
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
            <div class=\"d-none d-md-flex col-md-4 col-lg-6 col-lg-6 osahan-login-left px-0\"></div>
            <div class=\"col-md-8 col-lg-6 justify-content-center flex-column px-0\">
               <div class=\"login d-flex align-items-center py-5\">
                  <div class=\"container\">
                     <div class=\"row\">
                        <div class=\"col-md-9 col-lg-8 mx-auto pl-5 pr-5\">
                           <h3 class=\"login-heading mb-4\">Réinitialisé mot de passe</h3>
                           <form method=\"post\" action=\"{{ path('prof_reset_password', {'token':token}) }}\">
                              <div class=\"form-label-group\">
                                 <input type=\"password\" id=\"inputPassword\" name=\"newPass\" class=\"form-control\" placeholder=\"Password\">
                                 <label for=\"inputPassword\">Mot de passe</label>
                              </div>
                              <div class=\"form-label-group\">
                                 <input type=\"password\" id=\"inputPassword2\" name=\"confirmPass\" class=\"form-control\" placeholder=\"Password\">
                                 <label for=\"inputPassword2\">Confirmer votre mot de passe</label>
                              </div>
                              <button type=\"submit\" class=\"btn btn-lg btn-outline-primary btn-block btn-login text-uppercase font-weight-bold mb-2\">{{ button_label|default('Enregistrer') }}</button>
                              <div class=\"text-center pt-3\">
                                 Vous avez déjà un compte? <a class=\"font-weight-bold\" href=\"{{ path('prof_login') }}\">Se connecter</a>
                              </div>
                            </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      {% block javascripts %}
         <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>
         <script type=\"text/javascript\">
            jQuery(document).ready(function(\$){

            });
         </script>
      {% endblock %}
{% endblock %}

", "prof/security/reset_password.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\prof\\security\\reset_password.html.twig");
    }
}
