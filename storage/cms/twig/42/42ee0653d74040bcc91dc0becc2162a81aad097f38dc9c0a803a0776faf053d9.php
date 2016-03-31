<?php

/* D:\OpenServer\domains\pictures.com.ua/plugins/mohsin/carousel/components/carousel/default.htm */
class __TwigTemplate_33f38db6513200d6af70ee8c24dd86f689ee4b549c457880ea344492c05faec4 extends Twig_Template
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
        echo "<div class=\"row\">

    <div id=\"carousel-";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "id", array()), "html", null, true);
        echo "\" class=\"carousel slide\" data-ride=\"carousel\" style=\"width: 80%; margin: 0 auto;\">
      ";
        // line 4
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "images", array())) > 1)) {
            // line 5
            echo "      <ol class=\"carousel-indicators\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "images", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["image"]) {
                // line 7
                echo "        <li data-target=\"#carousel-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "id", array()), "html", null, true);
                echo "\" data-slide-to=\"";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " class=\"active\"";
                }
                echo "></li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "      </ol>
      ";
        }
        // line 11
        echo "
      ";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "images", array())) > 0)) {
            // line 13
            echo "      <div class=\"carousel-inner\" role=\"listbox\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "images", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["image"]) {
                // line 15
                echo "        <div class=\"item";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " active";
                }
                echo "\">
          <img src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                echo "\">
          <div class=\"carousel-caption\">

            ";
                // line 19
                if ($this->getAttribute($context["image"], "title", array())) {
                    echo "<h3>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                    echo "</h3>";
                }
                // line 20
                echo "
            ";
                // line 21
                if ($this->getAttribute($context["image"], "description", array())) {
                    echo "<p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                    echo "</p>";
                }
                // line 22
                echo "
          </div>
        </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "      </div>
      ";
        }
        // line 28
        echo "
      ";
        // line 29
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "images", array())) > 1)) {
            // line 30
            echo "      <a class=\"left carousel-control\" href=\"#carousel-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "id", array()), "html", null, true);
            echo "\" role=\"button\" data-slide=\"prev\">
        <span class=\"icon icon-prev\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
      </a>
      <a class=\"right carousel-control\" href=\"#carousel-";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : null), "id", array()), "html", null, true);
            echo "\" role=\"button\" data-slide=\"next\">
        <span class=\"icon icon-next\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
      </a>
      ";
        }
        // line 39
        echo "    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/plugins/mohsin/carousel/components/carousel/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 39,  165 => 34,  157 => 30,  155 => 29,  152 => 28,  148 => 26,  131 => 22,  125 => 21,  122 => 20,  116 => 19,  108 => 16,  101 => 15,  84 => 14,  81 => 13,  79 => 12,  76 => 11,  72 => 9,  49 => 7,  32 => 6,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="row">*/
/* */
/*     <div id="carousel-{{ carousel.id }}" class="carousel slide" data-ride="carousel" style="width: 80%; margin: 0 auto;">*/
/*       {% if carousel.images|length > 1 %}*/
/*       <ol class="carousel-indicators">*/
/*         {% for i, image in carousel.images %}*/
/*         <li data-target="#carousel-{{ carousel.id }}" data-slide-to="{{ loop.index - 1 }}"{% if loop.first %} class="active"{% endif %}></li>*/
/*         {% endfor %}*/
/*       </ol>*/
/*       {% endif %}*/
/* */
/*       {% if carousel.images|length > 0 %}*/
/*       <div class="carousel-inner" role="listbox">*/
/*         {% for i, image in carousel.images %}*/
/*         <div class="item{% if loop.first %} active{% endif %}">*/
/*           <img src="{{ image.path }}" alt="{{ image.title }}">*/
/*           <div class="carousel-caption">*/
/* */
/*             {% if image.title %}<h3>{{ image.title }}</h3>{% endif %}*/
/* */
/*             {% if image.description %}<p>{{ image.description }}</p>{% endif %}*/
/* */
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       {% endif %}*/
/* */
/*       {% if carousel.images|length > 1 %}*/
/*       <a class="left carousel-control" href="#carousel-{{ carousel.id }}" role="button" data-slide="prev">*/
/*         <span class="icon icon-prev" aria-hidden="true"></span>*/
/*         <span class="sr-only">Previous</span>*/
/*       </a>*/
/*       <a class="right carousel-control" href="#carousel-{{ carousel.id }}" role="button" data-slide="next">*/
/*         <span class="icon icon-next" aria-hidden="true"></span>*/
/*         <span class="sr-only">Next</span>*/
/*       </a>*/
/*       {% endif %}*/
/*     </div>*/
/* */
/* </div>*/
