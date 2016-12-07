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
        $__internal_c43c156b4722ef19acc2ff782e202b70898b4b9408fe01fa773ccfb386d96d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43c156b4722ef19acc2ff782e202b70898b4b9408fe01fa773ccfb386d96d3a->enter($__internal_c43c156b4722ef19acc2ff782e202b70898b4b9408fe01fa773ccfb386d96d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c43c156b4722ef19acc2ff782e202b70898b4b9408fe01fa773ccfb386d96d3a->leave($__internal_c43c156b4722ef19acc2ff782e202b70898b4b9408fe01fa773ccfb386d96d3a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d459b8ff07ad858c772d147ff479b8ef68f588356fbba4aa9bf54c7510f6e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d459b8ff07ad858c772d147ff479b8ef68f588356fbba4aa9bf54c7510f6e4a->enter($__internal_1d459b8ff07ad858c772d147ff479b8ef68f588356fbba4aa9bf54c7510f6e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1d459b8ff07ad858c772d147ff479b8ef68f588356fbba4aa9bf54c7510f6e4a->leave($__internal_1d459b8ff07ad858c772d147ff479b8ef68f588356fbba4aa9bf54c7510f6e4a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_77b51d05ecf06a1aa8bddf773e8d9ef917f28a59610afda2a835adcfffa9fc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b51d05ecf06a1aa8bddf773e8d9ef917f28a59610afda2a835adcfffa9fc55->enter($__internal_77b51d05ecf06a1aa8bddf773e8d9ef917f28a59610afda2a835adcfffa9fc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_77b51d05ecf06a1aa8bddf773e8d9ef917f28a59610afda2a835adcfffa9fc55->leave($__internal_77b51d05ecf06a1aa8bddf773e8d9ef917f28a59610afda2a835adcfffa9fc55_prof);

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
