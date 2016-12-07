<?php

/* :device:new.html.twig */
class __TwigTemplate_4f5af04463c48219a863d25ea851765399afcacf9a9075916bbde0fbbf9b43e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":device:new.html.twig", 1);
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
        $__internal_167f325a4c0e7f4a66cd56282c5b3db06d96100c495f70dca5332989bc97ca85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167f325a4c0e7f4a66cd56282c5b3db06d96100c495f70dca5332989bc97ca85->enter($__internal_167f325a4c0e7f4a66cd56282c5b3db06d96100c495f70dca5332989bc97ca85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":device:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_167f325a4c0e7f4a66cd56282c5b3db06d96100c495f70dca5332989bc97ca85->leave($__internal_167f325a4c0e7f4a66cd56282c5b3db06d96100c495f70dca5332989bc97ca85_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bff4faaf818b555f1258b10f22bcbc342dcf88775671a669c7f236d8116cfd48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff4faaf818b555f1258b10f22bcbc342dcf88775671a669c7f236d8116cfd48->enter($__internal_bff4faaf818b555f1258b10f22bcbc342dcf88775671a669c7f236d8116cfd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Device creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("device_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bff4faaf818b555f1258b10f22bcbc342dcf88775671a669c7f236d8116cfd48->leave($__internal_bff4faaf818b555f1258b10f22bcbc342dcf88775671a669c7f236d8116cfd48_prof);

    }

    public function getTemplateName()
    {
        return ":device:new.html.twig";
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
    <h1>Device creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('device_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":device:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/device/new.html.twig");
    }
}
