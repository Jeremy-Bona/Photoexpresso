<?php

/* :ticket:index.html.twig */
class __TwigTemplate_300e749624cd8caec6d0bf2ef74a3566b5f499ab96ef923251da5bb743782ecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":ticket:index.html.twig", 1);
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
        $__internal_ef88ac34abdd46b3899b2dbad497d94ae6d54f79e578746c0a77f1a102d0e5dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef88ac34abdd46b3899b2dbad497d94ae6d54f79e578746c0a77f1a102d0e5dd->enter($__internal_ef88ac34abdd46b3899b2dbad497d94ae6d54f79e578746c0a77f1a102d0e5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ticket:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef88ac34abdd46b3899b2dbad497d94ae6d54f79e578746c0a77f1a102d0e5dd->leave($__internal_ef88ac34abdd46b3899b2dbad497d94ae6d54f79e578746c0a77f1a102d0e5dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_623cfab917a4ae864d4f13d309e66b431a648aa918736f8948df720cb442cc3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623cfab917a4ae864d4f13d309e66b431a648aa918736f8948df720cb442cc3a->enter($__internal_623cfab917a4ae864d4f13d309e66b431a648aa918736f8948df720cb442cc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tickets list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datetime</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tickets_show", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["ticket"], "datetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "subject", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "message", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tickets_show", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tickets_edit", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tickets_new");
        echo "\">Create a new ticket</a>
        </li>
    </ul>
";
        
        $__internal_623cfab917a4ae864d4f13d309e66b431a648aa918736f8948df720cb442cc3a->leave($__internal_623cfab917a4ae864d4f13d309e66b431a648aa918736f8948df720cb442cc3a_prof);

    }

    public function getTemplateName()
    {
        return ":ticket:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  103 => 35,  91 => 29,  85 => 26,  78 => 22,  74 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Tickets list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datetime</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for ticket in tickets %}
            <tr>
                <td><a href=\"{{ path('tickets_show', { 'id': ticket.id }) }}\">{{ ticket.id }}</a></td>
                <td>{% if ticket.datetime %}{{ ticket.datetime|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ ticket.subject }}</td>
                <td>{{ ticket.message }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('tickets_show', { 'id': ticket.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('tickets_edit', { 'id': ticket.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('tickets_new') }}\">Create a new ticket</a>
        </li>
    </ul>
{% endblock %}
", ":ticket:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/ticket/index.html.twig");
    }
}
