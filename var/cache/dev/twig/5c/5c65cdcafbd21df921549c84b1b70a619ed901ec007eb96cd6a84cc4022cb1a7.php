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
        $__internal_cd0a00d912d0ff14a54fc7479a1975b278750395691756b16253a4e1ba31e0ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0a00d912d0ff14a54fc7479a1975b278750395691756b16253a4e1ba31e0ff->enter($__internal_cd0a00d912d0ff14a54fc7479a1975b278750395691756b16253a4e1ba31e0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_cd0a00d912d0ff14a54fc7479a1975b278750395691756b16253a4e1ba31e0ff->leave($__internal_cd0a00d912d0ff14a54fc7479a1975b278750395691756b16253a4e1ba31e0ff_prof);

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
