<?php

/* core/themes/classy/templates/system/links.html.twig */
class __TwigTemplate_dc454e7a720afa890b2958a73ad6d4842ad5d947639a2a20b4e149ac75057e9a extends Twig_Template
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
        // line 39
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 40
            if ((isset($context["heading"]) ? $context["heading"] : null)) {
                // line 41
                if ($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level", array())) {
                    // line 42
                    echo "<";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level", array()), "html", null, true);
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes", array()), "html", null, true);
                    echo ">";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text", array()), "html", null, true);
                    echo "</";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level", array()), "html", null, true);
                    echo ">";
                } else {
                    // line 44
                    echo "<h2";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes", array()), "html", null, true);
                    echo ">";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text", array()), "html", null, true);
                    echo "</h2>";
                }
            }
            // line 47
            echo "<ul";
            echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
            echo ">";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 49
                echo "<li";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => \Drupal\Component\Utility\Html::getClass($context["key"])), "method"), "html", null, true);
                echo ">";
                // line 50
                if ($this->getAttribute($context["item"], "link", array())) {
                    // line 51
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                } elseif ($this->getAttribute($context["item"], "text_attributes", array())) {
                    // line 53
                    echo "<span";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["item"], "text_attributes", array()), "html", null, true);
                    echo ">";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
                    echo "</span>";
                } else {
                    // line 55
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
                }
                // line 57
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "</ul>";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/system/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 59,  70 => 57,  67 => 55,  60 => 53,  57 => 51,  55 => 50,  51 => 49,  47 => 48,  43 => 47,  35 => 44,  25 => 42,  23 => 41,  21 => 40,  19 => 39,);
    }
}
