<?php

/* UtiliBundle::base.html.twig */
class __TwigTemplate_4d02a09d1d436c539228f1b61777f122a1fefe132f946408910a6cb2d8118ad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtiliBundle::base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtiliBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>

<html>

<head>

    <meta charset=\"utf-8\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
</head>

<body>

    <div class=\"row\">

        <!-- Static navbar -->

        <nav class=\"navbar navbar-default navbar-fixed-top\">

            <div class=\"navbar-header\">

                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">

            <span class=\"sr-only\">Toggle navigation</span>

            <span class=\"icon-bar\"></span>

            <span class=\"icon-bar\"></span>

            <span class=\"icon-bar\"></span>

          </button>

                <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/utili/images/i1.png"), "html", null, true);
        echo "\" class=\"img-responsive brand\"></a>

            </div>

            <div id=\"navbar\" class=\"navbar-collapse collapse\">

                <ul class=\"nav navbar-nav\">

                    <li class=\"active\"><a href=\"#\">Gestion Utilisateur</a></li>

                    <li><a href=\"#\">Authentification</a></li>

                    <li><a href=\"#\">Nos Utilisateurs</a></li>


                    <li><a href=\"#\">A propos</a></li>

                    <li><a href=\"#\">Contact</a></li>

                </ul>

            </div>

            <!--/.nav-collapse -->

            <!--/.container-fluid -->

        </nav>

        <!-- Main component for a primary marketing message or call to action -->

    </div>

    <div class=\"container block\">

        <div class=\"row\">

            <div class=\"col-lg-6 col-md-6 col-sm-8 col-xs-8 pull-left \">

                ";
        // line 88
        $this->displayBlock('body', $context, $blocks);
        // line 96
        echo "            </div>
        </div>
    </div>

    <footer>

        <div class=\"footer\" id=\"footer\">

            <div class=\"container\">

                <div class=\"row\">

​

                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">

​

                        <i class=\"fa fa-map-marker fa-2x info\" aria-hidden=\"true\"></i><br/> 13 RUE X Marrakech Maroc
                    </div>

                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 \">

                        <i class=\"fa fa-envelope fa-2x info\" aria-hidden=\"true\"></i><br/>gestionutili@gmail.com

                    </div>

                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 \">

                        <i class=\"fa fa-phone fa-2x info\" aria-hidden=\"true\"></i><br/>12356712

                    </div>

                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">

                        <ul class=\"social\">

                            <li>

                                <a href=\"#\"> <i class=\"fa fa-facebook\">  </i> </a>

                            </li>

                            <li>

                                <a href=\"#\"> <i class=\"fa fa-twitter\">   </i> </a>

                            </li>

                            <li>

                                <a href=\"#\"> <i class=\"fa fa-google-plus\">   </i> </a>

                            </li>

                            <li>

                                <a href=\"#\"> <i class=\"fa fa-pinterest\">   </i> </a>

                            </li>

                        </ul>

                    </div>

                </div>

                <!--/.row-->

            </div>

            <!--/.container-->

        </div>

        <!--/.footer-->

        <div class=\"footer-bottom\">

            <div class=\"container\">

                <p class=\"text-center\"> Copyright @UTILI 2018. All right reserved. </p>

            </div>

        </div>

        <!--/.footer-bottom-->

    </footer>

​</body>

</html>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion Utilisateur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/utili/css/mystyle.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerfontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 89
        echo "
                <p class=\" text-justify presentation lead\">


                </p>

                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "UtiliBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 89,  286 => 88,  273 => 21,  268 => 19,  263 => 17,  258 => 15,  253 => 13,  250 => 12,  241 => 11,  223 => 9,  116 => 96,  114 => 88,  72 => 49,  45 => 24,  43 => 11,  38 => 9,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>

<html>

<head>

    <meta charset=\"utf-8\">

    <title>{% block title %}Gestion Utilisateur{% endblock %}</title>

    {% block stylesheets %}

    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/utili/css/mystyle.css') }}\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/bmatznerfontawesome/css/font-awesome.min.css') }}\" />

    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>

    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>

    {% endblock %}

</head>

<body>

    <div class=\"row\">

        <!-- Static navbar -->

        <nav class=\"navbar navbar-default navbar-fixed-top\">

            <div class=\"navbar-header\">

                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">

            <span class=\"sr-only\">Toggle navigation</span>

            <span class=\"icon-bar\"></span>

            <span class=\"icon-bar\"></span>

            <span class=\"icon-bar\"></span>

          </button>

                <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('bundles/utili/images/i1.png') }}\" class=\"img-responsive brand\"></a>

            </div>

            <div id=\"navbar\" class=\"navbar-collapse collapse\">

                <ul class=\"nav navbar-nav\">

                    <li class=\"active\"><a href=\"#\">Gestion Utilisateur</a></li>

                    <li><a href=\"#\">Authentification</a></li>

                    <li><a href=\"#\">Nos Utilisateurs</a></li>


                    <li><a href=\"#\">A propos</a></li>

                    <li><a href=\"#\">Contact</a></li>

                </ul>

            </div>

            <!--/.nav-collapse -->

            <!--/.container-fluid -->

        </nav>

        <!-- Main component for a primary marketing message or call to action -->

    </div>

    <div class=\"container block\">

        <div class=\"row\">

            <div class=\"col-lg-6 col-md-6 col-sm-8 col-xs-8 pull-left \">

                {% block body %}

                <p class=\" text-justify presentation lead\">


                </p>

                {% endblock %}
            </div>
        </div>
    </div>

    <footer>

        <div class=\"footer\" id=\"footer\">

            <div class=\"container\">

                <div class=\"row\">

​

                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">

​

                        <i class=\"fa fa-map-marker fa-2x info\" aria-hidden=\"true\"></i><br/> 13 RUE X Marrakech Maroc
                    </div>

                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 \">

                        <i class=\"fa fa-envelope fa-2x info\" aria-hidden=\"true\"></i><br/>gestionutili@gmail.com

                    </div>

                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 \">

                        <i class=\"fa fa-phone fa-2x info\" aria-hidden=\"true\"></i><br/>12356712

                    </div>

                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">

                        <ul class=\"social\">

                            <li>

                                <a href=\"#\"> <i class=\"fa fa-facebook\">  </i> </a>

                            </li>

                            <li>

                                <a href=\"#\"> <i class=\"fa fa-twitter\">   </i> </a>

                            </li>

                            <li>

                                <a href=\"#\"> <i class=\"fa fa-google-plus\">   </i> </a>

                            </li>

                            <li>

                                <a href=\"#\"> <i class=\"fa fa-pinterest\">   </i> </a>

                            </li>

                        </ul>

                    </div>

                </div>

                <!--/.row-->

            </div>

            <!--/.container-->

        </div>

        <!--/.footer-->

        <div class=\"footer-bottom\">

            <div class=\"container\">

                <p class=\"text-center\"> Copyright @UTILI 2018. All right reserved. </p>

            </div>

        </div>

        <!--/.footer-bottom-->

    </footer>

​</body>

</html>



", "UtiliBundle::base.html.twig", "C:\\wamp\\www\\Utili\\src\\UtiliBundle/Resources/views/base.html.twig");
    }
}
