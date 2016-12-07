<?php

/* :promotionnal:show.html.twig */
class __TwigTemplate_0d971e5a99c7b2ee8cc3bacde022ea91f26070e19b6d176e54ef80f0ffbf05eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":promotionnal:show.html.twig", 1);
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
        $__internal_9135de605e6b9695f6fd48ec5a35488a81e90c96c758e71ea13c9b7764fadfa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9135de605e6b9695f6fd48ec5a35488a81e90c96c758e71ea13c9b7764fadfa8->enter($__internal_9135de605e6b9695f6fd48ec5a35488a81e90c96c758e71ea13c9b7764fadfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":promotionnal:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9135de605e6b9695f6fd48ec5a35488a81e90c96c758e71ea13c9b7764fadfa8->leave($__internal_9135de605e6b9695f6fd48ec5a35488a81e90c96c758e71ea13c9b7764fadfa8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dfeefc029beea5e4797a06bfcf3b5048217ee4eb0c73572f870878dc93b592b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfeefc029beea5e4797a06bfcf3b5048217ee4eb0c73572f870878dc93b592b->enter($__internal_4dfeefc029beea5e4797a06bfcf3b5048217ee4eb0c73572f870878dc93b592b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Promotionnal</h1>

    <table>
        <tbody>
            <tr>
                <th>Idpromotionnal</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotionnal"]) ? $context["promotionnal"] : $this->getContext($context, "promotionnal")), "idpromotionnal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecreate</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["promotionnal"]) ? $context["promotionnal"] : $this->getContext($context, "promotionnal")), "datecreate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["promotionnal"]) ? $context["promotionnal"] : $this->getContext($context, "promotionnal")), "datecreate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datestart</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["promotionnal"]) ? $context["promotionnal"] : $this->getContext($context, "promotionnal")), "datestart", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["promotionnal"]) ? $context["promotionnal"] : $this->getContext($context, "promotionnal")), "datestart", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datestop</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["promotionnal"]) ? $context["promotionnal"] : $this->getContext($context, "promotionnal")), "datestop", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["promotionnal"]) ? $context["promotionnal"] : $this->getContext($context, "promotionnal")), "datestop", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotionnal"]) ? $context["promotionnal"] : $this->getContext($context, "promotionnal")), "url", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promo_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promo_edit", array("id" => $this->getAttribute((isset($context["promotionnal"]) ? $context["promotionnal"] : $this->getContext($context, "promotionnal")), "idpromotionnal", array()))), "html", null, true);
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
        
        $__internal_4dfeefc029beea5e4797a06bfcf3b5048217ee4eb0c73572f870878dc93b592b->leave($__internal_4dfeefc029beea5e4797a06bfcf3b5048217ee4eb0c73572f870878dc93b592b_prof);

    }

    public function getTemplateName()
    {
        return ":promotionnal:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 41,  104 => 39,  98 => 36,  92 => 33,  82 => 26,  73 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Promotionnal</h1>

    <table>
        <tbody>
            <tr>
                <th>Idpromotionnal</th>
                <td>{{ promotionnal.idpromotionnal }}</td>
            </tr>
            <tr>
                <th>Datecreate</th>
                <td>{% if promotionnal.datecreate %}{{ promotionnal.datecreate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Datestart</th>
                <td>{% if promotionnal.datestart %}{{ promotionnal.datestart|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Datestop</th>
                <td>{% if promotionnal.datestop %}{{ promotionnal.datestop|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>{{ promotionnal.url }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('promo_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('promo_edit', { 'id': promotionnal.idpromotionnal }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":promotionnal:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/promotionnal/show.html.twig");
    }
}
