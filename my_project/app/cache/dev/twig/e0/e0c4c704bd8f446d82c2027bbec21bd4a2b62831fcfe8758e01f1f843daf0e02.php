<?php

/* animales/new.html.twig */
class __TwigTemplate_5d0e7927ea47dfd58f053e383973899d5165914460a87e057782557aba166ff1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "animales/new.html.twig", 1);
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
        $__internal_8a3f79511ee3866f7abc50dfb98364c2d2c3b54934bf7ca17a9176db546af13a = $this->env->getExtension("native_profiler");
        $__internal_8a3f79511ee3866f7abc50dfb98364c2d2c3b54934bf7ca17a9176db546af13a->enter($__internal_8a3f79511ee3866f7abc50dfb98364c2d2c3b54934bf7ca17a9176db546af13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "animales/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a3f79511ee3866f7abc50dfb98364c2d2c3b54934bf7ca17a9176db546af13a->leave($__internal_8a3f79511ee3866f7abc50dfb98364c2d2c3b54934bf7ca17a9176db546af13a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c15b95de6f23a95f1ee86a1e94d7ef6eeeb90f07e4ada40c0c4a36ebfd27f58d = $this->env->getExtension("native_profiler");
        $__internal_c15b95de6f23a95f1ee86a1e94d7ef6eeeb90f07e4ada40c0c4a36ebfd27f58d->enter($__internal_c15b95de6f23a95f1ee86a1e94d7ef6eeeb90f07e4ada40c0c4a36ebfd27f58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
         <div class=\"jumbotron\" style=\"margin-top: -70px; margin-bottom: 50px; width:100%; padding-top: 40px; background-color: white\">
             
              <div class=\"row\">
                  <div class=\"col-sm-6 col-md-offset-3\" align=\"left\">
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
                 <b>Titulo del anuncio: </b><input type=\"text\" class=\"form-control\" placeholder='...'>
      
                    <textarea class=\"form-control\" rows=\"6\" placeholder=\"Escribe el texto del anuncio\" style=\"height:200px\"></textarea>
                  </div>
              </div>
               <br>
               <div class=\"row\">
                    <div class=\"col-sm-6 col-md-offset-3\" align=\"left\"><br>
                    <font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Datos del animal</font><br><br>
                 ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "<br>
                 ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "raza", array()), 'row');
        echo "<br>
                 ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'row');
        echo "<br> 
                 ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'row');
        echo "<br>
                 ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nacimiento", array()), 'row');
        echo "<br>
                 ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pedigri", array()), 'row');
        echo "<br>
                
                
                ";
        // line 47
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
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
    <ul>
        <li>
            <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("animales_index");
        echo "\" hidden>Volver a la lista</a>
        </li>
    </ul>
";
        
        $__internal_c15b95de6f23a95f1ee86a1e94d7ef6eeeb90f07e4ada40c0c4a36ebfd27f58d->leave($__internal_c15b95de6f23a95f1ee86a1e94d7ef6eeeb90f07e4ada40c0c4a36ebfd27f58d_prof);

    }

    public function getTemplateName()
    {
        return "animales/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 72,  131 => 68,  107 => 47,  101 => 44,  97 => 43,  93 => 42,  89 => 41,  85 => 40,  81 => 39,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
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
/*          <div class="jumbotron" style="margin-top: -70px; margin-bottom: 50px; width:100%; padding-top: 40px; background-color: white">*/
/*              */
/*               <div class="row">*/
/*                   <div class="col-sm-6 col-md-offset-3" align="left">*/
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
/*                  <b>Titulo del anuncio: </b><input type="text" class="form-control" placeholder='...'>*/
/*       */
/*                     <textarea class="form-control" rows="6" placeholder="Escribe el texto del anuncio" style="height:200px"></textarea>*/
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
/*                 */
/*                 */
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
