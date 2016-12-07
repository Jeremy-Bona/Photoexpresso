<?php

/* :token:new.html.twig */
class __TwigTemplate_aa773bc6b0dee5dc7954ae1a4188f1ea19fc643f8c9117f07c4d22307dc2ceb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":token:new.html.twig", 1);
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
        $__internal_33f0f74bb42eaf9f3b90a5ebaa4d9fe85c68a0e0bbfd39259b1ae29b807c2891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f0f74bb42eaf9f3b90a5ebaa4d9fe85c68a0e0bbfd39259b1ae29b807c2891->enter($__internal_33f0f74bb42eaf9f3b90a5ebaa4d9fe85c68a0e0bbfd39259b1ae29b807c2891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":token:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33f0f74bb42eaf9f3b90a5ebaa4d9fe85c68a0e0bbfd39259b1ae29b807c2891->leave($__internal_33f0f74bb42eaf9f3b90a5ebaa4d9fe85c68a0e0bbfd39259b1ae29b807c2891_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_14980e355ceec5544dee46be08fcf73eab29fb4ef3c59a24f8dc1b8a41d32945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14980e355ceec5544dee46be08fcf73eab29fb4ef3c59a24f8dc1b8a41d32945->enter($__internal_14980e355ceec5544dee46be08fcf73eab29fb4ef3c59a24f8dc1b8a41d32945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Token creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("token_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_14980e355ceec5544dee46be08fcf73eab29fb4ef3c59a24f8dc1b8a41d32945->leave($__internal_14980e355ceec5544dee46be08fcf73eab29fb4ef3c59a24f8dc1b8a41d32945_prof);

    }

    public function getTemplateName()
    {
        return ":token:new.html.twig";
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
    <h1>Token creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('token_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":token:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/token/new.html.twig");
    }
}
