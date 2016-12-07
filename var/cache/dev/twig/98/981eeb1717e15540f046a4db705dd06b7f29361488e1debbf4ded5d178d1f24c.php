<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c3c3fa3eedd0f6b884a0ec6cc15a1fab362524dc2d064bc53c2c2480a8655689 extends Twig_Template
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
        $__internal_a5a7959e73ccd3b0f35c2e4fb1e684b1f873d34702774bed52572e9213fa517f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a7959e73ccd3b0f35c2e4fb1e684b1f873d34702774bed52572e9213fa517f->enter($__internal_a5a7959e73ccd3b0f35c2e4fb1e684b1f873d34702774bed52572e9213fa517f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a5a7959e73ccd3b0f35c2e4fb1e684b1f873d34702774bed52572e9213fa517f->leave($__internal_a5a7959e73ccd3b0f35c2e4fb1e684b1f873d34702774bed52572e9213fa517f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
