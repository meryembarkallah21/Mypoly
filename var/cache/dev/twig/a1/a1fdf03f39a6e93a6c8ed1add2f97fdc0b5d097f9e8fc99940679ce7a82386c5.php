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

/* etudiant/espace/bookstore/bookstore.html.twig */
class __TwigTemplate_84c706e8969afb671f3fda821a02a2bbb2500d2437fd882471559ee9d8e3629f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/bookstore/bookstore.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/bookstore/bookstore.html.twig"));

        $this->parent = $this->loadTemplate("etudiant/espace/base.html.twig", "etudiant/espace/bookstore/bookstore.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "BookStore";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "    <style>
        button{
            margin-bottom: 25px;
        }
        button:focus{
            background-color: #177198;
            color: white;
        }
        .dropdown-menu{
            width: 400px;
        }
        .panier{
            float: end;
            height: 30px;
        }

    </style>

            <div class=\"container-fluid\">
                <h1 class=\"mt-4\">BookStore</h1>
                <div class=\"row breadcrumb\">
                    <div class=\"col-md-3\">
                        <ol class=\"breadcrumb mb-4\">
                            <li class=\"breadcrumb-item \"><a href=\"#\" class=\"text-info\">Dashboard</a></li>
                            <li class=\"breadcrumb-item active\">Bookstore</li>
                        </ol>
                    </div>
                    <div class=\"col-md-7\"></div>
                    <div class=\"col-md-2\">
                        <ol class=\" mb-4\">
                            <li class=\"breadcrumb-item panier\">
                                <nav class=\"navbar navbar-expand-lg bg-transparent osahan-nav shadow-sm\">
                                    <div class=\"container\">
                                        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                                            <ul class=\"navbar-nav ml-auto\">
                                                <li class=\"nav-item dropdown dropdown-cart\">
                                                    <a class=\"nav-link text-primary dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                        <i class=\"text-primary fas fa-shopping-basket\"></i> Cart
                                                        <span class=\"badge badge-primary\">";
        // line 45
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 45, $this->source); })())), "html", null, true);
        echo "</span>
                                                    </a>
                                                    <div class=\"dropdown-menu dropdown-cart-top p-0 dropdown-menu-right shadow-sm border-0\">
                                                        <div class=\"p-4\">
                                                            <h3 class=\"mb-0\">Votre panier</h3>
                                                        </div>
                                                        ";
        // line 51
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 51, $this->source); })())), 0))) {
            // line 52
            echo "                                                            <div class=\"dropdown-cart-top-body border-top p-4\">

                                                                <table>
                                                                    <thead>
                                                                    <tr>
                                                                        <th>titre</th>
                                                                        <th width=\"60px\">prix</th>
                                                                        <th>action</th>
                                                                    </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                    ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 64, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 65
                echo "                                                                        <tr>
                                                                            <td><p class=\"mb-2\"><i class=\"icofont-ui-press text-success food-item\"></i> ";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "book", [], "any", false, false, false, 66), "titre", [], "any", false, false, false, 66), "html", null, true);
                echo "</p></td>
                                                                            <td>";
                // line 67
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "book", [], "any", false, false, false, 67), "prix", [], "any", false, false, false, 67);
                echo "</td>
                                                                            <td><a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "book", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm text-white\"><i class=\"fas fa-trash\"></i></a></td>
                                                                        </tr>
                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class=\"dropdown-cart-top-footer border-top p-4\">
                                                                <p class=\"mb-0 font-weight-bold text-secondary\">Total <span class=\"float-right text-dark\">";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 75, $this->source); })()), "html", null, true);
            echo " Ar</span></p>
                                                            </div>
                                                            <div class=\"dropdown-cart-top-footer border-top p-2\">
                                                                <a class=\"btn btn-success btn-block btn-lg\" href=\"checkout.html\"> Valider</a>
                                                            </div>
                                                        ";
        } else {
            // line 81
            echo "                                                            <p>panier vide</p>
                                                        ";
        }
        // line 83
        echo "                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>

                            </li>
                        </ol>

                    </div>
                </div>




                <div class=\"row\">
                    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 101
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["book"], "livre", [], "any", false, false, false, 101)) {
                // line 102
                echo "                            <div class=\"col-md-3 col-sm-6 mb-4 pb-2\">
                                <div class=\"list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm\">
                                    <div class=\"list-card-image\">
                                        <div class=\"favourite-heart text-white position-absolute\"><span class=\"badge badge-success\">";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "prix", [], "any", false, false, false, 105), "html", null, true);
                echo "</span></div>
                                        <div class=\"member-plan position-absolute\"><span class=\"badge badge-dark\">Promoted</span></div>
                                        <img src=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/photo_livre/" . twig_get_attribute($this->env, $this->source, $context["book"], "livre", [], "any", false, false, false, 107))), "html", null, true);
                echo "\" height=\"80%\" class=\"img-fluid item-img\">
                                    </div>
                                    <div class=\"button\">
                                        <center>
                                            <button><a class=\"text-info\" href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 111)]), "html", null, true);
                echo "\"><span class=\"fas fa-shopping-cart\"></span> Ajouter au panier</a></button>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 117
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
                </div>
            </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/espace/bookstore/bookstore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 118,  248 => 117,  239 => 111,  232 => 107,  227 => 105,  222 => 102,  219 => 101,  215 => 100,  196 => 83,  192 => 81,  183 => 75,  177 => 71,  168 => 68,  164 => 67,  160 => 66,  157 => 65,  153 => 64,  139 => 52,  137 => 51,  128 => 45,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'etudiant/espace/base.html.twig' %}


{% block title %}BookStore{% endblock %}

{% block main %}
    <style>
        button{
            margin-bottom: 25px;
        }
        button:focus{
            background-color: #177198;
            color: white;
        }
        .dropdown-menu{
            width: 400px;
        }
        .panier{
            float: end;
            height: 30px;
        }

    </style>

            <div class=\"container-fluid\">
                <h1 class=\"mt-4\">BookStore</h1>
                <div class=\"row breadcrumb\">
                    <div class=\"col-md-3\">
                        <ol class=\"breadcrumb mb-4\">
                            <li class=\"breadcrumb-item \"><a href=\"#\" class=\"text-info\">Dashboard</a></li>
                            <li class=\"breadcrumb-item active\">Bookstore</li>
                        </ol>
                    </div>
                    <div class=\"col-md-7\"></div>
                    <div class=\"col-md-2\">
                        <ol class=\" mb-4\">
                            <li class=\"breadcrumb-item panier\">
                                <nav class=\"navbar navbar-expand-lg bg-transparent osahan-nav shadow-sm\">
                                    <div class=\"container\">
                                        <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                                            <ul class=\"navbar-nav ml-auto\">
                                                <li class=\"nav-item dropdown dropdown-cart\">
                                                    <a class=\"nav-link text-primary dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                        <i class=\"text-primary fas fa-shopping-basket\"></i> Cart
                                                        <span class=\"badge badge-primary\">{{ items | length }}</span>
                                                    </a>
                                                    <div class=\"dropdown-menu dropdown-cart-top p-0 dropdown-menu-right shadow-sm border-0\">
                                                        <div class=\"p-4\">
                                                            <h3 class=\"mb-0\">Votre panier</h3>
                                                        </div>
                                                        {% if items | length > 0 %}
                                                            <div class=\"dropdown-cart-top-body border-top p-4\">

                                                                <table>
                                                                    <thead>
                                                                    <tr>
                                                                        <th>titre</th>
                                                                        <th width=\"60px\">prix</th>
                                                                        <th>action</th>
                                                                    </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                    {% for item in items %}
                                                                        <tr>
                                                                            <td><p class=\"mb-2\"><i class=\"icofont-ui-press text-success food-item\"></i> {{ item.book.titre }}</p></td>
                                                                            <td>{{ item.book.prix | raw }}</td>
                                                                            <td><a href=\"{{ path('cart_remove',{'id': item.book.id }) }}\" class=\"btn btn-danger btn-sm text-white\"><i class=\"fas fa-trash\"></i></a></td>
                                                                        </tr>
                                                                    {% endfor %}
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class=\"dropdown-cart-top-footer border-top p-4\">
                                                                <p class=\"mb-0 font-weight-bold text-secondary\">Total <span class=\"float-right text-dark\">{{ total }} Ar</span></p>
                                                            </div>
                                                            <div class=\"dropdown-cart-top-footer border-top p-2\">
                                                                <a class=\"btn btn-success btn-block btn-lg\" href=\"checkout.html\"> Valider</a>
                                                            </div>
                                                        {% else %}
                                                            <p>panier vide</p>
                                                        {% endif %}
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>

                            </li>
                        </ol>

                    </div>
                </div>




                <div class=\"row\">
                    {% for book in books %}
                        {% if book.livre %}
                            <div class=\"col-md-3 col-sm-6 mb-4 pb-2\">
                                <div class=\"list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm\">
                                    <div class=\"list-card-image\">
                                        <div class=\"favourite-heart text-white position-absolute\"><span class=\"badge badge-success\">{{ book.prix }}</span></div>
                                        <div class=\"member-plan position-absolute\"><span class=\"badge badge-dark\">Promoted</span></div>
                                        <img src=\"{{ asset('images/photo_livre/' ~book.livre) }}\" height=\"80%\" class=\"img-fluid item-img\">
                                    </div>
                                    <div class=\"button\">
                                        <center>
                                            <button><a class=\"text-info\" href=\"{{ path('cart_add', {'id': book.id }) }}\"><span class=\"fas fa-shopping-cart\"></span> Ajouter au panier</a></button>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}

                </div>
            </div>

{% endblock %}", "etudiant/espace/bookstore/bookstore.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\etudiant\\espace\\bookstore\\bookstore.html.twig");
    }
}
