<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_28a052f16a80300ae404c1a02530eb6574a93b90fda50ebd4d34873d9493a04c extends Twig_Template
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
        $__internal_023ed80fd4fde8884fe5e0fa6ef2e7d573fb399da3151d4e6a1786506f160176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023ed80fd4fde8884fe5e0fa6ef2e7d573fb399da3151d4e6a1786506f160176->enter($__internal_023ed80fd4fde8884fe5e0fa6ef2e7d573fb399da3151d4e6a1786506f160176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_023ed80fd4fde8884fe5e0fa6ef2e7d573fb399da3151d4e6a1786506f160176->leave($__internal_023ed80fd4fde8884fe5e0fa6ef2e7d573fb399da3151d4e6a1786506f160176_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
