<?php

/* :righstgroup:index.html.twig */
class __TwigTemplate_fea6efb22c7a0f59089aa7abf27b9433e2bf5353cb3c7673dd7925b163011c6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":righstgroup:index.html.twig", 1);
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
        $__internal_f2ccf2aae611783d6d08c6b8698f5913935508d54281674c2a797b1cb0f50dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ccf2aae611783d6d08c6b8698f5913935508d54281674c2a797b1cb0f50dcc->enter($__internal_f2ccf2aae611783d6d08c6b8698f5913935508d54281674c2a797b1cb0f50dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":righstgroup:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2ccf2aae611783d6d08c6b8698f5913935508d54281674c2a797b1cb0f50dcc->leave($__internal_f2ccf2aae611783d6d08c6b8698f5913935508d54281674c2a797b1cb0f50dcc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91aeb936fc338bf6e807c521308024b7025e0e3ef27e898daa15829f32c96a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91aeb936fc338bf6e807c521308024b7025e0e3ef27e898daa15829f32c96a3b->enter($__internal_91aeb936fc338bf6e807c521308024b7025e0e3ef27e898daa15829f32c96a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Righstgroups list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Rightcontainer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["righstgroups"]) ? $context["righstgroups"] : $this->getContext($context, "righstgroups")));
        foreach ($context['_seq'] as $context["_key"] => $context["righstgroup"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("right_group_show", array("id" => $this->getAttribute($context["righstgroup"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["righstgroup"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["righstgroup"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["righstgroup"], "rightContainer", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("right_group_show", array("id" => $this->getAttribute($context["righstgroup"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("right_group_edit", array("id" => $this->getAttribute($context["righstgroup"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['righstgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("right_group_new");
        echo "\">Create a new righstgroup</a>
        </li>
    </ul>
";
        
        $__internal_91aeb936fc338bf6e807c521308024b7025e0e3ef27e898daa15829f32c96a3b->leave($__internal_91aeb936fc338bf6e807c521308024b7025e0e3ef27e898daa15829f32c96a3b_prof);

    }

    public function getTemplateName()
    {
        return ":righstgroup:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Righstgroups list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Rightcontainer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for righstgroup in righstgroups %}
            <tr>
                <td><a href=\"{{ path('right_group_show', { 'id': righstgroup.id }) }}\">{{ righstgroup.id }}</a></td>
                <td>{{ righstgroup.name }}</td>
                <td>{{ righstgroup.rightContainer }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('right_group_show', { 'id': righstgroup.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('right_group_edit', { 'id': righstgroup.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('right_group_new') }}\">Create a new righstgroup</a>
        </li>
    </ul>
{% endblock %}
", ":righstgroup:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/righstgroup/index.html.twig");
    }
}
