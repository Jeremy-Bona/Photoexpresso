<?php

/* base.html.twig */
class __TwigTemplate_7618e052757d637f86524ed6c378971bd7c4251b6cb985dc42445773069e1598 extends Twig_Template
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
        $__internal_1316a47de7974e474315c1f3a5993a8a90defc53c4f598d3448db4ef62b8c774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1316a47de7974e474315c1f3a5993a8a90defc53c4f598d3448db4ef62b8c774->enter($__internal_1316a47de7974e474315c1f3a5993a8a90defc53c4f598d3448db4ef62b8c774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1316a47de7974e474315c1f3a5993a8a90defc53c4f598d3448db4ef62b8c774->leave($__internal_1316a47de7974e474315c1f3a5993a8a90defc53c4f598d3448db4ef62b8c774_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_af639adf17dd509da0bbc34fd173b0cd6fcb7359202df3e98dcf2a62b5b74562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af639adf17dd509da0bbc34fd173b0cd6fcb7359202df3e98dcf2a62b5b74562->enter($__internal_af639adf17dd509da0bbc34fd173b0cd6fcb7359202df3e98dcf2a62b5b74562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_af639adf17dd509da0bbc34fd173b0cd6fcb7359202df3e98dcf2a62b5b74562->leave($__internal_af639adf17dd509da0bbc34fd173b0cd6fcb7359202df3e98dcf2a62b5b74562_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f2a4d7e325da4dc59313aaea6ae7e04411490ee50f9bdb9c01f4dbcbadb2a0fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a4d7e325da4dc59313aaea6ae7e04411490ee50f9bdb9c01f4dbcbadb2a0fb->enter($__internal_f2a4d7e325da4dc59313aaea6ae7e04411490ee50f9bdb9c01f4dbcbadb2a0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f2a4d7e325da4dc59313aaea6ae7e04411490ee50f9bdb9c01f4dbcbadb2a0fb->leave($__internal_f2a4d7e325da4dc59313aaea6ae7e04411490ee50f9bdb9c01f4dbcbadb2a0fb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0667b5885b322861d51d2d8d1b9332467d7b2006b73fd1dde71a24249e916388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0667b5885b322861d51d2d8d1b9332467d7b2006b73fd1dde71a24249e916388->enter($__internal_0667b5885b322861d51d2d8d1b9332467d7b2006b73fd1dde71a24249e916388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0667b5885b322861d51d2d8d1b9332467d7b2006b73fd1dde71a24249e916388->leave($__internal_0667b5885b322861d51d2d8d1b9332467d7b2006b73fd1dde71a24249e916388_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eed70f2c2ed3a651640144720a6acf8e4b496fb27a067480f8d144cd54533e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed70f2c2ed3a651640144720a6acf8e4b496fb27a067480f8d144cd54533e78->enter($__internal_eed70f2c2ed3a651640144720a6acf8e4b496fb27a067480f8d144cd54533e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eed70f2c2ed3a651640144720a6acf8e4b496fb27a067480f8d144cd54533e78->leave($__internal_eed70f2c2ed3a651640144720a6acf8e4b496fb27a067480f8d144cd54533e78_prof);

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
