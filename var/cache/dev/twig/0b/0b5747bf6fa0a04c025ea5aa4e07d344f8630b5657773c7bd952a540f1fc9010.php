<?php

/* :userrights:new.html.twig */
class __TwigTemplate_af30a01a96ba7b4de3619a0a3cfa945ab18b3ec1c7227b0feeb10629b9260748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":userrights:new.html.twig", 1);
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
        $__internal_e1d2da7145919b062fc93cb212900581da00d6a0eefa63e3dc131f0c1dbb05c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d2da7145919b062fc93cb212900581da00d6a0eefa63e3dc131f0c1dbb05c2->enter($__internal_e1d2da7145919b062fc93cb212900581da00d6a0eefa63e3dc131f0c1dbb05c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":userrights:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1d2da7145919b062fc93cb212900581da00d6a0eefa63e3dc131f0c1dbb05c2->leave($__internal_e1d2da7145919b062fc93cb212900581da00d6a0eefa63e3dc131f0c1dbb05c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ab6a32814da3ed4e570faf9e674bdc088d0190537295af1cd6a358f8b79ee02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab6a32814da3ed4e570faf9e674bdc088d0190537295af1cd6a358f8b79ee02->enter($__internal_9ab6a32814da3ed4e570faf9e674bdc088d0190537295af1cd6a358f8b79ee02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Userright creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_rights_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9ab6a32814da3ed4e570faf9e674bdc088d0190537295af1cd6a358f8b79ee02->leave($__internal_9ab6a32814da3ed4e570faf9e674bdc088d0190537295af1cd6a358f8b79ee02_prof);

    }

    public function getTemplateName()
    {
        return ":userrights:new.html.twig";
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
    <h1>Userright creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_rights_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":userrights:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/userrights/new.html.twig");
    }
}
