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

/* admin/security/login.html.twig */
class __TwigTemplate_3164f56494879b65b977fd8f65212b36d5421f6be9741fe7d12c0013241a17c3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/login.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.security.html.twig", "admin/security/login.html.twig", 1);
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

        echo "Authentification";
        
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
                                <div class=\"card-header\"><h3 class=\"text-center font-weight-light my-4\">Espace
                                        Admin</h3></div>
                                <div class=\"card-body\">
                                    <form method=\"post\">
                                        ";
        // line 22
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "                                            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })()), "messageKey", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })()), "messageData", [], "any", false, false, false, 23), "security"), "html", null, true);
            echo "</div>
                                        ";
        }
        // line 25
        echo "                                        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "                                            <div class=\"mb-3\">
                                                Vous êtes connecté en tant que
                                                ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "username", [], "any", false, false, false, 28), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
            echo "\">Se
                                                    déconnecter</a>
                                            </div>
                                        ";
        }
        // line 32
        echo "                                        <div class=\"form-group\">
                                            <label class=\"small mb-1\" for=\"inputEmailAddress\">E-mail</label>
                                            <input class=\"form-control py-4\" id=\"inputEmailAddress\"
                                                   value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" type=\"email\"
                                                   placeholder=\"Entrer votre address email\"/>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"small mb-1\" for=\"inputPassword\">Mot de passe</label>
                                            <input class=\"form-control py-4\" id=\"inputPassword\" type=\"password\"
                                                   name=\"password\" placeholder=\"Entrer votre mot de passe\"/>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"custom-control custom-checkbox\">
                                                <input class=\"custom-control-input\" id=\"rememberPasswordCheck\"
                                                       type=\"checkbox\" name=\"_remember_me\"/>
                                                <label class=\"custom-control-label\" for=\"rememberPasswordCheck\">Se
                                                    souvenir du mot de passe</label>
                                            </div>
                                        </div>
                                        <input type=\"hidden\" name=\"_csrf_token\"
                                               value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                        <div class=\"form-group d-flex align-items-center justify-content-between mt-4 mb-0\">
                                            <a class=\"small\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_forgotten_password");
        echo "\">Mot de passe
                                                oublié?</a>
                                            <button class=\"btn btn-primary\" type=\"submit\">Se connecter</button>
                                        </div>
                                    </form>
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
        return "admin/security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 54,  155 => 52,  135 => 35,  130 => 32,  121 => 28,  117 => 26,  114 => 25,  108 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.security.html.twig' %}

{% block title %}Authentification{% endblock %}

{% block body %}
    <style>
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
                                <div class=\"card-header\"><h3 class=\"text-center font-weight-light my-4\">Espace
                                        Admin</h3></div>
                                <div class=\"card-body\">
                                    <form method=\"post\">
                                        {% if error %}
                                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                        {% endif %}
                                        {% if app.user %}
                                            <div class=\"mb-3\">
                                                Vous êtes connecté en tant que
                                                {{ app.user.username }}, <a href=\"{{ path('admin_logout') }}\">Se
                                                    déconnecter</a>
                                            </div>
                                        {% endif %}
                                        <div class=\"form-group\">
                                            <label class=\"small mb-1\" for=\"inputEmailAddress\">E-mail</label>
                                            <input class=\"form-control py-4\" id=\"inputEmailAddress\"
                                                   value=\"{{ last_username }}\" name=\"email\" type=\"email\"
                                                   placeholder=\"Entrer votre address email\"/>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"small mb-1\" for=\"inputPassword\">Mot de passe</label>
                                            <input class=\"form-control py-4\" id=\"inputPassword\" type=\"password\"
                                                   name=\"password\" placeholder=\"Entrer votre mot de passe\"/>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"custom-control custom-checkbox\">
                                                <input class=\"custom-control-input\" id=\"rememberPasswordCheck\"
                                                       type=\"checkbox\" name=\"_remember_me\"/>
                                                <label class=\"custom-control-label\" for=\"rememberPasswordCheck\">Se
                                                    souvenir du mot de passe</label>
                                            </div>
                                        </div>
                                        <input type=\"hidden\" name=\"_csrf_token\"
                                               value=\"{{ csrf_token('authenticate') }}\">
                                        <div class=\"form-group d-flex align-items-center justify-content-between mt-4 mb-0\">
                                            <a class=\"small\" href=\"{{ path('admin_forgotten_password') }}\">Mot de passe
                                                oublié?</a>
                                            <button class=\"btn btn-primary\" type=\"submit\">Se connecter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
{% endblock %}
", "admin/security/login.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\security\\login.html.twig");
    }
}
