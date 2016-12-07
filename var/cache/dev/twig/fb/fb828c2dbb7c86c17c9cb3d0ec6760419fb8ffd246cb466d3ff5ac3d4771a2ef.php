<?php

/* :useractions:new.html.twig */
class __TwigTemplate_5211f5e91e91f519a9cdb0abc6b96d542bf8d9076e535ed86be3354303d6af09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":useractions:new.html.twig", 1);
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
        $__internal_e39734558761d2d60d9770456a311ceae1f41244d2572db1ce51493707121cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39734558761d2d60d9770456a311ceae1f41244d2572db1ce51493707121cfc->enter($__internal_e39734558761d2d60d9770456a311ceae1f41244d2572db1ce51493707121cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":useractions:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e39734558761d2d60d9770456a311ceae1f41244d2572db1ce51493707121cfc->leave($__internal_e39734558761d2d60d9770456a311ceae1f41244d2572db1ce51493707121cfc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25aa98fbcfd598c30d2f9c23f0ee3d5ee3f53a036495691f8484e4d39254a247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25aa98fbcfd598c30d2f9c23f0ee3d5ee3f53a036495691f8484e4d39254a247->enter($__internal_25aa98fbcfd598c30d2f9c23f0ee3d5ee3f53a036495691f8484e4d39254a247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Useraction creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_action_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_25aa98fbcfd598c30d2f9c23f0ee3d5ee3f53a036495691f8484e4d39254a247->leave($__internal_25aa98fbcfd598c30d2f9c23f0ee3d5ee3f53a036495691f8484e4d39254a247_prof);

    }

    public function getTemplateName()
    {
        return ":useractions:new.html.twig";
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
    <h1>Useraction creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_action_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":useractions:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/useractions/new.html.twig");
    }
}
