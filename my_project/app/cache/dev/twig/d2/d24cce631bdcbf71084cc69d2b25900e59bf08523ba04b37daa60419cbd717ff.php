<?php

/* DonacionesBundle:Default:contenido_index.html.twig */
class __TwigTemplate_93486d2e439f338837d04641782703301f5ff4e0c7e29882778417f8fff0293f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DonacionesBundle:Default:index.html.twig", "DonacionesBundle:Default:contenido_index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DonacionesBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffa96500d1c9584d970001181d2c56db0c387b143af4326c62f12fce91c5208c = $this->env->getExtension("native_profiler");
        $__internal_ffa96500d1c9584d970001181d2c56db0c387b143af4326c62f12fce91c5208c->enter($__internal_ffa96500d1c9584d970001181d2c56db0c387b143af4326c62f12fce91c5208c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DonacionesBundle:Default:contenido_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffa96500d1c9584d970001181d2c56db0c387b143af4326c62f12fce91c5208c->leave($__internal_ffa96500d1c9584d970001181d2c56db0c387b143af4326c62f12fce91c5208c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_66df611f54a8755f44c09b8efeb00a5dd95fe5ec78853b6c4f2502acddc57b0e = $this->env->getExtension("native_profiler");
        $__internal_66df611f54a8755f44c09b8efeb00a5dd95fe5ec78853b6c4f2502acddc57b0e->enter($__internal_66df611f54a8755f44c09b8efeb00a5dd95fe5ec78853b6c4f2502acddc57b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\" style=\"margin-top: -70px; margin-bottom: 50px; width:100%; padding-top: 40px; background-color: white\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-md-offset-2\" align=\"left\"> <!-- col-md-offset-3-->
                <!--Esto debe conectar con anuncios-->
                <font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Donaciones</font><br><br>
                Pet's es el primer sitio en la red de ayuda animal y cada mes la consultan 450 personas, que realizan miles de visitas a sus páginas.<br>
                El comercio es bueno, pero no con animales, no en Pet's.<br><br>
                
                Pet's es algo especial. Es como una biblioteca o como un parque público. Es como un templo para la mente. <br>
                Cuando fundamos Pets, pude haberla establecido como una compañía con fines de lucro con anuncios publicitarios, pero decidí hacer algo diferente. Hemos trabajado duro 1 año para ser ahorrativos y frugales. Nosotros cumplimos nuestra misión, y dejamos el derroche para otros.<br><br>
                
                Si todo el que leyera ésto donara 5€, solo tendríamos que recaudar fondos un día al año. Pero no todos pueden o quieren donar. Y no pasa nada. Cada año, suficientes personas deciden donar.<br><br>
                
                Este año, por favor considera donar 5€, 20€, 50€ o lo que puedas contribuir para proteger y ayudar a los animales, a Pet's.<br><br>
                
                Gracias,<br><br>
                Fundadores de Pets.
            </div>
            <div class=\"col-sm-4\">
                <br><br>
                <font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">¡Voy a donar!</font><br><br>
                <form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
                    <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                    <input type=\"hidden\" name=\"hosted_button_id\" value=\"GFTUD2PJW23L2\">
                    <input type=\"image\" src=\"https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal. La forma rápida y segura de pagar en Internet.\">
                    <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/es_ES/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_66df611f54a8755f44c09b8efeb00a5dd95fe5ec78853b6c4f2502acddc57b0e->leave($__internal_66df611f54a8755f44c09b8efeb00a5dd95fe5ec78853b6c4f2502acddc57b0e_prof);

    }

    public function getTemplateName()
    {
        return "DonacionesBundle:Default:contenido_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "DonacionesBundle:Default:index.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <div class="jumbotron" style="margin-top: -70px; margin-bottom: 50px; width:100%; padding-top: 40px; background-color: white">*/
/*         <div class="row">*/
/*             <div class="col-sm-6 col-md-offset-2" align="left"> <!-- col-md-offset-3-->*/
/*                 <!--Esto debe conectar con anuncios-->*/
/*                 <font style="color: #00BCD4;font-weight: bold; font-size:23px;">Donaciones</font><br><br>*/
/*                 Pet's es el primer sitio en la red de ayuda animal y cada mes la consultan 450 personas, que realizan miles de visitas a sus páginas.<br>*/
/*                 El comercio es bueno, pero no con animales, no en Pet's.<br><br>*/
/*                 */
/*                 Pet's es algo especial. Es como una biblioteca o como un parque público. Es como un templo para la mente. <br>*/
/*                 Cuando fundamos Pets, pude haberla establecido como una compañía con fines de lucro con anuncios publicitarios, pero decidí hacer algo diferente. Hemos trabajado duro 1 año para ser ahorrativos y frugales. Nosotros cumplimos nuestra misión, y dejamos el derroche para otros.<br><br>*/
/*                 */
/*                 Si todo el que leyera ésto donara 5€, solo tendríamos que recaudar fondos un día al año. Pero no todos pueden o quieren donar. Y no pasa nada. Cada año, suficientes personas deciden donar.<br><br>*/
/*                 */
/*                 Este año, por favor considera donar 5€, 20€, 50€ o lo que puedas contribuir para proteger y ayudar a los animales, a Pet's.<br><br>*/
/*                 */
/*                 Gracias,<br><br>*/
/*                 Fundadores de Pets.*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*                 <br><br>*/
/*                 <font style="color: #00BCD4;font-weight: bold; font-size:23px;">¡Voy a donar!</font><br><br>*/
/*                 <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">*/
/*                     <input type="hidden" name="cmd" value="_s-xclick">*/
/*                     <input type="hidden" name="hosted_button_id" value="GFTUD2PJW23L2">*/
/*                     <input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">*/
/*                     <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
