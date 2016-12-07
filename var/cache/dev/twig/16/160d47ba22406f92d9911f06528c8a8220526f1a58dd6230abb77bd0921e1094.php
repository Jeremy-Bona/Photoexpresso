<?php

/* :pricequantityprintsize:new.html.twig */
class __TwigTemplate_30eb0886379b74337c00c9d3fe266cd014c9813ff67097eb3698f23afcdb7468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pricequantityprintsize:new.html.twig", 1);
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
        $__internal_a257f7b7a9a1b264ba90898a406d2501ce9afbd9d1cc0b5661cb061590c78625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a257f7b7a9a1b264ba90898a406d2501ce9afbd9d1cc0b5661cb061590c78625->enter($__internal_a257f7b7a9a1b264ba90898a406d2501ce9afbd9d1cc0b5661cb061590c78625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pricequantityprintsize:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a257f7b7a9a1b264ba90898a406d2501ce9afbd9d1cc0b5661cb061590c78625->leave($__internal_a257f7b7a9a1b264ba90898a406d2501ce9afbd9d1cc0b5661cb061590c78625_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fd94975dfe34a5b9f9118e67c4f38412d10d5815754bf9d39ced6cfb2f4fcb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd94975dfe34a5b9f9118e67c4f38412d10d5815754bf9d39ced6cfb2f4fcb5->enter($__internal_9fd94975dfe34a5b9f9118e67c4f38412d10d5815754bf9d39ced6cfb2f4fcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pricequantityprintsize creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("price_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9fd94975dfe34a5b9f9118e67c4f38412d10d5815754bf9d39ced6cfb2f4fcb5->leave($__internal_9fd94975dfe34a5b9f9118e67c4f38412d10d5815754bf9d39ced6cfb2f4fcb5_prof);

    }

    public function getTemplateName()
    {
        return ":pricequantityprintsize:new.html.twig";
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
    <h1>Pricequantityprintsize creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('price_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":pricequantityprintsize:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/pricequantityprintsize/new.html.twig");
    }
}
