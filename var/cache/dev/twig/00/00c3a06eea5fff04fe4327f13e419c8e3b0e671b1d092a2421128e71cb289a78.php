<?php

/* :notifications:show.html.twig */
class __TwigTemplate_17c9dd93b19c81b1153439dcedd8c0598bd3de022aef576dc0628d591b2f7f35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":notifications:show.html.twig", 1);
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
        $__internal_ca3fbd6f9e50fcf469cbf78a871ab778097338556295759ea0de72719b9e6885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3fbd6f9e50fcf469cbf78a871ab778097338556295759ea0de72719b9e6885->enter($__internal_ca3fbd6f9e50fcf469cbf78a871ab778097338556295759ea0de72719b9e6885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":notifications:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca3fbd6f9e50fcf469cbf78a871ab778097338556295759ea0de72719b9e6885->leave($__internal_ca3fbd6f9e50fcf469cbf78a871ab778097338556295759ea0de72719b9e6885_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fba460408f5cd1da3ac2cc731ac6e1edf39fa461d10f7dee906e1292894a2a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba460408f5cd1da3ac2cc731ac6e1edf39fa461d10f7dee906e1292894a2a2d->enter($__internal_fba460408f5cd1da3ac2cc731ac6e1edf39fa461d10f7dee906e1292894a2a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notification</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datetime</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "datetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "message", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Checked</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "checked", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notif_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notif_edit", array("id" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fba460408f5cd1da3ac2cc731ac6e1edf39fa461d10f7dee906e1292894a2a2d->leave($__internal_fba460408f5cd1da3ac2cc731ac6e1edf39fa461d10f7dee906e1292894a2a2d_prof);

    }

    public function getTemplateName()
    {
        return ":notifications:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  97 => 35,  91 => 32,  85 => 29,  71 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Notification</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ notification.id }}</td>
            </tr>
            <tr>
                <th>Datetime</th>
                <td>{% if notification.datetime %}{{ notification.datetime|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>{{ notification.message }}</td>
            </tr>
            <tr>
                <th>Checked</th>
                <td>{% if notification.checked %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('notif_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('notif_edit', { 'id': notification.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":notifications:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/notifications/show.html.twig");
    }
}
