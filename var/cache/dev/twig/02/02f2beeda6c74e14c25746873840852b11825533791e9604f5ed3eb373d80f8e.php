<?php

/* :righstgroup:edit.html.twig */
class __TwigTemplate_b8b0009d1f748cd056c8df174061048044a3164db45155c0fbb8205caf3c1549 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":righstgroup:edit.html.twig", 1);
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
        $__internal_bd2e2106888fdfd2f66d4c897a7e42c12de23f5969bdca5cb393a83a979f1426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2e2106888fdfd2f66d4c897a7e42c12de23f5969bdca5cb393a83a979f1426->enter($__internal_bd2e2106888fdfd2f66d4c897a7e42c12de23f5969bdca5cb393a83a979f1426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":righstgroup:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd2e2106888fdfd2f66d4c897a7e42c12de23f5969bdca5cb393a83a979f1426->leave($__internal_bd2e2106888fdfd2f66d4c897a7e42c12de23f5969bdca5cb393a83a979f1426_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cabe5d9b404720e3fa6c645160c4e63afa7ac39b0013f887e13e7e0ee959be1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cabe5d9b404720e3fa6c645160c4e63afa7ac39b0013f887e13e7e0ee959be1b->enter($__internal_cabe5d9b404720e3fa6c645160c4e63afa7ac39b0013f887e13e7e0ee959be1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Righstgroup edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("right_group_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_cabe5d9b404720e3fa6c645160c4e63afa7ac39b0013f887e13e7e0ee959be1b->leave($__internal_cabe5d9b404720e3fa6c645160c4e63afa7ac39b0013f887e13e7e0ee959be1b_prof);

    }

    public function getTemplateName()
    {
        return ":righstgroup:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Righstgroup edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('right_group_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":righstgroup:edit.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/righstgroup/edit.html.twig");
    }
}
