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

/* vitrine/carousel.html.twig */
class __TwigTemplate_32d21f331884b7fe8a6b53b4cda3bd12a7cd5afb9f31e3670079df6c770c0c72 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/carousel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/carousel.html.twig"));

        // line 1
        echo "<div id=\"carouselExampleControls\" class=\"carousel slide bs-slider box-slider\" data-ride=\"carousel\" data-pause=\"hover\" data-interval=\"false\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/vitrine/polytechniqueSousse4.jpg"), "html", null, true);
        echo "');\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        <li data-target=\"#carouselExampleControls\"  data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carouselExampleControls\" data-slide-to=\"1\"></li>
        <li data-target=\"#carouselExampleControls\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"carousel-item active\" id=\"carousel-item\">
            <div id=\"home\" class=\"first-section\" >
                <div class=\"dtab\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-sm-12 text-right\">
                                <div class=\"big-tagline\">
                                    <h2><strong>ECOLE PRIVEE POLYTECHNIQUE </strong> DE SOUSSE</h2>
                                    <p class=\"lead\">Pour une meilleur expérience d'apprentissage à distance</p>
                                    <a href=\"#\" class=\"hover-btn-new\"><span>Contact</span></a>
                                    <a href=\"#\" class=\"hover-btn-new\"><span>En savoir plus</span></a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <div class=\"carousel-item\" id=\"carousel-item\">
            <div id=\"home\" class=\"first-section\" >
                <div class=\"dtab\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-sm-12 text-left\">
                                <div class=\"big-tagline\">
                                    <h2 data-animation=\"animated zoomInRight\">APPRENEZ CHEZ<strong> VOUS</strong></h2>
                                    <p class=\"lead\" data-animation=\"animated fadeInLeft\">Avec Nos Ressources.</p>
                                    <a href=\"#\" class=\"hover-btn-new\"><span>Contact</span></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=\"#\" class=\"hover-btn-new\"><span>En savoir plus</span></a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <div class=\"carousel-item\" id=\"carousel-item\">
            <div id=\"home\" class=\"first-section\">
                <div class=\"dtab\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-sm-12 text-center\">
                                <div class=\"big-tagline\">
                                    <h2 data-animation=\"animated zoomInRight\"><strong>BIENVENUE </strong></h2>
                                    <p class=\"lead\" data-animation=\"animated fadeInLeft\">Le Défi De La Réussite .
                                    </p>
                                    <a href=\"#\" class=\"hover-btn-new\"><span>Contact</span></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=\"#\" class=\"hover-btn-new\"><span>En savoir plus</span></a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <!-- Left Control -->
        <a class=\"new-effect carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
            <span class=\"fa fa-angle-left\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>

        <!-- Right Control -->
        <a class=\"new-effect carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
            <span class=\"fa fa-angle-right\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"carouselExampleControls\" class=\"carousel slide bs-slider box-slider\" data-ride=\"carousel\" data-pause=\"hover\" data-interval=\"false\" style=\"background-image:url('{{ asset(\"images/vitrine/polytechniqueSousse4.jpg\") }}');\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        <li data-target=\"#carouselExampleControls\"  data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carouselExampleControls\" data-slide-to=\"1\"></li>
        <li data-target=\"#carouselExampleControls\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"carousel-item active\" id=\"carousel-item\">
            <div id=\"home\" class=\"first-section\" >
                <div class=\"dtab\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-sm-12 text-right\">
                                <div class=\"big-tagline\">
                                    <h2><strong>ECOLE PRIVEE POLYTECHNIQUE </strong> DE SOUSSE</h2>
                                    <p class=\"lead\">Pour une meilleur expérience d'apprentissage à distance</p>
                                    <a href=\"#\" class=\"hover-btn-new\"><span>Contact</span></a>
                                    <a href=\"#\" class=\"hover-btn-new\"><span>En savoir plus</span></a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <div class=\"carousel-item\" id=\"carousel-item\">
            <div id=\"home\" class=\"first-section\" >
                <div class=\"dtab\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-sm-12 text-left\">
                                <div class=\"big-tagline\">
                                    <h2 data-animation=\"animated zoomInRight\">APPRENEZ CHEZ<strong> VOUS</strong></h2>
                                    <p class=\"lead\" data-animation=\"animated fadeInLeft\">Avec Nos Ressources.</p>
                                    <a href=\"#\" class=\"hover-btn-new\"><span>Contact</span></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=\"#\" class=\"hover-btn-new\"><span>En savoir plus</span></a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <div class=\"carousel-item\" id=\"carousel-item\">
            <div id=\"home\" class=\"first-section\">
                <div class=\"dtab\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-sm-12 text-center\">
                                <div class=\"big-tagline\">
                                    <h2 data-animation=\"animated zoomInRight\"><strong>BIENVENUE </strong></h2>
                                    <p class=\"lead\" data-animation=\"animated fadeInLeft\">Le Défi De La Réussite .
                                    </p>
                                    <a href=\"#\" class=\"hover-btn-new\"><span>Contact</span></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=\"#\" class=\"hover-btn-new\"><span>En savoir plus</span></a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <!-- Left Control -->
        <a class=\"new-effect carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
            <span class=\"fa fa-angle-left\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>

        <!-- Right Control -->
        <a class=\"new-effect carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
            <span class=\"fa fa-angle-right\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
</div>", "vitrine/carousel.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\vitrine\\carousel.html.twig");
    }
}
