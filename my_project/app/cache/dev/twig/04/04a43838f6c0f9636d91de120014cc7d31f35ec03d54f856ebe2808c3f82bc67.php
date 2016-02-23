<?php

/* anuncios/new.html.twig */
class __TwigTemplate_1532fcff03238be61b43028854b13630c5f163789d6b895f12a7db058ce10853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "anuncios/new.html.twig", 1);
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
        $__internal_b365ddade1db306424e8015ec56d3ce986a81e9c919be942477d217f246744e6 = $this->env->getExtension("native_profiler");
        $__internal_b365ddade1db306424e8015ec56d3ce986a81e9c919be942477d217f246744e6->enter($__internal_b365ddade1db306424e8015ec56d3ce986a81e9c919be942477d217f246744e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anuncios/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b365ddade1db306424e8015ec56d3ce986a81e9c919be942477d217f246744e6->leave($__internal_b365ddade1db306424e8015ec56d3ce986a81e9c919be942477d217f246744e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba13df0112b5e7e8a05cdd1d29573625518e606ed90d3ee097252ef53c07b19e = $this->env->getExtension("native_profiler");
        $__internal_ba13df0112b5e7e8a05cdd1d29573625518e606ed90d3ee097252ef53c07b19e->enter($__internal_ba13df0112b5e7e8a05cdd1d29573625518e606ed90d3ee097252ef53c07b19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Anuncios creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
         <div class=\"jumbotron\" style=\"margin-top: -110px; margin-bottom: 50px; width:100%; padding-top: 40px; background-color: white\">
             
              <div class=\"row\">
                  <div class=\"col-sm-6 col-md-offset-3\" align=\"left\">
                    <!--Esto debe conectar con anuncios-->
                  <font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">¿En qué categoria va tu anuncio?</font>
                   ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                   
                  </div>
              </div>
               <br>
               <div class=\"row\">
                  <div class=\"col-sm-6 col-md-offset-3\" align=\"left\"><br>
                  <font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Detalles de tu anuncio</font><br><br>
                  <!--Esto debe conectar con anuncios-->
                 ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "...")));
        echo "<br>
                 
                 ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "animal", array()), "descripcion", array()), 'row', array("attr" => array("class" => "form-control", "rows" => "5", "placeholder" => "...")));
        echo "<br>
                 ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "animal", array()), "propietario", array()), 'row');
        echo "<br>
                 
                 ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "animal", array()), "tlf", array()), 'row', array("attr" => array("class" => "form-control", "maxlength" => "9", "placeholder" => "...")));
        echo "
                 
                      <!--Esto debe conectar con anuncios-->
                    <!--<textarea class=\"form-control\" rows=\"6\" placeholder=\"Escribe el texto del anuncio\" style=\"height:200px\"></textarea>-->
                  </div>
              </div>
               <br>
               <div class=\"row\">
                    <div class=\"col-sm-6 col-md-offset-3\" align=\"left\"><br>
                    <font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Datos del animal</font><br><br>
                     
                 ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "animal", array()), "nombre", array()), 'row');
        echo "<br>
                 ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "animal", array()), "raza", array()), 'row');
        echo "<br>
                 ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "animal", array()), "tipo", array()), 'row');
        echo "<br>
                 ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "animal", array()), "sexo", array()), 'row');
        echo "<br>
                 ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "animal", array()), "nacimiento", array()), 'row');
        echo "<br>
                 ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "animal", array()), "pedigri", array()), 'row');
        echo "<br>
                 ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "animal", array()), "img", array()), 'row');
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
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_ba13df0112b5e7e8a05cdd1d29573625518e606ed90d3ee097252ef53c07b19e->leave($__internal_ba13df0112b5e7e8a05cdd1d29573625518e606ed90d3ee097252ef53c07b19e_prof);

    }

    public function getTemplateName()
    {
        return "anuncios/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 66,  118 => 44,  114 => 43,  110 => 42,  106 => 41,  102 => 40,  98 => 39,  94 => 38,  80 => 27,  75 => 25,  71 => 24,  66 => 22,  54 => 13,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Anuncios creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*          <div class="jumbotron" style="margin-top: -110px; margin-bottom: 50px; width:100%; padding-top: 40px; background-color: white">*/
/*              */
/*               <div class="row">*/
/*                   <div class="col-sm-6 col-md-offset-3" align="left">*/
/*                     <!--Esto debe conectar con anuncios-->*/
/*                   <font style="color: #00BCD4;font-weight: bold; font-size:23px;">¿En qué categoria va tu anuncio?</font>*/
/*                    {{form_row(form.categoria, { 'attr': {'class': 'form-control'} }) }}*/
/*                    */
/*                   </div>*/
/*               </div>*/
/*                <br>*/
/*                <div class="row">*/
/*                   <div class="col-sm-6 col-md-offset-3" align="left"><br>*/
/*                   <font style="color: #00BCD4;font-weight: bold; font-size:23px;">Detalles de tu anuncio</font><br><br>*/
/*                   <!--Esto debe conectar con anuncios-->*/
/*                  {{form_row(form.titulo, { 'attr': {'class': 'form-control','placeholder':'...'} }) }}<br>*/
/*                  */
/*                  {{form_row(form.animal.descripcion, { 'attr': {'class': 'form-control','rows':'5','placeholder':'...'} }) }}<br>*/
/*                  {{form_row(form.animal.propietario) }}<br>*/
/*                  */
/*                  {{form_row(form.animal.tlf, { 'attr': {'class': 'form-control','maxlength':'9','placeholder':'...'} }) }}*/
/*                  */
/*                       <!--Esto debe conectar con anuncios-->*/
/*                     <!--<textarea class="form-control" rows="6" placeholder="Escribe el texto del anuncio" style="height:200px"></textarea>-->*/
/*                   </div>*/
/*               </div>*/
/*                <br>*/
/*                <div class="row">*/
/*                     <div class="col-sm-6 col-md-offset-3" align="left"><br>*/
/*                     <font style="color: #00BCD4;font-weight: bold; font-size:23px;">Datos del animal</font><br><br>*/
/*                      */
/*                  {{form_row(form.animal.nombre) }}<br>*/
/*                  {{form_row(form.animal.raza) }}<br>*/
/*                  {{form_row(form.animal.tipo) }}<br>*/
/*                  {{form_row(form.animal.sexo) }}<br>*/
/*                  {{form_row(form.animal.nacimiento) }}<br>*/
/*                  {{form_row(form.animal.pedigri) }}<br>*/
/*                  {{form_row(form.animal.img) }}<br>*/
/*                  */
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
/* */
/* {% endblock %}*/
/* */
