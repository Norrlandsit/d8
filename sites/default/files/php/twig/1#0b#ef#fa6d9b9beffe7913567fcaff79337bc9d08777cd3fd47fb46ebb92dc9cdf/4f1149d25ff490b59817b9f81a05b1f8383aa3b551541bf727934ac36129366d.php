<?php

/* core/modules/system/templates/system-config-form.html.twig */
class __TwigTemplate_0beffa6d9b9beffe7913567fcaff79337bc9d08777cd3fd47fb46ebb92dc9cdf extends Twig_Template
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
        echo twig_drupal_escape_filter($this->env, (isset($context["form"]) ? $context["form"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/system-config-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 17,);
    }
}
