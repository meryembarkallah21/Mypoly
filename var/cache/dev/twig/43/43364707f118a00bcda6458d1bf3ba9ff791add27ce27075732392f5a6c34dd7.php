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

/* admin/dashboard/base.html.twig */
class __TwigTemplate_3c29cb6ecccc288b1df8280c8ae2e12012a2c045fb2825a2fd450e9c13d4f9f2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/base.html.twig"));

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
    //icon
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/polytechniqueSousse.ico"), "html", null, true);
        echo "\">
   // css + awesome icons 
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/icons/feather.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/fontawesome/css/fontawesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
   
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

    <!-- fullcalendar CSS-->
    <link href='";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/calendrier/lib/main.css"), "html", null, true);
        echo "' rel='stylesheet' />
    

    <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tel/css/intlTelInput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        // line 46
        $this->displayBlock('css', $context, $blocks);
        // line 49
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
        background-color: #c3c2c2;
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
        // line 76
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
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "avatar", [], "any", false, false, false, 85))), "html", null, true);
        echo "\" alt=\"...\">
            </a>
            <!-- Dropdown - User Information -->
            <div class=\"dropdown-menu dropdown-menu-right shadow-sm\">
                <div class=\"p-3 d-flex align-items-center\">
                    <div class=\"dropdown-list-image mr-3\">
                        <img class=\"rounded-circle\" width=\"40px\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "avatar", [], "any", false, false, false, 91))), "html", null, true);
        echo "\" alt=\"...\">
                        <div class=\"status-indicator bg-success\"></div>
                    </div>
                    <div class=\"font-weight-bold\">
                        <div class=\"text-truncate\">";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true);
        echo "</div>
                        <div class=\"small text-gray-500\">Admin</div>
                    </div>
                </div>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile");
        echo "\"><i class=\"feather-edit\"></i> Mon Profil</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
        echo "\"><i class=\"feather-log-out\"></i>Deconnéxion</a>
            </div>
        </li>
    </ul>
</nav>
<div id=\"layoutSidenav\">
    <div id=\"layoutSidenav_nav\">
        ";
        // line 110
        echo "        <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
            <div class=\"sb-sidenav-menu\">
                <div class=\"nav\">
                    <div class=\"sb-sidenav-menu-heading\">
                        <p class=\"sb-txt\"><img class=\"mb-3 rounded-pill shadow-sm mt-1\" width=\"40px\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114), "avatar", [], "any", false, false, false, 114))), "html", null, true);
        echo "\"  alt=\"admin\"><span> </span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114), "name", [], "any", false, false, false, 114), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"hr\"></div>
                    <a class=\"nav-link btn\" href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-home\"></i></div>
                        Tableau de bord
                    </a>
                    <a class=\"nav-link btn\" href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile");
        echo "\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-user\"></i></div>
                        Mon Profil
                    </a>
                    <a class=\"nav-link btn\" href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametre");
        echo "\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-settings\"></i></div>
                        Paramètre
                    </a>
                    <a class=\"nav-link btn\" href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_admin_gestion_cours");
        echo "\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-briefcase\"></i></div>
                        Cours
                    </a>

                    <a class=\"nav-link btn\" href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_inscrire_index");
        echo "\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-edit-3\"></i></div>
                        Inscription
                    </a>
                    <a class=\"nav-link btn\" href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_agendas");
        echo "\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-calendar \"></i></div>
                        Agenda
                    </a>
                    <a class=\"nav-link btn\" href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bibliotheque_index");
        echo "\">
                        <div class=\"sb-nav-link-icon\"><i class=\" feather-book-open \"></i></div>
                        Bibliothèque
                    </a>

                    ";
        // line 151
        echo "                    <a class=\"nav-link btn\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_admin_index");
        echo "\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-package \"></i></div>
                        ADMIN
                    </a>
                    <a class=\"nav-link btn\" href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_prof_index");
        echo "\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-users\"></i></div>
                        PROF
                    </a>
                    <a class=\"nav-link btn\" href=\"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
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
        // line 169
        $this->displayBlock('main', $context, $blocks);
        // line 172
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
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Fontawesome -->
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/fontawesome/js/all.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- Custom Js -->
<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/js/scripts.js"), "html", null, true);
        echo "\"></script>
<!-- Ajax Chart Js -->
<!-- fullcalendar js-->
<script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/calendrier/lib/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/calendrier/lib/locales/fr.js"), "html", null, true);
        echo "\"></script>
<!-- Chart Js -->
<!-- Datatable Js -->
<script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/dataTables/dataTables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/vendor/dataTables/dataTables/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("espace/assets/demo/datatables-demo.js"), "html", null, true);
        echo "\"></script>
<!-- intlTelInput -->
<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tel/js/intlTelInput.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/tel/js/intlTelInput-jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/dropzone/min/dropzone.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 209
        $this->displayBlock('javascript', $context, $blocks);
        // line 211
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

        echo " Admin | Tableau de Bord";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 47
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 169
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 170
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 209
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
        return "admin/dashboard/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 209,  448 => 170,  438 => 169,  427 => 47,  417 => 46,  398 => 9,  387 => 211,  385 => 209,  381 => 208,  377 => 207,  373 => 206,  368 => 204,  364 => 203,  360 => 202,  354 => 199,  350 => 198,  344 => 195,  339 => 193,  334 => 191,  329 => 189,  310 => 172,  308 => 169,  295 => 159,  288 => 155,  280 => 151,  272 => 142,  265 => 138,  258 => 134,  250 => 129,  243 => 125,  236 => 121,  229 => 117,  221 => 114,  215 => 110,  205 => 102,  200 => 100,  192 => 95,  185 => 91,  176 => 85,  164 => 76,  135 => 49,  133 => 46,  128 => 44,  122 => 41,  114 => 36,  110 => 35,  100 => 28,  96 => 27,  87 => 21,  82 => 19,  77 => 17,  72 => 15,  67 => 13,  62 => 11,  57 => 9,  47 => 1,);
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
    <title>{% block title %} Admin | Tableau de Bord{% endblock %}</title>
    //icon
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('images/polytechniqueSousse.ico') }}\">
   // css + awesome icons 
    <link href=\"{{ asset('espace/vendor/icons/feather.css') }}\" rel=\"stylesheet\" type=\"text/css\">

    <link href=\"{{ asset('espace/vendor/fontawesome/css/fontawesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
   
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

    <!-- fullcalendar CSS-->
    <link href='{{ asset('vendor/calendrier/lib/main.css') }}' rel='stylesheet' />
    

    <link href=\"{{ asset('vendor/tel/css/intlTelInput.css') }}\" rel=\"stylesheet\">

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
        background-color: #c3c2c2;
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
                        <div class=\"small text-gray-500\">Admin</div>
                    </div>
                </div>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"{{ path('admin_profile') }}\"><i class=\"feather-edit\"></i> Mon Profil</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"{{ path('admin_logout') }}\"><i class=\"feather-log-out\"></i>Deconnéxion</a>
            </div>
        </li>
    </ul>
</nav>
<div id=\"layoutSidenav\">
    <div id=\"layoutSidenav_nav\">
        {#sb-sidenav-dark #}
        <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
            <div class=\"sb-sidenav-menu\">
                <div class=\"nav\">
                    <div class=\"sb-sidenav-menu-heading\">
                        <p class=\"sb-txt\"><img class=\"mb-3 rounded-pill shadow-sm mt-1\" width=\"40px\" src=\"{{ asset('images/avatars/'~app.user.avatar )}}\"  alt=\"admin\"><span> </span>{{ app.user.name }}</p>
                    </div>
                    <div class=\"hr\"></div>
                    <a class=\"nav-link btn\" href=\"{{ path('admin_dashboard') }}\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-home\"></i></div>
                        Tableau de bord
                    </a>
                    <a class=\"nav-link btn\" href=\"{{ path('admin_profile') }}\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-user\"></i></div>
                        Mon Profil
                    </a>
                    <a class=\"nav-link btn\" href=\"{{ path('parametre') }}\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-settings\"></i></div>
                        Paramètre
                    </a>
                    <a class=\"nav-link btn\" href=\"{{ path('index_admin_gestion_cours') }}\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-briefcase\"></i></div>
                        Cours
                    </a>

                    <a class=\"nav-link btn\" href=\"{{ path('admin_inscrire_index') }}\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-edit-3\"></i></div>
                        Inscription
                    </a>
                    <a class=\"nav-link btn\" href=\"{{ path('admin_agendas') }}\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-calendar \"></i></div>
                        Agenda
                    </a>
                    <a class=\"nav-link btn\" href=\"{{ path('admin_bibliotheque_index') }}\">
                        <div class=\"sb-nav-link-icon\"><i class=\" feather-book-open \"></i></div>
                        Bibliothèque
                    </a>

                    {#<a class=\"nav-link btn\" href=\"#\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-edit\"></i></div>
                        Note
                    </a>#}
                    <a class=\"nav-link btn\" href=\"{{ path('admin_admin_index') }}\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-package \"></i></div>
                        ADMIN
                    </a>
                    <a class=\"nav-link btn\" href=\"{{ path('admin_prof_index') }}\">
                        <div class=\"sb-nav-link-icon\"><i class=\"feather-users\"></i></div>
                        PROF
                    </a>
                    <a class=\"nav-link btn\" href=\"{{ path('admin_logout') }}\">
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
<!-- fullcalendar js-->
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
</html>", "admin/dashboard/base.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\admin\\dashboard\\base.html.twig");
    }
}
