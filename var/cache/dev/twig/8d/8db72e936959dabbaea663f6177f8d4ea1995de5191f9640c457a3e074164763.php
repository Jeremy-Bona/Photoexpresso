<?php

/* ::base.html.twig */
class __TwigTemplate_ec087bddaa24c50ac4a199105c4534e04ef8a0ff2865384d585fd16527e595f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bd8ceff5ecffb1bb768788843d3ec94d2ad895011dcf062b7f17a100d314bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd8ceff5ecffb1bb768788843d3ec94d2ad895011dcf062b7f17a100d314bc6->enter($__internal_6bd8ceff5ecffb1bb768788843d3ec94d2ad895011dcf062b7f17a100d314bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6bd8ceff5ecffb1bb768788843d3ec94d2ad895011dcf062b7f17a100d314bc6->leave($__internal_6bd8ceff5ecffb1bb768788843d3ec94d2ad895011dcf062b7f17a100d314bc6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddafafbbb428be0d5b0085327a5452b0cdb20479ecb4f58cc120c2521fd3a7b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddafafbbb428be0d5b0085327a5452b0cdb20479ecb4f58cc120c2521fd3a7b3->enter($__internal_ddafafbbb428be0d5b0085327a5452b0cdb20479ecb4f58cc120c2521fd3a7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ddafafbbb428be0d5b0085327a5452b0cdb20479ecb4f58cc120c2521fd3a7b3->leave($__internal_ddafafbbb428be0d5b0085327a5452b0cdb20479ecb4f58cc120c2521fd3a7b3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d8371d6f6285b54f5a8b5dbf4cbc74e7c97d6bb94e007761b80dbdcc78f1243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8371d6f6285b54f5a8b5dbf4cbc74e7c97d6bb94e007761b80dbdcc78f1243->enter($__internal_8d8371d6f6285b54f5a8b5dbf4cbc74e7c97d6bb94e007761b80dbdcc78f1243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8d8371d6f6285b54f5a8b5dbf4cbc74e7c97d6bb94e007761b80dbdcc78f1243->leave($__internal_8d8371d6f6285b54f5a8b5dbf4cbc74e7c97d6bb94e007761b80dbdcc78f1243_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e10d89e02d437645eaeb320db210976af52d84ed6b4219c538a7c5b7980fb879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10d89e02d437645eaeb320db210976af52d84ed6b4219c538a7c5b7980fb879->enter($__internal_e10d89e02d437645eaeb320db210976af52d84ed6b4219c538a7c5b7980fb879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e10d89e02d437645eaeb320db210976af52d84ed6b4219c538a7c5b7980fb879->leave($__internal_e10d89e02d437645eaeb320db210976af52d84ed6b4219c538a7c5b7980fb879_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d74e3481740a4af0057183b8b30c5606ff84c998117b3ab6ae533154a6486753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74e3481740a4af0057183b8b30c5606ff84c998117b3ab6ae533154a6486753->enter($__internal_d74e3481740a4af0057183b8b30c5606ff84c998117b3ab6ae533154a6486753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d74e3481740a4af0057183b8b30c5606ff84c998117b3ab6ae533154a6486753->leave($__internal_d74e3481740a4af0057183b8b30c5606ff84c998117b3ab6ae533154a6486753_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/base.html.twig");
    }
}
