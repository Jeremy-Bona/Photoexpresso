<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8bfeff583a3143e646166aa2f046d7da903e4afb1dcf70727787b5d00116cbf1 extends Twig_Template
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
        $__internal_e51e6e365951e1f54b4ddbaa97143a9f8d4b54833911f3dd94ba9b362f828030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51e6e365951e1f54b4ddbaa97143a9f8d4b54833911f3dd94ba9b362f828030->enter($__internal_e51e6e365951e1f54b4ddbaa97143a9f8d4b54833911f3dd94ba9b362f828030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e51e6e365951e1f54b4ddbaa97143a9f8d4b54833911f3dd94ba9b362f828030->leave($__internal_e51e6e365951e1f54b4ddbaa97143a9f8d4b54833911f3dd94ba9b362f828030_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
