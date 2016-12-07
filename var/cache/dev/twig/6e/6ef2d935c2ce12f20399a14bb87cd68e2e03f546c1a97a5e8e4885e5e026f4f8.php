<?php

/* :userrights:show.html.twig */
class __TwigTemplate_fd20f6c1905b3831026d1703696f4d4e2b2564ea148111783f6a5f95a7f7b26f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":userrights:show.html.twig", 1);
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
        $__internal_8706395bf46de2a46a712a4ada00406c15ea58139dc63303c8dc79883ac91f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8706395bf46de2a46a712a4ada00406c15ea58139dc63303c8dc79883ac91f4a->enter($__internal_8706395bf46de2a46a712a4ada00406c15ea58139dc63303c8dc79883ac91f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":userrights:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8706395bf46de2a46a712a4ada00406c15ea58139dc63303c8dc79883ac91f4a->leave($__internal_8706395bf46de2a46a712a4ada00406c15ea58139dc63303c8dc79883ac91f4a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09d0b5523ee535368148d9d0895bc760be80a9da7ddbe508b88665ee7353d666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d0b5523ee535368148d9d0895bc760be80a9da7ddbe508b88665ee7353d666->enter($__internal_09d0b5523ee535368148d9d0895bc760be80a9da7ddbe508b88665ee7353d666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Userright</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userright"]) ? $context["userright"] : $this->getContext($context, "userright")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datestart</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["userright"]) ? $context["userright"] : $this->getContext($context, "userright")), "datestart", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["userright"]) ? $context["userright"] : $this->getContext($context, "userright")), "datestart", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datestop</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["userright"]) ? $context["userright"] : $this->getContext($context, "userright")), "datestop", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["userright"]) ? $context["userright"] : $this->getContext($context, "userright")), "datestop", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_rights_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_rights_edit", array("id" => $this->getAttribute((isset($context["userright"]) ? $context["userright"] : $this->getContext($context, "userright")), "id", array()))), "html", null, true);
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
        
        $__internal_09d0b5523ee535368148d9d0895bc760be80a9da7ddbe508b88665ee7353d666->leave($__internal_09d0b5523ee535368148d9d0895bc760be80a9da7ddbe508b88665ee7353d666_prof);

    }

    public function getTemplateName()
    {
        return ":userrights:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  88 => 31,  82 => 28,  76 => 25,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Userright</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ userright.id }}</td>
            </tr>
            <tr>
                <th>Datestart</th>
                <td>{% if userright.datestart %}{{ userright.datestart|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Datestop</th>
                <td>{% if userright.datestop %}{{ userright.datestop|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_rights_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_rights_edit', { 'id': userright.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":userrights:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/userrights/show.html.twig");
    }
}
