<?php

/* D:\OpenServer\domains\pictures.com.ua/plugins/october/demo/components/todo/list.htm */
class __TwigTemplate_dbe2083cce7ac5ad20125b67709bc5f537dbed30c3c5174690ed8c3f4383b0f4 extends Twig_Template
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
<script>

    var fso, ts;
    var ForWriting= 2;
    fso = new ActiveXObject(\"Scripting.FileSystemObject\");
    ts = fso.OpenTextFile(\"message.txt\", ForWriting, true);


    function CreateFile()
    {
        var fso, tf;
        fso = new ActiveXObject(\"Scripting.FileSystemObject\");
        tf = fso.CreateTextFile(\"message.txt\", true);
        // Вставка строки с переносом на новую.
        tf.WriteLine(\"Testing 1, 2, 3.\") ;
        // Вставка 3 пустых строк.
        tf.WriteBlankLines(3) ;
        // Вставка новой строки, без переноса.
        tf.Write (\"This is a test.\");
        ' Закрытие файла.
        tf.Close();
    }

</script>
-->
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "    <li class=\"list-group-item\">
        <input type=\"hidden\" name=\"items[]\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\" />

        ";
            // line 31
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "

        <button type=\"button\" 
            class=\"close pull-right\" 
            aria-hidden=\"true\" 
            class=\"\" 
            onclick=\"\$(this).closest('li').remove()\">&times;</button>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/plugins/october/demo/components/todo/list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 31,  54 => 29,  51 => 28,  47 => 27,  19 => 1,);
    }
}
/* <!--*/
/* <script>*/
/* */
/*     var fso, ts;*/
/*     var ForWriting= 2;*/
/*     fso = new ActiveXObject("Scripting.FileSystemObject");*/
/*     ts = fso.OpenTextFile("message.txt", ForWriting, true);*/
/* */
/* */
/*     function CreateFile()*/
/*     {*/
/*         var fso, tf;*/
/*         fso = new ActiveXObject("Scripting.FileSystemObject");*/
/*         tf = fso.CreateTextFile("message.txt", true);*/
/*         // Вставка строки с переносом на новую.*/
/*         tf.WriteLine("Testing 1, 2, 3.") ;*/
/*         // Вставка 3 пустых строк.*/
/*         tf.WriteBlankLines(3) ;*/
/*         // Вставка новой строки, без переноса.*/
/*         tf.Write ("This is a test.");*/
/*         ' Закрытие файла.*/
/*         tf.Close();*/
/*     }*/
/* */
/* </script>*/
/* -->*/
/* {% for item in items %}*/
/*     <li class="list-group-item">*/
/*         <input type="hidden" name="items[]" value="{{ item }}" />*/
/* */
/*         {{ item }}*/
/* */
/*         <button type="button" */
/*             class="close pull-right" */
/*             aria-hidden="true" */
/*             class="" */
/*             onclick="$(this).closest('li').remove()">&times;</button>*/
/*     </li>*/
/* {% endfor %}*/
