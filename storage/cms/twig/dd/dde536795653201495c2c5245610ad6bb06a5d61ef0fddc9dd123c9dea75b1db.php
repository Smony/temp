<?php

/* D:\OpenServer\domains\pictures.com.ua/plugins/smony/home/components/work/head.htm */
class __TwigTemplate_8d287c8107f213be94e29307fdd05fb2450b00958fa54099b7fdbbe8a3271c38 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "getContactSite", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["contactSite"]) {
            // line 2
            echo "<p class=\"how_it_works\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contactSite"], "title_site", array()), "html", null, true);
            echo " </p>
<div class=\"under_how_it_works\"> ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["contactSite"], "description_site", array()), "html", null, true);
            echo " </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactSite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/plugins/smony/home/components/work/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for contactSite in home.getContactSite %}*/
/* <p class="how_it_works"> {{ contactSite.title_site }} </p>*/
/* <div class="under_how_it_works"> {{ contactSite.description_site }} </div>*/
/* {% endfor %}*/
