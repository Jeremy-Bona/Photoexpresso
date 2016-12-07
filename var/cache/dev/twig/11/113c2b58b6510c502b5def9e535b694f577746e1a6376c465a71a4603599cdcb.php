<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_fc957eb2657c449e573f3f7a51a3b7e44975daf20bedfdabc8f218d28a896e1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2fdeebc6ef14e92ab79dbdacb354aa0429c10dbf9ed61a0438181ce6d9f21d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fdeebc6ef14e92ab79dbdacb354aa0429c10dbf9ed61a0438181ce6d9f21d0->enter($__internal_d2fdeebc6ef14e92ab79dbdacb354aa0429c10dbf9ed61a0438181ce6d9f21d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d2fdeebc6ef14e92ab79dbdacb354aa0429c10dbf9ed61a0438181ce6d9f21d0->leave($__internal_d2fdeebc6ef14e92ab79dbdacb354aa0429c10dbf9ed61a0438181ce6d9f21d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
