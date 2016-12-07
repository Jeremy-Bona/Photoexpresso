<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d70a28fa28b93e0816b6fd8c560717a31fac4dffd5bc81e9cefa25000ea8f9e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_1b68068865e60a7ba5c9f084b9a90d3c376b5b0cb8d68b3273a3727f5e73c8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b68068865e60a7ba5c9f084b9a90d3c376b5b0cb8d68b3273a3727f5e73c8fc->enter($__internal_1b68068865e60a7ba5c9f084b9a90d3c376b5b0cb8d68b3273a3727f5e73c8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b68068865e60a7ba5c9f084b9a90d3c376b5b0cb8d68b3273a3727f5e73c8fc->leave($__internal_1b68068865e60a7ba5c9f084b9a90d3c376b5b0cb8d68b3273a3727f5e73c8fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8268890df755853c69cbf642608fe2806fedab097379550ee06ac593b6484b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8268890df755853c69cbf642608fe2806fedab097379550ee06ac593b6484b2->enter($__internal_e8268890df755853c69cbf642608fe2806fedab097379550ee06ac593b6484b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e8268890df755853c69cbf642608fe2806fedab097379550ee06ac593b6484b2->leave($__internal_e8268890df755853c69cbf642608fe2806fedab097379550ee06ac593b6484b2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a8bd640ed8f86e3fb7cb6fd16f21bd00bf68956fd97d86a56870c2d8045273e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8bd640ed8f86e3fb7cb6fd16f21bd00bf68956fd97d86a56870c2d8045273e->enter($__internal_1a8bd640ed8f86e3fb7cb6fd16f21bd00bf68956fd97d86a56870c2d8045273e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1a8bd640ed8f86e3fb7cb6fd16f21bd00bf68956fd97d86a56870c2d8045273e->leave($__internal_1a8bd640ed8f86e3fb7cb6fd16f21bd00bf68956fd97d86a56870c2d8045273e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
