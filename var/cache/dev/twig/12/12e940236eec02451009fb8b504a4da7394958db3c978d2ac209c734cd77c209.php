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
        $__internal_2442a8dde5050b67846bf2893d3d90257dbd5dedd89eb6c1dd043df3e065ce7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2442a8dde5050b67846bf2893d3d90257dbd5dedd89eb6c1dd043df3e065ce7a->enter($__internal_2442a8dde5050b67846bf2893d3d90257dbd5dedd89eb6c1dd043df3e065ce7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PhotoexpressoBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_2442a8dde5050b67846bf2893d3d90257dbd5dedd89eb6c1dd043df3e065ce7a->leave($__internal_2442a8dde5050b67846bf2893d3d90257dbd5dedd89eb6c1dd043df3e065ce7a_prof);

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
