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

/* admin/dashboard/dashboard.html.twig */
class __TwigTemplate_66f583b096597cbf3f6bf0d0cb40b62ab14c73480c34dae1017d246f397a07f3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard/base.html.twig", "admin/dashboard/dashboard.html.twig", 1);
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

        echo " Tableau de Bord";
        
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
        .info-box {
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
            border-radius: 0.25rem;
            background: #ffffff;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 1rem;
            min-height: 80px;
            padding: .5rem;
            position: relative;
        }

        .info-box .progress {
            background-color: rgba(0, 0, 0, 0.125);
            height: 2px;
            margin: 5px 0;
        }

        .info-box .progress .progress-bar {
            background-color: #ffffff;
        }
        .info-box-text{
            color: #1d1c1c;
        }
        .info-box .info-box-icon {
            border-radius: 0.25rem;
            -ms-flex-align: center;
            align-items: center;
            display: -ms-flexbox;
            display: flex;
            font-size: 1.875rem;
            -ms-flex-pack: center;
            justify-content: center;
            text-align: center;
            width: 70px;
        }

        .info-box .info-box-icon > img {
            max-width: 100%;
        }

        .info-box .info-box-content {
            -ms-flex: 1;
            flex: 1;
            padding: 5px 10px;
        }

        .info-box .info-box-number {
            display: block;
            font-weight: 700;
        }

        .info-box .progress-description,
        .info-box .info-box-text {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .info-box .info-box .bg-primary,
        .info-box .info-box .bg-gradient-primary {
            color: #ffffff;
        }

        .info-box .info-box .bg-primary .progress-bar,
        .info-box .info-box .bg-gradient-primary .progress-bar {
            background-color: #ffffff;
        }

        .info-box .info-box .bg-secondary,
        .info-box .info-box .bg-gradient-secondary {
            color: #ffffff;
        }

        .info-box .info-box .bg-secondary .progress-bar,
        .info-box .info-box .bg-gradient-secondary .progress-bar {
            background-color: #ffffff;
        }

        .info-box .info-box .bg-success,
        .info-box .info-box .bg-gradient-success {
            color: #ffffff;
        }

        .info-box .info-box .bg-success .progress-bar,
        .info-box .info-box .bg-gradient-success .progress-bar {
            background-color: #ffffff;
        }

        .info-box .info-box .bg-info,
        .info-box .info-box .bg-gradient-info {
            color: #ffffff;
        }

        .info-box .info-box .bg-info .progress-bar,
        .info-box .info-box .bg-gradient-info .progress-bar {
            background-color: #ffffff;
        }

        .info-box .info-box .bg-warning,
        .info-box .info-box .bg-gradient-warning {
            color: #1F2D3D;
        }

        .info-box .info-box .bg-warning .progress-bar,
        .info-box .info-box .bg-gradient-warning .progress-bar {
            background-color: #1F2D3D;
        }

        .info-box .info-box .bg-danger,
        .info-box .info-box .bg-gradient-danger {
            color: #ffffff;
        }

        .info-box .info-box .bg-danger .progress-bar,
        .info-box .info-box .bg-gradient-danger .progress-bar {
            background-color: #ffffff;
        }

        .info-box .info-box .bg-light,
        .info-box .info-box .bg-gradient-light {
            color: #1F2D3D;
        }

        .info-box .info-box .bg-light .progress-bar,
        .info-box .info-box .bg-gradient-light .progress-bar {
            background-color: #1F2D3D;
        }

        .info-box .info-box .bg-dark,
        .info-box .info-box .bg-gradient-dark {
            color: #ffffff;
        }

        .info-box .info-box .bg-dark .progress-bar,
        .info-box .info-box .bg-gradient-dark .progress-bar {
            background-color: #ffffff;
        }

        .info-box .info-box-more {
            display: block;
        }

        .info-box .progress-description {
            margin: 0;
        }
        .info-box-icon-fa{
            color:#ffffff;
        }
        @media (min-width: 768px) {
            .col-xl-2 .info-box .progress-description,
            .col-lg-2 .info-box .progress-description,
            .col-md-2 .info-box .progress-description {
                display: none;
            }
            .col-xl-3 .info-box .progress-description,
            .col-lg-3 .info-box .progress-description,
            .col-md-3 .info-box .progress-description {
                display: none;
            }
        }

        @media (min-width: 992px) {
            .col-xl-2 .info-box .progress-description,
            .col-lg-2 .info-box .progress-description,
            .col-md-2 .info-box .progress-description {
                font-size: 0.75rem;
                display: block;
            }
            .col-xl-3 .info-box .progress-description,
            .col-lg-3 .info-box .progress-description,
            .col-md-3 .info-box .progress-description {
                font-size: 0.75rem;
                display: block;
            }
        }

        @media (min-width: 1200px) {
            .col-xl-2 .info-box .progress-description,
            .col-lg-2 .info-box .progress-description,
            .col-md-2 .info-box .progress-description {
                font-size: 1rem;
                display: block;
            }
            .col-xl-3 .info-box .progress-description,
            .col-lg-3 .info-box .progress-description,
            .col-md-3 .info-box .progress-description {
                font-size: 1rem;
                display: block;
            }
        }

        .card-header-mention{
            background-color: #3d4f52;
            color:white;
        }

        #overlay{
            background: url(";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/img-04.jpg"), "html", null, true);
        echo ") no-repeat center;
            background-size: cover;
            opacity: 0.9;
            background-color: #1623e5;
        }
        #overlay.overlay::before{
            background-color: #1623e5;
            opacity: 0.6;
        }

        .overlay{
            position: relative;
        }
        .overlay::before{
            position: absolute;
            content:\"\";
            width: 100%;
            height: 100%;
            -webkit-transition: all 0.4s ease;
            transition: all 0.4s ease;
            z-index: -1;
        }
        .card-header-niveau{
            background-color: #292b2b;
            color:#e2dede;
            opacity:0.9;
        }
        .img-bg-03 {
            background: url(";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/bg-05.jpg"), "html", null, true);
        echo ") no-repeat center;
            background-size: cover;
            opacity: 0.9;
            background-color:#292b2b ;
            height:auto;
        }
        .mb-txt{
            color:#b8afaf;
        }
        .mb-nbr-fi{
            color: #bde7e8;
            font-weight: bold;
            font-size: 18px;
        }
        .mb-nbr{
            color: #e32c1c;
            font-weight: bold;
            font-size: 16px;
        }
        .mb-nbr2{
            color: #f1ec09;
            font-weight: bold;
            font-size: 14px;
        }
        .bg-esp{
            width:60px;
            height:30px;
            border-radius:3px;
            color:#3d4f52;
            text-align:center;
        }
        .liste{
            float:right;
            color: #8b94a3;
        }
        div.scrol{
            padding: 5px;
            position: relative;
            width: 100%;
            height: 100px;
            overflow: auto;
        }
        div.scrol1{
            padding: 5px;
            position: relative;
            width: 100%;
            height: 220px;
            overflow: auto;
        }
    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Tableau de bord</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\">Tableau de bord</li>
        </ol>
        <div class=\"container-fluid\">
            <!-- Info boxes -->
            <div class=\"row\">
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <div class=\"info-box\">
                        <span class=\"info-box-icon bg-info elevation-1\"><i class=\"fas info-box-icon-fa fa-user-graduate\"></i></span>
                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">Etudiants</span>
                            <!----Somme des etudiant--->
                            ";
        // line 298
        $context["somme"] = 0;
        // line 299
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 299, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["inscrire"]) {
            // line 300
            echo "                                ";
            $context["somme"] = ((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 300, $this->source); })()) + 1);
            // line 301
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        echo "                            <span class=\"info-box-number\">";
        echo twig_escape_filter($this->env, (isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 302, $this->source); })()), "html", null, true);
        echo "</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <div class=\"info-box mb-3\">
                        <span class=\"info-box-icon bg-danger elevation-1\"><i class=\"fas info-box-icon-fa fa-users\"></i></span>

                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">Professeurs</span>
                            ";
        // line 315
        $context["nb_prof"] = 0;
        // line 316
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profs"]) || array_key_exists("profs", $context) ? $context["profs"] : (function () { throw new RuntimeError('Variable "profs" does not exist.', 316, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prof"]) {
            // line 317
            echo "                                ";
            $context["nb_prof"] = ((isset($context["nb_prof"]) || array_key_exists("nb_prof", $context) ? $context["nb_prof"] : (function () { throw new RuntimeError('Variable "nb_prof" does not exist.', 317, $this->source); })()) + 1);
            // line 318
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prof'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 319
        echo "                            <span class=\"info-box-number\">";
        echo twig_escape_filter($this->env, (isset($context["nb_prof"]) || array_key_exists("nb_prof", $context) ? $context["nb_prof"] : (function () { throw new RuntimeError('Variable "nb_prof" does not exist.', 319, $this->source); })()), "html", null, true);
        echo "</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class=\"clearfix hidden-md-up\"></div>

                <div class=\"col-12 col-sm-6 col-md-3\">
                    <div class=\"info-box mb-3\">
                        <span class=\"info-box-icon bg-success elevation-1\"><i class=\"fas info-box-icon-fa  fa-user-friends\"></i></span>
                        ";
        // line 333
        $context["nb_admin"] = 0;
        // line 334
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 334, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 335
            echo "                            ";
            $context["nb_admin"] = ((isset($context["nb_admin"]) || array_key_exists("nb_admin", $context) ? $context["nb_admin"] : (function () { throw new RuntimeError('Variable "nb_admin" does not exist.', 335, $this->source); })()) + 1);
            // line 336
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">Employés</span>
                            <span class=\"info-box-number\">";
        // line 339
        echo twig_escape_filter($this->env, ((isset($context["nb_prof"]) || array_key_exists("nb_prof", $context) ? $context["nb_prof"] : (function () { throw new RuntimeError('Variable "nb_prof" does not exist.', 339, $this->source); })()) + (isset($context["nb_admin"]) || array_key_exists("nb_admin", $context) ? $context["nb_admin"] : (function () { throw new RuntimeError('Variable "nb_admin" does not exist.', 339, $this->source); })())), "html", null, true);
        echo "</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <div class=\"info-box mb-3\">
                        <span class=\"info-box-icon bg-warning elevation-1\"><i class=\"info-box-icon-fa fas fa-users-cog\"></i></span>

                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">Admin</span>
                            ";
        // line 356
        echo "                            <span class=\"info-box-number\">";
        echo twig_escape_filter($this->env, (isset($context["nb_admin"]) || array_key_exists("nb_admin", $context) ? $context["nb_admin"] : (function () { throw new RuntimeError('Variable "nb_admin" does not exist.', 356, $this->source); })()), "html", null, true);
        echo "</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
        <div class=\"row\">
            ";
        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mentions"]) || array_key_exists("mentions", $context) ? $context["mentions"] : (function () { throw new RuntimeError('Variable "mentions" does not exist.', 365, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["mention"]) {
            // line 366
            echo "            <div class=\"col-xl-12\">
                <div class=\"card mb-4\">
                    <div class=\"card-header card-header-mention\">
                        <!-----------Nombre des etudiants par mention ---->
                        ";
            // line 370
            $context["i"] = 0;
            // line 371
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 371, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["inscrire"]) {
                // line 372
                echo "                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 372), "code", [], "any", false, false, false, 372), "name", [], "any", false, false, false, 372), twig_get_attribute($this->env, $this->source, $context["mention"], "name", [], "any", false, false, false, 372)))) {
                    // line 373
                    echo "                                ";
                    $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 373, $this->source); })()) + 1);
                    // line 374
                    echo "                            ";
                }
                // line 375
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 376
            echo "                        <i class=\"fas fa-graduation-cap mr-1\"></i>
                        ";
            // line 377
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mention"], "name", [], "any", false, false, false, 377), "html", null, true);
            echo " <span class=\"mb-nbr-fi\">[";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 377, $this->source); })()), "html", null, true);
            echo "]</span>
                    </div>
                    <div class=\"card-body scrol1\">
                        <div class=\"row\">
                            ";
            // line 381
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["niveaux"]) || array_key_exists("niveaux", $context) ? $context["niveaux"] : (function () { throw new RuntimeError('Variable "niveaux" does not exist.', 381, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["niveau"]) {
                // line 382
                echo "                                <div class=\"col-xl-4\">
                                    <div class=\"card mb-4\">
                                        <div class=\"card-header card-header-niveau\">
                                            <!-----------Nombre des etudiants par niveau ---->
                                            ";
                // line 386
                $context["j"] = 0;
                // line 387
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 387, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["inscrire"]) {
                    // line 388
                    echo "                                                ";
                    if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 388), "cycle", [], "any", false, false, false, 388), "code", [], "any", false, false, false, 388), twig_get_attribute($this->env, $this->source, $context["niveau"], "code", [], "any", false, false, false, 388))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 388), "code", [], "any", false, false, false, 388), "name", [], "any", false, false, false, 388), twig_get_attribute($this->env, $this->source, $context["mention"], "name", [], "any", false, false, false, 388))))) {
                        // line 389
                        echo "                                                    ";
                        $context["j"] = ((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 389, $this->source); })()) + 1);
                        // line 390
                        echo "                                                ";
                    }
                    // line 391
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 392
                echo "                                            <i class=\"fas fa-project-diagram mr-1\"></i>
                                            ";
                // line 393
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["niveau"], "code", [], "any", false, false, false, 393), "html", null, true);
                echo " <span class=\"mb-nbr\">[";
                echo twig_escape_filter($this->env, (isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 393, $this->source); })()), "html", null, true);
                echo "]</span>
                                        </div>
                                        <div class=\"card-body img-bg-03 scrol\">
                                            <!-----------Nombre des etudiants par parcours ---->
                                            ";
                // line 397
                $context["temp"] = 0;
                // line 398
                echo "                                            ";
                $context["nbr"] = 0;
                // line 399
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["parcours"]) || array_key_exists("parcours", $context) ? $context["parcours"] : (function () { throw new RuntimeError('Variable "parcours" does not exist.', 399, $this->source); })()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["parcour"]) {
                    // line 400
                    echo "                                                ";
                    $context["nbr"] = ((isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new RuntimeError('Variable "nbr" does not exist.', 400, $this->source); })()) + 1);
                    // line 401
                    echo "                                                ";
                    if ((((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["parcour"], "code", [], "any", false, false, false, 401), null)) && (0 === twig_compare($context["mention"], twig_get_attribute($this->env, $this->source, $context["parcour"], "code", [], "any", false, false, false, 401)))) && (0 === twig_compare($context["niveau"], twig_get_attribute($this->env, $this->source, $context["parcour"], "cycle", [], "any", false, false, false, 401))))) {
                        // line 402
                        echo "                                                    ";
                        $context["somme"] = 0;
                        // line 403
                        echo "                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 403, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["inscrire"]) {
                            // line 404
                            echo "                                                        ";
                            if ((((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["inscrire"], "parcours", [], "any", false, false, false, 404), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 404), "parcours", [], "any", false, false, false, 404), $context["parcour"]))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 404), "cycle", [], "any", false, false, false, 404), $context["niveau"])))) {
                                // line 405
                                echo "                                                            ";
                                $context["somme"] = ((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 405, $this->source); })()) + 1);
                                // line 406
                                echo "                                                        ";
                            }
                            // line 407
                            echo "                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrire'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 408
                        echo "                                                    ";
                        if ((1 === twig_compare((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 408, $this->source); })()), 0))) {
                            // line 409
                            echo "                                                        <p class=\"mb-txt\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parcour"], "name", [], "any", false, false, false, 409), "html", null, true);
                            echo " <span class=\"mb-nbr2\">[";
                            echo twig_escape_filter($this->env, (isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 409, $this->source); })()), "html", null, true);
                            echo "]</span> <a class=\"liste\" href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_etudiant", ["id" => twig_get_attribute($this->env, $this->source, $context["parcour"], "id", [], "any", false, false, false, 409), "cycle" => twig_get_attribute($this->env, $this->source, $context["niveau"], "code", [], "any", false, false, false, 409)]), "html", null, true);
                            echo "\"><i class=\"fw fa fa-list-alt\"></i> Liste</a></p>
                                                    ";
                        } else {
                            // line 411
                            echo "                                                        <p class=\"mb-txt\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parcour"], "name", [], "any", false, false, false, 411), "html", null, true);
                            echo " <span class=\"mb-nbr2\">[";
                            echo twig_escape_filter($this->env, (isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 411, $this->source); })()), "html", null, true);
                            echo "]</span>
                                                    ";
                        }
                        // line 413
                        echo "                                                ";
                    } else {
                        // line 414
                        echo "                                                    ";
                        $context["temp"] = ((isset($context["temp"]) || array_key_exists("temp", $context) ? $context["temp"] : (function () { throw new RuntimeError('Variable "temp" does not exist.', 414, $this->source); })()) + 1);
                        // line 415
                        echo "                                                ";
                    }
                    // line 416
                    echo "                                            ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 417
                    echo "                                                <div class=\"col-xl-12\">no records found</div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parcour'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 419
                echo "                                            ";
                if ((0 === twig_compare((isset($context["temp"]) || array_key_exists("temp", $context) ? $context["temp"] : (function () { throw new RuntimeError('Variable "temp" does not exist.', 419, $this->source); })()), (isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new RuntimeError('Variable "nbr" does not exist.', 419, $this->source); })())))) {
                    // line 420
                    echo "                                                <p class=\"mb-txt\" >Aucun Parcours</p>
                                                ";
                    // line 421
                    $context["somme"] = 0;
                    // line 422
                    echo "                                                ";
                    $context["niv"] = null;
                    // line 423
                    echo "                                                ";
                    $context["niv2"] = null;
                    // line 424
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 424, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["inscrire"]) {
                        // line 425
                        echo "                                                    ";
                        if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["inscrire"], "parcours", [], "any", false, false, false, 425), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 425), "code", [], "any", false, false, false, 425), "name", [], "any", false, false, false, 425), twig_get_attribute($this->env, $this->source, $context["mention"], "name", [], "any", false, false, false, 425)))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 425), "cycle", [], "any", false, false, false, 425), "code", [], "any", false, false, false, 425), twig_get_attribute($this->env, $this->source, $context["niveau"], "code", [], "any", false, false, false, 425))))) {
                            // line 426
                            echo "                                                        ";
                            $context["somme"] = ((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 426, $this->source); })()) + 1);
                            // line 427
                            echo "                                                        ";
                            $context["niv"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 427), "cycle", [], "any", false, false, false, 427);
                            // line 428
                            echo "                                                        ";
                            $context["niv2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 428), "code", [], "any", false, false, false, 428);
                            // line 429
                            echo "                                                    ";
                        }
                        // line 430
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrire'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 431
                    echo "                                                ";
                    if (((0 === twig_compare($context["niveau"], (isset($context["niv"]) || array_key_exists("niv", $context) ? $context["niv"] : (function () { throw new RuntimeError('Variable "niv" does not exist.', 431, $this->source); })()))) && (0 === twig_compare($context["mention"], (isset($context["niv2"]) || array_key_exists("niv2", $context) ? $context["niv2"] : (function () { throw new RuntimeError('Variable "niv2" does not exist.', 431, $this->source); })()))))) {
                        // line 432
                        echo "                                                    <p class=\"mb-txt\">Etudiants <span class=\"mb-nbr2\">[";
                        echo twig_escape_filter($this->env, (isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 432, $this->source); })()), "html", null, true);
                        echo "]</span> <a class=\"liste\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_etudiant", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["niv"]) || array_key_exists("niv", $context) ? $context["niv"] : (function () { throw new RuntimeError('Variable "niv" does not exist.', 432, $this->source); })()), "id", [], "any", false, false, false, 432), "name" => twig_get_attribute($this->env, $this->source, $context["mention"], "name", [], "any", false, false, false, 432)]), "html", null, true);
                        echo "\"><i class=\"fw fa fa-list-alt\"></i> Liste</a></p>
                                                ";
                    } else {
                        // line 434
                        echo "                                                    <p class=\"mb-txt\">Etudiants <span class=\"mb-nbr2\">[0]</span></p>
                                                ";
                    }
                    // line 436
                    echo "                                            ";
                }
                // line 437
                echo "                                        </div>
                                    </div>
                                </div>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 441
                echo "                                <div class=\"col-xl-12\">Aucune mention</div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['niveau'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 443
            echo "                        </div>
                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 448
            echo "                    <div class=\"col-xl-12\">Aucune mention</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 450
        echo "        </div>
        <div class=\"card mb-4\">
            <div class=\"card-header card-header-mention\">
                <i class=\"fas fa-table mr-1\"></i>
                Liste des étudiants
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr class=\"text-uppercase\">
                            <th>Profil</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Tél</th>
                            <th>Niveau</th>
                            <th>Mention</th>
                            <th>Parcours</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!----><!---->
                        ";
        // line 473
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 473, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscrire"]) {
            // line 474
            echo "                        <tr>
                            <td><img class=\"img-profile rounded-circle\" src=\"/images/avatars/";
            // line 475
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "etudiant", [], "any", false, false, false, 475), "avatar", [], "any", false, false, false, 475), "html", null, true);
            echo "\"></td>
                            <td>";
            // line 476
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "etudiant", [], "any", false, false, false, 476), "name", [], "any", false, false, false, 476), "html", null, true);
            echo "</td>
                            <td>";
            // line 477
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "etudiant", [], "any", false, false, false, 477), "email", [], "any", false, false, false, 477), "html", null, true);
            echo "</td>
                            <td>";
            // line 478
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "etudiant", [], "any", false, false, false, 478), "tel", [], "any", false, false, false, 478), "html", null, true);
            echo "</td>
                            <td>";
            // line 479
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 479), "cycle", [], "any", false, false, false, 479), "code", [], "any", false, false, false, 479), "html", null, true);
            echo "</td>
                            <td>";
            // line 480
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 480), "code", [], "any", false, false, false, 480), "name", [], "any", false, false, false, 480), "html", null, true);
            echo "</td>
                            ";
            // line 481
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["inscrire"], "parcours", [], "any", false, false, false, 481), null))) {
                // line 482
                echo "                                  <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "parcours", [], "any", false, false, false, 482), "name", [], "any", false, false, false, 482), "html", null, true);
                echo "</td>
                            ";
            } else {
                // line 484
                echo "                                   <td>Aucun Parcours</td>
                            ";
            }
            // line 486
            echo "                            <td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_show", ["id" => twig_get_attribute($this->env, $this->source, $context["inscrire"], "id", [], "any", false, false, false, 486)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fw fa-eye\"></i> Voir</a></td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 489
            echo "                            <tr>
                                <td colspan=\"3\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 493
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 500
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
        return "admin/dashboard/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  888 => 500,  872 => 493,  863 => 489,  854 => 486,  850 => 484,  844 => 482,  842 => 481,  838 => 480,  834 => 479,  830 => 478,  826 => 477,  822 => 476,  818 => 475,  815 => 474,  810 => 473,  785 => 450,  778 => 448,  769 => 443,  762 => 441,  754 => 437,  751 => 436,  747 => 434,  739 => 432,  736 => 431,  730 => 430,  727 => 429,  724 => 428,  721 => 427,  718 => 426,  715 => 425,  710 => 424,  707 => 423,  704 => 422,  702 => 421,  699 => 420,  696 => 419,  689 => 417,  684 => 416,  681 => 415,  678 => 414,  675 => 413,  667 => 411,  657 => 409,  654 => 408,  648 => 407,  645 => 406,  642 => 405,  639 => 404,  634 => 403,  631 => 402,  628 => 401,  625 => 400,  619 => 399,  616 => 398,  614 => 397,  605 => 393,  602 => 392,  596 => 391,  593 => 390,  590 => 389,  587 => 388,  582 => 387,  580 => 386,  574 => 382,  569 => 381,  560 => 377,  557 => 376,  551 => 375,  548 => 374,  545 => 373,  542 => 372,  537 => 371,  535 => 370,  529 => 366,  524 => 365,  511 => 356,  495 => 339,  491 => 337,  485 => 336,  482 => 335,  477 => 334,  475 => 333,  457 => 319,  451 => 318,  448 => 317,  443 => 316,  441 => 315,  424 => 302,  418 => 301,  415 => 300,  410 => 299,  408 => 298,  341 => 234,  310 => 206,  108 => 6,  98 => 5,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard/base.html.twig' %}
{% block title %} Tableau de Bord{% endblock %}
{% block css %}
{% endblock %}
{% block main %}
    <style>
        .info-box {
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
            border-radius: 0.25rem;
            background: #ffffff;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 1rem;
            min-height: 80px;
            padding: .5rem;
            position: relative;
        }

        .info-box .progress {
            background-color: rgba(0, 0, 0, 0.125);
            height: 2px;
            margin: 5px 0;
        }

        .info-box .progress .progress-bar {
            background-color: #ffffff;
        }
        .info-box-text{
            color: #1d1c1c;
        }
        .info-box .info-box-icon {
            border-radius: 0.25rem;
            -ms-flex-align: center;
            align-items: center;
            display: -ms-flexbox;
            display: flex;
            font-size: 1.875rem;
            -ms-flex-pack: center;
            justify-content: center;
            text-align: center;
            width: 70px;
        }

        .info-box .info-box-icon > img {
            max-width: 100%;
        }

        .info-box .info-box-content {
            -ms-flex: 1;
            flex: 1;
            padding: 5px 10px;
        }

        .info-box .info-box-number {
            display: block;
            font-weight: 700;
        }

        .info-box .progress-description,
        .info-box .info-box-text {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .info-box .info-box .bg-primary,
        .info-box .info-box .bg-gradient-primary {
            color: #ffffff;
        }

        .info-box .info-box .bg-primary .progress-bar,
        .info-box .info-box .bg-gradient-primary .progress-bar {
            background-color: #ffffff;
        }

        .info-box .info-box .bg-secondary,
        .info-box .info-box .bg-gradient-secondary {
            color: #ffffff;
        }

        .info-box .info-box .bg-secondary .progress-bar,
        .info-box .info-box .bg-gradient-secondary .progress-bar {
            background-color: #ffffff;
        }

        .info-box .info-box .bg-success,
        .info-box .info-box .bg-gradient-success {
            color: #ffffff;
        }

        .info-box .info-box .bg-success .progress-bar,
        .info-box .info-box .bg-gradient-success .progress-bar {
            background-color: #ffffff;
        }

        .info-box .info-box .bg-info,
        .info-box .info-box .bg-gradient-info {
            color: #ffffff;
        }

        .info-box .info-box .bg-info .progress-bar,
        .info-box .info-box .bg-gradient-info .progress-bar {
            background-color: #ffffff;
        }

        .info-box .info-box .bg-warning,
        .info-box .info-box .bg-gradient-warning {
            color: #1F2D3D;
        }

        .info-box .info-box .bg-warning .progress-bar,
        .info-box .info-box .bg-gradient-warning .progress-bar {
            background-color: #1F2D3D;
        }

        .info-box .info-box .bg-danger,
        .info-box .info-box .bg-gradient-danger {
            color: #ffffff;
        }

        .info-box .info-box .bg-danger .progress-bar,
        .info-box .info-box .bg-gradient-danger .progress-bar {
            background-color: #ffffff;
        }

        .info-box .info-box .bg-light,
        .info-box .info-box .bg-gradient-light {
            color: #1F2D3D;
        }

        .info-box .info-box .bg-light .progress-bar,
        .info-box .info-box .bg-gradient-light .progress-bar {
            background-color: #1F2D3D;
        }

        .info-box .info-box .bg-dark,
        .info-box .info-box .bg-gradient-dark {
            color: #ffffff;
        }

        .info-box .info-box .bg-dark .progress-bar,
        .info-box .info-box .bg-gradient-dark .progress-bar {
            background-color: #ffffff;
        }

        .info-box .info-box-more {
            display: block;
        }

        .info-box .progress-description {
            margin: 0;
        }
        .info-box-icon-fa{
            color:#ffffff;
        }
        @media (min-width: 768px) {
            .col-xl-2 .info-box .progress-description,
            .col-lg-2 .info-box .progress-description,
            .col-md-2 .info-box .progress-description {
                display: none;
            }
            .col-xl-3 .info-box .progress-description,
            .col-lg-3 .info-box .progress-description,
            .col-md-3 .info-box .progress-description {
                display: none;
            }
        }

        @media (min-width: 992px) {
            .col-xl-2 .info-box .progress-description,
            .col-lg-2 .info-box .progress-description,
            .col-md-2 .info-box .progress-description {
                font-size: 0.75rem;
                display: block;
            }
            .col-xl-3 .info-box .progress-description,
            .col-lg-3 .info-box .progress-description,
            .col-md-3 .info-box .progress-description {
                font-size: 0.75rem;
                display: block;
            }
        }

        @media (min-width: 1200px) {
            .col-xl-2 .info-box .progress-description,
            .col-lg-2 .info-box .progress-description,
            .col-md-2 .info-box .progress-description {
                font-size: 1rem;
                display: block;
            }
            .col-xl-3 .info-box .progress-description,
            .col-lg-3 .info-box .progress-description,
            .col-md-3 .info-box .progress-description {
                font-size: 1rem;
                display: block;
            }
        }

        .card-header-mention{
            background-color: #3d4f52;
            color:white;
        }

        #overlay{
            background: url({{ asset('images/avatars/img-04.jpg') }}) no-repeat center;
            background-size: cover;
            opacity: 0.9;
            background-color: #1623e5;
        }
        #overlay.overlay::before{
            background-color: #1623e5;
            opacity: 0.6;
        }

        .overlay{
            position: relative;
        }
        .overlay::before{
            position: absolute;
            content:\"\";
            width: 100%;
            height: 100%;
            -webkit-transition: all 0.4s ease;
            transition: all 0.4s ease;
            z-index: -1;
        }
        .card-header-niveau{
            background-color: #292b2b;
            color:#e2dede;
            opacity:0.9;
        }
        .img-bg-03 {
            background: url({{ asset('images/avatars/bg-05.jpg') }}) no-repeat center;
            background-size: cover;
            opacity: 0.9;
            background-color:#292b2b ;
            height:auto;
        }
        .mb-txt{
            color:#b8afaf;
        }
        .mb-nbr-fi{
            color: #bde7e8;
            font-weight: bold;
            font-size: 18px;
        }
        .mb-nbr{
            color: #e32c1c;
            font-weight: bold;
            font-size: 16px;
        }
        .mb-nbr2{
            color: #f1ec09;
            font-weight: bold;
            font-size: 14px;
        }
        .bg-esp{
            width:60px;
            height:30px;
            border-radius:3px;
            color:#3d4f52;
            text-align:center;
        }
        .liste{
            float:right;
            color: #8b94a3;
        }
        div.scrol{
            padding: 5px;
            position: relative;
            width: 100%;
            height: 100px;
            overflow: auto;
        }
        div.scrol1{
            padding: 5px;
            position: relative;
            width: 100%;
            height: 220px;
            overflow: auto;
        }
    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Tableau de bord</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\">Tableau de bord</li>
        </ol>
        <div class=\"container-fluid\">
            <!-- Info boxes -->
            <div class=\"row\">
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <div class=\"info-box\">
                        <span class=\"info-box-icon bg-info elevation-1\"><i class=\"fas info-box-icon-fa fa-user-graduate\"></i></span>
                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">Etudiants</span>
                            <!----Somme des etudiant--->
                            {% set somme = 0 %}
                            {% for inscrire in inscrires %}
                                {% set somme = somme + 1 %}
                            {% endfor %}
                            <span class=\"info-box-number\">{{somme}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <div class=\"info-box mb-3\">
                        <span class=\"info-box-icon bg-danger elevation-1\"><i class=\"fas info-box-icon-fa fa-users\"></i></span>

                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">Professeurs</span>
                            {% set nb_prof = 0 %}
                            {% for prof in profs %}
                                {% set nb_prof = nb_prof + 1 %}
                            {% endfor %}
                            <span class=\"info-box-number\">{{ nb_prof }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class=\"clearfix hidden-md-up\"></div>

                <div class=\"col-12 col-sm-6 col-md-3\">
                    <div class=\"info-box mb-3\">
                        <span class=\"info-box-icon bg-success elevation-1\"><i class=\"fas info-box-icon-fa  fa-user-friends\"></i></span>
                        {% set nb_admin = 0 %}
                        {% for admin in admins %}
                            {% set nb_admin = nb_admin + 1 %}
                        {% endfor %}
                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">Employés</span>
                            <span class=\"info-box-number\">{{ nb_prof + nb_admin }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <div class=\"info-box mb-3\">
                        <span class=\"info-box-icon bg-warning elevation-1\"><i class=\"info-box-icon-fa fas fa-users-cog\"></i></span>

                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">Admin</span>
                            {#  {% set nb_admin = 0 %}
                            {% for admin in admins %}
                                {% set nb_admin = nb_admin + 1 %}
                            {% endfor %} #}
                            <span class=\"info-box-number\">{{ nb_admin }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
        <div class=\"row\">
            {% for mention in mentions %}
            <div class=\"col-xl-12\">
                <div class=\"card mb-4\">
                    <div class=\"card-header card-header-mention\">
                        <!-----------Nombre des etudiants par mention ---->
                        {% set i = 0 %}
                        {% for inscrire in inscrires %}
                            {% if inscrire.mention.code.name == mention.name %}
                                {% set i = i + 1 %}
                            {% endif %}
                        {% endfor %}
                        <i class=\"fas fa-graduation-cap mr-1\"></i>
                        {{ mention.name }} <span class=\"mb-nbr-fi\">[{{ i }}]</span>
                    </div>
                    <div class=\"card-body scrol1\">
                        <div class=\"row\">
                            {% for niveau in niveaux %}
                                <div class=\"col-xl-4\">
                                    <div class=\"card mb-4\">
                                        <div class=\"card-header card-header-niveau\">
                                            <!-----------Nombre des etudiants par niveau ---->
                                            {% set j = 0 %}
                                            {% for inscrire in inscrires %}
                                                {% if inscrire.mention.cycle.code == niveau.code and inscrire.mention.code.name == mention.name %}
                                                    {% set j = j + 1 %}
                                                {% endif %}
                                            {% endfor %}
                                            <i class=\"fas fa-project-diagram mr-1\"></i>
                                            {{ niveau.code }} <span class=\"mb-nbr\">[{{ j }}]</span>
                                        </div>
                                        <div class=\"card-body img-bg-03 scrol\">
                                            <!-----------Nombre des etudiants par parcours ---->
                                            {% set temp = 0 %}
                                            {% set nbr = 0 %}
                                            {% for parcour in parcours %}
                                                {% set nbr = nbr + 1 %}
                                                {% if parcour.code != null  and mention == parcour.code and niveau == parcour.cycle %}
                                                    {% set somme = 0 %}
                                                    {% for inscrire in inscrires %}
                                                        {% if inscrire.parcours != null and inscrire.mention.parcours == parcour and inscrire.mention.cycle == niveau %}
                                                            {% set somme = somme + 1 %}
                                                        {% endif %}
                                                    {% endfor %}
                                                    {% if somme > 0 %}
                                                        <p class=\"mb-txt\">{{ parcour.name }} <span class=\"mb-nbr2\">[{{ somme }}]</span> <a class=\"liste\" href=\"{{ path('liste_etudiant', {'id':parcour.id ,'cycle':niveau.code }) }}\"><i class=\"fw fa fa-list-alt\"></i> Liste</a></p>
                                                    {% else %}
                                                        <p class=\"mb-txt\">{{ parcour.name }} <span class=\"mb-nbr2\">[{{ somme }}]</span>
                                                    {% endif %}
                                                {% else %}
                                                    {% set temp = temp + 1 %}
                                                {% endif %}
                                            {% else %}
                                                <div class=\"col-xl-12\">no records found</div>
                                            {% endfor %}
                                            {% if temp == nbr %}
                                                <p class=\"mb-txt\" >Aucun Parcours</p>
                                                {% set somme = 0 %}
                                                {% set niv = null %}
                                                {% set niv2 = null %}
                                                {% for inscrire in inscrires %}
                                                    {% if inscrire.parcours == null and inscrire.mention.code.name == mention.name and inscrire.mention.cycle.code == niveau.code %}
                                                        {% set somme = somme + 1 %}
                                                        {% set niv = inscrire.mention.cycle %}
                                                        {% set niv2 = inscrire.mention.code %}
                                                    {% endif %}
                                                {% endfor %}
                                                {% if niveau == niv and mention == niv2 %}
                                                    <p class=\"mb-txt\">Etudiants <span class=\"mb-nbr2\">[{{ somme }}]</span> <a class=\"liste\" href=\"{{ path('list_etudiant', {'id':niv.id ,'name':mention.name }) }}\"><i class=\"fw fa fa-list-alt\"></i> Liste</a></p>
                                                {% else %}
                                                    <p class=\"mb-txt\">Etudiants <span class=\"mb-nbr2\">[0]</span></p>
                                                {% endif %}
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            {% else %}
                                <div class=\"col-xl-12\">Aucune mention</div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
            {% else %}
                    <div class=\"col-xl-12\">Aucune mention</div>
            {% endfor %}
        </div>
        <div class=\"card mb-4\">
            <div class=\"card-header card-header-mention\">
                <i class=\"fas fa-table mr-1\"></i>
                Liste des étudiants
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr class=\"text-uppercase\">
                            <th>Profil</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Tél</th>
                            <th>Niveau</th>
                            <th>Mention</th>
                            <th>Parcours</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!----><!---->
                        {% for inscrire in inscrires %}
                        <tr>
                            <td><img class=\"img-profile rounded-circle\" src=\"/images/avatars/{{ inscrire.etudiant.avatar }}\"></td>
                            <td>{{ inscrire.etudiant.name }}</td>
                            <td>{{ inscrire.etudiant.email }}</td>
                            <td>{{ inscrire.etudiant.tel }}</td>
                            <td>{{ inscrire.mention.cycle.code }}</td>
                            <td>{{ inscrire.mention.code.name }}</td>
                            {% if inscrire.parcours != null %}
                                  <td>{{ inscrire.parcours.name }}</td>
                            {% else %}
                                   <td>Aucun Parcours</td>
                            {% endif%}
                            <td><a href=\"{{ path('profil_show', {'id': inscrire.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fa fw fa-eye\"></i> Voir</a></td>
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
    </div>
{% endblock %}
{% block javascript %}
{% endblock %}", "admin/dashboard/dashboard.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\admin\\dashboard\\dashboard.html.twig");
    }
}
