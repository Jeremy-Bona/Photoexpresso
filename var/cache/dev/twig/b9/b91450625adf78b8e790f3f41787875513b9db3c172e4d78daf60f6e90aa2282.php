<?php

/* :pricequantityprintsize:index.html.twig */
class __TwigTemplate_660abc50f70da761df477befa86b533babea0ee1ba95d46dbba4d9add377db8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pricequantityprintsize:index.html.twig", 1);
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
        $__internal_7dfb05f37fc04e2162d4ef8492df707aac36c91b0e2d4a79e35823905edeed81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dfb05f37fc04e2162d4ef8492df707aac36c91b0e2d4a79e35823905edeed81->enter($__internal_7dfb05f37fc04e2162d4ef8492df707aac36c91b0e2d4a79e35823905edeed81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pricequantityprintsize:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dfb05f37fc04e2162d4ef8492df707aac36c91b0e2d4a79e35823905edeed81->leave($__internal_7dfb05f37fc04e2162d4ef8492df707aac36c91b0e2d4a79e35823905edeed81_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a89d3489f54f2516663acb7df92d36829ac814a4a31cccba4c76fb2e2745a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a89d3489f54f2516663acb7df92d36829ac814a4a31cccba4c76fb2e2745a31->enter($__internal_9a89d3489f54f2516663acb7df92d36829ac814a4a31cccba4c76fb2e2745a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pricequantityprintsizes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Fromquantity</th>
                <th>Toquantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pricequantityprintsizes"]) ? $context["pricequantityprintsizes"] : $this->getContext($context, "pricequantityprintsizes")));
        foreach ($context['_seq'] as $context["_key"] => $context["pricequantityprintsize"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("price_show", array("id" => $this->getAttribute($context["pricequantityprintsize"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pricequantityprintsize"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["pricequantityprintsize"], "fromquantity", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["pricequantityprintsize"], "toquantity", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["pricequantityprintsize"], "price", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("price_show", array("id" => $this->getAttribute($context["pricequantityprintsize"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("price_edit", array("id" => $this->getAttribute($context["pricequantityprintsize"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pricequantityprintsize'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("price_new");
        echo "\">Create a new pricequantityprintsize</a>
        </li>
    </ul>
";
        
        $__internal_9a89d3489f54f2516663acb7df92d36829ac814a4a31cccba4c76fb2e2745a31->leave($__internal_9a89d3489f54f2516663acb7df92d36829ac814a4a31cccba4c76fb2e2745a31_prof);

    }

    public function getTemplateName()
    {
        return ":pricequantityprintsize:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Pricequantityprintsizes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Fromquantity</th>
                <th>Toquantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for pricequantityprintsize in pricequantityprintsizes %}
            <tr>
                <td><a href=\"{{ path('price_show', { 'id': pricequantityprintsize.id }) }}\">{{ pricequantityprintsize.id }}</a></td>
                <td>{{ pricequantityprintsize.fromquantity }}</td>
                <td>{{ pricequantityprintsize.toquantity }}</td>
                <td>{{ pricequantityprintsize.price }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('price_show', { 'id': pricequantityprintsize.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('price_edit', { 'id': pricequantityprintsize.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('price_new') }}\">Create a new pricequantityprintsize</a>
        </li>
    </ul>
{% endblock %}
", ":pricequantityprintsize:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/pricequantityprintsize/index.html.twig");
    }
}
