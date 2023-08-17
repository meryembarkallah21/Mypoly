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

/* admin/parametre/tab_menu_param.html.twig */
class __TwigTemplate_c36fa2742513e615b1002b75ed79eb43b63ae511561e6f6bf700d0d73c35c0d2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parametre/tab_menu_param.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parametre/tab_menu_param.html.twig"));

        // line 1
        echo "<!--tab-menu-->
<style>
    .ui{
        color:gray;
        font-size: 18px;
        font-weight: bold;
    }
</style>
<ul class=\"nav nav-pills\">
    <li class=\"nav-item\">
        <a class=\"nav-link ui ";
        // line 11
        echo ((array_key_exists("mention", $context)) ? ("active") : (""));
        echo "\" aria-current=\"page\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mention_new");
        echo "\">Mention</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link ui ";
        // line 14
        echo ((array_key_exists("code", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("code_new");
        echo "\">Filière</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link ui ";
        // line 17
        echo ((array_key_exists("cycle", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cycle_new");
        echo "\">Niveau</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link ui ";
        // line 20
        echo ((array_key_exists("parcours", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parcours_new");
        echo "\">Parcours</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link ui ";
        // line 23
        echo ((array_key_exists("semestre", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("semestre_new");
        echo "\">Semestre</a>
    </li>

    <li class=\"nav-item\">
        <a class=\"nav-link ui ";
        // line 27
        echo ((array_key_exists("ue", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ue_new");
        echo "\">Unité d'Enseignement</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link ui ";
        // line 30
        echo ((array_key_exists("ec", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ec_new");
        echo "\">Elément Constitutif</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link ui ";
        // line 33
        echo ((array_key_exists("years", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("years_new");
        echo "\">Année Univ</a>
    </li>
</ul>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/parametre/tab_menu_param.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  104 => 30,  96 => 27,  87 => 23,  79 => 20,  71 => 17,  63 => 14,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--tab-menu-->
<style>
    .ui{
        color:gray;
        font-size: 18px;
        font-weight: bold;
    }
</style>
<ul class=\"nav nav-pills\">
    <li class=\"nav-item\">
        <a class=\"nav-link ui {{ mention is defined ? 'active' : ''  }}\" aria-current=\"page\" href=\"{{ path('mention_new') }}\">Mention</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link ui {{ code is defined ? 'active' : ''  }}\" href=\"{{ path('code_new') }}\">Filière</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link ui {{ cycle is defined ? 'active' : ''  }}\" href=\"{{ path('cycle_new') }}\">Niveau</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link ui {{ parcours  is defined ? 'active' : ''  }}\" href=\"{{ path('parcours_new') }}\">Parcours</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link ui {{ semestre is defined ? 'active' : ''  }}\" href=\"{{ path('semestre_new') }}\">Semestre</a>
    </li>

    <li class=\"nav-item\">
        <a class=\"nav-link ui {{ ue is defined ? 'active' : ''  }}\" href=\"{{ path('ue_new') }}\">Unité d'Enseignement</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link ui {{ ec is defined ? 'active' : ''  }}\" href=\"{{ path('ec_new') }}\">Elément Constitutif</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link ui {{ years is defined ? 'active' : ''  }}\" href=\"{{ path('years_new') }}\">Année Univ</a>
    </li>
</ul>", "admin/parametre/tab_menu_param.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\parametre\\tab_menu_param.html.twig");
    }
}
