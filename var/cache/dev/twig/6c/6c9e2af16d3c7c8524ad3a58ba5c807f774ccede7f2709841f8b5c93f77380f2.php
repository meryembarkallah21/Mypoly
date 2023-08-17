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

/* admin/inscription/modal/inscription.html.twig */
class __TwigTemplate_d6ab3017f52857fbc934772c6b782f39d82e525008fd2dbeea03b10d6cfd3e8b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/inscription/modal/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/inscription/modal/inscription.html.twig"));

        // line 2
        echo "<!-- Modal -->
<style>
    .iti--allow-dropdown{
        width: 100%;
    }
</style>
<div id=\"inscription\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog modal-xl\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header bg-info\">
                <h4 class=\"modal-title\"><span class=\"feather-user-plus\"> </span> Inscription</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_inscrire_new");
        echo "\" method=\"post\" class=\"validate\">
                <div class=\"modal-body\">
                    <div class=\"x_panel\">
                        <div class=\"x_content\" style=\"display: block;\">

                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"card\">
                                            <div class=\"card-header\">
                                                <h6 class=\"card-title\"><span class=\"fas fa-user\"></span> Information étudiant</h6>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class=\"card-body\" style=\"display: block;\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-4 md-4\">
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-12 col-sm-12 col-xs-12\" for=\"nom\">Nom<span class=\"required\">*</span>
                                                            </label>
                                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                                <input type=\"text\" class=\"form-control validate\" name=\"nom\" id=\"nom\" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4 md-4\">
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-12 col-sm-12 col-xs-12\" for=\"tel\">Tél<span class=\"required\">*</span>
                                                            </label>
                                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                                <input type=\"tel\" id=\"phone\" name=\"tel\" class=\"form-control\" required style=\"width:100%\"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4 md-4\">
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-12col-sm-12 col-xs-12\" for=\"ville\">Ville<span class=\"required\">*</span>
                                                            </label>
                                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                                <input type=\"text\" class=\"form-control validate\" name=\"ville\" id=\"ville\" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12 marging-5\">
                                        <div class=\"card\">
                                            <div class=\"card-header\">
                                                <h6 class=\"card-title\"><span class=\"fas fa-user-graduate\"></span> Mention</h6>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class=\"card-body\" style=\"display: block;\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-4  md-4\">
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-12 col-sm-12 col-xs-12\" for=\"mention\">Mention<span class=\"required\">*</span>
                                                            </label>
                                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                                <select id=\"_fi\" class=\"form-control validate\" name=\"mention\" required>
                                                                    <option value=\"\" >-- Choisir mention --</option>
                                                                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mentions"]) || array_key_exists("mentions", $context) ? $context["mentions"] : (function () { throw new RuntimeError('Variable "mentions" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 80
            echo "                                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 80), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 80), "html", null, true);
            echo "</option>
                                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4  md-4\">
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-12 col-sm-12 col-xs-12\" for=\"niveau\">Niveau <span class=\"required\">*</span>
                                                            </label>
                                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                                <select id=\"_ni\" class=\"form-control validate\" name=\"niveau\" required>
                                                                    <option value=\"\" >-- Choisir niveau --</option>
                                                                    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 94
            echo "                                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 94), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 94), "html", null, true);
            echo "</option>
                                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4  md-4\">
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-12 col-sm-12 col-xs-12\" for=\"parcours\">Parcours <span class=\"required\">*</span>
                                                            </label>
                                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                                <select id=\"_pa\" class=\"form-control validate\" name=\"parcours\" required>
                                                                    <option value=\"\" >-- Choisir parcours --</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"card\">
                                            <div class=\"card-header\">
                                                <h6 class=\"card-title\"><span class=\"fas fa-mail-bulk\"></span> Compte</h6>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class=\"card-body\" style=\"display: block;\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-12 col-sm-12 col-xs-12\" for=\"email\">Adresse email<span class=\"required\">*</span>
                                                            </label>
                                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                                <input type=\"email\" class=\"form-control validate\" name=\"email\" id=\"email\" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer justify-content-between\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                    <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--endmodal-->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/inscription/modal/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 96,  157 => 94,  153 => 93,  140 => 82,  129 => 80,  125 => 79,  61 => 18,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# empty Twig template inscription #}
<!-- Modal -->
<style>
    .iti--allow-dropdown{
        width: 100%;
    }
</style>
<div id=\"inscription\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog modal-xl\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header bg-info\">
                <h4 class=\"modal-title\"><span class=\"feather-user-plus\"> </span> Inscription</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form action=\"{{ path('admin_inscrire_new') }}\" method=\"post\" class=\"validate\">
                <div class=\"modal-body\">
                    <div class=\"x_panel\">
                        <div class=\"x_content\" style=\"display: block;\">

                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"card\">
                                            <div class=\"card-header\">
                                                <h6 class=\"card-title\"><span class=\"fas fa-user\"></span> Information étudiant</h6>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class=\"card-body\" style=\"display: block;\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-4 md-4\">
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-12 col-sm-12 col-xs-12\" for=\"nom\">Nom<span class=\"required\">*</span>
                                                            </label>
                                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                                <input type=\"text\" class=\"form-control validate\" name=\"nom\" id=\"nom\" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4 md-4\">
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-12 col-sm-12 col-xs-12\" for=\"tel\">Tél<span class=\"required\">*</span>
                                                            </label>
                                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                                <input type=\"tel\" id=\"phone\" name=\"tel\" class=\"form-control\" required style=\"width:100%\"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4 md-4\">
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-12col-sm-12 col-xs-12\" for=\"ville\">Ville<span class=\"required\">*</span>
                                                            </label>
                                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                                <input type=\"text\" class=\"form-control validate\" name=\"ville\" id=\"ville\" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12 marging-5\">
                                        <div class=\"card\">
                                            <div class=\"card-header\">
                                                <h6 class=\"card-title\"><span class=\"fas fa-user-graduate\"></span> Mention</h6>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class=\"card-body\" style=\"display: block;\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-4  md-4\">
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-12 col-sm-12 col-xs-12\" for=\"mention\">Mention<span class=\"required\">*</span>
                                                            </label>
                                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                                <select id=\"_fi\" class=\"form-control validate\" name=\"mention\" required>
                                                                    <option value=\"\" >-- Choisir mention --</option>
                                                                    {%for item in mentions %}
                                                                        <option value=\"{{item.id}}\">{{item.name}}</option>
                                                                    {%endfor%}
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4  md-4\">
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-12 col-sm-12 col-xs-12\" for=\"niveau\">Niveau <span class=\"required\">*</span>
                                                            </label>
                                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                                <select id=\"_ni\" class=\"form-control validate\" name=\"niveau\" required>
                                                                    <option value=\"\" >-- Choisir niveau --</option>
                                                                    {%for item in niveau %}
                                                                        <option value=\"{{item.id}}\">{{item.code}}</option>
                                                                    {%endfor%}
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-4  md-4\">
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-12 col-sm-12 col-xs-12\" for=\"parcours\">Parcours <span class=\"required\">*</span>
                                                            </label>
                                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                                <select id=\"_pa\" class=\"form-control validate\" name=\"parcours\" required>
                                                                    <option value=\"\" >-- Choisir parcours --</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"card\">
                                            <div class=\"card-header\">
                                                <h6 class=\"card-title\"><span class=\"fas fa-mail-bulk\"></span> Compte</h6>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class=\"card-body\" style=\"display: block;\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                        <div class=\"form-group\">
                                                            <label class=\"control-label col-md-12 col-sm-12 col-xs-12\" for=\"email\">Adresse email<span class=\"required\">*</span>
                                                            </label>
                                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                                <input type=\"email\" class=\"form-control validate\" name=\"email\" id=\"email\" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer justify-content-between\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                    <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--endmodal-->
", "admin/inscription/modal/inscription.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\inscription\\modal\\inscription.html.twig");
    }
}
