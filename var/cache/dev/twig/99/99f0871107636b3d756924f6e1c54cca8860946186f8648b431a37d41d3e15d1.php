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

/* prof/bibliotheque/modal/creer.html.twig */
class __TwigTemplate_cfeae3f56876612c7246b571c23ed82709fcea41d14b56cb6cb2ae57bddb472e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/bibliotheque/modal/creer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/bibliotheque/modal/creer.html.twig"));

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
                ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formbl"]) || array_key_exists("formbl", $context) ? $context["formbl"] : (function () { throw new RuntimeError('Variable "formbl" does not exist.', 48, $this->source); })()), 'form_start');
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
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filieres"]) || array_key_exists("filieres", $context) ? $context["filieres"] : (function () { throw new RuntimeError('Variable "filieres" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["filiere"]) {
            // line 68
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filiere"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filiere"], "name", [], "any", false, false, false, 68), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                        </select>
                                    </div>

                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\" for=\"_niveau\">Niveau<span class=\"required\">*</span>
                                        </label>
                                        <select id=\"_niveau\"  name=\"_niveau\" class=\"form-control\">
                                            <option class=\"text-center\" value=\"\">--- Choisir niveau ---</option>
                                            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cycle"]) {
            // line 79
            echo "                                                <option  value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "id", [], "any", false, false, false, 79), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "code", [], "any", false, false, false, 79), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cycle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
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
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formbl"]) || array_key_exists("formbl", $context) ? $context["formbl"] : (function () { throw new RuntimeError('Variable "formbl" does not exist.', 93, $this->source); })()), "Semestre", [], "any", false, false, false, 93), 'widget');
        echo "
                                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formbl"]) || array_key_exists("formbl", $context) ? $context["formbl"] : (function () { throw new RuntimeError('Variable "formbl" does not exist.', 94, $this->source); })()), "Semestre", [], "any", false, false, false, 94), 'errors');
        echo "
                                    </div>
                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\">Ec<span class=\"required\">*</span>
                                        </label>
                                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formbl"]) || array_key_exists("formbl", $context) ? $context["formbl"] : (function () { throw new RuntimeError('Variable "formbl" does not exist.', 99, $this->source); })()), "ec", [], "any", false, false, false, 99), 'widget');
        echo "
                                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formbl"]) || array_key_exists("formbl", $context) ? $context["formbl"] : (function () { throw new RuntimeError('Variable "formbl" does not exist.', 100, $this->source); })()), "ec", [], "any", false, false, false, 100), 'errors');
        echo "
                                    </div>

                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\" for=\"type\">Type<span class=\"required\">*</span>
                                        </label>
                                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formbl"]) || array_key_exists("formbl", $context) ? $context["formbl"] : (function () { throw new RuntimeError('Variable "formbl" does not exist.', 106, $this->source); })()), "type", [], "any", false, false, false, 106), 'widget');
        echo "
                                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formbl"]) || array_key_exists("formbl", $context) ? $context["formbl"] : (function () { throw new RuntimeError('Variable "formbl" does not exist.', 107, $this->source); })()), "type", [], "any", false, false, false, 107), 'errors');
        echo "
                                    </div>

                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\" for=\"title\">Titre<span class=\"required\">*</span>
                                        </label>
                                        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formbl"]) || array_key_exists("formbl", $context) ? $context["formbl"] : (function () { throw new RuntimeError('Variable "formbl" does not exist.', 113, $this->source); })()), "title", [], "any", false, false, false, 113), 'widget');
        echo "
                                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formbl"]) || array_key_exists("formbl", $context) ? $context["formbl"] : (function () { throw new RuntimeError('Variable "formbl" does not exist.', 114, $this->source); })()), "title", [], "any", false, false, false, 114), 'errors');
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
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formbl"]) || array_key_exists("formbl", $context) ? $context["formbl"] : (function () { throw new RuntimeError('Variable "formbl" does not exist.', 128, $this->source); })()), "description", [], "any", false, false, false, 128), 'widget');
        echo "
                                        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formbl"]) || array_key_exists("formbl", $context) ? $context["formbl"] : (function () { throw new RuntimeError('Variable "formbl" does not exist.', 129, $this->source); })()), "description", [], "any", false, false, false, 129), 'errors');
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
                                                <span>  </span> Publier
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
        // line 153
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formbl"]) || array_key_exists("formbl", $context) ? $context["formbl"] : (function () { throw new RuntimeError('Variable "formbl" does not exist.', 153, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
</div>
<!--endmodal-->
<!-- Jquery JS-->
<script src=\"";
        // line 159
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
        // line 173
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof-get-parc");
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
        return "prof/bibliotheque/modal/creer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 173,  267 => 159,  258 => 153,  231 => 129,  227 => 128,  210 => 114,  206 => 113,  197 => 107,  193 => 106,  184 => 100,  180 => 99,  172 => 94,  168 => 93,  154 => 81,  143 => 79,  139 => 78,  129 => 70,  118 => 68,  114 => 67,  92 => 48,  50 => 8,  43 => 2,);
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
                {{ form_start(formbl) }}
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
                                        {{ form_widget(formbl.Semestre) }}
                                        {{ form_errors(formbl.Semestre) }}
                                    </div>
                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\">Ec<span class=\"required\">*</span>
                                        </label>
                                        {{ form_widget(formbl.ec) }}
                                        {{ form_errors(formbl.ec) }}
                                    </div>

                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\" for=\"type\">Type<span class=\"required\">*</span>
                                        </label>
                                        {{ form_widget(formbl.type) }}
                                        {{ form_errors(formbl.type) }}
                                    </div>

                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\" for=\"title\">Titre<span class=\"required\">*</span>
                                        </label>
                                        {{ form_widget(formbl.title) }}
                                        {{ form_errors(formbl.title) }}
                                    </div>


                                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                        <label class=\"control-label\">Fichier<span class=\"required\">*</span>
                                        </label>
                                        <input type=\"file\" name=\"doc\" class=\"form-control\" required>
                                    </div>


                                    <label class=\"control-label col-md-12 col-sm-12 col-xs-12\" for=\"description\">Description du document<span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        {{ form_widget(formbl.description) }}
                                        {{ form_errors(formbl.description) }}
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
                                                <span>  </span> Publier
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
                {{ form_end(formbl) }}
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
                    url: \"{{ path('prof-get-parc') }}\",
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
", "prof/bibliotheque/modal/creer.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\prof\\bibliotheque\\modal\\creer.html.twig");
    }
}
