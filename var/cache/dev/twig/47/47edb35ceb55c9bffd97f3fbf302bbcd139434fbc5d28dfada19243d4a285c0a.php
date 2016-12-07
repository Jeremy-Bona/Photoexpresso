<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_05d37eb44e9adce6596262d16ffa1b21445d5f83d063e61484c366be67b652e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1d9f5458c7e647bee320cd2f4b1805751c9ba83601c5e6dd63502ce4969b226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d9f5458c7e647bee320cd2f4b1805751c9ba83601c5e6dd63502ce4969b226->enter($__internal_b1d9f5458c7e647bee320cd2f4b1805751c9ba83601c5e6dd63502ce4969b226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b1d9f5458c7e647bee320cd2f4b1805751c9ba83601c5e6dd63502ce4969b226->leave($__internal_b1d9f5458c7e647bee320cd2f4b1805751c9ba83601c5e6dd63502ce4969b226_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d53ece4e3b2e324456a4f2a095116370271340077ee6d5f689562a861dfcb1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d53ece4e3b2e324456a4f2a095116370271340077ee6d5f689562a861dfcb1e->enter($__internal_4d53ece4e3b2e324456a4f2a095116370271340077ee6d5f689562a861dfcb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4d53ece4e3b2e324456a4f2a095116370271340077ee6d5f689562a861dfcb1e->leave($__internal_4d53ece4e3b2e324456a4f2a095116370271340077ee6d5f689562a861dfcb1e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
