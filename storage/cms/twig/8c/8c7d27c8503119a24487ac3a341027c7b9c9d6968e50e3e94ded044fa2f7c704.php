<?php

/* D:\OpenServer\domains\pictures.com.ua/plugins/ebussola/feedback/components/feedback/default.htm */
class __TwigTemplate_25965879addb25729064f9179f49465995bab4606a9e99955bc794cfa4df590d extends Twig_Template
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
        // line 5
        echo "<form onsubmit=\"ebussolaFeedbackFormSubmit(this, event);\" method=\"POST\">

    <script>
        function ebussolaFeedbackFormSubmit(el, event) {
            event.preventDefault();
            \$(el).request('";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSend', {
                success: function(data) {
                    alert(data.result);
                },
                error: function(data) {
                    alert(data.responseJSON.result);
                }
            });
        }
    </script>

    <div class=\"form-group\">
        <label for=\"feedback-name\">Name</label>
        <input type=\"text\" class=\"form-control\" name=\"feedback[name]\" id=\"feedback-name\" placeholder=\"Name\">
    </div>

    <div class=\"form-group\">
        <label for=\"feedback-email\">Email</label>
        <input type=\"email\" class=\"form-control\" name=\"feedback[email]\" id=\"feedback-email\" placeholder=\"Email\" />
    </div>

    <div class=\"form-group\">
        <label for=\"feedback-message\">Message</label>
        <textarea name=\"feedback[message]\" class=\"form-control\" id=\"feedback-message\"></textarea>
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Submit</button>

</form>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/plugins/ebussola/feedback/components/feedback/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 10,  19 => 5,);
    }
}
/* {#*/
/*     We recommend to keep using the same names for the basic fields.*/
/*     However, you can add as much fields as you want.*/
/* #}*/
/* <form onsubmit="ebussolaFeedbackFormSubmit(this, event);" method="POST">*/
/* */
/*     <script>*/
/*         function ebussolaFeedbackFormSubmit(el, event) {*/
/*             event.preventDefault();*/
/*             $(el).request('{{ __SELF__ }}::onSend', {*/
/*                 success: function(data) {*/
/*                     alert(data.result);*/
/*                 },*/
/*                 error: function(data) {*/
/*                     alert(data.responseJSON.result);*/
/*                 }*/
/*             });*/
/*         }*/
/*     </script>*/
/* */
/*     <div class="form-group">*/
/*         <label for="feedback-name">Name</label>*/
/*         <input type="text" class="form-control" name="feedback[name]" id="feedback-name" placeholder="Name">*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         <label for="feedback-email">Email</label>*/
/*         <input type="email" class="form-control" name="feedback[email]" id="feedback-email" placeholder="Email" />*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         <label for="feedback-message">Message</label>*/
/*         <textarea name="feedback[message]" class="form-control" id="feedback-message"></textarea>*/
/*     </div>*/
/* */
/*     <button type="submit" class="btn btn-default">Submit</button>*/
/* */
/* </form>*/
