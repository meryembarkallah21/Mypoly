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

/* admin/years/affiche.html.twig */
class __TwigTemplate_c2f5537b41f0edd79539e01cb4a8bc3f132926fdac029522e1396c31ca74d6cc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/years/affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/years/affiche.html.twig"));

        // line 1
        echo "<div class=\"card mb-4\">
    <div class=\"card-header\" id=\"card-header\">
        <i class=\"fas fa-table mr-1\"></i>
        Liste
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                <thead>
                <tr class=\"text-uppercase\">
                    <th width=\"150px\">Actuel</th>
                    <th width=\"480px\">Annéé scolaire</th>
                    <th class=\"text-center\">Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 18
            echo "                    <tr>
                        ";
            // line 19
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["year"], "current", [], "any", false, false, false, 19), false))) {
                // line 20
                echo "                            <td>Non</td>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 21
$context["year"], "current", [], "any", false, false, false, 21), true))) {
                // line 22
                echo "                            <td>Oui</td>
                        ";
            }
            // line 24
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["year"], "year", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                        <td>
                           <center> ";
            // line 26
            echo twig_include($this->env, $context, "admin/years/_delete_form.html.twig");
            echo "</center>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 30
            echo "                    <tr>
                        <td colspan=\"3\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/years/affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 34,  116 => 30,  99 => 26,  93 => 24,  89 => 22,  87 => 21,  84 => 20,  82 => 19,  79 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-4\">
    <div class=\"card-header\" id=\"card-header\">
        <i class=\"fas fa-table mr-1\"></i>
        Liste
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                <thead>
                <tr class=\"text-uppercase\">
                    <th width=\"150px\">Actuel</th>
                    <th width=\"480px\">Annéé scolaire</th>
                    <th class=\"text-center\">Action</th>
                </tr>
                </thead>
                <tbody>
                {% for year in years %}
                    <tr>
                        {% if year.current == false %}
                            <td>Non</td>
                        {% elseif year.current == true %}
                            <td>Oui</td>
                        {% endif%}
                        <td>{{ year.year }}</td>
                        <td>
                           <center> {{ include('admin/years/_delete_form.html.twig') }}</center>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"3\">no records found</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
", "admin/years/affiche.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\years\\affiche.html.twig");
    }
}
