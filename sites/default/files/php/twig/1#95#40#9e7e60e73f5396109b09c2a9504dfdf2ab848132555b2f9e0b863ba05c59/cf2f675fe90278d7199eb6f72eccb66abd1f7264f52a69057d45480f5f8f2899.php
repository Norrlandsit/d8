<?php

/* core/modules/system/templates/form.html.twig */
class __TwigTemplate_95409e7e60e73f5396109b09c2a9504dfdf2ab848132555b2f9e0b863ba05c59 extends Twig_Template
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
        // line 15
        echo "<form";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 16
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 16,  19 => 15,);
    }
}
