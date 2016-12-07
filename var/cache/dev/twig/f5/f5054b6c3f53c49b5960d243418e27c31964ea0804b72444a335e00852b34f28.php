<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_233a52bbecb1e224c3494da37083ff83da1eaa93e983c28f41a8ac64405c3b9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afcedc1bb6b8e910d540daa7283424443f8549243ea0fe22d16261dff93522f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcedc1bb6b8e910d540daa7283424443f8549243ea0fe22d16261dff93522f8->enter($__internal_afcedc1bb6b8e910d540daa7283424443f8549243ea0fe22d16261dff93522f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afcedc1bb6b8e910d540daa7283424443f8549243ea0fe22d16261dff93522f8->leave($__internal_afcedc1bb6b8e910d540daa7283424443f8549243ea0fe22d16261dff93522f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0467e688dd1d43ad32a7f144b9990411452c13a0918c43509fb1d6f17fe015e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0467e688dd1d43ad32a7f144b9990411452c13a0918c43509fb1d6f17fe015e9->enter($__internal_0467e688dd1d43ad32a7f144b9990411452c13a0918c43509fb1d6f17fe015e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0467e688dd1d43ad32a7f144b9990411452c13a0918c43509fb1d6f17fe015e9->leave($__internal_0467e688dd1d43ad32a7f144b9990411452c13a0918c43509fb1d6f17fe015e9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0399c82e6a6e831c6d8d11b2c3c7b8a75782298129fd2696c78550bf5204e4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0399c82e6a6e831c6d8d11b2c3c7b8a75782298129fd2696c78550bf5204e4d1->enter($__internal_0399c82e6a6e831c6d8d11b2c3c7b8a75782298129fd2696c78550bf5204e4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0399c82e6a6e831c6d8d11b2c3c7b8a75782298129fd2696c78550bf5204e4d1->leave($__internal_0399c82e6a6e831c6d8d11b2c3c7b8a75782298129fd2696c78550bf5204e4d1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74d2c33d2f0138a389e157826a28cf9f28164dc2ae2f4875d14a29263eb1cf54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d2c33d2f0138a389e157826a28cf9f28164dc2ae2f4875d14a29263eb1cf54->enter($__internal_74d2c33d2f0138a389e157826a28cf9f28164dc2ae2f4875d14a29263eb1cf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_74d2c33d2f0138a389e157826a28cf9f28164dc2ae2f4875d14a29263eb1cf54->leave($__internal_74d2c33d2f0138a389e157826a28cf9f28164dc2ae2f4875d14a29263eb1cf54_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
