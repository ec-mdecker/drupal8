<?php

/* core/modules/views/templates/views-exposed-form.html.twig */
class __TwigTemplate_9f99e531bdfd6e8e73126a1b20c3919c1778488fcac8120928a9c271a77f90c6 extends Twig_Template
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
        // line 14
        if ((!twig_test_empty((isset($context["q"]) ? $context["q"] : null)))) {
            // line 15
            echo "  ";
            // line 19
            echo twig_drupal_escape_filter($this->env, (isset($context["q"]) ? $context["q"] : null), "html", null, true);
            echo "
";
        }
        // line 21
        echo "<div class=\"form--inline clearfix\">
  ";
        // line 22
        echo twig_drupal_escape_filter($this->env, (isset($context["form"]) ? $context["form"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-exposed-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 22,  28 => 21,  23 => 19,  21 => 15,  19 => 14,);
    }
}
