<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2eaf68e6044827c9b513bb899daf973bdb9b0e17a6fb5796abd4409bb5103cef extends Twig_Template
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
        $__internal_71767f687918b947e44e7666a84921a5f34912eac3b64886385a606e06f6bbb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71767f687918b947e44e7666a84921a5f34912eac3b64886385a606e06f6bbb0->enter($__internal_71767f687918b947e44e7666a84921a5f34912eac3b64886385a606e06f6bbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_71767f687918b947e44e7666a84921a5f34912eac3b64886385a606e06f6bbb0->leave($__internal_71767f687918b947e44e7666a84921a5f34912eac3b64886385a606e06f6bbb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
