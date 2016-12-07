<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c6eff48d865c024cb9819d567af622625e0b8bd8da245c6bb803661943c5d188 extends Twig_Template
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
        $__internal_0eb5e3d5c6166895275ab70a030c851c0df68d1cb36228bdc87ac1dbdcb3d12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb5e3d5c6166895275ab70a030c851c0df68d1cb36228bdc87ac1dbdcb3d12c->enter($__internal_0eb5e3d5c6166895275ab70a030c851c0df68d1cb36228bdc87ac1dbdcb3d12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0eb5e3d5c6166895275ab70a030c851c0df68d1cb36228bdc87ac1dbdcb3d12c->leave($__internal_0eb5e3d5c6166895275ab70a030c851c0df68d1cb36228bdc87ac1dbdcb3d12c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/jbona/Dev/photoexpresso/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
