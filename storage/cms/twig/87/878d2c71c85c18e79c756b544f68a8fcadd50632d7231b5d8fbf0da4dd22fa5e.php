<?php

/* D:\OpenServer\domains\pictures.com.ua/plugins/smony/home/components/work/default.htm */
class __TwigTemplate_8fcaafe259a274b1bb9d5647e60bae5704027eaaa8f53af084d2543b544542fc extends Twig_Template
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
        echo "<div class=\"row\" style=\"margin-right: 0px; margin-left: 0px; font-size: 2vw;\">

    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::head")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
    <div class=\"row\" style=\"margin-right: 0px;  margin-left: 0px\";>
        <div class=\"col-xs-hidden col-sm-hidden col-md-1\"></div>

        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["work"]) ? $context["work"] : null), "works", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "        <div class=\"col-xs-12 col-md-2\" >
            <img class=\"img-responsive img-circle\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "attachments", array()), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "attachments", array()), "title", array()), "html", null, true);
            echo "\">
            <p class=\"under_plasecholder_sircl\" style=\"word-wrap: break-word;\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</p>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
        <div class=\"col-xs-hidden col-sm-hidden col-md-1\" ></div>
    </div>
    <span class=\"indent\"></span>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/plugins/smony/home/components/work/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  46 => 11,  40 => 10,  37 => 9,  33 => 8,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="row" style="margin-right: 0px; margin-left: 0px; font-size: 2vw;">*/
/* */
/*     {% partial __SELF__ ~ '::head' %}*/
/* */
/*     <div class="row" style="margin-right: 0px;  margin-left: 0px";>*/
/*         <div class="col-xs-hidden col-sm-hidden col-md-1"></div>*/
/* */
/*         {% for post in work.works %}*/
/*         <div class="col-xs-12 col-md-2" >*/
/*             <img class="img-responsive img-circle" src="{{ post.attachments.path }}" alt="{{ post.attachments.title }}">*/
/*             <p class="under_plasecholder_sircl" style="word-wrap: break-word;">{{ post.title }}</p>*/
/*         </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="col-xs-hidden col-sm-hidden col-md-1" ></div>*/
/*     </div>*/
/*     <span class="indent"></span>*/
/* </div>*/
