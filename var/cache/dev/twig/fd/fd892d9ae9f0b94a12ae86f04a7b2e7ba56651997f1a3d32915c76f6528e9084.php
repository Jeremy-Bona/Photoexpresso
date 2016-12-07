<?php

/* :userdevice:show.html.twig */
class __TwigTemplate_5195ef800f353598b60dd25c67add7ce9923e6788837a0c0cec95c7481ea668a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":userdevice:show.html.twig", 1);
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
        $__internal_0f5f643d931f89aa13c74eeed02c34151b6cc2901c325ea30b8a1a31a5bb7ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5f643d931f89aa13c74eeed02c34151b6cc2901c325ea30b8a1a31a5bb7ed6->enter($__internal_0f5f643d931f89aa13c74eeed02c34151b6cc2901c325ea30b8a1a31a5bb7ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":userdevice:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f5f643d931f89aa13c74eeed02c34151b6cc2901c325ea30b8a1a31a5bb7ed6->leave($__internal_0f5f643d931f89aa13c74eeed02c34151b6cc2901c325ea30b8a1a31a5bb7ed6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_999dc211c1bc45aaf53b7c4cf9c1a9e0d315cf4d5ea22d9ce900da3f148154ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999dc211c1bc45aaf53b7c4cf9c1a9e0d315cf4d5ea22d9ce900da3f148154ad->enter($__internal_999dc211c1bc45aaf53b7c4cf9c1a9e0d315cf4d5ea22d9ce900da3f148154ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Userdevice</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userdevice"]) ? $context["userdevice"] : $this->getContext($context, "userdevice")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userdevice"]) ? $context["userdevice"] : $this->getContext($context, "userdevice")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datetime</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["userdevice"]) ? $context["userdevice"] : $this->getContext($context, "userdevice")), "datetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["userdevice"]) ? $context["userdevice"] : $this->getContext($context, "userdevice")), "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Connected</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["userdevice"]) ? $context["userdevice"] : $this->getContext($context, "userdevice")), "connected", array())) {
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_device_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_device_edit", array("id" => $this->getAttribute((isset($context["userdevice"]) ? $context["userdevice"] : $this->getContext($context, "userdevice")), "id", array()))), "html", null, true);
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
        
        $__internal_999dc211c1bc45aaf53b7c4cf9c1a9e0d315cf4d5ea22d9ce900da3f148154ad->leave($__internal_999dc211c1bc45aaf53b7c4cf9c1a9e0d315cf4d5ea22d9ce900da3f148154ad_prof);

    }

    public function getTemplateName()
    {
        return ":userdevice:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  97 => 35,  91 => 32,  85 => 29,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Userdevice</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ userdevice.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ userdevice.name }}</td>
            </tr>
            <tr>
                <th>Datetime</th>
                <td>{% if userdevice.datetime %}{{ userdevice.datetime|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Connected</th>
                <td>{% if userdevice.connected %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_device_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_device_edit', { 'id': userdevice.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":userdevice:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/userdevice/show.html.twig");
    }
}
