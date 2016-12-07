<?php

/* :device:index.html.twig */
class __TwigTemplate_ddb5c0b0da4f820f975e9ec94db0598bb6774a306003128e08df0878aca3aaf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":device:index.html.twig", 1);
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
        $__internal_1893ab712e6f41fbf03814b0e8ef4fa99680945a450f0224579b0889a526558f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1893ab712e6f41fbf03814b0e8ef4fa99680945a450f0224579b0889a526558f->enter($__internal_1893ab712e6f41fbf03814b0e8ef4fa99680945a450f0224579b0889a526558f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":device:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1893ab712e6f41fbf03814b0e8ef4fa99680945a450f0224579b0889a526558f->leave($__internal_1893ab712e6f41fbf03814b0e8ef4fa99680945a450f0224579b0889a526558f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e53106d055eab68ca3f5f679f6f8cec5c7e580b0fae7a68a9919046df89c27a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53106d055eab68ca3f5f679f6f8cec5c7e580b0fae7a68a9919046df89c27a9->enter($__internal_e53106d055eab68ca3f5f679f6f8cec5c7e580b0fae7a68a9919046df89c27a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Devices list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Imei</th>
                <th>Modei</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devices"]) ? $context["devices"] : $this->getContext($context, "devices")));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("device_show", array("id" => $this->getAttribute($context["device"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "imei", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "modei", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("device_show", array("id" => $this->getAttribute($context["device"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("device_edit", array("id" => $this->getAttribute($context["device"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("device_new");
        echo "\">Create a new device</a>
        </li>
    </ul>
";
        
        $__internal_e53106d055eab68ca3f5f679f6f8cec5c7e580b0fae7a68a9919046df89c27a9->leave($__internal_e53106d055eab68ca3f5f679f6f8cec5c7e580b0fae7a68a9919046df89c27a9_prof);

    }

    public function getTemplateName()
    {
        return ":device:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Devices list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Imei</th>
                <th>Modei</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for device in devices %}
            <tr>
                <td><a href=\"{{ path('device_show', { 'id': device.id }) }}\">{{ device.id }}</a></td>
                <td>{{ device.imei }}</td>
                <td>{{ device.modei }}</td>
                <td>{{ device.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('device_show', { 'id': device.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('device_edit', { 'id': device.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('device_new') }}\">Create a new device</a>
        </li>
    </ul>
{% endblock %}
", ":device:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/device/index.html.twig");
    }
}
