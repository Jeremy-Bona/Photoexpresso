<?php

/* :printsize:show.html.twig */
class __TwigTemplate_af571816b6a301f93d6d2f8831b67dc75ef382b87ae58aad3905271b1e7d26cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":printsize:show.html.twig", 1);
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
        $__internal_2c4d99b35afa56e8f7ffd2407fbcd7127db5a9d0a91ac73a07c6a5bd61566094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4d99b35afa56e8f7ffd2407fbcd7127db5a9d0a91ac73a07c6a5bd61566094->enter($__internal_2c4d99b35afa56e8f7ffd2407fbcd7127db5a9d0a91ac73a07c6a5bd61566094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":printsize:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c4d99b35afa56e8f7ffd2407fbcd7127db5a9d0a91ac73a07c6a5bd61566094->leave($__internal_2c4d99b35afa56e8f7ffd2407fbcd7127db5a9d0a91ac73a07c6a5bd61566094_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1c90750d00d75654b533bb098ec3bf23e9b738b54c1638203facf0c39d91b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c90750d00d75654b533bb098ec3bf23e9b738b54c1638203facf0c39d91b05->enter($__internal_c1c90750d00d75654b533bb098ec3bf23e9b738b54c1638203facf0c39d91b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Printsize</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["printsize"]) ? $context["printsize"] : $this->getContext($context, "printsize")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Width</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["printsize"]) ? $context["printsize"] : $this->getContext($context, "printsize")), "width", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Height</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["printsize"]) ? $context["printsize"] : $this->getContext($context, "printsize")), "height", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ratio</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["printsize"]) ? $context["printsize"] : $this->getContext($context, "printsize")), "ratio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Available</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["printsize"]) ? $context["printsize"] : $this->getContext($context, "printsize")), "available", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("print_size_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("print_size_edit", array("id" => $this->getAttribute((isset($context["printsize"]) ? $context["printsize"] : $this->getContext($context, "printsize")), "id", array()))), "html", null, true);
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
        
        $__internal_c1c90750d00d75654b533bb098ec3bf23e9b738b54c1638203facf0c39d91b05->leave($__internal_c1c90750d00d75654b533bb098ec3bf23e9b738b54c1638203facf0c39d91b05_prof);

    }

    public function getTemplateName()
    {
        return ":printsize:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 41,  102 => 39,  96 => 36,  90 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Printsize</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ printsize.id }}</td>
            </tr>
            <tr>
                <th>Width</th>
                <td>{{ printsize.width }}</td>
            </tr>
            <tr>
                <th>Height</th>
                <td>{{ printsize.height }}</td>
            </tr>
            <tr>
                <th>Ratio</th>
                <td>{{ printsize.ratio }}</td>
            </tr>
            <tr>
                <th>Available</th>
                <td>{% if printsize.available %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('print_size_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('print_size_edit', { 'id': printsize.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":printsize:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/printsize/show.html.twig");
    }
}
