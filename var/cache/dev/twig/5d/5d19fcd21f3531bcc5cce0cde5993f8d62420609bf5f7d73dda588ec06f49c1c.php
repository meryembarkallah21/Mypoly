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

/* vitrine/index.html.twig */
class __TwigTemplate_9c10e1e7148b9b65061fdea5a5da49e6bbf57a6f59e58ca3b3cb6e6be2db87c6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vitrine/index.html.twig", 1);
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

        echo " POLYTECH SOUSSE  | Accueil";
        
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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vitrine/style.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vitrine/timeline.min.css"), "html", null, true);
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
    .nav-item:active{
        color:olivedrab;
    }
    #scroll-to-top{
        margin-bottom:30px;
    }
    #copyrights{
        margin-left:-15px;
        margin-right:-15px;
    }
    .timeline__content>h2{
        color:#333;
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
        // line 58
        echo twig_include($this->env, $context, "vitrine/header.html.twig");
        echo "
    <!-- End header -->
    <!-- End Top nav -->
    <!--- carousel------>
    ";
        // line 62
        echo twig_include($this->env, $context, "vitrine/carousel.html.twig");
        echo "
    <!---- end carousel---------->
    <!--- section 1------>
    ";
        // line 65
        echo twig_include($this->env, $context, "vitrine/section-1.html.twig");
        echo "
    <!---- end section 1---------->
    ";
        // line 67
        echo twig_include($this->env, $context, "vitrine/timeline.html.twig");
        echo "
    <!---- footer ---------------->
    ";
        // line 69
        echo twig_include($this->env, $context, "vitrine/footer.html.twig");
        echo "
    <!---- end footer ------------>
</div>

";
        // line 73
        $this->displayBlock('main', $context, $blocks);
        // line 75
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/loader/timeline.min.js"), "html", null, true);
        echo "\"></script>
<script>
    timeline(document.querySelectorAll('.timeline'), {
        forceVerticalMode: 700,
        mode: 'horizontal',
        verticalStartPosition: 'left',
        visibleItems: 4
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 73,  181 => 75,  179 => 73,  172 => 69,  167 => 67,  162 => 65,  156 => 62,  149 => 58,  94 => 6,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} POLYTECH SOUSSE  | Accueil{% endblock %}
{% block body %}
<link rel=\"stylesheet\" href=\"{{ asset('vitrine/style.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('vitrine/timeline.min.css') }}\">
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
    .nav-item:active{
        color:olivedrab;
    }
    #scroll-to-top{
        margin-bottom:30px;
    }
    #copyrights{
        margin-left:-15px;
        margin-right:-15px;
    }
    .timeline__content>h2{
        color:#333;
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
    <!-- End Top nav -->
    <!--- carousel------>
    {{ include('vitrine/carousel.html.twig') }}
    <!---- end carousel---------->
    <!--- section 1------>
    {{ include('vitrine/section-1.html.twig') }}
    <!---- end section 1---------->
    {{ include('vitrine/timeline.html.twig') }}
    <!---- footer ---------------->
    {{ include('vitrine/footer.html.twig') }}
    <!---- end footer ------------>
</div>

{% block main %}
{% endblock %}
<script src=\"{{ asset('js/loader/timeline.min.js') }}\"></script>
<script>
    timeline(document.querySelectorAll('.timeline'), {
        forceVerticalMode: 700,
        mode: 'horizontal',
        verticalStartPosition: 'left',
        visibleItems: 4
    });
</script>
{% endblock %}
", "vitrine/index.html.twig", "C:\\xampp\\htdocs\\esum-main\\templates\\vitrine\\index.html.twig");
    }
}
