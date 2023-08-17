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

/* prof/security/login.html.twig */
class __TwigTemplate_072133dcb0d51df19f1e2780ebd407872099ffee3d13f59d3e45f8c924f0c416 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/security/login.html.twig"));

        $this->parent = $this->loadTemplate("prof/base.html.twig", "prof/security/login.html.twig", 1);
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

        echo "Log in!";
        
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
        echo "     <div class=\"col-md-6 osahan-login-left px-0\">
     </div>
     <div class=\"col-md-6 d-flex justify-content-center flex-column px-0\">
         <div class=\"col-lg-6 mx-auto\">
             <h3 class=\"mb-1\">ESPACE PROFESSEUR</h3>
             <p class=\"mb-5\">Connectez-vous à votre compte pour continuer</p>
             <form method=\"post\">
                 ";
        // line 12
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "                     <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageKey", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageData", [], "any", false, false, false, 13), "security"), "html", null, true);
            echo "</div>
                 ";
        }
        // line 15
        echo "                 <div class=\"d-flex align-items-center mb-4\">
                     <div class=\"mr-3 bg-light rounded p-2 osahan-icon\"><i class=\"mdi mdi-email-outline\"></i></div>
                     <div class=\"w-100\">
                         <p class=\"mb-0 small font-weight-bold text-dark\">Adresse E-mail</p>
                         <input type=\"email\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\" name=\"email\"
                                class=\"form-control form-control-sm p-0 border-input border-0 rounded-0\"
                                placeholder=\"Entrer votre e-mail\"
                                required>
                     </div>
                 </div>
                 <div class=\"d-flex align-items-center mb-4\">
                     <div class=\"mr-3 bg-light rounded p-2 osahan-icon\"><i class=\"mdi mdi-form-textbox-password\"></i>
                     </div>
                     <div class=\"w-100\">
                         <p class=\"mb-0 small font-weight-bold text-dark\">Mot de passe</p>
                         <input type=\"password\" name=\"password\" id=\"inputPassword\"
                                class=\"form-control form-control-sm p-0 border-input border-0 rounded-0\"
                                placeholder=\"Entrer votre mot de passe\">
                     </div>
                 </div>
                 <input type=\"hidden\" name=\"_csrf_token\"
                        value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                 >
                 <div class=\"mb-3\">
                     <button type=\"submit\" class=\"btn btn-primary btn-block mb-3\">Se connecter</button>
                     <p class=\"text-center\"><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_forgotten_password");
        echo "\" class=\"text-dark\">Mot de passe oublié</a></p>
                 </div>
             </form>
         </div>
     </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "prof/security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 40,  131 => 36,  111 => 19,  105 => 15,  99 => 13,  97 => 12,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'prof/base.html.twig' %}

{% block title %}Log in!{% endblock %}
{% block content %}
     <div class=\"col-md-6 osahan-login-left px-0\">
     </div>
     <div class=\"col-md-6 d-flex justify-content-center flex-column px-0\">
         <div class=\"col-lg-6 mx-auto\">
             <h3 class=\"mb-1\">ESPACE PROFESSEUR</h3>
             <p class=\"mb-5\">Connectez-vous à votre compte pour continuer</p>
             <form method=\"post\">
                 {% if error %}
                     <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                 {% endif %}
                 <div class=\"d-flex align-items-center mb-4\">
                     <div class=\"mr-3 bg-light rounded p-2 osahan-icon\"><i class=\"mdi mdi-email-outline\"></i></div>
                     <div class=\"w-100\">
                         <p class=\"mb-0 small font-weight-bold text-dark\">Adresse E-mail</p>
                         <input type=\"email\" value=\"{{ last_username }}\" name=\"email\"
                                class=\"form-control form-control-sm p-0 border-input border-0 rounded-0\"
                                placeholder=\"Entrer votre e-mail\"
                                required>
                     </div>
                 </div>
                 <div class=\"d-flex align-items-center mb-4\">
                     <div class=\"mr-3 bg-light rounded p-2 osahan-icon\"><i class=\"mdi mdi-form-textbox-password\"></i>
                     </div>
                     <div class=\"w-100\">
                         <p class=\"mb-0 small font-weight-bold text-dark\">Mot de passe</p>
                         <input type=\"password\" name=\"password\" id=\"inputPassword\"
                                class=\"form-control form-control-sm p-0 border-input border-0 rounded-0\"
                                placeholder=\"Entrer votre mot de passe\">
                     </div>
                 </div>
                 <input type=\"hidden\" name=\"_csrf_token\"
                        value=\"{{ csrf_token('authenticate') }}\"
                 >
                 <div class=\"mb-3\">
                     <button type=\"submit\" class=\"btn btn-primary btn-block mb-3\">Se connecter</button>
                     <p class=\"text-center\"><a href=\"{{ path('prof_forgotten_password') }}\" class=\"text-dark\">Mot de passe oublié</a></p>
                 </div>
             </form>
         </div>
     </div>

{% endblock %}
", "prof/security/login.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\prof\\security\\login.html.twig");
    }
}
