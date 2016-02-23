<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8dc4f5c5d4620b8bc88cabcb1510ad9b515ac8c149e056e7214f92fdd92e503a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d73710b7c556296c5275e5a0110dad02d6f90da9601150630d52cc15a16f9b3 = $this->env->getExtension("native_profiler");
        $__internal_6d73710b7c556296c5275e5a0110dad02d6f90da9601150630d52cc15a16f9b3->enter($__internal_6d73710b7c556296c5275e5a0110dad02d6f90da9601150630d52cc15a16f9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d73710b7c556296c5275e5a0110dad02d6f90da9601150630d52cc15a16f9b3->leave($__internal_6d73710b7c556296c5275e5a0110dad02d6f90da9601150630d52cc15a16f9b3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d13c61825cbe3e107967a67d472e3b98277288ca48e0d3bc9f26c8aae98fbca = $this->env->getExtension("native_profiler");
        $__internal_4d13c61825cbe3e107967a67d472e3b98277288ca48e0d3bc9f26c8aae98fbca->enter($__internal_4d13c61825cbe3e107967a67d472e3b98277288ca48e0d3bc9f26c8aae98fbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
\t\t
            
            
        <div class=\"row\">
            <div class=\"col-sm-4 col-md-offset-4\" align=\"left\">
               <font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Inicio de sesión </font><br><br>
                 
                 
                 <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
   
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        
    <label for=\"username\">";
        // line 22
        echo "Nombre de usuario";
        echo "</label>
    \t <div class=\"input-group\">
<input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"...\"/>
<span class=\"input-group-addon \"><span class=\"glyphicon glyphicon-user\"></span></span>    </div><br>


<label for=\"password\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contraseña", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
<div class=\"input-group\">
<input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" placeholder=\"...\"/>
<span class=\"input-group-addon \"><span class=\"glyphicon glyphicon-asterisk\"></span></span>   
</div>
<br>
<label for=\"remember_me\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Recordar", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" style=\"/* All browsers except webkit*/
  transform: scale(1.5);

  /* Webkit browsers*/
  -webkit-transform: scale(1.4);\"/>  
 <br><br>
<input id=\"botonPublicar\" class=\"btn btn-info\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Iniciar sesión", array(), "FOSUserBundle"), "html", null, true);
        echo "\" style='width:100%; height:40px; font-size:20px' />
            
</form><br><br><br><br>
               <font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">¿Aún no te has registrado?</font><br><br>  
                Registrarse es gratis y lo será siempre<br><br>
               <input id=\"botonPublicar\" class=\"btn btn-info\" onclick=\"location.href='";
        // line 46
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "';\"  name=\"_submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Registrarse", array(), "FOSUserBundle"), "html", null, true);
        echo "\" style='width:100%; height:40px; font-size:20px' />
                 
            </div>
        </div>
<br><br><br><br><br>

";
        
        $__internal_4d13c61825cbe3e107967a67d472e3b98277288ca48e0d3bc9f26c8aae98fbca->leave($__internal_4d13c61825cbe3e107967a67d472e3b98277288ca48e0d3bc9f26c8aae98fbca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 46,  100 => 41,  90 => 34,  81 => 28,  74 => 24,  69 => 22,  64 => 20,  59 => 18,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* 		*/
/*             */
/*             */
/*         <div class="row">*/
/*             <div class="col-sm-4 col-md-offset-4" align="left">*/
/*                <font style="color: #00BCD4;font-weight: bold; font-size:23px;">Inicio de sesión </font><br><br>*/
/*                  */
/*                  */
/*                  <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*    */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*         */
/*     <label for="username">{{ 'Nombre de usuario' }}</label>*/
/*     	 <div class="input-group">*/
/* <input type="text" id="username" class="form-control" name="_username" value="{{ last_username }}" required="required" placeholder="..."/>*/
/* <span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>    </div><br>*/
/* */
/* */
/* <label for="password">{{ 'Contraseña'|trans }}</label>*/
/* <div class="input-group">*/
/* <input type="password" id="password" class="form-control" name="_password" required="required" placeholder="..."/>*/
/* <span class="input-group-addon "><span class="glyphicon glyphicon-asterisk"></span></span>   */
/* </div>*/
/* <br>*/
/* <label for="remember_me">{{ 'Recordar'|trans }}</label>*/
/* <input type="checkbox" id="remember_me" name="_remember_me" value="on" style="/* All browsers except webkit*//* */
/*   transform: scale(1.5);*/
/* */
/*   /* Webkit browsers*//* */
/*   -webkit-transform: scale(1.4);"/>  */
/*  <br><br>*/
/* <input id="botonPublicar" class="btn btn-info" type="submit" id="_submit" name="_submit" value="{{ 'Iniciar sesión'|trans }}" style='width:100%; height:40px; font-size:20px' />*/
/*             */
/* </form><br><br><br><br>*/
/*                <font style="color: #00BCD4;font-weight: bold; font-size:23px;">¿Aún no te has registrado?</font><br><br>  */
/*                 Registrarse es gratis y lo será siempre<br><br>*/
/*                <input id="botonPublicar" class="btn btn-info" onclick="location.href='{{ path("fos_user_registration_register") }}';"  name="_submit" value="{{ 'Registrarse'|trans }}" style='width:100%; height:40px; font-size:20px' />*/
/*                  */
/*             </div>*/
/*         </div>*/
/* <br><br><br><br><br>*/
/* */
/* {% endblock fos_user_content %}*/
/* */
