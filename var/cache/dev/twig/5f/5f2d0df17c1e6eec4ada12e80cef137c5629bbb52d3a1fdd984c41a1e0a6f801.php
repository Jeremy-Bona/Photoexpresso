<?php

/* :password:show.html.twig */
class __TwigTemplate_c1aa1252c0c483d4c9afcb71405d2a0d123bb9d428738b581edb1f88c86534a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":password:show.html.twig", 1);
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
        $__internal_0af63e230daa16492c5bce0b51f72edc0d4ac0e5a333694cd3051ac415c860c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af63e230daa16492c5bce0b51f72edc0d4ac0e5a333694cd3051ac415c860c1->enter($__internal_0af63e230daa16492c5bce0b51f72edc0d4ac0e5a333694cd3051ac415c860c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":password:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0af63e230daa16492c5bce0b51f72edc0d4ac0e5a333694cd3051ac415c860c1->leave($__internal_0af63e230daa16492c5bce0b51f72edc0d4ac0e5a333694cd3051ac415c860c1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a56f2905e96f35ba584e1ee1c65fb73afa7121f9439f06b1ab7db8f63a0ac3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56f2905e96f35ba584e1ee1c65fb73afa7121f9439f06b1ab7db8f63a0ac3f1->enter($__internal_a56f2905e96f35ba584e1ee1c65fb73afa7121f9439f06b1ab7db8f63a0ac3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Password</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["password"]) ? $context["password"] : $this->getContext($context, "password")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pwdsha256</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["password"]) ? $context["password"] : $this->getContext($context, "password")), "pwdSha256", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datetime</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["password"]) ? $context["password"] : $this->getContext($context, "password")), "datetime", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("passwd_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("passwd_edit", array("id" => $this->getAttribute((isset($context["password"]) ? $context["password"] : $this->getContext($context, "password")), "id", array()))), "html", null, true);
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
        
        $__internal_a56f2905e96f35ba584e1ee1c65fb73afa7121f9439f06b1ab7db8f63a0ac3f1->leave($__internal_a56f2905e96f35ba584e1ee1c65fb73afa7121f9439f06b1ab7db8f63a0ac3f1_prof);

    }

    public function getTemplateName()
    {
        return ":password:show.html.twig";
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
    <h1>Password</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ password.id }}</td>
            </tr>
            <tr>
                <th>Pwdsha256</th>
                <td>{{ password.pwdSha256 }}</td>
            </tr>
            <tr>
                <th>Datetime</th>
                <td>{{ password.datetime }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('passwd_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('passwd_edit', { 'id': password.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":password:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/password/show.html.twig");
    }
}
