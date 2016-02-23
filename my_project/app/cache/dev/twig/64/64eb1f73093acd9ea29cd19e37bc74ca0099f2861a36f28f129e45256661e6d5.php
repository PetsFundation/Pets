<?php

/* IndexBundle:Default:contenido_index.html.twig */
class __TwigTemplate_fc18f4d236e31f18c4dfbbf3635e3f5fe86cb4147a490af83090ff7b4d6e1845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndexBundle:Default:index.html.twig", "IndexBundle:Default:contenido_index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IndexBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a6e0008b00c8d0f8526994f49df31bb2fafb4a495832b79122272d003c7b4ae = $this->env->getExtension("native_profiler");
        $__internal_3a6e0008b00c8d0f8526994f49df31bb2fafb4a495832b79122272d003c7b4ae->enter($__internal_3a6e0008b00c8d0f8526994f49df31bb2fafb4a495832b79122272d003c7b4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:contenido_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a6e0008b00c8d0f8526994f49df31bb2fafb4a495832b79122272d003c7b4ae->leave($__internal_3a6e0008b00c8d0f8526994f49df31bb2fafb4a495832b79122272d003c7b4ae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_394799c684b90cf1f54b16adf5e21628d1a1dfb0e11b3bca48ccadcb0d1da099 = $this->env->getExtension("native_profiler");
        $__internal_394799c684b90cf1f54b16adf5e21628d1a1dfb0e11b3bca48ccadcb0d1da099->enter($__internal_394799c684b90cf1f54b16adf5e21628d1a1dfb0e11b3bca48ccadcb0d1da099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<style>
\t\t#imagen {
\t\t\tdisplay: inline-block;
\t\t\tvertical-align: middle;
\t\t\t-webkit-transform: translateZ(0);
\t\t\ttransform: translateZ(0);
\t\t\tbox-shadow: 0 0 1px rgba(0, 0, 0, 0);
\t\t\t-webkit-backface-visibility: hidden;
\t\t\tbackface-visibility: hidden;
\t\t\t-moz-osx-font-smoothing: grayscale;
\t\t\t-webkit-transition-duration: 0.5s;
\t\t\ttransition-duration: 0.5s;
\t\t}
\t\t#imagen:hover, #imagen:focus, #imagen:active {
\t\t\t-webkit-transform: scale(1.1);
\t\t\ttransform: scale(1.1);
\t\t\t-webkit-transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
\t\t\ttransition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
\t\t}
\t\t
\t\t
\t\t#imagen {
\t\t\tdisplay: inline-block;
\t\t\tvertical-align: middle;
\t\t\t-webkit-transform: translateZ(0);
\t\t\ttransform: translateZ(0);
\t\t\tbox-shadow: 0 0 1px rgba(0, 0, 0, 0);
\t\t\t-webkit-backface-visibility: hidden;
\t\t\tbackface-visibility: hidden;
\t\t\t-moz-osx-font-smoothing: grayscale;
\t\t\t-webkit-transition-duration: 0.5s;
\t\t\ttransition-duration: 0.5s;
\t\t}
\t\t#imagen:hover, #imagen:focus, .#imagen:active {
\t\t\t-webkit-transform: scale(0.8);
\t\t\ttransform: scale(0.8);
\t\t\t-webkit-transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
\t\t\ttransition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
\t\t}
\t
\t
\t</style>
\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t\t<input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/buscaPerd.jpg);
\t\t\tbackground-repeat:no-repeat;
\t\t\tbackground-position:center; background-size: 330px ;\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/labrador.jpg);
\t\t\tbackground-repeat:no-repeat;
\t\t\tbackground-position:center;\" onclick=\"location.href='";
        // line 52
        echo $this->env->getExtension('routing')->getPath("paginas_sebusca");
        echo "'\" value=\"Se busca\" id=\"imagen\">
\t\t\t<label class=\"hidden-xs\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
\t\t\t<div class=\"visible-xs\"><br></div>
\t
\t\t\t<input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/protectora.jpg);
\t\t\tbackground-repeat:no-repeat;
\t\t\tbackground-position:center; background-size: 300px ;\" onclick=\"location.href='";
        // line 58
        echo $this->env->getExtension('routing')->getPath("paginas_protectoras");
        echo "'\" value=\"Protectoras\" id=\"imagen\">
\t\t\t<label class=\"hidden-xs\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
\t\t\t<div class=\"visible-xs\"><br></div>
\t
\t\t\t<input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/labrador.jpg);
\t\t\tbackground-repeat:no-repeat;
\t\t\tbackground-position:center;\" onclick=\"location.href='";
        // line 64
        echo $this->env->getExtension('routing')->getPath("paginas_camadas");
        echo "'\" value=\"Camadas\" id=\"imagen\">
\t\t\t<br><br>
\t\t</div>
\t</div>
\t
\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t\t<a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("paginas_adopciones");
        echo "\"><input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/adopttt.jpg);
\t\t\tbackground-repeat:no-repeat;
\t\t\tbackground-position:center; background-size: 310px ;\" onclick=\"location.href='";
        // line 73
        echo $this->env->getExtension('routing')->getPath("paginas_adopciones");
        echo "'\" value=\"Adopciones\" id=\"imagen\"></a>
\t\t\t<label class=\"hidden-xs\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
\t\t\t<div class=\"visible-xs\"><br></div>
\t\t\t<input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/foro.jpg);
\t\t\tbackground-repeat:no-repeat;
\t\t\tbackground-position:center; background-size: 320px ;\" value=\"Foro\" id=\"imagen\" onclick=\"location.href='/my_project/phpBB3/'\">
\t\t\t<label class=\"hidden-xs\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
\t\t\t<div class=\"visible-xs\"><br></div>
\t\t\t<input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/donaciones.png);
\t\t\tbackground-repeat:no-repeat;
\t\t\tbackground-position:center; background-size: 300px ;\" onclick=\"location.href='";
        // line 83
        echo $this->env->getExtension('routing')->getPath("donaciones_homepage");
        echo "'\" value=\"Donaciones\" id=\"imagen\">
\t\t</div>
\t</div>
";
        
        $__internal_394799c684b90cf1f54b16adf5e21628d1a1dfb0e11b3bca48ccadcb0d1da099->leave($__internal_394799c684b90cf1f54b16adf5e21628d1a1dfb0e11b3bca48ccadcb0d1da099_prof);

    }

    public function getTemplateName()
    {
        return "IndexBundle:Default:contenido_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 83,  123 => 73,  118 => 71,  108 => 64,  99 => 58,  90 => 52,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "IndexBundle:Default:index.html.twig" %}*/
/* */
/* {% block body %}*/
/* 	<style>*/
/* 		#imagen {*/
/* 			display: inline-block;*/
/* 			vertical-align: middle;*/
/* 			-webkit-transform: translateZ(0);*/
/* 			transform: translateZ(0);*/
/* 			box-shadow: 0 0 1px rgba(0, 0, 0, 0);*/
/* 			-webkit-backface-visibility: hidden;*/
/* 			backface-visibility: hidden;*/
/* 			-moz-osx-font-smoothing: grayscale;*/
/* 			-webkit-transition-duration: 0.5s;*/
/* 			transition-duration: 0.5s;*/
/* 		}*/
/* 		#imagen:hover, #imagen:focus, #imagen:active {*/
/* 			-webkit-transform: scale(1.1);*/
/* 			transform: scale(1.1);*/
/* 			-webkit-transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);*/
/* 			transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);*/
/* 		}*/
/* 		*/
/* 		*/
/* 		#imagen {*/
/* 			display: inline-block;*/
/* 			vertical-align: middle;*/
/* 			-webkit-transform: translateZ(0);*/
/* 			transform: translateZ(0);*/
/* 			box-shadow: 0 0 1px rgba(0, 0, 0, 0);*/
/* 			-webkit-backface-visibility: hidden;*/
/* 			backface-visibility: hidden;*/
/* 			-moz-osx-font-smoothing: grayscale;*/
/* 			-webkit-transition-duration: 0.5s;*/
/* 			transition-duration: 0.5s;*/
/* 		}*/
/* 		#imagen:hover, #imagen:focus, .#imagen:active {*/
/* 			-webkit-transform: scale(0.8);*/
/* 			transform: scale(0.8);*/
/* 			-webkit-transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);*/
/* 			transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);*/
/* 		}*/
/* 	*/
/* 	*/
/* 	</style>*/
/* 	<div class="row">*/
/* 		<div class="col-sm-12">*/
/* 			<input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/buscaPerd.jpg);*/
/* 			background-repeat:no-repeat;*/
/* 			background-position:center; background-size: 330px ;" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/labrador.jpg);*/
/* 			background-repeat:no-repeat;*/
/* 			background-position:center;" onclick="location.href='{{ path("paginas_sebusca") }}'" value="Se busca" id="imagen">*/
/* 			<label class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>*/
/* 			<div class="visible-xs"><br></div>*/
/* 	*/
/* 			<input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/protectora.jpg);*/
/* 			background-repeat:no-repeat;*/
/* 			background-position:center; background-size: 300px ;" onclick="location.href='{{ path("paginas_protectoras") }}'" value="Protectoras" id="imagen">*/
/* 			<label class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>*/
/* 			<div class="visible-xs"><br></div>*/
/* 	*/
/* 			<input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/labrador.jpg);*/
/* 			background-repeat:no-repeat;*/
/* 			background-position:center;" onclick="location.href='{{ path("paginas_camadas") }}'" value="Camadas" id="imagen">*/
/* 			<br><br>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="row">*/
/* 		<div class="col-sm-12">*/
/* 			<a href="{{ path("paginas_adopciones") }}"><input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/adopttt.jpg);*/
/* 			background-repeat:no-repeat;*/
/* 			background-position:center; background-size: 310px ;" onclick="location.href='{{ path("paginas_adopciones") }}'" value="Adopciones" id="imagen"></a>*/
/* 			<label class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>*/
/* 			<div class="visible-xs"><br></div>*/
/* 			<input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/foro.jpg);*/
/* 			background-repeat:no-repeat;*/
/* 			background-position:center; background-size: 320px ;" value="Foro" id="imagen" onclick="location.href='/my_project/phpBB3/'">*/
/* 			<label class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>*/
/* 			<div class="visible-xs"><br></div>*/
/* 			<input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/donaciones.png);*/
/* 			background-repeat:no-repeat;*/
/* 			background-position:center; background-size: 300px ;" onclick="location.href='{{ path("donaciones_homepage") }}'" value="Donaciones" id="imagen">*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock body %}*/
