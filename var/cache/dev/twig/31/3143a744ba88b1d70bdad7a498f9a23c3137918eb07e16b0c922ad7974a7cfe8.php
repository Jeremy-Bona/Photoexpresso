<?php

/* :photo:index.html.twig */
class __TwigTemplate_7e28c4584b415e9e295663f9896647465521b2ba0577097d5876f3234bd464db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":photo:index.html.twig", 1);
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
        $__internal_cb4317e2e2fd3f052f3438eda9689b6926024995fbdc7496a9793be8a111cd66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4317e2e2fd3f052f3438eda9689b6926024995fbdc7496a9793be8a111cd66->enter($__internal_cb4317e2e2fd3f052f3438eda9689b6926024995fbdc7496a9793be8a111cd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":photo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb4317e2e2fd3f052f3438eda9689b6926024995fbdc7496a9793be8a111cd66->leave($__internal_cb4317e2e2fd3f052f3438eda9689b6926024995fbdc7496a9793be8a111cd66_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2067a139a6abd51e93ed9d6eb7ded1904afbd24568c38743b77f53d55ff1acb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2067a139a6abd51e93ed9d6eb7ded1904afbd24568c38743b77f53d55ff1acb2->enter($__internal_2067a139a6abd51e93ed9d6eb7ded1904afbd24568c38743b77f53d55ff1acb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Photos list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Path</th>
                <th>Basename</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) ? $context["photos"] : $this->getContext($context, "photos")));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("photo_show", array("id" => $this->getAttribute($context["photo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "path", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "basename", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("photo_show", array("id" => $this->getAttribute($context["photo"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("photo_edit", array("id" => $this->getAttribute($context["photo"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("photo_new");
        echo "\">Create a new photo</a>
        </li>
    </ul>
";
        
        $__internal_2067a139a6abd51e93ed9d6eb7ded1904afbd24568c38743b77f53d55ff1acb2->leave($__internal_2067a139a6abd51e93ed9d6eb7ded1904afbd24568c38743b77f53d55ff1acb2_prof);

    }

    public function getTemplateName()
    {
        return ":photo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Photos list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Path</th>
                <th>Basename</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for photo in photos %}
            <tr>
                <td><a href=\"{{ path('photo_show', { 'id': photo.id }) }}\">{{ photo.id }}</a></td>
                <td>{{ photo.path }}</td>
                <td>{{ photo.basename }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('photo_show', { 'id': photo.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('photo_edit', { 'id': photo.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('photo_new') }}\">Create a new photo</a>
        </li>
    </ul>
{% endblock %}
", ":photo:index.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/photo/index.html.twig");
    }
}
