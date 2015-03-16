<?php

/* core/themes/classy/templates/system/status-messages.html.twig */
class __TwigTemplate_16374cfd267fc94e486fb1b9f0178d8413722975e6c86e1c7994221473238985 extends Twig_Template
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
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 29
            echo "  ";
            // line 30
            $context["classes"] = array(0 => "messages", 1 => ("messages--" . $context["type"]));
            // line 35
            echo "  <div class=\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "class", array()), "html", null, true);
            echo "\" role=\"contentinfo\" aria-label=\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true);
            echo "\">
    ";
            // line 36
            if (($context["type"] == "error")) {
                // line 37
                echo "      <div role=\"alert\">
    ";
            }
            // line 39
            echo "      ";
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array")) {
                // line 40
                echo "        <h2 class=\"visually-hidden\">";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true);
                echo "</h2>
      ";
            }
            // line 42
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 43
                echo "        <ul class=\"messages__list\">
          ";
                // line 44
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 45
                    echo "            <li class=\"messages__item\">";
                    echo twig_drupal_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "        </ul>
      ";
            } else {
                // line 49
                echo "        ";
                echo twig_drupal_escape_filter($this->env, twig_first($this->env, $context["messages"]), "html", null, true);
                echo "
      ";
            }
            // line 51
            echo "    ";
            if (($context["type"] == "error")) {
                // line 52
                echo "      </div>
    ";
            }
            // line 54
            echo "  </div>
  ";
            // line 56
            echo "  ";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/system/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 56,  85 => 54,  81 => 52,  78 => 51,  72 => 49,  68 => 47,  59 => 45,  55 => 44,  52 => 43,  49 => 42,  43 => 40,  40 => 39,  36 => 37,  34 => 36,  27 => 35,  25 => 30,  23 => 29,  19 => 28,);
    }
}
