<?php

/* IndexBundle:Default:index.html.twig */
class __TwigTemplate_e7e73f944f43492bdd18bc1bb6cc5d804756c35945ec3cf12c44e537dc72c84d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'estilos' => array($this, 'block_estilos'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'javascripts1' => array($this, 'block_javascripts1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe9bffdec2c30f28f8e8661d2e581ea3d253575f4c512cba7f20a165c6dcf04e = $this->env->getExtension("native_profiler");
        $__internal_fe9bffdec2c30f28f8e8661d2e581ea3d253575f4c512cba7f20a165c6dcf04e->enter($__internal_fe9bffdec2c30f28f8e8661d2e581ea3d253575f4c512cba7f20a165c6dcf04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<!-- 
.hidden-xs
Si aplicamos esta clase CSS a un DIV no aparecerá en la versión móvil pero si desde un ordenador o tablet.

.visible-xs
Si aplicamos esta clase CSS a un DIV sí aparecerá en la versión móvil pero no desde una dispositivo con la pantalla mayor.
-->
  <head>
  <style>
\t\t  .btnJ{
\t\t   -webkit-border-radius: 35;
\t\t  -moz-border-radius: 35;
\t\t  border-radius: 35px;
\t\t  color: #ffffff;
\t\t  font-size: 20px;
\t\t  background: #00BCD4;
\t\t  padding: 10px 20px 10px 20px;
\t\t  border: solid #1f628d 0px;
\t\t  text-decoration: none;
\t\t}


\t\t.btnJ:hover {
\t\t  text-decoration: none;
\t\t}

\t\t.navbar-nav.nav-justified > li{
    float:none;
}


  </style>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- menu redondo-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 39
        $this->displayBlock('estilos', $context, $blocks);
        // line 46
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "\t\t
\t<!-- fin menu redondo -->
    <title>Pet’s, adoptalo y no compres</title>

    <meta name=\"description\" content=\"Pets page\">
    <meta name=\"author\" content=\"Pets\">


    

  </head>
  <body>
  \t<!-- menu redondo-->
  \t<div class=\"component\">
\t\t\t\t<!-- Start Nav Structure -->
\t\t\t\t<button class=\"cn-button\" id=\"cn-button\">+</button>
\t\t\t\t<div class=\"cn-wrapper\" id=\"cn-wrapper\" style=\"margin-bottom: 10px\"> <!-- mover posicion de los botones del menu -->
\t\t\t\t    <ul>
\t\t\t\t      <li><a href=\"#\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/camada.png\" width=\"45px\"></a></li>
\t\t\t\t      <li><a href=\"#\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/adoptar.png\" width=\"45px\"></span></a></li>
\t\t\t\t      <li><a href=\"#\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/home.png\" width=\"40px\"></a></li>
\t\t\t\t      <li><a href=\"#\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/buscar.png\" width=\"30px\"></a></li>
\t\t\t\t      <li><a href=\"#\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/donar.png\" width=\"45px\"></a></li>



\t\t\t\t     </ul>
\t\t\t\t</div>
\t\t\t\t<div id=\"cn-overlay\" class=\"cn-overlay\"></div>
\t\t\t\t<!-- End Nav Structure -->
\t</div>
\t<!-- fin menu redondo-->
    <div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" style=\"height:95px;\">
\t\t\t\t<div class=\"navbar-header\" >
\t\t\t\t\t<a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("ani");
        echo "\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" style=\"border:0;\">
\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/publicar.png\" class=\"visible-xs\">
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"navbar-brand container-fluid\" style=\"height:100px\" href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("index_homepage");
        echo "\"><img src=\"/my_project/web/bundles/index/imgs/logo.png\" width=\"160px\"> </a>
\t\t\t\t</div>
\t\t\t\t<ul class=\"nav navbar-nav nav-justified hidden-xs\" role=\"menu\">
 \t\t\t\t\t<li>
\t\t\t\t\t\t\t<!--<button type=\"submit\" class=\"btn btn-default hidden-xs\"  style=\"border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-32px;\">
\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/publicar.png\" onClick=\"location.href=''\"/>&nbsp;&nbsp;&nbsp;Publicar anuncio
\t\t\t\t\t\t\t</button>-->
\t\t\t\t\t\t\t<button class=\"btn btn-default hidden-xs\"  style=\"border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-130px;\" onClick=\"location.href='";
        // line 100
        echo $this->env->getExtension('routing')->getPath("ani");
        echo "'\" value=\"publicar anuncio\">
\t\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/publicar.png\">&nbsp;&nbsp;&nbsp; Publicar anuncio</button>
\t\t\t\t<div class=\"navbar-right container-fluid \" >
\t\t\t\t\t\t<div style=\"background-color:white; padding:5px; margin-right:13px; margin-top:-90px; border-radius: 15px;\">
            ";
        // line 104
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 105
            echo "                    Estás logueado como: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <br><center>
                <a style=\"height:-150px;\" href=\"";
            // line 106
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Salir", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a></center>
            ";
        } else {
            // line 110
            echo "                <a style=\"height:-150px;\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 112
        echo "            
        </div>

        ";
        // line 115
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 116
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 117
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 118
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 119
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "        ";
        }
        // line 124
        echo "        </div>\t\t
 \t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!--
\t\t\t\t<form class=\"navbar-right\" style=\"margin-top:10px;\">
\t\t\t\t\t<a href=\"publicar.html\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default hidden-xs\" style=\"border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t-webkit-border-radius: 27px 27px 27px 27px; margin-right:390px;\">
\t\t\t\t\t\t\t<img src=\"imgs/publicar.png\"/>&nbsp;&nbsp;&nbsp;Publicar anuncio
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t</a>
\t\t\t\t</form>-->
\t\t\t\t<div class=\"navbar-right container-fluid\" style=\"margin-top:20px;\">
\t\t<input type=\"button\" class=\"btnJ\" value=\"Iniciar sesión\" onclick=\"location.href='";
        // line 138
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "';\"/><div class=\"visible-xs\"><br></div>
\t\t<input type=\"button\" class=\"btnJ\" value=\"Registrarse\" onclick=\"location.href='";
        // line 139
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "';\"/>
\t\t
\t\t</div>
\t\t\t</nav>
\t\t\t<center>
\t\t\t<div style=\"margin-top: 170px; margin-bottom: 50px; width:100%;\">
\t\t\t\t";
        // line 145
        $this->displayBlock('body', $context, $blocks);
        // line 147
        echo "\t\t\t</div>
\t\t\t</center>
\t\t</div>
\t</div>
\t
</div>
<footer id=\"footer\" style=\"background-color: #00BCD4;text-align: right; line-height: 40px;\">
      <div class=\"container\" >
        <p class=\"text-muted credit\" ><font color=\"#FFFFFF\">Pet's | Copyright © 2016 - 2017</font></p>
\t</div>
</footer>


    <!--<script src=\"js/jquery.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/scripts.js\"></script>-->
    \t<!-- menu redondo-->
\t\t<!--<script src=\"js/polyfills.js\"></script>
\t\t<script src=\"js/demo1.js\"></script>-->
\t\t
\t\t";
        // line 167
        $this->displayBlock('javascripts1', $context, $blocks);
        // line 174
        echo "\t\t<!-- fin menu redondo -->   
  </body>
</html>";
        
        $__internal_fe9bffdec2c30f28f8e8661d2e581ea3d253575f4c512cba7f20a165c6dcf04e->leave($__internal_fe9bffdec2c30f28f8e8661d2e581ea3d253575f4c512cba7f20a165c6dcf04e_prof);

    }

    // line 39
    public function block_estilos($context, array $blocks = array())
    {
        $__internal_6eed2e8107de41480f0fb1d32aed3920c344b34358db17f607148d81bb66e069 = $this->env->getExtension("native_profiler");
        $__internal_6eed2e8107de41480f0fb1d32aed3920c344b34358db17f607148d81bb66e069->enter($__internal_6eed2e8107de41480f0fb1d32aed3920c344b34358db17f607148d81bb66e069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "estilos"));

        // line 40
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/normalize.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/demo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/component1.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t";
        
        $__internal_6eed2e8107de41480f0fb1d32aed3920c344b34358db17f607148d81bb66e069->leave($__internal_6eed2e8107de41480f0fb1d32aed3920c344b34358db17f607148d81bb66e069_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a554ffe67d5eb967f938b634f6c2819568fd3e622846b798b804f2fdbd71b65 = $this->env->getExtension("native_profiler");
        $__internal_5a554ffe67d5eb967f938b634f6c2819568fd3e622846b798b804f2fdbd71b65->enter($__internal_5a554ffe67d5eb967f938b634f6c2819568fd3e622846b798b804f2fdbd71b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t";
        
        $__internal_5a554ffe67d5eb967f938b634f6c2819568fd3e622846b798b804f2fdbd71b65->leave($__internal_5a554ffe67d5eb967f938b634f6c2819568fd3e622846b798b804f2fdbd71b65_prof);

    }

    // line 145
    public function block_body($context, array $blocks = array())
    {
        $__internal_2582d128c83fcfcfc12bf57ca2122e547848cd335850023e4a6aaec8de421666 = $this->env->getExtension("native_profiler");
        $__internal_2582d128c83fcfcfc12bf57ca2122e547848cd335850023e4a6aaec8de421666->enter($__internal_2582d128c83fcfcfc12bf57ca2122e547848cd335850023e4a6aaec8de421666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 146
        echo "        \t\t";
        
        $__internal_2582d128c83fcfcfc12bf57ca2122e547848cd335850023e4a6aaec8de421666->leave($__internal_2582d128c83fcfcfc12bf57ca2122e547848cd335850023e4a6aaec8de421666_prof);

    }

    // line 167
    public function block_javascripts1($context, array $blocks = array())
    {
        $__internal_088536336c2f89f45d270d7559872c802e2758af3615d5de593f755dd782cbc8 = $this->env->getExtension("native_profiler");
        $__internal_088536336c2f89f45d270d7559872c802e2758af3615d5de593f755dd782cbc8->enter($__internal_088536336c2f89f45d270d7559872c802e2758af3615d5de593f755dd782cbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts1"));

        // line 168
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/scripts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/polyfills.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/demo1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t";
        
        $__internal_088536336c2f89f45d270d7559872c802e2758af3615d5de593f755dd782cbc8->leave($__internal_088536336c2f89f45d270d7559872c802e2758af3615d5de593f755dd782cbc8_prof);

    }

    public function getTemplateName()
    {
        return "IndexBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 172,  346 => 171,  342 => 170,  338 => 169,  333 => 168,  327 => 167,  320 => 146,  314 => 145,  304 => 47,  298 => 46,  289 => 44,  285 => 43,  281 => 42,  277 => 41,  272 => 40,  266 => 39,  257 => 174,  255 => 167,  233 => 147,  231 => 145,  222 => 139,  218 => 138,  202 => 124,  199 => 123,  193 => 122,  184 => 119,  179 => 118,  174 => 117,  169 => 116,  167 => 115,  162 => 112,  154 => 110,  148 => 107,  144 => 106,  139 => 105,  137 => 104,  130 => 100,  118 => 91,  110 => 86,  71 => 49,  68 => 46,  66 => 39,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <!-- */
/* .hidden-xs*/
/* Si aplicamos esta clase CSS a un DIV no aparecerá en la versión móvil pero si desde un ordenador o tablet.*/
/* */
/* .visible-xs*/
/* Si aplicamos esta clase CSS a un DIV sí aparecerá en la versión móvil pero no desde una dispositivo con la pantalla mayor.*/
/* -->*/
/*   <head>*/
/*   <style>*/
/* 		  .btnJ{*/
/* 		   -webkit-border-radius: 35;*/
/* 		  -moz-border-radius: 35;*/
/* 		  border-radius: 35px;*/
/* 		  color: #ffffff;*/
/* 		  font-size: 20px;*/
/* 		  background: #00BCD4;*/
/* 		  padding: 10px 20px 10px 20px;*/
/* 		  border: solid #1f628d 0px;*/
/* 		  text-decoration: none;*/
/* 		}*/
/* */
/* */
/* 		.btnJ:hover {*/
/* 		  text-decoration: none;*/
/* 		}*/
/* */
/* 		.navbar-nav.nav-justified > li{*/
/*     float:none;*/
/* }*/
/* */
/* */
/*   </style>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <!-- menu redondo-->*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     {% block estilos %}*/
/*     <link href="{{ asset('bundles/index/css/normalize.css') }}" type="text/css" rel="stylesheet" />*/
/*     <link href="{{ asset('bundles/index/css/demo.css') }}" type="text/css" rel="stylesheet" />*/
/* 		<link href="{{ asset('bundles/index/css/component1.css') }}" type="text/css" rel="stylesheet" />*/
/* 		<link href="{{ asset('bundles/index/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/* 		<link href="{{ asset('bundles/index/css/style.css') }}" type="text/css" rel="stylesheet" />*/
/* 		{% endblock %}*/
/* 		{% block javascripts %}*/
/* 		<script src="{{ asset('bundles/index/js/modernizr-2.6.2.min.js') }}" type="text/javascript"></script>*/
/* 		{% endblock %}*/
/* 		*/
/* 	<!-- fin menu redondo -->*/
/*     <title>Pet’s, adoptalo y no compres</title>*/
/* */
/*     <meta name="description" content="Pets page">*/
/*     <meta name="author" content="Pets">*/
/* */
/* */
/*     */
/* */
/*   </head>*/
/*   <body>*/
/*   	<!-- menu redondo-->*/
/*   	<div class="component">*/
/* 				<!-- Start Nav Structure -->*/
/* 				<button class="cn-button" id="cn-button">+</button>*/
/* 				<div class="cn-wrapper" id="cn-wrapper" style="margin-bottom: 10px"> <!-- mover posicion de los botones del menu -->*/
/* 				    <ul>*/
/* 				      <li><a href="#"><img src="/my_project/web/bundles/index/imgs/iconsMenu/camada.png" width="45px"></a></li>*/
/* 				      <li><a href="#"><img src="/my_project/web/bundles/index/imgs/iconsMenu/adoptar.png" width="45px"></span></a></li>*/
/* 				      <li><a href="#"><img src="/my_project/web/bundles/index/imgs/iconsMenu/home.png" width="40px"></a></li>*/
/* 				      <li><a href="#"><img src="/my_project/web/bundles/index/imgs/iconsMenu/buscar.png" width="30px"></a></li>*/
/* 				      <li><a href="#"><img src="/my_project/web/bundles/index/imgs/iconsMenu/donar.png" width="45px"></a></li>*/
/* */
/* */
/* */
/* 				     </ul>*/
/* 				</div>*/
/* 				<div id="cn-overlay" class="cn-overlay"></div>*/
/* 				<!-- End Nav Structure -->*/
/* 	</div>*/
/* 	<!-- fin menu redondo-->*/
/*     <div class="container-fluid">*/
/* 	<div class="row">*/
/* 		<div class="col-md-12">*/
/* 			<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height:95px;">*/
/* 				<div class="navbar-header" >*/
/* 					<a href="{{ path("ani") }}">*/
/* 						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="border:0;">*/
/* 						<img src="/my_project/web/bundles/index/imgs/publicar.png" class="visible-xs">*/
/* 						</button>*/
/* 					</a>*/
/* 					<a class="navbar-brand container-fluid" style="height:100px" href="{{ path("index_homepage") }}"><img src="/my_project/web/bundles/index/imgs/logo.png" width="160px"> </a>*/
/* 				</div>*/
/* 				<ul class="nav navbar-nav nav-justified hidden-xs" role="menu">*/
/*  					<li>*/
/* 							<!--<button type="submit" class="btn btn-default hidden-xs"  style="border: 0px;border-radius: 27px 27px 27px 27px;*/
/* 							-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-32px;">*/
/* 							<img src="/my_project/web/bundles/index/imgs/publicar.png" onClick="location.href=''"/>&nbsp;&nbsp;&nbsp;Publicar anuncio*/
/* 							</button>-->*/
/* 							<button class="btn btn-default hidden-xs"  style="border: 0px;border-radius: 27px 27px 27px 27px;*/
/* 							-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-130px;" onClick="location.href='{{ path("ani") }}'" value="publicar anuncio">*/
/* 								<img src="/my_project/web/bundles/index/imgs/publicar.png">&nbsp;&nbsp;&nbsp; Publicar anuncio</button>*/
/* 				<div class="navbar-right container-fluid " >*/
/* 						<div style="background-color:white; padding:5px; margin-right:13px; margin-top:-90px; border-radius: 15px;">*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     Estás logueado como: {{ app.user.username }} <br><center>*/
/*                 <a style="height:-150px;" href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'Salir'|trans({}, 'FOSUserBundle') }}*/
/*                 </a></center>*/
/*             {% else %}*/
/*                 <a style="height:-150px;" href="{{ path('fos_user_security_login') }}">{{ 'Login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*             */
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*         </div>		*/
/*  				</ul>*/
/* 								<!--*/
/* 				<form class="navbar-right" style="margin-top:10px;">*/
/* 					<a href="publicar.html">*/
/* 							<button type="submit" class="btn btn-default hidden-xs" style="border: 0px;border-radius: 27px 27px 27px 27px;*/
/* 							-moz-border-radius: 27px 27px 27px 27px;*/
/* 							-webkit-border-radius: 27px 27px 27px 27px; margin-right:390px;">*/
/* 							<img src="imgs/publicar.png"/>&nbsp;&nbsp;&nbsp;Publicar anuncio*/
/* 							</button>*/
/* 						*/
/* 						</a>*/
/* 				</form>-->*/
/* 				<div class="navbar-right container-fluid" style="margin-top:20px;">*/
/* 		<input type="button" class="btnJ" value="Iniciar sesión" onclick="location.href='{{ path("fos_user_security_login") }}';"/><div class="visible-xs"><br></div>*/
/* 		<input type="button" class="btnJ" value="Registrarse" onclick="location.href='{{ path("fos_user_registration_register") }}';"/>*/
/* 		*/
/* 		</div>*/
/* 			</nav>*/
/* 			<center>*/
/* 			<div style="margin-top: 170px; margin-bottom: 50px; width:100%;">*/
/* 				{% block body %}*/
/*         		{% endblock body %}*/
/* 			</div>*/
/* 			</center>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* </div>*/
/* <footer id="footer" style="background-color: #00BCD4;text-align: right; line-height: 40px;">*/
/*       <div class="container" >*/
/*         <p class="text-muted credit" ><font color="#FFFFFF">Pet's | Copyright © 2016 - 2017</font></p>*/
/* 	</div>*/
/* </footer>*/
/* */
/* */
/*     <!--<script src="js/jquery.min.js"></script>*/
/*     <script src="js/bootstrap.min.js"></script>*/
/*     <script src="js/scripts.js"></script>-->*/
/*     	<!-- menu redondo-->*/
/* 		<!--<script src="js/polyfills.js"></script>*/
/* 		<script src="js/demo1.js"></script>-->*/
/* 		*/
/* 		{% block javascripts1 %}*/
/* 		<script src="{{ asset('bundles/index/js/jquery.min.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/index/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/index/js/scripts.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/index/js/polyfills.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/index/js/demo1.js') }}" type="text/javascript"></script>*/
/* 		{% endblock %}*/
/* 		<!-- fin menu redondo -->   */
/*   </body>*/
/* </html>*/
