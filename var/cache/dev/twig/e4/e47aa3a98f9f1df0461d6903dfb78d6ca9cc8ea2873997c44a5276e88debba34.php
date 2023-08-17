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

/* admin/ue/affiche.html.twig */
class __TwigTemplate_8d89ba4521d6e23f3ea35357fa2ec216f15fd5ab521ed38adfb34a91eeeeea11 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ue/affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ue/affiche.html.twig"));

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
                    <th>Mention</th>
                    <th>Semestre</th>
                    <th>Nom</th>
                    <th class=\"text-center\">Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ues"]) || array_key_exists("ues", $context) ? $context["ues"] : (function () { throw new RuntimeError('Variable "ues" does not exist.', 18, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ue"]) {
            // line 19
            echo "                    <tr>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "mention", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "semestre", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                        <td>
                            <center>";
            // line 24
            echo twig_include($this->env, $context, "admin/ue/_delete_form.html.twig");
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
            // line 28
            echo "                    <tr>
                        <td colspan=\"3\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/ue/affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 32,  113 => 28,  96 => 24,  91 => 22,  87 => 21,  83 => 20,  80 => 19,  62 => 18,  43 => 1,);
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
                    <th>Mention</th>
                    <th>Semestre</th>
                    <th>Nom</th>
                    <th class=\"text-center\">Action</th>
                </tr>
                </thead>
                <tbody>
                {% for ue in ues %}
                    <tr>
                        <td>{{ ue.mention }}</td>
                        <td>{{ ue.semestre }}</td>
                        <td>{{ ue.name }}</td>
                        <td>
                            <center>{{ include('admin/ue/_delete_form.html.twig') }}</center>
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
</div>", "admin/ue/affiche.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\ue\\affiche.html.twig");
    }
}
