<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_b07e6fb530232a9febc3307c527f678bbfc769d63ccf48db1de677024b0e56a6 extends Twig_Template
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
        $__internal_3e16b22ebe3214f412c7f72f4b64b247f086f8129db47d81fd9392f544779961 = $this->env->getExtension("native_profiler");
        $__internal_3e16b22ebe3214f412c7f72f4b64b247f086f8129db47d81fd9392f544779961->enter($__internal_3e16b22ebe3214f412c7f72f4b64b247f086f8129db47d81fd9392f544779961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
                  <div class=\"col-sm-10 col-md-offset-1\">
                  <font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Perfil de usuario</font>
                  <br><br>
</div>
</div>
  <div class=\"row\"> 
          <div class=\"col-sm-5 col-md-offset-3\" align=\"left\"  style=\"font-size:2px\"><!--  col-md-offset-2 -->
    <p><label>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p><label>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
          </div>
      </div>
      <div class=\"row\" >
                 <div class=\"col-sm-4 col-md-offset-4 \">
                     <br>
                       <input id=\"botonPublicar\" onclick=\"location.href='";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "';\" class=\"btn btn-info\" type=\"submit\" value=\"Cambiar e-mail\" style='width:100%; height:40px; font-size:20px' /><br><br>
                       <input id=\"botonPublicar\" onclick=\"location.href='";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "';\" class=\"btn btn-info\" type=\"submit\" value=\"Cambiar contraseña\" style='width:100%; height:40px; font-size:20px' />
                 </div>
             </div>
<br><br><br><br><br><br>

";
        
        $__internal_3e16b22ebe3214f412c7f72f4b64b247f086f8129db47d81fd9392f544779961->leave($__internal_3e16b22ebe3214f412c7f72f4b64b247f086f8129db47d81fd9392f544779961_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  50 => 18,  39 => 12,  33 => 11,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="row">*/
/*                   <div class="col-sm-10 col-md-offset-1">*/
/*                   <font style="color: #00BCD4;font-weight: bold; font-size:23px;">Perfil de usuario</font>*/
/*                   <br><br>*/
/* </div>*/
/* </div>*/
/*   <div class="row"> */
/*           <div class="col-sm-5 col-md-offset-3" align="left"  style="font-size:2px"><!--  col-md-offset-2 -->*/
/*     <p><label>{{ 'profile.show.username'|trans }}:</label> {{ user.username }}</p>*/
/*     <p><label>{{ 'profile.show.email'|trans }}:</label> {{ user.email }}</p>*/
/*           </div>*/
/*       </div>*/
/*       <div class="row" >*/
/*                  <div class="col-sm-4 col-md-offset-4 ">*/
/*                      <br>*/
/*                        <input id="botonPublicar" onclick="location.href='{{ path("fos_user_profile_edit") }}';" class="btn btn-info" type="submit" value="Cambiar e-mail" style='width:100%; height:40px; font-size:20px' /><br><br>*/
/*                        <input id="botonPublicar" onclick="location.href='{{ path("fos_user_change_password") }}';" class="btn btn-info" type="submit" value="Cambiar contraseña" style='width:100%; height:40px; font-size:20px' />*/
/*                  </div>*/
/*              </div>*/
/* <br><br><br><br><br><br>*/
/* */
/* */
