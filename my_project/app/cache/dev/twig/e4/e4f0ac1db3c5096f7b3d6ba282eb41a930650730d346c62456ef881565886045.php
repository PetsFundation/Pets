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
        $__internal_c2ecf989d6141987bf26c008ed9d1fc672960981372747c6f5ab12dfe395b3f6 = $this->env->getExtension("native_profiler");
        $__internal_c2ecf989d6141987bf26c008ed9d1fc672960981372747c6f5ab12dfe395b3f6->enter($__internal_c2ecf989d6141987bf26c008ed9d1fc672960981372747c6f5ab12dfe395b3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<!-- 
.hidden-xs
Si aplicamos esta clase CSS a un DIV no aparecerá en la versión móvil pero si desde un ordenador o tablet.

.visible-xs
Si aplicamos esta clase CSS a un DIV sí aparecerá en la versión móvil pero no desde una dispositivo con la pantalla mayor.
-->
\t<head>
\t\t<style>
\t\t\tbody {
\t\t\t\toverflow-x: hidden;
\t\t\t}
\t\t\t
\t\t\t.btnJ{
\t\t\t\t-webkit-border-radius: 35;
\t\t\t\t-moz-border-radius: 35;
\t\t\t\tborder-radius: 35px;
\t\t\t\tcolor: #ffffff;
\t\t\t\tfont-size: 20px;
\t\t\t\tbackground: #00BCD4;
\t\t\t\tpadding: 10px 20px 10px 20px;
\t\t\t\tborder: solid #1f628d 0px;
\t\t\t\ttext-decoration: none;
\t\t\t}
\t\t\t
\t\t\t.btnJ:hover {
\t\t\t\ttext-decoration: none;
\t\t\t}
\t\t\t
\t\t\t.navbar-nav.nav-justified > li{
\t\t\t\tfloat:none;
\t\t\t}
\t\t</style>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<!-- menu redondo-->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t";
        // line 40
        $this->displayBlock('estilos', $context, $blocks);
        // line 47
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "\t\t<!-- fin menu redondo -->
\t\t<title>Pet’s, adoptalo y no compres</title>
\t\t<meta name=\"description\" content=\"Pets page\">
\t\t<meta name=\"author\" content=\"Pets\">
\t</head>
\t<body>
\t\t<!-- menu redondo-->
\t\t<div class=\"component\">
\t\t\t<!-- Start Nav Structure -->
\t\t\t<button class=\"cn-button\" id=\"cn-button\">+</button>
\t\t\t<div class=\"cn-wrapper\" id=\"cn-wrapper\" style=\"margin-bottom: 10px\"> <!-- mover posicion de los botones del menu -->
\t\t\t\t<ul>
\t\t\t\t\t<li><a onclick=\"location.href='";
        // line 62
        echo $this->env->getExtension('routing')->getPath("paginas_sebusca");
        echo "'\" ><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/buscarperdido.png\" width=\"45px\"></a></li>
\t\t\t\t\t<li><a onclick=\"location.href='";
        // line 63
        echo $this->env->getExtension('routing')->getPath("paginas_adopciones");
        echo "'\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/adoptar.png\" width=\"50px\"></span></a></li>
\t\t\t\t\t<li><a onclick=\"location.href='";
        // line 64
        echo $this->env->getExtension('routing')->getPath("paginas_protectoras");
        echo "'\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/refugio.png\" width=\"45px\"></a></li>
\t\t\t\t\t<li><a onclick=\"location.href='";
        // line 65
        echo $this->env->getExtension('routing')->getPath("paginas_camadas");
        echo "'\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/camada.png\" width=\"45px\"></a></li>
\t\t\t\t\t<li><a href=\"/my_project/phpBB3/\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/forum.png\" width=\"45px\"></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div id=\"cn-overlay\" class=\"cn-overlay\"></div>
\t\t\t<!-- End Nav Structure -->
\t\t</div>
\t\t<!-- fin menu redondo-->
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" style=\"height:95px;\">
\t\t\t\t\t\t<div class=\"navbar-header\" >
\t\t\t\t\t\t\t<a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("anunc");
        echo "\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" style=\"border:0;\">
\t\t\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/publicar.png\" class=\"visible-xs\">
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"navbar-brand container-fluid\" style=\"height:100px\" href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("index_homepage");
        echo "\"><img src=\"/my_project/web/bundles/index/imgs/logo.png\" width=\"160px\"> </a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"nav navbar-nav nav-justified hidden-xs\" role=\"menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<!--<button type=\"submit\" class=\"btn btn-default hidden-xs\"  style=\"border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-32px;\">
\t\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/publicar.png\" onClick=\"location.href=''\"/>&nbsp;&nbsp;&nbsp;Publicar anuncio
\t\t\t\t\t\t\t\t</button>-->
\t\t\t\t\t\t\t\t<button class=\"btn btn-default hidden-xs\"  style=\"border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-130px;\" onClick=\"location.href='";
        // line 92
        echo $this->env->getExtension('routing')->getPath("anunc");
        echo "'\" value=\"publicar anuncio\">
\t\t\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/publicar.png\">&nbsp;&nbsp;&nbsp; Publicar anuncio
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<div class=\"navbar-right container-fluid \" >
\t\t\t\t\t\t\t\t<div style=\"background-color:white; padding:5px; margin-right:13px; margin-top:-105px; border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px;\">
\t\t\t\t\t\t\t\t\t";
        // line 99
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 100
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/user.png\">&nbsp;&nbsp; 
\t\t\t\t\t\t\t\t\t\t<a style=\"height:-150px;\" href=\"http://pruebaaaspets-daflpa.c9users.io/my_project/web/app_dev.php/profile/\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Perfil", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</a> | 
\t\t\t\t\t\t\t\t\t\t<a style=\"height:-150px;\" href=\"";
            // line 104
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cerrar sesión", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</a>&nbsp;&nbsp; 
\t\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 110
            echo "\t\t\t\t\t\t\t\t\t\t<a style=\"height:-150px; text-decoration:none;\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><img src=\"/my_project/web/bundles/index/imgs/user.png\">&nbsp;";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("   Mi cuenta", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 112
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 113
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 114
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 115
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 117
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 122
        echo "\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<!--
\t\t\t\t\t\t<form class=\"navbar-right\" style=\"margin-top:10px;\">
\t\t\t\t\t\t<a href=\"publicar.html\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default hidden-xs\" style=\"border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t-webkit-border-radius: 27px 27px 27px 27px; margin-right:390px;\">
\t\t\t\t\t\t<img src=\"imgs/publicar.png\"/>&nbsp;&nbsp;&nbsp;Publicar anuncio
\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t</a>
\t\t\t\t\t\t</form>-->
\t\t\t\t\t\t<div class=\"navbar-right container-fluid\" style=\"margin-top:7px;\">
\t\t\t\t\t\t\t<img class=\"visible-xs\" src=\"/my_project/web/bundles/index/imgs/user.png\" onclick=\"location.href='";
        // line 136
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "';\" style=\"float: right; margin-right: 10px\"><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t\t
\t\t\t\t\t<center>
\t\t\t\t\t\t<div style=\"margin-top: 170px; width:100%; margin-bottom: 150px\">
\t\t\t\t\t\t\t";
        // line 142
        $this->displayBlock('body', $context, $blocks);
        // line 144
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</center>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div id=\"footer\" style=\"position: fixed; bottom: 0; width: 100%; height: 50px; background-color: #00BCD4;text-align: right; line-height: 40px;\">
            <div class=\"container\" >
                <p class=\"text-muted credit\" ><font color=\"#FFFFFF\"><a href=\"/my_project/web/app_dev.php/contactame\" style=\"color: white; text-decoration: none\">Contacto</a> | Pet's - Copyright © 2016</font></p>
            </div>
\t\t
\t
\t\t<!--<script src=\"js/jquery.min.js\"></script>
\t\t<script src=\"js/bootstrap.min.js\"></script>
\t\t<script src=\"js/scripts.js\"></script>-->
\t\t<!-- menu redondo-->
\t\t<!--<script src=\"js/polyfills.js\"></script>
\t\t<script src=\"js/demo1.js\"></script>-->
\t
\t\t";
        // line 163
        $this->displayBlock('javascripts1', $context, $blocks);
        // line 170
        echo "\t\t<!-- fin menu redondo -->
\t</body>
</html>";
        
        $__internal_c2ecf989d6141987bf26c008ed9d1fc672960981372747c6f5ab12dfe395b3f6->leave($__internal_c2ecf989d6141987bf26c008ed9d1fc672960981372747c6f5ab12dfe395b3f6_prof);

    }

    // line 40
    public function block_estilos($context, array $blocks = array())
    {
        $__internal_5224439d070218b5cfc5966a91016c40e42890794e14c9cf6c0c2800d9a95320 = $this->env->getExtension("native_profiler");
        $__internal_5224439d070218b5cfc5966a91016c40e42890794e14c9cf6c0c2800d9a95320->enter($__internal_5224439d070218b5cfc5966a91016c40e42890794e14c9cf6c0c2800d9a95320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "estilos"));

        // line 41
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/normalize.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t<link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/demo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t<link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/component1.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t<link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t<link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t";
        
        $__internal_5224439d070218b5cfc5966a91016c40e42890794e14c9cf6c0c2800d9a95320->leave($__internal_5224439d070218b5cfc5966a91016c40e42890794e14c9cf6c0c2800d9a95320_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d59e8800bfa2b5f9112d369d8ac18f82d81b6e06970c277968a638a2beba7911 = $this->env->getExtension("native_profiler");
        $__internal_d59e8800bfa2b5f9112d369d8ac18f82d81b6e06970c277968a638a2beba7911->enter($__internal_d59e8800bfa2b5f9112d369d8ac18f82d81b6e06970c277968a638a2beba7911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t";
        
        $__internal_d59e8800bfa2b5f9112d369d8ac18f82d81b6e06970c277968a638a2beba7911->leave($__internal_d59e8800bfa2b5f9112d369d8ac18f82d81b6e06970c277968a638a2beba7911_prof);

    }

    // line 142
    public function block_body($context, array $blocks = array())
    {
        $__internal_da3993662c11aaa978db11382923d958854306338653483ab02e6a6b8ca7235c = $this->env->getExtension("native_profiler");
        $__internal_da3993662c11aaa978db11382923d958854306338653483ab02e6a6b8ca7235c->enter($__internal_da3993662c11aaa978db11382923d958854306338653483ab02e6a6b8ca7235c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 143
        echo "\t\t\t\t\t\t\t";
        
        $__internal_da3993662c11aaa978db11382923d958854306338653483ab02e6a6b8ca7235c->leave($__internal_da3993662c11aaa978db11382923d958854306338653483ab02e6a6b8ca7235c_prof);

    }

    // line 163
    public function block_javascripts1($context, array $blocks = array())
    {
        $__internal_99e3d52045cdb38f27e8f676e32761c14fb79f67fe080db5bd198ef65e5c5a14 = $this->env->getExtension("native_profiler");
        $__internal_99e3d52045cdb38f27e8f676e32761c14fb79f67fe080db5bd198ef65e5c5a14->enter($__internal_99e3d52045cdb38f27e8f676e32761c14fb79f67fe080db5bd198ef65e5c5a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts1"));

        // line 164
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/scripts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/polyfills.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/demo1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t";
        
        $__internal_99e3d52045cdb38f27e8f676e32761c14fb79f67fe080db5bd198ef65e5c5a14->leave($__internal_99e3d52045cdb38f27e8f676e32761c14fb79f67fe080db5bd198ef65e5c5a14_prof);

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
        return array (  356 => 168,  352 => 167,  348 => 166,  344 => 165,  339 => 164,  333 => 163,  326 => 143,  320 => 142,  310 => 48,  304 => 47,  295 => 45,  291 => 44,  287 => 43,  283 => 42,  278 => 41,  272 => 40,  263 => 170,  261 => 163,  240 => 144,  238 => 142,  229 => 136,  213 => 122,  210 => 121,  204 => 120,  195 => 117,  190 => 116,  185 => 115,  180 => 114,  178 => 113,  175 => 112,  167 => 110,  159 => 105,  155 => 104,  150 => 102,  146 => 100,  144 => 99,  134 => 92,  122 => 83,  114 => 78,  98 => 65,  94 => 64,  90 => 63,  86 => 62,  72 => 50,  69 => 47,  67 => 40,  26 => 1,);
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
/* 	<head>*/
/* 		<style>*/
/* 			body {*/
/* 				overflow-x: hidden;*/
/* 			}*/
/* 			*/
/* 			.btnJ{*/
/* 				-webkit-border-radius: 35;*/
/* 				-moz-border-radius: 35;*/
/* 				border-radius: 35px;*/
/* 				color: #ffffff;*/
/* 				font-size: 20px;*/
/* 				background: #00BCD4;*/
/* 				padding: 10px 20px 10px 20px;*/
/* 				border: solid #1f628d 0px;*/
/* 				text-decoration: none;*/
/* 			}*/
/* 			*/
/* 			.btnJ:hover {*/
/* 				text-decoration: none;*/
/* 			}*/
/* 			*/
/* 			.navbar-nav.nav-justified > li{*/
/* 				float:none;*/
/* 			}*/
/* 		</style>*/
/* 		<meta charset="utf-8">*/
/* 		<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 		<!-- menu redondo-->*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 		{% block estilos %}*/
/* 			<link href="{{ asset('bundles/index/css/normalize.css') }}" type="text/css" rel="stylesheet" />*/
/* 			<link href="{{ asset('bundles/index/css/demo.css') }}" type="text/css" rel="stylesheet" />*/
/* 			<link href="{{ asset('bundles/index/css/component1.css') }}" type="text/css" rel="stylesheet" />*/
/* 			<link href="{{ asset('bundles/index/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/* 			<link href="{{ asset('bundles/index/css/style.css') }}" type="text/css" rel="stylesheet" />*/
/* 		{% endblock %}*/
/* 		{% block javascripts %}*/
/* 			<script src="{{ asset('bundles/index/js/modernizr-2.6.2.min.js') }}" type="text/javascript"></script>*/
/* 		{% endblock %}*/
/* 		<!-- fin menu redondo -->*/
/* 		<title>Pet’s, adoptalo y no compres</title>*/
/* 		<meta name="description" content="Pets page">*/
/* 		<meta name="author" content="Pets">*/
/* 	</head>*/
/* 	<body>*/
/* 		<!-- menu redondo-->*/
/* 		<div class="component">*/
/* 			<!-- Start Nav Structure -->*/
/* 			<button class="cn-button" id="cn-button">+</button>*/
/* 			<div class="cn-wrapper" id="cn-wrapper" style="margin-bottom: 10px"> <!-- mover posicion de los botones del menu -->*/
/* 				<ul>*/
/* 					<li><a onclick="location.href='{{ path("paginas_sebusca") }}'" ><img src="/my_project/web/bundles/index/imgs/iconsMenu/buscarperdido.png" width="45px"></a></li>*/
/* 					<li><a onclick="location.href='{{ path("paginas_adopciones") }}'"><img src="/my_project/web/bundles/index/imgs/iconsMenu/adoptar.png" width="50px"></span></a></li>*/
/* 					<li><a onclick="location.href='{{ path("paginas_protectoras") }}'"><img src="/my_project/web/bundles/index/imgs/iconsMenu/refugio.png" width="45px"></a></li>*/
/* 					<li><a onclick="location.href='{{ path("paginas_camadas") }}'"><img src="/my_project/web/bundles/index/imgs/iconsMenu/camada.png" width="45px"></a></li>*/
/* 					<li><a href="/my_project/phpBB3/"><img src="/my_project/web/bundles/index/imgs/iconsMenu/forum.png" width="45px"></a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div id="cn-overlay" class="cn-overlay"></div>*/
/* 			<!-- End Nav Structure -->*/
/* 		</div>*/
/* 		<!-- fin menu redondo-->*/
/* 		<div class="container-fluid">*/
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 					<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height:95px;">*/
/* 						<div class="navbar-header" >*/
/* 							<a href="{{ path("anunc") }}">*/
/* 								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="border:0;">*/
/* 									<img src="/my_project/web/bundles/index/imgs/publicar.png" class="visible-xs">*/
/* 								</button>*/
/* 							</a>*/
/* 							<a class="navbar-brand container-fluid" style="height:100px" href="{{ path("index_homepage") }}"><img src="/my_project/web/bundles/index/imgs/logo.png" width="160px"> </a>*/
/* 						</div>*/
/* 						<ul class="nav navbar-nav nav-justified hidden-xs" role="menu">*/
/* 							<li>*/
/* 								<!--<button type="submit" class="btn btn-default hidden-xs"  style="border: 0px;border-radius: 27px 27px 27px 27px;*/
/* 								-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-32px;">*/
/* 								<img src="/my_project/web/bundles/index/imgs/publicar.png" onClick="location.href=''"/>&nbsp;&nbsp;&nbsp;Publicar anuncio*/
/* 								</button>-->*/
/* 								<button class="btn btn-default hidden-xs"  style="border: 0px;border-radius: 27px 27px 27px 27px;*/
/* 								-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-130px;" onClick="location.href='{{ path("anunc") }}'" value="publicar anuncio">*/
/* 									<img src="/my_project/web/bundles/index/imgs/publicar.png">&nbsp;&nbsp;&nbsp; Publicar anuncio*/
/* 								</button>*/
/* 							</li>*/
/* 							<div class="navbar-right container-fluid " >*/
/* 								<div style="background-color:white; padding:5px; margin-right:13px; margin-top:-105px; border: 0px;border-radius: 27px 27px 27px 27px;*/
/* 								-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px;">*/
/* 									{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 										<img src="/my_project/web/bundles/index/imgs/user.png">&nbsp;&nbsp; */
/* 										<a style="height:-150px;" href="http://pruebaaaspets-daflpa.c9users.io/my_project/web/app_dev.php/profile/">*/
/* 											{{ 'Perfil'|trans({}, 'FOSUserBundle') }}*/
/* 										</a> | */
/* 										<a style="height:-150px;" href="{{ path('fos_user_security_logout') }}">*/
/* 											{{ 'Cerrar sesión'|trans({}, 'FOSUserBundle') }}*/
/* 										</a>&nbsp;&nbsp; */
/* 										<center>*/
/* 										</center>*/
/* 									{% else %}*/
/* 										<a style="height:-150px; text-decoration:none;" href="{{ path('fos_user_security_login') }}"><img src="/my_project/web/bundles/index/imgs/user.png">&nbsp;{{ '   Mi cuenta'|trans({}, 'FOSUserBundle') }}</a>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 								{% if app.request.hasPreviousSession %}*/
/* 									{% for type, messages in app.session.flashbag.all() %}*/
/* 										{% for message in messages %}*/
/* 											<div class="flash-{{ type }}">*/
/* 												{{ message }}*/
/* 											</div>*/
/* 										{% endfor %}*/
/* 									{% endfor %}*/
/* 								{% endif %}*/
/* 							</div>		*/
/* 						</ul>*/
/* 						<!--*/
/* 						<form class="navbar-right" style="margin-top:10px;">*/
/* 						<a href="publicar.html">*/
/* 						<button type="submit" class="btn btn-default hidden-xs" style="border: 0px;border-radius: 27px 27px 27px 27px;*/
/* 						-moz-border-radius: 27px 27px 27px 27px;*/
/* 						-webkit-border-radius: 27px 27px 27px 27px; margin-right:390px;">*/
/* 						<img src="imgs/publicar.png"/>&nbsp;&nbsp;&nbsp;Publicar anuncio*/
/* 						</button>*/
/* 						*/
/* 						</a>*/
/* 						</form>-->*/
/* 						<div class="navbar-right container-fluid" style="margin-top:7px;">*/
/* 							<img class="visible-xs" src="/my_project/web/bundles/index/imgs/user.png" onclick="location.href='{{ path("fos_user_security_login") }}';" style="float: right; margin-right: 10px"><br>*/
/* 						</div>*/
/* 					</nav>*/
/* 					*/
/* 					<center>*/
/* 						<div style="margin-top: 170px; width:100%; margin-bottom: 150px">*/
/* 							{% block body %}*/
/* 							{% endblock body %}*/
/* 						</div>*/
/* 					</center>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		<div id="footer" style="position: fixed; bottom: 0; width: 100%; height: 50px; background-color: #00BCD4;text-align: right; line-height: 40px;">*/
/*             <div class="container" >*/
/*                 <p class="text-muted credit" ><font color="#FFFFFF"><a href="/my_project/web/app_dev.php/contactame" style="color: white; text-decoration: none">Contacto</a> | Pet's - Copyright © 2016</font></p>*/
/*             </div>*/
/* 		*/
/* 	*/
/* 		<!--<script src="js/jquery.min.js"></script>*/
/* 		<script src="js/bootstrap.min.js"></script>*/
/* 		<script src="js/scripts.js"></script>-->*/
/* 		<!-- menu redondo-->*/
/* 		<!--<script src="js/polyfills.js"></script>*/
/* 		<script src="js/demo1.js"></script>-->*/
/* 	*/
/* 		{% block javascripts1 %}*/
/* 			<script src="{{ asset('bundles/index/js/jquery.min.js') }}" type="text/javascript"></script>*/
/* 			<script src="{{ asset('bundles/index/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/* 			<script src="{{ asset('bundles/index/js/scripts.js') }}" type="text/javascript"></script>*/
/* 			<script src="{{ asset('bundles/index/js/polyfills.js') }}" type="text/javascript"></script>*/
/* 			<script src="{{ asset('bundles/index/js/demo1.js') }}" type="text/javascript"></script>*/
/* 		{% endblock %}*/
/* 		<!-- fin menu redondo -->*/
/* 	</body>*/
/* </html>*/
