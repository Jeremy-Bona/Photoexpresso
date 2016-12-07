<?php

/* :useractions:index.html.twig */
class __TwigTemplate_f633fbc0d0dfc83977b4c2e747aeb05d2953edad8d3c6b5e50dc4b6391767dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":useractions:index.html.twig", 1);
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
        $__internal_5d97d0618dcdeb55bdc278b8912d5483db2faf97dc7474dbeff1a6bdafa1b4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d97d0618dcdeb55bdc278b8912d5483db2faf97dc7474dbeff1a6bdafa1b4f1->enter($__internal_5d97d0618dcdeb55bdc278b8912d5483db2faf97dc7474dbeff1a6bdafa1b4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":useractions:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d97d0618dcdeb55bdc278b8912d5483db2faf97dc7474dbeff1a6bdafa1b4f1->leave($__internal_5d97d0618dcdeb55bdc278b8912d5483db2faf97dc7474dbeff1a6bdafa1b4f1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d7ddcbd7d960abf0cd032dce84de3c2f457a7dc324860f355d1f88580618097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7ddcbd7d960abf0cd032dce84de3c2f457a7dc324860f355d1f88580618097->enter($__internal_2d7ddcbd7d960abf0cd032dce84de3c2f457a7dc324860f355d1f88580618097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Useractions list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datetime</th>
                <th>Details</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["useractions"]) ? $context["useractions"] : $this->getContext($context, "useractions")));
        foreach ($context['_seq'] as $context["_key"] => $context["useraction"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_action_show", array("id" => $this->getAttribute($context["useraction"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["useraction"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["useraction"], "datetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["useraction"], "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["useraction"], "details", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_action_show", array("id" => $this->getAttribute($context["useraction"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_action_edit", array("id" => $this->getAttribute($context["useraction"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['useraction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_action_new");
        echo "\">Create a new useraction</a>
        </li>
    </ul>
";
        
        $__internal_2d7ddcbd7d960abf0cd032dce84de3c2f457a7dc324860f355d1f88580618097->leave($__internal_2d7ddcbd7d960abf0cd032dce84de3c2f457a7dc324860f355d1f88580618097_prof);

    }

    public function getTemplateName()
    {
        return ":useractions:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  98 => 33,  86 => 27,  80 => 24,  73 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Useractions list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datetime</th>
                <th>Details</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for useraction in useractions %}
            <tr>
                <td><a href=\"{{ path('user_action_show', { 'id': useraction.id }) }}\">{{ useraction.id }}</a></td>
                <td>{% if useraction.datetime %}{{ useraction.datetime|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ useraction.details }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_action_show', { 'id': useraction.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_action_edit', { 'id': useraction.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_action_new') }}\">Create a new useraction</a>
        </li>
    </ul>
{% endblock %}
", ":useractions:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/useractions/index.html.twig");
    }
}
