<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_61490ce42e87ccd5dda504e7df333f7c95705cc919c0a88c404f1a6a5ea7ba4e extends Twig_Template
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
        $__internal_e7ab7bba442dd22f95b36dcf4c0580c9c9524d1b4501c8a27a4280d545434583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ab7bba442dd22f95b36dcf4c0580c9c9524d1b4501c8a27a4280d545434583->enter($__internal_e7ab7bba442dd22f95b36dcf4c0580c9c9524d1b4501c8a27a4280d545434583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e7ab7bba442dd22f95b36dcf4c0580c9c9524d1b4501c8a27a4280d545434583->leave($__internal_e7ab7bba442dd22f95b36dcf4c0580c9c9524d1b4501c8a27a4280d545434583_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
