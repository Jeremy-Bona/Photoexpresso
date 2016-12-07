<?php

/* :userpromo:new.html.twig */
class __TwigTemplate_26cb27f4d0c8f4b4a8552153d3d5dbd6cb2e97680c4f30782619eb4fa6ef1d5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":userpromo:new.html.twig", 1);
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
        $__internal_22d489c6fd5ef5e0cf5adcb42999b4381fe9205e77fad33777784311be7a888a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d489c6fd5ef5e0cf5adcb42999b4381fe9205e77fad33777784311be7a888a->enter($__internal_22d489c6fd5ef5e0cf5adcb42999b4381fe9205e77fad33777784311be7a888a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":userpromo:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22d489c6fd5ef5e0cf5adcb42999b4381fe9205e77fad33777784311be7a888a->leave($__internal_22d489c6fd5ef5e0cf5adcb42999b4381fe9205e77fad33777784311be7a888a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0a6b2774d5d27ba849163c868175f60b0a0974ca4a9683899da48333d84246a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a6b2774d5d27ba849163c868175f60b0a0974ca4a9683899da48333d84246a->enter($__internal_b0a6b2774d5d27ba849163c868175f60b0a0974ca4a9683899da48333d84246a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Userpromo creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_promo_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b0a6b2774d5d27ba849163c868175f60b0a0974ca4a9683899da48333d84246a->leave($__internal_b0a6b2774d5d27ba849163c868175f60b0a0974ca4a9683899da48333d84246a_prof);

    }

    public function getTemplateName()
    {
        return ":userpromo:new.html.twig";
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
    <h1>Userpromo creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_promo_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":userpromo:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/userpromo/new.html.twig");
    }
}
