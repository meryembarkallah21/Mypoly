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

/* prof/sidebar.html.twig */
class __TwigTemplate_6202723d08c265d6529f7914cf6d6833ed99fabcc566dc483e6cec98a38e44d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/sidebar.html.twig"));

        // line 1
        echo "<style>
    .scroldoc{
        padding-right:-20px;
        position: relative;
        width: 100%;
        height: 100px;
        overflow: auto;
    }
</style>
<div class=\"col-md-3\">
    <div class=\"osahan-account-page-left shadow-sm bg-white h-100\">
        <div class=\"border-bottom p-4\">
        <div class=\"osahan-user text-center\">
            <div class=\"osahan-user-media\">
                <img class=\"mb-3 rounded-pill shadow-sm mt-1\" width=\"200px\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "avatar", [], "any", false, false, false, 15))), "html", null, true);
        echo "\" alt=\"gurdeep singh osahan\">
                <div class=\"osahan-user-media-body\">
                    <h6 class=\"mb-2\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</h6>
                    <p class=\"mb-1\">Professeur</p>
                </div>
            </div>
        </div>
        </div>
        <div style=\"padding:10%\">
            <b>Dérnière mise à jour:</b> <br> ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "updatedAt", [], "method", false, false, false, 24), "+2 hours"), "d/m/Y h:i:s"), "html", null, true);
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "prof/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  64 => 17,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .scroldoc{
        padding-right:-20px;
        position: relative;
        width: 100%;
        height: 100px;
        overflow: auto;
    }
</style>
<div class=\"col-md-3\">
    <div class=\"osahan-account-page-left shadow-sm bg-white h-100\">
        <div class=\"border-bottom p-4\">
        <div class=\"osahan-user text-center\">
            <div class=\"osahan-user-media\">
                <img class=\"mb-3 rounded-pill shadow-sm mt-1\" width=\"200px\" src=\"{{ asset('images/avatars/'~app.user.avatar )}}\" alt=\"gurdeep singh osahan\">
                <div class=\"osahan-user-media-body\">
                    <h6 class=\"mb-2\">{{ app.user.name }}</h6>
                    <p class=\"mb-1\">Professeur</p>
                </div>
            </div>
        </div>
        </div>
        <div style=\"padding:10%\">
            <b>Dérnière mise à jour:</b> <br> {{ app.user.updatedAt()|date_modify('+2 hours')|date('d/m/Y h:i:s') }}
        </div>
    </div>
</div>
", "prof/sidebar.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\prof\\sidebar.html.twig");
    }
}
