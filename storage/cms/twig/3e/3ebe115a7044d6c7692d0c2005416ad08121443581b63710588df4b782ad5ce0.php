<?php

/* D:\OpenServer\domains\pictures.com.ua/themes/photonj/pages/404.htm */
class __TwigTemplate_e81074d5f11c4749cca94faf520a6f75f43f35b66c22c2432f0897b367ce61c5 extends Twig_Template
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
        echo "<div class=\"container\">
        <div class=\"row\" style=\"margin-left: 0px; margin-right: 0px; background-color: #eeeeee;\">
\t\t\t<img class=\"bckg_image\" src=\"";
        // line 3
        echo $this->env->getExtension('CMS')->themeFilter("assets/404/img/bg_img.png");
        echo "\" alt=\" \">
\t\t</div>
\t\t
\t\t<div class=\"row\" style=\"margin-left: 0px; margin-right: 0px;\">
\t\t\t<br>
\t\t\t<p class=\"NOT_FOUND\"><span class=\"PAGE\">PAGE</span> NOT FOUND</p>
\t\t\t<p class=\"Sorry\">Sorry, the page you requested could not be found.</p>
\t\t\t<p class=\"error_code\">404</p>
\t\t</div>
\t\t
\t\t<div class=\"row\" style=\"margin-left: 0px; margin-right: 0px;\">
\t\t\t<p>
\t\t\t\t<a href=\"";
        // line 15
        echo "/";
        echo "\" class=\"btn_bar\">HOMEPAGE</a>
\t\t\t</p>
\t\t</div>
\t<br />
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/themes/photonj/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  23 => 3,  19 => 1,);
    }
}
/* <div class="container">*/
/*         <div class="row" style="margin-left: 0px; margin-right: 0px; background-color: #eeeeee;">*/
/* 			<img class="bckg_image" src="{{ 'assets/404/img/bg_img.png'|theme }}" alt=" ">*/
/* 		</div>*/
/* 		*/
/* 		<div class="row" style="margin-left: 0px; margin-right: 0px;">*/
/* 			<br>*/
/* 			<p class="NOT_FOUND"><span class="PAGE">PAGE</span> NOT FOUND</p>*/
/* 			<p class="Sorry">Sorry, the page you requested could not be found.</p>*/
/* 			<p class="error_code">404</p>*/
/* 		</div>*/
/* 		*/
/* 		<div class="row" style="margin-left: 0px; margin-right: 0px;">*/
/* 			<p>*/
/* 				<a href="{{ '/' }}" class="btn_bar">HOMEPAGE</a>*/
/* 			</p>*/
/* 		</div>*/
/* 	<br />*/
/* </div>*/
