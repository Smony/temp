<?php

/* D:\OpenServer\domains\pictures.com.ua/plugins/smony/home/components/item/default.htm */
class __TwigTemplate_5027049c9370188bf3259ec5aa61058e0de6bd314eff160bf112253fac1a8b41 extends Twig_Template
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
        echo "<div class=\"row if_you\" style=\"margin-right: 0px;  margin-left: 0px;\">
    <span class=\"indent\"></span>
    <div class=\"col-xs-hidden col-md-1\"></div>

    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "getItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "        <div class=\"col-xs-12 col-md-4\">

            <p class=\"big_if_you\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</p>
            <p class=\"middle_if_you\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "meta", array()), "html", null, true);
            echo "</p>

            <span class=\"indent\"></span>

            <p class=\"small_if_you\">";
            // line 13
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["item"], "description", array())), "html", null, true);
            echo "</p>

            <span class=\"indent\"></span>
        </div>

        <div class=\"col-xs-hidden col-md-2\"></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "

    <div class=\"col-xs-hidden col-md-1\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/plugins/smony/home/components/item/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  44 => 13,  37 => 9,  33 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="row if_you" style="margin-right: 0px;  margin-left: 0px;">*/
/*     <span class="indent"></span>*/
/*     <div class="col-xs-hidden col-md-1"></div>*/
/* */
/*     {% for item in item.getItems %}*/
/*         <div class="col-xs-12 col-md-4">*/
/* */
/*             <p class="big_if_you">{{ item.title }}</p>*/
/*             <p class="middle_if_you">{{ item.meta }}</p>*/
/* */
/*             <span class="indent"></span>*/
/* */
/*             <p class="small_if_you">{{ item.description|striptags }}</p>*/
/* */
/*             <span class="indent"></span>*/
/*         </div>*/
/* */
/*         <div class="col-xs-hidden col-md-2"></div>*/
/*     {% endfor %}*/
/* */
/* */
/*     <div class="col-xs-hidden col-md-1"></div>*/
/* </div>*/
