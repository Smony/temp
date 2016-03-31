<?php

/* D:\OpenServer\domains\pictures.com.ua/plugins/smony/commit/components/commit/default.htm */
class __TwigTemplate_aab292fc32a1e258eb6b9595d55dd6d88d2c4adf7fa536e16d66636e1a72fbee extends Twig_Template
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
        echo "<p>commit ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "name", array()), "html", null, true);
        echo "</p>
<p>commit ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "tasks", array()), "html", null, true);
        echo "</p>



";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/plugins/smony/commit/components/commit/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
/* <p>commit {{ __SELF__.name }}</p>*/
/* <p>commit {{ __SELF__.tasks }}</p>*/
/* */
/* */
/* */
/* */
