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

/* admin/sidebar.html.twig */
class __TwigTemplate_73a0d5d9ad7b4221c38177e4434131b129d005ccf29bd5090c0b180a5e0b6725 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sidebar.html.twig"));

        // line 1
        echo "<div class=\"col-md-3\">
    <div class=\"osahan-account-page-left shadow-sm bg-white h-100\">
        <div class=\"border-bottom p-4\">
        <div class=\"osahan-user text-center\">
            <div class=\"osahan-user-media\">
                <img class=\"mb-3 rounded-pill shadow-sm mt-1\" width=\"200px\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "avatar", [], "any", false, false, false, 6))), "html", null, true);
        echo "\" alt=\"Admin\">
                <div class=\"osahan-user-media-body\">
                    <h6 class=\"mb-2\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</h6>
                    <p class=\"mb-1\">Administrateur</p>
                </div>
            </div>
        </div>
        </div>
        <div class=\"list-group list-group-unbordered mb-3\">
            <center>
                    <b>Dérnière mise à jour:</b><br>
                    <a > ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "updatedAt", [], "method", false, false, false, 17), " + 2 hours"), "d/m/Y h:i:s"), "html", null, true);
        echo "</a>
            </center>

        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  55 => 8,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-3\">
    <div class=\"osahan-account-page-left shadow-sm bg-white h-100\">
        <div class=\"border-bottom p-4\">
        <div class=\"osahan-user text-center\">
            <div class=\"osahan-user-media\">
                <img class=\"mb-3 rounded-pill shadow-sm mt-1\" width=\"200px\" src=\"{{ asset('images/avatars/'~app.user.avatar )}}\" alt=\"Admin\">
                <div class=\"osahan-user-media-body\">
                    <h6 class=\"mb-2\">{{ app.user.name }}</h6>
                    <p class=\"mb-1\">Administrateur</p>
                </div>
            </div>
        </div>
        </div>
        <div class=\"list-group list-group-unbordered mb-3\">
            <center>
                    <b>Dérnière mise à jour:</b><br>
                    <a > {{ app.user.updatedAt()|date_modify(' + 2 hours') |date('d/m/Y h:i:s') }}</a>
            </center>

        </div>
    </div>
</div>", "admin/sidebar.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\sidebar.html.twig");
    }
}
