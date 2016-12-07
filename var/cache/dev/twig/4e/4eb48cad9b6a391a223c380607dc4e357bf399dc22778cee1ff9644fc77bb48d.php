<?php

/* :photo:show.html.twig */
class __TwigTemplate_e99647b387ee03f590c3abcdf50c96a7541fc1061b0967f0b53250f31e7018e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":photo:show.html.twig", 1);
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
        $__internal_45a2eb6881313066c23e5b7f8b9acbb8a9b1712c64e8d2f3ee9ca070cc68ffd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a2eb6881313066c23e5b7f8b9acbb8a9b1712c64e8d2f3ee9ca070cc68ffd8->enter($__internal_45a2eb6881313066c23e5b7f8b9acbb8a9b1712c64e8d2f3ee9ca070cc68ffd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":photo:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45a2eb6881313066c23e5b7f8b9acbb8a9b1712c64e8d2f3ee9ca070cc68ffd8->leave($__internal_45a2eb6881313066c23e5b7f8b9acbb8a9b1712c64e8d2f3ee9ca070cc68ffd8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f375b061fc50842a67c3032921adbda2d50af1c35a888b194283a168977ba67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f375b061fc50842a67c3032921adbda2d50af1c35a888b194283a168977ba67f->enter($__internal_f375b061fc50842a67c3032921adbda2d50af1c35a888b194283a168977ba67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Photo</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "path", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Basename</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "basename", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("photo_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("photo_edit", array("id" => $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "id", array()))), "html", null, true);
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
        
        $__internal_f375b061fc50842a67c3032921adbda2d50af1c35a888b194283a168977ba67f->leave($__internal_f375b061fc50842a67c3032921adbda2d50af1c35a888b194283a168977ba67f_prof);

    }

    public function getTemplateName()
    {
        return ":photo:show.html.twig";
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
    <h1>Photo</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ photo.id }}</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>{{ photo.path }}</td>
            </tr>
            <tr>
                <th>Basename</th>
                <td>{{ photo.basename }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('photo_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('photo_edit', { 'id': photo.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":photo:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/photo/show.html.twig");
    }
}
