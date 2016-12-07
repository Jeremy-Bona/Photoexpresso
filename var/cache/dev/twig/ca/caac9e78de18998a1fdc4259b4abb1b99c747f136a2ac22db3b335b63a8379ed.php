<?php

/* :printsize:new.html.twig */
class __TwigTemplate_c180952d84df7eb5bd7e5d706ea9a711ce780a7410e47a76dd712ba69fde1efa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":printsize:new.html.twig", 1);
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
        $__internal_c802f3ab29cf6abf1207c8def86543930782ba0d300b664d446b7a4cc80a8182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c802f3ab29cf6abf1207c8def86543930782ba0d300b664d446b7a4cc80a8182->enter($__internal_c802f3ab29cf6abf1207c8def86543930782ba0d300b664d446b7a4cc80a8182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":printsize:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c802f3ab29cf6abf1207c8def86543930782ba0d300b664d446b7a4cc80a8182->leave($__internal_c802f3ab29cf6abf1207c8def86543930782ba0d300b664d446b7a4cc80a8182_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc2f28900a371ab39550374c00b8efaf11f82add9d1249c35b483864f91ac72e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2f28900a371ab39550374c00b8efaf11f82add9d1249c35b483864f91ac72e->enter($__internal_cc2f28900a371ab39550374c00b8efaf11f82add9d1249c35b483864f91ac72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Printsize creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("print_size_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_cc2f28900a371ab39550374c00b8efaf11f82add9d1249c35b483864f91ac72e->leave($__internal_cc2f28900a371ab39550374c00b8efaf11f82add9d1249c35b483864f91ac72e_prof);

    }

    public function getTemplateName()
    {
        return ":printsize:new.html.twig";
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
    <h1>Printsize creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('print_size_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":printsize:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/printsize/new.html.twig");
    }
}
