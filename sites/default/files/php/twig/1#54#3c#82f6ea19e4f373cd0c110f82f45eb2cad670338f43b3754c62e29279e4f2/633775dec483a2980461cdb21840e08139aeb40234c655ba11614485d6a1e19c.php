<?php

/* core/modules/system/templates/datetime-wrapper.html.twig */
class __TwigTemplate_543c82f6ea19e4f373cd0c110f82f45eb2cad670338f43b3754c62e29279e4f2 extends Twig_Template
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
        // line 19
        $context["title_classes"] = array(0 => "label", 1 => (((isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 24
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 25
            echo "  <h4";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h4>
";
        }
        // line 27
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
";
        // line 28
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 29
            echo "  <div class=\"description\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 29,  35 => 28,  31 => 27,  23 => 25,  21 => 24,  19 => 19,);
    }
}
