<?php

/* :appversioning:index.html.twig */
class __TwigTemplate_d750f03bf16c434464702e738dd963adcafa9f715bf6f3995306137effe7f7f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":appversioning:index.html.twig", 1);
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
        $__internal_7264a8e94b95ee80f257ed0418f01beea413d8ea4ce50bb37b2e2eb49748c804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7264a8e94b95ee80f257ed0418f01beea413d8ea4ce50bb37b2e2eb49748c804->enter($__internal_7264a8e94b95ee80f257ed0418f01beea413d8ea4ce50bb37b2e2eb49748c804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":appversioning:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7264a8e94b95ee80f257ed0418f01beea413d8ea4ce50bb37b2e2eb49748c804->leave($__internal_7264a8e94b95ee80f257ed0418f01beea413d8ea4ce50bb37b2e2eb49748c804_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed47e255ed5382335550a9be10e17218efa11333707773bcd7152187493df925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed47e255ed5382335550a9be10e17218efa11333707773bcd7152187493df925->enter($__internal_ed47e255ed5382335550a9be10e17218efa11333707773bcd7152187493df925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Appversionings list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Version</th>
                <th>Datestart</th>
                <th>Datestop</th>
                <th>Apiversion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appversionings"]) ? $context["appversionings"] : $this->getContext($context, "appversionings")));
        foreach ($context['_seq'] as $context["_key"] => $context["appversioning"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_version_show", array("id" => $this->getAttribute($context["appversioning"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appversioning"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["appversioning"], "version", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["appversioning"], "datestart", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["appversioning"], "datestart", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["appversioning"], "datestop", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["appversioning"], "datestop", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["appversioning"], "apiversion", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_version_show", array("id" => $this->getAttribute($context["appversioning"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_version_edit", array("id" => $this->getAttribute($context["appversioning"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appversioning'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_version_new");
        echo "\">Create a new appversioning</a>
        </li>
    </ul>
";
        
        $__internal_ed47e255ed5382335550a9be10e17218efa11333707773bcd7152187493df925->leave($__internal_ed47e255ed5382335550a9be10e17218efa11333707773bcd7152187493df925_prof);

    }

    public function getTemplateName()
    {
        return ":appversioning:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  110 => 37,  98 => 31,  92 => 28,  85 => 24,  79 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Appversionings list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Version</th>
                <th>Datestart</th>
                <th>Datestop</th>
                <th>Apiversion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for appversioning in appversionings %}
            <tr>
                <td><a href=\"{{ path('app_version_show', { 'id': appversioning.id }) }}\">{{ appversioning.id }}</a></td>
                <td>{{ appversioning.version }}</td>
                <td>{% if appversioning.datestart %}{{ appversioning.datestart|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if appversioning.datestop %}{{ appversioning.datestop|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ appversioning.apiversion }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('app_version_show', { 'id': appversioning.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('app_version_edit', { 'id': appversioning.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('app_version_new') }}\">Create a new appversioning</a>
        </li>
    </ul>
{% endblock %}
", ":appversioning:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/appversioning/index.html.twig");
    }
}
