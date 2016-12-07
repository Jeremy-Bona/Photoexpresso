<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_e972c1acac341a38ee4668ee6e71d70b61d094a17875fdd106ab0b24566aead1 extends Twig_Template
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
        $__internal_e84b92ed640b95f608a2e27f41318731a1ff16885de5a5a99b8efe60f3e71596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84b92ed640b95f608a2e27f41318731a1ff16885de5a5a99b8efe60f3e71596->enter($__internal_e84b92ed640b95f608a2e27f41318731a1ff16885de5a5a99b8efe60f3e71596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e84b92ed640b95f608a2e27f41318731a1ff16885de5a5a99b8efe60f3e71596->leave($__internal_e84b92ed640b95f608a2e27f41318731a1ff16885de5a5a99b8efe60f3e71596_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
