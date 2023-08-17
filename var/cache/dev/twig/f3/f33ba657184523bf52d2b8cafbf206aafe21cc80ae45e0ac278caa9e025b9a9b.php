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

/* admin/agendas/index.html.twig */
class __TwigTemplate_b3bd0081fbcae954db1dc3419a0bba3b0e064458a242c1049431f8483de59931 extends Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/agendas/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/agendas/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/agendas/index.html.twig", 1);
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

        echo " Admin | Agenda";
        
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
        echo "<style>
    .tb{
        color: royalblue;
    }
    .float-right{
        position: absolute;
        right: 2%;
        color: #33394c;
    }
    .float-right1{
        position: absolute;
        right: 2%;
        color: #2e3857;
    }
    #calendar{
        margin:0 2%;
        padding:0 2%;
    }
    .event-header{
        color:white;
    }

    ";
        // line 29
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
<!--------code------>
    ";
        // line 61
        echo "    <!-- Modal creation-->
    <div id=\"creer\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog modal-xl\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header bg-info\">
                    <h4 class=\"modal-title event-header\"><i class=\"fas fa-calendar-plus\"></i> Evénement</h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form action=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_event");
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
                                        <div class=\"row\">

                                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                                <label class=\"control-label\" for=\"_filiere\">Mention<span class=\"required\">*</span>
                                                </label>
                                                <select id=\"_filiere\"  name=\"_filiere\" class=\"form-control\">
                                                    <option class=\"text-center\" value=\"\">--- Choisir une filière ---</option>
                                                    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filieres"]) || array_key_exists("filieres", $context) ? $context["filieres"] : (function () { throw new RuntimeError('Variable "filieres" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["filiere"]) {
            // line 95
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filiere"], "id", [], "any", false, false, false, 95), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filiere"], "name", [], "any", false, false, false, 95), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                                <label class=\"control-label\" for=\"_niveau\">Niveau<span class=\"required\">*</span>
                                                </label>
                                                <select id=\"_niveau\"  name=\"_niveau\" class=\"form-control\">
                                                    <option class=\"text-center\" value=\"\">--- Choisir niveau ---</option>
                                                    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 104, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cycle"]) {
            // line 105
            echo "                                                        <option  value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "id", [], "any", false, false, false, 105), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "code", [], "any", false, false, false, 105), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cycle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                                <label class=\"control-label\" for=\"_parcours\">Parcours<span class=\"required\">*</span>
                                                </label>
                                                <select id=\"_parcours\"  name=\"_parcours\" class=\"form-control\">
                                                    <option class=\"text-center\" value=\"\">--- Choisir parcours ---</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                                <label class=\"control-label\" for=\"_semestre\">Semestre<span class=\"required\">*</span>
                                                </label>
                                                <select id=\"_semestre\"  name=\"_semestre\" class=\"form-control\">
                                                    <option class=\"text-center\" value=\"\">--- Choisir semestre ---</option>
                                                    ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["semestres"]) || array_key_exists("semestres", $context) ? $context["semestres"] : (function () { throw new RuntimeError('Variable "semestres" does not exist.', 125, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 126
            echo "                                                        <option  value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 126), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 126), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                                <label class=\"control-label\" for=\"_ec\">Ec<span class=\"required\">*</span>
                                                </label>
                                                <select name=\"_ec\" id=\"_ec\" class=\"form-control\">
                                                    <option value=\"\" class=\"text-center\">--- Choisir Ec --- </option>
                                                    ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 135, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 136
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 136), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 136), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                                <label class=\"control-label\" for=\"_prof\">Prof<span class=\"required\">*</span>
                                                </label>
                                                <select name=\"_prof\" id=\"_prof\" class=\"form-control\">
                                                    <option value=\"\" class=\"text-center\">--- Choisir Prof --- </option>
                                                    ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profs"]) || array_key_exists("profs", $context) ? $context["profs"] : (function () { throw new RuntimeError('Variable "profs" does not exist.', 145, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 146
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 146), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 146), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">

                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                <label class=\"control-label\" for=\"titre\">Titre<span class=\"required\">*</span>
                                                </label>
                                                <input type=\"text\" id=\"titre\" name=\"titre\"  class=\"form-control\" required>
                                            </div>



                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                <label class=\"control-label\" for=\"description\">Description<span class=\"required\">*</span>
                                                </label>
                                                <div class=\"description\" name=\"description\">
                                                    ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "description", [], "any", false, false, false, 168), 'widget');
        echo "
                                                    ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "description", [], "any", false, false, false, 169), 'errors');
        echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">

                                            <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                                <label class=\"control-label\" for=\"first-name\">BackgroundColor<span class=\"required\">*</span>
                                                </label>
                                                <input type=\"color\" id=\"backgroundColor\" name=\"backgroundColor\" value=\"#436ae0\" class=\"form-control\">
                                            </div>
                                            <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                                <label class=\"control-label\" for=\"first-name\">BorderColor<span class=\"required\">*</span>
                                                </label>
                                                <input type=\"color\" id=\"borderColor\" name=\"borderColor\" value=\"#b043ea\" class=\"form-control\">
                                            </div>
                                            <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                                <label class=\"control-label\" for=\"textColor\">TextColor<span class=\"required\">*</span>
                                                </label>
                                                <input type=\"color\" id=\"txtColor\" name=\"textColor\" value=\"#e3eaeb\" class=\"form-control\">
                                            </div>

                                            <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                                <label class=\"control-label text-center\" >Publier <span class=\"required\"> *</span>
                                                </label>
                                                <div style=\"margin-left: 40%\">
                                                    <input type=\"checkbox\" id=\"_publie\" name=\"_publie\"  class=\"check\">
                                                    <label for=\"_publie\"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"hidden\" name=\"start\" class=\"start\">
                                    <input type=\"hidden\" name=\"end\" class=\"end\">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer justify-content-between\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--endmodal-->
    <!-- Modal Suppression-->
    <div id=\"deleteModalCalendar\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form  action=\"";
        // line 223
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendrier_delete");
        echo "\" method=\"get\">
                    <div class=\"modal-header bg-danger\">
                        <h4 class=\"modal-title event-header\"><i class=\"fas fa-calendar-times\"></i></h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"id\" class=\"calendrier_id\">
                        Voulez-vous supprimer cet événement ?
                    </div>
                    <div class=\"modal-footer justify-content-between\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                        <button type=\"submit\" class=\"btn btn-danger btn-supprimer\">Supprimer</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Agenda</h1>
        <ol class=\"breadcrumb mb-4\">
            <li><a href=\"";
        // line 247
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\" class=\"tb\">Tableau de bord /</a></li>
            <li class=\"breadcrumb-item active\">Agenda / </li>
            <li><a href=\"";
        // line 249
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_agendas_list");
        echo "\" class=\"text-info\"> Liste</a></li>
            <li class=\"float-right\"><a onClick=\"imprimer('calendar-wrap')\" href=\"";
        // line 250
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("imprimer_pdf");
        echo "\" class=\"btn btn-primary\"><span class=\"fas fa-print\"></span>Imprimer</a></li>
            ";
        // line 252
        echo "        </ol>
        ";
        // line 263
        echo "        <div class=\"container-fluid\">
            <div class=\"content-wrapper\">
                <div class=\"row\" id=\"wrap\">
                    <div class=\"col-xl-12\">
                        <div id='calendar-wrap' style=\"page-break-before:always\">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.setTimeout(\"document.getElementById('err_suc').style.display='none';\", 7000);
    </script>
    <script>
        function imprimer(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale:'fr',
                timeZone: 'Afrique de l’Est',
                initialView: 'timeGridWeek',
                slotMinTime: '06:00',
                slotMaxTime: '19:00',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                },
                dayMaxEvents: true, // allow \"more\" link when too many events
                events:";
        // line 302
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 302, $this->source); })());
        echo ",
                height: 'auto',
                navLinks: true, // can click day/week names to navigate views
                selectable: true,
                selectMirror: true,
                nowIndicator: true,
                editable: true,
                eventResizableFromStart: true,
                droppable: true, // this allows things to be dropped onto the calendar
                select: function(arg) {
                    \$('#creer').modal('toggle');
                    \$('.start').val(arg.startStr);
                    \$('.end').val(arg.endStr);
                    calendar.unselect()
                },
                eventClick: function(arg) {
                    /* if (confirm('Vous êtes sure que vous voulez supprimer cet matière ?')) {
                         arg.event.remove()
                     }*/
                    \$('#deleteModalCalendar').modal('toggle');
                    \$('.calendrier_id').val(arg.event.id);
                    \$('.btn-supprimer').click(function () {
                        arg.event.remove();
                    });
                },
                drop: function(arg) {
                    // is the \"remove after drop\" checkbox checked?
                    if (document.getElementById('drop-remove').checked) {
                        // if so, remove the element from the \"Draggable Events\" list
                        arg.draggedEl.parentNode.removeChild(arg.draggedEl);
                    }
                }
            });
            calendar.on('eventChange',(e) => {
                let url = '/admin/agendas/api/'+e.event.id+'/edit';
                let donnees = {
                    \"title\": e.event.title,
                    \"description\": e.event.extendedProps.description,
                    \"start\": e.event.start,
                    \"end\": e.event.end,
                    \"allDay\": e.event.allDay,
                    \"backgroundColor\": e.event.backgroundColor,
                    \"borderColor\": e.event.borderColor,
                    \"textColor\": e.event.textColor
                }
                console.log(donnees);
                let xhr = new XMLHttpRequest();
                xhr.open(\"PUT\",url);
                xhr.send(JSON.stringify(donnees));

            });
            calendar.render();

        });

    </script>
    <!-- Jquery JS-->
    <script src=\"";
        // line 359
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
        // line 373
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 394
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/agendas/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  600 => 394,  569 => 373,  552 => 359,  492 => 302,  451 => 263,  448 => 252,  444 => 250,  440 => 249,  435 => 247,  408 => 223,  351 => 169,  347 => 168,  325 => 148,  314 => 146,  310 => 145,  301 => 138,  290 => 136,  286 => 135,  277 => 128,  266 => 126,  262 => 125,  242 => 107,  231 => 105,  227 => 104,  218 => 97,  207 => 95,  203 => 94,  178 => 72,  165 => 61,  132 => 29,  108 => 6,  98 => 5,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard/base.html.twig' %}
{% block title %} Admin | Agenda{% endblock %}
{% block css %}
{% endblock %}
{% block main %}
<style>
    .tb{
        color: royalblue;
    }
    .float-right{
        position: absolute;
        right: 2%;
        color: #33394c;
    }
    .float-right1{
        position: absolute;
        right: 2%;
        color: #2e3857;
    }
    #calendar{
        margin:0 2%;
        padding:0 2%;
    }
    .event-header{
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
<!--------code------>
    {# empty Twig template #}
    <!-- Modal creation-->
    <div id=\"creer\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog modal-xl\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header bg-info\">
                    <h4 class=\"modal-title event-header\"><i class=\"fas fa-calendar-plus\"></i> Evénement</h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form action=\"{{ path('new_event') }}\" method=\"post\" class=\"validate\">
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
                                        <div class=\"row\">

                                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                                <label class=\"control-label\" for=\"_filiere\">Mention<span class=\"required\">*</span>
                                                </label>
                                                <select id=\"_filiere\"  name=\"_filiere\" class=\"form-control\">
                                                    <option class=\"text-center\" value=\"\">--- Choisir une filière ---</option>
                                                    {% for filiere in filieres %}
                                                        <option value=\"{{ filiere.id }}\">{{ filiere.name }}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                                <label class=\"control-label\" for=\"_niveau\">Niveau<span class=\"required\">*</span>
                                                </label>
                                                <select id=\"_niveau\"  name=\"_niveau\" class=\"form-control\">
                                                    <option class=\"text-center\" value=\"\">--- Choisir niveau ---</option>
                                                    {% for cycle in niveau %}
                                                        <option  value=\"{{ cycle.id }}\"> {{ cycle.code }}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                                <label class=\"control-label\" for=\"_parcours\">Parcours<span class=\"required\">*</span>
                                                </label>
                                                <select id=\"_parcours\"  name=\"_parcours\" class=\"form-control\">
                                                    <option class=\"text-center\" value=\"\">--- Choisir parcours ---</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                                <label class=\"control-label\" for=\"_semestre\">Semestre<span class=\"required\">*</span>
                                                </label>
                                                <select id=\"_semestre\"  name=\"_semestre\" class=\"form-control\">
                                                    <option class=\"text-center\" value=\"\">--- Choisir semestre ---</option>
                                                    {% for item in semestres %}
                                                        <option  value=\"{{ item.id }}\"> {{ item.name }}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                                <label class=\"control-label\" for=\"_ec\">Ec<span class=\"required\">*</span>
                                                </label>
                                                <select name=\"_ec\" id=\"_ec\" class=\"form-control\">
                                                    <option value=\"\" class=\"text-center\">--- Choisir Ec --- </option>
                                                    {% for item in matieres %}
                                                        <option value=\"{{ item.id }}\">{{ item.name }}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"col-md-4 col-sm-4 col-xs-4\">
                                                <label class=\"control-label\" for=\"_prof\">Prof<span class=\"required\">*</span>
                                                </label>
                                                <select name=\"_prof\" id=\"_prof\" class=\"form-control\">
                                                    <option value=\"\" class=\"text-center\">--- Choisir Prof --- </option>
                                                    {% for item in profs %}
                                                        <option value=\"{{ item.id }}\">{{ item.email }}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">

                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                <label class=\"control-label\" for=\"titre\">Titre<span class=\"required\">*</span>
                                                </label>
                                                <input type=\"text\" id=\"titre\" name=\"titre\"  class=\"form-control\" required>
                                            </div>



                                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                                <label class=\"control-label\" for=\"description\">Description<span class=\"required\">*</span>
                                                </label>
                                                <div class=\"description\" name=\"description\">
                                                    {{ form_widget(form.description) }}
                                                    {{ form_errors(form.description) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">

                                            <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                                <label class=\"control-label\" for=\"first-name\">BackgroundColor<span class=\"required\">*</span>
                                                </label>
                                                <input type=\"color\" id=\"backgroundColor\" name=\"backgroundColor\" value=\"#436ae0\" class=\"form-control\">
                                            </div>
                                            <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                                <label class=\"control-label\" for=\"first-name\">BorderColor<span class=\"required\">*</span>
                                                </label>
                                                <input type=\"color\" id=\"borderColor\" name=\"borderColor\" value=\"#b043ea\" class=\"form-control\">
                                            </div>
                                            <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                                <label class=\"control-label\" for=\"textColor\">TextColor<span class=\"required\">*</span>
                                                </label>
                                                <input type=\"color\" id=\"txtColor\" name=\"textColor\" value=\"#e3eaeb\" class=\"form-control\">
                                            </div>

                                            <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                                <label class=\"control-label text-center\" >Publier <span class=\"required\"> *</span>
                                                </label>
                                                <div style=\"margin-left: 40%\">
                                                    <input type=\"checkbox\" id=\"_publie\" name=\"_publie\"  class=\"check\">
                                                    <label for=\"_publie\"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"hidden\" name=\"start\" class=\"start\">
                                    <input type=\"hidden\" name=\"end\" class=\"end\">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer justify-content-between\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--endmodal-->
    <!-- Modal Suppression-->
    <div id=\"deleteModalCalendar\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form  action=\"{{ path('calendrier_delete') }}\" method=\"get\">
                    <div class=\"modal-header bg-danger\">
                        <h4 class=\"modal-title event-header\"><i class=\"fas fa-calendar-times\"></i></h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"id\" class=\"calendrier_id\">
                        Voulez-vous supprimer cet événement ?
                    </div>
                    <div class=\"modal-footer justify-content-between\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                        <button type=\"submit\" class=\"btn btn-danger btn-supprimer\">Supprimer</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Agenda</h1>
        <ol class=\"breadcrumb mb-4\">
            <li><a href=\"{{ path('admin_dashboard') }}\" class=\"tb\">Tableau de bord /</a></li>
            <li class=\"breadcrumb-item active\">Agenda / </li>
            <li><a href=\"{{ path('admin_agendas_list') }}\" class=\"text-info\"> Liste</a></li>
            <li class=\"float-right\"><a onClick=\"imprimer('calendar-wrap')\" href=\"{{ path('imprimer_pdf') }}\" class=\"btn btn-primary\"><span class=\"fas fa-print\"></span>Imprimer</a></li>
            {# <li class=\"float-right1\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#ajout\" class=\"btn btn-success\"><span class=\"feather-edit\"></span>Créer</a></li> #}
        </ol>
        {# {% for flash_message in app.flashes('success') %}
            <div class=\"alert alert-success\" id=\"err_suc\">
                <span class=\"fas fa-bell \"></span> {{ flash_message }} !
            </div>
         {% endfor%}
         {% for flash_message in app.flashes('error') %}
            <div class=\"alert alert-danger\" id=\"err_suc\">
                <span class=\"fas fa-bell \"></span> {{ flash_message }} !
            </div>
        {% endfor%} #}
        <div class=\"container-fluid\">
            <div class=\"content-wrapper\">
                <div class=\"row\" id=\"wrap\">
                    <div class=\"col-xl-12\">
                        <div id='calendar-wrap' style=\"page-break-before:always\">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.setTimeout(\"document.getElementById('err_suc').style.display='none';\", 7000);
    </script>
    <script>
        function imprimer(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale:'fr',
                timeZone: 'Afrique de l’Est',
                initialView: 'timeGridWeek',
                slotMinTime: '06:00',
                slotMaxTime: '19:00',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                },
                dayMaxEvents: true, // allow \"more\" link when too many events
                events:{{ data|raw }},
                height: 'auto',
                navLinks: true, // can click day/week names to navigate views
                selectable: true,
                selectMirror: true,
                nowIndicator: true,
                editable: true,
                eventResizableFromStart: true,
                droppable: true, // this allows things to be dropped onto the calendar
                select: function(arg) {
                    \$('#creer').modal('toggle');
                    \$('.start').val(arg.startStr);
                    \$('.end').val(arg.endStr);
                    calendar.unselect()
                },
                eventClick: function(arg) {
                    /* if (confirm('Vous êtes sure que vous voulez supprimer cet matière ?')) {
                         arg.event.remove()
                     }*/
                    \$('#deleteModalCalendar').modal('toggle');
                    \$('.calendrier_id').val(arg.event.id);
                    \$('.btn-supprimer').click(function () {
                        arg.event.remove();
                    });
                },
                drop: function(arg) {
                    // is the \"remove after drop\" checkbox checked?
                    if (document.getElementById('drop-remove').checked) {
                        // if so, remove the element from the \"Draggable Events\" list
                        arg.draggedEl.parentNode.removeChild(arg.draggedEl);
                    }
                }
            });
            calendar.on('eventChange',(e) => {
                let url = '/admin/agendas/api/'+e.event.id+'/edit';
                let donnees = {
                    \"title\": e.event.title,
                    \"description\": e.event.extendedProps.description,
                    \"start\": e.event.start,
                    \"end\": e.event.end,
                    \"allDay\": e.event.allDay,
                    \"backgroundColor\": e.event.backgroundColor,
                    \"borderColor\": e.event.borderColor,
                    \"textColor\": e.event.textColor
                }
                console.log(donnees);
                let xhr = new XMLHttpRequest();
                xhr.open(\"PUT\",url);
                xhr.send(JSON.stringify(donnees));

            });
            calendar.render();

        });

    </script>
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
{% endblock %}
{% block javascript %}
{% endblock %}

", "admin/agendas/index.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\agendas\\index.html.twig");
    }
}
