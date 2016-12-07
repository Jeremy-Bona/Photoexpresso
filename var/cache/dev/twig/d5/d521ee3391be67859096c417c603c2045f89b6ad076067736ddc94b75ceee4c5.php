<?php

/* :user:new.html.twig */
class __TwigTemplate_1b470e3b31962431bcf5c1267e749853316b499a4f89d68b1ca46b333b629248 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
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
        $__internal_db4c2afcbc1cc7c507f984d10c1dd7f5f177033e20525e97475064d96a2a613d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4c2afcbc1cc7c507f984d10c1dd7f5f177033e20525e97475064d96a2a613d->enter($__internal_db4c2afcbc1cc7c507f984d10c1dd7f5f177033e20525e97475064d96a2a613d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db4c2afcbc1cc7c507f984d10c1dd7f5f177033e20525e97475064d96a2a613d->leave($__internal_db4c2afcbc1cc7c507f984d10c1dd7f5f177033e20525e97475064d96a2a613d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99d8ae78cb6bdc46b8038a39992fc9f03fc2e274a4449018845f9805d807cf8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d8ae78cb6bdc46b8038a39992fc9f03fc2e274a4449018845f9805d807cf8b->enter($__internal_99d8ae78cb6bdc46b8038a39992fc9f03fc2e274a4449018845f9805d807cf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_99d8ae78cb6bdc46b8038a39992fc9f03fc2e274a4449018845f9805d807cf8b->leave($__internal_99d8ae78cb6bdc46b8038a39992fc9f03fc2e274a4449018845f9805d807cf8b_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":user:new.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/user/new.html.twig");
    }
}
