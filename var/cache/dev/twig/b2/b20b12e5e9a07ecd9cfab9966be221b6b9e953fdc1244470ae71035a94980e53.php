<?php

/* address/index.html.twig */
class __TwigTemplate_be1dd31dd852da902ae07f35f9efe6b466730de53cfb257cce61303ecf172809 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "address/index.html.twig", 1);
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
        $__internal_de0ef2cf4fd9c1a2fe53c590226c9005f2065cd03b1df6dafbb9462ecc700498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0ef2cf4fd9c1a2fe53c590226c9005f2065cd03b1df6dafbb9462ecc700498->enter($__internal_de0ef2cf4fd9c1a2fe53c590226c9005f2065cd03b1df6dafbb9462ecc700498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "address/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de0ef2cf4fd9c1a2fe53c590226c9005f2065cd03b1df6dafbb9462ecc700498->leave($__internal_de0ef2cf4fd9c1a2fe53c590226c9005f2065cd03b1df6dafbb9462ecc700498_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5ca48728739a9941642e73f83239d7ce5d1b40a762723af3094fbab032c081c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ca48728739a9941642e73f83239d7ce5d1b40a762723af3094fbab032c081c->enter($__internal_e5ca48728739a9941642e73f83239d7ce5d1b40a762723af3094fbab032c081c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Addresses list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Adressname</th>
                <th>Address</th>
                <th>Adresscomplement</th>
                <th>Zipcode</th>
                <th>City</th>
                <th>Country</th>
                <th>Isdefault</th>
                <th>Isfacturedefault</th>
                <th>Datetime</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : $this->getContext($context, "addresses")));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adress_show", array("id" => $this->getAttribute($context["address"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "adressname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "address", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "adresscomplement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "zipcode", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "city", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "country", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["address"], "isdefault", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["address"], "isfacturedefault", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["address"], "datetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["address"], "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adress_show", array("id" => $this->getAttribute($context["address"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adress_edit", array("id" => $this->getAttribute($context["address"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adress_new");
        echo "\">Create a new address</a>
        </li>
    </ul>
";
        
        $__internal_e5ca48728739a9941642e73f83239d7ce5d1b40a762723af3094fbab032c081c->leave($__internal_e5ca48728739a9941642e73f83239d7ce5d1b40a762723af3094fbab032c081c_prof);

    }

    public function getTemplateName()
    {
        return "address/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 52,  141 => 47,  129 => 41,  123 => 38,  114 => 34,  106 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  65 => 24,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Addresses list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Adressname</th>
                <th>Address</th>
                <th>Adresscomplement</th>
                <th>Zipcode</th>
                <th>City</th>
                <th>Country</th>
                <th>Isdefault</th>
                <th>Isfacturedefault</th>
                <th>Datetime</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for address in addresses %}
            <tr>
                <td><a href=\"{{ path('adress_show', { 'id': address.id }) }}\">{{ address.id }}</a></td>
                <td>{{ address.adressname }}</td>
                <td>{{ address.address }}</td>
                <td>{{ address.adresscomplement }}</td>
                <td>{{ address.zipcode }}</td>
                <td>{{ address.city }}</td>
                <td>{{ address.country }}</td>
                <td>{% if address.isdefault %}Yes{% else %}No{% endif %}</td>
                <td>{% if address.isfacturedefault %}Yes{% else %}No{% endif %}</td>
                <td>{% if address.datetime %}{{ address.datetime|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('adress_show', { 'id': address.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('adress_edit', { 'id': address.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('adress_new') }}\">Create a new address</a>
        </li>
    </ul>
{% endblock %}
", "address/index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/address/index.html.twig");
    }
}
