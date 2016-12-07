<?php

/* :appversioning:show.html.twig */
class __TwigTemplate_471e3418817b043c239095158919604496d6eba01b809b4e9f715d26a5d98616 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":appversioning:show.html.twig", 1);
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
        $__internal_716ba4e4ad82c32d78e8d50184e21b620a41e76d433d98eb7e97612f21eac4c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716ba4e4ad82c32d78e8d50184e21b620a41e76d433d98eb7e97612f21eac4c7->enter($__internal_716ba4e4ad82c32d78e8d50184e21b620a41e76d433d98eb7e97612f21eac4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":appversioning:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_716ba4e4ad82c32d78e8d50184e21b620a41e76d433d98eb7e97612f21eac4c7->leave($__internal_716ba4e4ad82c32d78e8d50184e21b620a41e76d433d98eb7e97612f21eac4c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_93bcf7f22c68fbe921c071a97bd6d4e3cebae3f7021fd8e7a3c7b70ffdbd8924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93bcf7f22c68fbe921c071a97bd6d4e3cebae3f7021fd8e7a3c7b70ffdbd8924->enter($__internal_93bcf7f22c68fbe921c071a97bd6d4e3cebae3f7021fd8e7a3c7b70ffdbd8924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Appversioning</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appversioning"]) ? $context["appversioning"] : $this->getContext($context, "appversioning")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Version</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appversioning"]) ? $context["appversioning"] : $this->getContext($context, "appversioning")), "version", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datestart</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["appversioning"]) ? $context["appversioning"] : $this->getContext($context, "appversioning")), "datestart", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["appversioning"]) ? $context["appversioning"] : $this->getContext($context, "appversioning")), "datestart", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datestop</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["appversioning"]) ? $context["appversioning"] : $this->getContext($context, "appversioning")), "datestop", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["appversioning"]) ? $context["appversioning"] : $this->getContext($context, "appversioning")), "datestop", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Apiversion</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appversioning"]) ? $context["appversioning"] : $this->getContext($context, "appversioning")), "apiversion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_version_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_version_edit", array("id" => $this->getAttribute((isset($context["appversioning"]) ? $context["appversioning"] : $this->getContext($context, "appversioning")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_93bcf7f22c68fbe921c071a97bd6d4e3cebae3f7021fd8e7a3c7b70ffdbd8924->leave($__internal_93bcf7f22c68fbe921c071a97bd6d4e3cebae3f7021fd8e7a3c7b70ffdbd8924_prof);

    }

    public function getTemplateName()
    {
        return ":appversioning:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 41,  102 => 39,  96 => 36,  90 => 33,  80 => 26,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Appversioning</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ appversioning.id }}</td>
            </tr>
            <tr>
                <th>Version</th>
                <td>{{ appversioning.version }}</td>
            </tr>
            <tr>
                <th>Datestart</th>
                <td>{% if appversioning.datestart %}{{ appversioning.datestart|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Datestop</th>
                <td>{% if appversioning.datestop %}{{ appversioning.datestop|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Apiversion</th>
                <td>{{ appversioning.apiversion }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('app_version_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('app_version_edit', { 'id': appversioning.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":appversioning:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/appversioning/show.html.twig");
    }
}
