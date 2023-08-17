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

/* vitrine/section-1.html.twig */
class __TwigTemplate_3633a058c89f56ecc175e5b7337bc4b6aa22abafae7234c1690c12838b9f42d4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/section-1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/section-1.html.twig"));

        // line 1
        echo "<div id=\"overviews\" class=\"section lb\">
    <div class=\"container\">
        <div class=\"section-title row text-center\">
            <div class=\"col-md-8 offset-md-2\">
                ";
        // line 11
        echo "            </div>
        </div><!-- end title -->

        <div class=\"row align-items-center\">
            <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                <div class=\"message-box\">
                    <h3 style=\"font-weight: bold\">QUI SOMMES-NOUS</h3>
                    <p>Nous sommes des professeurs d’universités venant de différents horizons, convaincus que l’UNIVERSITE DE DEMAIN sera numérique, en ligne ou à distance .</p>
                    <p> Des professeurs d’universités, ayant plusieurs années d’expériences en matière d’enseignement de haut niveau et de grande qualité,
                        désirant de transmettre leurs savoirs et leurs connaissances aux jeunes générations qui de plus en plus s’accommodent aux nouvelles technologies de l’information et de la communication (NTIC).</p>
                    <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quisommesnous");
        echo "\" class=\"hover-btn-new\"><span>En savoir plus</span></a>
                </div><!-- end messagebox -->
            </div><!-- end col -->

            <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                <div class=\"post-media wow fadeIn\">
                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/vitrine/polytechniqueSousse4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid img-rounded\">
                </div><!-- end media -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/section-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 27,  61 => 21,  49 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"overviews\" class=\"section lb\">
    <div class=\"container\">
        <div class=\"section-title row text-center\">
            <div class=\"col-md-8 offset-md-2\">
                {#  {%  set cpt = 0 %}
                {% for item in mentions %}{%  set cpt = cpt+1 %}{% endfor %}
                <h1><strong>NOS MENTIONS DE FORMATION</strong></h1>
                {%  set i = 0 %}
                <p class=\"lead\" id=\"lead\">{% for item in mentions %}{%  set i = i+1 %} {% if i != cpt %}{{ item.name }} - {% else %}{{ item.name }}{% endif %}{% endfor %}</p>
                #}
            </div>
        </div><!-- end title -->

        <div class=\"row align-items-center\">
            <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                <div class=\"message-box\">
                    <h3 style=\"font-weight: bold\">QUI SOMMES-NOUS</h3>
                    <p>Nous sommes des professeurs d’universités venant de différents horizons, convaincus que l’UNIVERSITE DE DEMAIN sera numérique, en ligne ou à distance .</p>
                    <p> Des professeurs d’universités, ayant plusieurs années d’expériences en matière d’enseignement de haut niveau et de grande qualité,
                        désirant de transmettre leurs savoirs et leurs connaissances aux jeunes générations qui de plus en plus s’accommodent aux nouvelles technologies de l’information et de la communication (NTIC).</p>
                    <a href=\"{{ path('quisommesnous') }}\" class=\"hover-btn-new\"><span>En savoir plus</span></a>
                </div><!-- end messagebox -->
            </div><!-- end col -->

            <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                <div class=\"post-media wow fadeIn\">
                    <img src=\"{{ asset('images/vitrine/polytechniqueSousse4.jpg') }}\" alt=\"\" class=\"img-fluid img-rounded\">
                </div><!-- end media -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->", "vitrine/section-1.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\vitrine\\section-1.html.twig");
    }
}
