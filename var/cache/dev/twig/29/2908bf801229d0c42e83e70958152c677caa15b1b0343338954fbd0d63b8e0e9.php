<?php

/* :pricequantityprintsize:show.html.twig */
class __TwigTemplate_700e10f5d8ce15395a253c480ebce8192518095dc7dd794501940c2fa793bd34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pricequantityprintsize:show.html.twig", 1);
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
        $__internal_8a7e5bddd625990db1997ac8057644dad99914277c429fde1d4184748b75cf9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7e5bddd625990db1997ac8057644dad99914277c429fde1d4184748b75cf9b->enter($__internal_8a7e5bddd625990db1997ac8057644dad99914277c429fde1d4184748b75cf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pricequantityprintsize:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a7e5bddd625990db1997ac8057644dad99914277c429fde1d4184748b75cf9b->leave($__internal_8a7e5bddd625990db1997ac8057644dad99914277c429fde1d4184748b75cf9b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bd119e032d889ff2f4e2e108256a2b3d3b0765cbf7ac7ec6eeed81b6c865670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd119e032d889ff2f4e2e108256a2b3d3b0765cbf7ac7ec6eeed81b6c865670->enter($__internal_3bd119e032d889ff2f4e2e108256a2b3d3b0765cbf7ac7ec6eeed81b6c865670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pricequantityprintsize</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pricequantityprintsize"]) ? $context["pricequantityprintsize"] : $this->getContext($context, "pricequantityprintsize")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fromquantity</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pricequantityprintsize"]) ? $context["pricequantityprintsize"] : $this->getContext($context, "pricequantityprintsize")), "fromquantity", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Toquantity</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pricequantityprintsize"]) ? $context["pricequantityprintsize"] : $this->getContext($context, "pricequantityprintsize")), "toquantity", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pricequantityprintsize"]) ? $context["pricequantityprintsize"] : $this->getContext($context, "pricequantityprintsize")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("price_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("price_edit", array("id" => $this->getAttribute((isset($context["pricequantityprintsize"]) ? $context["pricequantityprintsize"] : $this->getContext($context, "pricequantityprintsize")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3bd119e032d889ff2f4e2e108256a2b3d3b0765cbf7ac7ec6eeed81b6c865670->leave($__internal_3bd119e032d889ff2f4e2e108256a2b3d3b0765cbf7ac7ec6eeed81b6c865670_prof);

    }

    public function getTemplateName()
    {
        return ":pricequantityprintsize:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Pricequantityprintsize</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ pricequantityprintsize.id }}</td>
            </tr>
            <tr>
                <th>Fromquantity</th>
                <td>{{ pricequantityprintsize.fromquantity }}</td>
            </tr>
            <tr>
                <th>Toquantity</th>
                <td>{{ pricequantityprintsize.toquantity }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ pricequantityprintsize.price }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('price_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('price_edit', { 'id': pricequantityprintsize.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":pricequantityprintsize:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/pricequantityprintsize/show.html.twig");
    }
}
