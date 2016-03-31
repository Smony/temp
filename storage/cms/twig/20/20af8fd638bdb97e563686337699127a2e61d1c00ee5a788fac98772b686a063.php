<?php

/* D:\OpenServer\domains\pictures.com.ua/plugins/rainlab/user/components/account/popup_register.htm */
class __TwigTemplate_a1a31157bfe52c9f3282fce7f5f92597f17cdfd128c5b78bab948e60a1807642 extends Twig_Template
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
        echo "<!-- Registration form -->
<div id=\"modal-registration\" class=\"modal fade\">
    <div class=\"modal-dialog\" style=\"width: 270px;\">
        <div class=\"modal-content login-form\">

<form
        data-request=\"onRegister\">

    <div class=\"panel panel-body login-form\">
        <div class=\"text-center\">
            <div class=\"icon-object border-success text-success\"><i class=\"icon-plus3\"></i></div>
            <h5 class=\"content-group\">Create account <small class=\"display-block\">All fields are required</small></h5>
        </div>

        <div class=\"content-divider text-muted form-group\"><span>Your credentials</span></div>

        <div class=\"form-group has-feedback has-feedback-left\">
            <input
                    name=\"name\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerName\"
                    placeholder=\"Enter your full name\" />
            <div class=\"form-control-feedback\">
                <i class=\"icon-user-check text-muted\"></i>
            </div>
        </div>

        <div class=\"content-divider text-muted form-group\"><span>Your privacy</span></div>

        <div class=\"form-group has-feedback has-feedback-left\">
            <input
                    name=\"email\"
                    type=\"email\"
                    class=\"form-control\"
                    id=\"registerEmail\"
                    placeholder=\"Enter your email\" />
            <div class=\"form-control-feedback\">
                <i class=\"icon-mention text-muted\"></i>
            </div>
        </div>

        <div class=\"content-divider text-muted form-group\"><span>Your credentials</span></div>

        <div class=\"form-group has-feedback has-feedback-left\">
            <input name=\"password\"
                   type=\"password\"
                   class=\"form-control\"
                   id=\"registerPassword\"
                   placeholder=\"Choose a password\" />
            <div class=\"form-control-feedback\">
                <i class=\"icon-user-lock text-muted\"></i>
            </div>
        </div>

        <div class=\"content-divider text-muted form-group\"><span>Select a plan below</span></div>

        <div class=\"bootstrap-select bs-select-hidden\">

            <select name=\"a_plan\" class=\"form-control bootstrap-select bs-select-hidden\" data-width=\"100%\">
                <option value=\"1\">FREE</option>
                <option value=\"2\">BASIC</option>
                <option value=\"3\">IMAGE</option>
                <option value=\"4\">CUSTOM</option>
            </select>

         </div>
        <br />



        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn bg-blue btn-block\">Register <i class=\"icon-circle-right2 position-right\"></i></button>
            <button type=\"button\" class=\"btn btn-default btn-block\" data-dismiss=\"modal\">Cancel</button>
        </div>

        ";
        // line 77
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::termsConditions_cookiePolicy")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 78
        echo "    </div>

    <!--
        <div class=\"form-group\">
            <label for=\"registerName\">Full Name</label>
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Enter your full name\" />
        </div>

        <div class=\"form-group\">
            <label for=\"registerEmail\">Email</label>
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Enter your email\" />
        </div>

        <div class=\"form-group\">
            <label for=\"registerPassword\">Password</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Choose a password\" />
        </div>

        <button type=\"submit\" class=\"btn btn-default\">Register</button>
    -->
</form>

        </div>
    </div>
</div>
<!-- /registration form -->
";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/plugins/rainlab/user/components/account/popup_register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 78,  97 => 77,  19 => 1,);
    }
}
/* <!-- Registration form -->*/
/* <div id="modal-registration" class="modal fade">*/
/*     <div class="modal-dialog" style="width: 270px;">*/
/*         <div class="modal-content login-form">*/
/* */
/* <form*/
/*         data-request="onRegister">*/
/* */
/*     <div class="panel panel-body login-form">*/
/*         <div class="text-center">*/
/*             <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>*/
/*             <h5 class="content-group">Create account <small class="display-block">All fields are required</small></h5>*/
/*         </div>*/
/* */
/*         <div class="content-divider text-muted form-group"><span>Your credentials</span></div>*/
/* */
/*         <div class="form-group has-feedback has-feedback-left">*/
/*             <input*/
/*                     name="name"*/
/*                     type="text"*/
/*                     class="form-control"*/
/*                     id="registerName"*/
/*                     placeholder="Enter your full name" />*/
/*             <div class="form-control-feedback">*/
/*                 <i class="icon-user-check text-muted"></i>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="content-divider text-muted form-group"><span>Your privacy</span></div>*/
/* */
/*         <div class="form-group has-feedback has-feedback-left">*/
/*             <input*/
/*                     name="email"*/
/*                     type="email"*/
/*                     class="form-control"*/
/*                     id="registerEmail"*/
/*                     placeholder="Enter your email" />*/
/*             <div class="form-control-feedback">*/
/*                 <i class="icon-mention text-muted"></i>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="content-divider text-muted form-group"><span>Your credentials</span></div>*/
/* */
/*         <div class="form-group has-feedback has-feedback-left">*/
/*             <input name="password"*/
/*                    type="password"*/
/*                    class="form-control"*/
/*                    id="registerPassword"*/
/*                    placeholder="Choose a password" />*/
/*             <div class="form-control-feedback">*/
/*                 <i class="icon-user-lock text-muted"></i>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="content-divider text-muted form-group"><span>Select a plan below</span></div>*/
/* */
/*         <div class="bootstrap-select bs-select-hidden">*/
/* */
/*             <select name="a_plan" class="form-control bootstrap-select bs-select-hidden" data-width="100%">*/
/*                 <option value="1">FREE</option>*/
/*                 <option value="2">BASIC</option>*/
/*                 <option value="3">IMAGE</option>*/
/*                 <option value="4">CUSTOM</option>*/
/*             </select>*/
/* */
/*          </div>*/
/*         <br />*/
/* */
/* */
/* */
/*         <div class="form-group">*/
/*             <button type="submit" class="btn bg-blue btn-block">Register <i class="icon-circle-right2 position-right"></i></button>*/
/*             <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancel</button>*/
/*         </div>*/
/* */
/*         {% partial __SELF__ ~ '::termsConditions_cookiePolicy' %}*/
/*     </div>*/
/* */
/*     <!--*/
/*         <div class="form-group">*/
/*             <label for="registerName">Full Name</label>*/
/*             <input*/
/*                 name="name"*/
/*                 type="text"*/
/*                 class="form-control"*/
/*                 id="registerName"*/
/*                 placeholder="Enter your full name" />*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="registerEmail">Email</label>*/
/*             <input*/
/*                 name="email"*/
/*                 type="email"*/
/*                 class="form-control"*/
/*                 id="registerEmail"*/
/*                 placeholder="Enter your email" />*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="registerPassword">Password</label>*/
/*             <input*/
/*                 name="password"*/
/*                 type="password"*/
/*                 class="form-control"*/
/*                 id="registerPassword"*/
/*                 placeholder="Choose a password" />*/
/*         </div>*/
/* */
/*         <button type="submit" class="btn btn-default">Register</button>*/
/*     -->*/
/* </form>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- /registration form -->*/
/* */
