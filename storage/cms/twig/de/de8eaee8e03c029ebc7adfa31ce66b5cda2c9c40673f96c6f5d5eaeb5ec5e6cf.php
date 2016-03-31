<?php

/* D:\OpenServer\domains\pictures.com.ua/plugins/rainlab/user/components/account/update.htm */
class __TwigTemplate_387e36cf67d2f8a40378c5766c25a50d9a3fc349d78f8150d397c5b211982dd7 extends Twig_Template
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
        echo "<div id=\"accountUpdateForm\" style=\"display: none\">

";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onUpdate", array("model" => (isset($context["user"]) ? $context["user"] : null))));
        echo "

    <!--
        <div class=\"form-group\">
            <label for=\"accountName\">Full Name</label>
            <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 8
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "name"));
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"accountEmail\">Email</label>
            <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 13
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "email"));
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"accountPassword\">New Password</label>
            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
        </div>

        <div class=\"form-group\">
            <label for=\"accountPasswordConfirm\">Confirm New Password</label>
            <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
        </div>
    -->

    <fieldset class=\"content-group\">
        <legend class=\"text-bold\">Login</legend>

        <div class=\"form-group\">
            <label class=\"control-label col-lg-2\">Full Name</label>
            <div class=\"col-lg-10\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
                    <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 35
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "name"));
        echo "\">
                </div>
            </div>
        </div>


        <div class=\"form-group\">
            <label class=\"control-label col-lg-2\">Email </label>
            <div class=\"col-lg-10\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">@</span>
                    <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 46
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "email"));
        echo "\">
                </div>
            </div>
        </div>

    </fieldset>

    <fieldset class=\"content-group\">
        <legend class=\"text-bold\">Password</legend>


        <div class=\"form-group\">
            <label class=\"control-label col-lg-2\">New Password</label>
            <div class=\"col-lg-10\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                    <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label col-lg-2\">Confirm New Password</label>
            <div class=\"col-lg-10\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                    <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
                </div>
            </div>
        </div>

    </fieldset>

    <button type=\"submit\" class=\"btn btn-default\">Save</button>

";
        // line 81
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/plugins/rainlab/user/components/account/update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 81,  78 => 46,  64 => 35,  39 => 13,  31 => 8,  23 => 3,  19 => 1,);
    }
}
/* <div id="accountUpdateForm" style="display: none">*/
/* */
/* {{ form_ajax('onUpdate', { model: user }) }}*/
/* */
/*     <!--*/
/*         <div class="form-group">*/
/*             <label for="accountName">Full Name</label>*/
/*             <input name="name" type="text" class="form-control" id="accountName" value="{{ form_value('name') }}">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="accountEmail">Email</label>*/
/*             <input name="email" type="email" class="form-control" id="accountEmail" value="{{ form_value('email') }}">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="accountPassword">New Password</label>*/
/*             <input name="password" type="password" class="form-control" id="accountPassword">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="accountPasswordConfirm">Confirm New Password</label>*/
/*             <input name="password_confirmation" type="password" class="form-control" id="accountPasswordConfirm">*/
/*         </div>*/
/*     -->*/
/* */
/*     <fieldset class="content-group">*/
/*         <legend class="text-bold">Login</legend>*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-lg-2">Full Name</label>*/
/*             <div class="col-lg-10">*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon"><i class="icon-user"></i></span>*/
/*                     <input name="name" type="text" class="form-control" id="accountName" value="{{ form_value('name') }}">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-lg-2">Email </label>*/
/*             <div class="col-lg-10">*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon">@</span>*/
/*                     <input name="email" type="email" class="form-control" id="accountEmail" value="{{ form_value('email') }}">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </fieldset>*/
/* */
/*     <fieldset class="content-group">*/
/*         <legend class="text-bold">Password</legend>*/
/* */
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-lg-2">New Password</label>*/
/*             <div class="col-lg-10">*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>*/
/*                     <input name="password" type="password" class="form-control" id="accountPassword">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-lg-2">Confirm New Password</label>*/
/*             <div class="col-lg-10">*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>*/
/*                     <input name="password_confirmation" type="password" class="form-control" id="accountPasswordConfirm">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </fieldset>*/
/* */
/*     <button type="submit" class="btn btn-default">Save</button>*/
/* */
/* {{ form_close() }}*/
/* */
/* </div>*/
