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

/* vitrine/header.html.twig */
class __TwigTemplate_631008cb12c4fc9e0e3657e727bd09c92d94579e6b1549b47e2e66774daa2082 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/header.html.twig"));

        // line 1
        echo "<header class=\"top-navbar\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light shadow-sm\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vitrine");
        echo "\">
                <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-poly.png"), "html", null, true);
        echo "\" alt=\"POLYTECH SOUSSE \" width=\"200px\"/>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbars-host\" aria-controls=\"navbars-rs-food\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbars-host\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item \"><a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vitrine");
        echo "\">Accueil</a></li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quisommesnous");
        echo "\" id=\"dropdown-a\" data-toggle=\"dropdown\">Qui somme nous</a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown-a\">
                            <a class=\"dropdown-item\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("presentation");
        echo "\">Présentation</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enseignant");
        echo "\">Les enseignants</a>
                        </div>
                    </li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Contact</a></li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown-a\" data-toggle=\"dropdown\">S'identifier</a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown-a\">
                            <a class=\"dropdown-item\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Etudiant </a>
                            <a class=\"dropdown-item\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_login");
        echo "\">Professeur </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  88 => 26,  78 => 19,  74 => 18,  69 => 16,  64 => 14,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"top-navbar\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light shadow-sm\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"{{ path('vitrine')}}\">
                <img src=\"{{ asset('images/logo-poly.png')}}\" alt=\"POLYTECH SOUSSE \" width=\"200px\"/>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbars-host\" aria-controls=\"navbars-rs-food\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbars-host\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item \"><a class=\"nav-link\" href=\"{{ path('vitrine') }}\">Accueil</a></li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"{{ path('quisommesnous') }}\" id=\"dropdown-a\" data-toggle=\"dropdown\">Qui somme nous</a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown-a\">
                            <a class=\"dropdown-item\" href=\"{{ path('presentation') }}\">Présentation</a>
                            <a class=\"dropdown-item\" href=\"{{ path('enseignant') }}\">Les enseignants</a>
                        </div>
                    </li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Contact</a></li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown-a\" data-toggle=\"dropdown\">S'identifier</a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown-a\">
                            <a class=\"dropdown-item\" href=\"{{ path('app_login') }}\">Etudiant </a>
                            <a class=\"dropdown-item\" href=\"{{ path('prof_login') }}\">Professeur </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>", "vitrine/header.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\vitrine\\header.html.twig");
    }
}
