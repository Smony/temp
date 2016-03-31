<?php

/* D:\OpenServer\domains\pictures.com.ua/plugins/smony/googlemap/components/map/default.htm */
class __TwigTemplate_0a2f0842cf31c73619763e431a39be464e267c915a36755ab60a4d12efea4eee extends Twig_Template
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
        echo "<!-- Map -->

<p>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "property", array(0 => "one"), "method"), "html", null, true);
        echo "</p>
<p>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "property", array(0 => "two"), "method"), "html", null, true);
        echo "</p>
<p>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "property", array(0 => "the"), "method"), "html", null, true);
        echo "</p>



<script>

    var data = eval(\"(\" + response + \")\");
    //теперь можно использовать объект data
    alert(data.qweqwe + \"n\" + data.asdasd);

</script>


";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/plugins/smony/googlemap/components/map/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!-- Map -->*/
/* */
/* <p>{{__SELF__.property('one')}}</p>*/
/* <p>{{__SELF__.property('two')}}</p>*/
/* <p>{{__SELF__.property('the')}}</p>*/
/* */
/* */
/* */
/* <script>*/
/* */
/*     var data = eval("(" + response + ")");*/
/*     //теперь можно использовать объект data*/
/*     alert(data.qweqwe + "n" + data.asdasd);*/
/* */
/* </script>*/
/* */
/* */
/* */
