<?php

/* core/themes/bartik/templates/page.html.twig */
class __TwigTemplate_7e14e361ca656296b3afa6c32421552c5f23c0297ce4204c2d66206a6a4f5d55 extends Twig_Template
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
        // line 75
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" role=\"banner\" aria-label=\"";
        // line 77
        echo twig_render_var(t("Site header"));
        echo "\">
      <div class=\"section clearfix\">
        ";
        // line 79
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true);
        echo "
        ";
        // line 80
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 81
            echo "          <a href=\"";
            echo twig_drupal_escape_filter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_render_var(t("Home"));
            echo "\" rel=\"home\" id=\"logo\">
            <img src=\"";
            // line 82
            echo twig_drupal_escape_filter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_render_var(t("Home"));
            echo "\" />
          </a>
        ";
        }
        // line 85
        echo "        ";
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 86
            echo "          <div id=\"name-and-slogan\"";
            if (((isset($context["hide_site_name"]) ? $context["hide_site_name"] : null) && (isset($context["hide_site_slogan"]) ? $context["hide_site_slogan"] : null))) {
                echo " class=\"visually-hidden\"";
            }
            echo ">
            ";
            // line 87
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 88
                echo "              ";
                if ((isset($context["title"]) ? $context["title"] : null)) {
                    // line 89
                    echo "                <div id=\"site-name\"";
                    if ((isset($context["hide_site_name"]) ? $context["hide_site_name"] : null)) {
                        echo " class=\"visually-hidden\"";
                    }
                    echo ">
                  <strong>
                    <a href=\"";
                    // line 91
                    echo twig_drupal_escape_filter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_render_var(t("Home"));
                    echo "\" rel=\"home\"><span>";
                    echo twig_drupal_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
                    echo "</span></a>
                  </strong>
                </div>
              ";
                    // line 95
                    echo "              ";
                } else {
                    // line 96
                    echo "                <h1 id=\"site-name\"";
                    if ((isset($context["hide_site_name"]) ? $context["hide_site_name"] : null)) {
                        echo " class=\"visually-hidden\" ";
                    }
                    echo ">
                  <a href=\"";
                    // line 97
                    echo twig_drupal_escape_filter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_render_var(t("Home"));
                    echo "\" rel=\"home\"><span>";
                    echo twig_drupal_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
                    echo "</span></a>
                </h1>
              ";
                }
                // line 100
                echo "            ";
            }
            // line 101
            echo "            ";
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 102
                echo "              <div id=\"site-slogan\"";
                if ((isset($context["hide_site_slogan"]) ? $context["hide_site_slogan"] : null)) {
                    echo " class=\"visually-hidden\"";
                }
                echo ">
                ";
                // line 103
                echo twig_drupal_escape_filter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 106
            echo "          </div>
        ";
        }
        // line 108
        echo "        ";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true);
        echo "
        ";
        // line 109
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true);
        echo "
      </div>
    </header>
    ";
        // line 112
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 113
            echo "      <div id=\"messages\">
        <div class=\"section clearfix\">";
            // line 114
            echo twig_drupal_escape_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true);
            echo "</div>
      </div>
    ";
        }
        // line 117
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_top", array())) {
            // line 118
            echo "      <div id=\"featured-top\">
        <aside class=\"section clearfix\" role=\"complementary\">
          ";
            // line 120
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_top", array()), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 124
        echo "    <div id=\"main-wrapper\" class=\"clearfix\">
      <div id=\"main\" class=\"clearfix\">
        ";
        // line 126
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true);
        echo "
        <main id=\"content\" class=\"column\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 130
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
            ";
        // line 131
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 132
            echo "              <h1 class=\"title\" id=\"page-title\">
                ";
            // line 133
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
              </h1>
            ";
        }
        // line 136
        echo "            ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
            ";
        // line 137
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 138
            echo "              <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo twig_render_var(t("Tabs"));
            echo "\">
                ";
            // line 139
            echo twig_drupal_escape_filter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true);
            echo "
              </nav>
            ";
        }
        // line 142
        echo "            ";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true);
        echo "
            ";
        // line 143
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 144
            echo "              <ul class=\"action-links\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true);
            echo "</ul>
            ";
        }
        // line 146
        echo "            ";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "
          </section>
        </main>
        ";
        // line 149
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 150
            echo "          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 152
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 156
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 157
            echo "          <div id=\"sidebar-second\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 159
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 163
        echo "      </div>
    </div>
    ";
        // line 165
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_third", array()))) {
            // line 166
            echo "      <div id=\"featured-bottom-wrapper\">
        <aside id=\"featured-bottom\" class=\"clearfix\" role=\"complementary\">
          ";
            // line 168
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_first", array()), "html", null, true);
            echo "
          ";
            // line 169
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_second", array()), "html", null, true);
            echo "
          ";
            // line 170
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_third", array()), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 174
        echo "    <div id=\"site-footer__wrapper\">
      <footer class=\"site-footer\">
        ";
        // line 176
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 177
            echo "          <div id=\"footer-columns\" class=\"clearfix\">
            ";
            // line 178
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true);
            echo "
            ";
            // line 179
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true);
            echo "
            ";
            // line 180
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true);
            echo "
            ";
            // line 181
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 184
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array())) {
            // line 185
            echo "          <div id=\"site-footer__bottom\" role=\"contentinfo\">
            ";
            // line 186
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array()), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 189
        echo "      </footer>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 189,  310 => 186,  307 => 185,  304 => 184,  298 => 181,  294 => 180,  290 => 179,  286 => 178,  283 => 177,  281 => 176,  277 => 174,  270 => 170,  266 => 169,  262 => 168,  258 => 166,  256 => 165,  252 => 163,  245 => 159,  241 => 157,  238 => 156,  231 => 152,  227 => 150,  225 => 149,  218 => 146,  212 => 144,  210 => 143,  205 => 142,  199 => 139,  194 => 138,  192 => 137,  187 => 136,  181 => 133,  178 => 132,  176 => 131,  172 => 130,  165 => 126,  161 => 124,  154 => 120,  150 => 118,  147 => 117,  141 => 114,  138 => 113,  136 => 112,  130 => 109,  125 => 108,  121 => 106,  115 => 103,  108 => 102,  105 => 101,  102 => 100,  92 => 97,  85 => 96,  82 => 95,  72 => 91,  64 => 89,  61 => 88,  59 => 87,  52 => 86,  49 => 85,  41 => 82,  34 => 81,  32 => 80,  28 => 79,  23 => 77,  19 => 75,);
    }
}
