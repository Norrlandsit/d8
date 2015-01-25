<?php

/* core/modules/image/templates/image-formatter.html.twig */
class __TwigTemplate_4edf4bb355049c18f3c5feb9a178f171d121d79d7d9db5917c84a7746aa63da8 extends Twig_Template
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
        // line 17
        if ((isset($context["url"]) ? $context["url"] : null)) {
            // line 18
            echo "  <a href=\"";
            echo twig_drupal_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
            echo "</a>
";
        } else {
            // line 20
            echo "  ";
            echo twig_drupal_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/image/templates/image-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 20,  21 => 18,  19 => 17,);
    }
}
