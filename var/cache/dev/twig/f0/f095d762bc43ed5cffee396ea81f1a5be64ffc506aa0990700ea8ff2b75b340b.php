<?php

/* :appversioning:new.html.twig */
class __TwigTemplate_a9d3b47618ea3489e57928ed7eb85e9ac4bc31211044cad3738173f6875e63da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":appversioning:new.html.twig", 1);
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
        $__internal_8f45c057bd5757ba044f224ba31b051b2eeaa99377841728e047f4e68a5e7f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f45c057bd5757ba044f224ba31b051b2eeaa99377841728e047f4e68a5e7f4a->enter($__internal_8f45c057bd5757ba044f224ba31b051b2eeaa99377841728e047f4e68a5e7f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":appversioning:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f45c057bd5757ba044f224ba31b051b2eeaa99377841728e047f4e68a5e7f4a->leave($__internal_8f45c057bd5757ba044f224ba31b051b2eeaa99377841728e047f4e68a5e7f4a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a123093c9aa0e62c1ca37298b9ccc9d59acd088363bf2249144c5b0f84f973e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a123093c9aa0e62c1ca37298b9ccc9d59acd088363bf2249144c5b0f84f973e7->enter($__internal_a123093c9aa0e62c1ca37298b9ccc9d59acd088363bf2249144c5b0f84f973e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Appversioning creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_version_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a123093c9aa0e62c1ca37298b9ccc9d59acd088363bf2249144c5b0f84f973e7->leave($__internal_a123093c9aa0e62c1ca37298b9ccc9d59acd088363bf2249144c5b0f84f973e7_prof);

    }

    public function getTemplateName()
    {
        return ":appversioning:new.html.twig";
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
    <h1>Appversioning creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('app_version_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":appversioning:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/appversioning/new.html.twig");
    }
}
