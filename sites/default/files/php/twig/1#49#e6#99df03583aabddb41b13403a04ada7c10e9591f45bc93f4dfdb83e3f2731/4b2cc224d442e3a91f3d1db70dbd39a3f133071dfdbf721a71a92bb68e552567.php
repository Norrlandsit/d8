<?php

/* @system/field.html.twig */
class __TwigTemplate_49e699df03583aabddb41b13403a04ada7c10e9591f45bc93f4dfdb83e3f2731 extends Twig_Template
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
        // line 33
        echo "<div";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 34
        if ((!(isset($context["label_hidden"]) ? $context["label_hidden"] : null))) {
            // line 35
            echo "    <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "field-label"), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</div>
  ";
        }
        // line 37
        echo "  <div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "field-items"), "method"), "html", null, true);
        echo ">
    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "      <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field-item"), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@system/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 41,  43 => 39,  39 => 38,  34 => 37,  26 => 35,  24 => 34,  19 => 33,);
    }
}
