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

/* vitrine/footer.html.twig */
class __TwigTemplate_c86b1c7c435d8c42d4a40246fe20f605438b597ac7e11f57be68e9c932f868c4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/footer.html.twig"));

        // line 1
        echo "<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-xs-12\">
                <div class=\"widget clearfix\">
                    <div class=\"widget-title\">
                        <h3>SUIVEZ-NOUS SUR</h3>
                        <p><a class=\"text-white btn-lg\" href=\"#\"><i class=\"feather-facebook\"></i></a><a class=\"text-white btn-lg\" href=\"#\"><i class=\"feather-twitter\"></i></a><a class=\"text-white btn-lg\" href=\"#\"><i class=\"feather-instagram\"></i></a></p>
                    </div>
                    <p></p>
                    <p></p>
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class=\"col-lg-4 col-md-4 col-xs-12\">
                <div class=\"widget clearfix\">
                    <div class=\"widget-title\">
                        <h3>LIEN D'INFORMATION</h3>
                    </div>
                    <ul class=\"footer-links\">
                        <li><a href=\"#\">Accueil</a></li>
                        <li><a href=\"#\">Qui sommes nous</a></li>
                        <li><a href=\"#\">contact</a></li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class=\"col-lg-4 col-md-4 col-xs-12\">
                <div class=\"widget clearfix\">
                    <div class=\"widget-title\">
                        <h3>DETAILS DU CONTACT</h3>
                    </div>

                    <ul class=\"footer-links\">
                        <li><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vitrine");
        echo "\">www.polytechniqueSousse.academy</a></li>
                        <li>contact@polytecsousse.tn</li>
                        <li>POLYTECH SOUSSE  -Rue du Commandant Bejaoui, Sousse 4054</li>
                        <li>73 277 877</li>
                        <li></li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->

        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end footer -->

<div class=\"copyrights\" id=\"copyrights\">
    <div class=\"container\">
        <div class=\"footer-distributed\">
            <div class=\"footer-left\">
                <p class=\"footer-company-name\"></p>
            </div>

            <div class=\"footer-right\">
                <ul class=\"footer-links-soi\">
                    <li><a href=\"#\"><i class=\"feather-facebook\"></i></a></li>
                    <li><a href=\"#\"><i class=\"feather-twitter\"></i></a></li>
                    <li><a href=\"#\"><i class=\"feather-instagram\"></i></a></li>
                </ul><!-- end links -->
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->

<a href=\"#\" id=\"scroll-to-top\" class=\"dmtop global-radius\"><i class=\"fa fa-angle-up\"></i></a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 35,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-xs-12\">
                <div class=\"widget clearfix\">
                    <div class=\"widget-title\">
                        <h3>SUIVEZ-NOUS SUR</h3>
                        <p><a class=\"text-white btn-lg\" href=\"#\"><i class=\"feather-facebook\"></i></a><a class=\"text-white btn-lg\" href=\"#\"><i class=\"feather-twitter\"></i></a><a class=\"text-white btn-lg\" href=\"#\"><i class=\"feather-instagram\"></i></a></p>
                    </div>
                    <p></p>
                    <p></p>
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class=\"col-lg-4 col-md-4 col-xs-12\">
                <div class=\"widget clearfix\">
                    <div class=\"widget-title\">
                        <h3>LIEN D'INFORMATION</h3>
                    </div>
                    <ul class=\"footer-links\">
                        <li><a href=\"#\">Accueil</a></li>
                        <li><a href=\"#\">Qui sommes nous</a></li>
                        <li><a href=\"#\">contact</a></li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class=\"col-lg-4 col-md-4 col-xs-12\">
                <div class=\"widget clearfix\">
                    <div class=\"widget-title\">
                        <h3>DETAILS DU CONTACT</h3>
                    </div>

                    <ul class=\"footer-links\">
                        <li><a href=\"{{ path('vitrine')}}\">www.polytechniqueSousse.academy</a></li>
                        <li>contact@polytecsousse.tn</li>
                        <li>POLYTECH SOUSSE  -Rue du Commandant Bejaoui, Sousse 4054</li>
                        <li>73 277 877</li>
                        <li></li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->

        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end footer -->

<div class=\"copyrights\" id=\"copyrights\">
    <div class=\"container\">
        <div class=\"footer-distributed\">
            <div class=\"footer-left\">
                <p class=\"footer-company-name\"></p>
            </div>

            <div class=\"footer-right\">
                <ul class=\"footer-links-soi\">
                    <li><a href=\"#\"><i class=\"feather-facebook\"></i></a></li>
                    <li><a href=\"#\"><i class=\"feather-twitter\"></i></a></li>
                    <li><a href=\"#\"><i class=\"feather-instagram\"></i></a></li>
                </ul><!-- end links -->
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->

<a href=\"#\" id=\"scroll-to-top\" class=\"dmtop global-radius\"><i class=\"fa fa-angle-up\"></i></a>", "vitrine/footer.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\vitrine\\footer.html.twig");
    }
}
