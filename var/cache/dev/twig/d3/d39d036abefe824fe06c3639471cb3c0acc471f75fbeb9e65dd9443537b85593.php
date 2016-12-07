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
        $__internal_5e9a37fd0e2d9c3be16d88f08cce4adad0f3d300de80416345166aa74ebbf02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9a37fd0e2d9c3be16d88f08cce4adad0f3d300de80416345166aa74ebbf02f->enter($__internal_5e9a37fd0e2d9c3be16d88f08cce4adad0f3d300de80416345166aa74ebbf02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5e9a37fd0e2d9c3be16d88f08cce4adad0f3d300de80416345166aa74ebbf02f->leave($__internal_5e9a37fd0e2d9c3be16d88f08cce4adad0f3d300de80416345166aa74ebbf02f_prof);

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
