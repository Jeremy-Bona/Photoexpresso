<?php

/* :notifications:new.html.twig */
class __TwigTemplate_b6f13367057a99f10be0910da8f54f2afb04161b219536fd2f94b3aa0a77ad0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":notifications:new.html.twig", 1);
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
        $__internal_a81fd549a182fb3934b74c4fef8d627c06c74502238e89b08f4c2a5a1c2256b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81fd549a182fb3934b74c4fef8d627c06c74502238e89b08f4c2a5a1c2256b8->enter($__internal_a81fd549a182fb3934b74c4fef8d627c06c74502238e89b08f4c2a5a1c2256b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":notifications:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a81fd549a182fb3934b74c4fef8d627c06c74502238e89b08f4c2a5a1c2256b8->leave($__internal_a81fd549a182fb3934b74c4fef8d627c06c74502238e89b08f4c2a5a1c2256b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9095fe39932225670c530b6edf1db771ccd9710dff900087f908e3ff6c97390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9095fe39932225670c530b6edf1db771ccd9710dff900087f908e3ff6c97390->enter($__internal_b9095fe39932225670c530b6edf1db771ccd9710dff900087f908e3ff6c97390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notification creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notif_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b9095fe39932225670c530b6edf1db771ccd9710dff900087f908e3ff6c97390->leave($__internal_b9095fe39932225670c530b6edf1db771ccd9710dff900087f908e3ff6c97390_prof);

    }

    public function getTemplateName()
    {
        return ":notifications:new.html.twig";
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
    <h1>Notification creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('notif_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":notifications:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/notifications/new.html.twig");
    }
}
