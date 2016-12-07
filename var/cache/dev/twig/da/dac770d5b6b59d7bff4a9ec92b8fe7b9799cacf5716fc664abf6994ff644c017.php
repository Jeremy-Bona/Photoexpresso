<?php

/* :password:new.html.twig */
class __TwigTemplate_2b485308cc916cb40747e1db4b6041676f73178e026b000e23d5b0f63e0f1aa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":password:new.html.twig", 1);
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
        $__internal_0019463cd44112f2bdce7d4cfc13fd8fe10d8e695d178bd6520080e4f528de82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0019463cd44112f2bdce7d4cfc13fd8fe10d8e695d178bd6520080e4f528de82->enter($__internal_0019463cd44112f2bdce7d4cfc13fd8fe10d8e695d178bd6520080e4f528de82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":password:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0019463cd44112f2bdce7d4cfc13fd8fe10d8e695d178bd6520080e4f528de82->leave($__internal_0019463cd44112f2bdce7d4cfc13fd8fe10d8e695d178bd6520080e4f528de82_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_065962e7e1713c7970d13a9d185dc7c34d63410395f463e73f1d570f3a1004f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065962e7e1713c7970d13a9d185dc7c34d63410395f463e73f1d570f3a1004f9->enter($__internal_065962e7e1713c7970d13a9d185dc7c34d63410395f463e73f1d570f3a1004f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Password creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("passwd_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_065962e7e1713c7970d13a9d185dc7c34d63410395f463e73f1d570f3a1004f9->leave($__internal_065962e7e1713c7970d13a9d185dc7c34d63410395f463e73f1d570f3a1004f9_prof);

    }

    public function getTemplateName()
    {
        return ":password:new.html.twig";
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
    <h1>Password creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('passwd_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":password:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/password/new.html.twig");
    }
}
