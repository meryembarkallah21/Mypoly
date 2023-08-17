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

/* vitrine/qui-sommes-nous.html.twig */
class __TwigTemplate_a4e612a2a57ae9eba129bb029a88b252daf4cf790161631b0fd69c364d77a872 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/qui-sommes-nous.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/qui-sommes-nous.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vitrine/qui-sommes-nous.html.twig", 1);
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

        echo "POLYTECH SOUSSE  | Qui Sommes Nous";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vitrine/style.css"), "html", null, true);
        echo "\">
    <style>
        .nav-link{
            font-size:18px;
        }
        .nav-link>a{
            color: #756f6f;
        }
        .top-navbar{
            margin-left:-15px;
            margin-right:-15px;
        }
        #carousel-item{
            height:500px;
        }
        .carousel-indicators .active{
            height: 3px;
            width: 27px;
        }
        .dropdown-item{
            font-size: 15px;
            font-weight: bold;
        }
        #lead{
            font-weight: bold;
        }
        #overviews{
            margin-top:-20px;
            margin-right:-15px;
            margin-left:-15px;
        }
        .fadeIn{
            margin-bottom:150px;
            margin-left:100px;
        }
        #copyrights{
            margin-left:-15px;
            margin-right:-15px;
        }
    </style>
    <!-- LOADER -->
    <div id=\"preloader\">
        <div class=\"loader-container\">
            <div class=\"progress-br float shadow\">
                <div class=\"progress__item\"></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->
    <div class=\"container-fluid\">
        <!-- ======= Top nav ======= -->
        <!-- Start header -->
        ";
        // line 57
        echo twig_include($this->env, $context, "vitrine/header.html.twig");
        echo "
        <!-- End header -->
        <div id=\"overviews\" class=\"section lb\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"message-box\">
                            <h3 style=\"font-weight: bold\">QUI SOMMES-NOUS</h3>
                            <p>Nous sommes des professeurs d’universités venant de différents horizons, convaincus que l’UNIVERSITE DE DEMAIN sera numérique, en ligne ou à distance.</p>
                            <p>Des professeurs d’universités, ayant plusieurs années d’expériences en matière d’enseignement de haut niveau et de grande qualité, désirant de transmettre leurs savoirs et leurs connaissances <strong>aux jeunes générations qui de plus en plus s’accommodent aux nouvelles technologies de l’information et de la communication (NTIC).</strong></p>
                           
                        </div><!-- end messagebox -->
                    </div><!-- end col -->

                    <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"post-media wow fadeIn\">
                            <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/vitrine/polytechniqueSousse12.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid img-1 img-rounded\">
                        </div><!-- end media -->
                        <div class=\"post-media wow fadeIn\">
                            <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/vitrine/polytechniqueSousse13.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid img-2 img-rounded\">
                        </div><!-- end media -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
        <!---- footer ---------------->
        ";
        // line 83
        echo twig_include($this->env, $context, "vitrine/footer.html.twig");
        echo "
        <!---- end footer ------------>
    </div>
    ";
        // line 86
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 87
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/qui-sommes-nous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 87,  186 => 86,  180 => 83,  170 => 76,  164 => 73,  145 => 57,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}POLYTECH SOUSSE  | Qui Sommes Nous{% endblock %}
{% block body %}
    <link rel=\"stylesheet\" href=\"{{ asset('vitrine/style.css') }}\">
    <style>
        .nav-link{
            font-size:18px;
        }
        .nav-link>a{
            color: #756f6f;
        }
        .top-navbar{
            margin-left:-15px;
            margin-right:-15px;
        }
        #carousel-item{
            height:500px;
        }
        .carousel-indicators .active{
            height: 3px;
            width: 27px;
        }
        .dropdown-item{
            font-size: 15px;
            font-weight: bold;
        }
        #lead{
            font-weight: bold;
        }
        #overviews{
            margin-top:-20px;
            margin-right:-15px;
            margin-left:-15px;
        }
        .fadeIn{
            margin-bottom:150px;
            margin-left:100px;
        }
        #copyrights{
            margin-left:-15px;
            margin-right:-15px;
        }
    </style>
    <!-- LOADER -->
    <div id=\"preloader\">
        <div class=\"loader-container\">
            <div class=\"progress-br float shadow\">
                <div class=\"progress__item\"></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->
    <div class=\"container-fluid\">
        <!-- ======= Top nav ======= -->
        <!-- Start header -->
        {{ include('vitrine/header.html.twig') }}
        <!-- End header -->
        <div id=\"overviews\" class=\"section lb\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"message-box\">
                            <h3 style=\"font-weight: bold\">QUI SOMMES-NOUS</h3>
                            <p>Nous sommes des professeurs d’universités venant de différents horizons, convaincus que l’UNIVERSITE DE DEMAIN sera numérique, en ligne ou à distance.</p>
                            <p>Des professeurs d’universités, ayant plusieurs années d’expériences en matière d’enseignement de haut niveau et de grande qualité, désirant de transmettre leurs savoirs et leurs connaissances <strong>aux jeunes générations qui de plus en plus s’accommodent aux nouvelles technologies de l’information et de la communication (NTIC).</strong></p>
                           
                        </div><!-- end messagebox -->
                    </div><!-- end col -->

                    <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"post-media wow fadeIn\">
                            <img src=\"{{ asset('images/vitrine/polytechniqueSousse12.png') }}\" alt=\"\" class=\"img-fluid img-1 img-rounded\">
                        </div><!-- end media -->
                        <div class=\"post-media wow fadeIn\">
                            <img src=\"{{ asset('images/vitrine/polytechniqueSousse13.png') }}\" alt=\"\" class=\"img-fluid img-2 img-rounded\">
                        </div><!-- end media -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
        <!---- footer ---------------->
        {{ include('vitrine/footer.html.twig') }}
        <!---- end footer ------------>
    </div>
    {% block main %}
    {% endblock %}
{% endblock %}
", "vitrine/qui-sommes-nous.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\vitrine\\qui-sommes-nous.html.twig");
    }
}
