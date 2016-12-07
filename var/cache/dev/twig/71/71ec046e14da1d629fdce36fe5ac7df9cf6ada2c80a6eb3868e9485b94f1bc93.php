<?php

/* :orderphotosize:show.html.twig */
class __TwigTemplate_58d94951e916f909f82c6061f6b8a60ed896dc68d981a482cd09a73bdeca28c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":orderphotosize:show.html.twig", 1);
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
        $__internal_94ffed060880e5acf6c5188739c9f7a992904abc26f2d21bbccfc118b09683f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ffed060880e5acf6c5188739c9f7a992904abc26f2d21bbccfc118b09683f2->enter($__internal_94ffed060880e5acf6c5188739c9f7a992904abc26f2d21bbccfc118b09683f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":orderphotosize:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94ffed060880e5acf6c5188739c9f7a992904abc26f2d21bbccfc118b09683f2->leave($__internal_94ffed060880e5acf6c5188739c9f7a992904abc26f2d21bbccfc118b09683f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da19ce597a8593afa970e0fda68fef7253a23e6921ed2a78c1e27ff8404af22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da19ce597a8593afa970e0fda68fef7253a23e6921ed2a78c1e27ff8404af22e->enter($__internal_da19ce597a8593afa970e0fda68fef7253a23e6921ed2a78c1e27ff8404af22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Orderphotosize</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orderphotosize"]) ? $context["orderphotosize"] : $this->getContext($context, "orderphotosize")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Number</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orderphotosize"]) ? $context["orderphotosize"] : $this->getContext($context, "orderphotosize")), "number", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Brilliantmat</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orderphotosize"]) ? $context["orderphotosize"] : $this->getContext($context, "orderphotosize")), "brilliantmat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Marge</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orderphotosize"]) ? $context["orderphotosize"] : $this->getContext($context, "orderphotosize")), "marge", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Messagephoto</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orderphotosize"]) ? $context["orderphotosize"] : $this->getContext($context, "orderphotosize")), "messagephoto", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_photo_size_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_photo_size_edit", array("id" => $this->getAttribute((isset($context["orderphotosize"]) ? $context["orderphotosize"] : $this->getContext($context, "orderphotosize")), "id", array()))), "html", null, true);
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
        
        $__internal_da19ce597a8593afa970e0fda68fef7253a23e6921ed2a78c1e27ff8404af22e->leave($__internal_da19ce597a8593afa970e0fda68fef7253a23e6921ed2a78c1e27ff8404af22e_prof);

    }

    public function getTemplateName()
    {
        return ":orderphotosize:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  98 => 39,  92 => 36,  86 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Orderphotosize</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ orderphotosize.id }}</td>
            </tr>
            <tr>
                <th>Number</th>
                <td>{{ orderphotosize.number }}</td>
            </tr>
            <tr>
                <th>Brilliantmat</th>
                <td>{{ orderphotosize.brilliantmat }}</td>
            </tr>
            <tr>
                <th>Marge</th>
                <td>{{ orderphotosize.marge }}</td>
            </tr>
            <tr>
                <th>Messagephoto</th>
                <td>{{ orderphotosize.messagephoto }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('order_photo_size_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('order_photo_size_edit', { 'id': orderphotosize.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":orderphotosize:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/orderphotosize/show.html.twig");
    }
}
