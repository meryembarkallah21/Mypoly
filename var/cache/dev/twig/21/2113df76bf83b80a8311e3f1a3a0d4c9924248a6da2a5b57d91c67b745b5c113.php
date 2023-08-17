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

/* admin/bibliotheque/modal/creer.html.twig */
class __TwigTemplate_e5977a3350a2f4dbb888e7f5e80a0444fc7408333ff2143c2f13c96e7b9d1413 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/bibliotheque/modal/creer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/bibliotheque/modal/creer.html.twig"));

        // line 2
        echo "<!-- Modal -->
<style>
    .modal-title{
        color:white;
    }
    ";
        // line 8
        echo "    input[type=\"checkbox\"].check {
        display: none;
    }
    input[type=\"checkbox\"].check + label {
        box-sizing: border-box;
        display: inline-block;
        width: 3rem;
        height: 1.5rem;
        border-radius: 1.5rem;
        padding:2px;
        background-color: #c0ceda ;
        transition: all 0.5s ;
    }
    input[type=\"checkbox\"].check + label::before {
        box-sizing: border-box;
        display: block;
        content: \"\";
        height: calc(1.5rem - 4px);
        width: calc(1.5rem - 4px);
        border-radius: 50%;
        background-color: #fff;
        transition: all 0.5s ;
    }
    input[type=\"checkbox\"].check:checked + label {
        background-color: #00B7E8 ;
    }
    input[type=\"checkbox\"].check:checked + label::before {
        margin-left: 1.5rem ;
    }
</style>
<div id=\"creer\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog modal-xl\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header bg-info\">
                <h4 class=\"modal-title\">Créer Bibliothèque</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form action=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bibliotheque_new");
        echo "\" method=\"post\" class=\"validate\">
                ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_start');
        echo "
                <div class=\"modal-body\">
                    <div class=\"x_panel\">
                        <div class=\"x_title\">
                            <h2></h2>
                            <ul class=\"nav navbar-right panel_toolbox\">

                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\" style=\"display: block;\">
                            <div class=\"form-group\">
                                <div class=\"row\">

                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\" style=\"\" for=\"_filiere\">Mention<span class=\"required\">*</span>
                                        </label>
                                        <select id=\"_filiere\"  name=\"_filiere\" class=\"form-control\">
                                            <option class=\"text-center\" value=\"\">--- Choisir mention ---</option>
                                            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filieres"]) || array_key_exists("filieres", $context) ? $context["filieres"] : (function () { throw new RuntimeError('Variable "filieres" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["filiere"]) {
            // line 69
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filiere"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filiere"], "name", [], "any", false, false, false, 69), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                                        </select>
                                    </div>

                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\" for=\"_niveau\">Niveau<span class=\"required\">*</span>
                                        </label>
                                        <select id=\"_niveau\"  name=\"_niveau\" class=\"form-control\">
                                            <option class=\"text-center\" value=\"\">--- Choisir niveau ---</option>
                                            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cycle"]) {
            // line 80
            echo "                                                <option  value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "id", [], "any", false, false, false, 80), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "code", [], "any", false, false, false, 80), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cycle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                                        </select>
                                    </div>
                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\" for=\"_parcours\">Parcours<span class=\"required\">*</span>
                                        </label>
                                        <select id=\"_parcours\"  name=\"_parcours\" class=\"form-control\">
                                            <option class=\"text-center\" value=\"\">--- Choisir parcours ---</option>
                                        </select>
                                    </div>
                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\">Semestre<span class=\"required\">*</span>
                                        </label>
                                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "Semestre", [], "any", false, false, false, 94), 'widget');
        echo "
                                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "Semestre", [], "any", false, false, false, 95), 'errors');
        echo "
                                    </div>








                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\">Ec<span class=\"required\">*</span>
                                        </label>
                                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "ec", [], "any", false, false, false, 108), 'widget');
        echo "
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "ec", [], "any", false, false, false, 109), 'errors');
        echo "
                                    </div>

                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\" for=\"type\">Type<span class=\"required\">*</span>
                                        </label>
                                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "type", [], "any", false, false, false, 115), 'widget');
        echo "
                                        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "type", [], "any", false, false, false, 116), 'errors');
        echo "
                                    </div>


                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\" for=\"title\">Titre<span class=\"required\">*</span>
                                        </label>
                                        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "title", [], "any", false, false, false, 123), 'widget');
        echo "
                                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "title", [], "any", false, false, false, 124), 'errors');
        echo "
                                    </div>


                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\">Fichier<span class=\"required\">*</span>
                                        </label>
                                        <input type=\"file\" name=\"doc\" class=\"form-control\" required>
                                    </div>


                                    <label class=\"control-label col-md-12 col-sm-12 col-xs-12\" for=\"description\">Description du document<span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "description", [], "any", false, false, false, 138), 'widget');
        echo "
                                        ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "description", [], "any", false, false, false, 139), 'errors');
        echo "
                                        <br>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\"></div>
                                    <div class=\"col-md-12 col-sm-12col-xs-12\">
                                        <ul class=\"nav float-right\">
                                            <li>
                                                <input type=\"checkbox\" id=\"_publie\" name=\"_publie\"  class=\"check\">
                                                <label for=\"_publie\"></label>
                                            </li>
                                            <li>
                                                <span>  </span> Publié
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </diV>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer justify-content-between\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                    <button type=\"submit\" class=\"btn btn-danger\">Enregistrer</button>
                </div>
                ";
        // line 163
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), 'form_end');
        echo "
            </form>
        </div>
    </div>
</div>
<!--endmodal-->
<!-- Jquery JS-->
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("inscription/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Main JS-->
<script type=\"text/javascript\">

    jQuery(document).ready(function (\$) {
        \$(\"#_filiere\").change(function (){
            var valfiliere = \$(this).val();

            \$(\"#_niveau\").change(function(){
                var valNiveau = \$(this).val();
                var data = \"niveau=\" + valNiveau +\"&code=\"+valfiliere;

                \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 184
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get-parc");
        echo "\",
                    data: data,
                    success: function(data){
                        \$('#_parcours').empty();
                        if(data.parcours){
                            for(var i=0 ; i< data.parcours.length; i++){
                                \$('#_parcours').append('<option  value= \"'+ data.parcours[i]['id'] +'\">'+ data.parcours[i]['name'] +'</option>');
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
        return "admin/bibliotheque/modal/creer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 184,  281 => 170,  271 => 163,  244 => 139,  240 => 138,  223 => 124,  219 => 123,  209 => 116,  205 => 115,  196 => 109,  192 => 108,  176 => 95,  172 => 94,  158 => 82,  147 => 80,  143 => 79,  133 => 71,  122 => 69,  118 => 68,  96 => 49,  92 => 48,  50 => 8,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# empty Twig template #}
<!-- Modal -->
<style>
    .modal-title{
        color:white;
    }
    {# checkbox style #}
    input[type=\"checkbox\"].check {
        display: none;
    }
    input[type=\"checkbox\"].check + label {
        box-sizing: border-box;
        display: inline-block;
        width: 3rem;
        height: 1.5rem;
        border-radius: 1.5rem;
        padding:2px;
        background-color: #c0ceda ;
        transition: all 0.5s ;
    }
    input[type=\"checkbox\"].check + label::before {
        box-sizing: border-box;
        display: block;
        content: \"\";
        height: calc(1.5rem - 4px);
        width: calc(1.5rem - 4px);
        border-radius: 50%;
        background-color: #fff;
        transition: all 0.5s ;
    }
    input[type=\"checkbox\"].check:checked + label {
        background-color: #00B7E8 ;
    }
    input[type=\"checkbox\"].check:checked + label::before {
        margin-left: 1.5rem ;
    }
</style>
<div id=\"creer\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog modal-xl\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header bg-info\">
                <h4 class=\"modal-title\">Créer Bibliothèque</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form action=\"{{ path('admin_bibliotheque_new') }}\" method=\"post\" class=\"validate\">
                {{ form_start(form) }}
                <div class=\"modal-body\">
                    <div class=\"x_panel\">
                        <div class=\"x_title\">
                            <h2></h2>
                            <ul class=\"nav navbar-right panel_toolbox\">

                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\" style=\"display: block;\">
                            <div class=\"form-group\">
                                <div class=\"row\">

                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\" style=\"\" for=\"_filiere\">Mention<span class=\"required\">*</span>
                                        </label>
                                        <select id=\"_filiere\"  name=\"_filiere\" class=\"form-control\">
                                            <option class=\"text-center\" value=\"\">--- Choisir mention ---</option>
                                            {% for filiere in filieres %}
                                                <option value=\"{{ filiere.id }}\">{{ filiere.name }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>

                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\" for=\"_niveau\">Niveau<span class=\"required\">*</span>
                                        </label>
                                        <select id=\"_niveau\"  name=\"_niveau\" class=\"form-control\">
                                            <option class=\"text-center\" value=\"\">--- Choisir niveau ---</option>
                                            {% for cycle in niveaux %}
                                                <option  value=\"{{ cycle.id }}\"> {{ cycle.code }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\" for=\"_parcours\">Parcours<span class=\"required\">*</span>
                                        </label>
                                        <select id=\"_parcours\"  name=\"_parcours\" class=\"form-control\">
                                            <option class=\"text-center\" value=\"\">--- Choisir parcours ---</option>
                                        </select>
                                    </div>
                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\">Semestre<span class=\"required\">*</span>
                                        </label>
                                        {{ form_widget(form.Semestre) }}
                                        {{ form_errors(form.Semestre) }}
                                    </div>








                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\">Ec<span class=\"required\">*</span>
                                        </label>
                                        {{ form_widget(form.ec) }}
                                        {{ form_errors(form.ec) }}
                                    </div>

                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\" for=\"type\">Type<span class=\"required\">*</span>
                                        </label>
                                        {{ form_widget(form.type) }}
                                        {{ form_errors(form.type) }}
                                    </div>


                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\" for=\"title\">Titre<span class=\"required\">*</span>
                                        </label>
                                        {{ form_widget(form.title) }}
                                        {{ form_errors(form.title) }}
                                    </div>


                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\">Fichier<span class=\"required\">*</span>
                                        </label>
                                        <input type=\"file\" name=\"doc\" class=\"form-control\" required>
                                    </div>


                                    <label class=\"control-label col-md-12 col-sm-12 col-xs-12\" for=\"description\">Description du document<span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        {{ form_widget(form.description) }}
                                        {{ form_errors(form.description) }}
                                        <br>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\"></div>
                                    <div class=\"col-md-12 col-sm-12col-xs-12\">
                                        <ul class=\"nav float-right\">
                                            <li>
                                                <input type=\"checkbox\" id=\"_publie\" name=\"_publie\"  class=\"check\">
                                                <label for=\"_publie\"></label>
                                            </li>
                                            <li>
                                                <span>  </span> Publié
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </diV>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer justify-content-between\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                    <button type=\"submit\" class=\"btn btn-danger\">Enregistrer</button>
                </div>
                {{ form_end(form) }}
            </form>
        </div>
    </div>
</div>
<!--endmodal-->
<!-- Jquery JS-->
<script src=\"{{ asset('inscription/vendor/jquery/jquery.min.js') }}\"></script>
<!-- Main JS-->
<script type=\"text/javascript\">

    jQuery(document).ready(function (\$) {
        \$(\"#_filiere\").change(function (){
            var valfiliere = \$(this).val();

            \$(\"#_niveau\").change(function(){
                var valNiveau = \$(this).val();
                var data = \"niveau=\" + valNiveau +\"&code=\"+valfiliere;

                \$.ajax({
                    type: \"GET\",
                    url: \"{{ path('get-parc') }}\",
                    data: data,
                    success: function(data){
                        \$('#_parcours').empty();
                        if(data.parcours){
                            for(var i=0 ; i< data.parcours.length; i++){
                                \$('#_parcours').append('<option  value= \"'+ data.parcours[i]['id'] +'\">'+ data.parcours[i]['name'] +'</option>');
                            }
                        }

                    }
                })

            })

        })

    });

</script>
", "admin/bibliotheque/modal/creer.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\bibliotheque\\modal\\creer.html.twig");
    }
}
