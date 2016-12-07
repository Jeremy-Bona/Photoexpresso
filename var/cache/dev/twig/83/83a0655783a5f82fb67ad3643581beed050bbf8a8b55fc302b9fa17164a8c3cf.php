<?php

/* :device:show.html.twig */
class __TwigTemplate_883b3e0b8afefb339efa7d5676b6c5c0bec70a064c7068b86509dd7d563ce4e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":device:show.html.twig", 1);
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
        $__internal_03fcb5ca4fbb6d3804373db4815bd31c347d489ba79f94b3de7454771ab63885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03fcb5ca4fbb6d3804373db4815bd31c347d489ba79f94b3de7454771ab63885->enter($__internal_03fcb5ca4fbb6d3804373db4815bd31c347d489ba79f94b3de7454771ab63885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":device:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03fcb5ca4fbb6d3804373db4815bd31c347d489ba79f94b3de7454771ab63885->leave($__internal_03fcb5ca4fbb6d3804373db4815bd31c347d489ba79f94b3de7454771ab63885_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97afae27c1c1389c1b48269d63991f2d152f5f3e0fa696f8101e05060a36590d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97afae27c1c1389c1b48269d63991f2d152f5f3e0fa696f8101e05060a36590d->enter($__internal_97afae27c1c1389c1b48269d63991f2d152f5f3e0fa696f8101e05060a36590d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Device</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imei</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "imei", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modei</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "modei", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("device_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("device_edit", array("id" => $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "id", array()))), "html", null, true);
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
        
        $__internal_97afae27c1c1389c1b48269d63991f2d152f5f3e0fa696f8101e05060a36590d->leave($__internal_97afae27c1c1389c1b48269d63991f2d152f5f3e0fa696f8101e05060a36590d_prof);

    }

    public function getTemplateName()
    {
        return ":device:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Device</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ device.id }}</td>
            </tr>
            <tr>
                <th>Imei</th>
                <td>{{ device.imei }}</td>
            </tr>
            <tr>
                <th>Modei</th>
                <td>{{ device.modei }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ device.name }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('device_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('device_edit', { 'id': device.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":device:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/device/show.html.twig");
    }
}
