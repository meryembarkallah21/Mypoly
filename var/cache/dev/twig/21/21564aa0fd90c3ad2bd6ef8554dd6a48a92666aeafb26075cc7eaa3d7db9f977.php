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

/* etudiant/espace/cours/tableau_support/tableau.html.twig */
class __TwigTemplate_1a09f1817d9ddf062b1fbc460201206d3e6edfa7c839af5e5cb76795e272a6ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "etudiant/espace/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/cours/tableau_support/tableau.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/cours/tableau_support/tableau.html.twig"));

        $this->parent = $this->loadTemplate("etudiant/espace/base.html.twig", "etudiant/espace/cours/tableau_support/tableau.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bibliothèque";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <style>
        .bt{
            display: inline-block;
            width: 150px;
            margin: 10px;
        }
        .head{
            margin-bottom:15px;
        }
         #description{
             width: 250px;
         }
        .tb{
            font-size: 12px;
        }
        #matiere{
            width: 350px;
        }
        #titre{
            width:200px;
        }
        #doc{
            width: 150px;
        }
        .bg-corrige{
            background-color: #bd2130;
        }
        .bg-admin{
            background-color: #0062cc;
        }
    </style>

    <!-- Content Header (Page header) -->
    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h2 class=\"m-0 text-dark text-black\">Bibliotheque </h2>
                </div><!-- /.col -->
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                        <li class=\"breadcrumb-item \"><a href=\"#\" class=\"text-info\">Tableau de Bord</a></li>
                        <li class=\"breadcrumb-item active\">bibliotheque</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class=\"card mb-4\">
        <div class=\"card-body\">

            <div class=\"head\">
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a href=\"#cours\" class=\"nav-link bt btn btn-info active\" role=\"tab\" data-toggle=\"tab\">Cours</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#sujet\" class=\"nav-link btn bt btn-warning\" role=\"tab\" data-toggle=\"tab\">Sujet d'éxamen</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#exercice\" class=\"nav-link btn bt btn-success\" role=\"tab\" data-toggle=\"tab\">Exercices</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#corrige\" class=\"nav-link btn bt btn-danger\" role=\"tab\" data-toggle=\"tab\">Corrigés</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#administration\" class=\"nav-link btn bt btn-primary\" role=\"tab\" data-toggle=\"tab\">Administration</a>
                    </li>
                </ul>
            </div>


            <div class=\"tab-content\">
                <div class=\"tab-pane active\" role=\"tabpanel\" id=\"cours\">

                    <div class=\"row justify-content-md-center\">
                        <div class=\"col-5\">
                            <div class=\"row\">

                                <div class=\"col-md-5\">
                                    <select class=\"form-control text-center\" id=\"search-column\">
                                        <option value=\"0\">mention</option>
                                        <option value=\"1\">niveau</option>
                                        <option value=\"2\">parcours</option>
                                        <option value=\"3\">semestre</option>
                                        <option value=\"4\">matière</option>
                                        <option selected value=\"6\">prof</option>
                                    </select>
                                </div>

                                <div class=\"col-md-7\">
                                    <input type=\"text\" class=\"form-control text-center\" id=\"search-by-column\" placeholder=\"rechercher par colonne\">
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-hover table-bordered\" id=\"dataTable\">
                            <thead>
                                <tr class=\"text-uppercase text-white bg-info\">
                                    <th>Mention</th>
                                    <th>Niveau</th>
                                    <th>Parcours</th>
                                    <th>Semestre</th>
                                    <th class=\"text-center\">Ec</th>
                                    <th class=\"text-center\">Documents</th>
                                    <th>Prof</th>
                                </tr>
                            </thead>
                            <tbody>

                            ";
        // line 123
        if ((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 123, $this->source); })())) {
            // line 124
            echo "                            ";
            $context["a"] = 0;
            // line 125
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ue"]) || array_key_exists("ue", $context) ? $context["ue"] : (function () { throw new RuntimeError('Variable "ue" does not exist.', 125, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 126
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["u"], "no", [], "any", false, false, false, 126));
                foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
                    // line 127
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 127, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["inscrire"]) {
                        // line 128
                        echo "
                                                    ";
                        // line 129
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 129), twig_get_attribute($this->env, $this->source, $context["u"], "mention", [], "any", false, false, false, 129)))) {
                            // line 130
                            echo "
                                                        ";
                            // line 131
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ec"], "cours", [], "any", false, false, false, 131));
                            foreach ($context['_seq'] as $context["key"] => $context["cours"]) {
                                // line 132
                                echo "                                                                ";
                                if ((twig_get_attribute($this->env, $this->source, $context["cours"], "status", [], "any", false, false, false, 132) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ec"], "ue", [], "any", false, false, false, 132), $context["u"])))) {
                                    // line 133
                                    echo "                                                                    <tr>
                                                                        <td>";
                                    // line 134
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 134), "code", [], "any", false, false, false, 134), "html", null, true);
                                    echo "</td>
                                                                        <td>";
                                    // line 135
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 135), "cycle", [], "any", false, false, false, 135), "html", null, true);
                                    echo "</td>
                                                                        <td>";
                                    // line 136
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscrire"], "parcours", [], "any", false, false, false, 136), "html", null, true);
                                    echo "</td>
                                                                        <td>
                                                                            ";
                                    // line 138
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "semestre", [], "any", false, false, false, 138), "html", null, true);
                                    echo "
                                                                        </td>
                                                                        <td>";
                                    // line 140
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ec"], "name", [], "any", false, false, false, 140), "html", null, true);
                                    echo "</td>
                                                                        <td style=\"width: 220px;\">
                                                                            <i data-toggle=\"modal\" data-target=\"#videoModal";
                                    // line 142
                                    echo twig_escape_filter($this->env, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 142, $this->source); })()), "html", null, true);
                                    echo "\"><button>vidéo <span class=\"fa fa-video text-info\"></span></button></i>
                                                                            <i data-toggle=\"modal\" data-target=\"#audioModal";
                                    // line 143
                                    echo twig_escape_filter($this->env, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 143, $this->source); })()), "html", null, true);
                                    echo "\"><button>audio <span class=\"fa fa-file-audio text-success\"></span></button></i>
                                                                            <i data-toggle=\"modal\" data-target=\"#pdfModal";
                                    // line 144
                                    echo twig_escape_filter($this->env, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 144, $this->source); })()), "html", null, true);
                                    echo "\"><button>pdf <span class=\"fa fa-file-pdf text-danger\"></span> </button></i>


                                                                            <div id=\"videoModal";
                                    // line 147
                                    echo twig_escape_filter($this->env, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 147, $this->source); })()), "html", null, true);
                                    echo "\" class=\"modal fade\" role=\"dialog\">
                                                                                <div class=\"modal-dialog\">
                                                                                    <div class=\"modal-content\">
                                                                                        <div class=\"modal-header bg-warning\">
                                                                                            <h4 class=\"modal-title\">liste des vidéos</h4>
                                                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                                                <span aria-hidden=\"true\">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class=\"row\">
                                                                                            <div class=\"col-md-12\">
                                                                                                ";
                                    // line 158
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cours"], "video", [], "any", false, false, false, 158));
                                    $context['loop'] = [
                                      'parent' => $context['_parent'],
                                      'index0' => 0,
                                      'index'  => 1,
                                      'first'  => true,
                                    ];
                                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                                        $length = count($context['_seq']);
                                        $context['loop']['revindex0'] = $length - 1;
                                        $context['loop']['revindex'] = $length;
                                        $context['loop']['length'] = $length;
                                        $context['loop']['last'] = 1 === $length;
                                    }
                                    foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                                        // line 159
                                        echo "                                                                                                    <div class=\"row card-header\">
                                                                                                        <div class=\"col-md-5\">";
                                        // line 160
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "title", [], "any", false, false, false, 160), "html", null, true);
                                        echo " :</div>
                                                                                                        <div class=\"col-md-7\">
                                                                                                            <iframe class=\"myIframe\" width=\"90%\" frameborder=\"0\" allowfullscreen></iframe>
                                                                                                            <script type=\"text/javascript\">
                                                                                                                var url = \"";
                                        // line 164
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "lienUrl", [], "any", false, false, false, 164), "html", null, true);
                                        echo "\";
                                                                                                                var id = url.split(\"?v=\")[1]; //sGbxmsDFVnE

                                                                                                                var embedlink = \"http://www.youtube.com/embed/\" + id;

                                                                                                                var ytube1 = document.getElementsByClassName(\"myIframe\");

                                                                                                                ytube1[";
                                        // line 171
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 171), "html", null, true);
                                        echo "].src = embedlink;
                                                                                                            </script>
                                                                                                            <br>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                ";
                                        ++$context['loop']['index0'];
                                        ++$context['loop']['index'];
                                        $context['loop']['first'] = false;
                                        if (isset($context['loop']['length'])) {
                                            --$context['loop']['revindex0'];
                                            --$context['loop']['revindex'];
                                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                                        }
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 177
                                    echo "                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div id=\"audioModal";
                                    // line 183
                                    echo twig_escape_filter($this->env, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 183, $this->source); })()), "html", null, true);
                                    echo "\" class=\"modal fade\" role=\"dialog\">
                                                                                <div class=\"modal-dialog\">
                                                                                    <div class=\"modal-content\">
                                                                                        <div class=\"modal-header bg-warning\">
                                                                                            <h4 class=\"modal-title\">liste des audios</h4>
                                                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                                                <span aria-hidden=\"true\">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class=\"row\">
                                                                                            <div class=\"col-md-12\">
                                                                                                ";
                                    // line 194
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cours"], "audio", [], "any", false, false, false, 194));
                                    foreach ($context['_seq'] as $context["_key"] => $context["audio"]) {
                                        // line 195
                                        echo "
                                                                                                            <div class=\"row card-header\">
                                                                                                                <div class=\"col-md-4\">";
                                        // line 197
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["audio"], "title", [], "any", false, false, false, 197), "html", null, true);
                                        echo " :</div>
                                                                                                                <div class=\"col-md-8\">
                                                                                                                    <audio title=\"";
                                        // line 199
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["audio"], "title", [], "any", false, false, false, 199), "html", null, true);
                                        echo "\" preload=\"auto\" controls width=\"50%\" class=\"center-block\" >
                                                                                                                        <source src=\"";
                                        // line 200
                                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/fichier_audio/" . twig_get_attribute($this->env, $this->source, $context["audio"], "fichier", [], "any", false, false, false, 200))), "html", null, true);
                                        echo "\" type=\"video/ogg\">
                                                                                                                        <p>";
                                        // line 201
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["audio"], "title", [], "any", false, false, false, 201), "html", null, true);
                                        echo "</p>
                                                                                                                    </audio>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audio'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 207
                                    echo "                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div id=\"pdfModal";
                                    // line 214
                                    echo twig_escape_filter($this->env, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 214, $this->source); })()), "html", null, true);
                                    echo "\" class=\"modal fade\" role=\"dialog\">
                                                                                <div class=\"modal-dialog\">
                                                                                    <div class=\"modal-content\">
                                                                                        <div class=\"modal-header bg-warning\">
                                                                                            <h4 class=\"modal-title\">liste des pdf</h4>
                                                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                                                <span aria-hidden=\"true\">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        ";
                                    // line 223
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cours"], "fichierSupport", [], "any", false, false, false, 223));
                                    foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
                                        // line 224
                                        echo "
                                                                                                    <div class=\"row card-header\">
                                                                                                        <div class=\"col-md-6\">";
                                        // line 226
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fichier"], "title", [], "any", false, false, false, 226), "html", null, true);
                                        echo " :</div>
                                                                                                        <div class=\"col-md-6\">
                                                                                                            <a href=\"";
                                        // line 228
                                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/fichier_support/" . twig_get_attribute($this->env, $this->source, $context["fichier"], "fichier", [], "any", false, false, false, 228))), "html", null, true);
                                        echo "\" class=\"btn align-items-center btn-outline-primary btn-sm rounded lien\">
                                                                                                                ( télécharger le pdf )      <span class=\"fa fa-file-pdf text-danger\"></span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>

                                                                                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fichier'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 235
                                    echo "                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td>";
                                    // line 240
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cours"], "ec", [], "any", false, false, false, 240), "prof", [], "any", false, false, false, 240), "html", null, true);
                                    echo "</td>

                                                                    </tr>
                                                                ";
                                }
                                // line 244
                                echo "                                                            ";
                                $context["a"] = ((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 244, $this->source); })()) + 1);
                                // line 245
                                echo "                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['key'], $context['cours'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 246
                            echo "                                                    ";
                        }
                        // line 247
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrire'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 248
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 249
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "
                            ";
        } else {
            // line 252
            echo "                                        <p class=\"text-center\">Veuillez vous incrire d'abord pour pouvoir consulter votre bibliothèque , <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mention");
            echo "\">s'inscrire</a></p>
                            ";
        }
        // line 254
        echo "
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class=\"tab-pane \" role=\"tabpanel\" id=\"sujet\">

                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-hover table-bordered\" id=\"sujet-dataTable\">
                            <thead>
                                <tr class=\"text-center text-white tb bg-warning\">
                                    <th>Mention</th>
                                    <th>Niveau</th>
                                    <th>Parcours</th>
                                    <th>Semestre</th>
                                    <th>Ec</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Documents</th>
                                </tr>
                            </thead>


                            <tbody>
                                ";
        // line 279
        if ((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 279, $this->source); })())) {
            // line 280
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bibliotheques"]) || array_key_exists("bibliotheques", $context) ? $context["bibliotheques"] : (function () { throw new RuntimeError('Variable "bibliotheques" does not exist.', 280, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["biblio"]) {
                // line 281
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 281, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["inscrire"]) {
                    // line 282
                    echo "                                            ";
                    if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 282), twig_get_attribute($this->env, $this->source, $context["biblio"], "mention", [], "any", false, false, false, 282))) && twig_get_attribute($this->env, $this->source, $context["biblio"], "status", [], "any", false, false, false, 282)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["biblio"], "type", [], "any", false, false, false, 282), "Sujet d'examen")))) {
                        // line 283
                        echo "                                                <tr class=\"text-center\">
                                                    <td id=\"mention\">";
                        // line 284
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["biblio"], "mention", [], "any", false, false, false, 284), "code", [], "any", false, false, false, 284), "html", null, true);
                        echo "</td>
                                                    <td id=\"niveau\">";
                        // line 285
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 285), "cycle", [], "any", false, false, false, 285), "html", null, true);
                        echo "</td>
                                                    <td id=\"parcours\">";
                        // line 286
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 286), "parcours", [], "any", false, false, false, 286), "html", null, true);
                        echo "</td>
                                                    <td id=\"semestre\">";
                        // line 287
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["biblio"], "semestre", [], "any", false, false, false, 287), "html", null, true);
                        echo "</td>
                                                    <td id=\"matiere\">";
                        // line 288
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["biblio"], "ec", [], "any", false, false, false, 288), "name", [], "any", false, false, false, 288), "html", null, true);
                        echo "</td>
                                                    <td id=\"titre\">";
                        // line 289
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["biblio"], "title", [], "any", false, false, false, 289), "html", null, true);
                        echo "</td>
                                                    <td id=\"description\">";
                        // line 290
                        echo twig_get_attribute($this->env, $this->source, $context["biblio"], "description", [], "any", false, false, false, 290);
                        echo "</td>
                                                    <td id=\"doc\">
                                                    ";
                        // line 292
                        if (twig_get_attribute($this->env, $this->source, $context["biblio"], "fichier", [], "any", false, false, false, 292)) {
                            // line 293
                            echo "                                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/fichier_bibliotheque/" . twig_get_attribute($this->env, $this->source, $context["biblio"], "fichier", [], "any", false, false, false, 293))), "html", null, true);
                            echo "\" class=\"btn align-items-center btn-outline-info btn-sm rounded lien\">
                                                            télécharger <span class=\"fa fa-download\"></span>
                                                        </a>
                                                    ";
                        } else {
                            // line 297
                            echo "                                                        <p class=\"text-center\">Pas de document</p>
                                                    ";
                        }
                        // line 299
                        echo "                                                    </td>
                                                </tr>
                                            ";
                    }
                    // line 302
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 303
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biblio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 304
            echo "                                ";
        }
        // line 305
        echo "                            </tbody>

                        </table>
                    </div>
                </div>


                <div class=\"tab-pane \" role=\"tabpanel\" id=\"exercice\">

                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-hover table-bordered\" id=\"exercice-dataTable\">
                            <thead>
                                <tr class=\"text-center text-white tb bg-success\">
                                    <th>Mention</th>
                                    <th>Niveau</th>
                                    <th>Parcours</th>
                                    <th>Semestre</th>
                                    <th>Matière</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Documents</th>
                                </tr>
                            </thead>


                            <tbody>
                                ";
        // line 331
        if ((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 331, $this->source); })())) {
            // line 332
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bibliotheques"]) || array_key_exists("bibliotheques", $context) ? $context["bibliotheques"] : (function () { throw new RuntimeError('Variable "bibliotheques" does not exist.', 332, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["biblio"]) {
                // line 333
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 333, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["inscrire"]) {
                    // line 334
                    echo "                                            ";
                    if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 334), twig_get_attribute($this->env, $this->source, $context["biblio"], "mention", [], "any", false, false, false, 334))) && twig_get_attribute($this->env, $this->source, $context["biblio"], "status", [], "any", false, false, false, 334)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["biblio"], "type", [], "any", false, false, false, 334), "Exercice")))) {
                        // line 335
                        echo "                                                <tr class=\"text-center\">
                                                    <td id=\"mention\">";
                        // line 336
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["biblio"], "mention", [], "any", false, false, false, 336), "code", [], "any", false, false, false, 336), "html", null, true);
                        echo "</td>
                                                    <td id=\"niveau\">";
                        // line 337
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 337), "cycle", [], "any", false, false, false, 337), "html", null, true);
                        echo "</td>
                                                    <td id=\"parcours\">";
                        // line 338
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 338), "parcours", [], "any", false, false, false, 338), "html", null, true);
                        echo "</td>
                                                    <td id=\"semestre\">";
                        // line 339
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["biblio"], "semestre", [], "any", false, false, false, 339), "html", null, true);
                        echo "</td>
                                                    <td id=\"matiere\">";
                        // line 340
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["biblio"], "ec", [], "any", false, false, false, 340), "name", [], "any", false, false, false, 340), "html", null, true);
                        echo "</td>
                                                    <td id=\"titre\">";
                        // line 341
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["biblio"], "title", [], "any", false, false, false, 341), "html", null, true);
                        echo "</td>
                                                    <td id=\"description\">";
                        // line 342
                        echo twig_get_attribute($this->env, $this->source, $context["biblio"], "description", [], "any", false, false, false, 342);
                        echo "</td>
                                                    <td id=\"doc\">
                                                        ";
                        // line 344
                        if (twig_get_attribute($this->env, $this->source, $context["biblio"], "fichier", [], "any", false, false, false, 344)) {
                            // line 345
                            echo "                                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/fichier_bibliotheque/" . twig_get_attribute($this->env, $this->source, $context["biblio"], "fichier", [], "any", false, false, false, 345))), "html", null, true);
                            echo "\" class=\"btn align-items-center btn-outline-info btn-sm rounded lien\">
                                                                télécharger <span class=\"fa fa-download\"></span>
                                                            </a>
                                                        ";
                        } else {
                            // line 349
                            echo "                                                            <p class=\"text-center\">Pas de document</p>
                                                        ";
                        }
                        // line 351
                        echo "                                                    </td>
                                                </tr>
                                            ";
                    }
                    // line 354
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 355
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biblio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 356
            echo "                                ";
        }
        // line 357
        echo "                            </tbody>

                        </table>
                    </div>
                </div>



                <div class=\"tab-pane \" role=\"tabpanel\" id=\"corrige\">

                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-hover table-bordered\" id=\"corrige-dataTable\">
                            <thead>
                                <tr class=\"text-center text-white tb bg-corrige\">
                                    <th>Mention</th>
                                    <th>Niveau</th>
                                    <th>Parcours</th>
                                    <th>Semestre</th>
                                    <th>Ec</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Documents</th>
                                </tr>
                            </thead>


                            <tbody>
                                ";
        // line 384
        if ((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 384, $this->source); })())) {
            // line 385
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bibliotheques"]) || array_key_exists("bibliotheques", $context) ? $context["bibliotheques"] : (function () { throw new RuntimeError('Variable "bibliotheques" does not exist.', 385, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["biblio"]) {
                // line 386
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 386, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["inscrire"]) {
                    // line 387
                    echo "                                            ";
                    if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 387), twig_get_attribute($this->env, $this->source, $context["biblio"], "mention", [], "any", false, false, false, 387))) && twig_get_attribute($this->env, $this->source, $context["biblio"], "status", [], "any", false, false, false, 387)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["biblio"], "type", [], "any", false, false, false, 387), "Corrigé")))) {
                        // line 388
                        echo "                                                <tr class=\"text-center\">
                                                    <td id=\"mention\">";
                        // line 389
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["biblio"], "mention", [], "any", false, false, false, 389), "code", [], "any", false, false, false, 389), "html", null, true);
                        echo "</td>
                                                    <td id=\"niveau\">";
                        // line 390
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 390), "cycle", [], "any", false, false, false, 390), "html", null, true);
                        echo "</td>
                                                    <td id=\"parcours\">";
                        // line 391
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 391), "parcours", [], "any", false, false, false, 391), "html", null, true);
                        echo "</td>
                                                    <td id=\"semestre\">";
                        // line 392
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["biblio"], "semestre", [], "any", false, false, false, 392), "html", null, true);
                        echo "</td>
                                                    <td id=\"matiere\">";
                        // line 393
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["biblio"], "ec", [], "any", false, false, false, 393), "name", [], "any", false, false, false, 393), "html", null, true);
                        echo "</td>
                                                    <td id=\"titre\">";
                        // line 394
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["biblio"], "title", [], "any", false, false, false, 394), "html", null, true);
                        echo "</td>
                                                    <td id=\"description\">";
                        // line 395
                        echo twig_get_attribute($this->env, $this->source, $context["biblio"], "description", [], "any", false, false, false, 395);
                        echo "</td>
                                                    <td id=\"doc\">
                                                        ";
                        // line 397
                        if (twig_get_attribute($this->env, $this->source, $context["biblio"], "fichier", [], "any", false, false, false, 397)) {
                            // line 398
                            echo "                                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/fichier_bibliotheque/" . twig_get_attribute($this->env, $this->source, $context["biblio"], "fichier", [], "any", false, false, false, 398))), "html", null, true);
                            echo "\" class=\"btn align-items-center btn-outline-info btn-sm rounded lien\">
                                                                télécharger <span class=\"fa fa-download\"></span>
                                                            </a>
                                                        ";
                        } else {
                            // line 402
                            echo "                                                            <p class=\"text-center\">Pas de document</p>
                                                        ";
                        }
                        // line 404
                        echo "                                                    </td>
                                                </tr>
                                            ";
                    }
                    // line 407
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 408
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biblio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 409
            echo "                                ";
        }
        // line 410
        echo "                            </tbody>

                        </table>
                    </div>
                </div>

                <div class=\"tab-pane \" role=\"tabpanel\" id=\"administration\">

                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-hover table-bordered\" id=\"administration-dataTable\">
                            <thead>
                                <tr class=\"text-center text-white tb bg-admin\">
                                    <th>Mention</th>
                                    <th>Niveau</th>
                                    <th>Parcours</th>
                                    <th>Semestre</th>
                                    <th>Ec</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Documents</th>
                                </tr>
                            </thead>


                            <tbody>
                                ";
        // line 435
        if ((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 435, $this->source); })())) {
            // line 436
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bibliotheques"]) || array_key_exists("bibliotheques", $context) ? $context["bibliotheques"] : (function () { throw new RuntimeError('Variable "bibliotheques" does not exist.', 436, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["biblio"]) {
                // line 437
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["inscrires"]) || array_key_exists("inscrires", $context) ? $context["inscrires"] : (function () { throw new RuntimeError('Variable "inscrires" does not exist.', 437, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["inscrire"]) {
                    // line 438
                    echo "                                            ";
                    if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 438), twig_get_attribute($this->env, $this->source, $context["biblio"], "mention", [], "any", false, false, false, 438))) && twig_get_attribute($this->env, $this->source, $context["biblio"], "status", [], "any", false, false, false, 438)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["biblio"], "type", [], "any", false, false, false, 438), "Administration")))) {
                        // line 439
                        echo "                                                <tr class=\"text-center\">
                                                    <td id=\"mention\">";
                        // line 440
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["biblio"], "mention", [], "any", false, false, false, 440), "code", [], "any", false, false, false, 440), "html", null, true);
                        echo "</td>
                                                    <td id=\"niveau\">";
                        // line 441
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 441), "cycle", [], "any", false, false, false, 441), "html", null, true);
                        echo "</td>
                                                    <td id=\"parcours\">";
                        // line 442
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrire"], "mention", [], "any", false, false, false, 442), "parcours", [], "any", false, false, false, 442), "html", null, true);
                        echo "</td>
                                                    <td id=\"semestre\">";
                        // line 443
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["biblio"], "semestre", [], "any", false, false, false, 443), "html", null, true);
                        echo "</td>
                                                    <td id=\"matiere\">";
                        // line 444
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["biblio"], "ec", [], "any", false, false, false, 444), "name", [], "any", false, false, false, 444), "html", null, true);
                        echo "</td>
                                                    <td id=\"titre\">";
                        // line 445
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["biblio"], "title", [], "any", false, false, false, 445), "html", null, true);
                        echo "</td>
                                                    <td id=\"description\">";
                        // line 446
                        echo twig_get_attribute($this->env, $this->source, $context["biblio"], "description", [], "any", false, false, false, 446);
                        echo "</td>
                                                    <td id=\"doc\">
                                                        ";
                        // line 448
                        if (twig_get_attribute($this->env, $this->source, $context["biblio"], "fichier", [], "any", false, false, false, 448)) {
                            // line 449
                            echo "                                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/fichier_bibliotheque/" . twig_get_attribute($this->env, $this->source, $context["biblio"], "fichier", [], "any", false, false, false, 449))), "html", null, true);
                            echo "\" class=\"btn align-items-center btn-outline-info btn-sm rounded lien\">
                                                                télécharger <span class=\"fa fa-download\"></span>
                                                            </a>
                                                        ";
                        } else {
                            // line 453
                            echo "                                                            <p class=\"text-center\">Pas de document</p>
                                                        ";
                        }
                        // line 455
                        echo "                                                    </td>
                                                </tr>
                                            ";
                    }
                    // line 458
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 459
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biblio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 460
            echo "                                ";
        }
        // line 461
        echo "                            </tbody>

                        </table>
                    </div>

                </div>

            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 474
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 475
        echo "
    <script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JQUERY/dataTable/datatables.min.css"), "html", null, true);
        echo "\"></script>
    <script src=\"https://code.jquery.com/jquery-3.5.1.js\"></script>
    <script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JQUERY/dataTable/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdn.datatables.net/11.11.3/js/dataTables.bootstrap4.min.js\"></script>

    <script>

        \$(document).ready(function () {

            function searchByColumn(table){
                var defaultSearch = 6

                \$(document).on('change', '#search-column', function (){
                    defaultSearch = this.value;
                });

                \$(document).on('change', '#search-by-column', function (){
                    table.search('').column().search('').draw();
                    table.column(defaultSearch).search(this.value).draw();
                });
            }


            function searchOtherByColumn(table){
                var defaultOS = 5

                \$(document).on('change', '#other-search-column', function (){
                    defaultOS = this.value;
                });

                \$(document).on('change', '#other-search-by-column', function (){
                    table.search('').column().search('').draw();
                    table.column(defaultOS).search(this.value).draw();
                });
            }

            var table =  \$('#dataTable').DataTable({
                \"language\": {
                    \"decimal\": \"\",
                    \"emptyTable\": \"aucune donnée trouvée\",
                    \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                    \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                    \"infoFiltered\": \"\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                    \"loadingRecords\": \"Loading...\",
                    \"processing\": \"Processing...\",
                    \"search\": \"Recherche:\",
                    \"zeroRecords\": \"aucun élément trouvé\",
                    \"paginate\": {
                        \"first\": \"premier\",
                        \"last\": \"dernier\",
                        \"next\": \"Suivant\",
                        \"previous\": \"Précédant\"
                    }
                }
            });


            var sujet_table =  \$('#sujet-dataTable').DataTable({
                \"language\": {
                    \"decimal\": \"\",
                    \"emptyTable\": \"aucune donnée trouvée\",
                    \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                    \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                    \"infoFiltered\": \"\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                    \"loadingRecords\": \"Loading...\",
                    \"processing\": \"Processing...\",
                    \"search\": \"Recherche:\",
                    \"zeroRecords\": \"aucun élément trouvé\",
                    \"paginate\": {
                        \"first\": \"premier\",
                        \"last\": \"dernier\",
                        \"next\": \"Suivant\",
                        \"previous\": \"Précédant\"
                    }
                }
            });

            var exercice_table = \$('#exercice-dataTable').DataTable({
                \"language\": {
                    \"decimal\": \"\",
                    \"emptyTable\": \"aucune donnée trouvée\",
                    \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                    \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                    \"infoFiltered\": \"\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                    \"loadingRecords\": \"Loading...\",
                    \"processing\": \"Processing...\",
                    \"search\": \"Recherche:\",
                    \"zeroRecords\": \"aucun élément trouvé\",
                    \"paginate\": {
                        \"first\": \"premier\",
                        \"last\": \"dernier\",
                        \"next\": \"Suivant\",
                        \"previous\": \"Précédant\"
                    }
                }
            });

            var corrige_table =  \$('#corrige-dataTable').DataTable({
                \"language\": {
                    \"decimal\": \"\",
                    \"emptyTable\": \"aucune donnée trouvée\",
                    \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                    \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                    \"infoFiltered\": \"\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                    \"loadingRecords\": \"Loading...\",
                    \"processing\": \"Processing...\",
                    \"search\": \"Recherche:\",
                    \"zeroRecords\": \"aucun élément trouvé\",
                    \"paginate\": {
                        \"first\": \"premier\",
                        \"last\": \"dernier\",
                        \"next\": \"Suivant\",
                        \"previous\": \"Précédant\"
                    }
                }
            });

            var administration_table =  \$('#administration-dataTable').DataTable({
                \"language\": {
                    \"decimal\": \"\",
                    \"emptyTable\": \"aucune donnée trouvée\",
                    \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                    \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                    \"infoFiltered\": \"\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                    \"loadingRecords\": \"Loading...\",
                    \"processing\": \"Processing...\",
                    \"search\": \"Recherche:\",
                    \"zeroRecords\": \"aucun élément trouvé\",
                    \"paginate\": {
                        \"first\": \"premier\",
                        \"last\": \"dernier\",
                        \"next\": \"Suivant\",
                        \"previous\": \"Précédant\"
                    }
                }
            });

            searchByColumn(table);
            searchOtherByColumn(sujet_table);
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/espace/cours/tableau_support/tableau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  982 => 478,  977 => 476,  974 => 475,  964 => 474,  943 => 461,  940 => 460,  934 => 459,  928 => 458,  923 => 455,  919 => 453,  911 => 449,  909 => 448,  904 => 446,  900 => 445,  896 => 444,  892 => 443,  888 => 442,  884 => 441,  880 => 440,  877 => 439,  874 => 438,  869 => 437,  864 => 436,  862 => 435,  835 => 410,  832 => 409,  826 => 408,  820 => 407,  815 => 404,  811 => 402,  803 => 398,  801 => 397,  796 => 395,  792 => 394,  788 => 393,  784 => 392,  780 => 391,  776 => 390,  772 => 389,  769 => 388,  766 => 387,  761 => 386,  756 => 385,  754 => 384,  725 => 357,  722 => 356,  716 => 355,  710 => 354,  705 => 351,  701 => 349,  693 => 345,  691 => 344,  686 => 342,  682 => 341,  678 => 340,  674 => 339,  670 => 338,  666 => 337,  662 => 336,  659 => 335,  656 => 334,  651 => 333,  646 => 332,  644 => 331,  616 => 305,  613 => 304,  607 => 303,  601 => 302,  596 => 299,  592 => 297,  584 => 293,  582 => 292,  577 => 290,  573 => 289,  569 => 288,  565 => 287,  561 => 286,  557 => 285,  553 => 284,  550 => 283,  547 => 282,  542 => 281,  537 => 280,  535 => 279,  508 => 254,  502 => 252,  498 => 250,  492 => 249,  486 => 248,  480 => 247,  477 => 246,  471 => 245,  468 => 244,  461 => 240,  454 => 235,  441 => 228,  436 => 226,  432 => 224,  428 => 223,  416 => 214,  407 => 207,  395 => 201,  391 => 200,  387 => 199,  382 => 197,  378 => 195,  374 => 194,  360 => 183,  352 => 177,  332 => 171,  322 => 164,  315 => 160,  312 => 159,  295 => 158,  281 => 147,  275 => 144,  271 => 143,  267 => 142,  262 => 140,  257 => 138,  252 => 136,  248 => 135,  244 => 134,  241 => 133,  238 => 132,  234 => 131,  231 => 130,  229 => 129,  226 => 128,  221 => 127,  216 => 126,  211 => 125,  208 => 124,  206 => 123,  89 => 8,  79 => 7,  60 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'etudiant/espace/base.html.twig' %}



{% block title %}Bibliothèque{% endblock %}

{% block main %}
    <style>
        .bt{
            display: inline-block;
            width: 150px;
            margin: 10px;
        }
        .head{
            margin-bottom:15px;
        }
         #description{
             width: 250px;
         }
        .tb{
            font-size: 12px;
        }
        #matiere{
            width: 350px;
        }
        #titre{
            width:200px;
        }
        #doc{
            width: 150px;
        }
        .bg-corrige{
            background-color: #bd2130;
        }
        .bg-admin{
            background-color: #0062cc;
        }
    </style>

    <!-- Content Header (Page header) -->
    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h2 class=\"m-0 text-dark text-black\">Bibliotheque </h2>
                </div><!-- /.col -->
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                        <li class=\"breadcrumb-item \"><a href=\"#\" class=\"text-info\">Tableau de Bord</a></li>
                        <li class=\"breadcrumb-item active\">bibliotheque</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class=\"card mb-4\">
        <div class=\"card-body\">

            <div class=\"head\">
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a href=\"#cours\" class=\"nav-link bt btn btn-info active\" role=\"tab\" data-toggle=\"tab\">Cours</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#sujet\" class=\"nav-link btn bt btn-warning\" role=\"tab\" data-toggle=\"tab\">Sujet d'éxamen</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#exercice\" class=\"nav-link btn bt btn-success\" role=\"tab\" data-toggle=\"tab\">Exercices</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#corrige\" class=\"nav-link btn bt btn-danger\" role=\"tab\" data-toggle=\"tab\">Corrigés</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#administration\" class=\"nav-link btn bt btn-primary\" role=\"tab\" data-toggle=\"tab\">Administration</a>
                    </li>
                </ul>
            </div>


            <div class=\"tab-content\">
                <div class=\"tab-pane active\" role=\"tabpanel\" id=\"cours\">

                    <div class=\"row justify-content-md-center\">
                        <div class=\"col-5\">
                            <div class=\"row\">

                                <div class=\"col-md-5\">
                                    <select class=\"form-control text-center\" id=\"search-column\">
                                        <option value=\"0\">mention</option>
                                        <option value=\"1\">niveau</option>
                                        <option value=\"2\">parcours</option>
                                        <option value=\"3\">semestre</option>
                                        <option value=\"4\">matière</option>
                                        <option selected value=\"6\">prof</option>
                                    </select>
                                </div>

                                <div class=\"col-md-7\">
                                    <input type=\"text\" class=\"form-control text-center\" id=\"search-by-column\" placeholder=\"rechercher par colonne\">
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-hover table-bordered\" id=\"dataTable\">
                            <thead>
                                <tr class=\"text-uppercase text-white bg-info\">
                                    <th>Mention</th>
                                    <th>Niveau</th>
                                    <th>Parcours</th>
                                    <th>Semestre</th>
                                    <th class=\"text-center\">Ec</th>
                                    <th class=\"text-center\">Documents</th>
                                    <th>Prof</th>
                                </tr>
                            </thead>
                            <tbody>

                            {% if inscrires %}
                            {% set a = 0 %}
                                    {% for u in ue %}
                                        {% for ec in u.no %}
                                                {% for inscrire in inscrires %}

                                                    {% if inscrire.mention == u.mention  %}

                                                        {% for key, cours in ec.cours %}
                                                                {% if cours.status and ec.ue == u %}
                                                                    <tr>
                                                                        <td>{{ inscrire.mention.code }}</td>
                                                                        <td>{{ inscrire.mention.cycle }}</td>
                                                                        <td>{{ inscrire.parcours }}</td>
                                                                        <td>
                                                                            {{ u.semestre }}
                                                                        </td>
                                                                        <td>{{ ec.name }}</td>
                                                                        <td style=\"width: 220px;\">
                                                                            <i data-toggle=\"modal\" data-target=\"#videoModal{{ a }}\"><button>vidéo <span class=\"fa fa-video text-info\"></span></button></i>
                                                                            <i data-toggle=\"modal\" data-target=\"#audioModal{{ a }}\"><button>audio <span class=\"fa fa-file-audio text-success\"></span></button></i>
                                                                            <i data-toggle=\"modal\" data-target=\"#pdfModal{{ a }}\"><button>pdf <span class=\"fa fa-file-pdf text-danger\"></span> </button></i>


                                                                            <div id=\"videoModal{{ a }}\" class=\"modal fade\" role=\"dialog\">
                                                                                <div class=\"modal-dialog\">
                                                                                    <div class=\"modal-content\">
                                                                                        <div class=\"modal-header bg-warning\">
                                                                                            <h4 class=\"modal-title\">liste des vidéos</h4>
                                                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                                                <span aria-hidden=\"true\">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class=\"row\">
                                                                                            <div class=\"col-md-12\">
                                                                                                {% for video in cours.video %}
                                                                                                    <div class=\"row card-header\">
                                                                                                        <div class=\"col-md-5\">{{ video.title }} :</div>
                                                                                                        <div class=\"col-md-7\">
                                                                                                            <iframe class=\"myIframe\" width=\"90%\" frameborder=\"0\" allowfullscreen></iframe>
                                                                                                            <script type=\"text/javascript\">
                                                                                                                var url = \"{{ video.lienUrl }}\";
                                                                                                                var id = url.split(\"?v=\")[1]; //sGbxmsDFVnE

                                                                                                                var embedlink = \"http://www.youtube.com/embed/\" + id;

                                                                                                                var ytube1 = document.getElementsByClassName(\"myIframe\");

                                                                                                                ytube1[{{loop.index0}}].src = embedlink;
                                                                                                            </script>
                                                                                                            <br>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                {% endfor %}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div id=\"audioModal{{ a }}\" class=\"modal fade\" role=\"dialog\">
                                                                                <div class=\"modal-dialog\">
                                                                                    <div class=\"modal-content\">
                                                                                        <div class=\"modal-header bg-warning\">
                                                                                            <h4 class=\"modal-title\">liste des audios</h4>
                                                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                                                <span aria-hidden=\"true\">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class=\"row\">
                                                                                            <div class=\"col-md-12\">
                                                                                                {% for audio in cours.audio %}

                                                                                                            <div class=\"row card-header\">
                                                                                                                <div class=\"col-md-4\">{{ audio.title }} :</div>
                                                                                                                <div class=\"col-md-8\">
                                                                                                                    <audio title=\"{{ audio.title }}\" preload=\"auto\" controls width=\"50%\" class=\"center-block\" >
                                                                                                                        <source src=\"{{ asset('images/fichier_audio/' ~audio.fichier) }}\" type=\"video/ogg\">
                                                                                                                        <p>{{ audio.title }}</p>
                                                                                                                    </audio>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                {% endfor %}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div id=\"pdfModal{{ a }}\" class=\"modal fade\" role=\"dialog\">
                                                                                <div class=\"modal-dialog\">
                                                                                    <div class=\"modal-content\">
                                                                                        <div class=\"modal-header bg-warning\">
                                                                                            <h4 class=\"modal-title\">liste des pdf</h4>
                                                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                                                <span aria-hidden=\"true\">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        {% for fichier in cours.fichierSupport %}

                                                                                                    <div class=\"row card-header\">
                                                                                                        <div class=\"col-md-6\">{{ fichier.title }} :</div>
                                                                                                        <div class=\"col-md-6\">
                                                                                                            <a href=\"{{ asset('images/fichier_support/' ~fichier.fichier) }}\" class=\"btn align-items-center btn-outline-primary btn-sm rounded lien\">
                                                                                                                ( télécharger le pdf )      <span class=\"fa fa-file-pdf text-danger\"></span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>

                                                                                        {% endfor %}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td>{{ cours.ec.prof }}</td>

                                                                    </tr>
                                                                {% endif %}
                                                            {% set a = a+1 %}
                                                        {% endfor %}
                                                    {% endif %}
                                                {% endfor %}
                                        {% endfor %}
                                    {% endfor %}

                            {% else %}
                                        <p class=\"text-center\">Veuillez vous incrire d'abord pour pouvoir consulter votre bibliothèque , <a href=\"{{ path('mention') }}\">s'inscrire</a></p>
                            {% endif %}

                            </tbody>
                        </table>

                    </div>
                </div>
                <div class=\"tab-pane \" role=\"tabpanel\" id=\"sujet\">

                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-hover table-bordered\" id=\"sujet-dataTable\">
                            <thead>
                                <tr class=\"text-center text-white tb bg-warning\">
                                    <th>Mention</th>
                                    <th>Niveau</th>
                                    <th>Parcours</th>
                                    <th>Semestre</th>
                                    <th>Ec</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Documents</th>
                                </tr>
                            </thead>


                            <tbody>
                                {% if inscrires %}
                                    {% for biblio in bibliotheques %}
                                        {% for inscrire in inscrires %}
                                            {% if inscrire.mention == biblio.mention and biblio.status and biblio.type == \"Sujet d'examen\"  %}
                                                <tr class=\"text-center\">
                                                    <td id=\"mention\">{{ biblio.mention.code }}</td>
                                                    <td id=\"niveau\">{{ inscrire.mention.cycle }}</td>
                                                    <td id=\"parcours\">{{ inscrire.mention.parcours }}</td>
                                                    <td id=\"semestre\">{{ biblio.semestre }}</td>
                                                    <td id=\"matiere\">{{ biblio.ec.name }}</td>
                                                    <td id=\"titre\">{{ biblio.title }}</td>
                                                    <td id=\"description\">{{ biblio.description | raw }}</td>
                                                    <td id=\"doc\">
                                                    {% if biblio.fichier %}
                                                        <a href=\"{{ asset('images/fichier_bibliotheque/' ~biblio.fichier) }}\" class=\"btn align-items-center btn-outline-info btn-sm rounded lien\">
                                                            télécharger <span class=\"fa fa-download\"></span>
                                                        </a>
                                                    {% else %}
                                                        <p class=\"text-center\">Pas de document</p>
                                                    {% endif %}
                                                    </td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                    {% endfor %}
                                {% endif %}
                            </tbody>

                        </table>
                    </div>
                </div>


                <div class=\"tab-pane \" role=\"tabpanel\" id=\"exercice\">

                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-hover table-bordered\" id=\"exercice-dataTable\">
                            <thead>
                                <tr class=\"text-center text-white tb bg-success\">
                                    <th>Mention</th>
                                    <th>Niveau</th>
                                    <th>Parcours</th>
                                    <th>Semestre</th>
                                    <th>Matière</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Documents</th>
                                </tr>
                            </thead>


                            <tbody>
                                {% if inscrires %}
                                    {% for biblio in bibliotheques %}
                                        {% for inscrire in inscrires %}
                                            {% if inscrire.mention == biblio.mention and biblio.status and biblio.type == \"Exercice\"  %}
                                                <tr class=\"text-center\">
                                                    <td id=\"mention\">{{ biblio.mention.code }}</td>
                                                    <td id=\"niveau\">{{ inscrire.mention.cycle }}</td>
                                                    <td id=\"parcours\">{{ inscrire.mention.parcours }}</td>
                                                    <td id=\"semestre\">{{ biblio.semestre }}</td>
                                                    <td id=\"matiere\">{{ biblio.ec.name }}</td>
                                                    <td id=\"titre\">{{ biblio.title }}</td>
                                                    <td id=\"description\">{{ biblio.description | raw }}</td>
                                                    <td id=\"doc\">
                                                        {% if biblio.fichier %}
                                                            <a href=\"{{ asset('images/fichier_bibliotheque/' ~biblio.fichier) }}\" class=\"btn align-items-center btn-outline-info btn-sm rounded lien\">
                                                                télécharger <span class=\"fa fa-download\"></span>
                                                            </a>
                                                        {% else %}
                                                            <p class=\"text-center\">Pas de document</p>
                                                        {% endif %}
                                                    </td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                    {% endfor %}
                                {% endif %}
                            </tbody>

                        </table>
                    </div>
                </div>



                <div class=\"tab-pane \" role=\"tabpanel\" id=\"corrige\">

                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-hover table-bordered\" id=\"corrige-dataTable\">
                            <thead>
                                <tr class=\"text-center text-white tb bg-corrige\">
                                    <th>Mention</th>
                                    <th>Niveau</th>
                                    <th>Parcours</th>
                                    <th>Semestre</th>
                                    <th>Ec</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Documents</th>
                                </tr>
                            </thead>


                            <tbody>
                                {% if inscrires %}
                                    {% for biblio in bibliotheques %}
                                        {% for inscrire in inscrires %}
                                            {% if inscrire.mention == biblio.mention and biblio.status and biblio.type == \"Corrigé\"  %}
                                                <tr class=\"text-center\">
                                                    <td id=\"mention\">{{ biblio.mention.code }}</td>
                                                    <td id=\"niveau\">{{ inscrire.mention.cycle }}</td>
                                                    <td id=\"parcours\">{{ inscrire.mention.parcours }}</td>
                                                    <td id=\"semestre\">{{ biblio.semestre }}</td>
                                                    <td id=\"matiere\">{{ biblio.ec.name }}</td>
                                                    <td id=\"titre\">{{ biblio.title }}</td>
                                                    <td id=\"description\">{{ biblio.description | raw }}</td>
                                                    <td id=\"doc\">
                                                        {% if biblio.fichier %}
                                                            <a href=\"{{ asset('images/fichier_bibliotheque/' ~biblio.fichier) }}\" class=\"btn align-items-center btn-outline-info btn-sm rounded lien\">
                                                                télécharger <span class=\"fa fa-download\"></span>
                                                            </a>
                                                        {% else %}
                                                            <p class=\"text-center\">Pas de document</p>
                                                        {% endif %}
                                                    </td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                    {% endfor %}
                                {% endif %}
                            </tbody>

                        </table>
                    </div>
                </div>

                <div class=\"tab-pane \" role=\"tabpanel\" id=\"administration\">

                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-hover table-bordered\" id=\"administration-dataTable\">
                            <thead>
                                <tr class=\"text-center text-white tb bg-admin\">
                                    <th>Mention</th>
                                    <th>Niveau</th>
                                    <th>Parcours</th>
                                    <th>Semestre</th>
                                    <th>Ec</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Documents</th>
                                </tr>
                            </thead>


                            <tbody>
                                {% if inscrires %}
                                    {% for biblio in bibliotheques %}
                                        {% for inscrire in inscrires %}
                                            {% if inscrire.mention == biblio.mention and biblio.status and biblio.type == \"Administration\"  %}
                                                <tr class=\"text-center\">
                                                    <td id=\"mention\">{{ biblio.mention.code }}</td>
                                                    <td id=\"niveau\">{{ inscrire.mention.cycle }}</td>
                                                    <td id=\"parcours\">{{ inscrire.mention.parcours }}</td>
                                                    <td id=\"semestre\">{{ biblio.semestre }}</td>
                                                    <td id=\"matiere\">{{ biblio.ec.name }}</td>
                                                    <td id=\"titre\">{{ biblio.title }}</td>
                                                    <td id=\"description\">{{ biblio.description | raw }}</td>
                                                    <td id=\"doc\">
                                                        {% if biblio.fichier %}
                                                            <a href=\"{{ asset('images/fichier_bibliotheque/' ~biblio.fichier) }}\" class=\"btn align-items-center btn-outline-info btn-sm rounded lien\">
                                                                télécharger <span class=\"fa fa-download\"></span>
                                                            </a>
                                                        {% else %}
                                                            <p class=\"text-center\">Pas de document</p>
                                                        {% endif %}
                                                    </td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                    {% endfor %}
                                {% endif %}
                            </tbody>

                        </table>
                    </div>

                </div>

            </div>

        </div>
    </div>
{% endblock %}

{% block javascripts %}

    <script src=\"{{ asset('JQUERY/dataTable/datatables.min.css') }}\"></script>
    <script src=\"https://code.jquery.com/jquery-3.5.1.js\"></script>
    <script src=\"{{ asset('JQUERY/dataTable/datatables.min.js') }}\"></script>
    <script src=\"https://cdn.datatables.net/11.11.3/js/dataTables.bootstrap4.min.js\"></script>

    <script>

        \$(document).ready(function () {

            function searchByColumn(table){
                var defaultSearch = 6

                \$(document).on('change', '#search-column', function (){
                    defaultSearch = this.value;
                });

                \$(document).on('change', '#search-by-column', function (){
                    table.search('').column().search('').draw();
                    table.column(defaultSearch).search(this.value).draw();
                });
            }


            function searchOtherByColumn(table){
                var defaultOS = 5

                \$(document).on('change', '#other-search-column', function (){
                    defaultOS = this.value;
                });

                \$(document).on('change', '#other-search-by-column', function (){
                    table.search('').column().search('').draw();
                    table.column(defaultOS).search(this.value).draw();
                });
            }

            var table =  \$('#dataTable').DataTable({
                \"language\": {
                    \"decimal\": \"\",
                    \"emptyTable\": \"aucune donnée trouvée\",
                    \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                    \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                    \"infoFiltered\": \"\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                    \"loadingRecords\": \"Loading...\",
                    \"processing\": \"Processing...\",
                    \"search\": \"Recherche:\",
                    \"zeroRecords\": \"aucun élément trouvé\",
                    \"paginate\": {
                        \"first\": \"premier\",
                        \"last\": \"dernier\",
                        \"next\": \"Suivant\",
                        \"previous\": \"Précédant\"
                    }
                }
            });


            var sujet_table =  \$('#sujet-dataTable').DataTable({
                \"language\": {
                    \"decimal\": \"\",
                    \"emptyTable\": \"aucune donnée trouvée\",
                    \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                    \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                    \"infoFiltered\": \"\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                    \"loadingRecords\": \"Loading...\",
                    \"processing\": \"Processing...\",
                    \"search\": \"Recherche:\",
                    \"zeroRecords\": \"aucun élément trouvé\",
                    \"paginate\": {
                        \"first\": \"premier\",
                        \"last\": \"dernier\",
                        \"next\": \"Suivant\",
                        \"previous\": \"Précédant\"
                    }
                }
            });

            var exercice_table = \$('#exercice-dataTable').DataTable({
                \"language\": {
                    \"decimal\": \"\",
                    \"emptyTable\": \"aucune donnée trouvée\",
                    \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                    \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                    \"infoFiltered\": \"\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                    \"loadingRecords\": \"Loading...\",
                    \"processing\": \"Processing...\",
                    \"search\": \"Recherche:\",
                    \"zeroRecords\": \"aucun élément trouvé\",
                    \"paginate\": {
                        \"first\": \"premier\",
                        \"last\": \"dernier\",
                        \"next\": \"Suivant\",
                        \"previous\": \"Précédant\"
                    }
                }
            });

            var corrige_table =  \$('#corrige-dataTable').DataTable({
                \"language\": {
                    \"decimal\": \"\",
                    \"emptyTable\": \"aucune donnée trouvée\",
                    \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                    \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                    \"infoFiltered\": \"\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                    \"loadingRecords\": \"Loading...\",
                    \"processing\": \"Processing...\",
                    \"search\": \"Recherche:\",
                    \"zeroRecords\": \"aucun élément trouvé\",
                    \"paginate\": {
                        \"first\": \"premier\",
                        \"last\": \"dernier\",
                        \"next\": \"Suivant\",
                        \"previous\": \"Précédant\"
                    }
                }
            });

            var administration_table =  \$('#administration-dataTable').DataTable({
                \"language\": {
                    \"decimal\": \"\",
                    \"emptyTable\": \"aucune donnée trouvée\",
                    \"info\": \"affichage de _START_ à _END_ sur _TOTAL_ élément(s)\",
                    \"infoEmpty\": \"affichage 0 par 0 sur 0 élement(s) trouvé(s)\",
                    \"infoFiltered\": \"\",
                    \"infoPostFix\": \"\",
                    \"thousands\": \",\",
                    \"lengthMenu\": \"Nombre d'affichage _MENU_ \",
                    \"loadingRecords\": \"Loading...\",
                    \"processing\": \"Processing...\",
                    \"search\": \"Recherche:\",
                    \"zeroRecords\": \"aucun élément trouvé\",
                    \"paginate\": {
                        \"first\": \"premier\",
                        \"last\": \"dernier\",
                        \"next\": \"Suivant\",
                        \"previous\": \"Précédant\"
                    }
                }
            });

            searchByColumn(table);
            searchOtherByColumn(sujet_table);
        });

    </script>
{% endblock %}", "etudiant/espace/cours/tableau_support/tableau.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\etudiant\\espace\\cours\\tableau_support\\tableau.html.twig");
    }
}
