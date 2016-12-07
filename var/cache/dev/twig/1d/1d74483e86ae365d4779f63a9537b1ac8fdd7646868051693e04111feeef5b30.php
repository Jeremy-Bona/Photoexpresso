<?php

/* :useractions:show.html.twig */
class __TwigTemplate_90659d15e59b2687bd991b81efd0c25ce6833c0f9d65523c94badc1e389420d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":useractions:show.html.twig", 1);
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
        $__internal_31c9d216b444bedaef7cc4e7b6473cf9c678677347dd6eb45eb548dfea07f815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c9d216b444bedaef7cc4e7b6473cf9c678677347dd6eb45eb548dfea07f815->enter($__internal_31c9d216b444bedaef7cc4e7b6473cf9c678677347dd6eb45eb548dfea07f815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":useractions:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31c9d216b444bedaef7cc4e7b6473cf9c678677347dd6eb45eb548dfea07f815->leave($__internal_31c9d216b444bedaef7cc4e7b6473cf9c678677347dd6eb45eb548dfea07f815_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59e39506f49a3624fc3f9c3598f9b99b75ac3de68804c4d9ce370c21243d1eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e39506f49a3624fc3f9c3598f9b99b75ac3de68804c4d9ce370c21243d1eee->enter($__internal_59e39506f49a3624fc3f9c3598f9b99b75ac3de68804c4d9ce370c21243d1eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Useraction</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["useraction"]) ? $context["useraction"] : $this->getContext($context, "useraction")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datetime</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["useraction"]) ? $context["useraction"] : $this->getContext($context, "useraction")), "datetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["useraction"]) ? $context["useraction"] : $this->getContext($context, "useraction")), "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Details</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["useraction"]) ? $context["useraction"] : $this->getContext($context, "useraction")), "details", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_action_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_action_edit", array("id" => $this->getAttribute((isset($context["useraction"]) ? $context["useraction"] : $this->getContext($context, "useraction")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_59e39506f49a3624fc3f9c3598f9b99b75ac3de68804c4d9ce370c21243d1eee->leave($__internal_59e39506f49a3624fc3f9c3598f9b99b75ac3de68804c4d9ce370c21243d1eee_prof);

    }

    public function getTemplateName()
    {
        return ":useractions:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  86 => 31,  80 => 28,  74 => 25,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Useraction</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ useraction.id }}</td>
            </tr>
            <tr>
                <th>Datetime</th>
                <td>{% if useraction.datetime %}{{ useraction.datetime|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Details</th>
                <td>{{ useraction.details }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_action_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_action_edit', { 'id': useraction.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":useractions:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/useractions/show.html.twig");
    }
}
