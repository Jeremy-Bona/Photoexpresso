<?php

/* order/new.html.twig */
class __TwigTemplate_547a034512f6a2810736d6ba966acb6243b8545e58dedcbc10cc57a6d0570559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "order/new.html.twig", 1);
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
        $__internal_f81b05a2788c59f02e8fdda30d5fe011a66150224915f79b74db8c7c65169867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81b05a2788c59f02e8fdda30d5fe011a66150224915f79b74db8c7c65169867->enter($__internal_f81b05a2788c59f02e8fdda30d5fe011a66150224915f79b74db8c7c65169867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f81b05a2788c59f02e8fdda30d5fe011a66150224915f79b74db8c7c65169867->leave($__internal_f81b05a2788c59f02e8fdda30d5fe011a66150224915f79b74db8c7c65169867_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_12c00406cd23c561707b2d5002c87f2a451148f4d7cfa8e205c0f1f125c2fbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c00406cd23c561707b2d5002c87f2a451148f4d7cfa8e205c0f1f125c2fbc9->enter($__internal_12c00406cd23c561707b2d5002c87f2a451148f4d7cfa8e205c0f1f125c2fbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_12c00406cd23c561707b2d5002c87f2a451148f4d7cfa8e205c0f1f125c2fbc9->leave($__internal_12c00406cd23c561707b2d5002c87f2a451148f4d7cfa8e205c0f1f125c2fbc9_prof);

    }

    public function getTemplateName()
    {
        return "order/new.html.twig";
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
", "order/new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/order/new.html.twig");
    }
}
