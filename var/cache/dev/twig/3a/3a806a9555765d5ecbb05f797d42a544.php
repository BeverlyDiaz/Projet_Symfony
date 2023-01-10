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

/* search/search.html.twig */
class __TwigTemplate_2459b625f001f29df924a3d28f1fdd45 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/search.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('javascripts', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("Partie_2");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "
            ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("Partie_2");
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <header>

                <img id=\"logo\" src=\"https://www.pngkey.com/png/full/481-4819402_nasa-logo-png-transparent-logo-nasa-hd-png.png\"></img>
            <h1>NASA Image and Video Library</h1>

    </header>

            <h2>Rechercher une photo dans la library</h2>

   <form method=\"post\">
                <div class=\"inner-form\">
                    <div class=\"input-field\">
                         <input type=\"text\" name=\"search\" placeholder=\"Recherche\" value=\"\" id=\"Search\" >
                         <button id=\"btn\" type=\"button\">Rechercher</button>
                        </div>
                    </div>      
    </form>
            <h3 id=\"err\"></h3>
                <img id=\"image\" src=\"\"></img>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "search/search.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 12,  97 => 11,  87 => 7,  84 => 6,  77 => 5,  67 => 2,  60 => 1,  53 => 11,  50 => 10,  48 => 5,  45 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
            {{ encore_entry_link_tags('Partie_2') }}
        {% endblock %}

{% block javascripts %}

            {{ encore_entry_script_tags('Partie_2') }}

{% endblock %}

{% block body %}

    <header>

                <img id=\"logo\" src=\"https://www.pngkey.com/png/full/481-4819402_nasa-logo-png-transparent-logo-nasa-hd-png.png\"></img>
            <h1>NASA Image and Video Library</h1>

    </header>

            <h2>Rechercher une photo dans la library</h2>

   <form method=\"post\">
                <div class=\"inner-form\">
                    <div class=\"input-field\">
                         <input type=\"text\" name=\"search\" placeholder=\"Recherche\" value=\"\" id=\"Search\" >
                         <button id=\"btn\" type=\"button\">Rechercher</button>
                        </div>
                    </div>      
    </form>
            <h3 id=\"err\"></h3>
                <img id=\"image\" src=\"\"></img>


{% endblock %}
", "search/search.html.twig", "C:\\wamp\\www\\Projet_Symfony\\symfony\\templates\\search\\search.html.twig");
    }
}
