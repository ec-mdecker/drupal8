<?php

/* @classy/system/block--system-menu-block.html.twig */
class __TwigTemplate_075f38decf0d60e7d00fb4510efb487de43cd791159f965f2a867f36fbd86a17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 44
        $context["classes"] = array(0 => "block", 1 => "block-menu", 2 => "navigation", 3 => ("menu--" . \Drupal\Component\Utility\Html::getClass((isset($context["derivative_plugin_id"]) ? $context["derivative_plugin_id"] : null))));
        // line 51
        $context["heading_id"] = ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 52
        echo "<nav";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo " role=\"navigation\" aria-labelledby=\"";
        echo twig_drupal_escape_filter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true);
        echo "\">
  ";
        // line 54
        echo "  ";
        if ((!$this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array()))) {
            // line 55
            echo "    ";
            $context["title_attributes"] = $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "visually-hidden"), "method");
            // line 56
            echo "  ";
        }
        // line 57
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  <h2 id=\"";
        // line 58
        echo twig_drupal_escape_filter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true);
        echo "\"";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), "html", null, true);
        echo "</h2>
  ";
        // line 59
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

  ";
        // line 62
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "</nav>
";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@classy/system/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 63,  66 => 62,  61 => 65,  58 => 62,  53 => 59,  45 => 58,  40 => 57,  37 => 56,  34 => 55,  31 => 54,  24 => 52,  22 => 51,  20 => 44,);
    }
}
