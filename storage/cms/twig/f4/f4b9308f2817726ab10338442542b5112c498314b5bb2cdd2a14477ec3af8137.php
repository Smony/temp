<?php

/* D:\OpenServer\domains\pictures.com.ua/themes/photonj/partials/navigation.htm */
class __TwigTemplate_de29c3051b9fa75238aedd6b6dfc3767730cfb55c2c447bf7bb48bc337c01bef extends Twig_Template
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
        echo "<div class=\"collapse navbar-collapse\" id=\"responsive_menu\">
    <ul class=\"nav navbar-nav\" style=\"font-size: 15pt;\">
        <li id=\"hidden_on_touch_screen\">
            <a href=\"#\">
                <button type=\"button\" class=\"btn btn-info\" id=\"bar\">
                    <i class=\"fa fa-bars fa-lg\"></i>
                </button>
            </a>
        </li>


        <li id=\"wider_on_the_PC\">
            <a href=\"";
        // line 13
        echo $this->env->getExtension('CMS')->pageFilter("s");
        echo "\">
                <button type=\"button\" class=\"btn btn-default\" id=\"navigate\">HOME</button>
            </a>
        </li>

        <li id=\"wider_on_the_PC\">
            <a href=\"";
        // line 19
        echo $this->env->getExtension('CMS')->pageFilter("works");
        echo "\">
                <button type=\"button\" class=\"btn btn-default\" id=\"navigate\">HOW IT WORKS</button>
            </a>
        </li>

        <li id=\"hidden_on_touch_screen\">
            <a href=\"";
        // line 25
        echo "/";
        echo "\">
                <button type=\"button\" class=\"btn btn-info btn-lg\" id=\"logo\">S<br><span>Silkovskyy</span></button>

            </a>
        </li>

        <li id=\"wider_on_the_PC\">
            <a href=\"";
        // line 32
        echo $this->env->getExtension('CMS')->pageFilter("services");
        echo "\">
                <button type=\"button\" class=\"btn btn-default\" id=\"navigate\">SERVICES AND PRICES</button>
            </a>
        </li>

        <li id=\"wider_on_the_PC\">
            <a href=\"";
        // line 38
        echo $this->env->getExtension('CMS')->pageFilter("contanct");
        echo "\">
                <button type=\"button\" class=\"btn btn-default\" id=\"navigate\">CONTACT US</button>
            </a>
        </li>

        <li>
            ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("singin"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "        </li>

    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/themes/photonj/partials/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 45,  79 => 44,  70 => 38,  61 => 32,  51 => 25,  42 => 19,  33 => 13,  19 => 1,);
    }
}
/* <div class="collapse navbar-collapse" id="responsive_menu">*/
/*     <ul class="nav navbar-nav" style="font-size: 15pt;">*/
/*         <li id="hidden_on_touch_screen">*/
/*             <a href="#">*/
/*                 <button type="button" class="btn btn-info" id="bar">*/
/*                     <i class="fa fa-bars fa-lg"></i>*/
/*                 </button>*/
/*             </a>*/
/*         </li>*/
/* */
/* */
/*         <li id="wider_on_the_PC">*/
/*             <a href="{{ 's'|page }}">*/
/*                 <button type="button" class="btn btn-default" id="navigate">HOME</button>*/
/*             </a>*/
/*         </li>*/
/* */
/*         <li id="wider_on_the_PC">*/
/*             <a href="{{ 'works'|page }}">*/
/*                 <button type="button" class="btn btn-default" id="navigate">HOW IT WORKS</button>*/
/*             </a>*/
/*         </li>*/
/* */
/*         <li id="hidden_on_touch_screen">*/
/*             <a href="{{ '/' }}">*/
/*                 <button type="button" class="btn btn-info btn-lg" id="logo">S<br><span>Silkovskyy</span></button>*/
/* */
/*             </a>*/
/*         </li>*/
/* */
/*         <li id="wider_on_the_PC">*/
/*             <a href="{{ 'services'|page }}">*/
/*                 <button type="button" class="btn btn-default" id="navigate">SERVICES AND PRICES</button>*/
/*             </a>*/
/*         </li>*/
/* */
/*         <li id="wider_on_the_PC">*/
/*             <a href="{{ 'contanct'|page }}">*/
/*                 <button type="button" class="btn btn-default" id="navigate">CONTACT US</button>*/
/*             </a>*/
/*         </li>*/
/* */
/*         <li>*/
/*             {% partial "singin" %}*/
/*         </li>*/
/* */
/*     </ul>*/
/* </div>*/
