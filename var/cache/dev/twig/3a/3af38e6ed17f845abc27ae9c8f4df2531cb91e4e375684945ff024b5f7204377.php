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

/* prof/dashboard/base.html.twig */
class __TwigTemplate_0a82390d6d3f8170088ac18dd545c7f276eca0b05c44dfe27b8c73919a0f0905 extends Template
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
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/dashboard/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/dashboard/base.html.twig"));

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
    <!-- Favicon Icon -->
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/polytechniqueSousse.ico"), "html", null, true);
        echo "\">
    <!-- Feather Icon-->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/icons/feather.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Fontawesome Icon-->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/fontawesome/css/fontawesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Bootstrap Css -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom Css -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- Datatables css -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/dataTables/dataTables/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
   
   
    <!--inscription formulaire-->
    
    <!-- Icons font CSS-->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("inscription/vendor/mdi-font/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("inscription/vendor/font-awesome-4.7/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <!-- Font special for pages-->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i\" rel=\"stylesheet\">

    <!-- Vendor CSS-->
    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap\" rel=\"stylesheet\">
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("calendrier/css/style.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("calendrier/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">

    <!-- Main CSS-->
    

    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tel/css/intlTelInput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- fullCalendar -->
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/calendrier/lib/main.css"), "html", null, true);
        echo "\">

    ";
        // line 45
        $this->displayBlock('css', $context, $blocks);
        // line 48
        echo "</head>
<body class=\"sb-nav-fixed\">
<style>
    .sb-sidenav-menu-heading{
        margin-bottom:-5px;
        margin-top: 10px;
    }
    .sb-txt{
        color: #dcd9d9;
        text-transform: capitalize;
        font-size:15px;
    }
    .hr{
        width:100%;
        height:1px;
        background-color: #e7e1e1;
        margin-bottom:8px;
    }
    .sb-sidenav-menu>.nav>.nav-link{
        color: white;
    }
    .sb-sidenav-menu>.nav>.nav-link:hover .sb-nav-link-icon{
        background-color: #ffffff;
        color: #1f6e77;
    }
</style>
<nav class=\"sb-topnav navbar navbar-expand navbar-light bg-white shadow-sm\">
    <a class=\"navbar-brand\" href=\"#\"><img alt=\"logo\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatars/logo-poly.png"), "html", null, true);
        echo "\" width=\"183px\"></a>
    <button class=\"btn btn-link btn-sm order-1 order-lg-0\" id=\"sidebarToggle\" href=\"#\"><i class=\"fas fa-bars\"></i></button>
    <!-- Navbar Search-->
    <span class=\"ml-auto\"></span>
    <!-- Navbar-->
    <ul class=\"navbar-nav ml-auto ml-md-0\">
        <!-- Nav Item - User Information -->
        <li class=\"nav-item dropdown no-arrow ml-1 osahan-profile-dropdown\">
            <a class=\"nav-link dropdown-toggle pr-0\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <img class=\"img-profile rounded-circle\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "avatar", [], "any", false, false, false, 84))), "html", null, true);
        echo "\" alt=\"...\">
            </a>
            <!-- Dropdown - User Information -->
            <div class=\"dropdown-menu dropdown-menu-right shadow-sm\">
                <div class=\"p-3 d-flex align-items-center\">
                    <div class=\"dropdown-list-image mr-3\">
                        <img class=\"rounded-circle\" width=\"40px\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "avatar", [], "any", false, false, false, 90))), "html", null, true);
        echo "\" alt=\"...\">
                        <div class=\"status-indicator bg-success\"></div>
                    </div>
                    <div class=\"font-weight-bold\">
                        <div class=\"text-truncate\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "name", [], "any", false, false, false, 94), "html", null, true);
        echo "</div>
                        <div class=\"small text-gray-500\">Professeur</div>
                    </div>
                </div>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_profil");
        echo "\"><i class=\"feather-edit\"></i> Mon Profil</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_logout");
        echo "\"><i class=\"feather-log-out\"></i>Deconnéxion</a>
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
                        <p class=\"sb-txt\"><img class=\"mb-3 rounded-pill shadow-sm mt-1\" width=\"40px\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "avatar", [], "any", false, false, false, 112))), "html", null, true);
        echo "\"  alt=\"admin\"><span> </span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "name", [], "any", false, false, false, 112), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"hr\"></div>
                    <a class=\"nav-link  btn\" href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_dashbord");
        echo "\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-home\"></i></div>
                        Tableau de bord
                    </a>
                    <a class=\"nav-link btn\" href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_profil");
        echo "\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-user\"></i></div>
                        Mon Profil
                    </a>
                    <a class=\"nav-link btn\" href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_mentions");
        echo "\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-graduation-cap\"></i></div>
                        Mes mentions
                    </a>
                    <a class=\"nav-link btn\" href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_bibliotheque");
        echo "\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-book-open\"></i></div>
                        Bibliothèque
                    </a>
                    <a class=\"nav-link btn\" href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_mes_agenda");
        echo "\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-clock\"></i></div>
                        Mon agenda
                    </a>
                    <a class=\"nav-link btn\" href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_logout");
        echo "\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-log-out\"></i></div>
                        Déconnexion
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div id=\"layoutSidenav_content\">

        <main>
            ";
        // line 146
        $this->displayBlock('main', $context, $blocks);
        // line 149
        echo "        </main>

        <footer class=\"py-4 bg-light mt-auto\">
            <div class=\"container-fluid\">
                <div class=\"d-flex align-items-center justify-content-between small\">
                    <div class=\"text-muted\">Copyright &copy; Ecole Privée Polytechnique de Sousse</div>
                    <div>
                        <a href=\"#\">Polytechnique Sousse ♥  </a>
                        &middot;
                        <a href=\"#\">Meryem &amp; Nour </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Jquery -->
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Fontawesome -->
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/fontawesome/js/all.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- Custom Js -->
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/js/scripts.js"), "html", null, true);
        echo "\"></script>
<!-- Ajax Chart Js -->
<!-- full calendar -->
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/calendrier/lib/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/calendrier/lib/locales/fr.js"), "html", null, true);
        echo "\"></script>
<!-- Chart Js -->
<!-- Datatable Js -->
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/dataTables/dataTables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/dataTables/dataTables/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/assets/demo/datatables-demo.js"), "html", null, true);
        echo "\"></script>
<!-- intlTelInput -->
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tel/js/intlTelInput.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tel/js/intlTelInput-jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/dropzone/min/dropzone.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 186
        $this->displayBlock('javascript', $context, $blocks);
        // line 188
        echo "</body>
</html>";
        
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

    // line 45
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 46
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 146
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 147
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 186
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
        return "prof/dashboard/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 186,  415 => 147,  405 => 146,  394 => 46,  384 => 45,  365 => 9,  354 => 188,  352 => 186,  348 => 185,  344 => 184,  340 => 183,  335 => 181,  331 => 180,  327 => 179,  321 => 176,  317 => 175,  311 => 172,  306 => 170,  301 => 168,  296 => 166,  277 => 149,  275 => 146,  261 => 135,  254 => 131,  247 => 127,  240 => 123,  233 => 119,  226 => 115,  218 => 112,  204 => 101,  199 => 99,  191 => 94,  184 => 90,  175 => 84,  163 => 75,  134 => 48,  132 => 45,  127 => 43,  122 => 41,  114 => 36,  110 => 35,  100 => 28,  96 => 27,  87 => 21,  82 => 19,  77 => 17,  72 => 15,  67 => 13,  62 => 11,  57 => 9,  47 => 1,);
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
   
   
    <!--inscription formulaire-->
    
    <!-- Icons font CSS-->
    <link href=\"{{ asset('inscription/vendor/mdi-font/css/material-design-iconic-font.min.css') }}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('inscription/vendor/font-awesome-4.7/css/font-awesome.min.css') }}\" rel=\"stylesheet\" media=\"all\">
    <!-- Font special for pages-->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i\" rel=\"stylesheet\">

    <!-- Vendor CSS-->
    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap\" rel=\"stylesheet\">
\t
\t<link rel=\"stylesheet\" href=\"{{ asset('calendrier/css/style.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('calendrier/css/bootstrap-datetimepicker.min.css') }}\">

    <!-- Main CSS-->
    

    <link href=\"{{ asset('vendor/tel/css/intlTelInput.css') }}\" rel=\"stylesheet\">
    <!-- fullCalendar -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/calendrier/lib/main.css') }}\">

    {% block css %}

    {% endblock %}
</head>
<body class=\"sb-nav-fixed\">
<style>
    .sb-sidenav-menu-heading{
        margin-bottom:-5px;
        margin-top: 10px;
    }
    .sb-txt{
        color: #dcd9d9;
        text-transform: capitalize;
        font-size:15px;
    }
    .hr{
        width:100%;
        height:1px;
        background-color: #e7e1e1;
        margin-bottom:8px;
    }
    .sb-sidenav-menu>.nav>.nav-link{
        color: white;
    }
    .sb-sidenav-menu>.nav>.nav-link:hover .sb-nav-link-icon{
        background-color: #ffffff;
        color: #1f6e77;
    }
</style>
<nav class=\"sb-topnav navbar navbar-expand navbar-light bg-white shadow-sm\">
    <a class=\"navbar-brand\" href=\"#\"><img alt=\"logo\" src=\"{{ asset('images/avatars/logo-poly.png') }}\" width=\"183px\"></a>
    <button class=\"btn btn-link btn-sm order-1 order-lg-0\" id=\"sidebarToggle\" href=\"#\"><i class=\"fas fa-bars\"></i></button>
    <!-- Navbar Search-->
    <span class=\"ml-auto\"></span>
    <!-- Navbar-->
    <ul class=\"navbar-nav ml-auto ml-md-0\">
        <!-- Nav Item - User Information -->
        <li class=\"nav-item dropdown no-arrow ml-1 osahan-profile-dropdown\">
            <a class=\"nav-link dropdown-toggle pr-0\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <img class=\"img-profile rounded-circle\" src=\"{{ asset('images/avatars/'~app.user.avatar )}}\" alt=\"...\">
            </a>
            <!-- Dropdown - User Information -->
            <div class=\"dropdown-menu dropdown-menu-right shadow-sm\">
                <div class=\"p-3 d-flex align-items-center\">
                    <div class=\"dropdown-list-image mr-3\">
                        <img class=\"rounded-circle\" width=\"40px\" src=\"{{ asset('images/avatars/'~app.user.avatar )}}\" alt=\"...\">
                        <div class=\"status-indicator bg-success\"></div>
                    </div>
                    <div class=\"font-weight-bold\">
                        <div class=\"text-truncate\">{{app.user.name}}</div>
                        <div class=\"small text-gray-500\">Professeur</div>
                    </div>
                </div>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"{{ path('prof_profil') }}\"><i class=\"feather-edit\"></i> Mon Profil</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"{{ path('prof_logout') }}\"><i class=\"feather-log-out\"></i>Deconnéxion</a>
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
                        <p class=\"sb-txt\"><img class=\"mb-3 rounded-pill shadow-sm mt-1\" width=\"40px\" src=\"{{ asset('images/avatars/'~app.user.avatar )}}\"  alt=\"admin\"><span> </span>{{ app.user.name }}</p>
                    </div>
                    <div class=\"hr\"></div>
                    <a class=\"nav-link  btn\" href=\"{{ path('prof_dashbord') }}\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-home\"></i></div>
                        Tableau de bord
                    </a>
                    <a class=\"nav-link btn\" href=\"{{ path('prof_profil') }}\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-user\"></i></div>
                        Mon Profil
                    </a>
                    <a class=\"nav-link btn\" href=\"{{ path('prof_mentions') }}\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-graduation-cap\"></i></div>
                        Mes mentions
                    </a>
                    <a class=\"nav-link btn\" href=\"{{ path('prof_bibliotheque') }}\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-book-open\"></i></div>
                        Bibliothèque
                    </a>
                    <a class=\"nav-link btn\" href=\"{{ path('prof_mes_agenda') }}\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-clock\"></i></div>
                        Mon agenda
                    </a>
                    <a class=\"nav-link btn\" href=\"{{ path('prof_logout') }}\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-log-out\"></i></div>
                        Déconnexion
                    </a>
                </div>
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
                        <a href=\"#\">Polytechnique Sousse ♥  </a>
                        &middot;
                        <a href=\"#\">Meryem &amp; Nour </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Jquery -->
<script src=\"{{ asset('espace/vendor/jquery/jquery.min.js') }}\"></script>
<!-- Fontawesome -->
<script src=\"{{ asset('espace/vendor/fontawesome/js/all.min.js') }}\"></script>
<!-- Bootstrap -->
<script src=\"{{ asset('espace/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<!-- Custom Js -->
<script src=\"{{ asset('espace/js/scripts.js') }}\"></script>
<!-- Ajax Chart Js -->
<!-- full calendar -->
<script src=\"{{ asset('vendor/calendrier/lib/main.js') }}\"></script>
<script src=\"{{ asset('vendor/calendrier/lib/locales/fr.js') }}\"></script>
<!-- Chart Js -->
<!-- Datatable Js -->
<script src=\"{{ asset('espace/vendor/dataTables/dataTables/js/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('espace/vendor/dataTables/dataTables/js/dataTables.bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('espace/assets/demo/datatables-demo.js') }}\"></script>
<!-- intlTelInput -->
<script src=\"{{ asset('vendor/tel/js/intlTelInput.js') }}\"></script>
<script src=\"{{ asset('vendor/tel/js/intlTelInput-jquery.js') }}\"></script>
<script src=\"{{ asset('vendor/dropzone/min/dropzone.min.js') }}\"></script>
{% block javascript %}
{% endblock %}
</body>
</html>", "prof/dashboard/base.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\prof\\dashboard\\base.html.twig");
    }
}
