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
        $__internal_4a5be2674e7b11eb75ecd892324d292faae1eb3647c66ef3272f4e350755b32f = $this->env->getExtension("native_profiler");
        $__internal_4a5be2674e7b11eb75ecd892324d292faae1eb3647c66ef3272f4e350755b32f->enter($__internal_4a5be2674e7b11eb75ecd892324d292faae1eb3647c66ef3272f4e350755b32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:contenido_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a5be2674e7b11eb75ecd892324d292faae1eb3647c66ef3272f4e350755b32f->leave($__internal_4a5be2674e7b11eb75ecd892324d292faae1eb3647c66ef3272f4e350755b32f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_925c78856dbfd0a1d7c5dd7acdd4ae693cf31f64e1dcc4b6e8d3d1df13286fc6 = $this->env->getExtension("native_profiler");
        $__internal_925c78856dbfd0a1d7c5dd7acdd4ae693cf31f64e1dcc4b6e8d3d1df13286fc6->enter($__internal_925c78856dbfd0a1d7c5dd7acdd4ae693cf31f64e1dcc4b6e8d3d1df13286fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/buscaPerd.jpg);
\t\t\t\t\t  background-repeat:no-repeat;
\t\t\t\t\t  background-position:center; background-size: 330px ;\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/labrador.jpg);
\t\t\t\t\t  background-repeat:no-repeat;
\t\t\t\t\t  background-position:center;\" value=\"Se busca\">&nbsp;
\t\t\t\t\t<div class=\"visible-xs\"><br></div>
\t\t\t\t\t<input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/protectora.jpg);
\t\t\t\t\t  background-repeat:no-repeat;
\t\t\t\t\t  background-position:center; background-size: 300px ;\" value=\"Protectoras\">&nbsp;
\t\t\t\t\t<div class=\"visible-xs\"><br></div>
\t\t\t\t\t<input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/labrador.jpg);
\t\t\t\t\t  background-repeat:no-repeat;
\t\t\t\t\t  background-position:center;\" value=\"Camadas\">&nbsp;
\t\t\t\t\t<br><br>
\t\t\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("paginas_index_homepage");
        echo "\"><input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/adopttt.jpg);
\t\t\t\t\t  background-repeat:no-repeat;
\t\t\t\t\t  background-position:center; background-size: 310px ;\" value=\"Adopciones\"></a>&nbsp;
\t\t\t\t\t<div class=\"visible-xs\"><br></div>
\t\t\t\t\t<input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/donaciones.png);
\t\t\t\t\t  background-repeat:no-repeat;
\t\t\t\t\t  background-position:center; background-size: 300px ;\" value=\"Donaciones\">&nbsp;
\t\t\t\t\t<div class=\"visible-xs\"><br></div>
\t\t\t\t\t<input type=\"button\" class=\"btn botonMenuPaginaPrincipal\" style=\"background-image:url(/my_project/web/bundles/index/imgs/imgs/foro.jpg);
\t\t\t\t\t  background-repeat:no-repeat;
\t\t\t\t\t  background-position:center; background-size: 320px ;\" value=\"Foro\">
";
        
        $__internal_925c78856dbfd0a1d7c5dd7acdd4ae693cf31f64e1dcc4b6e8d3d1df13286fc6->leave($__internal_925c78856dbfd0a1d7c5dd7acdd4ae693cf31f64e1dcc4b6e8d3d1df13286fc6_prof);

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
        return array (  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "IndexBundle:Default:index.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* <input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/buscaPerd.jpg);*/
/* 					  background-repeat:no-repeat;*/
/* 					  background-position:center; background-size: 330px ;" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/labrador.jpg);*/
/* 					  background-repeat:no-repeat;*/
/* 					  background-position:center;" value="Se busca">&nbsp;*/
/* 					<div class="visible-xs"><br></div>*/
/* 					<input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/protectora.jpg);*/
/* 					  background-repeat:no-repeat;*/
/* 					  background-position:center; background-size: 300px ;" value="Protectoras">&nbsp;*/
/* 					<div class="visible-xs"><br></div>*/
/* 					<input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/labrador.jpg);*/
/* 					  background-repeat:no-repeat;*/
/* 					  background-position:center;" value="Camadas">&nbsp;*/
/* 					<br><br>*/
/* 					<a href="{{ path("paginas_index_homepage") }}"><input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/adopttt.jpg);*/
/* 					  background-repeat:no-repeat;*/
/* 					  background-position:center; background-size: 310px ;" value="Adopciones"></a>&nbsp;*/
/* 					<div class="visible-xs"><br></div>*/
/* 					<input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/donaciones.png);*/
/* 					  background-repeat:no-repeat;*/
/* 					  background-position:center; background-size: 300px ;" value="Donaciones">&nbsp;*/
/* 					<div class="visible-xs"><br></div>*/
/* 					<input type="button" class="btn botonMenuPaginaPrincipal" style="background-image:url(/my_project/web/bundles/index/imgs/imgs/foro.jpg);*/
/* 					  background-repeat:no-repeat;*/
/* 					  background-position:center; background-size: 320px ;" value="Foro">*/
/* {% endblock body %}*/
