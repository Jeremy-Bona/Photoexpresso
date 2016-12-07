<?php

/* :rights:index.html.twig */
class __TwigTemplate_0fde7e633edb0953c4e7209d7b15f997b24ecf1f90fc29bd7ccf686e26d60d22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rights:index.html.twig", 1);
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
        $__internal_d380ad76fe9d200dcaa5029c68894cbe20b8e8328126eb67128e16d210fce8c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d380ad76fe9d200dcaa5029c68894cbe20b8e8328126eb67128e16d210fce8c2->enter($__internal_d380ad76fe9d200dcaa5029c68894cbe20b8e8328126eb67128e16d210fce8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rights:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d380ad76fe9d200dcaa5029c68894cbe20b8e8328126eb67128e16d210fce8c2->leave($__internal_d380ad76fe9d200dcaa5029c68894cbe20b8e8328126eb67128e16d210fce8c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dcca7ecde5f2dad63d4c91f035355077d36f898aa15109c984cad4fdffd81fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dcca7ecde5f2dad63d4c91f035355077d36f898aa15109c984cad4fdffd81fa->enter($__internal_3dcca7ecde5f2dad63d4c91f035355077d36f898aa15109c984cad4fdffd81fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rights list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rights"]) ? $context["rights"] : $this->getContext($context, "rights")));
        foreach ($context['_seq'] as $context["_key"] => $context["right"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rights_show", array("id" => $this->getAttribute($context["right"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["right"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["right"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rights_show", array("id" => $this->getAttribute($context["right"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rights_edit", array("id" => $this->getAttribute($context["right"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['right'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rights_new");
        echo "\">Create a new right</a>
        </li>
    </ul>
";
        
        $__internal_3dcca7ecde5f2dad63d4c91f035355077d36f898aa15109c984cad4fdffd81fa->leave($__internal_3dcca7ecde5f2dad63d4c91f035355077d36f898aa15109c984cad4fdffd81fa_prof);

    }

    public function getTemplateName()
    {
        return ":rights:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Rights list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for right in rights %}
            <tr>
                <td><a href=\"{{ path('rights_show', { 'id': right.id }) }}\">{{ right.id }}</a></td>
                <td>{{ right.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('rights_show', { 'id': right.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('rights_edit', { 'id': right.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('rights_new') }}\">Create a new right</a>
        </li>
    </ul>
{% endblock %}
", ":rights:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/rights/index.html.twig");
    }
}
