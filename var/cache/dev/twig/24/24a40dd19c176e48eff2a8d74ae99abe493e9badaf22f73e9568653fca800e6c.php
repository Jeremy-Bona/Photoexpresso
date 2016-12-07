<?php

/* :userpromo:show.html.twig */
class __TwigTemplate_fa66b12c72d29caa25d0dc926f662a8d0f4eb8c146ec104e03872d10a53e339a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":userpromo:show.html.twig", 1);
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
        $__internal_4dfbef372e6e033c2e966f19fc74c28f592e232f618debed2cc5e0ba6db98769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfbef372e6e033c2e966f19fc74c28f592e232f618debed2cc5e0ba6db98769->enter($__internal_4dfbef372e6e033c2e966f19fc74c28f592e232f618debed2cc5e0ba6db98769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":userpromo:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dfbef372e6e033c2e966f19fc74c28f592e232f618debed2cc5e0ba6db98769->leave($__internal_4dfbef372e6e033c2e966f19fc74c28f592e232f618debed2cc5e0ba6db98769_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc9521bfa8952dfbb3f3552bde68baafb759387a1f1037ef667d28a78e26ab23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9521bfa8952dfbb3f3552bde68baafb759387a1f1037ef667d28a78e26ab23->enter($__internal_fc9521bfa8952dfbb3f3552bde68baafb759387a1f1037ef667d28a78e26ab23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Userpromo</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userPromo"]) ? $context["userPromo"] : $this->getContext($context, "userPromo")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Checked</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["userPromo"]) ? $context["userPromo"] : $this->getContext($context, "userPromo")), "checked", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["userPromo"]) ? $context["userPromo"] : $this->getContext($context, "userPromo")), "checked", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Used</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["userPromo"]) ? $context["userPromo"] : $this->getContext($context, "userPromo")), "used", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["userPromo"]) ? $context["userPromo"] : $this->getContext($context, "userPromo")), "used", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_promo_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_promo_edit", array("id" => $this->getAttribute((isset($context["userPromo"]) ? $context["userPromo"] : $this->getContext($context, "userPromo")), "id", array()))), "html", null, true);
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
        
        $__internal_fc9521bfa8952dfbb3f3552bde68baafb759387a1f1037ef667d28a78e26ab23->leave($__internal_fc9521bfa8952dfbb3f3552bde68baafb759387a1f1037ef667d28a78e26ab23_prof);

    }

    public function getTemplateName()
    {
        return ":userpromo:show.html.twig";
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
    <h1>Userpromo</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ userPromo.id }}</td>
            </tr>
            <tr>
                <th>Checked</th>
                <td>{% if userPromo.checked %}{{ userPromo.checked|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Used</th>
                <td>{% if userPromo.used %}{{ userPromo.used|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_promo_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_promo_edit', { 'id': userPromo.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":userpromo:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/userpromo/show.html.twig");
    }
}
