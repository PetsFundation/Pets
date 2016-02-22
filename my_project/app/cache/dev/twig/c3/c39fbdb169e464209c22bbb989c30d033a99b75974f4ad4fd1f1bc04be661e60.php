<?php

/* base.html.twig */
class __TwigTemplate_9d3f89b4b876caf4ddd27b5fff24002962d13d42c14ee824a6499a1496323d3c extends Twig_Template
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
<<<<<<< HEAD
        $__internal_719424a3f115dc03154cf3481373982d9b13f496ce1e501d12d800c48688b2e9 = $this->env->getExtension("native_profiler");
        $__internal_719424a3f115dc03154cf3481373982d9b13f496ce1e501d12d800c48688b2e9->enter($__internal_719424a3f115dc03154cf3481373982d9b13f496ce1e501d12d800c48688b2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));
=======
        $__internal_c39f372e6ba39a887313014b0f80e1fc9b70095f82d80a2e794f3d4e3d874d51 = $this->env->getExtension("native_profiler");
        $__internal_c39f372e6ba39a887313014b0f80e1fc9b70095f82d80a2e794f3d4e3d874d51->enter($__internal_c39f372e6ba39a887313014b0f80e1fc9b70095f82d80a2e794f3d4e3d874d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));
>>>>>>> david3

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
        // line 50
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
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
\t\t\t\t       <li><a href=\"#\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/donar.png\" width=\"45px\"></a></li>



\t\t\t\t     </ul>
\t\t\t\t</div>
\t\t\t\t<div id=\"cn-overlay\" class=\"cn-overlay\"></div>
\t\t\t\t<!-- End Nav Structure -->
\t</div>
\t<!-- fin menu redondo-->
    <div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t\t<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" style=\"height:95px;\">
\t\t\t\t\t\t<div class=\"navbar-header\" >
\t\t\t\t\t\t\t<a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("anunc");
        echo "\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" style=\"border:0;\">
\t\t\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/publicar.png\" class=\"visible-xs\">
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"navbar-brand container-fluid\" style=\"height:100px\" href=\"";
        // line 95
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
        // line 104
        echo $this->env->getExtension('routing')->getPath("anunc");
        echo "'\" value=\"publicar anuncio\">
\t\t\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/publicar.png\">&nbsp;&nbsp;&nbsp; Publicar anuncio
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<div class=\"navbar-right container-fluid \" >
\t\t\t\t\t\t\t\t<div style=\"background-color:white; padding:5px; margin-right:13px; margin-top:-105px; border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px;\">
\t\t\t\t\t\t\t\t\t";
        // line 111
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 112
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/user.png\">&nbsp;&nbsp; 
\t\t\t\t\t\t\t\t\t\t<a style=\"height:-150px;\" href=\"http://pruebaaaspets-daflpa.c9users.io/my_project/web/app_dev.php/profile/\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Perfil", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</a> | 
\t\t\t\t\t\t\t\t\t\t<a style=\"height:-150px;\" href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cerrar sesión", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</a>&nbsp;&nbsp; 
\t\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 122
            echo "\t\t\t\t\t\t\t\t\t\t<a style=\"height:-150px; text-decoration:none;\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><img src=\"/my_project/web/bundles/index/imgs/user.png\">&nbsp;";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("   Mi cuenta", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 124
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 125
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 126
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 127
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 128
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 129
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 134
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
        // line 148
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "';\" style=\"float: right; margin-right: 10px\"><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t\t
\t\t\t<center>
\t\t\t<div style=\"margin-top: 170px; margin-bottom: 50px; width:100%;\">
\t\t\t\t";
        // line 154
        $this->displayBlock('body', $context, $blocks);
        // line 156
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
        // line 177
        $this->displayBlock('javascripts1', $context, $blocks);
        // line 184
        echo "\t\t<!-- fin menu redondo -->   
  </body>
</html>";
        
<<<<<<< HEAD
        $__internal_719424a3f115dc03154cf3481373982d9b13f496ce1e501d12d800c48688b2e9->leave($__internal_719424a3f115dc03154cf3481373982d9b13f496ce1e501d12d800c48688b2e9_prof);
=======
        $__internal_c39f372e6ba39a887313014b0f80e1fc9b70095f82d80a2e794f3d4e3d874d51->leave($__internal_c39f372e6ba39a887313014b0f80e1fc9b70095f82d80a2e794f3d4e3d874d51_prof);
>>>>>>> david3

    }

    // line 39
    public function block_estilos($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_15eb6fd1e9e82c16cafe2109c924272c5f0feef75e47dd4f13db645be8bbccd3 = $this->env->getExtension("native_profiler");
        $__internal_15eb6fd1e9e82c16cafe2109c924272c5f0feef75e47dd4f13db645be8bbccd3->enter($__internal_15eb6fd1e9e82c16cafe2109c924272c5f0feef75e47dd4f13db645be8bbccd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "estilos"));
=======
        $__internal_0afd56676e281889b9e5cbcb2194ca8b14332a3aa180abe6984c84d933cf89a5 = $this->env->getExtension("native_profiler");
        $__internal_0afd56676e281889b9e5cbcb2194ca8b14332a3aa180abe6984c84d933cf89a5->enter($__internal_0afd56676e281889b9e5cbcb2194ca8b14332a3aa180abe6984c84d933cf89a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "estilos"));
>>>>>>> david3

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
\t\t<link href=\"/my_project/web/bundles/animales/css/fileinput.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<script src=\"/my_project/web/bundles/animales/js/fileinput.js\" type=\"text/javascript\"></script>
        <script src=\"/my_project/web/bundles/animales/js/fileinput_locale_fr.js\" type=\"text/javascript\"></script>
        <script src=\"/my_project/web/bundles/animales/js/fileinput_locale_es.js\" type=\"text/javascript\"></script>
\t\t";
        
<<<<<<< HEAD
        $__internal_15eb6fd1e9e82c16cafe2109c924272c5f0feef75e47dd4f13db645be8bbccd3->leave($__internal_15eb6fd1e9e82c16cafe2109c924272c5f0feef75e47dd4f13db645be8bbccd3_prof);
=======
        $__internal_0afd56676e281889b9e5cbcb2194ca8b14332a3aa180abe6984c84d933cf89a5->leave($__internal_0afd56676e281889b9e5cbcb2194ca8b14332a3aa180abe6984c84d933cf89a5_prof);
>>>>>>> david3

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_4644f285038276355bab64b332287a3700fcf83eaa0581af4dbc7d9266884b92 = $this->env->getExtension("native_profiler");
        $__internal_4644f285038276355bab64b332287a3700fcf83eaa0581af4dbc7d9266884b92->enter($__internal_4644f285038276355bab64b332287a3700fcf83eaa0581af4dbc7d9266884b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));
=======
        $__internal_f0d567bc101a17a264cbe297574353f21518b34309613ad24bac549d9558aa03 = $this->env->getExtension("native_profiler");
        $__internal_f0d567bc101a17a264cbe297574353f21518b34309613ad24bac549d9558aa03->enter($__internal_f0d567bc101a17a264cbe297574353f21518b34309613ad24bac549d9558aa03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));
>>>>>>> david3

        // line 51
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t";
        
<<<<<<< HEAD
        $__internal_4644f285038276355bab64b332287a3700fcf83eaa0581af4dbc7d9266884b92->leave($__internal_4644f285038276355bab64b332287a3700fcf83eaa0581af4dbc7d9266884b92_prof);
=======
        $__internal_f0d567bc101a17a264cbe297574353f21518b34309613ad24bac549d9558aa03->leave($__internal_f0d567bc101a17a264cbe297574353f21518b34309613ad24bac549d9558aa03_prof);
>>>>>>> david3

    }

    // line 154
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_1a4a41fefd7967ade0ec1fe8e4a80abeea26474e1d17b8da81df6bec4de34a42 = $this->env->getExtension("native_profiler");
        $__internal_1a4a41fefd7967ade0ec1fe8e4a80abeea26474e1d17b8da81df6bec4de34a42->enter($__internal_1a4a41fefd7967ade0ec1fe8e4a80abeea26474e1d17b8da81df6bec4de34a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
=======
        $__internal_e09b0587a0f41272633bf9605b581dfe6c0368355d21d2b103afc66e986b0cda = $this->env->getExtension("native_profiler");
        $__internal_e09b0587a0f41272633bf9605b581dfe6c0368355d21d2b103afc66e986b0cda->enter($__internal_e09b0587a0f41272633bf9605b581dfe6c0368355d21d2b103afc66e986b0cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
>>>>>>> david3

        // line 155
        echo "        \t\t";
        
<<<<<<< HEAD
        $__internal_1a4a41fefd7967ade0ec1fe8e4a80abeea26474e1d17b8da81df6bec4de34a42->leave($__internal_1a4a41fefd7967ade0ec1fe8e4a80abeea26474e1d17b8da81df6bec4de34a42_prof);
=======
        $__internal_e09b0587a0f41272633bf9605b581dfe6c0368355d21d2b103afc66e986b0cda->leave($__internal_e09b0587a0f41272633bf9605b581dfe6c0368355d21d2b103afc66e986b0cda_prof);
>>>>>>> david3

    }

    // line 177
    public function block_javascripts1($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_f5d2a1a56a33d6afd35553c59c9118da2fb8e29e4994de712e76e01ac7c0c920 = $this->env->getExtension("native_profiler");
        $__internal_f5d2a1a56a33d6afd35553c59c9118da2fb8e29e4994de712e76e01ac7c0c920->enter($__internal_f5d2a1a56a33d6afd35553c59c9118da2fb8e29e4994de712e76e01ac7c0c920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts1"));
=======
        $__internal_734ff7aec82d956affb12c7bacb61de553673c0ad5ee082a663676d96a5143a5 = $this->env->getExtension("native_profiler");
        $__internal_734ff7aec82d956affb12c7bacb61de553673c0ad5ee082a663676d96a5143a5->enter($__internal_734ff7aec82d956affb12c7bacb61de553673c0ad5ee082a663676d96a5143a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts1"));
>>>>>>> david3

        // line 178
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/scripts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/polyfills.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/index/js/demo1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t";
        
<<<<<<< HEAD
        $__internal_f5d2a1a56a33d6afd35553c59c9118da2fb8e29e4994de712e76e01ac7c0c920->leave($__internal_f5d2a1a56a33d6afd35553c59c9118da2fb8e29e4994de712e76e01ac7c0c920_prof);
=======
        $__internal_734ff7aec82d956affb12c7bacb61de553673c0ad5ee082a663676d96a5143a5->leave($__internal_734ff7aec82d956affb12c7bacb61de553673c0ad5ee082a663676d96a5143a5_prof);
>>>>>>> david3

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 182,  354 => 181,  350 => 180,  346 => 179,  341 => 178,  335 => 177,  328 => 155,  322 => 154,  312 => 51,  306 => 50,  294 => 45,  289 => 43,  285 => 42,  281 => 41,  276 => 40,  270 => 39,  261 => 184,  259 => 177,  236 => 156,  234 => 154,  225 => 148,  209 => 134,  206 => 133,  200 => 132,  191 => 129,  186 => 128,  181 => 127,  176 => 126,  174 => 125,  171 => 124,  163 => 122,  155 => 117,  151 => 116,  146 => 114,  142 => 112,  140 => 111,  130 => 104,  118 => 95,  110 => 90,  71 => 53,  68 => 50,  66 => 39,  26 => 1,);
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
/* 		<link href="/my_project/web/bundles/animales/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />*/
/* 		<link href="{{ asset('bundles/index/css/style.css') }}" type="text/css" rel="stylesheet" />*/
/* 		<script src="/my_project/web/bundles/animales/js/fileinput.js" type="text/javascript"></script>*/
/*         <script src="/my_project/web/bundles/animales/js/fileinput_locale_fr.js" type="text/javascript"></script>*/
/*         <script src="/my_project/web/bundles/animales/js/fileinput_locale_es.js" type="text/javascript"></script>*/
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
/* 				       <li><a href="#"><img src="/my_project/web/bundles/index/imgs/iconsMenu/donar.png" width="45px"></a></li>*/
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
/* 				<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height:95px;">*/
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
/*     */
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
