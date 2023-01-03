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

/* mars/index.html.twig */
class __TwigTemplate_53a0c8439d05423acf46464d9b9c6e11 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mars/index.html.twig"));

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
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 41
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

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
<div class=\"card\"> 

<h1>Rechercher une photo</h1>


   <form method = \"GET\" >
                <div class=\"inner-form\">
                    <div class=\"input-field\">
                         <input type=\"text\" name=\"date\" placeholder=\"Format obligatoire : AAAA-MM-JJ\" value=\"\" id=\"Date\" >
                         <button id=\"btn\" type=\"button\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                        <path d=\"M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z\"></path>
                        </svg>
                        </button>
                        </div>
                    </div>      
            </form>
            <h1 id=\"err\"></h1>
            <img id=\"image\" src=\"\"></img>

</div>
            
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mars/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 17,  107 => 16,  96 => 10,  92 => 8,  85 => 7,  75 => 3,  68 => 2,  60 => 41,  58 => 16,  54 => 14,  52 => 7,  48 => 5,  46 => 2,  43 => 1,);
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

<div class=\"card\"> 

<h1>Rechercher une photo</h1>


   <form method = \"GET\" >
                <div class=\"inner-form\">
                    <div class=\"input-field\">
                         <input type=\"text\" name=\"date\" placeholder=\"Format obligatoire : AAAA-MM-JJ\" value=\"\" id=\"Date\" >
                         <button id=\"btn\" type=\"button\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                        <path d=\"M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z\"></path>
                        </svg>
                        </button>
                        </div>
                    </div>      
            </form>
            <h1 id=\"err\"></h1>
            <img id=\"image\" src=\"\"></img>

</div>
            
{% endblock %}

", "mars/index.html.twig", "C:\\wamp\\www\\Projet_Symfony\\symfony\\templates\\mars\\index.html.twig");
    }
}
