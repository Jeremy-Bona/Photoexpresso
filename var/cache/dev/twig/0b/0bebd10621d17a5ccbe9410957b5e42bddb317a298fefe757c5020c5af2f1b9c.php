<?php

/* :promotionnal:new.html.twig */
class __TwigTemplate_f7eedc61659dffcf9e82714737d24de556dae0ed9d3275bbfb4db422d74dbdbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":promotionnal:new.html.twig", 1);
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
        $__internal_d6e10e3f99c00d6ba1ff86e14b1d3a8eec4f8d380bb03e7376193679bf2912f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e10e3f99c00d6ba1ff86e14b1d3a8eec4f8d380bb03e7376193679bf2912f9->enter($__internal_d6e10e3f99c00d6ba1ff86e14b1d3a8eec4f8d380bb03e7376193679bf2912f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":promotionnal:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6e10e3f99c00d6ba1ff86e14b1d3a8eec4f8d380bb03e7376193679bf2912f9->leave($__internal_d6e10e3f99c00d6ba1ff86e14b1d3a8eec4f8d380bb03e7376193679bf2912f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e0976e1f4ba5933ad937387d85542e6c9c10e76720cf69e70284689ffc7ad89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0976e1f4ba5933ad937387d85542e6c9c10e76720cf69e70284689ffc7ad89->enter($__internal_5e0976e1f4ba5933ad937387d85542e6c9c10e76720cf69e70284689ffc7ad89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Promotionnal creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promo_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5e0976e1f4ba5933ad937387d85542e6c9c10e76720cf69e70284689ffc7ad89->leave($__internal_5e0976e1f4ba5933ad937387d85542e6c9c10e76720cf69e70284689ffc7ad89_prof);

    }

    public function getTemplateName()
    {
        return ":promotionnal:new.html.twig";
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
    <h1>Promotionnal creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('promo_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":promotionnal:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/promotionnal/new.html.twig");
    }
}
