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

/* vitrine/enseignant.html.twig */
class __TwigTemplate_e8391a4c9d0f9fcab58bb8f6e73b61cb5389923c9625e74a6b1c6460b566d9d5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/enseignant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/enseignant.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vitrine/enseignant.html.twig", 1);
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

        echo "POLYTECH SOUSSE  | Les enseignants ";
        
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
        #copyrights{
            margin-left:-15px;
            margin-right:-15px;
        }
        .bt{
            margin: 2px 5px;
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
        // line 49
        echo twig_include($this->env, $context, "vitrine/header.html.twig");
        echo "
        <!-- End header -->
        <div id=\"overviews\" class=\"section lb\">
            <div class=\"container\">
                <div class=\"row text-center\">
                    <div class=\"col-md-8 offset-md-2\">
                        <h1 style=\"font-weight: bold\">LES ENSEIGNANTS</h1>
                    </div>
                </div><!-- end title -->
                <div class=\"row\">
                    <div class=\"col-md-12 col-xl-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-md-12 col-sm-6\">
                                        <ul class=\"nav\">
                                            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mentions"]) || array_key_exists("mentions", $context) ? $context["mentions"] : (function () { throw new RuntimeError('Variable "mentions" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mention"]) {
            // line 66
            echo "                                                <li class=\"nav-item\">
                                                    <a href=\"#";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mention"], "name", [], "any", false, false, false, 67), "html", null, true);
            echo "\" class=\"nav-link bt btn border border-info\" role=\"tab\" data-toggle=\"tab\">
                                                        <img src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/fichier_icon/" . twig_get_attribute($this->env, $this->source, $context["mention"], "icon", [], "any", false, false, false, 68))), "html", null, true);
            echo "\" alt=\"...\" width=\"30px\">
                                                        ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mention"], "name", [], "any", false, false, false, 69), "html", null, true);
            echo "
                                                    </a>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        <img style=\"padding:0 40%;margin-bottom:10px; background-color:#dde3e1;\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/prof.gif"), "html", null, true);
        echo "\" alt=\"...\" width=\"100%\" />
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"tab-content\">
                            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mentions"]) || array_key_exists("mentions", $context) ? $context["mentions"] : (function () { throw new RuntimeError('Variable "mentions" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mention"]) {
            // line 85
            echo "                                <div class=\"tab-pane\" role=\"tabpanel\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mention"], "name", [], "any", false, false, false, 85), "html", null, true);
            echo "\">
                                    ";
            // line 86
            $context["data"] = [];
            // line 87
            echo "                                    ";
            $context["i"] = 0;
            // line 88
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ecs"]) || array_key_exists("ecs", $context) ? $context["ecs"] : (function () { throw new RuntimeError('Variable "ecs" does not exist.', 88, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
                // line 89
                echo "                                        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["ec"], "prof", [], "any", false, false, false, 89), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 89, $this->source); })()))) {
                    // line 90
                    echo "                                        ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ec"], "ue", [], "any", false, false, false, 90), "mention", [], "any", false, false, false, 90), "code", [], "any", false, false, false, 90), $context["mention"]))) {
                    // line 91
                    echo "                                            ";
                    $context["data"] = twig_array_merge((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 91, $this->source); })()), [(isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 91, $this->source); })()) => twig_get_attribute($this->env, $this->source, $context["ec"], "prof", [], "any", false, false, false, 91)]);
                    // line 92
                    echo "                                            ";
                    $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 92, $this->source); })()) + 1);
                    // line 93
                    echo "                                        ";
                } else {
                    // line 94
                    echo "                                        ";
                }
                // line 95
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 96, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["prof"]) {
                // line 97
                echo "                                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                            <div class=\"icon-wrapper wow fadeIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\">
                                                <div class=\"osahan-account-page-left shadow-sm bg-white h-100\">
                                                    <div class=\"border-bottom p-4 \">
                                                        <div class=\"osahan-user text-center\">
                                                            <div class=\"osahan-user-media\">
                                                                <img class=\"mb-3 rounded-pill shadow-sm mt-1\" width=\"100px\" src=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, $context["prof"], "avatar", [], "any", false, false, false, 103))), "html", null, true);
                echo "\" alt=\"president\">
                                                                <div class=\"osahan-user-media-body\">
                                                                    <h5 class=\"mb-2\" style=\"font-weight:bold\">";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prof"], "name", [], "any", false, false, false, 105), "html", null, true);
                echo "</h5>
                                                                    <h5 class=\"mb-2\" style=\"font-weight:bold\">";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prof"], "email", [], "any", false, false, false, 106), "html", null, true);
                echo "</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end icon-wrapper -->
                                        </div><!-- end col -->
                                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 115
                echo "                                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                            <div class=\"icon-wrapper wow fadeIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\">
                                                <p class=\"text-center\">Aucun prof pour l'instant... </p>
                                            </div><!-- end icon-wrapper -->
                                        </div><!-- end col -->
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prof'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                        </div>
                    </div>
                   ";
        // line 150
        echo "                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
        ";
        // line 153
        echo twig_include($this->env, $context, "vitrine/footer.html.twig");
        echo "
    ";
        // line 154
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

        // line 155
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/enseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 155,  308 => 154,  304 => 153,  299 => 150,  295 => 123,  288 => 121,  277 => 115,  263 => 106,  259 => 105,  254 => 103,  246 => 97,  240 => 96,  234 => 95,  231 => 94,  228 => 93,  225 => 92,  222 => 91,  219 => 90,  216 => 89,  211 => 88,  208 => 87,  206 => 86,  201 => 85,  197 => 84,  190 => 80,  181 => 73,  171 => 69,  167 => 68,  163 => 67,  160 => 66,  156 => 65,  137 => 49,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}POLYTECH SOUSSE  | Les enseignants {% endblock %}
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
        #copyrights{
            margin-left:-15px;
            margin-right:-15px;
        }
        .bt{
            margin: 2px 5px;
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
                <div class=\"row text-center\">
                    <div class=\"col-md-8 offset-md-2\">
                        <h1 style=\"font-weight: bold\">LES ENSEIGNANTS</h1>
                    </div>
                </div><!-- end title -->
                <div class=\"row\">
                    <div class=\"col-md-12 col-xl-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-md-12 col-sm-6\">
                                        <ul class=\"nav\">
                                            {% for mention in mentions %}
                                                <li class=\"nav-item\">
                                                    <a href=\"#{{ mention.name }}\" class=\"nav-link bt btn border border-info\" role=\"tab\" data-toggle=\"tab\">
                                                        <img src=\"{{ asset('images/fichier_icon/'~mention.icon) }}\" alt=\"...\" width=\"30px\">
                                                        {{ mention.name }}
                                                    </a>
                                                </li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        <img style=\"padding:0 40%;margin-bottom:10px; background-color:#dde3e1;\" src=\"{{ asset('images/avatars/prof.gif') }}\" alt=\"...\" width=\"100%\" />
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"tab-content\">
                            {% for mention in mentions %}
                                <div class=\"tab-pane\" role=\"tabpanel\" id=\"{{ mention.name }}\">
                                    {% set data = [] %}
                                    {% set i = 0 %}
                                    {% for ec in ecs %}
                                        {% if ec.prof in data %}
                                        {% elseif ec.ue.mention.code == mention %}
                                            {% set data = data| merge( { (i) : ec.prof } ) %}
                                            {% set i = i+1 %}
                                        {% else %}
                                        {% endif %}
                                    {% endfor %}
                                    {% for prof in data %}
                                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                            <div class=\"icon-wrapper wow fadeIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\">
                                                <div class=\"osahan-account-page-left shadow-sm bg-white h-100\">
                                                    <div class=\"border-bottom p-4 \">
                                                        <div class=\"osahan-user text-center\">
                                                            <div class=\"osahan-user-media\">
                                                                <img class=\"mb-3 rounded-pill shadow-sm mt-1\" width=\"100px\" src=\"{{ asset('images/avatars/'~prof.avatar) }}\" alt=\"president\">
                                                                <div class=\"osahan-user-media-body\">
                                                                    <h5 class=\"mb-2\" style=\"font-weight:bold\">{{ prof.name }}</h5>
                                                                    <h5 class=\"mb-2\" style=\"font-weight:bold\">{{ prof.email }}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end icon-wrapper -->
                                        </div><!-- end col -->
                                    {% else %}
                                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                            <div class=\"icon-wrapper wow fadeIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\">
                                                <p class=\"text-center\">Aucun prof pour l'instant... </p>
                                            </div><!-- end icon-wrapper -->
                                        </div><!-- end col -->
                                    {% endfor %}
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                   {#  {% for prof in profs %}
                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"icon-wrapper wow fadeIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\">
                                <div class=\"osahan-account-page-left shadow-sm bg-white h-100\">
                                    <div class=\"border-bottom p-4 \">
                                        <div class=\"osahan-user text-center\">
                                            <div class=\"osahan-user-media\">
                                                <img class=\"mb-3 rounded-pill shadow-sm mt-1\" width=\"100px\" src=\"{{ asset('images/avatars/'~prof.avatar) }}\" alt=\"president\">
                                                <div class=\"osahan-user-media-body\">
                                                    <h5 class=\"mb-2\" style=\"font-weight:bold\">{{ prof.name }}</h5>
                                                    <h5 class=\"mb-2\" style=\"font-weight:bold\">{{ prof.email }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end icon-wrapper -->
                        </div><!-- end col -->
                    {% else %}
                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"icon-wrapper wow fadeIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.2s\">
                                <p class=\"text-center\">Aucun prof ... </p>
                            </div><!-- end icon-wrapper -->
                        </div><!-- end col -->
                    {% endfor %}#}
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
        {{ include('vitrine/footer.html.twig') }}
    {% block main %}
    {% endblock %}
{% endblock %}", "vitrine/enseignant.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\vitrine\\enseignant.html.twig");
    }
}
