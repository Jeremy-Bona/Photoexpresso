<?php

/* :righstgroup:new.html.twig */
class __TwigTemplate_3c4f87ded83b73167f7d0063fa0cb9494ff5d36062f21ce1fd3714eb41009c0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":righstgroup:new.html.twig", 1);
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
        $__internal_76bdda01b8875463976e4e04cf73015d80f9f297b0bc049d8c3d4bfe38b935ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bdda01b8875463976e4e04cf73015d80f9f297b0bc049d8c3d4bfe38b935ad->enter($__internal_76bdda01b8875463976e4e04cf73015d80f9f297b0bc049d8c3d4bfe38b935ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":righstgroup:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76bdda01b8875463976e4e04cf73015d80f9f297b0bc049d8c3d4bfe38b935ad->leave($__internal_76bdda01b8875463976e4e04cf73015d80f9f297b0bc049d8c3d4bfe38b935ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_50e0becd0cc9e20fb0c12c0de8d17b4cad05defd6293fb4f4aee7f1e87d70c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e0becd0cc9e20fb0c12c0de8d17b4cad05defd6293fb4f4aee7f1e87d70c98->enter($__internal_50e0becd0cc9e20fb0c12c0de8d17b4cad05defd6293fb4f4aee7f1e87d70c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Righstgroup creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("right_group_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_50e0becd0cc9e20fb0c12c0de8d17b4cad05defd6293fb4f4aee7f1e87d70c98->leave($__internal_50e0becd0cc9e20fb0c12c0de8d17b4cad05defd6293fb4f4aee7f1e87d70c98_prof);

    }

    public function getTemplateName()
    {
        return ":righstgroup:new.html.twig";
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
    <h1>Righstgroup creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('right_group_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":righstgroup:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/righstgroup/new.html.twig");
    }
}
