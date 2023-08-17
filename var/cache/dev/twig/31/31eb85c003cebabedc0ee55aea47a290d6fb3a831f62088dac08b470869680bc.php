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

/* admin/inscription/modal/print.html.twig */
class __TwigTemplate_89307116a18720b4284050a911646eae9ac31e4ebd5653928e31886612ac1903 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/inscription/modal/print.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/inscription/modal/print.html.twig"));

        // line 2
        echo "<!-- Modal -->
<style>
    .f-p{
        color:white;
    }
</style>
<div id=\"print\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header btn-info\">
                <h4 class=\"modal-title\"><i class=\"fa fa-print f-p\"></i>Imprimer</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_inscrire_pdf");
        echo "\" method=\"post\" class=\"validate\">
                <div class=\"modal-body\">
                    <div class=\"x_panel\">
                        <div class=\"x_title\">
                            <h2></h2>
                            <ul class=\"nav navbar-right panel_toolbox\">

                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\" style=\"display: block;\">

                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"control-label col-md-4 col-sm-4 col-xs-4\" for=\"annee\">Année scolaire <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <select class=\"form-control validate\" name=\"annee\" required>
                                            <option value=\"\">-- Choisir année --</option>
                                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "year", [], "any", false, false, false, 38), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label col-md-4 col-sm-4 col-xs-4\" for=\"mention\">Mention <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <select id=\"_f\" class=\"form-control validate\" name=\"mention\" required>
                                            <option value=\"\" >-- Choisir mention --</option>
                                            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mentions"]) || array_key_exists("mentions", $context) ? $context["mentions"] : (function () { throw new RuntimeError('Variable "mentions" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 50
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 50), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label col-md-4 col-sm-4 col-xs-4\" for=\"niveau\">Niveau <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <select id=\"_n\" class=\"form-control validate\" name=\"niveau\" required>
                                            <option value=\"\" >-- Choisir niveau --</option>
                                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 62
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 62), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label col-md-4 col-sm-4 col-xs-4\" for=\"parcours\">Parcours <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <select id=\"_p\" class=\"form-control validate\" name=\"parcours\" required>
                                            <option value=\"\" >-- Choisir parcours --</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=\"modal-footer justify-content-between\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                    <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-print f-p\"></i></button>
                </div>
            </form>                       
        </div>
    </div>
</div>
<!--endmodal-->
<!-- Main JS-->
<script type=\"text/javascript\">

    jQuery(document).ready(function (\$) {
        \$(\"#_f\").change(function (){
            var valfiliere = \$(this).val();

            \$(\"#_n\").change(function(){
                var valNiveau = \$(this).val();
                var data = \"niveau=\" + valNiveau +\"&code=\"+valfiliere;

                \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get-parc");
        echo "\",
                    data: data,
                    success: function(data){
                        \$('#_p').empty();
                        if(data.parcours){
                            for(var i=0 ; i< data.parcours.length; i++){
                                \$('#_p').append('<option  value= \"'+ data.parcours[i]['id'] +'\">'+ data.parcours[i]['name'] +'</option>');
                            }
                        }

                    }
                })

            })

        })

    });

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/inscription/modal/print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 103,  150 => 64,  139 => 62,  135 => 61,  124 => 52,  113 => 50,  109 => 49,  98 => 40,  87 => 38,  83 => 37,  61 => 18,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# empty Twig template #}
<!-- Modal -->
<style>
    .f-p{
        color:white;
    }
</style>
<div id=\"print\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header btn-info\">
                <h4 class=\"modal-title\"><i class=\"fa fa-print f-p\"></i>Imprimer</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form action=\"{{ path('admin_inscrire_pdf') }}\" method=\"post\" class=\"validate\">
                <div class=\"modal-body\">
                    <div class=\"x_panel\">
                        <div class=\"x_title\">
                            <h2></h2>
                            <ul class=\"nav navbar-right panel_toolbox\">

                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\" style=\"display: block;\">

                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"control-label col-md-4 col-sm-4 col-xs-4\" for=\"annee\">Année scolaire <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <select class=\"form-control validate\" name=\"annee\" required>
                                            <option value=\"\">-- Choisir année --</option>
                                            {%for item in years %}
                                                <option value=\"{{item.id}}\">{{item.year}}</option>
                                            {%endfor%}
                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label col-md-4 col-sm-4 col-xs-4\" for=\"mention\">Mention <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <select id=\"_f\" class=\"form-control validate\" name=\"mention\" required>
                                            <option value=\"\" >-- Choisir mention --</option>
                                            {%for item in mentions %}
                                                <option value=\"{{item.id}}\">{{item.name}}</option>
                                            {%endfor%}
                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label col-md-4 col-sm-4 col-xs-4\" for=\"niveau\">Niveau <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <select id=\"_n\" class=\"form-control validate\" name=\"niveau\" required>
                                            <option value=\"\" >-- Choisir niveau --</option>
                                            {%for item in niveau %}
                                                <option value=\"{{item.id}}\">{{item.code}}</option>
                                            {%endfor%}
                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label col-md-4 col-sm-4 col-xs-4\" for=\"parcours\">Parcours <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <select id=\"_p\" class=\"form-control validate\" name=\"parcours\" required>
                                            <option value=\"\" >-- Choisir parcours --</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=\"modal-footer justify-content-between\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                    <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-print f-p\"></i></button>
                </div>
            </form>                       
        </div>
    </div>
</div>
<!--endmodal-->
<!-- Main JS-->
<script type=\"text/javascript\">

    jQuery(document).ready(function (\$) {
        \$(\"#_f\").change(function (){
            var valfiliere = \$(this).val();

            \$(\"#_n\").change(function(){
                var valNiveau = \$(this).val();
                var data = \"niveau=\" + valNiveau +\"&code=\"+valfiliere;

                \$.ajax({
                    type: \"GET\",
                    url: \"{{ path('get-parc') }}\",
                    data: data,
                    success: function(data){
                        \$('#_p').empty();
                        if(data.parcours){
                            for(var i=0 ; i< data.parcours.length; i++){
                                \$('#_p').append('<option  value= \"'+ data.parcours[i]['id'] +'\">'+ data.parcours[i]['name'] +'</option>');
                            }
                        }

                    }
                })

            })

        })

    });

</script>
", "admin/inscription/modal/print.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\inscription\\modal\\print.html.twig");
    }
}
