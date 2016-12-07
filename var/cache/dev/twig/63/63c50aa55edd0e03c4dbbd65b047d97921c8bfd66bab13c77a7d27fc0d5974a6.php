<?php

/* address/show.html.twig */
class __TwigTemplate_cc79cb965ded2d0124c20991e5215b943499a0484796e79c180548ba8f88248b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "address/show.html.twig", 1);
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
        $__internal_2a6373128350d7c5531968202415fcd3096f1256bcc15563b96e48d01c0aadfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6373128350d7c5531968202415fcd3096f1256bcc15563b96e48d01c0aadfd->enter($__internal_2a6373128350d7c5531968202415fcd3096f1256bcc15563b96e48d01c0aadfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "address/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a6373128350d7c5531968202415fcd3096f1256bcc15563b96e48d01c0aadfd->leave($__internal_2a6373128350d7c5531968202415fcd3096f1256bcc15563b96e48d01c0aadfd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4a8b958563c86c5ef3dfb42847e53847d05a3acaf3c9a76d03f56e7c71de217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a8b958563c86c5ef3dfb42847e53847d05a3acaf3c9a76d03f56e7c71de217->enter($__internal_a4a8b958563c86c5ef3dfb42847e53847d05a3acaf3c9a76d03f56e7c71de217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Address</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adressname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "adressname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "address", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresscomplement</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "adresscomplement", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Zipcode</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "zipcode", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "city", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "country", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isdefault</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "isdefault", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Isfacturedefault</th>
                <td>";
        // line 42
        if ($this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "isfacturedefault", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datetime</th>
                <td>";
        // line 46
        if ($this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "datetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adress_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adress_edit", array("id" => $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 59
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 61
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a4a8b958563c86c5ef3dfb42847e53847d05a3acaf3c9a76d03f56e7c71de217->leave($__internal_a4a8b958563c86c5ef3dfb42847e53847d05a3acaf3c9a76d03f56e7c71de217_prof);

    }

    public function getTemplateName()
    {
        return "address/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 61,  143 => 59,  137 => 56,  131 => 53,  119 => 46,  108 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Address</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ address.id }}</td>
            </tr>
            <tr>
                <th>Adressname</th>
                <td>{{ address.adressname }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ address.address }}</td>
            </tr>
            <tr>
                <th>Adresscomplement</th>
                <td>{{ address.adresscomplement }}</td>
            </tr>
            <tr>
                <th>Zipcode</th>
                <td>{{ address.zipcode }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ address.city }}</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>{{ address.country }}</td>
            </tr>
            <tr>
                <th>Isdefault</th>
                <td>{% if address.isdefault %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Isfacturedefault</th>
                <td>{% if address.isfacturedefault %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Datetime</th>
                <td>{% if address.datetime %}{{ address.datetime|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('adress_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('adress_edit', { 'id': address.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "address/show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/address/show.html.twig");
    }
}
