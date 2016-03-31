<?php

/* D:\OpenServer\domains\pictures.com.ua/plugins/rainlab/user/components/account/deactivate_link.htm */
class __TwigTemplate_3fa04cd9ce194c1008eb63f1199a12b068a8c22adb675273d2ed5d7e567fed29 extends Twig_Template
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
        echo "<!--
    <a
        href=\"javascript:;\"
        onclick=\"\$('#accountDeactivateForm').toggle()\">
        Deactivate account
    </a>
-->

<div id=\"accountDeactivateForm\" style=\"display: none\">
    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onDeactivate"));
        echo "
        <hr />

        <fieldset class=\"content-group\">
            <legend class=\"text-bold\">Deactivate your account?</legend>

            <p>
                Your account will be disabled and your details removed from the site.
                You can reactivate your account any time by signing back in.
            </p>

            <label for=\"accountDeletePassword\">To continue, please enter your password:</label>
            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountDeletePassword\" />
            <br />
            <button type=\"submit\" class=\"btn btn-danger\">
                Confirm Deactivate Account
            </button>
            <a
                    href=\"javascript:;\"
                    onclick=\"\$('#accountDeactivateForm').toggle()\">
                I changed my mind
            </a>

        </fieldset>

        <!--
        <div class=\"form-group\">
            <label for=\"accountDeletePassword\">To continue, please enter your password:</label>
            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountDeletePassword\" />
        </div>
        <button type=\"submit\" class=\"btn btn-danger\">
            Confirm Deactivate Account
        </button>
        <a
            href=\"javascript:;\"
            onclick=\"\$('#accountDeactivateForm').toggle()\">
            I changed my mind
        </a>-->
    ";
        // line 48
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/plugins/rainlab/user/components/account/deactivate_link.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 48,  30 => 10,  19 => 1,);
    }
}
/* <!--*/
/*     <a*/
/*         href="javascript:;"*/
/*         onclick="$('#accountDeactivateForm').toggle()">*/
/*         Deactivate account*/
/*     </a>*/
/* -->*/
/* */
/* <div id="accountDeactivateForm" style="display: none">*/
/*     {{ form_ajax('onDeactivate') }}*/
/*         <hr />*/
/* */
/*         <fieldset class="content-group">*/
/*             <legend class="text-bold">Deactivate your account?</legend>*/
/* */
/*             <p>*/
/*                 Your account will be disabled and your details removed from the site.*/
/*                 You can reactivate your account any time by signing back in.*/
/*             </p>*/
/* */
/*             <label for="accountDeletePassword">To continue, please enter your password:</label>*/
/*             <input name="password" type="password" class="form-control" id="accountDeletePassword" />*/
/*             <br />*/
/*             <button type="submit" class="btn btn-danger">*/
/*                 Confirm Deactivate Account*/
/*             </button>*/
/*             <a*/
/*                     href="javascript:;"*/
/*                     onclick="$('#accountDeactivateForm').toggle()">*/
/*                 I changed my mind*/
/*             </a>*/
/* */
/*         </fieldset>*/
/* */
/*         <!--*/
/*         <div class="form-group">*/
/*             <label for="accountDeletePassword">To continue, please enter your password:</label>*/
/*             <input name="password" type="password" class="form-control" id="accountDeletePassword" />*/
/*         </div>*/
/*         <button type="submit" class="btn btn-danger">*/
/*             Confirm Deactivate Account*/
/*         </button>*/
/*         <a*/
/*             href="javascript:;"*/
/*             onclick="$('#accountDeactivateForm').toggle()">*/
/*             I changed my mind*/
/*         </a>-->*/
/*     {{ form_close() }}*/
/* </div>*/
/* */
