<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_504db59013992c3246dad226b8065a76982e1e5d00d970be376315620a8eb4df extends Twig_Template
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
        $__internal_a6509b97f1173835a8db1bf4a4adf1872e26b1839ec52a78cae11d21be80237d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6509b97f1173835a8db1bf4a4adf1872e26b1839ec52a78cae11d21be80237d->enter($__internal_a6509b97f1173835a8db1bf4a4adf1872e26b1839ec52a78cae11d21be80237d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a6509b97f1173835a8db1bf4a4adf1872e26b1839ec52a78cae11d21be80237d->leave($__internal_a6509b97f1173835a8db1bf4a4adf1872e26b1839ec52a78cae11d21be80237d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
