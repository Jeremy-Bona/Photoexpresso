<?php

/* :userpromo:index.html.twig */
class __TwigTemplate_63cf423354f5af0352b37b74d327e0a12715ddc9a9f10c9417069bcc40533e85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":userpromo:index.html.twig", 1);
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
        $__internal_7ff8d7a33340b5fe763d024e18f20427c47575ac424724d3504b46b900373505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff8d7a33340b5fe763d024e18f20427c47575ac424724d3504b46b900373505->enter($__internal_7ff8d7a33340b5fe763d024e18f20427c47575ac424724d3504b46b900373505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":userpromo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ff8d7a33340b5fe763d024e18f20427c47575ac424724d3504b46b900373505->leave($__internal_7ff8d7a33340b5fe763d024e18f20427c47575ac424724d3504b46b900373505_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd633aa3c1731a9e54381a5faaba9807c5613d9d82722992caf54f77c7b1a847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd633aa3c1731a9e54381a5faaba9807c5613d9d82722992caf54f77c7b1a847->enter($__internal_bd633aa3c1731a9e54381a5faaba9807c5613d9d82722992caf54f77c7b1a847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Userpromos list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Checked</th>
                <th>Used</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userPromos"]) ? $context["userPromos"] : $this->getContext($context, "userPromos")));
        foreach ($context['_seq'] as $context["_key"] => $context["userPromo"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_promo_show", array("id" => $this->getAttribute($context["userPromo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["userPromo"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["userPromo"], "checked", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["userPromo"], "checked", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["userPromo"], "used", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["userPromo"], "used", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_promo_show", array("id" => $this->getAttribute($context["userPromo"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_promo_edit", array("id" => $this->getAttribute($context["userPromo"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userPromo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_promo_new");
        echo "\">Create a new userPromo</a>
        </li>
    </ul>
";
        
        $__internal_bd633aa3c1731a9e54381a5faaba9807c5613d9d82722992caf54f77c7b1a847->leave($__internal_bd633aa3c1731a9e54381a5faaba9807c5613d9d82722992caf54f77c7b1a847_prof);

    }

    public function getTemplateName()
    {
        return ":userpromo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  100 => 33,  88 => 27,  82 => 24,  73 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Userpromos list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Checked</th>
                <th>Used</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for userPromo in userPromos %}
            <tr>
                <td><a href=\"{{ path('user_promo_show', { 'id': userPromo.id }) }}\">{{ userPromo.id }}</a></td>
                <td>{% if userPromo.checked %}{{ userPromo.checked|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if userPromo.used %}{{ userPromo.used|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_promo_show', { 'id': userPromo.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_promo_edit', { 'id': userPromo.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_promo_new') }}\">Create a new userPromo</a>
        </li>
    </ul>
{% endblock %}
", ":userpromo:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/userpromo/index.html.twig");
    }
}
