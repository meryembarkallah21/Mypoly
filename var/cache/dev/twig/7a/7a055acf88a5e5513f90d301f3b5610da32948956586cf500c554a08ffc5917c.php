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

/* admin/mention/affiche.html.twig */
class __TwigTemplate_29547a20357b9b4557de4f709abd3eeb56ef7be45f7de002610c37beb6450fe9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/mention/affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/mention/affiche.html.twig"));

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
                    <th>Niveau</th>
                    <th>Parcours</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mentions"]) || array_key_exists("mentions", $context) ? $context["mentions"] : (function () { throw new RuntimeError('Variable "mentions" does not exist.', 18, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["mention"]) {
            // line 19
            echo "                    <tr>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mention"], "code", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mention"], "cycle", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                        ";
            // line 22
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["mention"], "parcours", [], "any", false, false, false, 22), null))) {
                // line 23
                echo "                            <td>Aucune parcours</td>
                        ";
            } else {
                // line 25
                echo "                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mention"], "parcours", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                        ";
            }
            // line 27
            echo "                        <td>
                            ";
            // line 28
            echo twig_include($this->env, $context, "admin/mention/_delete_form.html.twig");
            echo "
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
            // line 32
            echo "                    <tr>
                        <td colspan=\"3\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    \$(document).ready(function () {
        \$('#dataTable').DataTable(
            {
                \"language\": {
                    \"decimal\": \"\",
                    \"emptyTable\": \"aucune donnée trouvée\",
                    \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                    \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                    \"infoFiltered\": \"\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                    \"loadingRecords\": \"Loading...\",
                    \"processing\": \"Processing...\",
                    \"search\": \"Recherche:\",
                    \"zeroRecords\": \"aucun élément trouvé\",
                    \"paginate\": {
                        \"first\": \"premier\",
                        \"last\": \"dernier\",
                        \"next\": \"Suivant\",
                        \"previous\": \"Précédant\"
                    }
                }
            }
        );
    });
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/mention/affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 36,  123 => 32,  106 => 28,  103 => 27,  97 => 25,  93 => 23,  91 => 22,  87 => 21,  83 => 20,  80 => 19,  62 => 18,  43 => 1,);
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
                    <th>Niveau</th>
                    <th>Parcours</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {% for mention in mentions %}
                    <tr>
                        <td>{{ mention.code }}</td>
                        <td>{{ mention.cycle }}</td>
                        {% if mention.parcours == null %}
                            <td>Aucune parcours</td>
                        {% else %}
                            <td>{{ mention.parcours }}</td>
                        {% endif %}
                        <td>
                            {{ include('admin/mention/_delete_form.html.twig') }}
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
<script>
    \$(document).ready(function () {
        \$('#dataTable').DataTable(
            {
                \"language\": {
                    \"decimal\": \"\",
                    \"emptyTable\": \"aucune donnée trouvée\",
                    \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                    \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                    \"infoFiltered\": \"\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                    \"loadingRecords\": \"Loading...\",
                    \"processing\": \"Processing...\",
                    \"search\": \"Recherche:\",
                    \"zeroRecords\": \"aucun élément trouvé\",
                    \"paginate\": {
                        \"first\": \"premier\",
                        \"last\": \"dernier\",
                        \"next\": \"Suivant\",
                        \"previous\": \"Précédant\"
                    }
                }
            }
        );
    });
</script>
", "admin/mention/affiche.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\mention\\affiche.html.twig");
    }
}
