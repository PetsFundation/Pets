<?php

/* PaginasIndexBundle:Default:Contenido_camadas.html.twig */
class __TwigTemplate_c5eca6f358181e2527fa1b90e99de9ea1a0aa962dc32709e21ac032c02c49c6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PaginasIndexBundle:Default:index.html.twig", "PaginasIndexBundle:Default:Contenido_camadas.html.twig", 1);
        $this->blocks = array(
            'guide' => array($this, 'block_guide'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PaginasIndexBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffba579d3051899ffa879819056c0cefffe36e5a9c2da1e14c2f84c82cc17059 = $this->env->getExtension("native_profiler");
        $__internal_ffba579d3051899ffa879819056c0cefffe36e5a9c2da1e14c2f84c82cc17059->enter($__internal_ffba579d3051899ffa879819056c0cefffe36e5a9c2da1e14c2f84c82cc17059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasIndexBundle:Default:Contenido_camadas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffba579d3051899ffa879819056c0cefffe36e5a9c2da1e14c2f84c82cc17059->leave($__internal_ffba579d3051899ffa879819056c0cefffe36e5a9c2da1e14c2f84c82cc17059_prof);

    }

    // line 3
    public function block_guide($context, array $blocks = array())
    {
        $__internal_4bf1ac56a58f7391a22af02ae4116162b6fd0a6977ccf72ab423c90072dc3b15 = $this->env->getExtension("native_profiler");
        $__internal_4bf1ac56a58f7391a22af02ae4116162b6fd0a6977ccf72ab423c90072dc3b15->enter($__internal_4bf1ac56a58f7391a22af02ae4116162b6fd0a6977ccf72ab423c90072dc3b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guide"));

        // line 4
        echo "  <a href=\"";
        echo $this->env->getExtension('routing')->getPath("index_homepage");
        echo "\">Inicio</a> > <a href=\"#\">Camadas</a>
";
        
        $__internal_4bf1ac56a58f7391a22af02ae4116162b6fd0a6977ccf72ab423c90072dc3b15->leave($__internal_4bf1ac56a58f7391a22af02ae4116162b6fd0a6977ccf72ab423c90072dc3b15_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e1f539077b0456d0ed52ca0b4d52cda45e0dc8bf0be66e2307390ca6997b333 = $this->env->getExtension("native_profiler");
        $__internal_4e1f539077b0456d0ed52ca0b4d52cda45e0dc8bf0be66e2307390ca6997b333->enter($__internal_4e1f539077b0456d0ed52ca0b4d52cda45e0dc8bf0be66e2307390ca6997b333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

<!-- inicio buscador -->
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-md-7 col-md-offset-2\">
                                        <div id=\"custom-search-input\">
                                            <div class=\"input-group col-md-12\">
                                                <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Buscar animal\" />
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-info btn-lg\" type=\"button\">
                                                        <i class=\"glyphicon glyphicon-search\"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><br><!-- fin buscador -->
                            <center> 
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anuncios"]) ? $context["anuncios"] : $this->getContext($context, "anuncios")));
        foreach ($context['_seq'] as $context["_key"] => $context["anuncio"]) {
            // line 30
            echo "                                <div class=\"row\" > <!-- anuncio -->
                                    <hr style=\"display: block;height: 1px;border: 0;border-top: 2px solid #ccc;margin: 1em 0;padding: 0; \">
           
           
                                    <div class=\"col-sm-4 mostrarDescripcion \"><!--  col-md-offset-2 -->
                                        <img src=\"/my_project/web/bundles/paginasindex/imgs/camadasboxers.jpg\" class=\"img-rounded\" style=\"width:50%\">
                                    </div>
                                    <div class=\"col-sm-3\" >
                                        <img src=\"/my_project/web/bundles/index/imgs/add-notes.png\" style=\"width: 30px\"/><b>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "titulo", array()), "html", null, true);
            echo "</b>
                                    </div>
                                    <div class=\"col-sm-5 \" align=\"left\" >
                                        <b>- Descripción:</b>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "descripcion", array()), "html", null, true);
            echo "<br>
                                        <b>- Nombre:</b>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Nombre", array()), "html", null, true);
            echo "<br>
                                        <b>- Raza:</b>  ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Raza", array()), "html", null, true);
            echo "<br>
                                        <b>- Tipo:</b>  ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Tipo", array()), "html", null, true);
            echo "<br>
                                        <b>- Sexo:</b>  ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Sexo", array()), "html", null, true);
            echo "<br>
                                        <b>- Teléfono:</b>  ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "tlf", array()), "html", null, true);
            echo "<br>
                                        <b>- Nacimiento:</b>  ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Nacimiento", array()), "html", null, true);
            echo "<br>
                                        
                                        <b>- Pedrigri:</b>";
            // line 49
            if ($this->getAttribute($context["anuncio"], "Pedigri", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "  <br>
                                        <b>- Propietario:</b>  ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Propietario", array()), "html", null, true);
            echo "<br>
                                    </div>
                                </div>
                                <hr style=\"display: block;
                                
                                
                        
                                
                                
                                height: 1px;
                                border: 0;
                                border-top: 2px solid #ccc;
                                margin: 1em 0;
                                padding: 0; \"><br><!-- fin anuncio -->
                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anuncio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo " 
                            </center>

 <table class=\"table\">
        <thead>
            <tr>
               
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Descripcion</th>
                <th>Idpropietario</th>
                <th>Idanimal</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Raza</th>
                <th>Sexo</th>
                <th>Nacimiento</th>
                <th>Propietario</th>
                <th>Telefono</th>
                <th>Pedigri</th>
            </tr>
        </thead>
        <tbody>
           
        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anuncios"]) ? $context["anuncios"] : $this->getContext($context, "anuncios")));
        foreach ($context['_seq'] as $context["_key"] => $context["anuncio"]) {
            // line 89
            echo "            <tr>
                
                <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "titulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Categoria", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "anuncio_id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "animal_id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Tipo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Raza", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Sexo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Nacimiento", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Propietario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "tlf", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Pedigri", array()), "html", null, true);
            echo "</td>
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anuncio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "        </tbody>
    </table>
";
        
        $__internal_4e1f539077b0456d0ed52ca0b4d52cda45e0dc8bf0be66e2307390ca6997b333->leave($__internal_4e1f539077b0456d0ed52ca0b4d52cda45e0dc8bf0be66e2307390ca6997b333_prof);

    }

    public function getTemplateName()
    {
        return "PaginasIndexBundle:Default:Contenido_camadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 107,  239 => 103,  235 => 102,  231 => 101,  227 => 100,  223 => 99,  219 => 98,  215 => 97,  211 => 96,  207 => 95,  203 => 94,  199 => 93,  195 => 92,  191 => 91,  187 => 89,  183 => 88,  157 => 64,  136 => 50,  128 => 49,  123 => 47,  119 => 46,  115 => 45,  111 => 44,  107 => 43,  103 => 42,  99 => 41,  93 => 38,  83 => 30,  79 => 29,  57 => 9,  51 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "PaginasIndexBundle:Default:index.html.twig" %}*/
/* */
/* {% block guide %}*/
/*   <a href="{{ path("index_homepage") }}">Inicio</a> > <a href="#">Camadas</a>*/
/* {% endblock guide %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* */
/* <!-- inicio buscador -->*/
/*                             <div class="container">*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-7 col-md-offset-2">*/
/*                                         <div id="custom-search-input">*/
/*                                             <div class="input-group col-md-12">*/
/*                                                 <input type="text" class="form-control input-lg" placeholder="Buscar animal" />*/
/*                                                 <span class="input-group-btn">*/
/*                                                     <button class="btn btn-info btn-lg" type="button">*/
/*                                                         <i class="glyphicon glyphicon-search"></i>*/
/*                                                     </button>*/
/*                                                 </span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div><br><!-- fin buscador -->*/
/*                             <center> */
/*                     {% for anuncio in anuncios %}*/
/*                                 <div class="row" > <!-- anuncio -->*/
/*                                     <hr style="display: block;height: 1px;border: 0;border-top: 2px solid #ccc;margin: 1em 0;padding: 0; ">*/
/*            */
/*            */
/*                                     <div class="col-sm-4 mostrarDescripcion "><!--  col-md-offset-2 -->*/
/*                                         <img src="/my_project/web/bundles/paginasindex/imgs/camadasboxers.jpg" class="img-rounded" style="width:50%">*/
/*                                     </div>*/
/*                                     <div class="col-sm-3" >*/
/*                                         <img src="/my_project/web/bundles/index/imgs/add-notes.png" style="width: 30px"/><b>{{ anuncio.titulo }}</b>*/
/*                                     </div>*/
/*                                     <div class="col-sm-5 " align="left" >*/
/*                                         <b>- Descripción:</b>{{ anuncio.descripcion }}<br>*/
/*                                         <b>- Nombre:</b>{{ anuncio.Nombre }}<br>*/
/*                                         <b>- Raza:</b>  {{ anuncio.Raza }}<br>*/
/*                                         <b>- Tipo:</b>  {{ anuncio.Tipo }}<br>*/
/*                                         <b>- Sexo:</b>  {{ anuncio.Sexo }}<br>*/
/*                                         <b>- Teléfono:</b>  {{ anuncio.tlf }}<br>*/
/*                                         <b>- Nacimiento:</b>  {{ anuncio.Nacimiento }}<br>*/
/*                                         */
/*                                         <b>- Pedrigri:</b>{% if anuncio.Pedigri  %}Yes{% else %}No{% endif %}  <br>*/
/*                                         <b>- Propietario:</b>  {{ anuncio.Propietario }}<br>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <hr style="display: block;*/
/*                                 */
/*                                 */
/*                         */
/*                                 */
/*                                 */
/*                                 height: 1px;*/
/*                                 border: 0;*/
/*                                 border-top: 2px solid #ccc;*/
/*                                 margin: 1em 0;*/
/*                                 padding: 0; "><br><!-- fin anuncio -->*/
/*                                    {% endfor %} */
/*                             </center>*/
/* */
/*  <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                */
/*                 <th>Titulo</th>*/
/*                 <th>Categoria</th>*/
/*                 <th>Descripcion</th>*/
/*                 <th>Idpropietario</th>*/
/*                 <th>Idanimal</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Tipo</th>*/
/*                 <th>Raza</th>*/
/*                 <th>Sexo</th>*/
/*                 <th>Nacimiento</th>*/
/*                 <th>Propietario</th>*/
/*                 <th>Telefono</th>*/
/*                 <th>Pedigri</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*            */
/*         {% for anuncio in anuncios %}*/
/*             <tr>*/
/*                 */
/*                 <td>{{ anuncio.titulo }}</td>*/
/*                 <td>{{ anuncio.Categoria }}</td>*/
/*                 <td>{{ anuncio.descripcion }}</td>*/
/*                 <td>{{ anuncio.anuncio_id }}</td>*/
/*                 <td>{{ anuncio.animal_id }}</td>*/
/*                 <td>{{ anuncio.Nombre }}</td>*/
/*                 <td>{{ anuncio.Tipo }}</td>*/
/*                 <td>{{ anuncio.Raza }}</td>*/
/*                 <td>{{ anuncio.Sexo }}</td>*/
/*                 <td>{{ anuncio.Nacimiento }}</td>*/
/*                 <td>{{ anuncio.Propietario }}</td>*/
/*                 <td>{{ anuncio.tlf }}</td>*/
/*                 <td>{{ anuncio.Pedigri }}</td>*/
/*                 */
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock body %}*/
/*       */
