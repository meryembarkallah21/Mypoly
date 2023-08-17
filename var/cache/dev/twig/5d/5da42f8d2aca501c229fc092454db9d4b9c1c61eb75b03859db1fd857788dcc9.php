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

/* etudiant/espace/mention/index.html.twig */
class __TwigTemplate_af3eabc4fa26bdcce23cb2e1d65325fee7974d8a81f673f1f00ebf97fceb9725 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/mention/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/espace/mention/index.html.twig"));

        $this->parent = $this->loadTemplate("etudiant/espace/base.html.twig", "etudiant/espace/mention/index.html.twig", 1);
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

        echo "Mention index";
        
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
        echo "<style>

    .text-logo
    {
        font-family: 'Broadway BT', sans-serif;
        text-shadow: 2px 2px #1839DO;
        font-size: 20px;
        font-weight: bold;
        text-align: center;
    }
    .filiere
    {
        margin: 15px 10%;
        width: 80%;
    }
    .breadcrumb{
        box-shadow: rgba(0,0,0,0.1) 0px 60px 40px -7px;
        backdrop-filter: blur(4px);
        color: rgba(59,76,255,0.91);
        font-weight: bold;
    }
    .txt{
        font-size: 25px;
        width: 210px;
    }
    .modal-title{
        font-weight: bold;
    }
    .card
    {
        border-radius:10px;
    }
    .content-header
    {
        margin-top: 20px;
    }

</style>
    <div class=\"container-fluid\">
            <!-- Content Header (Page header) -->
            <div class=\"content-header\">
                <div class=\"container-fluid\">

                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 52
            echo "                        <div class=\"alert alert-danger\">
                            ";
            // line 53
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "


                    <div class=\"row mb-2\">
                        <div class=\"col-sm-6\">
                            <h2 class=\"m-0 breadcrumb txt text-dark text-black\">Inscription </h2>
                        </div><!-- /.col -->
                        <div class=\"col-sm-6\">
                            <ol class=\"breadcrumb float-sm-right\">
                                <li class=\"breadcrumb-item\"><a class=\"text-info\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiant");
        echo "\">Tableau de Bord</a></li>
                                <li class=\"breadcrumb-item active\">inscription</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
      <div class=\"card\" >
          <div class=\"card-header\">
              <p class=\"text-logo text-info\">Nos mentions</p>
          </div>
          <div class=\"card-body\">
              <div class=\"row\">
                  ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["codes"]) || array_key_exists("codes", $context) ? $context["codes"] : (function () { throw new RuntimeError('Variable "codes" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 79
            echo "                      <div class=\"col-md-4\">
                          <div class=\"card bg-dark text-white mb-4\">
                              <div class=\"card-body filiere text-center\"><img width=\"30px\" style=\"margin-right: 20px\" src=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/fichier_icon/" . twig_get_attribute($this->env, $this->source, $context["code"], "icon", [], "any", false, false, false, 81))), "html", null, true);
            echo "\" alt=\"logo\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["code"], "name", [], "any", false, false, false, 81), "html", null, true);
            echo "</div>

                              <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                  <a class=\"btn btn-sm btn-primary\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etudiant_inscription", ["id" => twig_get_attribute($this->env, $this->source, $context["code"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\">inscription</a>

                                  <i  class=\"ri btn btn-sm  btn-success\"
                                     data-id=\"";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["code"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#MleModal\">Réinscription
                                  </i>

                                  <div id=\"MleModal\" class=\"modal fade\" role=\"dialog\">
                                      <div class=\"modal-dialog\">
                                          <div class=\"modal-content\">
                                              <form  action=\"";
            // line 93
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("check_mle");
            echo "\" method=\"post\">
                                                  <div class=\"modal-header bg-warning\">
                                                      <h4 class=\"modal-title\">Réinscription</h4>
                                                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                          <span aria-hidden=\"true\">&times;</span>
                                                      </button>
                                                  </div>
                                                  <div class=\"modal-body\">
                                                      <input type=\"hidden\"  class=\"id\" id=\"id\" name=\"id\">
                                                      <div class=\"form-group row\">
                                                          <label for=\"inputName2\" class=\"col-sm-4 col-form-label\">Votre matricule : </label>
                                                          <div class=\"col-sm-8\">
                                                              <input type=\"number\" name=\"matricule\"  class=\"form-control\">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class=\"modal-footer justify-content-between\">
                                                      <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Femer</button>
                                                      <button type=\"submit\" class=\"btn btn-success\">Valider</button>
                                                  </div>
                                              </form>
                                          </div>
                                          <!-- /.modal-content -->
                                      </div>
                                      <!-- /.modal-dialog -->
                                  </div>



                              </div>
                          </div>
                      </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "              </div>
          </div>

      </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "
    <script>
        \$(document).ready(function () {

            \$('.ri').click(function () {
                \$('#id').val(\$(this).data('id'));
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/espace/mention/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 135,  263 => 134,  247 => 126,  208 => 93,  199 => 87,  193 => 84,  185 => 81,  181 => 79,  177 => 78,  161 => 65,  150 => 56,  141 => 53,  138 => 52,  134 => 51,  89 => 8,  79 => 7,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'etudiant/espace/base.html.twig' %}

{% block title %}Mention index{% endblock %}



{% block main %}
<style>

    .text-logo
    {
        font-family: 'Broadway BT', sans-serif;
        text-shadow: 2px 2px #1839DO;
        font-size: 20px;
        font-weight: bold;
        text-align: center;
    }
    .filiere
    {
        margin: 15px 10%;
        width: 80%;
    }
    .breadcrumb{
        box-shadow: rgba(0,0,0,0.1) 0px 60px 40px -7px;
        backdrop-filter: blur(4px);
        color: rgba(59,76,255,0.91);
        font-weight: bold;
    }
    .txt{
        font-size: 25px;
        width: 210px;
    }
    .modal-title{
        font-weight: bold;
    }
    .card
    {
        border-radius:10px;
    }
    .content-header
    {
        margin-top: 20px;
    }

</style>
    <div class=\"container-fluid\">
            <!-- Content Header (Page header) -->
            <div class=\"content-header\">
                <div class=\"container-fluid\">

                    {% for message in app.flashes('error') %}
                        <div class=\"alert alert-danger\">
                            {{ message }}
                        </div>
                    {% endfor %}



                    <div class=\"row mb-2\">
                        <div class=\"col-sm-6\">
                            <h2 class=\"m-0 breadcrumb txt text-dark text-black\">Inscription </h2>
                        </div><!-- /.col -->
                        <div class=\"col-sm-6\">
                            <ol class=\"breadcrumb float-sm-right\">
                                <li class=\"breadcrumb-item\"><a class=\"text-info\" href=\"{{ path('etudiant') }}\">Tableau de Bord</a></li>
                                <li class=\"breadcrumb-item active\">inscription</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
      <div class=\"card\" >
          <div class=\"card-header\">
              <p class=\"text-logo text-info\">Nos mentions</p>
          </div>
          <div class=\"card-body\">
              <div class=\"row\">
                  {% for code in codes %}
                      <div class=\"col-md-4\">
                          <div class=\"card bg-dark text-white mb-4\">
                              <div class=\"card-body filiere text-center\"><img width=\"30px\" style=\"margin-right: 20px\" src=\"{{ asset('images/fichier_icon/'~code.icon) }}\" alt=\"logo\">{{ code.name }}</div>

                              <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                  <a class=\"btn btn-sm btn-primary\" href=\"{{ path('etudiant_inscription', {'id': code.id}) }}\">inscription</a>

                                  <i  class=\"ri btn btn-sm  btn-success\"
                                     data-id=\"{{ code.id }}\" data-toggle=\"modal\" data-target=\"#MleModal\">Réinscription
                                  </i>

                                  <div id=\"MleModal\" class=\"modal fade\" role=\"dialog\">
                                      <div class=\"modal-dialog\">
                                          <div class=\"modal-content\">
                                              <form  action=\"{{path('check_mle')}}\" method=\"post\">
                                                  <div class=\"modal-header bg-warning\">
                                                      <h4 class=\"modal-title\">Réinscription</h4>
                                                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                          <span aria-hidden=\"true\">&times;</span>
                                                      </button>
                                                  </div>
                                                  <div class=\"modal-body\">
                                                      <input type=\"hidden\"  class=\"id\" id=\"id\" name=\"id\">
                                                      <div class=\"form-group row\">
                                                          <label for=\"inputName2\" class=\"col-sm-4 col-form-label\">Votre matricule : </label>
                                                          <div class=\"col-sm-8\">
                                                              <input type=\"number\" name=\"matricule\"  class=\"form-control\">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class=\"modal-footer justify-content-between\">
                                                      <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Femer</button>
                                                      <button type=\"submit\" class=\"btn btn-success\">Valider</button>
                                                  </div>
                                              </form>
                                          </div>
                                          <!-- /.modal-content -->
                                      </div>
                                      <!-- /.modal-dialog -->
                                  </div>



                              </div>
                          </div>
                      </div>
                  {% endfor %}
              </div>
          </div>

      </div>
    </div>

{% endblock %}

{% block javascripts %}

    <script>
        \$(document).ready(function () {

            \$('.ri').click(function () {
                \$('#id').val(\$(this).data('id'));
            });
        });
    </script>

{% endblock %}", "etudiant/espace/mention/index.html.twig", "C:\\xampp\\htdocs\\MyPoly\\templates\\etudiant\\espace\\mention\\index.html.twig");
    }
}
