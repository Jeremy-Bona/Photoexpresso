<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d1ca7e6ee4796adcaea6a9d0bdfa83018238731ca236e005cfde7b43ff0b70c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd0e8d8cfb4b24f063163d2ca0b819fcd3adef8cc3d149b40c5256754fdd6f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0e8d8cfb4b24f063163d2ca0b819fcd3adef8cc3d149b40c5256754fdd6f50->enter($__internal_cd0e8d8cfb4b24f063163d2ca0b819fcd3adef8cc3d149b40c5256754fdd6f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd0e8d8cfb4b24f063163d2ca0b819fcd3adef8cc3d149b40c5256754fdd6f50->leave($__internal_cd0e8d8cfb4b24f063163d2ca0b819fcd3adef8cc3d149b40c5256754fdd6f50_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c469c6a0109559c48ebb7ba68eaa998cb78227e8b97a735204adde9c10afbced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c469c6a0109559c48ebb7ba68eaa998cb78227e8b97a735204adde9c10afbced->enter($__internal_c469c6a0109559c48ebb7ba68eaa998cb78227e8b97a735204adde9c10afbced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c469c6a0109559c48ebb7ba68eaa998cb78227e8b97a735204adde9c10afbced->leave($__internal_c469c6a0109559c48ebb7ba68eaa998cb78227e8b97a735204adde9c10afbced_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ce47b08b9105b2ddf7c182bc4a9f7435e8a4095dba04cadc3423cf576c9f92d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce47b08b9105b2ddf7c182bc4a9f7435e8a4095dba04cadc3423cf576c9f92d->enter($__internal_2ce47b08b9105b2ddf7c182bc4a9f7435e8a4095dba04cadc3423cf576c9f92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2ce47b08b9105b2ddf7c182bc4a9f7435e8a4095dba04cadc3423cf576c9f92d->leave($__internal_2ce47b08b9105b2ddf7c182bc4a9f7435e8a4095dba04cadc3423cf576c9f92d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dfb70d3ef82b1121f494744f3fdeb9136c3b07ca6cfef163bb25bf40e395d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfb70d3ef82b1121f494744f3fdeb9136c3b07ca6cfef163bb25bf40e395d93->enter($__internal_9dfb70d3ef82b1121f494744f3fdeb9136c3b07ca6cfef163bb25bf40e395d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9dfb70d3ef82b1121f494744f3fdeb9136c3b07ca6cfef163bb25bf40e395d93->leave($__internal_9dfb70d3ef82b1121f494744f3fdeb9136c3b07ca6cfef163bb25bf40e395d93_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
