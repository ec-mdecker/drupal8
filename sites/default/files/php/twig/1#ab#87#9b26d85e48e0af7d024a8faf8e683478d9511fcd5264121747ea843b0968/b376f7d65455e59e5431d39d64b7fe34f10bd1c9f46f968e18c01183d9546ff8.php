<?php

/* core/themes/classy/templates/system/table.html.twig */
class __TwigTemplate_ab879b26d85e48e0af7d024a8faf8e683478d9511fcd5264121747ea843b0968 extends Twig_Template
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
        // line 44
        echo "<table";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 45
        if ((isset($context["caption"]) ? $context["caption"] : null)) {
            // line 46
            echo "    <caption>";
            echo twig_drupal_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true);
            echo "</caption>
  ";
        }
        // line 48
        echo "
  ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colgroups"]) ? $context["colgroups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["colgroup"]) {
            // line 50
            echo "    ";
            if ($this->getAttribute($context["colgroup"], "cols", array())) {
                // line 51
                echo "      <colgroup";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["colgroup"], "attributes", array()), "html", null, true);
                echo ">
        ";
                // line 52
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["colgroup"], "cols", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 53
                    echo "          <col";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["col"], "attributes", array()), "html", null, true);
                    echo " />
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "      </colgroup>
    ";
            } else {
                // line 57
                echo "      <colgroup";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["colgroup"], "attributes", array()), "html", null, true);
                echo " />
    ";
            }
            // line 59
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
  ";
        // line 61
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 62
            echo "    <thead>
      <tr>
        ";
            // line 64
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 65
                echo "          ";
                // line 66
                $context["cell_classes"] = array(0 => (($this->getAttribute($context["cell"], "active_table_sort", array())) ? ("active") : ("")));
                // line 70
                echo "          <";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true);
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cell"], "attributes", array()), "addClass", array(0 => (isset($context["cell_classes"]) ? $context["cell_classes"] : null)), "method"), "html", null, true);
                echo ">";
                // line 71
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true);
                // line 72
                echo "</";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true);
                echo ">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "      </tr>
    </thead>
  ";
        }
        // line 77
        echo "
  ";
        // line 78
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 79
            echo "    <tbody>
      ";
            // line 80
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 81
                echo "        ";
                // line 82
                $context["row_classes"] = array(0 => (((!(isset($context["no_striping"]) ? $context["no_striping"] : null))) ? (twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index0", array()))) : ("")));
                // line 86
                echo "        <tr";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => (isset($context["row_classes"]) ? $context["row_classes"] : null)), "method"), "html", null, true);
                echo ">
          ";
                // line 87
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "cells", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 88
                    echo "            <";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true);
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["cell"], "attributes", array()), "html", null, true);
                    echo ">";
                    // line 89
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true);
                    // line 90
                    echo "</";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true);
                    echo ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "        </tr>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "    </tbody>
  ";
        } elseif ((isset($context["empty"]) ? $context["empty"] : null)) {
            // line 96
            echo "    <tbody>
      <tr class=\"odd\">
        <td colspan=\"";
            // line 98
            echo twig_drupal_escape_filter($this->env, (isset($context["header_columns"]) ? $context["header_columns"] : null), "html", null, true);
            echo "\" class=\"empty message\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true);
            echo "</td>
      </tr>
    </tbody>
  ";
        }
        // line 102
        echo "  ";
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 103
            echo "    <tfoot>
      ";
            // line 104
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["footer"]) ? $context["footer"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 105
                echo "        <tr";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true);
                echo ">
          ";
                // line 106
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "cells", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 107
                    echo "            <";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true);
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["cell"], "attributes", array()), "html", null, true);
                    echo ">";
                    // line 108
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true);
                    // line 109
                    echo "</";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true);
                    echo ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "    </tfoot>
  ";
        }
        // line 115
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/system/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 115,  242 => 113,  235 => 111,  226 => 109,  224 => 108,  219 => 107,  215 => 106,  210 => 105,  206 => 104,  203 => 103,  200 => 102,  191 => 98,  187 => 96,  183 => 94,  168 => 92,  159 => 90,  157 => 89,  152 => 88,  148 => 87,  143 => 86,  141 => 82,  139 => 81,  122 => 80,  119 => 79,  117 => 78,  114 => 77,  109 => 74,  100 => 72,  98 => 71,  93 => 70,  91 => 66,  89 => 65,  85 => 64,  81 => 62,  79 => 61,  76 => 60,  70 => 59,  64 => 57,  60 => 55,  51 => 53,  47 => 52,  42 => 51,  39 => 50,  35 => 49,  32 => 48,  26 => 46,  24 => 45,  19 => 44,);
    }
}
