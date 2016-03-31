<?php

/* D:\OpenServer\domains\pictures.com.ua/plugins/rainlab/user/components/account/default.htm */
class __TwigTemplate_520f2a33fdbf3b48e5c2cff82289294a68b9f7268bd8213aad3b215d0a367a86 extends Twig_Template
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
        if ( !(isset($context["user"]) ? $context["user"] : null)) {
            // line 2
            echo "
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
            // line 5
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::popup_singin")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "        </div>

        <div class=\"col-md-6\">
            ";
            // line 9
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::popup_register")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 10
            echo "        </div>
    </div>

";
        } else {
            // line 14
            echo "
    ";
            // line 15
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::activation_check")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 16
            echo "
    ";
            // line 17
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::update")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 18
            echo "
    ";
            // line 19
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::deactivate_link")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 20
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/plugins/rainlab/user/components/account/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  62 => 19,  59 => 18,  55 => 17,  52 => 16,  48 => 15,  45 => 14,  39 => 10,  35 => 9,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if not user %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             {% partial __SELF__ ~ '::popup_singin' %}*/
/*         </div>*/
/* */
/*         <div class="col-md-6">*/
/*             {% partial __SELF__ ~ '::popup_register' %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% else %}*/
/* */
/*     {% partial __SELF__ ~ '::activation_check' %}*/
/* */
/*     {% partial __SELF__ ~ '::update' %}*/
/* */
/*     {% partial __SELF__ ~ '::deactivate_link' %}*/
/* */
/* {% endif %}*/
/* */
