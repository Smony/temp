<?php

/* D:\OpenServer\domains\pictures.com.ua/themes/photonj/pages/s.htm */
class __TwigTemplate_49fa368fd3e259185e0f51baf8e9046218a5696730d8eb4aeeb20558a2305981 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("carousel"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("work"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "          <!--INCLUDE WORK ITEMS -->

";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("item"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "          <!--INCLUDE IF YOU ITEMS -->

";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("homeCoffee"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "    <!-- INCLUDE COFFEE ITEMS -->

";
        // line 9
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("plan.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 10
        echo "
<!-- Registration form -->
<div id=\"modal-registration2\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content login-form\">

            <!-- Form -->
            <form class=\"modal-body\" action=\"index.html\">
                <div class=\"text-center\">
                    <div class=\"icon-object border-success text-success\"><i class=\"icon-plus3\"></i></div>
                    <h5 class=\"content-group\">Create account <small class=\"display-block\">All fields are required</small></h5>
                </div>

                <div class=\"content-divider text-muted form-group\"><span>Your credentials</span></div>

                <div class=\"form-group has-feedback has-feedback-left\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Eugene\">
                    <div class=\"form-control-feedback\">
                        <i class=\"icon-user-check text-muted\"></i>
                    </div>
                </div>

                <div class=\"form-group has-feedback has-feedback-left\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Create password\">
                    <div class=\"form-control-feedback\">
                        <i class=\"icon-user-lock text-muted\"></i>
                    </div>
                </div>

                <div class=\"content-divider text-muted form-group\"><span>Your privacy</span></div>

                <div class=\"form-group has-feedback has-feedback-left\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Your email\">
                    <div class=\"form-control-feedback\">
                        <i class=\"icon-mention text-muted\"></i>
                    </div>
                </div>

                <div class=\"form-group has-feedback has-feedback-left\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Repeat email\">
                    <div class=\"form-control-feedback\">
                        <i class=\"icon-mention text-muted\"></i>
                    </div>
                </div>

                <div class=\"content-divider text-muted form-group\"><span>Additions</span></div>

                <div class=\"form-group\">
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" class=\"styled\" checked=\"checked\">
                            Send me <a href=\"#\">test account settings</a>
                        </label>
                    </div>

                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" class=\"styled\" checked=\"checked\">
                            Subscribe to monthly newsletter
                        </label>
                    </div>

                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" class=\"styled\">
                            Accept <a href=\"#\">terms of service</a>
                        </label>
                    </div>
                </div>

                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn bg-blue btn-block\">Register <i class=\"icon-circle-right2 position-right\"></i></button>
                    <button type=\"button\" class=\"btn btn-default btn-block\" data-dismiss=\"modal\">Cancel</button>
                </div>

                <span class=\"help-block text-center no-margin\">By continuing, you're confirming that you've read our <a href=\"#\">Terms &amp; Conditions</a> and <a href=\"#\">Cookie Policy</a></span>
            </form>
            <!-- /form -->

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/themes/photonj/pages/s.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  40 => 7,  33 => 5,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% component 'carousel' %}*/
/* */
/* {% component 'work' %}          <!--INCLUDE WORK ITEMS -->*/
/* */
/* {% component 'item' %}          <!--INCLUDE IF YOU ITEMS -->*/
/* */
/* {% component 'homeCoffee' %}    <!-- INCLUDE COFFEE ITEMS -->*/
/* */
/* {% content "plan.htm" %}*/
/* */
/* <!-- Registration form -->*/
/* <div id="modal-registration2" class="modal fade">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content login-form">*/
/* */
/*             <!-- Form -->*/
/*             <form class="modal-body" action="index.html">*/
/*                 <div class="text-center">*/
/*                     <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>*/
/*                     <h5 class="content-group">Create account <small class="display-block">All fields are required</small></h5>*/
/*                 </div>*/
/* */
/*                 <div class="content-divider text-muted form-group"><span>Your credentials</span></div>*/
/* */
/*                 <div class="form-group has-feedback has-feedback-left">*/
/*                     <input type="text" class="form-control" placeholder="Eugene">*/
/*                     <div class="form-control-feedback">*/
/*                         <i class="icon-user-check text-muted"></i>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group has-feedback has-feedback-left">*/
/*                     <input type="text" class="form-control" placeholder="Create password">*/
/*                     <div class="form-control-feedback">*/
/*                         <i class="icon-user-lock text-muted"></i>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="content-divider text-muted form-group"><span>Your privacy</span></div>*/
/* */
/*                 <div class="form-group has-feedback has-feedback-left">*/
/*                     <input type="text" class="form-control" placeholder="Your email">*/
/*                     <div class="form-control-feedback">*/
/*                         <i class="icon-mention text-muted"></i>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group has-feedback has-feedback-left">*/
/*                     <input type="text" class="form-control" placeholder="Repeat email">*/
/*                     <div class="form-control-feedback">*/
/*                         <i class="icon-mention text-muted"></i>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="content-divider text-muted form-group"><span>Additions</span></div>*/
/* */
/*                 <div class="form-group">*/
/*                     <div class="checkbox">*/
/*                         <label>*/
/*                             <input type="checkbox" class="styled" checked="checked">*/
/*                             Send me <a href="#">test account settings</a>*/
/*                         </label>*/
/*                     </div>*/
/* */
/*                     <div class="checkbox">*/
/*                         <label>*/
/*                             <input type="checkbox" class="styled" checked="checked">*/
/*                             Subscribe to monthly newsletter*/
/*                         </label>*/
/*                     </div>*/
/* */
/*                     <div class="checkbox">*/
/*                         <label>*/
/*                             <input type="checkbox" class="styled">*/
/*                             Accept <a href="#">terms of service</a>*/
/*                         </label>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <button type="submit" class="btn bg-blue btn-block">Register <i class="icon-circle-right2 position-right"></i></button>*/
/*                     <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancel</button>*/
/*                 </div>*/
/* */
/*                 <span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>*/
/*             </form>*/
/*             <!-- /form -->*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
