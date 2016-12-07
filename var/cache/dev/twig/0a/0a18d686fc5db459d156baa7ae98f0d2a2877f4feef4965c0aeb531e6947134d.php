<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bd6454a7a16d0e49535f206c07be8378658a89f57187a49d3a59c7fd55bd384a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_433a6d8dec10ef5b010ad71742aca0b5cc1f0759c1d3efbd1244036c2b3a6cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433a6d8dec10ef5b010ad71742aca0b5cc1f0759c1d3efbd1244036c2b3a6cc9->enter($__internal_433a6d8dec10ef5b010ad71742aca0b5cc1f0759c1d3efbd1244036c2b3a6cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_433a6d8dec10ef5b010ad71742aca0b5cc1f0759c1d3efbd1244036c2b3a6cc9->leave($__internal_433a6d8dec10ef5b010ad71742aca0b5cc1f0759c1d3efbd1244036c2b3a6cc9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f99c03bcb5c5a1182b9387df97d714c9276b3232b99bfec6723fdb8f0db33cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99c03bcb5c5a1182b9387df97d714c9276b3232b99bfec6723fdb8f0db33cbd->enter($__internal_f99c03bcb5c5a1182b9387df97d714c9276b3232b99bfec6723fdb8f0db33cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f99c03bcb5c5a1182b9387df97d714c9276b3232b99bfec6723fdb8f0db33cbd->leave($__internal_f99c03bcb5c5a1182b9387df97d714c9276b3232b99bfec6723fdb8f0db33cbd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_312e9b640cebbba4643489211dea8d1c032908cc2b6e65a454971d9d1e682319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312e9b640cebbba4643489211dea8d1c032908cc2b6e65a454971d9d1e682319->enter($__internal_312e9b640cebbba4643489211dea8d1c032908cc2b6e65a454971d9d1e682319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_312e9b640cebbba4643489211dea8d1c032908cc2b6e65a454971d9d1e682319->leave($__internal_312e9b640cebbba4643489211dea8d1c032908cc2b6e65a454971d9d1e682319_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_91593af6547bf63c8c536bf684370c39bc21b92533c4bb7d6faa6fdd977dc4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91593af6547bf63c8c536bf684370c39bc21b92533c4bb7d6faa6fdd977dc4ae->enter($__internal_91593af6547bf63c8c536bf684370c39bc21b92533c4bb7d6faa6fdd977dc4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_91593af6547bf63c8c536bf684370c39bc21b92533c4bb7d6faa6fdd977dc4ae->leave($__internal_91593af6547bf63c8c536bf684370c39bc21b92533c4bb7d6faa6fdd977dc4ae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
