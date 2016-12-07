<?php

/* :rights:show.html.twig */
class __TwigTemplate_046352d5c9a801d2e1df43f7dca662cca57ebc704a0ee31265f46feccf0b19ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rights:show.html.twig", 1);
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
        $__internal_a1f609a48546698efedcfe83198c0d878ca33ee528ec9d81cdeaf6e576f08fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f609a48546698efedcfe83198c0d878ca33ee528ec9d81cdeaf6e576f08fdd->enter($__internal_a1f609a48546698efedcfe83198c0d878ca33ee528ec9d81cdeaf6e576f08fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rights:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1f609a48546698efedcfe83198c0d878ca33ee528ec9d81cdeaf6e576f08fdd->leave($__internal_a1f609a48546698efedcfe83198c0d878ca33ee528ec9d81cdeaf6e576f08fdd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4fef689b6d3c1cb7a941c5ecc28c4528c011525916b40f29355ea310cafcf38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4fef689b6d3c1cb7a941c5ecc28c4528c011525916b40f29355ea310cafcf38->enter($__internal_c4fef689b6d3c1cb7a941c5ecc28c4528c011525916b40f29355ea310cafcf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Right</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["right"]) ? $context["right"] : $this->getContext($context, "right")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["right"]) ? $context["right"] : $this->getContext($context, "right")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rights_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rights_edit", array("id" => $this->getAttribute((isset($context["right"]) ? $context["right"] : $this->getContext($context, "right")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c4fef689b6d3c1cb7a941c5ecc28c4528c011525916b40f29355ea310cafcf38->leave($__internal_c4fef689b6d3c1cb7a941c5ecc28c4528c011525916b40f29355ea310cafcf38_prof);

    }

    public function getTemplateName()
    {
        return ":rights:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Right</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ right.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ right.name }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('rights_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('rights_edit', { 'id': right.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":rights:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/rights/show.html.twig");
    }
}
