<?php

/* :rights:new.html.twig */
class __TwigTemplate_41700a71f1fd3a60b9c223741681b28529c52b60a045116d0c4863dbccd2b57b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rights:new.html.twig", 1);
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
        $__internal_a83e7b55af55e64d0ace20ac40463f643b95d25cb4020cc14d18d8074108d569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83e7b55af55e64d0ace20ac40463f643b95d25cb4020cc14d18d8074108d569->enter($__internal_a83e7b55af55e64d0ace20ac40463f643b95d25cb4020cc14d18d8074108d569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rights:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a83e7b55af55e64d0ace20ac40463f643b95d25cb4020cc14d18d8074108d569->leave($__internal_a83e7b55af55e64d0ace20ac40463f643b95d25cb4020cc14d18d8074108d569_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b775f2cfcb841f258d482d6d8a9394ebbeafd7919826820fb20b488a18de8131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b775f2cfcb841f258d482d6d8a9394ebbeafd7919826820fb20b488a18de8131->enter($__internal_b775f2cfcb841f258d482d6d8a9394ebbeafd7919826820fb20b488a18de8131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Right creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rights_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b775f2cfcb841f258d482d6d8a9394ebbeafd7919826820fb20b488a18de8131->leave($__internal_b775f2cfcb841f258d482d6d8a9394ebbeafd7919826820fb20b488a18de8131_prof);

    }

    public function getTemplateName()
    {
        return ":rights:new.html.twig";
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
    <h1>Right creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('rights_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":rights:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/rights/new.html.twig");
    }
}
