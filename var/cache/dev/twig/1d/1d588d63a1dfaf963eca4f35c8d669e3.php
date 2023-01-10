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

/* searchback/searchback.html.twig */
class __TwigTemplate_d68ee6723b096627667f2b8f57b88369 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "searchback/searchback.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "

";
        // line 6
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <header>

            <img id=\"logo\" src=\"https://www.pngkey.com/png/full/481-4819402_nasa-logo-png-transparent-logo-nasa-hd-png.png\"></img>
        <h1>NASA Image and Video Library</h1>

    </header>

        <h2>Rechercher une photo dans la library</h2>
            <img id=\"image_searchback\" src=\"http://images-assets.nasa.gov/image/";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "collection", [], "any", false, false, false, 16), "items", [], "any", false, false, false, 16), 1, [], "any", false, false, false, 16), "data", [], "any", false, false, false, 16), 0, [], "any", false, false, false, 16), "nasa_id", [], "any", false, false, false, 16), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "collection", [], "any", false, false, false, 16), "items", [], "any", false, false, false, 16), 1, [], "any", false, false, false, 16), "data", [], "any", false, false, false, 16), 0, [], "any", false, false, false, 16), "nasa_id", [], "any", false, false, false, 16), "html", null, true);
        echo "~small.jpg\"></img>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "searchback/searchback.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  79 => 7,  72 => 6,  62 => 2,  55 => 1,  48 => 6,  44 => 4,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
            {{ encore_entry_link_tags('Partie_2') }}
        {% endblock %}


{% block body %}

    <header>

            <img id=\"logo\" src=\"https://www.pngkey.com/png/full/481-4819402_nasa-logo-png-transparent-logo-nasa-hd-png.png\"></img>
        <h1>NASA Image and Video Library</h1>

    </header>

        <h2>Rechercher une photo dans la library</h2>
            <img id=\"image_searchback\" src=\"http://images-assets.nasa.gov/image/{{data.collection.items.1.data.0.nasa_id}}/{{data.collection.items.1.data.0.nasa_id}}~small.jpg\"></img>

{% endblock %}
", "searchback/searchback.html.twig", "C:\\wamp\\www\\Projet_Symfony\\symfony\\templates\\searchback\\searchback.html.twig");
    }
}
