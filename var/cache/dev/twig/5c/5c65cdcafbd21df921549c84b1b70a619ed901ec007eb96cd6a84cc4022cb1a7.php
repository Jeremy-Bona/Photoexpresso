<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_6a8984fe846cbf54c73c2fdf40a7d3b7110f5c2465193b0289fa7d251d8d4406 extends Twig_Template
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
        $__internal_84b6b4d1e72fe5a7f9afa4a4d740bc4fd1dbf3f207a63ee8b399658ac065186e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b6b4d1e72fe5a7f9afa4a4d740bc4fd1dbf3f207a63ee8b399658ac065186e->enter($__internal_84b6b4d1e72fe5a7f9afa4a4d740bc4fd1dbf3f207a63ee8b399658ac065186e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_84b6b4d1e72fe5a7f9afa4a4d740bc4fd1dbf3f207a63ee8b399658ac065186e->leave($__internal_84b6b4d1e72fe5a7f9afa4a4d740bc4fd1dbf3f207a63ee8b399658ac065186e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
