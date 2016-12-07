<?php

/* :deviceversion:show.html.twig */
class __TwigTemplate_974f03bd592d87e57a5581be2284fd2c17f0530748f7026f01076f59e639abc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":deviceversion:show.html.twig", 1);
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
        $__internal_2b62e93d2bb589c7401760945dcbbc0ff46221ad3d78b4405d7f16f2498c2747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b62e93d2bb589c7401760945dcbbc0ff46221ad3d78b4405d7f16f2498c2747->enter($__internal_2b62e93d2bb589c7401760945dcbbc0ff46221ad3d78b4405d7f16f2498c2747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":deviceversion:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b62e93d2bb589c7401760945dcbbc0ff46221ad3d78b4405d7f16f2498c2747->leave($__internal_2b62e93d2bb589c7401760945dcbbc0ff46221ad3d78b4405d7f16f2498c2747_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_abdce69c75718583b1e46c4dbcb3b209f2dffe17e3946c0527188279e320d926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abdce69c75718583b1e46c4dbcb3b209f2dffe17e3946c0527188279e320d926->enter($__internal_abdce69c75718583b1e46c4dbcb3b209f2dffe17e3946c0527188279e320d926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Deviceversion</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deviceversion"]) ? $context["deviceversion"] : $this->getContext($context, "deviceversion")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Installdatetime</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["deviceversion"]) ? $context["deviceversion"] : $this->getContext($context, "deviceversion")), "installdatetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["deviceversion"]) ? $context["deviceversion"] : $this->getContext($context, "deviceversion")), "installdatetime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Uninstalldatetime</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["deviceversion"]) ? $context["deviceversion"] : $this->getContext($context, "deviceversion")), "uninstalldatetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["deviceversion"]) ? $context["deviceversion"] : $this->getContext($context, "deviceversion")), "uninstalldatetime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("device_version_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("device_version_edit", array("id" => $this->getAttribute((isset($context["deviceversion"]) ? $context["deviceversion"] : $this->getContext($context, "deviceversion")), "id", array()))), "html", null, true);
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
        
        $__internal_abdce69c75718583b1e46c4dbcb3b209f2dffe17e3946c0527188279e320d926->leave($__internal_abdce69c75718583b1e46c4dbcb3b209f2dffe17e3946c0527188279e320d926_prof);

    }

    public function getTemplateName()
    {
        return ":deviceversion:show.html.twig";
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
    <h1>Deviceversion</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ deviceversion.id }}</td>
            </tr>
            <tr>
                <th>Installdatetime</th>
                <td>{% if deviceversion.installdatetime %}{{ deviceversion.installdatetime|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Uninstalldatetime</th>
                <td>{% if deviceversion.uninstalldatetime %}{{ deviceversion.uninstalldatetime|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('device_version_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('device_version_edit', { 'id': deviceversion.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":deviceversion:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/deviceversion/show.html.twig");
    }
}
