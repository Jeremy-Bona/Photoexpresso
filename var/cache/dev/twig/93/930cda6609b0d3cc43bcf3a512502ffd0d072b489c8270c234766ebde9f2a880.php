<?php

/* :userrights:index.html.twig */
class __TwigTemplate_4280d71f1a82c234cb9b96e822809af171c6a5af4a75479f08c8ee11ae73150a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":userrights:index.html.twig", 1);
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
        $__internal_206c32f303487fc0d2e2cf95c28e69181643d7835a56feac997ac88df0afed83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206c32f303487fc0d2e2cf95c28e69181643d7835a56feac997ac88df0afed83->enter($__internal_206c32f303487fc0d2e2cf95c28e69181643d7835a56feac997ac88df0afed83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":userrights:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_206c32f303487fc0d2e2cf95c28e69181643d7835a56feac997ac88df0afed83->leave($__internal_206c32f303487fc0d2e2cf95c28e69181643d7835a56feac997ac88df0afed83_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0773c5e4e6fa6dc8f3637c21c07801f6900c479184cf51c06480a4d818767d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0773c5e4e6fa6dc8f3637c21c07801f6900c479184cf51c06480a4d818767d4->enter($__internal_b0773c5e4e6fa6dc8f3637c21c07801f6900c479184cf51c06480a4d818767d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Userrights list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datestart</th>
                <th>Datestop</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userrights"]) ? $context["userrights"] : $this->getContext($context, "userrights")));
        foreach ($context['_seq'] as $context["_key"] => $context["userright"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_rights_show", array("id" => $this->getAttribute($context["userright"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["userright"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["userright"], "datestart", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["userright"], "datestart", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["userright"], "datestop", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["userright"], "datestop", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_rights_show", array("id" => $this->getAttribute($context["userright"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_rights_edit", array("id" => $this->getAttribute($context["userright"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userright'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_rights_new");
        echo "\">Create a new userright</a>
        </li>
    </ul>
";
        
        $__internal_b0773c5e4e6fa6dc8f3637c21c07801f6900c479184cf51c06480a4d818767d4->leave($__internal_b0773c5e4e6fa6dc8f3637c21c07801f6900c479184cf51c06480a4d818767d4_prof);

    }

    public function getTemplateName()
    {
        return ":userrights:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  100 => 33,  88 => 27,  82 => 24,  73 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Userrights list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datestart</th>
                <th>Datestop</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for userright in userrights %}
            <tr>
                <td><a href=\"{{ path('user_rights_show', { 'id': userright.id }) }}\">{{ userright.id }}</a></td>
                <td>{% if userright.datestart %}{{ userright.datestart|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if userright.datestop %}{{ userright.datestop|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_rights_show', { 'id': userright.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_rights_edit', { 'id': userright.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_rights_new') }}\">Create a new userright</a>
        </li>
    </ul>
{% endblock %}
", ":userrights:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/userrights/index.html.twig");
    }
}
