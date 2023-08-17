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

/* vitrine/presentation.html.twig */
class __TwigTemplate_8a8e50e47548c9ec9a037ade47c051e54c8babf422d310bbb2757d755ad555e5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/presentation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/presentation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vitrine/presentation.html.twig", 1);
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

        echo "POLYTECH SOUSSE  | Présentation";
        
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
        .mg{
            margin-top:70px;
            margin-bottom:20px;
        }
        .bg-new{
            background-color: #eff3f3;
        }
        p{
            color:#333333;
            font-weight:500;
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
        // line 68
        echo twig_include($this->env, $context, "vitrine/header.html.twig");
        echo "
        <!-- End header -->
        <div id=\"overviews\" class=\"section lb\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                      

                    </div>
                    <
                    <div class=\"col-md-12\">
                        <div class=\"bg-new\">
                            <div class=\"message-box\">
                                <p> Fondée en 2009, L'Ecole Polytechnique de Sousse est une grande école privée d'enseignement et de recherche à vocation internationale, accréditée EUR- ACE et qui a pour unique vocation de former des ingénieurs ayant un niveau technique et scientifique conforme aux meilleurs standards internationaux. Elle se fixe résolument comme mission de garantir une excellente insertion professionnelle à ses jeunes diplômés en les propulsant directement à l’employabilité.
Nos principaux leviers résident dans :
-Une accréditation EUR-ACE qui accorde à nos futurs ingénieurs un niveau de diplôme conforme aux standards internationaux via l'excellence de nos formations continues et de nos programmes et qui leur permettront de recevoir, et de manière systématique, la totale reconnaissance de leurs diplômes partout en Europe.
- Un corps professoral de très haut niveau associant un profil académique à des expertises professionnelles à même d'assurer un suivi pédagogique individualisé et professionnalisant de nos étudiants.
- La vie associative que nous considérons comme étant un élément essentiel et complémentaire à la formation d’ingénieur. A travers le projet socio-culturel (PSC), l'opportunité est donnée à nos étudiants de s'impliquer dans la vie sociétale pour leur permettre de développer des compétences toutes liées aux préoccupations et aux besoins réels et imminents de la société.
- La place privilégiée accordée aux langues étrangères est un pilier fondamental dans le cursus d’ingénieur. Grâce à nos prestigieux partenaires, organismes de langues, nos étudiants ont l'opportunité de passer plusieurs diplômes et certifications tels que le DELF et le DALF. Le TOEIC, le TOEFL ainsi que d'autres certifications en langue. Des atouts qui leur permettront d'optimiser leurs chances à l’employabilité.
-Une infrastructure qui répond à de hautes exigences techniques et technologiques, avec plus de 40 laboratoires spécialisés tous équipés d'un matériel innovant qui obéit à la pointe d'une technologie avancée et rigoureuse.
- Plus de 100 partenariats nationaux et internationaux. D'une part, des partenariats académiques dans le cadre d'une double diplomation et d'échanges un peu partout dans le monde et notamment en France et au Canada, permettant à nos étudiants une forte mobilité internationale, favorisant ainsi l'ouverture académique et sociale, d'autre part, des partenariats professionnels avec qui nous échangeons assidûment afin d’ajuster notre cursus académique au niveau des besoins du marché de l'emploi.</p>
                            </div><!-- end messagebox -->
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
        <!---- footer ---------------->
        ";
        // line 96
        echo twig_include($this->env, $context, "vitrine/footer.html.twig");
        echo "
        <!---- end footer ------------>
    </div>
    ";
        // line 99
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

        // line 100
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 100,  193 => 99,  187 => 96,  156 => 68,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}POLYTECH SOUSSE  | Présentation{% endblock %}
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
        .mg{
            margin-top:70px;
            margin-bottom:20px;
        }
        .bg-new{
            background-color: #eff3f3;
        }
        p{
            color:#333333;
            font-weight:500;
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
                <div class=\"row\">
                    <div class=\"col-md-4\">
                      

                    </div>
                    <
                    <div class=\"col-md-12\">
                        <div class=\"bg-new\">
                            <div class=\"message-box\">
                                <p> Fondée en 2009, L'Ecole Polytechnique de Sousse est une grande école privée d'enseignement et de recherche à vocation internationale, accréditée EUR- ACE et qui a pour unique vocation de former des ingénieurs ayant un niveau technique et scientifique conforme aux meilleurs standards internationaux. Elle se fixe résolument comme mission de garantir une excellente insertion professionnelle à ses jeunes diplômés en les propulsant directement à l’employabilité.
Nos principaux leviers résident dans :
-Une accréditation EUR-ACE qui accorde à nos futurs ingénieurs un niveau de diplôme conforme aux standards internationaux via l'excellence de nos formations continues et de nos programmes et qui leur permettront de recevoir, et de manière systématique, la totale reconnaissance de leurs diplômes partout en Europe.
- Un corps professoral de très haut niveau associant un profil académique à des expertises professionnelles à même d'assurer un suivi pédagogique individualisé et professionnalisant de nos étudiants.
- La vie associative que nous considérons comme étant un élément essentiel et complémentaire à la formation d’ingénieur. A travers le projet socio-culturel (PSC), l'opportunité est donnée à nos étudiants de s'impliquer dans la vie sociétale pour leur permettre de développer des compétences toutes liées aux préoccupations et aux besoins réels et imminents de la société.
- La place privilégiée accordée aux langues étrangères est un pilier fondamental dans le cursus d’ingénieur. Grâce à nos prestigieux partenaires, organismes de langues, nos étudiants ont l'opportunité de passer plusieurs diplômes et certifications tels que le DELF et le DALF. Le TOEIC, le TOEFL ainsi que d'autres certifications en langue. Des atouts qui leur permettront d'optimiser leurs chances à l’employabilité.
-Une infrastructure qui répond à de hautes exigences techniques et technologiques, avec plus de 40 laboratoires spécialisés tous équipés d'un matériel innovant qui obéit à la pointe d'une technologie avancée et rigoureuse.
- Plus de 100 partenariats nationaux et internationaux. D'une part, des partenariats académiques dans le cadre d'une double diplomation et d'échanges un peu partout dans le monde et notamment en France et au Canada, permettant à nos étudiants une forte mobilité internationale, favorisant ainsi l'ouverture académique et sociale, d'autre part, des partenariats professionnels avec qui nous échangeons assidûment afin d’ajuster notre cursus académique au niveau des besoins du marché de l'emploi.</p>
                            </div><!-- end messagebox -->
                        </div>
                    </div>
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
", "vitrine/presentation.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\vitrine\\presentation.html.twig");
    }
}
