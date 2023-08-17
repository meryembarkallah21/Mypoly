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

/* etudiant/espace/base.html.twig */
class __TwigTemplate_f586598258cb0a99d73d13c6075d7dbe1f20d77429e508040a8ef9a7c1a821d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"Askbootstrap\" />
    <meta name=\"author\" content=\"Askbootstrap\" />
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/comment.css"), "html", null, true);
        echo "\">
    <!-- Favicon Icon -->
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/polytechniqueSousse.ico"), "html", null, true);
        echo "\">
    <!-- Feather Icon-->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/icons/feather.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Fontawesome Icon-->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/fontawesome/css/fontawesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Bootstrap Css -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom Css -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- Datatables css -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/dataTables/dataTables/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!--link of hoasan template (cour)-->

    <!-- Bootstrap core CSS-->
    <!-- Font Awesome-->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("hoasan/vendor/fontawesome/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome-->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("hoasan/vendor/icofont/icofont.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Select2 CSS-->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("hoasan/vendor/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom styles for this template-->






   
    <!--inscription formulaire-->
    
    <!-- Icons font CSS-->
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("inscription/vendor/mdi-font/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("inscription/vendor/font-awesome-4.7/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <!-- Font special for pages-->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i\" rel=\"stylesheet\">

    <!-- Vendor CSS-->
    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

\t<link rel=\"stylesheet\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("calendrier/css/style.css"), "html", null, true);
        echo "\">


    <!-- Main CSS-->
    

    <link href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tel/css/intlTelInput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        // line 63
        $this->displayBlock('css', $context, $blocks);
        // line 89
        echo "</head>
<body class=\"sb-nav-fixed\">
<nav class=\"sb-topnav navbar navbar-expand navbar-light bg-white shadow-sm\">
    <img alt=\"logo\" class=\"logo\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/logo-poly.png"), "html", null, true);
        echo "\" width=\"180px\" style=\"border: none;\">
    <button class=\"btn btn-link btn-sm order-1 order-lg-0\" id=\"sidebarToggle\" href=\"#\"><i class=\"fas fa-bars\"></i></button>

    <!-- Navbar-->
    <span class=\"ml-auto\"></span>
    <ul class=\"navbar-nav ml-auto  ml-md-0\">

        <!-- Nav Item - User Information -->
        <li class=\"nav-item dropdown no-arrow ml-1 osahan-profile-dropdown\">
            <a class=\"nav-link dropdown-toggle pr-0\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"feather-settings\" style=\"font-size: 20px;color:green;\"></span>
            </a>
            <!-- Dropdown - User Information -->
            <div class=\"dropdown-menu dropdown-menu-right shadow-sm\">
                <div class=\"p-3 d-flex align-items-center\">
                    <div class=\"dropdown-list-image mr-3\">
                        <img class=\"mb-3 rounded-pill shadow-sm mt-1\"  width=\"50%\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "avatar", [], "any", false, false, false, 108))), "html", null, true);
        echo "\"
                             alt=\"gurdeep singh osahan\">
                        <div class=\"status-indicator bg-success\"></div>
                    </div>
                    <div class=\"font-weight-bold\">
                        <div class=\"text-truncate\">";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113), "name", [], "any", false, false, false, 113), "html", null, true);
        echo "</div>
                        <div class=\"small text-gray-500\">Etudiant</div>
                    </div>
                </div>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiant_profil");
        echo "\"><i class=\"feather-settings\"></i> Account Settings</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"feather-log-out\"></i> Logout</a>
            </div>
        </li>
    </ul>
</nav>
<div id=\"layoutSidenav\">
    <div id=\"layoutSidenav_nav\">
        <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
            <div class=\"sb-sidenav-menu\">
                <div class=\"nav\">
                    <div class=\"sb-sidenav-menu-heading\">
                        <div style=\"margin-top: -15px;\"><center><img class=\"mb-3 rounded-pill shadow-sm mt-1\"  width=\"50%\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "user", [], "any", false, false, false, 131), "avatar", [], "any", false, false, false, 131))), "html", null, true);
        echo "\"
                             alt=\"gurdeep singh osahan\"></center></div>
                        <p style=\"width: 100%;text-align: center;color: white;margin-top: -15px;\">";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "name", [], "any", false, false, false, 133), "html", null, true);
        echo "</p>

                    </div>
                    <div class=\"hr\"></div>
                    <a class=\"nav-link\" href=\"#\" >
                        <i class=\"feather-home icon\"></i>
                        Acceuil
                    </a>
                    
                    <a class=\"nav-link\" href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_mentions");
        echo "\">
                     <i class=\"feather-star icon\"></i>
                        Mes mentions
                    </a>
                    <a class=\"nav-link\" href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tableau_support");
        echo "\">
                        <i class=\"feather-book icon\"></i>
                        Bibliothèque
                    </a>
                    <a class=\"nav-link\" href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agenda_etudiant");
        echo "\">
                       <i class=\"feather-heart icon\"></i>
                        Agenda
                    </a>
                    <a class=\"nav-link\" href=\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiant_bookstore");
        echo "\">
                        <i class=\"feather-book-open icon\"></i>
                        Achat livre
                    </a>

                
                    <a class=\"nav-link\" href=\"";
        // line 160
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiant_profil");
        echo "\">
                        <i class=\"feather-user icon\"></i>
                        Mon profil
                    </a>
                    <a class=\"nav-link\" href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"> <i class=\"icofont-logout icon\"></i> Se déconnecter</a>

                </div>
            </div>
            <div class=\"sb-sidenav-footer\">
            </div>
        </nav>
    </div>
    <div id=\"layoutSidenav_content\">

        <main>
            ";
        // line 175
        $this->displayBlock('main', $context, $blocks);
        // line 178
        echo "        </main>

        <footer class=\"py-4 bg-light mt-auto\">
            <div class=\"container-fluid\">
                <div class=\"d-flex align-items-center justify-content-between small\">
                    <div class=\"text-muted\">Copyright &copy; Ecole Privée Polytechnique de Sousse</div>
                    <div>
                        <a href=\"#\">Privacy Policy</a>
                        &middot;
                        <a href=\"#\">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Jquery -->
<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JQUERY/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Fontawesome -->
<script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/fontawesome/js/all.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- Custom Js -->
<script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/js/scripts.js"), "html", null, true);
        echo "\"></script>
<!-- Ajax Chart Js -->
<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Chart Js -->
<!-- Datatable Js -->
<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/dataTables/dataTables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/dataTables/dataTables/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/assets/demo/datatables-demo.js"), "html", null, true);
        echo "\"></script>
<!-- intlTelInput -->
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tel/js/intlTelInput.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tel/js/intlTelInput-jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/dropzone/min/dropzone.min.js"), "html", null, true);
        echo "\"></script>



<!-- hoasan template JS -->
<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("hoasan/vendor/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/loader/custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("hoasan/vendor/select2/js/select2.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery -->
<script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("hoasan/vendor/jquery/jquery-3.3.1.slim.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap core JavaScript-->
<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("hoasan/vendor/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>


";
        // line 227
        $this->displayBlock('javascripts', $context, $blocks);
        // line 229
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
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

    // line 63
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 64
        echo "        <style>
            .hr{
                height: 2px;
                width: 100%;
                color: white;
            }
            .logo{
                margin-right: 5%;
                margin-left: 20px;
            }

            .sb-sidenav-menu>.nav>.nav-link{
                color: white;
            }

            .sb-sidenav-menu>.nav>.nav-link:hover{
                background: #f7fcfb;
                color: #1f6e77;
                opacity: 0.8;
            }
            .icon{
                margin-right: 7px;
            }
        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 175
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 176
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 227
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/espace/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 227,  476 => 176,  466 => 175,  432 => 64,  422 => 63,  403 => 9,  391 => 229,  389 => 227,  383 => 224,  378 => 222,  373 => 220,  369 => 219,  365 => 218,  357 => 213,  353 => 212,  349 => 211,  344 => 209,  340 => 208,  336 => 207,  330 => 204,  325 => 202,  320 => 200,  315 => 198,  310 => 196,  306 => 195,  287 => 178,  285 => 175,  271 => 164,  264 => 160,  255 => 154,  248 => 150,  241 => 146,  234 => 142,  222 => 133,  217 => 131,  203 => 120,  198 => 118,  190 => 113,  182 => 108,  163 => 92,  158 => 89,  156 => 63,  151 => 61,  142 => 55,  130 => 46,  126 => 45,  111 => 33,  106 => 31,  101 => 29,  92 => 23,  87 => 21,  82 => 19,  77 => 17,  72 => 15,  67 => 13,  62 => 11,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"Askbootstrap\" />
    <meta name=\"author\" content=\"Askbootstrap\" />
    <title>{% block title %} Tableau de Bord{% endblock %}</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{  asset('css/comment.css') }}\">
    <!-- Favicon Icon -->
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('images/polytechniqueSousse.ico') }}\">
    <!-- Feather Icon-->
    <link href=\"{{ asset('espace/vendor/icons/feather.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Fontawesome Icon-->
    <link href=\"{{ asset('espace/vendor/fontawesome/css/fontawesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Bootstrap Css -->
    <link href=\"{{ asset('espace/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Custom Css -->
    <link href=\"{{ asset('espace/css/styles.css') }}\" rel=\"stylesheet\" />
    <!-- Datatables css -->
    <link href=\"{{ asset('espace/vendor/dataTables/dataTables/css/dataTables.bootstrap4.min.css') }}\" rel=\"stylesheet\">

    <!--link of hoasan template (cour)-->

    <!-- Bootstrap core CSS-->
    <!-- Font Awesome-->
    <link href=\"{{ asset('hoasan/vendor/fontawesome/css/all.min.css') }}\" rel=\"stylesheet\">
    <!-- Font Awesome-->
    <link href=\"{{ asset('hoasan/vendor/icofont/icofont.min.css') }}\" rel=\"stylesheet\">
    <!-- Select2 CSS-->
    <link href=\"{{ asset('hoasan/vendor/select2/css/select2.min.css') }}\" rel=\"stylesheet\">
    <!-- Custom styles for this template-->






   
    <!--inscription formulaire-->
    
    <!-- Icons font CSS-->
    <link href=\"{{ asset('inscription/vendor/mdi-font/css/material-design-iconic-font.min.css') }}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('inscription/vendor/font-awesome-4.7/css/font-awesome.min.css') }}\" rel=\"stylesheet\" media=\"all\">
    <!-- Font special for pages-->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i\" rel=\"stylesheet\">

    <!-- Vendor CSS-->
    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

\t<link rel=\"stylesheet\" href=\"{{ asset('calendrier/css/style.css') }}\">


    <!-- Main CSS-->
    

    <link href=\"{{ asset('vendor/tel/css/intlTelInput.css') }}\" rel=\"stylesheet\">

    {% block css %}
        <style>
            .hr{
                height: 2px;
                width: 100%;
                color: white;
            }
            .logo{
                margin-right: 5%;
                margin-left: 20px;
            }

            .sb-sidenav-menu>.nav>.nav-link{
                color: white;
            }

            .sb-sidenav-menu>.nav>.nav-link:hover{
                background: #f7fcfb;
                color: #1f6e77;
                opacity: 0.8;
            }
            .icon{
                margin-right: 7px;
            }
        </style>
    {% endblock %}
</head>
<body class=\"sb-nav-fixed\">
<nav class=\"sb-topnav navbar navbar-expand navbar-light bg-white shadow-sm\">
    <img alt=\"logo\" class=\"logo\" src=\"{{ asset('images/avatars/logo-poly.png') }}\" width=\"180px\" style=\"border: none;\">
    <button class=\"btn btn-link btn-sm order-1 order-lg-0\" id=\"sidebarToggle\" href=\"#\"><i class=\"fas fa-bars\"></i></button>

    <!-- Navbar-->
    <span class=\"ml-auto\"></span>
    <ul class=\"navbar-nav ml-auto  ml-md-0\">

        <!-- Nav Item - User Information -->
        <li class=\"nav-item dropdown no-arrow ml-1 osahan-profile-dropdown\">
            <a class=\"nav-link dropdown-toggle pr-0\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"feather-settings\" style=\"font-size: 20px;color:green;\"></span>
            </a>
            <!-- Dropdown - User Information -->
            <div class=\"dropdown-menu dropdown-menu-right shadow-sm\">
                <div class=\"p-3 d-flex align-items-center\">
                    <div class=\"dropdown-list-image mr-3\">
                        <img class=\"mb-3 rounded-pill shadow-sm mt-1\"  width=\"50%\" src=\"{{ asset('images/avatars/'~app.user.avatar )}}\"
                             alt=\"gurdeep singh osahan\">
                        <div class=\"status-indicator bg-success\"></div>
                    </div>
                    <div class=\"font-weight-bold\">
                        <div class=\"text-truncate\">{{ app.user.name }}</div>
                        <div class=\"small text-gray-500\">Etudiant</div>
                    </div>
                </div>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"{{ path('etudiant_profil') }}\"><i class=\"feather-settings\"></i> Account Settings</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\"><i class=\"feather-log-out\"></i> Logout</a>
            </div>
        </li>
    </ul>
</nav>
<div id=\"layoutSidenav\">
    <div id=\"layoutSidenav_nav\">
        <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
            <div class=\"sb-sidenav-menu\">
                <div class=\"nav\">
                    <div class=\"sb-sidenav-menu-heading\">
                        <div style=\"margin-top: -15px;\"><center><img class=\"mb-3 rounded-pill shadow-sm mt-1\"  width=\"50%\" src=\"{{ asset('images/avatars/'~app.user.avatar )}}\"
                             alt=\"gurdeep singh osahan\"></center></div>
                        <p style=\"width: 100%;text-align: center;color: white;margin-top: -15px;\">{{ app.user.name }}</p>

                    </div>
                    <div class=\"hr\"></div>
                    <a class=\"nav-link\" href=\"#\" >
                        <i class=\"feather-home icon\"></i>
                        Acceuil
                    </a>
                    
                    <a class=\"nav-link\" href=\"{{ path('mes_mentions') }}\">
                     <i class=\"feather-star icon\"></i>
                        Mes mentions
                    </a>
                    <a class=\"nav-link\" href=\"{{path('tableau_support')}}\">
                        <i class=\"feather-book icon\"></i>
                        Bibliothèque
                    </a>
                    <a class=\"nav-link\" href=\"{{path('agenda_etudiant')}}\">
                       <i class=\"feather-heart icon\"></i>
                        Agenda
                    </a>
                    <a class=\"nav-link\" href=\"{{ path('etudiant_bookstore') }}\">
                        <i class=\"feather-book-open icon\"></i>
                        Achat livre
                    </a>

                
                    <a class=\"nav-link\" href=\"{{ path('etudiant_profil') }}\">
                        <i class=\"feather-user icon\"></i>
                        Mon profil
                    </a>
                    <a class=\"nav-link\" href=\"{{ path('app_logout') }}\"> <i class=\"icofont-logout icon\"></i> Se déconnecter</a>

                </div>
            </div>
            <div class=\"sb-sidenav-footer\">
            </div>
        </nav>
    </div>
    <div id=\"layoutSidenav_content\">

        <main>
            {% block main %}

            {% endblock %}
        </main>

        <footer class=\"py-4 bg-light mt-auto\">
            <div class=\"container-fluid\">
                <div class=\"d-flex align-items-center justify-content-between small\">
                    <div class=\"text-muted\">Copyright &copy; Ecole Privée Polytechnique de Sousse</div>
                    <div>
                        <a href=\"#\">Privacy Policy</a>
                        &middot;
                        <a href=\"#\">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Jquery -->
<script src=\"{{ asset('JQUERY/jquery-1.11.3.min.js') }}\"></script>
<script src=\"{{ asset('espace/vendor/jquery/jquery.min.js') }}\"></script>
<!-- Fontawesome -->
<script src=\"{{ asset('espace/vendor/fontawesome/js/all.min.js') }}\"></script>
<!-- Bootstrap -->
<script src=\"{{ asset('espace/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<!-- Custom Js -->
<script src=\"{{ asset('espace/js/scripts.js') }}\"></script>
<!-- Ajax Chart Js -->
<script src=\"{{ asset('espace/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
<!-- Chart Js -->
<!-- Datatable Js -->
<script src=\"{{ asset('espace/vendor/dataTables/dataTables/js/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('espace/vendor/dataTables/dataTables/js/dataTables.bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('espace/assets/demo/datatables-demo.js') }}\"></script>
<!-- intlTelInput -->
<script src=\"{{ asset('vendor/tel/js/intlTelInput.js') }}\"></script>
<script src=\"{{ asset('vendor/tel/js/intlTelInput-jquery.js') }}\"></script>
<script src=\"{{ asset('vendor/dropzone/min/dropzone.min.js') }}\"></script>



<!-- hoasan template JS -->
<script src=\"{{ asset('hoasan/vendor/owl-carousel/owl.carousel.js') }}\"></script>
<script src=\"{{ asset('js/loader/custom.js') }}\"></script>
<script src=\"{{ asset('hoasan/vendor/select2/js/select2.js') }}\"></script>
<!-- jQuery -->
<script src=\"{{ asset('hoasan/vendor/jquery/jquery-3.3.1.slim.min.js') }}\"></script>
<!-- Bootstrap core JavaScript-->
<script src=\"{{ asset('hoasan/vendor/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>


{% block javascripts %}
{% endblock %}
</body>
</html>
", "etudiant/espace/base.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\etudiant\\espace\\base.html.twig");
    }
}
