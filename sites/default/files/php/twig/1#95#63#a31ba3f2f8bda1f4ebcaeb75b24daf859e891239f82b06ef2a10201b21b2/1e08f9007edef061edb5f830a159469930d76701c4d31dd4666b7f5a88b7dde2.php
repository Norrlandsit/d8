<?php

/* core/themes/bartik/templates/node.html.twig */
class __TwigTemplate_9563a31ba3f2f8bda1f4ebcaeb75b24daf859e891239f82b06ef2a10201b21b2 extends Twig_Template
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
        // line 66
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "bundle", array()))), 2 => (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (((!$this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method"))) ? ("node--unpublished") : ("")), 5 => (((isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")), 6 => "clearfix");
        // line 76
        echo "<article";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">

  <header>
    ";
        // line 79
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
    ";
        // line 80
        if ((!(isset($context["page"]) ? $context["page"] : null))) {
            // line 81
            echo "      <h2";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "node__title"), "method"), "html", null, true);
            echo ">
        <a href=\"";
            // line 82
            echo twig_drupal_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</a>
      </h2>
    ";
        }
        // line 85
        echo "    ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

    ";
        // line 87
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 88
            echo "      <div class=\"node__meta\">
        ";
            // line 89
            echo twig_drupal_escape_filter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true);
            echo "
        <span";
            // line 90
            echo twig_drupal_escape_filter($this->env, (isset($context["author_attributes"]) ? $context["author_attributes"] : null), "html", null, true);
            echo ">
          ";
            // line 91
            echo t("Submitted by !author_name on !date", array("!author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "!date" => (isset($context["date"]) ? $context["date"] : null), ));
            // line 92
            echo "        </span>
        ";
            // line 93
            echo twig_drupal_escape_filter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 96
        echo "  </header>

  <div";
        // line 98
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "node__content", 1 => "clearfix"), "method"), "html", null, true);
        echo ">
    ";
        // line 99
        echo twig_drupal_escape_filter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "comment", "links"), "html", null, true);
        echo "
  </div>

  ";
        // line 102
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array())) {
            // line 103
            echo "    <div class=\"node__links\">
      ";
            // line 104
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array()), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 107
        echo "
  ";
        // line 108
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array()), "html", null, true);
        echo "

</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 108,  102 => 107,  96 => 104,  93 => 103,  91 => 102,  85 => 99,  81 => 98,  77 => 96,  71 => 93,  68 => 92,  66 => 91,  62 => 90,  58 => 89,  55 => 88,  53 => 87,  47 => 85,  39 => 82,  34 => 81,  32 => 80,  28 => 79,  21 => 76,  19 => 66,);
    }
}
