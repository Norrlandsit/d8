<?php

/* core/modules/views_ui/templates/views-ui-display-tab-setting.html.twig */
class __TwigTemplate_22056434638b45c0274f22d7327a8c957f4a383a3356ecbd572d70868c3177b8 extends Twig_Template
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
        // line 22
        $context["classes"] = array(0 => "views-display-setting", 1 => "clearfix", 2 => "views-ui-display-tab-setting", 3 => (((isset($context["defaulted"]) ? $context["defaulted"] : null)) ? ("defaulted") : ("")), 4 => (((isset($context["overridden"]) ? $context["overridden"] : null)) ? ("overridden") : ("")));
        // line 30
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 31
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 32
            echo "<span class=\"label\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</span>";
        }
        // line 34
        echo "  ";
        if ((isset($context["settings_links"]) ? $context["settings_links"] : null)) {
            // line 35
            echo "    ";
            echo twig_render_var(twig_drupal_join_filter((isset($context["settings_links"]) ? $context["settings_links"] : null), "<span class=\"label\">&nbsp;|&nbsp;</span>"));
            echo "
  ";
        }
        // line 37
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-display-tab-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 37,  36 => 35,  33 => 34,  28 => 32,  26 => 31,  21 => 30,  19 => 22,);
    }
}
