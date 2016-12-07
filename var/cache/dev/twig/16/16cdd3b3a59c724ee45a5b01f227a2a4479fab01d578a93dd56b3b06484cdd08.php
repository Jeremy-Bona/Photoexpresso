<?php

/* :userrights:edit.html.twig */
class __TwigTemplate_8673ea555ba4acc8e9ea58d71f255cf7021a9f19c0cbfe53d320e9e7148d6caa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":userrights:edit.html.twig", 1);
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
        $__internal_d9d1ceb162c6088715f640b55a6e2dcf89fa4368270bae15b111af90b226c4ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d1ceb162c6088715f640b55a6e2dcf89fa4368270bae15b111af90b226c4ff->enter($__internal_d9d1ceb162c6088715f640b55a6e2dcf89fa4368270bae15b111af90b226c4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":userrights:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9d1ceb162c6088715f640b55a6e2dcf89fa4368270bae15b111af90b226c4ff->leave($__internal_d9d1ceb162c6088715f640b55a6e2dcf89fa4368270bae15b111af90b226c4ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6579ab9a7c9095860bb4b026fe96b29e7e1b783c7b1fb71d780b2ab38c05ba7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6579ab9a7c9095860bb4b026fe96b29e7e1b783c7b1fb71d780b2ab38c05ba7e->enter($__internal_6579ab9a7c9095860bb4b026fe96b29e7e1b783c7b1fb71d780b2ab38c05ba7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Userright edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_rights_index");
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
        
        $__internal_6579ab9a7c9095860bb4b026fe96b29e7e1b783c7b1fb71d780b2ab38c05ba7e->leave($__internal_6579ab9a7c9095860bb4b026fe96b29e7e1b783c7b1fb71d780b2ab38c05ba7e_prof);

    }

    public function getTemplateName()
    {
        return ":userrights:edit.html.twig";
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
    <h1>Userright edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_rights_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":userrights:edit.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/userrights/edit.html.twig");
    }
}
