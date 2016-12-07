<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e4a02476db6eaa9d4439f5bd77e234b77d6d97d63bb04ef5cd66657fb7c91893 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_4a6799c91933b99623c17de0c142cae2bdde50d3ce6952627b4e45ff834b226b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a6799c91933b99623c17de0c142cae2bdde50d3ce6952627b4e45ff834b226b->enter($__internal_4a6799c91933b99623c17de0c142cae2bdde50d3ce6952627b4e45ff834b226b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a6799c91933b99623c17de0c142cae2bdde50d3ce6952627b4e45ff834b226b->leave($__internal_4a6799c91933b99623c17de0c142cae2bdde50d3ce6952627b4e45ff834b226b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc08d70f477172d68427752ee5e7efbc9aad65e7c178f3f0e68ccedccb05546e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc08d70f477172d68427752ee5e7efbc9aad65e7c178f3f0e68ccedccb05546e->enter($__internal_cc08d70f477172d68427752ee5e7efbc9aad65e7c178f3f0e68ccedccb05546e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc08d70f477172d68427752ee5e7efbc9aad65e7c178f3f0e68ccedccb05546e->leave($__internal_cc08d70f477172d68427752ee5e7efbc9aad65e7c178f3f0e68ccedccb05546e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_626267044865fdc574070819f25fbe7ef479c77492f0a388a1105b6b3cfa0590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626267044865fdc574070819f25fbe7ef479c77492f0a388a1105b6b3cfa0590->enter($__internal_626267044865fdc574070819f25fbe7ef479c77492f0a388a1105b6b3cfa0590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_626267044865fdc574070819f25fbe7ef479c77492f0a388a1105b6b3cfa0590->leave($__internal_626267044865fdc574070819f25fbe7ef479c77492f0a388a1105b6b3cfa0590_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0921dcc85c2e1b8b19fdf8bff8bb11c23c966442abba41171692aff9bbe6ae3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0921dcc85c2e1b8b19fdf8bff8bb11c23c966442abba41171692aff9bbe6ae3b->enter($__internal_0921dcc85c2e1b8b19fdf8bff8bb11c23c966442abba41171692aff9bbe6ae3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0921dcc85c2e1b8b19fdf8bff8bb11c23c966442abba41171692aff9bbe6ae3b->leave($__internal_0921dcc85c2e1b8b19fdf8bff8bb11c23c966442abba41171692aff9bbe6ae3b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
