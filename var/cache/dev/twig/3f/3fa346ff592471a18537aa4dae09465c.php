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

/* mars/mars.html.twig */
class __TwigTemplate_af10547eedcf04d75419ca9195e69548 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mars/mars.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 5
        echo "

";
        // line 7
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "

";
        // line 10
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
<header>

<img id=\"logo\" src=\"https://www.pngkey.com/png/full/481-4819402_nasa-logo-png-transparent-logo-nasa-hd-png.png\"></img>
<h1>Mars Rover Photos</h1>

</header>

        <h2>Rechercher une photo à partir d'une date</h2>


   <form method = \"GET\" >
                <div class=\"inner-form\">
                    <div class=\"input-field\">
                         <input type=\"text\" name=\"date\" placeholder=\"Format obligatoire : AAAA-MM-JJ\" value=\"\" id=\"Date\" >
                         <button id=\"btn\" type=\"button\">Rechercher</button>
                        </div>
                    </div>      
            </form>
            
            <h3 id=\"err\"></h3>
            <img id=\"image\" src=\"https://cnes.fr/sites/default/files/drupal/201607/image/is_mars.jpg\"></img>
           

            
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mars/mars.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 16,  106 => 15,  95 => 10,  91 => 8,  84 => 7,  74 => 3,  67 => 2,  59 => 42,  57 => 15,  54 => 14,  52 => 7,  48 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}


{% block javascripts %}


{{ encore_entry_script_tags('app') }}


{% endblock %}

{% block body %}

<header>

<img id=\"logo\" src=\"https://www.pngkey.com/png/full/481-4819402_nasa-logo-png-transparent-logo-nasa-hd-png.png\"></img>
<h1>Mars Rover Photos</h1>

</header>

        <h2>Rechercher une photo à partir d'une date</h2>


   <form method = \"GET\" >
                <div class=\"inner-form\">
                    <div class=\"input-field\">
                         <input type=\"text\" name=\"date\" placeholder=\"Format obligatoire : AAAA-MM-JJ\" value=\"\" id=\"Date\" >
                         <button id=\"btn\" type=\"button\">Rechercher</button>
                        </div>
                    </div>      
            </form>
            
            <h3 id=\"err\"></h3>
            <img id=\"image\" src=\"https://cnes.fr/sites/default/files/drupal/201607/image/is_mars.jpg\"></img>
           

            
{% endblock %}

", "mars/mars.html.twig", "C:\\wamp\\www\\Projet_Symfony\\symfony\\templates\\mars\\mars.html.twig");
    }
}
