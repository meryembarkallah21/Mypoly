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

/* prof/base.html.twig */
class __TwigTemplate_bd452d4495c04e5006e6e7ff43b8ffc9d04230225140b818ff646c1d830228f9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/polytechniqueSousse.ico"), "html", null, true);
        echo "\">
    <title>Espace Professeur</title>
    <!-- Custom fonts for this template-->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("security/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Custom styles for this template-->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("security/css/osahan.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font CSS -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("security/font/stylesheet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Mdi icons for this template-->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("security/vendor/mdi-icons/css/materialdesignicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom styles for this template-->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("security/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Bootstrap core CSS-->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome-->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome-->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/icofont/icofont.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Select2 CSS-->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Owl Carousel -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl-carousel/owl.theme.css"), "html", null, true);
        echo "\">

    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tel/css/intlTelInput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/dropzone/min/dropzone.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body id=\"page-top\">
<div class=\"row osahan-login m-0\">
    ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "</div>
<!-- Bootstrap core JavaScript-->
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("security/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("security/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- Core plugin JavaScript-->
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("security/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
<!-- Custom scripts for all pages-->
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("security/js/osahan.min.js"), "html", null, true);
        echo "\"></script>
<!-- Select2 JavaScript-->
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/select2/js/select2.min.js"), "html", null, true);
        echo "\"></script>
<!-- Owl Carousel -->
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<!-- intlTelInput -->
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tel/js/intlTelInput.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tel/js/intlTelInput-jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/dropzone/min/dropzone.min.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "        <div class=\"col-md-6 osahan-login-left px-0\">
        </div>
        <div class=\"col-md-6 d-flex justify-content-center flex-column px-0\">
            <div class=\"col-lg-6 mx-auto\">
                <h3 class=\"mb-1\">Welcome</h3>
                <p class=\"mb-5\">Sign in to your account to continue</p>
                <form>
                    <div class=\"d-flex align-items-center mb-4\">
                        <div class=\"mr-3 bg-light rounded p-2 osahan-icon\"><i class=\"mdi mdi-email-outline\"></i></div>
                        <div class=\"w-100\">
                            <p class=\"mb-0 small font-weight-bold text-dark\">Email Address</p>
                            <input type=\"email\" class=\"form-control form-control-sm p-0 border-input border-0 rounded-0\"
                                   placeholder=\"Enter Your Email\">
                        </div>
                    </div>
                    <div class=\"d-flex align-items-center mb-4\">
                        <div class=\"mr-3 bg-light rounded p-2 osahan-icon\"><i class=\"mdi mdi-form-textbox-password\"></i>
                        </div>
                        <div class=\"w-100\">
                            <p class=\"mb-0 small font-weight-bold text-dark\">Password</p>
                            <input type=\"password\"
                                   class=\"form-control form-control-sm p-0 border-input border-0 rounded-0\"
                                   placeholder=\"Enter Password\">
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <a href=\"index.html\" class=\"btn btn-primary btn-block mb-3\">Sign in</a>
                        <p class=\"text-center\"><a href=\"forgot.html\" class=\"text-dark\">Forgot password?</a></p>
                        <a href=\"signup.html\" class=\"btn btn-light btn-block mb-2\">Create an account</a>
                    </div>
                </form>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "prof/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 43,  187 => 42,  172 => 92,  168 => 91,  164 => 90,  159 => 88,  154 => 86,  149 => 84,  144 => 82,  139 => 80,  135 => 79,  131 => 77,  129 => 42,  121 => 37,  117 => 36,  112 => 34,  108 => 33,  102 => 30,  97 => 28,  92 => 26,  87 => 24,  81 => 21,  76 => 19,  71 => 17,  66 => 15,  61 => 13,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('images/polytechniqueSousse.ico') }}\">
    <title>Espace Professeur</title>
    <!-- Custom fonts for this template-->
    <link href=\"{{ asset('security/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Custom styles for this template-->
    <link href=\"{{ asset('security/css/osahan.css') }}\" rel=\"stylesheet\">
    <!-- Font CSS -->
    <link href=\"{{ asset('security/font/stylesheet.css') }}\" rel=\"stylesheet\">
    <!-- Mdi icons for this template-->
    <link href=\"{{ asset('security/vendor/mdi-icons/css/materialdesignicons.min.css') }}\" rel=\"stylesheet\">
    <!-- Custom styles for this template-->
    <link href=\"{{ asset('security/css/custom.css') }}\" rel=\"stylesheet\">

        <!-- Bootstrap core CSS-->
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Font Awesome-->
    <link href=\"{{ asset('vendor/fontawesome/css/all.min.css') }}\" rel=\"stylesheet\">
    <!-- Font Awesome-->
    <link href=\"{{ asset('vendor/icofont/icofont.min.css') }}\" rel=\"stylesheet\">
    <!-- Select2 CSS-->
    <link href=\"{{ asset('vendor/select2/css/select2.min.css') }}\" rel=\"stylesheet\">

        <!-- Owl Carousel -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/owl-carousel/owl.carousel.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/owl-carousel/owl.theme.css') }}\">

    <link href=\"{{ asset('vendor/tel/css/intlTelInput.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor/dropzone/min/dropzone.min.css') }}\" rel=\"stylesheet\">
</head>

<body id=\"page-top\">
<div class=\"row osahan-login m-0\">
    {% block content %}
        <div class=\"col-md-6 osahan-login-left px-0\">
        </div>
        <div class=\"col-md-6 d-flex justify-content-center flex-column px-0\">
            <div class=\"col-lg-6 mx-auto\">
                <h3 class=\"mb-1\">Welcome</h3>
                <p class=\"mb-5\">Sign in to your account to continue</p>
                <form>
                    <div class=\"d-flex align-items-center mb-4\">
                        <div class=\"mr-3 bg-light rounded p-2 osahan-icon\"><i class=\"mdi mdi-email-outline\"></i></div>
                        <div class=\"w-100\">
                            <p class=\"mb-0 small font-weight-bold text-dark\">Email Address</p>
                            <input type=\"email\" class=\"form-control form-control-sm p-0 border-input border-0 rounded-0\"
                                   placeholder=\"Enter Your Email\">
                        </div>
                    </div>
                    <div class=\"d-flex align-items-center mb-4\">
                        <div class=\"mr-3 bg-light rounded p-2 osahan-icon\"><i class=\"mdi mdi-form-textbox-password\"></i>
                        </div>
                        <div class=\"w-100\">
                            <p class=\"mb-0 small font-weight-bold text-dark\">Password</p>
                            <input type=\"password\"
                                   class=\"form-control form-control-sm p-0 border-input border-0 rounded-0\"
                                   placeholder=\"Enter Password\">
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <a href=\"index.html\" class=\"btn btn-primary btn-block mb-3\">Sign in</a>
                        <p class=\"text-center\"><a href=\"forgot.html\" class=\"text-dark\">Forgot password?</a></p>
                        <a href=\"signup.html\" class=\"btn btn-light btn-block mb-2\">Create an account</a>
                    </div>
                </form>
            </div>
        </div>
    {% endblock %}
</div>
<!-- Bootstrap core JavaScript-->
<script src=\"{{ asset('security/vendor/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('security/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<!-- Core plugin JavaScript-->
<script src=\"{{ asset('security/vendor/jquery-easing/jquery.easing.min.js') }}\"></script>
<!-- Custom scripts for all pages-->
<script src=\"{{ asset('security/js/osahan.min.js') }}\"></script>
<!-- Select2 JavaScript-->
<script src=\"{{ asset('vendor/select2/js/select2.min.js') }}\"></script>
<!-- Owl Carousel -->
<script src=\"{{ asset('vendor/owl-carousel/owl.carousel.js') }}\"></script>
<!-- intlTelInput -->
<script src=\"{{ asset('vendor/tel/js/intlTelInput.js') }}\"></script>
<script src=\"{{ asset('vendor/tel/js/intlTelInput-jquery.js') }}\"></script>
<script src=\"{{ asset('vendor/dropzone/min/dropzone.min.js') }}\"></script>

</body>

</html>", "prof/base.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\prof\\base.html.twig");
    }
}
