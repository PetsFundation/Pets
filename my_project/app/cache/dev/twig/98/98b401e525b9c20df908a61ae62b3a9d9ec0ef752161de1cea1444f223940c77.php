<?php

/* ContactameBundle:Default:index.html.twig */
class __TwigTemplate_cb39402b7e7010dfc127f06475daf383a86608aafca4d5ef29c61e0821138a39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'guide' => array($this, 'block_guide'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35faf9a61c106643f0ed334fbe752c5ae914525fe7f2f1f9e4e16fe4729aee28 = $this->env->getExtension("native_profiler");
        $__internal_35faf9a61c106643f0ed334fbe752c5ae914525fe7f2f1f9e4e16fe4729aee28->enter($__internal_35faf9a61c106643f0ed334fbe752c5ae914525fe7f2f1f9e4e16fe4729aee28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContactameBundle:Default:index.html.twig"));

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
            .btnJ{
                -webkit-border-radius: 35;
                -moz-border-radius: 35;
                border-radius: 35px;
                color: #ffffff;
                font-size: 20px;
                background: #00BCD4;
                padding: 10px 20px 10px 20px;
                border: solid #1f628d 0px;
                text-decoration: none;
            }
            
            
            .btnJ:hover {
                text-decoration: none;
            }
            
            .navbar-nav.nav-justified > li{
                float:none;
            }
            
            #custom-search-input{
                padding: 3px;
                border: solid 1px #E4E4E4;
                border-radius: 6px;
                background-color: #fff;
            }
            
            #custom-search-input input{
                border: 0;
                box-shadow: none;
            }
            
            #custom-search-input button{
                margin: 2px 0 0 0;
                background: none;
                box-shadow: none;
                border: 0;
                color: #666666;
                padding: 0 8px 0 10px;
                border-left: solid 1px #ccc;
            }
            
            #custom-search-input button:hover{
                border: 0;
                box-shadow: none;
                border-left: solid 1px #ccc;
            }
            
            #custom-search-input .glyphicon-search{
                font-size: 23px;
            }
        </style>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <!-- menu redondo-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/my_project/web/bundles/index/css/normalize.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/my_project/web/bundles/index/css/demo.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/my_project/web/bundles/index/css/component1.css\" />
        <link rel=\"stylesheet\" href=\"/my_project/web/bundles/index/css/normalizebuscar.css\">
        <link rel=\"stylesheet\" href=\"/my_project/web/bundles/index/css/estilobuscar.css\">
        <script src=\"/my_project/web/bundles/index/js/modernizr-2.6.2.min.js\"></script>
        <script src=\"/my_project/web/bundles/index/js/jquery-1.10.2.js\"></script>
        <script src=\"/my_project/web/bundles/index/js/anuncioshow.js\"></script>
        <!-- fin menu redondo -->
        <title>Pet’s, adoptalo y no compres</title>
        <meta name=\"description\" content=\"Pets page\">
        <meta name=\"author\" content=\"Pets\">
        <link href=\"/my_project/web/bundles/index/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"/my_project/web/bundles/index/css/style.css\" rel=\"stylesheet\">
    </head>
    <body>
        <!-- menu redondo-->
        <div class=\"component\">
            <!-- Start Nav Structure -->
            <button class=\"cn-button\" id=\"cn-button\">+</button>
            <!--<button class=\"cn-button visible-xs\" id=\"cn-button\" style=\"width:90px;\">+</button>-->
            <div class=\"cn-wrapper\" id=\"cn-wrapper\" style=\"margin-bottom: 10px\"> <!-- mover posicion de los botones del menu -->
               \t\t<ul>
\t\t\t\t\t<li><a onclick=\"location.href='";
        // line 92
        echo $this->env->getExtension('routing')->getPath("paginas_sebusca");
        echo "'\" ><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/buscarperdido.png\" width=\"45px\"></a></li>
\t\t\t\t\t<li><a onclick=\"location.href='";
        // line 93
        echo $this->env->getExtension('routing')->getPath("paginas_adopciones");
        echo "'\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/adoptar.png\" width=\"50px\"></span></a></li>
\t\t\t\t\t<li><a onclick=\"location.href='";
        // line 94
        echo $this->env->getExtension('routing')->getPath("paginas_protectoras");
        echo "'\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/refugio.png\" width=\"45px\"></a></li>
\t\t\t\t\t<li><a onclick=\"location.href='";
        // line 95
        echo $this->env->getExtension('routing')->getPath("paginas_camadas");
        echo "'\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/camada.png\" width=\"45px\"></a></li>
\t\t\t\t\t<li><a href=\"/my_project/phpBB3/\"><img src=\"/my_project/web/bundles/index/imgs/iconsMenu/forum.png\" width=\"45px\"></a></li>
\t\t\t\t</ul>
            </div>
            <div id=\"cn-overlay\" class=\"cn-overlay\"></div>
            <!-- End Nav Structure -->
        </div>
        <!-- fin menu redondo-->
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" style=\"height:95px;\">
\t\t\t\t\t\t<div class=\"navbar-header\" >
\t\t\t\t\t\t\t<a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("ani");
        echo "\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" style=\"border:0;\">
\t\t\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/publicar.png\" class=\"visible-xs\">
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"navbar-brand container-fluid\" style=\"height:100px\" href=\"";
        // line 113
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
        // line 122
        echo $this->env->getExtension('routing')->getPath("ani");
        echo "'\" value=\"publicar anuncio\">
\t\t\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/publicar.png\">&nbsp;&nbsp;&nbsp; Publicar anuncio
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<div class=\"navbar-right container-fluid \" >
\t\t\t\t\t\t\t\t<div style=\"background-color:white; padding:5px; margin-right:13px; margin-top:-105px; border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px;\">
\t\t\t\t\t\t\t\t\t";
        // line 129
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 130
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"/my_project/web/bundles/index/imgs/user.png\">&nbsp;&nbsp; 
\t\t\t\t\t\t\t\t\t\t<a style=\"height:-150px;\" href=\"http://pruebaaaspets-daflpa.c9users.io/my_project/web/app_dev.php/profile/\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Perfil", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</a> | 
\t\t\t\t\t\t\t\t\t\t<a style=\"height:-150px;\" href=\"";
            // line 134
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cerrar sesión", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</a>&nbsp;&nbsp; 
\t\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 140
            echo "\t\t\t\t\t\t\t\t\t\t<a style=\"height:-150px; text-decoration:none;\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><img src=\"/my_project/web/bundles/index/imgs/user.png\">&nbsp;";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("   Mi cuenta", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 142
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 143
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 144
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 145
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 146
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 147
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 152
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
        // line 166
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "';\" style=\"float: right; margin-right: 10px\"><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
                    <div style=\"vertical-align:left; margin-top: 110px; margin-bottom: -60px; font-weight: bold;\">
                      ";
        // line 170
        $this->displayBlock('guide', $context, $blocks);
        // line 171
        echo "                    </div>
                    <center> 
                        <div class=\"jumbotron\" style=\"margin-top: 56px; margin-bottom: 50px; background-color:white\">
                            ";
        // line 174
        $this->displayBlock('body', $context, $blocks);
        // line 176
        echo "                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div id=\"footer\" style=\"position: fixed; bottom: 0; width: 100%; height: 50px; background-color: #00BCD4;text-align: right; line-height: 40px;\">
            <div class=\"container\" >
                <p class=\"text-muted credit\" ><font color=\"#FFFFFF\"><a href=\"/my_project/web/app_dev.php/contactame\" style=\"color: white; text-decoration: none\">Contacto</a> | Pet's - Copyright © 2016</font></p>
            </div>
        </div>
        <script src=\"/my_project/web/bundles/paginasindex/js/jquery.min.js\"></script>
        <script src=\"/my_project/web/bundles/paginasindex/js/bootstrap.min.js\"></script>
        <script src=\"/my_project/web/bundles/paginasindex/js/scripts.js\"></script>
        <!-- menu redondo-->
        <script src=\"/my_project/web/bundles/paginasindex/js/polyfills.js\"></script>
        <script src=\"/my_project/web/bundles/paginasindex/js/demo1.js\"></script>
        <!-- fin menu redondo -->   
    </body>
</html>";
        
        $__internal_35faf9a61c106643f0ed334fbe752c5ae914525fe7f2f1f9e4e16fe4729aee28->leave($__internal_35faf9a61c106643f0ed334fbe752c5ae914525fe7f2f1f9e4e16fe4729aee28_prof);

    }

    // line 170
    public function block_guide($context, array $blocks = array())
    {
        $__internal_3db8dcdffa3b52dc6f2d6636c1b0f266a7f626f9c4b73cf201bf51db10bde5b4 = $this->env->getExtension("native_profiler");
        $__internal_3db8dcdffa3b52dc6f2d6636c1b0f266a7f626f9c4b73cf201bf51db10bde5b4->enter($__internal_3db8dcdffa3b52dc6f2d6636c1b0f266a7f626f9c4b73cf201bf51db10bde5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guide"));

        
        $__internal_3db8dcdffa3b52dc6f2d6636c1b0f266a7f626f9c4b73cf201bf51db10bde5b4->leave($__internal_3db8dcdffa3b52dc6f2d6636c1b0f266a7f626f9c4b73cf201bf51db10bde5b4_prof);

    }

    // line 174
    public function block_body($context, array $blocks = array())
    {
        $__internal_650a59b511876040277b41ca7c9bfb3d90d8ec963025fe6bd53f38e97da5fa69 = $this->env->getExtension("native_profiler");
        $__internal_650a59b511876040277b41ca7c9bfb3d90d8ec963025fe6bd53f38e97da5fa69->enter($__internal_650a59b511876040277b41ca7c9bfb3d90d8ec963025fe6bd53f38e97da5fa69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 175
        echo "\t\t\t\t\t\t\t";
        
        $__internal_650a59b511876040277b41ca7c9bfb3d90d8ec963025fe6bd53f38e97da5fa69->leave($__internal_650a59b511876040277b41ca7c9bfb3d90d8ec963025fe6bd53f38e97da5fa69_prof);

    }

    public function getTemplateName()
    {
        return "ContactameBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 175,  312 => 174,  301 => 170,  276 => 176,  274 => 174,  269 => 171,  267 => 170,  260 => 166,  244 => 152,  241 => 151,  235 => 150,  226 => 147,  221 => 146,  216 => 145,  211 => 144,  209 => 143,  206 => 142,  198 => 140,  190 => 135,  186 => 134,  181 => 132,  177 => 130,  175 => 129,  165 => 122,  153 => 113,  145 => 108,  129 => 95,  125 => 94,  121 => 93,  117 => 92,  24 => 1,);
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
/*     <head>*/
/*         <style>*/
/*             .btnJ{*/
/*                 -webkit-border-radius: 35;*/
/*                 -moz-border-radius: 35;*/
/*                 border-radius: 35px;*/
/*                 color: #ffffff;*/
/*                 font-size: 20px;*/
/*                 background: #00BCD4;*/
/*                 padding: 10px 20px 10px 20px;*/
/*                 border: solid #1f628d 0px;*/
/*                 text-decoration: none;*/
/*             }*/
/*             */
/*             */
/*             .btnJ:hover {*/
/*                 text-decoration: none;*/
/*             }*/
/*             */
/*             .navbar-nav.nav-justified > li{*/
/*                 float:none;*/
/*             }*/
/*             */
/*             #custom-search-input{*/
/*                 padding: 3px;*/
/*                 border: solid 1px #E4E4E4;*/
/*                 border-radius: 6px;*/
/*                 background-color: #fff;*/
/*             }*/
/*             */
/*             #custom-search-input input{*/
/*                 border: 0;*/
/*                 box-shadow: none;*/
/*             }*/
/*             */
/*             #custom-search-input button{*/
/*                 margin: 2px 0 0 0;*/
/*                 background: none;*/
/*                 box-shadow: none;*/
/*                 border: 0;*/
/*                 color: #666666;*/
/*                 padding: 0 8px 0 10px;*/
/*                 border-left: solid 1px #ccc;*/
/*             }*/
/*             */
/*             #custom-search-input button:hover{*/
/*                 border: 0;*/
/*                 box-shadow: none;*/
/*                 border-left: solid 1px #ccc;*/
/*             }*/
/*             */
/*             #custom-search-input .glyphicon-search{*/
/*                 font-size: 23px;*/
/*             }*/
/*         </style>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <!-- menu redondo-->*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link rel="stylesheet" type="text/css" href="/my_project/web/bundles/index/css/normalize.css" />*/
/*         <link rel="stylesheet" type="text/css" href="/my_project/web/bundles/index/css/demo.css" />*/
/*         <link rel="stylesheet" type="text/css" href="/my_project/web/bundles/index/css/component1.css" />*/
/*         <link rel="stylesheet" href="/my_project/web/bundles/index/css/normalizebuscar.css">*/
/*         <link rel="stylesheet" href="/my_project/web/bundles/index/css/estilobuscar.css">*/
/*         <script src="/my_project/web/bundles/index/js/modernizr-2.6.2.min.js"></script>*/
/*         <script src="/my_project/web/bundles/index/js/jquery-1.10.2.js"></script>*/
/*         <script src="/my_project/web/bundles/index/js/anuncioshow.js"></script>*/
/*         <!-- fin menu redondo -->*/
/*         <title>Pet’s, adoptalo y no compres</title>*/
/*         <meta name="description" content="Pets page">*/
/*         <meta name="author" content="Pets">*/
/*         <link href="/my_project/web/bundles/index/css/bootstrap.min.css" rel="stylesheet">*/
/*         <link href="/my_project/web/bundles/index/css/style.css" rel="stylesheet">*/
/*     </head>*/
/*     <body>*/
/*         <!-- menu redondo-->*/
/*         <div class="component">*/
/*             <!-- Start Nav Structure -->*/
/*             <button class="cn-button" id="cn-button">+</button>*/
/*             <!--<button class="cn-button visible-xs" id="cn-button" style="width:90px;">+</button>-->*/
/*             <div class="cn-wrapper" id="cn-wrapper" style="margin-bottom: 10px"> <!-- mover posicion de los botones del menu -->*/
/*                		<ul>*/
/* 					<li><a onclick="location.href='{{ path("paginas_sebusca") }}'" ><img src="/my_project/web/bundles/index/imgs/iconsMenu/buscarperdido.png" width="45px"></a></li>*/
/* 					<li><a onclick="location.href='{{ path("paginas_adopciones") }}'"><img src="/my_project/web/bundles/index/imgs/iconsMenu/adoptar.png" width="50px"></span></a></li>*/
/* 					<li><a onclick="location.href='{{ path("paginas_protectoras") }}'"><img src="/my_project/web/bundles/index/imgs/iconsMenu/refugio.png" width="45px"></a></li>*/
/* 					<li><a onclick="location.href='{{ path("paginas_camadas") }}'"><img src="/my_project/web/bundles/index/imgs/iconsMenu/camada.png" width="45px"></a></li>*/
/* 					<li><a href="/my_project/phpBB3/"><img src="/my_project/web/bundles/index/imgs/iconsMenu/forum.png" width="45px"></a></li>*/
/* 				</ul>*/
/*             </div>*/
/*             <div id="cn-overlay" class="cn-overlay"></div>*/
/*             <!-- End Nav Structure -->*/
/*         </div>*/
/*         <!-- fin menu redondo-->*/
/*         <div class="container-fluid">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height:95px;">*/
/* 						<div class="navbar-header" >*/
/* 							<a href="{{ path("ani") }}">*/
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
/* 								-moz-border-radius: 27px 27px 27px 27px; -webkit-border-radius: 27px 27px 27px 27px; margin-left:40%; margin-top:-130px;" onClick="location.href='{{ path("ani") }}'" value="publicar anuncio">*/
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
/*                     <div style="vertical-align:left; margin-top: 110px; margin-bottom: -60px; font-weight: bold;">*/
/*                       {% block guide %}{% endblock guide %}*/
/*                     </div>*/
/*                     <center> */
/*                         <div class="jumbotron" style="margin-top: 56px; margin-bottom: 50px; background-color:white">*/
/*                             {% block body %}*/
/* 							{% endblock body %}*/
/*                         </div>*/
/*                     </center>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div id="footer" style="position: fixed; bottom: 0; width: 100%; height: 50px; background-color: #00BCD4;text-align: right; line-height: 40px;">*/
/*             <div class="container" >*/
/*                 <p class="text-muted credit" ><font color="#FFFFFF"><a href="/my_project/web/app_dev.php/contactame" style="color: white; text-decoration: none">Contacto</a> | Pet's - Copyright © 2016</font></p>*/
/*             </div>*/
/*         </div>*/
/*         <script src="/my_project/web/bundles/paginasindex/js/jquery.min.js"></script>*/
/*         <script src="/my_project/web/bundles/paginasindex/js/bootstrap.min.js"></script>*/
/*         <script src="/my_project/web/bundles/paginasindex/js/scripts.js"></script>*/
/*         <!-- menu redondo-->*/
/*         <script src="/my_project/web/bundles/paginasindex/js/polyfills.js"></script>*/
/*         <script src="/my_project/web/bundles/paginasindex/js/demo1.js"></script>*/
/*         <!-- fin menu redondo -->   */
/*     </body>*/
/* </html>*/
