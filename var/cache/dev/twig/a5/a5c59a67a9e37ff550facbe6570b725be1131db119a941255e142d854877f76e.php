<?php

/* :order:index.html.twig */
class __TwigTemplate_bf17cec42cf3a34b6ace3052d192253611f148df896793bc910adac2619c49ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":order:index.html.twig", 1);
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
        $__internal_aecab286cf842b87b194d310e703152efbe2279321a4f2ca73318c84b1d4a002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aecab286cf842b87b194d310e703152efbe2279321a4f2ca73318c84b1d4a002->enter($__internal_aecab286cf842b87b194d310e703152efbe2279321a4f2ca73318c84b1d4a002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":order:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aecab286cf842b87b194d310e703152efbe2279321a4f2ca73318c84b1d4a002->leave($__internal_aecab286cf842b87b194d310e703152efbe2279321a4f2ca73318c84b1d4a002_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bd851232a316e425a106cdef6372ba627059df64f0e78e1834c0294c3c38688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd851232a316e425a106cdef6372ba627059df64f0e78e1834c0294c3c38688->enter($__internal_3bd851232a316e425a106cdef6372ba627059df64f0e78e1834c0294c3c38688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Orders list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datetime</th>
                <th>Price</th>
                <th>Isvalidated</th>
                <th>Isreceived</th>
                <th>Ispaid</th>
                <th>Isprint</th>
                <th>Issent</th>
                <th>Isarchive</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_show", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            if ($this->getAttribute($context["order"], "datetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["order"], "isvalidated", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["order"], "isreceived", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["order"], "ispaid", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["order"], "isprint", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["order"], "issent", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["order"], "isarchive", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_show", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_edit", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_new");
        echo "\">Create a new order</a>
        </li>
    </ul>
";
        
        $__internal_3bd851232a316e425a106cdef6372ba627059df64f0e78e1834c0294c3c38688->leave($__internal_3bd851232a316e425a106cdef6372ba627059df64f0e78e1834c0294c3c38688_prof);

    }

    public function getTemplateName()
    {
        return ":order:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 50,  152 => 45,  140 => 39,  134 => 36,  123 => 32,  115 => 31,  107 => 30,  99 => 29,  91 => 28,  83 => 27,  79 => 26,  73 => 25,  67 => 24,  64 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Orders list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datetime</th>
                <th>Price</th>
                <th>Isvalidated</th>
                <th>Isreceived</th>
                <th>Ispaid</th>
                <th>Isprint</th>
                <th>Issent</th>
                <th>Isarchive</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for order in orders %}
            <tr>
                <td><a href=\"{{ path('order_show', { 'id': order.id }) }}\">{{ order.id }}</a></td>
                <td>{% if order.datetime %}{{ order.datetime|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ order.price }}</td>
                <td>{% if order.isvalidated %}Yes{% else %}No{% endif %}</td>
                <td>{% if order.isreceived %}Yes{% else %}No{% endif %}</td>
                <td>{% if order.ispaid %}Yes{% else %}No{% endif %}</td>
                <td>{% if order.isprint %}Yes{% else %}No{% endif %}</td>
                <td>{% if order.issent %}Yes{% else %}No{% endif %}</td>
                <td>{% if order.isarchive %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('order_show', { 'id': order.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('order_edit', { 'id': order.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('order_new') }}\">Create a new order</a>
        </li>
    </ul>
{% endblock %}
", ":order:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/order/index.html.twig");
    }
}
