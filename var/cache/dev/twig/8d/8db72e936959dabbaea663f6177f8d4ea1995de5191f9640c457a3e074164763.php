<?php

/* base.html.twig */
class __TwigTemplate_ec087bddaa24c50ac4a199105c4534e04ef8a0ff2865384d585fd16527e595f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13b7703ba2bd1660cba9cbe319fe57331546f60d47784e0f9004bab71a04cb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b7703ba2bd1660cba9cbe319fe57331546f60d47784e0f9004bab71a04cb44->enter($__internal_13b7703ba2bd1660cba9cbe319fe57331546f60d47784e0f9004bab71a04cb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_13b7703ba2bd1660cba9cbe319fe57331546f60d47784e0f9004bab71a04cb44->leave($__internal_13b7703ba2bd1660cba9cbe319fe57331546f60d47784e0f9004bab71a04cb44_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6587c879d02602a1194c9c2ebebe1e6c4e910bd8e4ae9cad98a6b73e2c1bc898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6587c879d02602a1194c9c2ebebe1e6c4e910bd8e4ae9cad98a6b73e2c1bc898->enter($__internal_6587c879d02602a1194c9c2ebebe1e6c4e910bd8e4ae9cad98a6b73e2c1bc898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6587c879d02602a1194c9c2ebebe1e6c4e910bd8e4ae9cad98a6b73e2c1bc898->leave($__internal_6587c879d02602a1194c9c2ebebe1e6c4e910bd8e4ae9cad98a6b73e2c1bc898_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_082d0c5f8ceba4307d24b973497de5e064b38072d04410ea8d92b59446f0161c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082d0c5f8ceba4307d24b973497de5e064b38072d04410ea8d92b59446f0161c->enter($__internal_082d0c5f8ceba4307d24b973497de5e064b38072d04410ea8d92b59446f0161c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_082d0c5f8ceba4307d24b973497de5e064b38072d04410ea8d92b59446f0161c->leave($__internal_082d0c5f8ceba4307d24b973497de5e064b38072d04410ea8d92b59446f0161c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_88a3e035db0a5167c95f1b373171017d0ef821bda90f343003c226a0d7a66a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a3e035db0a5167c95f1b373171017d0ef821bda90f343003c226a0d7a66a2d->enter($__internal_88a3e035db0a5167c95f1b373171017d0ef821bda90f343003c226a0d7a66a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_88a3e035db0a5167c95f1b373171017d0ef821bda90f343003c226a0d7a66a2d->leave($__internal_88a3e035db0a5167c95f1b373171017d0ef821bda90f343003c226a0d7a66a2d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_02108ccca10ab464a891456d0da810c885f60efbe77ac26623fa27163bdc1014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02108ccca10ab464a891456d0da810c885f60efbe77ac26623fa27163bdc1014->enter($__internal_02108ccca10ab464a891456d0da810c885f60efbe77ac26623fa27163bdc1014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_02108ccca10ab464a891456d0da810c885f60efbe77ac26623fa27163bdc1014->leave($__internal_02108ccca10ab464a891456d0da810c885f60efbe77ac26623fa27163bdc1014_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/base.html.twig");
    }
}
