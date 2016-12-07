<?php

/* :notifications:index.html.twig */
class __TwigTemplate_558e5a232fe99945ee09ebe365058f4731b945f22bf25b8f436dabb4d264bc65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":notifications:index.html.twig", 1);
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
        $__internal_4f93fee685a7c7c36bc6aa9627bbdf5f992ea159e35d0aff5a150622b80d8432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f93fee685a7c7c36bc6aa9627bbdf5f992ea159e35d0aff5a150622b80d8432->enter($__internal_4f93fee685a7c7c36bc6aa9627bbdf5f992ea159e35d0aff5a150622b80d8432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":notifications:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f93fee685a7c7c36bc6aa9627bbdf5f992ea159e35d0aff5a150622b80d8432->leave($__internal_4f93fee685a7c7c36bc6aa9627bbdf5f992ea159e35d0aff5a150622b80d8432_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_024c6b5dda7eac1cc3c81e40b3ebf88fb14237536c075fa0e71f261c97922aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024c6b5dda7eac1cc3c81e40b3ebf88fb14237536c075fa0e71f261c97922aed->enter($__internal_024c6b5dda7eac1cc3c81e40b3ebf88fb14237536c075fa0e71f261c97922aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notifications list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datetime</th>
                <th>Message</th>
                <th>Checked</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notif_show", array("id" => $this->getAttribute($context["notification"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["notification"], "datetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notification"], "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "message", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["notification"], "checked", array())) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notif_show", array("id" => $this->getAttribute($context["notification"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notif_edit", array("id" => $this->getAttribute($context["notification"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notif_new");
        echo "\">Create a new notification</a>
        </li>
    </ul>
";
        
        $__internal_024c6b5dda7eac1cc3c81e40b3ebf88fb14237536c075fa0e71f261c97922aed->leave($__internal_024c6b5dda7eac1cc3c81e40b3ebf88fb14237536c075fa0e71f261c97922aed_prof);

    }

    public function getTemplateName()
    {
        return ":notifications:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  107 => 35,  95 => 29,  89 => 26,  78 => 22,  74 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Notifications list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datetime</th>
                <th>Message</th>
                <th>Checked</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for notification in notifications %}
            <tr>
                <td><a href=\"{{ path('notif_show', { 'id': notification.id }) }}\">{{ notification.id }}</a></td>
                <td>{% if notification.datetime %}{{ notification.datetime|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ notification.message }}</td>
                <td>{% if notification.checked %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('notif_show', { 'id': notification.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('notif_edit', { 'id': notification.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('notif_new') }}\">Create a new notification</a>
        </li>
    </ul>
{% endblock %}
", ":notifications:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/notifications/index.html.twig");
    }
}
