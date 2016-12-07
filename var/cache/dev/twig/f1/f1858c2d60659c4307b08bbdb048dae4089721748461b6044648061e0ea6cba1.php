<?php

/* :token:show.html.twig */
class __TwigTemplate_d5550b1f22ab35144b7018ed40e56b1934573023cbdf41c5d75040b158270a5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":token:show.html.twig", 1);
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
        $__internal_1f6d907f47bb0aec810f83889105f2ce2d7f488189c6abeb590a6a48ae464451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6d907f47bb0aec810f83889105f2ce2d7f488189c6abeb590a6a48ae464451->enter($__internal_1f6d907f47bb0aec810f83889105f2ce2d7f488189c6abeb590a6a48ae464451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":token:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f6d907f47bb0aec810f83889105f2ce2d7f488189c6abeb590a6a48ae464451->leave($__internal_1f6d907f47bb0aec810f83889105f2ce2d7f488189c6abeb590a6a48ae464451_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a83727dbed84b34cc73c9571ee539cf00be70e10f2da030abb796e033f5144b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a83727dbed84b34cc73c9571ee539cf00be70e10f2da030abb796e033f5144b->enter($__internal_2a83727dbed84b34cc73c9571ee539cf00be70e10f2da030abb796e033f5144b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Token</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Token</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "token", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecreate</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "datecreate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "datecreate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Dateexpire</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "dateexpire", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "dateexpire", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("token_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("token_edit", array("id" => $this->getAttribute((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "id", array()))), "html", null, true);
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
        
        $__internal_2a83727dbed84b34cc73c9571ee539cf00be70e10f2da030abb796e033f5144b->leave($__internal_2a83727dbed84b34cc73c9571ee539cf00be70e10f2da030abb796e033f5144b_prof);

    }

    public function getTemplateName()
    {
        return ":token:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 37,  95 => 35,  89 => 32,  83 => 29,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Token</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ token.id }}</td>
            </tr>
            <tr>
                <th>Token</th>
                <td>{{ token.token }}</td>
            </tr>
            <tr>
                <th>Datecreate</th>
                <td>{% if token.datecreate %}{{ token.datecreate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Dateexpire</th>
                <td>{% if token.dateexpire %}{{ token.dateexpire|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('token_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('token_edit', { 'id': token.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":token:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/token/show.html.twig");
    }
}
