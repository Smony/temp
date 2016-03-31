<?php

/* D:\OpenServer\domains\pictures.com.ua/themes/photonj/partials/footer.htm */
class __TwigTemplate_64c7b8985d599744264d474507433e90445511dca864f4f701dc56824a81a794 extends Twig_Template
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
        echo "<div class=\"col-xs-hidden col-lg-2\"> </div>

    <div class=\"col-xs-12 col-lg-2\">

        <p class=\"contact_logo\">
            <a href=\"";
        // line 6
        echo "/";
        echo "\" class=\"logo_in_footer\">
                S
            </a>
        </p>

        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "getContact", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 12
            echo "
        <p  class=\"contact\">
            <img src=\"";
            // line 14
            echo $this->env->getExtension('CMS')->themeFilter("assets/img/phone.jpg");
            echo "\">
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone_number", array()), "html", null, true);
            echo "
        </p>

        <p  class=\"contact\">
            <img src=\"";
            // line 19
            echo $this->env->getExtension('CMS')->themeFilter("assets/img/e-mail.jpg");
            echo "\">
            ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "
        </p>

        <p  class=\"contact\">
            <img src=\"";
            // line 24
            echo $this->env->getExtension('CMS')->themeFilter("assets/img/map.jpg");
            echo "\">
            ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "address", array()), "html", null, true);
            echo "
        </p>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "

        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["social"], "getSocialLink", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 32
            echo "
            <p  class=\"contact_social_networks\">

                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "facebook", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"social_networks\"><i class=\"fa fa-facebook  \"></i></a> &nbsp; &nbsp; &nbsp; &nbsp;

                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "twitter", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"social_networks\"><i class=\"fa fa-twitter  \"></i></a> &nbsp; &nbsp; &nbsp; &nbsp;

                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "pinterest", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"social_networks\"><i class=\"fa fa-pinterest  \"></i></a> &nbsp; &nbsp; &nbsp; &nbsp;

                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "instagram", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"social_networks\"><i class=\"fa fa-instagram  \"></i></a> &nbsp; &nbsp; &nbsp; &nbsp;

            </p>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>

    <div class=\"col-xs-12 col-lg-1\"> </div>




        <div class=\"col-xs-12 col-lg-2 EMAIL_UPDATES\">
            <p class=\"text-left\"> EMAIL UPDATES </p>

            ";
        // line 56
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("feedback"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 57
        echo "    
        </div>

<!--
        <div class=\"col-xs-12 col-lg-2 EMAIL_UPDATES\">
            <p class=\"text-left\"> EMAIL UPDATES </p>


            <input type=\"text\" class=\"form-control footer_form_control\" placeholder=\"Enter your e-mail\">
            <input type=\"text\" class=\"form-control footer_form_control\" placeholder=\"Enter your name\">
            <input type=\"text\" class=\"form-control footer_form_control_text\" placeholder=\"Enter your text\">


            <a href=\"#\" class=\"send_button\">
                &nbsp; SEND &nbsp;
            </a>


        </div>
-->

    <div class=\"col-xs-12 col-lg-1\"> </div>

    <div class=\"col-xs-12 col-lg-2 footer_menu\">

        ";
        // line 82
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("navigation_footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 83
        echo "
    </div>


    <div class=\"col-xs-hidden col-lg-2\"> </div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/themes/photonj/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 83,  160 => 82,  133 => 57,  129 => 56,  117 => 46,  106 => 41,  101 => 39,  96 => 37,  91 => 35,  86 => 32,  82 => 31,  78 => 29,  68 => 25,  64 => 24,  57 => 20,  53 => 19,  46 => 15,  42 => 14,  38 => 12,  34 => 11,  26 => 6,  19 => 1,);
    }
}
/* <div class="col-xs-hidden col-lg-2"> </div>*/
/* */
/*     <div class="col-xs-12 col-lg-2">*/
/* */
/*         <p class="contact_logo">*/
/*             <a href="{{ '/' }}" class="logo_in_footer">*/
/*                 S*/
/*             </a>*/
/*         </p>*/
/* */
/*         {% for contact in home.getContact %}*/
/* */
/*         <p  class="contact">*/
/*             <img src="{{ 'assets/img/phone.jpg'|theme }}">*/
/*             {{ contact.phone_number }}*/
/*         </p>*/
/* */
/*         <p  class="contact">*/
/*             <img src="{{ 'assets/img/e-mail.jpg'|theme }}">*/
/*             {{ contact.email }}*/
/*         </p>*/
/* */
/*         <p  class="contact">*/
/*             <img src="{{ 'assets/img/map.jpg'|theme }}">*/
/*             {{ contact.address }}*/
/*         </p>*/
/* */
/*         {% endfor %}*/
/* */
/* */
/*         {% for social in social.getSocialLink %}*/
/* */
/*             <p  class="contact_social_networks">*/
/* */
/*                 <a href="{{ social.facebook }}" target="_blank" class="social_networks"><i class="fa fa-facebook  "></i></a> &nbsp; &nbsp; &nbsp; &nbsp;*/
/* */
/*                 <a href="{{ social.twitter }}" target="_blank" class="social_networks"><i class="fa fa-twitter  "></i></a> &nbsp; &nbsp; &nbsp; &nbsp;*/
/* */
/*                 <a href="{{ social.pinterest }}" target="_blank" class="social_networks"><i class="fa fa-pinterest  "></i></a> &nbsp; &nbsp; &nbsp; &nbsp;*/
/* */
/*                 <a href="{{ social.instagram }}" target="_blank" class="social_networks"><i class="fa fa-instagram  "></i></a> &nbsp; &nbsp; &nbsp; &nbsp;*/
/* */
/*             </p>*/
/* */
/*         {% endfor %}*/
/*     </div>*/
/* */
/*     <div class="col-xs-12 col-lg-1"> </div>*/
/* */
/* */
/* */
/* */
/*         <div class="col-xs-12 col-lg-2 EMAIL_UPDATES">*/
/*             <p class="text-left"> EMAIL UPDATES </p>*/
/* */
/*             {% component 'feedback' %}*/
/*     */
/*         </div>*/
/* */
/* <!--*/
/*         <div class="col-xs-12 col-lg-2 EMAIL_UPDATES">*/
/*             <p class="text-left"> EMAIL UPDATES </p>*/
/* */
/* */
/*             <input type="text" class="form-control footer_form_control" placeholder="Enter your e-mail">*/
/*             <input type="text" class="form-control footer_form_control" placeholder="Enter your name">*/
/*             <input type="text" class="form-control footer_form_control_text" placeholder="Enter your text">*/
/* */
/* */
/*             <a href="#" class="send_button">*/
/*                 &nbsp; SEND &nbsp;*/
/*             </a>*/
/* */
/* */
/*         </div>*/
/* -->*/
/* */
/*     <div class="col-xs-12 col-lg-1"> </div>*/
/* */
/*     <div class="col-xs-12 col-lg-2 footer_menu">*/
/* */
/*         {% partial "navigation_footer" %}*/
/* */
/*     </div>*/
/* */
/* */
/*     <div class="col-xs-hidden col-lg-2"> </div>*/
