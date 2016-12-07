<?php

/* :printsize:index.html.twig */
class __TwigTemplate_df3b6f4fce4b7ce37d214a5a4b6482f057da48e3034aed2856fe9ce07f36f4b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":printsize:index.html.twig", 1);
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
        $__internal_4e429800a07113559de3faf352c3861552c7d6216c91cec13d986b737c825aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e429800a07113559de3faf352c3861552c7d6216c91cec13d986b737c825aed->enter($__internal_4e429800a07113559de3faf352c3861552c7d6216c91cec13d986b737c825aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":printsize:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e429800a07113559de3faf352c3861552c7d6216c91cec13d986b737c825aed->leave($__internal_4e429800a07113559de3faf352c3861552c7d6216c91cec13d986b737c825aed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c4b34dc942b8a2638f9c83ab9295ede0ab638e99e5d730f318450ab2a1aaa05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4b34dc942b8a2638f9c83ab9295ede0ab638e99e5d730f318450ab2a1aaa05->enter($__internal_9c4b34dc942b8a2638f9c83ab9295ede0ab638e99e5d730f318450ab2a1aaa05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Printsizes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Width</th>
                <th>Height</th>
                <th>Ratio</th>
                <th>Available</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["printsizes"]) ? $context["printsizes"] : $this->getContext($context, "printsizes")));
        foreach ($context['_seq'] as $context["_key"] => $context["printsize"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("print_size_show", array("id" => $this->getAttribute($context["printsize"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["printsize"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["printsize"], "width", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["printsize"], "height", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["printsize"], "ratio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["printsize"], "available", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("print_size_show", array("id" => $this->getAttribute($context["printsize"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("print_size_edit", array("id" => $this->getAttribute($context["printsize"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['printsize'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("print_size_new");
        echo "\">Create a new printsize</a>
        </li>
    </ul>
";
        
        $__internal_9c4b34dc942b8a2638f9c83ab9295ede0ab638e99e5d730f318450ab2a1aaa05->leave($__internal_9c4b34dc942b8a2638f9c83ab9295ede0ab638e99e5d730f318450ab2a1aaa05_prof);

    }

    public function getTemplateName()
    {
        return ":printsize:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  110 => 37,  98 => 31,  92 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Printsizes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Width</th>
                <th>Height</th>
                <th>Ratio</th>
                <th>Available</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for printsize in printsizes %}
            <tr>
                <td><a href=\"{{ path('print_size_show', { 'id': printsize.id }) }}\">{{ printsize.id }}</a></td>
                <td>{{ printsize.width }}</td>
                <td>{{ printsize.height }}</td>
                <td>{{ printsize.ratio }}</td>
                <td>{% if printsize.available %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('print_size_show', { 'id': printsize.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('print_size_edit', { 'id': printsize.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('print_size_new') }}\">Create a new printsize</a>
        </li>
    </ul>
{% endblock %}
", ":printsize:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/printsize/index.html.twig");
    }
}
