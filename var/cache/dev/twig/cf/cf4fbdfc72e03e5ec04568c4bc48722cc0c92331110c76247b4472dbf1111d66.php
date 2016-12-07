<?php

/* :ticket:show.html.twig */
class __TwigTemplate_af87d0c79c39bb11bd0db43ca4e46d100c7fa13ac45d0c16c888b0ac4ce57aa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":ticket:show.html.twig", 1);
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
        $__internal_de06dd5a9d82849f6d78ed5a93af21a30b3b30581d3cbd3bf7aeda9c30ba030a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de06dd5a9d82849f6d78ed5a93af21a30b3b30581d3cbd3bf7aeda9c30ba030a->enter($__internal_de06dd5a9d82849f6d78ed5a93af21a30b3b30581d3cbd3bf7aeda9c30ba030a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ticket:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de06dd5a9d82849f6d78ed5a93af21a30b3b30581d3cbd3bf7aeda9c30ba030a->leave($__internal_de06dd5a9d82849f6d78ed5a93af21a30b3b30581d3cbd3bf7aeda9c30ba030a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4e8bff6601501535763ef41765e76e3df0724a66ed998d6396c01abd2a49b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e8bff6601501535763ef41765e76e3df0724a66ed998d6396c01abd2a49b51->enter($__internal_f4e8bff6601501535763ef41765e76e3df0724a66ed998d6396c01abd2a49b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ticket</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datetime</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "datetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "subject", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "message", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tickets_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tickets_edit", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
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
        
        $__internal_f4e8bff6601501535763ef41765e76e3df0724a66ed998d6396c01abd2a49b51->leave($__internal_f4e8bff6601501535763ef41765e76e3df0724a66ed998d6396c01abd2a49b51_prof);

    }

    public function getTemplateName()
    {
        return ":ticket:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  93 => 35,  87 => 32,  81 => 29,  71 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Ticket</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ ticket.id }}</td>
            </tr>
            <tr>
                <th>Datetime</th>
                <td>{% if ticket.datetime %}{{ ticket.datetime|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>{{ ticket.subject }}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>{{ ticket.message }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('tickets_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('tickets_edit', { 'id': ticket.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":ticket:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/ticket/show.html.twig");
    }
}
