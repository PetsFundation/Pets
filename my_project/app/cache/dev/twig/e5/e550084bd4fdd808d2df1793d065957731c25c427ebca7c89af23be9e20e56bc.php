<?php

/* PaginasIndexBundle:Default:Contenido_protectoras.html.twig */
class __TwigTemplate_6dd38d8c451685ed8194b8e1133e08235f072811fd26e43a9c9303d2a9ad3be8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PaginasIndexBundle:Default:index.html.twig", "PaginasIndexBundle:Default:Contenido_protectoras.html.twig", 1);
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
        $__internal_c0f3dd4bc6efe7c04dce212ac0ff69c00598ff5cd4f813f219c95c81d808256f = $this->env->getExtension("native_profiler");
        $__internal_c0f3dd4bc6efe7c04dce212ac0ff69c00598ff5cd4f813f219c95c81d808256f->enter($__internal_c0f3dd4bc6efe7c04dce212ac0ff69c00598ff5cd4f813f219c95c81d808256f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginasIndexBundle:Default:Contenido_protectoras.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0f3dd4bc6efe7c04dce212ac0ff69c00598ff5cd4f813f219c95c81d808256f->leave($__internal_c0f3dd4bc6efe7c04dce212ac0ff69c00598ff5cd4f813f219c95c81d808256f_prof);

    }

    // line 3
    public function block_guide($context, array $blocks = array())
    {
        $__internal_9bd23de34e50b950ead4fd43ff77ff21908c5f8e6f78f29c46a89f84fe3c5cdc = $this->env->getExtension("native_profiler");
        $__internal_9bd23de34e50b950ead4fd43ff77ff21908c5f8e6f78f29c46a89f84fe3c5cdc->enter($__internal_9bd23de34e50b950ead4fd43ff77ff21908c5f8e6f78f29c46a89f84fe3c5cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guide"));

        // line 4
        echo "  <a href=\"";
        echo $this->env->getExtension('routing')->getPath("index_homepage");
        echo "\">Inicio</a> > <a href=\"#\">Protectoras</a>
";
        
        $__internal_9bd23de34e50b950ead4fd43ff77ff21908c5f8e6f78f29c46a89f84fe3c5cdc->leave($__internal_9bd23de34e50b950ead4fd43ff77ff21908c5f8e6f78f29c46a89f84fe3c5cdc_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_84731272e45ea098e8e00aa157e6a6d5f4451e38bd60e5f8aa459572d2aba2b9 = $this->env->getExtension("native_profiler");
        $__internal_84731272e45ea098e8e00aa157e6a6d5f4451e38bd60e5f8aa459572d2aba2b9->enter($__internal_84731272e45ea098e8e00aa157e6a6d5f4451e38bd60e5f8aa459572d2aba2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            // line 48
            if ($this->getAttribute($context["anuncio"], "Pedigri", array())) {
                echo "Si";
            } else {
                echo "No";
            }
            echo "  <br>
                                        <b>- Propietario:</b>  ";
            // line 49
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
        // line 63
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
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anuncios"]) ? $context["anuncios"] : $this->getContext($context, "anuncios")));
        foreach ($context['_seq'] as $context["_key"] => $context["anuncio"]) {
            // line 88
            echo "            <tr>
                
                <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "titulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Categoria", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "anuncio_id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "animal_id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Tipo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Raza", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Sexo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Nacimiento", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Propietario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "tlf", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "Pedigri", array()), "html", null, true);
            echo "</td>
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anuncio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        </tbody>
    </table>
";
        
        $__internal_84731272e45ea098e8e00aa157e6a6d5f4451e38bd60e5f8aa459572d2aba2b9->leave($__internal_84731272e45ea098e8e00aa157e6a6d5f4451e38bd60e5f8aa459572d2aba2b9_prof);

    }

    public function getTemplateName()
    {
        return "PaginasIndexBundle:Default:Contenido_protectoras.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 106,  238 => 102,  234 => 101,  230 => 100,  226 => 99,  222 => 98,  218 => 97,  214 => 96,  210 => 95,  206 => 94,  202 => 93,  198 => 92,  194 => 91,  190 => 90,  186 => 88,  182 => 87,  156 => 63,  135 => 49,  127 => 48,  123 => 47,  119 => 46,  115 => 45,  111 => 44,  107 => 43,  103 => 42,  99 => 41,  93 => 38,  83 => 30,  79 => 29,  57 => 9,  51 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "PaginasIndexBundle:Default:index.html.twig" %}*/
/* */
/* {% block guide %}*/
/*   <a href="{{ path("index_homepage") }}">Inicio</a> > <a href="#">Protectoras</a>*/
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
/*                                        <b>- Descripción:</b>{{ anuncio.descripcion }}<br>*/
/*                                         <b>- Nombre:</b>{{ anuncio.Nombre }}<br>*/
/*                                         <b>- Raza:</b>  {{ anuncio.Raza }}<br>*/
/*                                         <b>- Tipo:</b>  {{ anuncio.Tipo }}<br>*/
/*                                         <b>- Sexo:</b>  {{ anuncio.Sexo }}<br>*/
/*                                         <b>- Teléfono:</b>  {{ anuncio.tlf }}<br>*/
/*                                         <b>- Nacimiento:</b>  {{ anuncio.Nacimiento }}<br>*/
/*                                         <b>- Pedrigri:</b>{% if anuncio.Pedigri  %}Si{% else %}No{% endif %}  <br>*/
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
