<?php

/* <div class="permission"><span class="title">{{ title }}</span>{% if description or warning %}<div class="description">{% if warning %}<em class="permission-warning">{{ warning }}</em> {% endif %}{{ description }}</div>{% endif %}</div> */
class __TwigTemplate_e270e77688e1aaf7d08213020832770a86f4beb0ebb78467cf2fd0c05d9b4f8a extends Twig_Template
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
        // line 1
        echo "<div class=\"permission\"><span class=\"title\">";
        echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</span>";
        if (((isset($context["description"]) ? $context["description"] : null) || (isset($context["warning"]) ? $context["warning"] : null))) {
            echo "<div class=\"description\">";
            if ((isset($context["warning"]) ? $context["warning"] : null)) {
                echo "<em class=\"permission-warning\">";
                echo twig_drupal_escape_filter($this->env, (isset($context["warning"]) ? $context["warning"] : null), "html", null, true);
                echo "</em> ";
            }
            echo twig_drupal_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</div>";
        }
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "<div class=\"permission\"><span class=\"title\">{{ title }}</span>{% if description or warning %}<div class=\"description\">{% if warning %}<em class=\"permission-warning\">{{ warning }}</em> {% endif %}{{ description }}</div>{% endif %}</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
