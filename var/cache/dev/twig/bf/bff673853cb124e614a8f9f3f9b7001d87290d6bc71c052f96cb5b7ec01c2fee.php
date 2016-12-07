<?php

/* :deviceversion:new.html.twig */
class __TwigTemplate_3a7c63f6baa5fd4854f2fbbee3bf51e0bcdc8699633880b4741f700e9e52f94f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":deviceversion:new.html.twig", 1);
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
        $__internal_14848e9e82362529a268da1500ced0e0f1b057596a455e01e5e47f0572645fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14848e9e82362529a268da1500ced0e0f1b057596a455e01e5e47f0572645fc1->enter($__internal_14848e9e82362529a268da1500ced0e0f1b057596a455e01e5e47f0572645fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":deviceversion:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14848e9e82362529a268da1500ced0e0f1b057596a455e01e5e47f0572645fc1->leave($__internal_14848e9e82362529a268da1500ced0e0f1b057596a455e01e5e47f0572645fc1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4097209bbba9e1edd62d99fc33c661ea84bdfdcc7079a0de5f56d8f541d77be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4097209bbba9e1edd62d99fc33c661ea84bdfdcc7079a0de5f56d8f541d77be4->enter($__internal_4097209bbba9e1edd62d99fc33c661ea84bdfdcc7079a0de5f56d8f541d77be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Deviceversion creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("device_version_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4097209bbba9e1edd62d99fc33c661ea84bdfdcc7079a0de5f56d8f541d77be4->leave($__internal_4097209bbba9e1edd62d99fc33c661ea84bdfdcc7079a0de5f56d8f541d77be4_prof);

    }

    public function getTemplateName()
    {
        return ":deviceversion:new.html.twig";
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
    <h1>Deviceversion creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('device_version_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":deviceversion:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/deviceversion/new.html.twig");
    }
}
