<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_fb26b5bc8095074fa6ede77fea84c95deec5855003607fffde5366da64aafbfe extends Twig_Template
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
        $__internal_302d8bfc29df392cab84dab14ae284cb970bab68c55c3bcd90130a3882f6eeb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302d8bfc29df392cab84dab14ae284cb970bab68c55c3bcd90130a3882f6eeb1->enter($__internal_302d8bfc29df392cab84dab14ae284cb970bab68c55c3bcd90130a3882f6eeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_302d8bfc29df392cab84dab14ae284cb970bab68c55c3bcd90130a3882f6eeb1->leave($__internal_302d8bfc29df392cab84dab14ae284cb970bab68c55c3bcd90130a3882f6eeb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
