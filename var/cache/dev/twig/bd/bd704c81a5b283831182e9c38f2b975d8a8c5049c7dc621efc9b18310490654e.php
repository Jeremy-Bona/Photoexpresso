<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_6d0c544e74c6e344fbd0b5c1331d9987798a3a4813f4121960cbfe4d56a16803 extends Twig_Template
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
        $__internal_50b4a9b098d58924b093663958b52a2a4d9361b7739df9ebb05bb2fd9ebfdff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b4a9b098d58924b093663958b52a2a4d9361b7739df9ebb05bb2fd9ebfdff0->enter($__internal_50b4a9b098d58924b093663958b52a2a4d9361b7739df9ebb05bb2fd9ebfdff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_50b4a9b098d58924b093663958b52a2a4d9361b7739df9ebb05bb2fd9ebfdff0->leave($__internal_50b4a9b098d58924b093663958b52a2a4d9361b7739df9ebb05bb2fd9ebfdff0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
