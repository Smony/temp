<?php

/* D:\OpenServer\domains\pictures.com.ua/themes/photonj/partials/singin.htm */
class __TwigTemplate_073a74379fa18adc39be8d9835cbb2ba4f766758a6ee01755be89dd7af4a96a7 extends Twig_Template
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
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 2
            echo "<li id=\"wider_on_the_PC\">
    <a href=\"";
            // line 3
            echo $this->env->getExtension('CMS')->pageFilter("account");
            echo "\">
       <button type=\"button\" class=\"btn btn-default\" id=\"navigate\"><i class=\"glyphicon glyphicon-user\"></i>&nbsp;";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</button>
    </a>
</li>
";
        } else {
            // line 8
            echo "<a href=\"";
            echo $this->env->getExtension('CMS')->pageFilter("account");
            echo "\">
    <button type=\"button\" class=\"btn btn-default\" id=\"navigate\" style=\"margin-top: 0px;\">
        <a href=\"javascript:void(0);\" class=\"btn-auth-group\" data-toggle=\"modal\" data-target=\"#modal-login\">Login</a> /
        <a href=\"javascript:void(0);\" class=\"btn-auth-group\" data-toggle=\"modal\" data-target=\"#modal-registration\">Register</a>
    </button>
</a>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/themes/photonj/partials/singin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if user %}*/
/* <li id="wider_on_the_PC">*/
/*     <a href="{{ 'account'|page }}">*/
/*        <button type="button" class="btn btn-default" id="navigate"><i class="glyphicon glyphicon-user"></i>&nbsp;{{ user.name }}</button>*/
/*     </a>*/
/* </li>*/
/* {% else %}*/
/* <a href="{{ 'account'|page }}">*/
/*     <button type="button" class="btn btn-default" id="navigate" style="margin-top: 0px;">*/
/*         <a href="javascript:void(0);" class="btn-auth-group" data-toggle="modal" data-target="#modal-login">Login</a> /*/
/*         <a href="javascript:void(0);" class="btn-auth-group" data-toggle="modal" data-target="#modal-registration">Register</a>*/
/*     </button>*/
/* </a>*/
/* {% endif %}*/
