<?php

/* :ticket:new.html.twig */
class __TwigTemplate_31f5a9953f27d36acbb06e28ec17fac8e927b9ca91214f45edc55761a97bc44a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":ticket:new.html.twig", 1);
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
        $__internal_b0578f40e6f40114e3e2cdd9b70c8c2ebf4f3ac3b131f39dc8d5ea1a18a4fc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0578f40e6f40114e3e2cdd9b70c8c2ebf4f3ac3b131f39dc8d5ea1a18a4fc55->enter($__internal_b0578f40e6f40114e3e2cdd9b70c8c2ebf4f3ac3b131f39dc8d5ea1a18a4fc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ticket:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0578f40e6f40114e3e2cdd9b70c8c2ebf4f3ac3b131f39dc8d5ea1a18a4fc55->leave($__internal_b0578f40e6f40114e3e2cdd9b70c8c2ebf4f3ac3b131f39dc8d5ea1a18a4fc55_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9180e7b48574d8459c146c5a7b9d2245bff575eb6b3cd2bd4a882660cafdb8c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9180e7b48574d8459c146c5a7b9d2245bff575eb6b3cd2bd4a882660cafdb8c2->enter($__internal_9180e7b48574d8459c146c5a7b9d2245bff575eb6b3cd2bd4a882660cafdb8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ticket creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tickets_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9180e7b48574d8459c146c5a7b9d2245bff575eb6b3cd2bd4a882660cafdb8c2->leave($__internal_9180e7b48574d8459c146c5a7b9d2245bff575eb6b3cd2bd4a882660cafdb8c2_prof);

    }

    public function getTemplateName()
    {
        return ":ticket:new.html.twig";
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
    <h1>Ticket creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('tickets_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":ticket:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/ticket/new.html.twig");
    }
}
