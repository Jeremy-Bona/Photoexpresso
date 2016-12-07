<?php

/* :userdevice:index.html.twig */
class __TwigTemplate_82e4fca63dd1ec363c66a6b2b76995bb6e8f9e1713b419423b7f957e3a087609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":userdevice:index.html.twig", 1);
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
        $__internal_4bd410f8ae6e327b34edb0fc33f5e37f5de2c18bb50cb05d1f196f14ade444c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd410f8ae6e327b34edb0fc33f5e37f5de2c18bb50cb05d1f196f14ade444c6->enter($__internal_4bd410f8ae6e327b34edb0fc33f5e37f5de2c18bb50cb05d1f196f14ade444c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":userdevice:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bd410f8ae6e327b34edb0fc33f5e37f5de2c18bb50cb05d1f196f14ade444c6->leave($__internal_4bd410f8ae6e327b34edb0fc33f5e37f5de2c18bb50cb05d1f196f14ade444c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d191e743a0e45b31e8bd10a73276776c0d2a958db7b21b3280730f73070b62b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d191e743a0e45b31e8bd10a73276776c0d2a958db7b21b3280730f73070b62b4->enter($__internal_d191e743a0e45b31e8bd10a73276776c0d2a958db7b21b3280730f73070b62b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Userdevices list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Datetime</th>
                <th>Connected</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userdevices"]) ? $context["userdevices"] : $this->getContext($context, "userdevices")));
        foreach ($context['_seq'] as $context["_key"] => $context["userdevice"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_device_show", array("id" => $this->getAttribute($context["userdevice"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["userdevice"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["userdevice"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["userdevice"], "datetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["userdevice"], "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["userdevice"], "connected", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_device_show", array("id" => $this->getAttribute($context["userdevice"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_device_edit", array("id" => $this->getAttribute($context["userdevice"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userdevice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_device_new");
        echo "\">Create a new userdevice</a>
        </li>
    </ul>
";
        
        $__internal_d191e743a0e45b31e8bd10a73276776c0d2a958db7b21b3280730f73070b62b4->leave($__internal_d191e743a0e45b31e8bd10a73276776c0d2a958db7b21b3280730f73070b62b4_prof);

    }

    public function getTemplateName()
    {
        return ":userdevice:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  107 => 35,  95 => 29,  89 => 26,  78 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Userdevices list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Datetime</th>
                <th>Connected</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for userdevice in userdevices %}
            <tr>
                <td><a href=\"{{ path('user_device_show', { 'id': userdevice.id }) }}\">{{ userdevice.id }}</a></td>
                <td>{{ userdevice.name }}</td>
                <td>{% if userdevice.datetime %}{{ userdevice.datetime|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if userdevice.connected %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_device_show', { 'id': userdevice.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_device_edit', { 'id': userdevice.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_device_new') }}\">Create a new userdevice</a>
        </li>
    </ul>
{% endblock %}
", ":userdevice:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/userdevice/index.html.twig");
    }
}
