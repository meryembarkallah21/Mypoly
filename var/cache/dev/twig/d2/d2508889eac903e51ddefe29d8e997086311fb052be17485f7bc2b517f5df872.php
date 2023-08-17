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

/* admin/prof/_delete_form.html.twig */
class __TwigTemplate_4a799ddb8ab3be9468ca5d553b1919836df5fa9bd828a261692bc35c0d68af4f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/prof/_delete_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/prof/_delete_form.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_prof_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["prof"]) || array_key_exists("prof", $context) ? $context["prof"] : (function () { throw new RuntimeError('Variable "prof" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Vous etes sure que vous voulez supprimer cet prof?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["prof"]) || array_key_exists("prof", $context) ? $context["prof"] : (function () { throw new RuntimeError('Variable "prof" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2))), "html", null, true);
        echo "\">
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_prof_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["prof"]) || array_key_exists("prof", $context) ? $context["prof"] : (function () { throw new RuntimeError('Variable "prof" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]), "html", null, true);
        echo "\"  class=\"btn btn-rounded btn-success btn-sm\">
        <i class=\"fas fa-edit\"></i>
    </a>
    <button class=\"btn btn-rounded btn-danger btn-sm delete-element\" ><i class=\"fas fa-trash-alt\"></i></button>
</form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/prof/_delete_form.html.twig";
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
        return new Source("<form method=\"post\" action=\"{{ path('admin_prof_delete', {'id': prof.id}) }}\" onsubmit=\"return confirm('Vous etes sure que vous voulez supprimer cet prof?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ prof.id) }}\">
    <a href=\"{{ path('admin_prof_edit', {'id': prof.id}) }}\"  class=\"btn btn-rounded btn-success btn-sm\">
        <i class=\"fas fa-edit\"></i>
    </a>
    <button class=\"btn btn-rounded btn-danger btn-sm delete-element\" ><i class=\"fas fa-trash-alt\"></i></button>
</form>", "admin/prof/_delete_form.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\prof\\_delete_form.html.twig");
    }
}
