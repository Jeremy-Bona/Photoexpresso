<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2eaf68e6044827c9b513bb899daf973bdb9b0e17a6fb5796abd4409bb5103cef extends Twig_Template
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
        $__internal_913d1bbc4c5101f8d0746503a63e72a5c6b4623517c7eec387d19c4ed0791759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913d1bbc4c5101f8d0746503a63e72a5c6b4623517c7eec387d19c4ed0791759->enter($__internal_913d1bbc4c5101f8d0746503a63e72a5c6b4623517c7eec387d19c4ed0791759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_913d1bbc4c5101f8d0746503a63e72a5c6b4623517c7eec387d19c4ed0791759->leave($__internal_913d1bbc4c5101f8d0746503a63e72a5c6b4623517c7eec387d19c4ed0791759_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
