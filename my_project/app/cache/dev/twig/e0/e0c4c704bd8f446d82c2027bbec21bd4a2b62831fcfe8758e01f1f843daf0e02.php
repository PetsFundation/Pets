<?php

/* :animales:new.html.twig */
class __TwigTemplate_5d0e7927ea47dfd58f053e383973899d5165914460a87e057782557aba166ff1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":animales:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de3c73fc123168dfba74e6db20aacc79b487c46ec71b27eda685a14926e44f89 = $this->env->getExtension("native_profiler");
        $__internal_de3c73fc123168dfba74e6db20aacc79b487c46ec71b27eda685a14926e44f89->enter($__internal_de3c73fc123168dfba74e6db20aacc79b487c46ec71b27eda685a14926e44f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":animales:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de3c73fc123168dfba74e6db20aacc79b487c46ec71b27eda685a14926e44f89->leave($__internal_de3c73fc123168dfba74e6db20aacc79b487c46ec71b27eda685a14926e44f89_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_06d34746f55ac1667d2aa67c5c158a118249c7fe2b03cc444b9895ed86055524 = $this->env->getExtension("native_profiler");
        $__internal_06d34746f55ac1667d2aa67c5c158a118249c7fe2b03cc444b9895ed86055524->enter($__internal_06d34746f55ac1667d2aa67c5c158a118249c7fe2b03cc444b9895ed86055524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\" type=\"text/javascript\" language=\"javascript\"></script>
   
     
     <link href=\"../../bundles/animales/css/fileinput.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
        <script src=\"../../bundles/animales/js/fileinput.js\" type=\"text/javascript\"></script>
        <script src=\"../../bundles/animales/js/fileinput_locale_fr.js\" type=\"text/javascript\"></script>
        <script src=\"../../bundles/animales/js/fileinput_locale_es.js\" type=\"text/javascript\"></script>
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
         <div class=\"jumbotron\" style=\"margin-top: -50px; margin-bottom: 50px; width:100%; padding-top: 40px; background-color: white\">
             
              <div class=\"row\">
                  <div class=\"col-sm-6 col-md-offset-3\" align=\"left\">
                    <!--Esto debe conectar con anuncios-->
                  <font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">¿En qué categoria va tu anuncio?</font>
                  <select name=\"url\" class=\"form-control\">
                           <option value=\"0\">Elija la categoria del anuncio</option>
                           <option value=\"1\">Camadas</option> 
                           <option value=\"2\">Adopción</option> 
                           <option value=\"3\">Se busca</option>
                           <option value=\"4\">Protectoras</option> 
                    </select>
                  </div>
              </div>
               <br>
               <div class=\"row\">
                  <div class=\"col-sm-6 col-md-offset-3\" align=\"left\"><br>
                  <font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Detalles de tu anuncio</font><br><br>
                  <!--Esto debe conectar con anuncios-->
                 <b>Titulo del anuncio: </b><input type=\"text\" class=\"form-control\" placeholder='...'>
                 ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "<br>
                      <!--Esto debe conectar con anuncios-->
                      
                    <!-- <textarea class=\"form-control\" rows=\"6\" placeholder=\"Escribe el texto del anuncio\" style=\"height:200px\"></textarea>!-->
                  </div>
              </div>
               <br>
               <div class=\"row\">
                    <div class=\"col-sm-6 col-md-offset-3\" align=\"left\"><br>
                    <font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Datos del animal</font><br><br>
                 ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "<br>
                 ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "raza", array()), 'row');
        echo "<br>
                 ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'row');
        echo "<br> 
                 ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'row');
        echo "<br>
                 ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nacimiento", array()), 'row');
        echo "<br>
                 ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pedigri", array()), 'row');
        echo "<br>
                 
                <!--Esto debe conectar con propietario-->
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "propietario", array()), 'row');
        echo "<br>
                    </div>
               </div>
                <br>
               <div class=\"row\">
                    <div class=\"col-sm-6 col-md-offset-3\" align=\"left\"><br>
                     <font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Elija la imagen que se mostrará</font>
                 <input id=\"input-2\" name=\"input2[]\" type=\"file\" class=\"file\" multiple data-show-upload=\"false\" data-show-caption=\"true\">
                     <!--    http://plugins.krajee.com/file-input/demo -->
                    </div>
               </div>
             
                <br>
                
                
             <div class=\"row\" >
                 <div class=\"col-sm-6 col-md-offset-3\">
                     <br>
                       <input id=\"botonPublicar\" class=\"btn btn-info\" type=\"submit\" value=\"Publicar anuncio\" style='width:100%; height:40px; font-size:20px' />
                 </div>
             </div>
    ";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
    <ul>
        <li>
            <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("animales_index");
        echo "\" hidden>Volver a la lista</a>
        </li>
    </ul>
";
        
        $__internal_06d34746f55ac1667d2aa67c5c158a118249c7fe2b03cc444b9895ed86055524->leave($__internal_06d34746f55ac1667d2aa67c5c158a118249c7fe2b03cc444b9895ed86055524_prof);

    }

    public function getTemplateName()
    {
        return ":animales:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 76,  138 => 72,  114 => 51,  108 => 48,  104 => 47,  100 => 46,  96 => 45,  92 => 44,  88 => 43,  75 => 33,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript" language="javascript"></script>*/
/*    */
/*      */
/*      <link href="../../bundles/animales/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>*/
/*         <script src="../../bundles/animales/js/fileinput.js" type="text/javascript"></script>*/
/*         <script src="../../bundles/animales/js/fileinput_locale_fr.js" type="text/javascript"></script>*/
/*         <script src="../../bundles/animales/js/fileinput_locale_es.js" type="text/javascript"></script>*/
/*     {{ form_start(form) }}*/
/*          <div class="jumbotron" style="margin-top: -50px; margin-bottom: 50px; width:100%; padding-top: 40px; background-color: white">*/
/*              */
/*               <div class="row">*/
/*                   <div class="col-sm-6 col-md-offset-3" align="left">*/
/*                     <!--Esto debe conectar con anuncios-->*/
/*                   <font style="color: #00BCD4;font-weight: bold; font-size:23px;">¿En qué categoria va tu anuncio?</font>*/
/*                   <select name="url" class="form-control">*/
/*                            <option value="0">Elija la categoria del anuncio</option>*/
/*                            <option value="1">Camadas</option> */
/*                            <option value="2">Adopción</option> */
/*                            <option value="3">Se busca</option>*/
/*                            <option value="4">Protectoras</option> */
/*                     </select>*/
/*                   </div>*/
/*               </div>*/
/*                <br>*/
/*                <div class="row">*/
/*                   <div class="col-sm-6 col-md-offset-3" align="left"><br>*/
/*                   <font style="color: #00BCD4;font-weight: bold; font-size:23px;">Detalles de tu anuncio</font><br><br>*/
/*                   <!--Esto debe conectar con anuncios-->*/
/*                  <b>Titulo del anuncio: </b><input type="text" class="form-control" placeholder='...'>*/
/*                  {{form_row(form.descripcion, { 'attr': {'class': 'form-control'} }) }}<br>*/
/*                       <!--Esto debe conectar con anuncios-->*/
/*                       */
/*                     <!-- <textarea class="form-control" rows="6" placeholder="Escribe el texto del anuncio" style="height:200px"></textarea>!-->*/
/*                   </div>*/
/*               </div>*/
/*                <br>*/
/*                <div class="row">*/
/*                     <div class="col-sm-6 col-md-offset-3" align="left"><br>*/
/*                     <font style="color: #00BCD4;font-weight: bold; font-size:23px;">Datos del animal</font><br><br>*/
/*                  {{form_row(form.nombre) }}<br>*/
/*                  {{ form_row(form.raza) }}<br>*/
/*                  {{form_row(form.tipo) }}<br> */
/*                  {{form_row(form.sexo) }}<br>*/
/*                  {{form_row(form.nacimiento) }}<br>*/
/*                  {{form_row(form.pedigri) }}<br>*/
/*                  */
/*                 <!--Esto debe conectar con propietario-->*/
/*                 {{form_row(form.propietario) }}<br>*/
/*                     </div>*/
/*                </div>*/
/*                 <br>*/
/*                <div class="row">*/
/*                     <div class="col-sm-6 col-md-offset-3" align="left"><br>*/
/*                      <font style="color: #00BCD4;font-weight: bold; font-size:23px;">Elija la imagen que se mostrará</font>*/
/*                  <input id="input-2" name="input2[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">*/
/*                      <!--    http://plugins.krajee.com/file-input/demo -->*/
/*                     </div>*/
/*                </div>*/
/*              */
/*                 <br>*/
/*                 */
/*                 */
/*              <div class="row" >*/
/*                  <div class="col-sm-6 col-md-offset-3">*/
/*                      <br>*/
/*                        <input id="botonPublicar" class="btn btn-info" type="submit" value="Publicar anuncio" style='width:100%; height:40px; font-size:20px' />*/
/*                  </div>*/
/*              </div>*/
/*     {{ form_end(form) }}*/
/*     */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('animales_index') }}" hidden>Volver a la lista</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
