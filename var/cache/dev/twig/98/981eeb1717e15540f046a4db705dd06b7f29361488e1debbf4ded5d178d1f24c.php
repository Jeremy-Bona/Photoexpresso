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
        $__internal_6b127320882dc2f3a275b49eded3a3fe0d5dd1e13f96064c7215eb8f95a368b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b127320882dc2f3a275b49eded3a3fe0d5dd1e13f96064c7215eb8f95a368b4->enter($__internal_6b127320882dc2f3a275b49eded3a3fe0d5dd1e13f96064c7215eb8f95a368b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6b127320882dc2f3a275b49eded3a3fe0d5dd1e13f96064c7215eb8f95a368b4->leave($__internal_6b127320882dc2f3a275b49eded3a3fe0d5dd1e13f96064c7215eb8f95a368b4_prof);

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
