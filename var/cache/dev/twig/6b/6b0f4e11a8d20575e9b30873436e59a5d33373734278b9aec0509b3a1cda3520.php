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

/* admin/inscrire/_supprimer_form.html.twig */
class __TwigTemplate_b4da6740b0fa977c1af8316d987e4eaa12b689771ee5cf413f1d828fc2c27d45 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/inscrire/_supprimer_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/inscrire/_supprimer_form.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Vous etes sure que vous voulez supprimer cet etudiant?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2))), "html", null, true);
        echo "\">
    <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fw fa-reply\"></i> Retour</a>
    <button class=\"btn btn-danger\"><i class=\"fa fw fa-trash\"></i> Supprimer</button>
</form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/inscrire/_supprimer_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"{{ path('profil_delete', {'id': inscrire.id}) }}\" onsubmit=\"return confirm('Vous etes sure que vous voulez supprimer cet etudiant?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ inscrire.id) }}\">
    <a href=\"{{ path('admin_dashboard') }}\" class=\"btn btn-primary\"><i class=\"fa fw fa-reply\"></i> Retour</a>
    <button class=\"btn btn-danger\"><i class=\"fa fw fa-trash\"></i> Supprimer</button>
</form>", "admin/inscrire/_supprimer_form.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\admin\\inscrire\\_supprimer_form.html.twig");
    }
}
