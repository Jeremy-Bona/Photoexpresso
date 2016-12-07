<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_749a3ed0615ce5cf8f7f87f4b6de98dcc7a68c0d247894ed97256bfb8009811f extends Twig_Template
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
        $__internal_36d248bad5c4e4533f0c97c7d6d93de169488b7e5f1badf87c65d8130dfb658a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d248bad5c4e4533f0c97c7d6d93de169488b7e5f1badf87c65d8130dfb658a->enter($__internal_36d248bad5c4e4533f0c97c7d6d93de169488b7e5f1badf87c65d8130dfb658a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_36d248bad5c4e4533f0c97c7d6d93de169488b7e5f1badf87c65d8130dfb658a->leave($__internal_36d248bad5c4e4533f0c97c7d6d93de169488b7e5f1badf87c65d8130dfb658a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
