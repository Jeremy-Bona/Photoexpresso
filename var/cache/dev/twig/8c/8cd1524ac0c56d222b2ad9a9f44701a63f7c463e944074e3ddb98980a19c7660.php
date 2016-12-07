<?php

/* :password:index.html.twig */
class __TwigTemplate_abc494caca94e59467bd0e7b6096047177348633977ab26836772174eaa16a7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":password:index.html.twig", 1);
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
        $__internal_07a2118b55ca0e146110262e6005bd0ff9b91bdd3087e7959e835d67fb9c01f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a2118b55ca0e146110262e6005bd0ff9b91bdd3087e7959e835d67fb9c01f4->enter($__internal_07a2118b55ca0e146110262e6005bd0ff9b91bdd3087e7959e835d67fb9c01f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":password:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07a2118b55ca0e146110262e6005bd0ff9b91bdd3087e7959e835d67fb9c01f4->leave($__internal_07a2118b55ca0e146110262e6005bd0ff9b91bdd3087e7959e835d67fb9c01f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_490058a79d761a4db71ba60b391d141de6c415b1fa75a7c06f17635e62bedacd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490058a79d761a4db71ba60b391d141de6c415b1fa75a7c06f17635e62bedacd->enter($__internal_490058a79d761a4db71ba60b391d141de6c415b1fa75a7c06f17635e62bedacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Passwords list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Pwdsha256</th>
                <th>Datetime</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["passwords"]) ? $context["passwords"] : $this->getContext($context, "passwords")));
        foreach ($context['_seq'] as $context["_key"] => $context["password"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("passwd_show", array("id" => $this->getAttribute($context["password"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["password"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["password"], "pwdSha256", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["password"], "datetime", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("passwd_show", array("id" => $this->getAttribute($context["password"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("passwd_edit", array("id" => $this->getAttribute($context["password"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['password'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("passwd_new");
        echo "\">Create a new password</a>
        </li>
    </ul>
";
        
        $__internal_490058a79d761a4db71ba60b391d141de6c415b1fa75a7c06f17635e62bedacd->leave($__internal_490058a79d761a4db71ba60b391d141de6c415b1fa75a7c06f17635e62bedacd_prof);

    }

    public function getTemplateName()
    {
        return ":password:index.html.twig";
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
    <h1>Passwords list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Pwdsha256</th>
                <th>Datetime</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for password in passwords %}
            <tr>
                <td><a href=\"{{ path('passwd_show', { 'id': password.id }) }}\">{{ password.id }}</a></td>
                <td>{{ password.pwdSha256 }}</td>
                <td>{{ password.datetime }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('passwd_show', { 'id': password.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('passwd_edit', { 'id': password.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('passwd_new') }}\">Create a new password</a>
        </li>
    </ul>
{% endblock %}
", ":password:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/password/index.html.twig");
    }
}
