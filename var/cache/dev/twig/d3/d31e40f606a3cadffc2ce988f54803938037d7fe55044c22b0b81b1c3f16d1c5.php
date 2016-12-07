<?php

/* :orderphotosize:new.html.twig */
class __TwigTemplate_b72d3c21939cea0f9f111e673508be767c2e93436088fc00586b977afaac365a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":orderphotosize:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbca78eefc5efdb64899ffcc049d8ac6de36114a919d6ca547e6df1fe75fae8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbca78eefc5efdb64899ffcc049d8ac6de36114a919d6ca547e6df1fe75fae8b->enter($__internal_fbca78eefc5efdb64899ffcc049d8ac6de36114a919d6ca547e6df1fe75fae8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":orderphotosize:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbca78eefc5efdb64899ffcc049d8ac6de36114a919d6ca547e6df1fe75fae8b->leave($__internal_fbca78eefc5efdb64899ffcc049d8ac6de36114a919d6ca547e6df1fe75fae8b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e7169f8f81abc116e7c1192aaa869cac804678615182b909985a85a5f56b627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7169f8f81abc116e7c1192aaa869cac804678615182b909985a85a5f56b627->enter($__internal_6e7169f8f81abc116e7c1192aaa869cac804678615182b909985a85a5f56b627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Orderphotosize creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_photo_size_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6e7169f8f81abc116e7c1192aaa869cac804678615182b909985a85a5f56b627->leave($__internal_6e7169f8f81abc116e7c1192aaa869cac804678615182b909985a85a5f56b627_prof);

    }

    public function getTemplateName()
    {
        return ":orderphotosize:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Orderphotosize creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('order_photo_size_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":orderphotosize:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/orderphotosize/new.html.twig");
    }
}
