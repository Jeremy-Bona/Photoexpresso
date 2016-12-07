<?php

/* :order:show.html.twig */
class __TwigTemplate_e6f2ab5e7ae8369ee620e170dd5b349014057a3eb92abfe43ed1a98efc2fa179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":order:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Order</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datetime</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "datetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "datetime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "price", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isvalidated</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "isvalidated", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Isreceived</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "isreceived", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Ispaid</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "ispaid", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Isprint</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "isprint", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Issent</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "issent", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Isarchive</th>
                <td>";
        // line 42
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "isarchive", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_edit", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":order:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 57,  143 => 55,  137 => 52,  131 => 49,  117 => 42,  106 => 38,  95 => 34,  84 => 30,  73 => 26,  62 => 22,  55 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":order:show.html.twig", "/Users/jbona/Dev/photoexpresso/app/Resources/views/order/show.html.twig");
    }
}
