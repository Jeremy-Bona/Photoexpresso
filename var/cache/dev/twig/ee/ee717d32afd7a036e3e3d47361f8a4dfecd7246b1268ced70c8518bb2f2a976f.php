<?php

/* :photo:new.html.twig */
class __TwigTemplate_6b999bf4570f6650c00ec22cf702b0b37baba00c53f3ee931e3bf0ba2acb72e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":photo:new.html.twig", 1);
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
        $__internal_e85c5789284dae67dbad1e86e0d48f2062de8ec76dd15560c75d63ac6d9844ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85c5789284dae67dbad1e86e0d48f2062de8ec76dd15560c75d63ac6d9844ad->enter($__internal_e85c5789284dae67dbad1e86e0d48f2062de8ec76dd15560c75d63ac6d9844ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":photo:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e85c5789284dae67dbad1e86e0d48f2062de8ec76dd15560c75d63ac6d9844ad->leave($__internal_e85c5789284dae67dbad1e86e0d48f2062de8ec76dd15560c75d63ac6d9844ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad8b1815f349d7c341013e8bbbe204d6071c42ed2997b6a710ed48984a83ee0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8b1815f349d7c341013e8bbbe204d6071c42ed2997b6a710ed48984a83ee0b->enter($__internal_ad8b1815f349d7c341013e8bbbe204d6071c42ed2997b6a710ed48984a83ee0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Photo creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("photo_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ad8b1815f349d7c341013e8bbbe204d6071c42ed2997b6a710ed48984a83ee0b->leave($__internal_ad8b1815f349d7c341013e8bbbe204d6071c42ed2997b6a710ed48984a83ee0b_prof);

    }

    public function getTemplateName()
    {
        return ":photo:new.html.twig";
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
    <h1>Photo creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('photo_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":photo:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/photo/new.html.twig");
    }
}
