<?php

/* :token:index.html.twig */
class __TwigTemplate_39a9cf39307bbc45382ba1dcde09b6a353a08c96fac477ed72595c12024db15b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":token:index.html.twig", 1);
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
        $__internal_80a523976258d337187929cc52f70abddbfa9d00faf3602f138549aab29e5c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a523976258d337187929cc52f70abddbfa9d00faf3602f138549aab29e5c93->enter($__internal_80a523976258d337187929cc52f70abddbfa9d00faf3602f138549aab29e5c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":token:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80a523976258d337187929cc52f70abddbfa9d00faf3602f138549aab29e5c93->leave($__internal_80a523976258d337187929cc52f70abddbfa9d00faf3602f138549aab29e5c93_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_88800b1492e410f9f8d4f53a8d1793da79defca67186ef6d9d63b4850d4f98ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88800b1492e410f9f8d4f53a8d1793da79defca67186ef6d9d63b4850d4f98ac->enter($__internal_88800b1492e410f9f8d4f53a8d1793da79defca67186ef6d9d63b4850d4f98ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tokens list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Token</th>
                <th>Datecreate</th>
                <th>Dateexpire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")));
        foreach ($context['_seq'] as $context["_key"] => $context["token"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("token_show", array("id" => $this->getAttribute($context["token"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["token"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["token"], "token", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["token"], "datecreate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["token"], "datecreate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["token"], "dateexpire", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["token"], "dateexpire", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("token_show", array("id" => $this->getAttribute($context["token"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("token_edit", array("id" => $this->getAttribute($context["token"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['token'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("token_new");
        echo "\">Create a new token</a>
        </li>
    </ul>
";
        
        $__internal_88800b1492e410f9f8d4f53a8d1793da79defca67186ef6d9d63b4850d4f98ac->leave($__internal_88800b1492e410f9f8d4f53a8d1793da79defca67186ef6d9d63b4850d4f98ac_prof);

    }

    public function getTemplateName()
    {
        return ":token:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 40,  105 => 35,  93 => 29,  87 => 26,  78 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Tokens list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Token</th>
                <th>Datecreate</th>
                <th>Dateexpire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for token in tokens %}
            <tr>
                <td><a href=\"{{ path('token_show', { 'id': token.id }) }}\">{{ token.id }}</a></td>
                <td>{{ token.token }}</td>
                <td>{% if token.datecreate %}{{ token.datecreate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if token.dateexpire %}{{ token.dateexpire|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('token_show', { 'id': token.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('token_edit', { 'id': token.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('token_new') }}\">Create a new token</a>
        </li>
    </ul>
{% endblock %}
", ":token:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/token/index.html.twig");
    }
}
