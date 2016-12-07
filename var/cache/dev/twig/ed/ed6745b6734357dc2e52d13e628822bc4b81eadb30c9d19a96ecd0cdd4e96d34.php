<?php

/* :order:new.html.twig */
class __TwigTemplate_c821a8f096eb4c2e26f6e78b19ab7c24860452ecfb2af0b6d6f56f67b33eb081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":order:new.html.twig", 1);
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
        $__internal_c652f84c56884e8c579c8acedfee40619b8e60f555d42bba6f2c1aae1aa61705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c652f84c56884e8c579c8acedfee40619b8e60f555d42bba6f2c1aae1aa61705->enter($__internal_c652f84c56884e8c579c8acedfee40619b8e60f555d42bba6f2c1aae1aa61705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":order:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c652f84c56884e8c579c8acedfee40619b8e60f555d42bba6f2c1aae1aa61705->leave($__internal_c652f84c56884e8c579c8acedfee40619b8e60f555d42bba6f2c1aae1aa61705_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20325100ec69c83a339f94b0eab4a1f6a92317a4e579dab78733bb29ddeae1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20325100ec69c83a339f94b0eab4a1f6a92317a4e579dab78733bb29ddeae1b2->enter($__internal_20325100ec69c83a339f94b0eab4a1f6a92317a4e579dab78733bb29ddeae1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Order creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_20325100ec69c83a339f94b0eab4a1f6a92317a4e579dab78733bb29ddeae1b2->leave($__internal_20325100ec69c83a339f94b0eab4a1f6a92317a4e579dab78733bb29ddeae1b2_prof);

    }

    public function getTemplateName()
    {
        return ":order:new.html.twig";
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
    <h1>Order creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('order_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":order:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/order/new.html.twig");
    }
}
