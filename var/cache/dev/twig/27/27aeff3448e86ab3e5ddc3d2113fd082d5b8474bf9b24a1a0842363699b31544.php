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
        $__internal_256bea20528ccfd739cd3c7d5f134695abcf4fa0b1b50d02daf8f423bcf33a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256bea20528ccfd739cd3c7d5f134695abcf4fa0b1b50d02daf8f423bcf33a9e->enter($__internal_256bea20528ccfd739cd3c7d5f134695abcf4fa0b1b50d02daf8f423bcf33a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_256bea20528ccfd739cd3c7d5f134695abcf4fa0b1b50d02daf8f423bcf33a9e->leave($__internal_256bea20528ccfd739cd3c7d5f134695abcf4fa0b1b50d02daf8f423bcf33a9e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b424c3f14f588e402f5ae50dc0b37c0a06074bf16013c2337b389b9554fff7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b424c3f14f588e402f5ae50dc0b37c0a06074bf16013c2337b389b9554fff7f0->enter($__internal_b424c3f14f588e402f5ae50dc0b37c0a06074bf16013c2337b389b9554fff7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b424c3f14f588e402f5ae50dc0b37c0a06074bf16013c2337b389b9554fff7f0->leave($__internal_b424c3f14f588e402f5ae50dc0b37c0a06074bf16013c2337b389b9554fff7f0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_86f84c02a73f52c531077a4459d29b99a9022f3b5475a471889103aceca56f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f84c02a73f52c531077a4459d29b99a9022f3b5475a471889103aceca56f63->enter($__internal_86f84c02a73f52c531077a4459d29b99a9022f3b5475a471889103aceca56f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_86f84c02a73f52c531077a4459d29b99a9022f3b5475a471889103aceca56f63->leave($__internal_86f84c02a73f52c531077a4459d29b99a9022f3b5475a471889103aceca56f63_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93de6b290a84572178ad1815c44efdec57ca48e49b7d9a6993c4533b3c3c59f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93de6b290a84572178ad1815c44efdec57ca48e49b7d9a6993c4533b3c3c59f5->enter($__internal_93de6b290a84572178ad1815c44efdec57ca48e49b7d9a6993c4533b3c3c59f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_93de6b290a84572178ad1815c44efdec57ca48e49b7d9a6993c4533b3c3c59f5->leave($__internal_93de6b290a84572178ad1815c44efdec57ca48e49b7d9a6993c4533b3c3c59f5_prof);

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
