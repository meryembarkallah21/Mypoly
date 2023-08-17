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

/* admin/inscription/index.html.twig */
class __TwigTemplate_7958534cca9cc95506cfde3179041cc2fd101fa4827efe72f39a19ec41c2bc9a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/dashboard/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/inscription/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/inscription/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/inscription/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Inscription ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <style>
        .padding-li{
            margin:0 2px;
        }
        .fa-print{
            color:royalblue;
        }
        .action1{
            color:darkgrey;
        }
        .action2{
            color:darkgreen;
        }
        .action3{
            color:darkred;
        }

        .imprim{
            margin: 0 20px;
        }
        .modal-title{
            color:white;
        }
        .modal-title{
            color:white;
        }
        .marging-5{
            margin:5px 0;
        }
    </style>


    <!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h1>Inscription</h1>
                </div>
                <div class=\"col-sm-6\">
                   ";
        // line 58
        echo "                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    ";
        // line 63
        echo "    <!-- Modal -->
    <div id=\"importer\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <form action=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_data_excel");
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal form-label-left was-validated\">
                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header bg-info\">
                        <h4 class=\"modal-title\">Importer</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"x_panel\">

                            <div class=\"x_content\" style=\"display: block;\">
                                <br>
                                <label class=\"col-sm-12 col-form-label\" for=\"file\">Veuillez uploader le bon format xlsx excel (.xlsx) <span class=\"required\">*</span>
                                </label>
                                <div class=\"form-group row\">
                                    <input type=\"file\" name=\"file\" class=\"form-control validate imprim\"  required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer justify-content-between\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Femer</button>
                        <button type=\"submit\" class=\"btn btn-danger\">Exécuter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--endmodal-->
    ";
        // line 98
        echo "    <!-- Modal -->
    <div id=\"exporter\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header bg-info\">
                    <h4 class=\"modal-title\">Exporter</h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form action=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_export_excel");
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
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 128, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 129
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 129), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "year", [], "any", false, false, false, 129), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-4 col-sm-4 col-xs-4\" for=\"mention\">Mention <span class=\"required\">*</span>
                                        </label>
                                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                            <select id=\"_filiere\" class=\"form-control validate\" name=\"mention\" required>
                                                <option value=\"\" >-- Choisir mention --</option>
                                                ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mentions"]) || array_key_exists("mentions", $context) ? $context["mentions"] : (function () { throw new RuntimeError('Variable "mentions" does not exist.', 140, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 141
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 141), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 141), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-4 col-sm-4 col-xs-4\" for=\"niveau\">Niveau <span class=\"required\">*</span>
                                        </label>
                                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                            <select id=\"_niveau\" class=\"form-control validate\" name=\"niveau\" required>
                                                <option value=\"\" >-- Choisir niveau --</option>
                                                ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 152, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 153
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 153), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 153), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-4 col-sm-4 col-xs-4\" for=\"parcours\">Parcours <span class=\"required\">*</span>
                                        </label>
                                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                            <select id=\"_parcours\" class=\"form-control validate\" name=\"parcours\" required>
                                                <option value=\"\" >-- Choisir parcours --</option>s
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer justify-content-between\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                        <button type=\"submit\" class=\"btn btn-danger\">Exécuter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--endmodal-->
    ";
        // line 181
        echo twig_include($this->env, $context, "admin/inscription/modal/inscription.html.twig");
        echo "
    <!-- Main content -->
    <section class=\"content\">
        <div class=\"container-fluid\">

            <div class=\"row\">

                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-header p-2\">
                            <ul class=\"nav float-right\">
                                ";
        // line 193
        echo "                                <li class=\"padding-li\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#importer\" class=\"pull-right btn btn-secondary\"> <i class=\"fa fa-upload\"></i> Importer </a></li>
                                ";
        // line 195
        echo "                                <li class=\"padding-li\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#exporter\"  class=\"pull-right btn btn-info\"> <i class=\"fas fa-file-export\"></i>Exporter</a></li>
                                ";
        // line 197
        echo "                                <li class=\"padding-li\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#inscription\" class=\"pull-right btn btn-primary\"> <i class=\"fa fa-user-plus\"></i> Inscription</a></li>
                                <li class=\"padding-li\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#print\"><i class=\"fa fa-print fa-2x\" ></i></a></li>
                            </ul>
                        </div>
                        <!-- /.card-header -->
                        <div class=\"card-body\">
                            <div class=\"tab-content\">
                                ";
        // line 236
        echo "                                    <table class=\"table table-condensed table-striped table-hover table-bordered\" id=\"dataTable\">
                                        <thead>
                                        <tr>
                                            <th data-property-name=\"photo\">#</th>
                                            <th data-property-name=\"nom\">Nom</th>
                                            <th data-property-name=\"email\">E-mail</th>
                                            <th data-property-name=\"tel\">Tél</th>
                                            <th data-property-name=\"mention\">Mention</th>
                                            <th data-property-name=\"niveau\">Niveau</th>
                                            <th data-property-name=\"parcours\">Parcours</th>
                                            <th data-property-name=\"Actions\" class=\"text-center\">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etudiants"]) || array_key_exists("etudiants", $context) ? $context["etudiants"] : (function () { throw new RuntimeError('Variable "etudiants" does not exist.', 250, $this->source); })()));
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
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 251
            echo "                                            <tr data-id=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
                                                <td data-label=\"Photo\">
                                                    <img class=\"img-profile rounded-circle\" src=\"/images/avatars/";
            // line 253
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "etudiant", [], "any", false, false, false, 253), "avatar", [], "any", false, false, false, 253), "html", null, true);
            echo "\">
                                                </td>
                                                <td data-label=\"nom\">";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "etudiant", [], "any", false, false, false, 255), "name", [], "any", false, false, false, 255), "html", null, true);
            echo "</td>

                                                <td data-label=\"email\">";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "etudiant", [], "any", false, false, false, 257), "email", [], "any", false, false, false, 257), "html", null, true);
            echo "</td>
                                                <td data-label=\"tel\">";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "etudiant", [], "any", false, false, false, 258), "tel", [], "any", false, false, false, 258), "html", null, true);
            echo "</td>
                                                <td data-label=\"mention\">";
            // line 259
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "mention", [], "any", false, false, false, 259), "code", [], "any", false, false, false, 259), "name", [], "any", false, false, false, 259), "html", null, true);
            echo "</td>
                                                <td data-label=\"niveau\">";
            // line 260
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "mention", [], "any", false, false, false, 260), "cycle", [], "any", false, false, false, 260), "code", [], "any", false, false, false, 260), "html", null, true);
            echo "</td>
                                                <td data-label=\"parcours\">";
            // line 261
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "parcours", [], "any", false, false, false, 261), "name", [], "any", false, false, false, 261), "html", null, true);
            echo "</td>
                                                <td data-label=\"Action\">
                                                    <center>";
            // line 263
            echo twig_include($this->env, $context, "admin/inscription/_delete_form.html.twig");
            echo "</center>
                                                </td>
                                            </tr>

                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "                                        </tbody>
                                    </table>
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>
<script>
    window.setTimeout(\"document.getElementById('err_suc').style.display='none';\", 5000);
</script>
<script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery-3.3.1.slim.min.js"), "html", null, true);
        echo "\"></script>
<!-- Jquery JS-->
<script src=\"";
        // line 287
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
        // line 301
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
<script>

    \$(document).ready(function() {
        var phoneInputID = \"#phone\";
        var input = document.querySelector(phoneInputID);
        var iti = window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: \"off\",
            // dropdownContainer: document.body,
            // excludeCountries: [\"us\"],
            formatOnDisplay: true,
            // geoIpLookup: function(callback) {
            //   \$.get(\"http://ipinfo.io\", function() {}, \"jsonp\").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : \"\";
            //     callback(countryCode);
            //   });
            // },
            hiddenInput: \"full_number\",
            // initialCountry: \"auto\",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: \"MOBILE\",
            preferredCountries: ['es'],
            // separateDialCode: true,
            utilsScript: \"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js\"
        });


        \$(phoneInputID).on(\"countrychange\", function(event) {

            // Get the selected country data to know which country is selected.
            var selectedCountryData = iti.getSelectedCountryData();

            // Get an example number for the selected country to use as placeholder.
            newPlaceholder = intlTelInputUtils.getExampleNumber(selectedCountryData.iso2, true, intlTelInputUtils.numberFormat.INTERNATIONAL),

                // Reset the phone number input.
                iti.setNumber(\"\");

            // Convert placeholder as exploitable mask by replacing all 1-9 numbers with 0s
            mask = newPlaceholder.replace(/[1-9]/g, \"0\");

            // Apply the new mask for the input
            \$(this).mask(mask);
        });


        // When the plugin loads for the first time, we have to trigger the \"countrychange\" event manually,
        // but after making sure that the plugin is fully loaded by associating handler to the promise of the
        // plugin instance.

        iti.promise.then(function() {
            \$(phoneInputID).trigger(\"countrychange\");
        });

    });
</script>
<script type=\"text/javascript\">

    jQuery(document).ready(function (\$) {
        \$(\"#_fi\").change(function (){
            var valfiliere = \$(this).val();

            \$(\"#_ni\").change(function(){
                var valNiveau = \$(this).val();
                var data = \"niveau=\" + valNiveau +\"&code=\"+valfiliere;

                \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 391
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get-parc");
        echo "\",
                    data: data,
                    success: function(data){
                        \$('#_pa').empty();
                        if(data.parcours){
                            for(var i=0 ; i< data.parcours.length; i++){
                                \$('#_pa').append('<option  value= \"'+ data.parcours[i]['id'] +'\">'+ data.parcours[i]['name'] +'</option>');
                            }
                        }

                    }
                })

            })

        })
    });

</script>
";
        // line 458
        echo "
";
        // line 459
        echo twig_include($this->env, $context, "admin/inscription/modal/print.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 461
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/inscription/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  616 => 461,  604 => 459,  601 => 458,  579 => 391,  486 => 301,  469 => 287,  464 => 285,  445 => 268,  426 => 263,  421 => 261,  417 => 260,  413 => 259,  409 => 258,  405 => 257,  400 => 255,  395 => 253,  389 => 251,  372 => 250,  356 => 236,  347 => 197,  344 => 195,  341 => 193,  327 => 181,  299 => 155,  288 => 153,  284 => 152,  273 => 143,  262 => 141,  258 => 140,  247 => 131,  236 => 129,  232 => 128,  210 => 109,  197 => 98,  163 => 66,  158 => 63,  152 => 58,  108 => 6,  98 => 5,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard/base.html.twig' %}
{% block title %} Inscription {% endblock %}
{% block css %}
{% endblock %}
{% block main %}
    <style>
        .padding-li{
            margin:0 2px;
        }
        .fa-print{
            color:royalblue;
        }
        .action1{
            color:darkgrey;
        }
        .action2{
            color:darkgreen;
        }
        .action3{
            color:darkred;
        }

        .imprim{
            margin: 0 20px;
        }
        .modal-title{
            color:white;
        }
        .modal-title{
            color:white;
        }
        .marging-5{
            margin:5px 0;
        }
    </style>


    <!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h1>Inscription</h1>
                </div>
                <div class=\"col-sm-6\">
                   {#  {% for flash_message in app.flashes('success') %}
                        <div class=\"alert alert-success\" id=\"err_suc\">
                            <span class=\"fas fa-bell \"></span> {{ flash_message }} !
                        </div>
                    {% endfor%}
                    {% for flash_message in app.flashes('error') %}
                        <div class=\"alert alert-danger\" id=\"err_suc\">
                            <span class=\"fas fa-bell \"></span> {{ flash_message }} !
                        </div>
                    {% endfor%}#}
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    {# empty Twig template #}
    <!-- Modal -->
    <div id=\"importer\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <form action=\"{{ path('admin_data_excel') }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal form-label-left was-validated\">
                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header bg-info\">
                        <h4 class=\"modal-title\">Importer</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"x_panel\">

                            <div class=\"x_content\" style=\"display: block;\">
                                <br>
                                <label class=\"col-sm-12 col-form-label\" for=\"file\">Veuillez uploader le bon format xlsx excel (.xlsx) <span class=\"required\">*</span>
                                </label>
                                <div class=\"form-group row\">
                                    <input type=\"file\" name=\"file\" class=\"form-control validate imprim\"  required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer justify-content-between\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Femer</button>
                        <button type=\"submit\" class=\"btn btn-danger\">Exécuter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--endmodal-->
    {# empty Twig template #}
    <!-- Modal -->
    <div id=\"exporter\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header bg-info\">
                    <h4 class=\"modal-title\">Exporter</h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form action=\"{{ path('admin_export_excel') }}\" method=\"post\" class=\"validate\">
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
                                            <select id=\"_filiere\" class=\"form-control validate\" name=\"mention\" required>
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
                                            <select id=\"_niveau\" class=\"form-control validate\" name=\"niveau\" required>
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
                                            <select id=\"_parcours\" class=\"form-control validate\" name=\"parcours\" required>
                                                <option value=\"\" >-- Choisir parcours --</option>s
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer justify-content-between\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                        <button type=\"submit\" class=\"btn btn-danger\">Exécuter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--endmodal-->
    {{ include('admin/inscription/modal/inscription.html.twig')}}
    <!-- Main content -->
    <section class=\"content\">
        <div class=\"container-fluid\">

            <div class=\"row\">

                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-header p-2\">
                            <ul class=\"nav float-right\">
                                {# <li class=\"padding-li\"><a href=\"{{path('test_sendmail')}}\"  class=\"pull-right btn btn-secondary\"> <i class=\"fas-fa-mail\"></i>test send mail</a></li> #}
                                <li class=\"padding-li\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#importer\" class=\"pull-right btn btn-secondary\"> <i class=\"fa fa-upload\"></i> Importer </a></li>
                                {#<li class=\"padding-li\"><a href=\"{{path('export_excel')}}\"  class=\"pull-right btn btn-secondary\"> <i class=\"fas fa-file-export\"></i>Exporter!</a></li>  #}
                                <li class=\"padding-li\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#exporter\"  class=\"pull-right btn btn-info\"> <i class=\"fas fa-file-export\"></i>Exporter</a></li>
                                {#  <li class=\"padding-li\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#resinscription\" class=\"pull-right btn btn-info\"> <i class=\"feather-edit\"></i> Réinscription</a></li>#}
                                <li class=\"padding-li\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#inscription\" class=\"pull-right btn btn-primary\"> <i class=\"fa fa-user-plus\"></i> Inscription</a></li>
                                <li class=\"padding-li\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#print\"><i class=\"fa fa-print fa-2x\" ></i></a></li>
                            </ul>
                        </div>
                        <!-- /.card-header -->
                        <div class=\"card-body\">
                            <div class=\"tab-content\">
                                {# <div class='form-group row'>

                                   <div class='col-lg-2 col-md-12 col-xs-12 col-sm-12'>
                                        <input autocomplete='off' class='form-control' name='nom' placeholder='Nom' id=\"nom\" aria-controls=\"dataTable\" />
                                    </div>
                                    <div class='col-lg-3 col-md-12 col-xs-12 col-sm-12'>
                                        <input autocomplete='off' class='form-control' name='email' id=\"email\" placeholder='E-mail' data-col='email'/>
                                    </div>
                                    <div class='col-lg-2 col-md-12 col-xs-12 col-sm-12'>
                                        <input type=\"text\"   autocomplete='off' class='filter form-control' id=\"tel\" name='tel'  data-col='tel'/>
                                    </div>
                                    <div class='filter-container col-lg-2 col-md-12 col-xs-12 col-sm-12'>
                                        <select autocomplete='off' class='filter form-control' id=\"mention\" name='mention' data-col='mention'>
                                            <option value=\"\">Choisir Mention</option>
                                            {%for item in mentions %}
                                                <option value=\"{{item.id}}\">{{item.name}}</option>
                                            {%endfor%}
                                        </select>
                                    </div>
                                    <div class='filter-container col-lg-2 col-md-12 col-xs-12 col-sm-12'>
                                        <select autocomplete='off' class='filter form-control' id=\"mention\" name='mention' data-col='parcours'>
                                            <option value=\"\">Choisir Parcours</option>
                                            {%for item in parcours %}
                                                <option value=\"{{item.id}}\">{{item.name}}</option>
                                            {%endfor%}
                                        </select>
                                    </div>
                                    <div class=\"filter-container  text-center float-right\">
                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#print\"><i class=\"fa fa-print fa-2x\" > </i></a>
                                    </div>
                                    <div class='clearfix'></div>
                                </div>#}
                                    <table class=\"table table-condensed table-striped table-hover table-bordered\" id=\"dataTable\">
                                        <thead>
                                        <tr>
                                            <th data-property-name=\"photo\">#</th>
                                            <th data-property-name=\"nom\">Nom</th>
                                            <th data-property-name=\"email\">E-mail</th>
                                            <th data-property-name=\"tel\">Tél</th>
                                            <th data-property-name=\"mention\">Mention</th>
                                            <th data-property-name=\"niveau\">Niveau</th>
                                            <th data-property-name=\"parcours\">Parcours</th>
                                            <th data-property-name=\"Actions\" class=\"text-center\">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for key,item in etudiants %}
                                            <tr data-id=\"{{key}}\">
                                                <td data-label=\"Photo\">
                                                    <img class=\"img-profile rounded-circle\" src=\"/images/avatars/{{ item.etudiant.avatar }}\">
                                                </td>
                                                <td data-label=\"nom\">{{ item.etudiant.name }}</td>

                                                <td data-label=\"email\">{{ item.etudiant.email }}</td>
                                                <td data-label=\"tel\">{{ item.etudiant.tel }}</td>
                                                <td data-label=\"mention\">{{ item.mention.code.name }}</td>
                                                <td data-label=\"niveau\">{{ item.mention.cycle.code }}</td>
                                                <td data-label=\"parcours\">{{ item.parcours.name }}</td>
                                                <td data-label=\"Action\">
                                                    <center>{{ include('admin/inscription/_delete_form.html.twig') }}</center>
                                                </td>
                                            </tr>

                                        {% endfor %}
                                        </tbody>
                                    </table>
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>
<script>
    window.setTimeout(\"document.getElementById('err_suc').style.display='none';\", 5000);
</script>
<script src=\"{{ asset('vendor/jquery/jquery-3.3.1.slim.min.js') }}\"></script>
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
<script>

    \$(document).ready(function() {
        var phoneInputID = \"#phone\";
        var input = document.querySelector(phoneInputID);
        var iti = window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: \"off\",
            // dropdownContainer: document.body,
            // excludeCountries: [\"us\"],
            formatOnDisplay: true,
            // geoIpLookup: function(callback) {
            //   \$.get(\"http://ipinfo.io\", function() {}, \"jsonp\").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : \"\";
            //     callback(countryCode);
            //   });
            // },
            hiddenInput: \"full_number\",
            // initialCountry: \"auto\",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: \"MOBILE\",
            preferredCountries: ['es'],
            // separateDialCode: true,
            utilsScript: \"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js\"
        });


        \$(phoneInputID).on(\"countrychange\", function(event) {

            // Get the selected country data to know which country is selected.
            var selectedCountryData = iti.getSelectedCountryData();

            // Get an example number for the selected country to use as placeholder.
            newPlaceholder = intlTelInputUtils.getExampleNumber(selectedCountryData.iso2, true, intlTelInputUtils.numberFormat.INTERNATIONAL),

                // Reset the phone number input.
                iti.setNumber(\"\");

            // Convert placeholder as exploitable mask by replacing all 1-9 numbers with 0s
            mask = newPlaceholder.replace(/[1-9]/g, \"0\");

            // Apply the new mask for the input
            \$(this).mask(mask);
        });


        // When the plugin loads for the first time, we have to trigger the \"countrychange\" event manually,
        // but after making sure that the plugin is fully loaded by associating handler to the promise of the
        // plugin instance.

        iti.promise.then(function() {
            \$(phoneInputID).trigger(\"countrychange\");
        });

    });
</script>
<script type=\"text/javascript\">

    jQuery(document).ready(function (\$) {
        \$(\"#_fi\").change(function (){
            var valfiliere = \$(this).val();

            \$(\"#_ni\").change(function(){
                var valNiveau = \$(this).val();
                var data = \"niveau=\" + valNiveau +\"&code=\"+valfiliere;

                \$.ajax({
                    type: \"GET\",
                    url: \"{{ path('get-parc') }}\",
                    data: data,
                    success: function(data){
                        \$('#_pa').empty();
                        if(data.parcours){
                            for(var i=0 ; i< data.parcours.length; i++){
                                \$('#_pa').append('<option  value= \"'+ data.parcours[i]['id'] +'\">'+ data.parcours[i]['name'] +'</option>');
                            }
                        }

                    }
                })

            })

        })
    });

</script>
{#  <script>
    \$(document).ready(function () {
        var table =  \$('#dataTable').DataTable({
            \"paging\": true,
            \"lengthChange\": false,
            \"searching\": true,
            \"ordering\": true,
            \"info\": true,
            \"autoWidth\": false,
        });
        \$('#nom').on( 'keyup', function () {
            table
                .columns( 2 )
                .search( this.value )
                .draw();
        } );
        \$('#email').on( 'keyup', function () {
            table
                .columns( 3 )
                .search( this.value )
                .draw();
        } );
        \$('#tel').on( 'keyup', function () {
            table
                .columns( 4 )
                .search( this.value )
                .draw();
        } );
        \$('#niveau').on( 'change', function () {
            table
                .columns( 5 )
                .search( this.value )
                .draw();
        } );
        \$('#mention').on( 'change', function () {
            table
                .columns( 6 )
                .search( this.value )
                .draw();
        } );
        \$('#parcours').on( 'change', function () {
            table
                .columns( 7 )
                .search( this.value )
                .draw();
        } );
    });
</script> #}

{{include('admin/inscription/modal/print.html.twig')}}
{% endblock %}
{% block javascripts %}
{% endblock %}", "admin/inscription/index.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\inscription\\index.html.twig");
    }
}
