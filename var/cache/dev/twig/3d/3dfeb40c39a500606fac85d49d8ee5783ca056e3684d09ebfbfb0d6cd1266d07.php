<?php

/* :order:show.html.twig */
class __TwigTemplate_4d5c075f8aee99c360294b7919c53534800a0e938104ff98baf751dfe0500c13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":order:show.html.twig", 1);
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
        $__internal_d159e5b98bc1e89bac243ee44d8aa75dfbae28a7d261741ae9bf579e0cf9ffe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d159e5b98bc1e89bac243ee44d8aa75dfbae28a7d261741ae9bf579e0cf9ffe0->enter($__internal_d159e5b98bc1e89bac243ee44d8aa75dfbae28a7d261741ae9bf579e0cf9ffe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":order:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d159e5b98bc1e89bac243ee44d8aa75dfbae28a7d261741ae9bf579e0cf9ffe0->leave($__internal_d159e5b98bc1e89bac243ee44d8aa75dfbae28a7d261741ae9bf579e0cf9ffe0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b031c23f1fe73364db932af1281710181f2a5c4a2dbf2b2b74847416bdb5e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b031c23f1fe73364db932af1281710181f2a5c4a2dbf2b2b74847416bdb5e9e->enter($__internal_1b031c23f1fe73364db932af1281710181f2a5c4a2dbf2b2b74847416bdb5e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Order</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datetime</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "datetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isvalidated</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "isvalidated", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Isreceived</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "isreceived", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Ispaid</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "ispaid", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Isprint</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "isprint", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Issent</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "issent", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Isarchive</th>
                <td>";
        // line 42
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "isarchive", array())) {
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
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_edit", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1b031c23f1fe73364db932af1281710181f2a5c4a2dbf2b2b74847416bdb5e9e->leave($__internal_1b031c23f1fe73364db932af1281710181f2a5c4a2dbf2b2b74847416bdb5e9e_prof);

    }

    public function getTemplateName()
    {
        return ":order:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 57,  152 => 55,  146 => 52,  140 => 49,  126 => 42,  115 => 38,  104 => 34,  93 => 30,  82 => 26,  71 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Order</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ order.id }}</td>
            </tr>
            <tr>
                <th>Datetime</th>
                <td>{% if order.datetime %}{{ order.datetime|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ order.price }}</td>
            </tr>
            <tr>
                <th>Isvalidated</th>
                <td>{% if order.isvalidated %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Isreceived</th>
                <td>{% if order.isreceived %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Ispaid</th>
                <td>{% if order.ispaid %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Isprint</th>
                <td>{% if order.isprint %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Issent</th>
                <td>{% if order.issent %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Isarchive</th>
                <td>{% if order.isarchive %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('order_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('order_edit', { 'id': order.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":order:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/order/show.html.twig");
    }
}
