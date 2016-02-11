<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_d06e866fd6f126699b0dad0998414d4dfbf51789e7da88a11fbdf561d5724c33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8be445b94a36257cfd7466d99b121de735121e5c1ffe339e091c667da260c24 = $this->env->getExtension("native_profiler");
        $__internal_c8be445b94a36257cfd7466d99b121de735121e5c1ffe339e091c667da260c24->enter($__internal_c8be445b94a36257cfd7466d99b121de735121e5c1ffe339e091c667da260c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<div>
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("role" => "form", "method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register form-horizontal")));
        echo "
 
         
      <div class=\"row\">
          <div class=\"col-sm-8 col-md-offset-2\" align=\"left\">
             <font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Registrarse</font><br><br>
                       
           <label>Nombre de usuario</label> 
            <div class=\"input-group\">
      <input id=\"fos_user_registration_form_username\" name=\"fos_user_registration_form[username]\" required=\"required\" maxlength=\"255\" pattern=\".{2,}\" class=\"form-control\" type=\"text\" placeholder=\"...\"><br>
      <span class=\"input-group-addon \"><span class=\"glyphicon glyphicon-user\"></span></span>    </div><br>
           
            <!--";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "-->
            <!--  ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'row');
        echo " -->
            <label>Contraseña</label>
             <div class=\"input-group\">
      <input id=\"fos_user_registration_form_plainPassword_first\" class=\"form-control\" name=\"fos_user_registration_form[plainPassword][first]\" required=\"required\" type=\"password\" placeholder=\"...\"><br>
      <span class=\"input-group-addon \"><span class=\"glyphicon glyphicon-asterisk\"></span></span>    </div><br>
      
      <label>Confirmar contraseña</label>
             <div class=\"input-group\">
      <input id=\"fos_user_registration_form_plainPassword_second\" class=\"form-control\" name=\"fos_user_registration_form[plainPassword][second]\" required=\"required\" type=\"password\" placeholder=\"...\">
      <span class=\"input-group-addon \"><span class=\"glyphicon glyphicon-asterisk\"></span></span>    </div><br>
      
      <label>E-mail</label>
             <div class=\"input-group\">
       <input id=\"fos_user_registration_form_email\" name=\"fos_user_registration_form[email]\" required=\"required\" class=\"form-control\" type=\"email\" placeholder=\"...\">
          
            <!--";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "--><br>
      <span class=\"input-group-addon \"><span class=\"glyphicon glyphicon-envelope\"></span></span>    </div><br>
      
         
        ";
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "        <div class=\"form-group\">
          <label class=\"control-label col-sm-2\" for=\"password\">Rol:</label>
          <br>
            <select style=\"\" id=\"fos_user_registration_form_roles\" name=\"fos_user_registration_form[roles][]\" required=\"required\" multiple=\"multiple\">
                <option value=\"ROLE_ADMIN\" >ADMINISTRADOR</option>
                <option value=\"ROLE_SUPERADMIN\" >SUPERADMINISTRADOR</option>
                <option value=\"ROLE_USER\"  selected=\"selected\">USUARIO</option>
            </select>
        </div>
        ";
        } else {
            // line 46
            echo "          <div class=\"col-sm-10\"> 
            <select style=\"\" id=\"fos_user_registration_form_roles\" name=\"fos_user_registration_form[roles][]\" required=\"required\" multiple=\"multiple\">
                <option value=\"ROLE_ADMIN\" >ADMINISTRADOR</option>
                <option value=\"ROLE_SUPERADMIN\" >SUPERADMINISTRADOR</option>
                <option value=\"ROLE_USER\"  selected=\"selected\">USUARIO</option>
            </select>
          </div>
      
      ";
        }
        // line 55
        echo "            
      
            <input id=\"botonPublicar\" class=\"btn btn-info\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Registrarse\" style='width:100%; height:40px; font-size:20px' />
      
                  </div>
              </div>
        
 


";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
        
        $__internal_c8be445b94a36257cfd7466d99b121de735121e5c1ffe339e091c667da260c24->leave($__internal_c8be445b94a36257cfd7466d99b121de735121e5c1ffe339e091c667da260c24_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 65,  94 => 55,  83 => 46,  71 => 36,  69 => 35,  62 => 31,  44 => 16,  40 => 15,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div>*/
/* {{ form_start(form, {'role': 'form','method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register form-horizontal'}}) }}*/
/*  */
/*          */
/*       <div class="row">*/
/*           <div class="col-sm-8 col-md-offset-2" align="left">*/
/*              <font style="color: #00BCD4;font-weight: bold; font-size:23px;">Registrarse</font><br><br>*/
/*                        */
/*            <label>Nombre de usuario</label> */
/*             <div class="input-group">*/
/*       <input id="fos_user_registration_form_username" name="fos_user_registration_form[username]" required="required" maxlength="255" pattern=".{2,}" class="form-control" type="text" placeholder="..."><br>*/
/*       <span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>    </div><br>*/
/*            */
/*             <!--{{ form_row(form.username, { 'attr': {'class': 'form-control'} }) }}-->*/
/*             <!--  {{ form_row(form.plainPassword) }} -->*/
/*             <label>Contraseña</label>*/
/*              <div class="input-group">*/
/*       <input id="fos_user_registration_form_plainPassword_first" class="form-control" name="fos_user_registration_form[plainPassword][first]" required="required" type="password" placeholder="..."><br>*/
/*       <span class="input-group-addon "><span class="glyphicon glyphicon-asterisk"></span></span>    </div><br>*/
/*       */
/*       <label>Confirmar contraseña</label>*/
/*              <div class="input-group">*/
/*       <input id="fos_user_registration_form_plainPassword_second" class="form-control" name="fos_user_registration_form[plainPassword][second]" required="required" type="password" placeholder="...">*/
/*       <span class="input-group-addon "><span class="glyphicon glyphicon-asterisk"></span></span>    </div><br>*/
/*       */
/*       <label>E-mail</label>*/
/*              <div class="input-group">*/
/*        <input id="fos_user_registration_form_email" name="fos_user_registration_form[email]" required="required" class="form-control" type="email" placeholder="...">*/
/*           */
/*             <!--{{ form_row(form.email, { 'attr': {'class': 'form-control'} }) }}--><br>*/
/*       <span class="input-group-addon "><span class="glyphicon glyphicon-envelope"></span></span>    </div><br>*/
/*       */
/*          */
/*         {% if is_granted('ROLE_ADMIN') %}*/
/*         <div class="form-group">*/
/*           <label class="control-label col-sm-2" for="password">Rol:</label>*/
/*           <br>*/
/*             <select style="" id="fos_user_registration_form_roles" name="fos_user_registration_form[roles][]" required="required" multiple="multiple">*/
/*                 <option value="ROLE_ADMIN" >ADMINISTRADOR</option>*/
/*                 <option value="ROLE_SUPERADMIN" >SUPERADMINISTRADOR</option>*/
/*                 <option value="ROLE_USER"  selected="selected">USUARIO</option>*/
/*             </select>*/
/*         </div>*/
/*         {% else %}*/
/*           <div class="col-sm-10"> */
/*             <select style="" id="fos_user_registration_form_roles" name="fos_user_registration_form[roles][]" required="required" multiple="multiple">*/
/*                 <option value="ROLE_ADMIN" >ADMINISTRADOR</option>*/
/*                 <option value="ROLE_SUPERADMIN" >SUPERADMINISTRADOR</option>*/
/*                 <option value="ROLE_USER"  selected="selected">USUARIO</option>*/
/*             </select>*/
/*           </div>*/
/*       */
/*       {% endif %}*/
/*             */
/*       */
/*             <input id="botonPublicar" class="btn btn-info" type="submit" id="_submit" name="_submit" value="Registrarse" style='width:100%; height:40px; font-size:20px' />*/
/*       */
/*                   </div>*/
/*               </div>*/
/*         */
/*  */
/* */
/* */
/* {{form_end(form) }}*/
/* </div>*/
