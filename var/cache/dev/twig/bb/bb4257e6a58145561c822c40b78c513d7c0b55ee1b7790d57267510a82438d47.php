<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2ccd214bd732702313c1f14556d30da68ba3d26654b3b33a7d3ae9a38c1ad1a3 extends Twig_Template
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
        $__internal_34ae441f6ccca1c0a3ee3964ef84f0340302615f413f147cb2033e2dd8f9a0c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ae441f6ccca1c0a3ee3964ef84f0340302615f413f147cb2033e2dd8f9a0c8->enter($__internal_34ae441f6ccca1c0a3ee3964ef84f0340302615f413f147cb2033e2dd8f9a0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_34ae441f6ccca1c0a3ee3964ef84f0340302615f413f147cb2033e2dd8f9a0c8->leave($__internal_34ae441f6ccca1c0a3ee3964ef84f0340302615f413f147cb2033e2dd8f9a0c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
