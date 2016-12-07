<?php

/* :userdevice:new.html.twig */
class __TwigTemplate_63d5eaa9615f0c4ab8f04c0d21f81b40b4b70ea0ea70d70551b75aa37c42d888 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":userdevice:new.html.twig", 1);
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
        $__internal_2f6f17eed455a32c1ac9acb12d9212d575e26c92a903fd15314e8cbeac592f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6f17eed455a32c1ac9acb12d9212d575e26c92a903fd15314e8cbeac592f42->enter($__internal_2f6f17eed455a32c1ac9acb12d9212d575e26c92a903fd15314e8cbeac592f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":userdevice:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f6f17eed455a32c1ac9acb12d9212d575e26c92a903fd15314e8cbeac592f42->leave($__internal_2f6f17eed455a32c1ac9acb12d9212d575e26c92a903fd15314e8cbeac592f42_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4bb73b67af045ed30893b5431f4a6f14a80456f2f3f91d378816ee23c760d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bb73b67af045ed30893b5431f4a6f14a80456f2f3f91d378816ee23c760d80->enter($__internal_d4bb73b67af045ed30893b5431f4a6f14a80456f2f3f91d378816ee23c760d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Userdevice creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_device_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d4bb73b67af045ed30893b5431f4a6f14a80456f2f3f91d378816ee23c760d80->leave($__internal_d4bb73b67af045ed30893b5431f4a6f14a80456f2f3f91d378816ee23c760d80_prof);

    }

    public function getTemplateName()
    {
        return ":userdevice:new.html.twig";
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
    <h1>Userdevice creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_device_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":userdevice:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/userdevice/new.html.twig");
    }
}
