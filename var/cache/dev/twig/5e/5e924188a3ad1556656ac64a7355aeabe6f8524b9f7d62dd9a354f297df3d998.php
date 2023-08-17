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

/* etudiant/espace/cours/liste_ue/list-ue.html.twig */
class __TwigTemplate_181005b68d5112bbce8524b9f5d358d34581648d1138997892bab4558ffbd008 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
            'contenu' => [$this, 'block_contenu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "etudiant/espace/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/cours/liste_ue/list-ue.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/cours/liste_ue/list-ue.html.twig"));

        $this->parent = $this->loadTemplate("etudiant/espace/base.html.twig", "etudiant/espace/cours/liste_ue/list-ue.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "mes Mentions";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <style>

        .cont{
        }

        .float-right
        {
            margin-left:5px;
        }

        .card-header
        {
            color: white;
        }
        .bt{
            font-size: 18px;
            font-weight: bold;
        }

        .btn-default
        {
            background-color: white;
        }
        .col {
            margin-left: 50px;
        }
        .content-header
        {
            margin-top: 20px;
        }
        .title{
            font-weight: bold;
            font-family: 'comic sans MS';
        }
        .bold{
            font-weight: bold;
        }
        .total{
            float: right;
            font-weight: bold;
            margin-right: 30px;
            margin-top: 10px;
        }
        .mrg{
            margin-left: 30%;
        }
        .mr-3{
            display: inline-block;
            font-weight: bold;
        }
   </style>


    <!-- Content Header (Page header) -->
    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h2 class=\"m-0 text-dark text-black title\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 66, $this->source); })()), "parcours", [], "any", false, false, false, 66), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 66, $this->source); })()), "mention", [], "any", false, false, false, 66), "cycle", [], "any", false, false, false, 66), "html", null, true);
        echo "</h2>
                </div><!-- /.col -->
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                        <li class=\"breadcrumb-item \"><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiant");
        echo "\" class=\"text-info\">Tableau de Bord</a></li>
                        <li class=\"breadcrumb-item \"><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_mentions");
        echo "\" class=\"text-info\">mes mentions</a></li>
                        <li class=\"breadcrumb-item active\">unités</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"card mb-4\">

                        <div class=\"card-header bg-info\">
                            <div class=\"row\">
                                <nav>

                                    <ul class=\"nav nav-pills\">
                                        <li class=\"nav-item col\">
                                            <a class=\"nav-link bt btn-default ";
        // line 90
        echo ((array_key_exists("s1", $context)) ? ("active") : (""));
        echo "\" aria-current=\"page\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("s1", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90)]), "html", null, true);
        echo "\">Semestre 1</a>
                                        </li>
                                        <li class=\"nav-item col\">
                                            <a class=\"nav-link bt btn-default ";
        // line 93
        echo ((array_key_exists("s2", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("s2", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["inscrire"]) || array_key_exists("inscrire", $context) ? $context["inscrire"] : (function () { throw new RuntimeError('Variable "inscrire" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93)]), "html", null, true);
        echo "\">Semestre 2</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>


                        ";
        // line 101
        $this->displayBlock('contenu', $context, $blocks);
        // line 201
        echo "
                    </div>
                </div>
            </div>
        </div>

    <link href=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("hoasan/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("hoasan/css/osahan.css\" rel=\"stylesheet"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 102
        echo "                        <div class=\"tab-content\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12 mrg\">
                                                <div class=\"mr-3\">
                                                    <i class=\"icofont-ui-press bold vert text-success food-item\"> livre déja acheté</i>
                                                </div>
                                                <div class=\"mr-3\">
                                                    <i class=\"icofont-ui-press bold text-danger food-item\"> vous n'avez pas encore acheté ce livre</i>
                                                </div>
                                            </div>

                                        </div>
                                        <br>
                                        <div class=\"row\">
                                            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["s1"]) || array_key_exists("s1", $context) ? $context["s1"] : (function () { throw new RuntimeError('Variable "s1" does not exist.', 117, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["UE"]) {
            // line 118
            echo "                                            ";
            $context["nbr"] = twig_get_attribute($this->env, $this->source, $context["UE"], "no", [], "any", false, false, false, 118);
            // line 119
            echo "                                            <div class=\"cont  col-md-6\">
                                                <h5 style=\"margin-left:15px\" class=\"mb-4 mt-3 col-md-12\"><span class=\"badge badge-dark\">";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UE"], "name", [], "any", false, false, false, 120), "html", null, true);
            echo "
                                                        </span><small class=\"h6 text-info\" style=\"font-weight:bold;\">
                                                        ";
            // line 122
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new RuntimeError('Variable "nbr" does not exist.', 122, $this->source); })())), 0))) {
                echo " ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new RuntimeError('Variable "nbr" does not exist.', 122, $this->source); })())), "html", null, true);
                echo " matières
                                                        ";
            } else {
                // line 124
                echo "                                                            vide
                                                        ";
            }
            // line 125
            echo "</small></h5>

                                                <div class=\"col-md-12\">
                                                    <div class=\"bg-white rounded border shadow-sm mb-4\">

                                                        ";
            // line 130
            $context["somme"] = 0;
            // line 131
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["UE"], "no", [], "any", false, false, false, 131));
            foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
                // line 132
                echo "                                                            ";
                $context["somme"] = ((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 132, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["ec"], "coeff", [], "any", false, false, false, 132));
                // line 133
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "
                                                        ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["UE"], "no", [], "any", false, false, false, 135));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
                // line 136
                echo "                                                            ";
                $context["cour"] = [];
                // line 137
                echo "                                                            ";
                $context["i"] = 0;
                // line 138
                echo "
                                                            ";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ec"], "cours", [], "any", false, false, false, 139));
                foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                    // line 140
                    echo "                                                                ";
                    $context["cour"] = twig_array_merge((isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 140, $this->source); })()), [(isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 140, $this->source); })()) => $context["cours"]]);
                    // line 141
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo "
                                                            <div class=\"gold-members p-3 border-bottom\">
                                                                ";
                // line 144
                if ((isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 144, $this->source); })())) {
                    // line 145
                    echo "                                                                    ";
                    $context["data"] = twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 145, $this->source); })()), 0, [], "array", false, false, false, 145);
                    // line 146
                    echo "                                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 146, $this->source); })()), "id", [], "any", false, false, false, 146)]), "html", null, true);
                    echo "\" class=\"float-right badge badge-warning\">suivre cours</a>
                                                                ";
                } else {
                    // line 148
                    echo "                                                                    <a href=\"\" disabled class=\"float-right badge badge-warning\">suivre cours</a>
                                                                ";
                }
                // line 150
                echo "                                                                <h6 class=\"float-right badge badge-info\">Crédit: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ec"], "coeff", [], "any", false, false, false, 150), "html", null, true);
                echo "</h6>
                                                                <div class=\"media\">
                                                                    <div class=\"mr-3\"><i
                                                                            class=\"icofont-ui-press
                                                                            ";
                // line 154
                $context["cpt"] = 0;
                // line 155
                echo "                                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ec"], "statusEcs", [], "any", false, false, false, 155));
                foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
                    // line 156
                    echo "                                                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["Status"]) || array_key_exists("Status", $context) ? $context["Status"] : (function () { throw new RuntimeError('Variable "Status" does not exist.', 156, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
                        // line 157
                        echo "                                                                                             ";
                        if (((0 === twig_compare($context["stat"], $context["st"])) && twig_get_attribute($this->env, $this->source, $context["stat"], "status", [], "any", false, false, false, 157))) {
                            // line 158
                            echo "                                                                                             ";
                            $context["cpt"] = 1;
                            // line 159
                            echo "                                                                                                         text-success
                                                                                             ";
                        }
                        // line 161
                        echo "                                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 162
                    echo "                                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "                                                                            ";
                if ((0 === twig_compare((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 163, $this->source); })()), 0))) {
                    // line 164
                    echo "                                                                                text-danger
                                                                            ";
                }
                // line 166
                echo "                                                                             food-item\"></i>
                                                                    </div>
                                                                    <div class=\"media-body\">
                                                                        <h6 class=\"mb-1\">";
                // line 169
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ec"], "name", [], "any", false, false, false, 169), "html", null, true);
                echo "</h6>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 176
                echo "                                                            <div class=\"gold-members p-3 border-bottom\">
                                                                <div class=\"media\">
                                                                    <div class=\"mr-3\"><i class=\"icofont-ui-press text-secondary food-item\"></i></div>
                                                                    <div class=\"media-body\">
                                                                        <h6 class=\"mb-1\"><p>Unité vide pour l'instant</p></h6>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "                                                        ";
            if ((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 186, $this->source); })())) {
                // line 187
                echo "                                                            <div class=\"total badge badge-success\">crédit total: ";
                echo twig_escape_filter($this->env, (isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 187, $this->source); })()), "html", null, true);
                echo "</div>
                                                        ";
            }
            // line 189
            echo "                                                    </div>
                                                </div>
                                            </div>
                                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 193
            echo "                                            <p>il n'y as pas d'UE disponible en Semestre 1 pour l\"instant</p>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['UE'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                                        </div>
                                    </div>

                        </div>

                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/espace/cours/liste_ue/list-ue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 195,  455 => 193,  447 => 189,  441 => 187,  438 => 186,  423 => 176,  411 => 169,  406 => 166,  402 => 164,  399 => 163,  393 => 162,  387 => 161,  383 => 159,  380 => 158,  377 => 157,  372 => 156,  367 => 155,  365 => 154,  357 => 150,  353 => 148,  347 => 146,  344 => 145,  342 => 144,  338 => 142,  332 => 141,  329 => 140,  325 => 139,  322 => 138,  319 => 137,  316 => 136,  311 => 135,  308 => 134,  302 => 133,  299 => 132,  294 => 131,  292 => 130,  285 => 125,  281 => 124,  274 => 122,  269 => 120,  266 => 119,  263 => 118,  258 => 117,  241 => 102,  231 => 101,  219 => 208,  215 => 207,  207 => 201,  205 => 101,  192 => 93,  184 => 90,  162 => 71,  158 => 70,  149 => 66,  89 => 8,  79 => 7,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'etudiant/espace/base.html.twig' %}

{% block title %}mes Mentions{% endblock %}



{% block main %}
    <style>

        .cont{
        }

        .float-right
        {
            margin-left:5px;
        }

        .card-header
        {
            color: white;
        }
        .bt{
            font-size: 18px;
            font-weight: bold;
        }

        .btn-default
        {
            background-color: white;
        }
        .col {
            margin-left: 50px;
        }
        .content-header
        {
            margin-top: 20px;
        }
        .title{
            font-weight: bold;
            font-family: 'comic sans MS';
        }
        .bold{
            font-weight: bold;
        }
        .total{
            float: right;
            font-weight: bold;
            margin-right: 30px;
            margin-top: 10px;
        }
        .mrg{
            margin-left: 30%;
        }
        .mr-3{
            display: inline-block;
            font-weight: bold;
        }
   </style>


    <!-- Content Header (Page header) -->
    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h2 class=\"m-0 text-dark text-black title\">{{ inscrire.parcours }} {{ inscrire.mention.cycle }}</h2>
                </div><!-- /.col -->
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                        <li class=\"breadcrumb-item \"><a href=\"{{ path('etudiant') }}\" class=\"text-info\">Tableau de Bord</a></li>
                        <li class=\"breadcrumb-item \"><a href=\"{{ path('mes_mentions') }}\" class=\"text-info\">mes mentions</a></li>
                        <li class=\"breadcrumb-item active\">unités</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"card mb-4\">

                        <div class=\"card-header bg-info\">
                            <div class=\"row\">
                                <nav>

                                    <ul class=\"nav nav-pills\">
                                        <li class=\"nav-item col\">
                                            <a class=\"nav-link bt btn-default {{ s1 is defined ? 'active' : ''  }}\" aria-current=\"page\" href=\"{{ path('s1' ,{ 'id': inscrire.id }) }}\">Semestre 1</a>
                                        </li>
                                        <li class=\"nav-item col\">
                                            <a class=\"nav-link bt btn-default {{ s2 is defined ? 'active' : ''  }}\" href=\"{{ path('s2' ,{ 'id': inscrire.id }) }}\">Semestre 2</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>


                        {% block contenu %}
                        <div class=\"tab-content\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12 mrg\">
                                                <div class=\"mr-3\">
                                                    <i class=\"icofont-ui-press bold vert text-success food-item\"> livre déja acheté</i>
                                                </div>
                                                <div class=\"mr-3\">
                                                    <i class=\"icofont-ui-press bold text-danger food-item\"> vous n'avez pas encore acheté ce livre</i>
                                                </div>
                                            </div>

                                        </div>
                                        <br>
                                        <div class=\"row\">
                                            {% for UE in s1 %}
                                            {% set nbr = UE.no %}
                                            <div class=\"cont  col-md-6\">
                                                <h5 style=\"margin-left:15px\" class=\"mb-4 mt-3 col-md-12\"><span class=\"badge badge-dark\">{{ UE.name }}
                                                        </span><small class=\"h6 text-info\" style=\"font-weight:bold;\">
                                                        {% if nbr | length > 0 %} {{  nbr | length }} matières
                                                        {% else %}
                                                            vide
                                                        {% endif %}</small></h5>

                                                <div class=\"col-md-12\">
                                                    <div class=\"bg-white rounded border shadow-sm mb-4\">

                                                        {% set somme=0 %}
                                                        {% for ec in UE.no %}
                                                            {% set somme = somme + ec.coeff %}
                                                        {% endfor %}

                                                        {% for ec in UE.no %}
                                                            {% set cour = [] %}
                                                            {% set i = 0 %}

                                                            {% for cours in ec.cours %}
                                                                {% set cour = cour|merge({ (i) : cours })   %}
                                                            {% endfor %}

                                                            <div class=\"gold-members p-3 border-bottom\">
                                                                {% if cour %}
                                                                    {% set data = cour[0] %}
                                                                    <a href=\"{{ path('cours' ,{ 'id' :data.id }) }}\" class=\"float-right badge badge-warning\">suivre cours</a>
                                                                {% else %}
                                                                    <a href=\"\" disabled class=\"float-right badge badge-warning\">suivre cours</a>
                                                                {% endif %}
                                                                <h6 class=\"float-right badge badge-info\">Crédit: {{ ec.coeff }}</h6>
                                                                <div class=\"media\">
                                                                    <div class=\"mr-3\"><i
                                                                            class=\"icofont-ui-press
                                                                            {% set cpt=0 %}
                                                                            {% for stat in ec.statusEcs %}
                                                                                {% for st in Status %}
                                                                                             {% if stat == st and stat.status%}
                                                                                             {% set cpt=1 %}
                                                                                                         text-success
                                                                                             {% endif %}
                                                                                {% endfor %}
                                                                            {% endfor %}
                                                                            {% if cpt == 0 %}
                                                                                text-danger
                                                                            {% endif %}
                                                                             food-item\"></i>
                                                                    </div>
                                                                    <div class=\"media-body\">
                                                                        <h6 class=\"mb-1\">{{ ec.name }}</h6>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        {% else %}
                                                            <div class=\"gold-members p-3 border-bottom\">
                                                                <div class=\"media\">
                                                                    <div class=\"mr-3\"><i class=\"icofont-ui-press text-secondary food-item\"></i></div>
                                                                    <div class=\"media-body\">
                                                                        <h6 class=\"mb-1\"><p>Unité vide pour l'instant</p></h6>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        {% endfor %}
                                                        {% if somme %}
                                                            <div class=\"total badge badge-success\">crédit total: {{ somme }}</div>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            </div>
                                            {% else %}
                                            <p>il n'y as pas d'UE disponible en Semestre 1 pour l\"instant</p>
                                        {% endfor %}
                                        </div>
                                    </div>

                        </div>

                        {% endblock %}

                    </div>
                </div>
            </div>
        </div>

    <link href=\"{{ asset('hoasan/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('hoasan/css/osahan.css\" rel=\"stylesheet') }}\">
{% endblock %}

", "etudiant/espace/cours/liste_ue/list-ue.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\etudiant\\espace\\cours\\liste_ue\\list-ue.html.twig");
    }
}
