<?php

/* core/modules/system/templates/time.html.twig */
class __TwigTemplate_0d2ddef0bb213d8676b82703632d24a090566724294304c1e8fbb70bfb9aa2f5 extends Twig_Template
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
        // line 28
        echo "<time";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "datetime"), "method"), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (((isset($context["html"]) ? $context["html"] : null)) ? ((isset($context["text"]) ? $context["text"] : null)) : ((isset($context["text"]) ? $context["text"] : null))), "html", null, true);
        echo "</time>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 28,);
    }
}
