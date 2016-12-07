<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b450384644fff26ca5d39e49eae348a1f93bbbcdc04ba9f90f47ae4eef16080b extends Twig_Template
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
        $__internal_246f5bc41b063af6bb9111e8a4bd3f3b13fc775008ca4ab6f5f3f370bcab058c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246f5bc41b063af6bb9111e8a4bd3f3b13fc775008ca4ab6f5f3f370bcab058c->enter($__internal_246f5bc41b063af6bb9111e8a4bd3f3b13fc775008ca4ab6f5f3f370bcab058c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_246f5bc41b063af6bb9111e8a4bd3f3b13fc775008ca4ab6f5f3f370bcab058c->leave($__internal_246f5bc41b063af6bb9111e8a4bd3f3b13fc775008ca4ab6f5f3f370bcab058c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
