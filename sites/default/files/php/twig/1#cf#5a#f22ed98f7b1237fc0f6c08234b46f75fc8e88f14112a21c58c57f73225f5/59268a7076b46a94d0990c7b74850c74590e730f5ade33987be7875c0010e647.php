<?php

/* core/themes/classy/templates/system/pager.html.twig */
class __TwigTemplate_cf5af22ed98f7b1237fc0f6c08234b46f75fc8e88f14112a21c58c57f73225f5 extends Twig_Template
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
        // line 34
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 35
            echo "  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 36
            echo twig_render_var(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items\">
      ";
            // line 39
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array())) {
                // line 40
                echo "        <li class=\"pager__item pager__item--first\">
          <a href=\"";
                // line 41
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()), "href", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_render_var(t("Go to first page"));
                echo "\"";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()), "attributes", array()), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 42
                echo twig_render_var(t("First page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 43
                echo twig_drupal_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array(), "any", false, true), "text", array()), t("« first"))) : (t("« first"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 47
            echo "      ";
            // line 48
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array())) {
                // line 49
                echo "        <li class=\"pager__item pager__item--previous\">
          <a href=\"";
                // line 50
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "href", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_render_var(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "attributes", array()), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 51
                echo twig_render_var(t("Previous page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 52
                echo twig_drupal_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array()), t("‹ previous"))) : (t("‹ previous"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 56
            echo "      ";
            // line 57
            echo "      ";
            if ($this->getAttribute((isset($context["ellipses"]) ? $context["ellipses"] : null), "previous", array())) {
                // line 58
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 60
            echo "      ";
            // line 61
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "pages", array()));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 62
                echo "        <li class=\"pager__item";
                echo twig_render_var(((((isset($context["current"]) ? $context["current"] : null) == $context["key"])) ? (" is-active") : ("")));
                echo "\">
          ";
                // line 63
                if (((isset($context["current"]) ? $context["current"] : null) == $context["key"])) {
                    // line 64
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 65
                    echo "          ";
                } else {
                    // line 66
                    echo "            ";
                    $context["title"] = t("Go to page @key", array("@key" => $context["key"]));
                    // line 67
                    echo "          ";
                }
                // line 68
                echo "          <a href=\"";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["item"], "href", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "\"";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">
              ";
                // line 70
                echo twig_render_var(((((isset($context["current"]) ? $context["current"] : null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>";
                // line 72
                echo twig_drupal_escape_filter($this->env, $context["key"], "html", null, true);
                // line 73
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "      ";
            // line 77
            echo "      ";
            if ($this->getAttribute((isset($context["ellipses"]) ? $context["ellipses"] : null), "next", array())) {
                // line 78
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 80
            echo "      ";
            // line 81
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array())) {
                // line 82
                echo "        <li class=\"pager__item pager__item--next\">
          <a href=\"";
                // line 83
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "href", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_render_var(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "attributes", array()), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 84
                echo twig_render_var(t("Next page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 85
                echo twig_drupal_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array()), t("next ›"))) : (t("next ›"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 89
            echo "      ";
            // line 90
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array())) {
                // line 91
                echo "        <li class=\"pager__item pager__item--last\">
          <a href=\"";
                // line 92
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()), "href", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_render_var(t("Go to last page"));
                echo "\"";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()), "attributes", array()), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 93
                echo twig_render_var(t("Last page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 94
                echo twig_drupal_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array(), "any", false, true), "text", array()), t("last »"))) : (t("last »"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 98
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/system/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 98,  196 => 94,  192 => 93,  184 => 92,  181 => 91,  178 => 90,  176 => 89,  169 => 85,  165 => 84,  157 => 83,  154 => 82,  151 => 81,  149 => 80,  145 => 78,  142 => 77,  140 => 76,  132 => 73,  130 => 72,  126 => 70,  116 => 68,  113 => 67,  110 => 66,  107 => 65,  104 => 64,  102 => 63,  97 => 62,  92 => 61,  90 => 60,  86 => 58,  83 => 57,  81 => 56,  74 => 52,  70 => 51,  62 => 50,  59 => 49,  56 => 48,  54 => 47,  47 => 43,  43 => 42,  35 => 41,  32 => 40,  29 => 39,  24 => 36,  21 => 35,  19 => 34,);
    }
}
