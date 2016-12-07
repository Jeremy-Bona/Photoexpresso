<?php

/* :address:new.html.twig */
class __TwigTemplate_3015c9bb3dac8a3c14f66199229eba38d58982a7943892caf11e2277b9023d96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":address:new.html.twig", 1);
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
        $__internal_0d5254a3a5da16254d6854fd0f2979be94531441d45e2123dd6f2e35cc04575c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5254a3a5da16254d6854fd0f2979be94531441d45e2123dd6f2e35cc04575c->enter($__internal_0d5254a3a5da16254d6854fd0f2979be94531441d45e2123dd6f2e35cc04575c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":address:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d5254a3a5da16254d6854fd0f2979be94531441d45e2123dd6f2e35cc04575c->leave($__internal_0d5254a3a5da16254d6854fd0f2979be94531441d45e2123dd6f2e35cc04575c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2f2f95af04a90a3f78b88bc8b68d34c369c71e605aa48b67ec884b2229cb422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f2f95af04a90a3f78b88bc8b68d34c369c71e605aa48b67ec884b2229cb422->enter($__internal_b2f2f95af04a90a3f78b88bc8b68d34c369c71e605aa48b67ec884b2229cb422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Address creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adress_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b2f2f95af04a90a3f78b88bc8b68d34c369c71e605aa48b67ec884b2229cb422->leave($__internal_b2f2f95af04a90a3f78b88bc8b68d34c369c71e605aa48b67ec884b2229cb422_prof);

    }

    public function getTemplateName()
    {
        return ":address:new.html.twig";
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
    <h1>Address creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('adress_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":address:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/address/new.html.twig");
    }
}
