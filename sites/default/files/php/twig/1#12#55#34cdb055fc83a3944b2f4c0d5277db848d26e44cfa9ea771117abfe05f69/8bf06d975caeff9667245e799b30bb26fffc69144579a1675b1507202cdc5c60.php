<?php

/* core/modules/text/templates/field--text-with-summary.html.twig */
class __TwigTemplate_125534cdb055fc83a3944b2f4c0d5277db848d26e44cfa9ea771117abfe05f69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@text/field--text.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@text/field--text.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "core/modules/text/templates/field--text-with-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
