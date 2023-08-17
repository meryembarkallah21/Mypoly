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

/* admin/admin/status.html.twig */
class __TwigTemplate_9029d41d2f828f793be1c6b5a4b2e1c6cce5a0703c45e332d009bdb83065c506 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin/status.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin/status.html.twig"));

        // line 1
        $context["statut"] = (isset($context["etat_statut"]) || array_key_exists("etat_statut", $context) ? $context["etat_statut"] : (function () { throw new RuntimeError('Variable "etat_statut" does not exist.', 1, $this->source); })());
        // line 2
        echo "
";
        // line 3
        if ((0 === twig_compare((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 3, $this->source); })()), 1))) {
            // line 4
            echo "    <button disabled=\"\" type=\"button\" class=\"btn btn-sm btn-success btn-round\">Activé</button>
";
        } else {
            // line 6
            echo "    <button disabled=\"\" type=\"button\" class=\"btn btn-sm btn-danger btn-round\">Désactivé</button>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin/status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set statut = etat_statut %}

{% if (statut == 1 ) %}
    <button disabled=\"\" type=\"button\" class=\"btn btn-sm btn-success btn-round\">Activé</button>
{% else %}
    <button disabled=\"\" type=\"button\" class=\"btn btn-sm btn-danger btn-round\">Désactivé</button>
{% endif %}", "admin/admin/status.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\admin\\status.html.twig");
    }
}
