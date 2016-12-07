<?php

/* PhotoexpressoBundle:Default:index.html.twig */
class __TwigTemplate_9ea883f4f4947c584be9518d71dad192257a863eda5cb6de39af404f967d58c3 extends Twig_Template
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
        $__internal_c1166f098cbb9e39e59ad3c83efaed0f16e38ba27330c586890134580c52d415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1166f098cbb9e39e59ad3c83efaed0f16e38ba27330c586890134580c52d415->enter($__internal_c1166f098cbb9e39e59ad3c83efaed0f16e38ba27330c586890134580c52d415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PhotoexpressoBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_c1166f098cbb9e39e59ad3c83efaed0f16e38ba27330c586890134580c52d415->leave($__internal_c1166f098cbb9e39e59ad3c83efaed0f16e38ba27330c586890134580c52d415_prof);

    }

    public function getTemplateName()
    {
        return "PhotoexpressoBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "PhotoexpressoBundle:Default:index.html.twig", "/Users/jbona/Dev/photoexpresso/src/PhotoexpressoBundle/Resources/views/Default/index.html.twig");
    }
}
