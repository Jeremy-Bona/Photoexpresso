<?php

/* :useractions:edit.html.twig */
class __TwigTemplate_7b1cf15efc1b5233509d9ef51524a594fcee5b4756b5ba126b0f0a14ceec9287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":useractions:edit.html.twig", 1);
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
        $__internal_ba817c5931280fc86d93ea3fdbff9c08b15aaae21a0a254cd48ca9c17a559c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba817c5931280fc86d93ea3fdbff9c08b15aaae21a0a254cd48ca9c17a559c47->enter($__internal_ba817c5931280fc86d93ea3fdbff9c08b15aaae21a0a254cd48ca9c17a559c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":useractions:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba817c5931280fc86d93ea3fdbff9c08b15aaae21a0a254cd48ca9c17a559c47->leave($__internal_ba817c5931280fc86d93ea3fdbff9c08b15aaae21a0a254cd48ca9c17a559c47_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac3400d7477ce3cf63081732c64752f6edd8f87f6c9a2ec42c0e526c6a467c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3400d7477ce3cf63081732c64752f6edd8f87f6c9a2ec42c0e526c6a467c04->enter($__internal_ac3400d7477ce3cf63081732c64752f6edd8f87f6c9a2ec42c0e526c6a467c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Useraction edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_action_index");
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
        
        $__internal_ac3400d7477ce3cf63081732c64752f6edd8f87f6c9a2ec42c0e526c6a467c04->leave($__internal_ac3400d7477ce3cf63081732c64752f6edd8f87f6c9a2ec42c0e526c6a467c04_prof);

    }

    public function getTemplateName()
    {
        return ":useractions:edit.html.twig";
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
    <h1>Useraction edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_action_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":useractions:edit.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/useractions/edit.html.twig");
    }
}
