<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bc6c809a37ffb894c13e23051dcd0411ece390f0c3af6453be7c730d24d3731a extends Twig_Template
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
        $__internal_30829456446a941dc43785fc3901c06dd60a5c06f6ee6f2f142a86db7e024b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30829456446a941dc43785fc3901c06dd60a5c06f6ee6f2f142a86db7e024b03->enter($__internal_30829456446a941dc43785fc3901c06dd60a5c06f6ee6f2f142a86db7e024b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_30829456446a941dc43785fc3901c06dd60a5c06f6ee6f2f142a86db7e024b03->leave($__internal_30829456446a941dc43785fc3901c06dd60a5c06f6ee6f2f142a86db7e024b03_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
