<?php

/* D:\OpenServer\domains\pictures.com.ua/plugins/october/demo/components/todo/default.htm */
class __TwigTemplate_150749c6a343dce76aa566c0e7a0bb220cc2fa6553cbb4677af0e65038096fdf extends Twig_Template
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
        echo "<form
    data-request=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onAddItem\"
    data-request-update=\"'";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::list': '#result'\"
    data-request-success=\"\$('#input-item').val('')\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Commit</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"input-group\">
                <input type=\"text\" id=\"input-item\" class=\"form-control\" value=\"\" name=\"newItem\" placeholder=\"Create a commit to the downloaded files?\">
                <span class=\"input-group-btn\">
                    <button type=\"submit\" class=\"btn btn btn-primary\">Commit</button>
                </span>
            </div>
        </div>

        <ul class=\"list-group\" id=\"result\">
            <li>&nbsp;&nbsp;&nbsp;";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "message_upload", array()), "html", null, true);
        echo "</li>
        </ul>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/plugins/october/demo/components/todo/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 19,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <form*/
/*     data-request="{{ __SELF__ }}::onAddItem"*/
/*     data-request-update="'{{ __SELF__ }}::list': '#result'"*/
/*     data-request-success="$('#input-item').val('')">*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">Commit</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <div class="input-group">*/
/*                 <input type="text" id="input-item" class="form-control" value="" name="newItem" placeholder="Create a commit to the downloaded files?">*/
/*                 <span class="input-group-btn">*/
/*                     <button type="submit" class="btn btn btn-primary">Commit</button>*/
/*                 </span>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <ul class="list-group" id="result">*/
/*             <li>&nbsp;&nbsp;&nbsp;{{ user.message_upload }}</li>*/
/*         </ul>*/
/*     </div>*/
/* </form>*/
/* */
