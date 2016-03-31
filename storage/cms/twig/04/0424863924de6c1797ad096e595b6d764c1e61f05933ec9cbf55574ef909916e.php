<?php

/* D:\OpenServer\domains\pictures.com.ua/plugins/jorgeandrade/subscribe/components/subscriber/default.htm */
class __TwigTemplate_9ba153ec2352abdbf1f3d03b2dcf88df746f8b27f51b8964130878e58091b570 extends Twig_Template
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
        echo "<div class=\"card\">

    <div class=\"row NEWSLETTERSIGN-UP\" style=\"margin-right: 0px;  margin-left: 0px; border: 0;\">

        <div class=\"card-content author row NEWSLETTERSIGN-UP\" style=\"margin-right: 0px;  margin-left: 0px; border: 0;\">
            <form name=\"form-subscribe-andradedev\" id=\"form-subscribe-andradedev\" data-request=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onAddSubscriber\" data-request-update=\"'";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::alert': '#result'\">
                <div class=\"col-xs-12 col-lg-3\" style=\"padding-top: 15px;\">
                    <p class=\"NEWSLETTER\"> NEWSLETTER <span class=\"SIGN-UP\"> SIGN-UP </span> </p>
                </div>
                <div class=\"col-xs-12 col-lg-3\"  style=\"padding-top: 8px; outline: none;\">
                    <input type=\"email\" class=\"form-control NEWSLETTER_form_control\" name=\"email\" placeholder=\"Enter your E-mail...\" required>
                    <div/>
                    <input type=\"hidden\" name=\"latitude\" id=\"latitude\">
                    <input type=\"hidden\" name=\"longitude\" id=\"longitude\">
            </form>
        </div>



    </div>

    <div class=\"card-action\" style=\"padding-top: 15px;\">
        <button class=\"btn btn-primary btn-block\" form=\"form-subscribe-andradedev\" id=\"NEWSLETTER_LINK\" style=\"width: 150px;\">SUBSCRIBE</button>
    </div>

    <div id=\"result\"></div>

</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/plugins/jorgeandrade/subscribe/components/subscriber/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
/* <div class="card">*/
/* */
/*     <div class="row NEWSLETTERSIGN-UP" style="margin-right: 0px;  margin-left: 0px; border: 0;">*/
/* */
/*         <div class="card-content author row NEWSLETTERSIGN-UP" style="margin-right: 0px;  margin-left: 0px; border: 0;">*/
/*             <form name="form-subscribe-andradedev" id="form-subscribe-andradedev" data-request="{{ __SELF__ }}::onAddSubscriber" data-request-update="'{{__SELF__}}::alert': '#result'">*/
/*                 <div class="col-xs-12 col-lg-3" style="padding-top: 15px;">*/
/*                     <p class="NEWSLETTER"> NEWSLETTER <span class="SIGN-UP"> SIGN-UP </span> </p>*/
/*                 </div>*/
/*                 <div class="col-xs-12 col-lg-3"  style="padding-top: 8px; outline: none;">*/
/*                     <input type="email" class="form-control NEWSLETTER_form_control" name="email" placeholder="Enter your E-mail..." required>*/
/*                     <div/>*/
/*                     <input type="hidden" name="latitude" id="latitude">*/
/*                     <input type="hidden" name="longitude" id="longitude">*/
/*             </form>*/
/*         </div>*/
/* */
/* */
/* */
/*     </div>*/
/* */
/*     <div class="card-action" style="padding-top: 15px;">*/
/*         <button class="btn btn-primary btn-block" form="form-subscribe-andradedev" id="NEWSLETTER_LINK" style="width: 150px;">SUBSCRIBE</button>*/
/*     </div>*/
/* */
/*     <div id="result"></div>*/
/* */
/* </div>*/
