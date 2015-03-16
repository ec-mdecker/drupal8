<?php

/* core/themes/classy/templates/user/username.html.twig */
class __TwigTemplate_665b7454cdf1fb4ba29db28945682b0966fa40fb12f03981cf6d6d49c5ad5447 extends Twig_Template
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
        if ((isset($context["link_path"]) ? $context["link_path"] : null)) {
            // line 22
            echo "<a";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "username"), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo twig_drupal_escape_filter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true);
            echo "</a>";
        } else {
            // line 24
            echo "<span";
            echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo twig_drupal_escape_filter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true);
            echo "</span>";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/user/username.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 24,  21 => 22,  19 => 21,);
    }
}
