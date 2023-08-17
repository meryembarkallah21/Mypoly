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

/* prof/dashboard/dashboard.html.twig */
class __TwigTemplate_3ac179a2605b35fa6eeb40d9784d51b77fce455d2bbc5f35ede6875c7a950dc0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'main' => [$this, 'block_main'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "prof/dashboard/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/dashboard/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/dashboard/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("prof/dashboard/base.html.twig", "prof/dashboard/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
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

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <style>
        .bg-1{
            background-color: #e75f99;
        }
        .bg-2{
            background-color: #79cf17;
        }
        .bg-3{
            background-color:#40C4FF;
        }
        .bg-4{
            background-color: #be60c6;
        }
        .bg-1>.card-body>a ,.bg-1>.card-body>i {
            color:white;
        }
        .bg-2>.card-body>a {
            color:white;
        }
        .bg-3>.card-body>a , .bg-3>.card-body>i{
            color:white;
        }
        .bg-4>.card-body>a , .bg-4>.card-body>i{
            color:white;
        }
        .text-auther{
            color: #7e7d7d;
            font-weight: bold;
            text-shadow:1px 1px 1px 1px  #fff3cd;
        }
        .bg-white-2{
            background-color: #e7e7e7;
        }
        /*== start of code for tooltips ==*/
        .tool {
            cursor: help;
            position: relative;
        }


        /*== common styles for both parts of tool tip ==*/
        .tool::before,
        .tool::after {
            left: 50%;
            opacity: 0;
            position: absolute;
            z-index: -100;
        }
        .tool:hover::before,
        .tool:focus::before,
        .tool:hover::after,
        .tool:focus::after {
            opacity: 1;
            transform: scale(1) translateY(0);
            z-index: 100;
        }
        /*== pointer tip ==*/
        .tool::before {
            border-style: solid;
            border-width: 1em 0.75em 0 0.75em;
            border-color: #3E474F transparent transparent transparent;
            bottom: 100%;
            content: \"\";
            margin-left: -0.5em;
            transition: all .65s cubic-bezier(.84,-0.18,.31,1.26), opacity .65s .5s;
            transform:  scale(.6) translateY(-90%);
        }

        .tool:hover::before,
        .tool:focus::before {
            transition: all .65s cubic-bezier(.84,-0.18,.31,1.26) .2s;
        }


        /*== speech bubble ==*/
        .tool::after {
            background: #3E474F;
            border-radius: .25em;
            bottom: 180%;
            color: #EDEFF0;
            content: attr(data-tip);
            margin-left: -8.75em;
            margin-bottom:-42px;
            padding: 1em;
            transition: all .65s cubic-bezier(.84,-0.18,.31,1.26) .2s;
            transform:  scale(.6) translateY(50%);
            width: 17.5em;
        }

        .tool:hover::after,
        .tool:focus::after  {
            transition: all .65s cubic-bezier(.84,-0.18,.31,1.26);
        }

        @media (max-width: 760px) {
            .tool::after {
                font-size: .75em;
                margin-left: -5em;
                width: 10em;
            }
        }

    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Tableau de bord</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\">Tableau de bord</li>
        </ol>
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"mb-4 order-list col-md-12 mx-auto\">
                    <div class=\"gold-members p-4\">
                        <div class=\"row\">
                            <div class=\"col-xl-3\">
                                <div class=\"card bg-1\">
                                    <div class=\"card-body text-center\">
                                        <i class=\"feather-user\"></i>
                                        <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_profil");
        echo "\">Mon Profil</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3\">
                                <div class=\"card bg-2\">
                                    <div class=\"card-body text-center text-white\">
                                        <i class=\"fas fa-graduation-cap\"></i>
                                        <a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_mentions");
        echo "\">Mes Mentions</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3\">
                                <div class=\"card bg-3\">
                                    <div class=\"card-body text-center\">
                                        <i class=\"feather-book-open\"></i>
                                        <a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_bibliotheque");
        echo "\">Bibliothèque</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3\">
                                <div class=\"card bg-4\">
                                    <div class=\"card-body text-center\">
                                        <i class=\" feather-clock\"></i>
                                        <a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_mes_agenda");
        echo "\">Mon agenda</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid px-0\">
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"border-bottom\">
                    <div class=\"card-header\">
                        <i class=\"feather-message-square mr-1\"></i>
                        Commentaires
                    </div>
                    <div class=\"card-body osahan-chat p-0\">
                        <div class=\"row m-0\">
                            <div class=\"border-bottom  border-info col-lg-5 col-xl-4 px-0\">
                                <div class=\"osahan-chat-left\">
                                    <div class=\"position-relative border-info text-truncate p-3 border\">
                                        <span style=\"font-weight: bold; text-align: center;\">Ec</span>
                                    </div>
                                    <div class=\"osahan-chat-list\">
                                        ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ecs"]) || array_key_exists("ecs", $context) ? $context["ecs"] : (function () { throw new RuntimeError('Variable "ecs" does not exist.', 173, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
            // line 174
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 174, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
                // line 175
                echo "                                                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["cour"], "ec", [], "any", false, false, false, 175), $context["ec"]))) {
                    // line 176
                    echo "                                                    <div class=\"p-3 d-flex align-items-center border-bottom osahan-post-header overflow-hidden\">
                                                        <div class=\"font-weight-bold mr-1 overflow-hidden\">
                                                            <div class=\"text-truncate\">
                                                                ";
                    // line 179
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ec"], "name", [], "any", false, false, false, 179), "html", null, true);
                    echo "
                                                            </div>
                                                        </div>
                                                        <span class=\"ml-auto mb-auto\">
                                                        <div class=\"text-right text-muted pt-1 small\"><a href=\"";
                    // line 183
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_commenter", ["id" => twig_get_attribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 183)]), "html", null, true);
                    echo "\" class=\"btn btn-info rounded btn-sm\"><span class=\"fas fa-eye\"></span></a></div>
                                                       </span>
                                                    </div>
                                                ";
                }
                // line 187
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 189
            echo "                                            <div class=\"p-3 d-flex align-items-center border-bottom osahan-post-header overflow-hidden\">
                                                <div class=\"font-weight-bold mr-1 overflow-hidden\">
                                                    <div class=\"text-truncate\">Aucun élément constitutif
                                                    </div>
                                                </div>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-7 col-xl-8 px-0 \">
                                <div class=\"p-3 d-flex align-items-center  border border-info osahan-post-header\">
                                    <div class=\"font-weight-bold mr-1 overflow-hidden\">
                                         <div class=\"text-truncate\">Commentaires
                                        </div>
                                        <div class=\"small text-truncate overflow-hidden text-black-50\"></div>
                                    </div>
                                    ";
        // line 223
        echo "                                </div>
                                <div class=\"osahan-chat-box p-3  border-info border bg-white-2\">
                                    ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ecs"]) || array_key_exists("ecs", $context) ? $context["ecs"] : (function () { throw new RuntimeError('Variable "ecs" does not exist.', 225, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ec"]) {
            // line 226
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 226, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
                // line 227
                echo "                                            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["cour"], "ec", [], "any", false, false, false, 227), $context["ec"]))) {
                    // line 228
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 228, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                        // line 229
                        echo "                                                    ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["comment"], "cours", [], "any", false, false, false, 229), $context["cour"]))) {
                            // line 230
                            echo "                                                        <div class=\"text-center my-3\">
                                                            <span class=\"px-3 py-2 small bg-white-2 shadow-sm rounded\">";
                            // line 231
                            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "time", [], "any", false, false, false, 231), "medium", "", null, "gregorian", "en"), "html", null, true);
                            echo "</span>
                                                        </div>
                                                        <div class=\"d-flex align-items-center osahan-post-header\">
                                                            <div class=\"dropdown-list-image mr-3 mb-auto\"><img class=\"rounded-circle\" src=\"";
                            // line 234
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 234), "avatar", [], "any", false, false, false, 234))), "html", null, true);
                            echo "\" alt=\"\"></div>
                                                            <div class=\"mr-1\">
                                                                <div class=\"text-truncate text-auther h6 mb-3\">";
                            // line 236
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 236), "email", [], "any", false, false, false, 236), "html", null, true);
                            echo "
                                                                </div>
                                                                <p>";
                            // line 238
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 238), "html", null, true);
                            echo "</p>
                                                            </div>
                                                            <span class=\"ml-auto mb-auto\">
                                                                <div class=\"text-right text-muted pt-1 small\">";
                            // line 241
                            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatTime($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "time", [], "any", false, false, false, 241), "medium", "", null, "gregorian", "en"), "html", null, true);
                            echo "<br>
                                                                    ";
                            // line 242
                            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["comment"], "auteur", [], "any", false, false, false, 242), twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 242, $this->source); })()), "user", [], "any", false, false, false, 242)))) {
                                // line 243
                                echo "                                                                        <a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_suprimer_comment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 243)]), "html", null, true);
                                echo "\"class=\"btn btn-sm\"><span class=\"fas text-danger fa-trash-alt\"></span></a>
                                                                    ";
                            }
                            // line 245
                            echo "                                                                </div>
                                                            </span>
                                                        </div>
                                                    ";
                        }
                        // line 249
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 250
                    echo "                                            ";
                }
                // line 251
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "                                </div>
                                <div class=\"w-100 border-top border border-info tool\" data-tip=\"Veuillez choisir un élément constitutif.\" tabindex=\"1\">
                                    <textarea placeholder=\"Commenter…\" class=\"form-control border-0 p-3 shadow-none\" rows=\"2\" disabled></textarea>
                                </div>
                                <div class=\"p-3 d-flex align-items-center border border-info\">
                                    <div class=\"overflow-hidden\">
                                        ";
        // line 268
        echo "                                    </div>
                                    <span class=\"ml-auto\">
                                       <button type=\"button\" class=\"btn btn-primary btn-sm rounded\" disabled>
                                       <i class=\"feather-send\"></i> Envoyer
                                       </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 283
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
        return "prof/dashboard/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 283,  452 => 268,  444 => 253,  438 => 252,  432 => 251,  429 => 250,  423 => 249,  417 => 245,  411 => 243,  409 => 242,  405 => 241,  399 => 238,  394 => 236,  389 => 234,  383 => 231,  380 => 230,  377 => 229,  372 => 228,  369 => 227,  364 => 226,  360 => 225,  356 => 223,  344 => 196,  332 => 189,  327 => 188,  321 => 187,  314 => 183,  307 => 179,  302 => 176,  299 => 175,  294 => 174,  289 => 173,  260 => 147,  249 => 139,  238 => 131,  227 => 123,  108 => 6,  98 => 5,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'prof/dashboard/base.html.twig' %}
{% block title %} Tableau de Bord{% endblock %}
{% block css %}
{% endblock %}
{% block main %}
    <style>
        .bg-1{
            background-color: #e75f99;
        }
        .bg-2{
            background-color: #79cf17;
        }
        .bg-3{
            background-color:#40C4FF;
        }
        .bg-4{
            background-color: #be60c6;
        }
        .bg-1>.card-body>a ,.bg-1>.card-body>i {
            color:white;
        }
        .bg-2>.card-body>a {
            color:white;
        }
        .bg-3>.card-body>a , .bg-3>.card-body>i{
            color:white;
        }
        .bg-4>.card-body>a , .bg-4>.card-body>i{
            color:white;
        }
        .text-auther{
            color: #7e7d7d;
            font-weight: bold;
            text-shadow:1px 1px 1px 1px  #fff3cd;
        }
        .bg-white-2{
            background-color: #e7e7e7;
        }
        /*== start of code for tooltips ==*/
        .tool {
            cursor: help;
            position: relative;
        }


        /*== common styles for both parts of tool tip ==*/
        .tool::before,
        .tool::after {
            left: 50%;
            opacity: 0;
            position: absolute;
            z-index: -100;
        }
        .tool:hover::before,
        .tool:focus::before,
        .tool:hover::after,
        .tool:focus::after {
            opacity: 1;
            transform: scale(1) translateY(0);
            z-index: 100;
        }
        /*== pointer tip ==*/
        .tool::before {
            border-style: solid;
            border-width: 1em 0.75em 0 0.75em;
            border-color: #3E474F transparent transparent transparent;
            bottom: 100%;
            content: \"\";
            margin-left: -0.5em;
            transition: all .65s cubic-bezier(.84,-0.18,.31,1.26), opacity .65s .5s;
            transform:  scale(.6) translateY(-90%);
        }

        .tool:hover::before,
        .tool:focus::before {
            transition: all .65s cubic-bezier(.84,-0.18,.31,1.26) .2s;
        }


        /*== speech bubble ==*/
        .tool::after {
            background: #3E474F;
            border-radius: .25em;
            bottom: 180%;
            color: #EDEFF0;
            content: attr(data-tip);
            margin-left: -8.75em;
            margin-bottom:-42px;
            padding: 1em;
            transition: all .65s cubic-bezier(.84,-0.18,.31,1.26) .2s;
            transform:  scale(.6) translateY(50%);
            width: 17.5em;
        }

        .tool:hover::after,
        .tool:focus::after  {
            transition: all .65s cubic-bezier(.84,-0.18,.31,1.26);
        }

        @media (max-width: 760px) {
            .tool::after {
                font-size: .75em;
                margin-left: -5em;
                width: 10em;
            }
        }

    </style>
    <div class=\"container-fluid\">
        <h1 class=\"mt-4\">Tableau de bord</h1>
        <ol class=\"breadcrumb mb-4\">
            <li class=\"breadcrumb-item active\">Tableau de bord</li>
        </ol>
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"mb-4 order-list col-md-12 mx-auto\">
                    <div class=\"gold-members p-4\">
                        <div class=\"row\">
                            <div class=\"col-xl-3\">
                                <div class=\"card bg-1\">
                                    <div class=\"card-body text-center\">
                                        <i class=\"feather-user\"></i>
                                        <a href=\"{{ path('prof_profil') }}\">Mon Profil</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3\">
                                <div class=\"card bg-2\">
                                    <div class=\"card-body text-center text-white\">
                                        <i class=\"fas fa-graduation-cap\"></i>
                                        <a href=\"{{ path('prof_mentions') }}\">Mes Mentions</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3\">
                                <div class=\"card bg-3\">
                                    <div class=\"card-body text-center\">
                                        <i class=\"feather-book-open\"></i>
                                        <a href=\"{{ path('prof_bibliotheque') }}\">Bibliothèque</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3\">
                                <div class=\"card bg-4\">
                                    <div class=\"card-body text-center\">
                                        <i class=\" feather-clock\"></i>
                                        <a href=\"{{ path('prof_mes_agenda') }}\">Mon agenda</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid px-0\">
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"border-bottom\">
                    <div class=\"card-header\">
                        <i class=\"feather-message-square mr-1\"></i>
                        Commentaires
                    </div>
                    <div class=\"card-body osahan-chat p-0\">
                        <div class=\"row m-0\">
                            <div class=\"border-bottom  border-info col-lg-5 col-xl-4 px-0\">
                                <div class=\"osahan-chat-left\">
                                    <div class=\"position-relative border-info text-truncate p-3 border\">
                                        <span style=\"font-weight: bold; text-align: center;\">Ec</span>
                                    </div>
                                    <div class=\"osahan-chat-list\">
                                        {% for ec in ecs %}
                                            {% for cour in cours %}
                                                {% if cour.ec == ec %}
                                                    <div class=\"p-3 d-flex align-items-center border-bottom osahan-post-header overflow-hidden\">
                                                        <div class=\"font-weight-bold mr-1 overflow-hidden\">
                                                            <div class=\"text-truncate\">
                                                                {{ ec.name }}
                                                            </div>
                                                        </div>
                                                        <span class=\"ml-auto mb-auto\">
                                                        <div class=\"text-right text-muted pt-1 small\"><a href=\"{{path('prof_commenter',{'id':cour.id })}}\" class=\"btn btn-info rounded btn-sm\"><span class=\"fas fa-eye\"></span></a></div>
                                                       </span>
                                                    </div>
                                                {% endif %}
                                            {% endfor %}
                                        {% else %}
                                            <div class=\"p-3 d-flex align-items-center border-bottom osahan-post-header overflow-hidden\">
                                                <div class=\"font-weight-bold mr-1 overflow-hidden\">
                                                    <div class=\"text-truncate\">Aucun élément constitutif
                                                    </div>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-7 col-xl-8 px-0 \">
                                <div class=\"p-3 d-flex align-items-center  border border-info osahan-post-header\">
                                    <div class=\"font-weight-bold mr-1 overflow-hidden\">
                                         <div class=\"text-truncate\">Commentaires
                                        </div>
                                        <div class=\"small text-truncate overflow-hidden text-black-50\"></div>
                                    </div>
                                    {# <span class=\"ml-auto\">
                                          <button type=\"button\" class=\"btn btn-outline-primary btn-sm rounded\">
                                          <i class=\"feather-phone\"></i>
                                          </button>
                                          <button type=\"button\" class=\"btn btn-outline-primary btn-sm rounded\">
                                          <i class=\"feather-video\"></i>
                                          </button>
                                          <div class=\"btn-group\">
                                             <button type=\"button\" class=\"btn btn-outline-primary btn-sm rounded\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                             <i class=\"feather-more-vertical\"></i>
                                             </button>
                                             <div class=\"dropdown-menu dropdown-menu-right\">
                                                <button class=\"dropdown-item\" type=\"button\"><i class=\"feather-trash\"></i> Delete</button>
                                                <button class=\"dropdown-item\" type=\"button\"><i class=\"feather-x-circle\"></i> Turn Off</button>
                                             </div>
                                          </div>
                                       </span>#}
                                </div>
                                <div class=\"osahan-chat-box p-3  border-info border bg-white-2\">
                                    {% for ec in ecs  %}
                                        {% for cour in cours %}
                                            {% if cour.ec == ec %}
                                                {% for comment in commentaires %}
                                                    {% if comment.cours == cour %}
                                                        <div class=\"text-center my-3\">
                                                            <span class=\"px-3 py-2 small bg-white-2 shadow-sm rounded\">{{ comment.time|format_date(locale='en') }}</span>
                                                        </div>
                                                        <div class=\"d-flex align-items-center osahan-post-header\">
                                                            <div class=\"dropdown-list-image mr-3 mb-auto\"><img class=\"rounded-circle\" src=\"{{asset('images/avatars/'~comment.auteur.avatar)}}\" alt=\"\"></div>
                                                            <div class=\"mr-1\">
                                                                <div class=\"text-truncate text-auther h6 mb-3\">{{ comment.auteur.email }}
                                                                </div>
                                                                <p>{{ comment.contenu }}</p>
                                                            </div>
                                                            <span class=\"ml-auto mb-auto\">
                                                                <div class=\"text-right text-muted pt-1 small\">{{ comment.time|format_time(locale='en') }}<br>
                                                                    {% if comment.auteur == app.user %}
                                                                        <a href=\"{{ path('prof_suprimer_comment',{'id': comment.id }) }}\"class=\"btn btn-sm\"><span class=\"fas text-danger fa-trash-alt\"></span></a>
                                                                    {% endif %}
                                                                </div>
                                                            </span>
                                                        </div>
                                                    {% endif %}
                                                {% endfor %}
                                            {% endif %}
                                        {% endfor %}
                                    {% endfor %}
                                </div>
                                <div class=\"w-100 border-top border border-info tool\" data-tip=\"Veuillez choisir un élément constitutif.\" tabindex=\"1\">
                                    <textarea placeholder=\"Commenter…\" class=\"form-control border-0 p-3 shadow-none\" rows=\"2\" disabled></textarea>
                                </div>
                                <div class=\"p-3 d-flex align-items-center border border-info\">
                                    <div class=\"overflow-hidden\">
                                        {#  <button type=\"button\" class=\"btn btn-outline-primary btn-sm rounded\">
                                            <i class=\"feather-image\"></i>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-outline-primary btn-sm rounded\">
                                            <i class=\"feather-paperclip\"></i>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-outline-primary btn-sm rounded\">
                                            <i class=\"feather-camera\"></i>
                                        </button> #}
                                    </div>
                                    <span class=\"ml-auto\">
                                       <button type=\"button\" class=\"btn btn-primary btn-sm rounded\" disabled>
                                       <i class=\"feather-send\"></i> Envoyer
                                       </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascript %}
{% endblock %}
", "prof/dashboard/dashboard.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\prof\\dashboard\\dashboard.html.twig");
    }
}
