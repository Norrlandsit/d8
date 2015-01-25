<?php

/* core/themes/classy/templates/file-link.html.twig */
class __TwigTemplate_a5ced3c0475ac6c7fbde2f209f5a50ec375aa6f6f84c1638d9b52c3188f3f7a5 extends Twig_Template
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
        // line 16
        echo "<span";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
        echo " ";
        echo twig_drupal_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/file-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 16,);
    }
}
