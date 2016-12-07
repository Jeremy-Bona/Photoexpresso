<?php

/* :righstgroup:show.html.twig */
class __TwigTemplate_3911f4756c96eea35abbcbbe877ae31bf472564254c9b2598f4b819f0197bf00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":righstgroup:show.html.twig", 1);
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
        $__internal_22bbc87ead9c4de77b5637dd54084b2a18b2569e074c1601294fe10b59f90053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22bbc87ead9c4de77b5637dd54084b2a18b2569e074c1601294fe10b59f90053->enter($__internal_22bbc87ead9c4de77b5637dd54084b2a18b2569e074c1601294fe10b59f90053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":righstgroup:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22bbc87ead9c4de77b5637dd54084b2a18b2569e074c1601294fe10b59f90053->leave($__internal_22bbc87ead9c4de77b5637dd54084b2a18b2569e074c1601294fe10b59f90053_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd985ff3cfbba374feded99fb8bdae19861feceecde247eb462b8bbcb934016a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd985ff3cfbba374feded99fb8bdae19861feceecde247eb462b8bbcb934016a->enter($__internal_dd985ff3cfbba374feded99fb8bdae19861feceecde247eb462b8bbcb934016a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Righstgroup</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["righstgroup"]) ? $context["righstgroup"] : $this->getContext($context, "righstgroup")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["righstgroup"]) ? $context["righstgroup"] : $this->getContext($context, "righstgroup")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rightcontainer</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["righstgroup"]) ? $context["righstgroup"] : $this->getContext($context, "righstgroup")), "rightContainer", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("right_group_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("right_group_edit", array("id" => $this->getAttribute((isset($context["righstgroup"]) ? $context["righstgroup"] : $this->getContext($context, "righstgroup")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_dd985ff3cfbba374feded99fb8bdae19861feceecde247eb462b8bbcb934016a->leave($__internal_dd985ff3cfbba374feded99fb8bdae19861feceecde247eb462b8bbcb934016a_prof);

    }

    public function getTemplateName()
    {
        return ":righstgroup:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Righstgroup</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ righstgroup.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ righstgroup.name }}</td>
            </tr>
            <tr>
                <th>Rightcontainer</th>
                <td>{{ righstgroup.rightContainer }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('right_group_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('right_group_edit', { 'id': righstgroup.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":righstgroup:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/righstgroup/show.html.twig");
    }
}
