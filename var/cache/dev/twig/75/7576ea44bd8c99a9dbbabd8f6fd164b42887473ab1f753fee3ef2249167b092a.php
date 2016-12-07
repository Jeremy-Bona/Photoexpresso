<?php

/* :deviceversion:index.html.twig */
class __TwigTemplate_9904d44f77a38f6cb7d09e3c6fa95fc67265c8fa082499de5e5edcbfc92733df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":deviceversion:index.html.twig", 1);
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
        $__internal_437c5f78d311c01f4a85aebcc363fbed83661ced0db628c6576676108c4c5549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437c5f78d311c01f4a85aebcc363fbed83661ced0db628c6576676108c4c5549->enter($__internal_437c5f78d311c01f4a85aebcc363fbed83661ced0db628c6576676108c4c5549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":deviceversion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_437c5f78d311c01f4a85aebcc363fbed83661ced0db628c6576676108c4c5549->leave($__internal_437c5f78d311c01f4a85aebcc363fbed83661ced0db628c6576676108c4c5549_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c165ad9d5e02640e4f424d658fead525b86c3771560ac4584fd79268ca906375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c165ad9d5e02640e4f424d658fead525b86c3771560ac4584fd79268ca906375->enter($__internal_c165ad9d5e02640e4f424d658fead525b86c3771560ac4584fd79268ca906375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Deviceversions list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Installdatetime</th>
                <th>Uninstalldatetime</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["deviceversions"]) ? $context["deviceversions"] : $this->getContext($context, "deviceversions")));
        foreach ($context['_seq'] as $context["_key"] => $context["deviceversion"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("device_version_show", array("id" => $this->getAttribute($context["deviceversion"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["deviceversion"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["deviceversion"], "installdatetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["deviceversion"], "installdatetime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["deviceversion"], "uninstalldatetime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["deviceversion"], "uninstalldatetime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("device_version_show", array("id" => $this->getAttribute($context["deviceversion"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("device_version_edit", array("id" => $this->getAttribute($context["deviceversion"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deviceversion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("device_version_new");
        echo "\">Create a new deviceversion</a>
        </li>
    </ul>
";
        
        $__internal_c165ad9d5e02640e4f424d658fead525b86c3771560ac4584fd79268ca906375->leave($__internal_c165ad9d5e02640e4f424d658fead525b86c3771560ac4584fd79268ca906375_prof);

    }

    public function getTemplateName()
    {
        return ":deviceversion:index.html.twig";
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
    <h1>Deviceversions list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Installdatetime</th>
                <th>Uninstalldatetime</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for deviceversion in deviceversions %}
            <tr>
                <td><a href=\"{{ path('device_version_show', { 'id': deviceversion.id }) }}\">{{ deviceversion.id }}</a></td>
                <td>{% if deviceversion.installdatetime %}{{ deviceversion.installdatetime|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if deviceversion.uninstalldatetime %}{{ deviceversion.uninstalldatetime|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('device_version_show', { 'id': deviceversion.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('device_version_edit', { 'id': deviceversion.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('device_version_new') }}\">Create a new deviceversion</a>
        </li>
    </ul>
{% endblock %}
", ":deviceversion:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/deviceversion/index.html.twig");
    }
}
