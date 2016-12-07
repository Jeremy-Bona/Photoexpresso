<?php

/* address/new.html.twig */
class __TwigTemplate_93fd68a74b079e44e301a5b23d3a7e6bd1f4b836731d661dc8e5684735299897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "address/new.html.twig", 1);
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
        $__internal_b4b60be2ffc2f2d8f9ab97b95ebc9224935842087bda406420afea05365be804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b60be2ffc2f2d8f9ab97b95ebc9224935842087bda406420afea05365be804->enter($__internal_b4b60be2ffc2f2d8f9ab97b95ebc9224935842087bda406420afea05365be804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "address/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4b60be2ffc2f2d8f9ab97b95ebc9224935842087bda406420afea05365be804->leave($__internal_b4b60be2ffc2f2d8f9ab97b95ebc9224935842087bda406420afea05365be804_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e6c3006327f74b3e37fbce3f5dba2de03bedb36deb5981460f1d43cfa457aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6c3006327f74b3e37fbce3f5dba2de03bedb36deb5981460f1d43cfa457aad->enter($__internal_4e6c3006327f74b3e37fbce3f5dba2de03bedb36deb5981460f1d43cfa457aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4e6c3006327f74b3e37fbce3f5dba2de03bedb36deb5981460f1d43cfa457aad->leave($__internal_4e6c3006327f74b3e37fbce3f5dba2de03bedb36deb5981460f1d43cfa457aad_prof);

    }

    public function getTemplateName()
    {
        return "address/new.html.twig";
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
", "address/new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/address/new.html.twig");
    }
}
