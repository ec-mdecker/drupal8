<?php

/* core/themes/classy/templates/system/item-list.html.twig */
class __TwigTemplate_e2bb33e4b6435da174288e32871396c63984a9d26d4b21d55980aa340b576197 extends Twig_Template
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
        // line 21
        if (((isset($context["items"]) ? $context["items"] : null) || (isset($context["empty"]) ? $context["empty"] : null))) {
            // line 22
            echo "<div class=\"item-list\">";
            // line 23
            if ((!twig_test_empty((isset($context["title"]) ? $context["title"] : null)))) {
                // line 24
                echo "<h3>";
                echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</h3>";
            }
            // line 26
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 27
                echo "<";
                echo twig_drupal_escape_filter($this->env, (isset($context["list_type"]) ? $context["list_type"] : null), "html", null, true);
                echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
                echo ">";
                // line 28
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 29
                    echo "<li";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true);
                    echo ">";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "</";
                echo twig_drupal_escape_filter($this->env, (isset($context["list_type"]) ? $context["list_type"] : null), "html", null, true);
                echo ">";
            } else {
                // line 33
                echo twig_drupal_escape_filter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true);
            }
            // line 35
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/system/item-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 35,  56 => 33,  51 => 31,  41 => 29,  37 => 28,  32 => 27,  30 => 26,  25 => 24,  23 => 23,  21 => 22,  19 => 21,);
    }
}
