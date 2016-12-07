<?php

/* :promotionnal:index.html.twig */
class __TwigTemplate_a040293172d7c53fd7856adfa5e6db1120dc28ea9aa48f2d4b119b8427eee5ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":promotionnal:index.html.twig", 1);
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
        $__internal_1834b0142dbbe3b86d5677ee037277765181f2c0ed33fbff1030d65049f01192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1834b0142dbbe3b86d5677ee037277765181f2c0ed33fbff1030d65049f01192->enter($__internal_1834b0142dbbe3b86d5677ee037277765181f2c0ed33fbff1030d65049f01192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":promotionnal:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1834b0142dbbe3b86d5677ee037277765181f2c0ed33fbff1030d65049f01192->leave($__internal_1834b0142dbbe3b86d5677ee037277765181f2c0ed33fbff1030d65049f01192_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c5d7fb0ad8f94edefaed58b91a431b7ab7b3219e9dc825c6792a610d41826e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5d7fb0ad8f94edefaed58b91a431b7ab7b3219e9dc825c6792a610d41826e3->enter($__internal_3c5d7fb0ad8f94edefaed58b91a431b7ab7b3219e9dc825c6792a610d41826e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Promotionnals list</h1>

    <table>
        <thead>
            <tr>
                <th>Idpromotionnal</th>
                <th>Datecreate</th>
                <th>Datestart</th>
                <th>Datestop</th>
                <th>Url</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotionnals"]) ? $context["promotionnals"] : $this->getContext($context, "promotionnals")));
        foreach ($context['_seq'] as $context["_key"] => $context["promotionnal"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promo_show", array("id" => $this->getAttribute($context["promotionnal"], "idpromotionnal", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["promotionnal"], "idpromotionnal", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            if ($this->getAttribute($context["promotionnal"], "datecreate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["promotionnal"], "datecreate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["promotionnal"], "datestart", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["promotionnal"], "datestart", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["promotionnal"], "datestop", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["promotionnal"], "datestop", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["promotionnal"], "url", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promo_show", array("id" => $this->getAttribute($context["promotionnal"], "idpromotionnal", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promo_edit", array("id" => $this->getAttribute($context["promotionnal"], "idpromotionnal", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotionnal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promo_new");
        echo "\">Create a new promotionnal</a>
        </li>
    </ul>
";
        
        $__internal_3c5d7fb0ad8f94edefaed58b91a431b7ab7b3219e9dc825c6792a610d41826e3->leave($__internal_3c5d7fb0ad8f94edefaed58b91a431b7ab7b3219e9dc825c6792a610d41826e3_prof);

    }

    public function getTemplateName()
    {
        return ":promotionnal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 42,  112 => 37,  100 => 31,  94 => 28,  87 => 24,  81 => 23,  75 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Promotionnals list</h1>

    <table>
        <thead>
            <tr>
                <th>Idpromotionnal</th>
                <th>Datecreate</th>
                <th>Datestart</th>
                <th>Datestop</th>
                <th>Url</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for promotionnal in promotionnals %}
            <tr>
                <td><a href=\"{{ path('promo_show', { 'id': promotionnal.idpromotionnal }) }}\">{{ promotionnal.idpromotionnal }}</a></td>
                <td>{% if promotionnal.datecreate %}{{ promotionnal.datecreate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if promotionnal.datestart %}{{ promotionnal.datestart|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if promotionnal.datestop %}{{ promotionnal.datestop|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ promotionnal.url }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('promo_show', { 'id': promotionnal.idpromotionnal }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('promo_edit', { 'id': promotionnal.idpromotionnal }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('promo_new') }}\">Create a new promotionnal</a>
        </li>
    </ul>
{% endblock %}
", ":promotionnal:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/promotionnal/index.html.twig");
    }
}
