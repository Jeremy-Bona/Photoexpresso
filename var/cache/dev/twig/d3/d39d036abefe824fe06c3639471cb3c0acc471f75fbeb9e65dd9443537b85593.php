<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ab46fcbfb3c1ed666512193180eb7dff1126edf5705f287450598194e6ffe0e4 extends Twig_Template
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
        $__internal_6c6184d8c6c9078ea0972ac961fac7e93e98ab9173ef21585ee3a800374ffc42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6184d8c6c9078ea0972ac961fac7e93e98ab9173ef21585ee3a800374ffc42->enter($__internal_6c6184d8c6c9078ea0972ac961fac7e93e98ab9173ef21585ee3a800374ffc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6c6184d8c6c9078ea0972ac961fac7e93e98ab9173ef21585ee3a800374ffc42->leave($__internal_6c6184d8c6c9078ea0972ac961fac7e93e98ab9173ef21585ee3a800374ffc42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
