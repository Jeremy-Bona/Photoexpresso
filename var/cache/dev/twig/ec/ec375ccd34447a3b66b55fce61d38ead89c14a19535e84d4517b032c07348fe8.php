<?php

/* :orderphotosize:index.html.twig */
class __TwigTemplate_cde39222e468ff08b48e07988439f04692fec353b3bf1c5c90f2aad92edda7eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":orderphotosize:index.html.twig", 1);
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
        $__internal_90401f3b06adce3552c38623500a96c368873d35a694ec714d1e679b3e05a633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90401f3b06adce3552c38623500a96c368873d35a694ec714d1e679b3e05a633->enter($__internal_90401f3b06adce3552c38623500a96c368873d35a694ec714d1e679b3e05a633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":orderphotosize:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90401f3b06adce3552c38623500a96c368873d35a694ec714d1e679b3e05a633->leave($__internal_90401f3b06adce3552c38623500a96c368873d35a694ec714d1e679b3e05a633_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_901fef24f492f352fdb5a12324e7aed9943bbefbd79e63208fe136941f527814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901fef24f492f352fdb5a12324e7aed9943bbefbd79e63208fe136941f527814->enter($__internal_901fef24f492f352fdb5a12324e7aed9943bbefbd79e63208fe136941f527814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Orderphotosizes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Number</th>
                <th>Brilliantmat</th>
                <th>Marge</th>
                <th>Messagephoto</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderphotosizes"]) ? $context["orderphotosizes"] : $this->getContext($context, "orderphotosizes")));
        foreach ($context['_seq'] as $context["_key"] => $context["orderphotosize"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_photo_size_show", array("id" => $this->getAttribute($context["orderphotosize"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderphotosize"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderphotosize"], "number", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderphotosize"], "brilliantmat", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderphotosize"], "marge", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderphotosize"], "messagephoto", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_photo_size_show", array("id" => $this->getAttribute($context["orderphotosize"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_photo_size_edit", array("id" => $this->getAttribute($context["orderphotosize"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderphotosize'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_photo_size_new");
        echo "\">Create a new orderphotosize</a>
        </li>
    </ul>
";
        
        $__internal_901fef24f492f352fdb5a12324e7aed9943bbefbd79e63208fe136941f527814->leave($__internal_901fef24f492f352fdb5a12324e7aed9943bbefbd79e63208fe136941f527814_prof);

    }

    public function getTemplateName()
    {
        return ":orderphotosize:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  106 => 37,  94 => 31,  88 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Orderphotosizes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Number</th>
                <th>Brilliantmat</th>
                <th>Marge</th>
                <th>Messagephoto</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for orderphotosize in orderphotosizes %}
            <tr>
                <td><a href=\"{{ path('order_photo_size_show', { 'id': orderphotosize.id }) }}\">{{ orderphotosize.id }}</a></td>
                <td>{{ orderphotosize.number }}</td>
                <td>{{ orderphotosize.brilliantmat }}</td>
                <td>{{ orderphotosize.marge }}</td>
                <td>{{ orderphotosize.messagephoto }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('order_photo_size_show', { 'id': orderphotosize.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('order_photo_size_edit', { 'id': orderphotosize.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('order_photo_size_new') }}\">Create a new orderphotosize</a>
        </li>
    </ul>
{% endblock %}
", ":orderphotosize:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/orderphotosize/index.html.twig");
    }
}
