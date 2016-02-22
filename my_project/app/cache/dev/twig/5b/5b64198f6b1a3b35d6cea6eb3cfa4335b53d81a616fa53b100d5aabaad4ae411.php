<?php

/* ContactameBundle:Default:contenido_index.html.twig */
class __TwigTemplate_1d43377325decb3f0d636b0c6aa1e4770f1fe2963799faa9648708e67b313494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ContactameBundle:Default:index.html.twig", "ContactameBundle:Default:contenido_index.html.twig", 1);
        $this->blocks = array(
            'guide' => array($this, 'block_guide'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ContactameBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0cf07762bfcc0b14645c55ff47814b01d5d10f62ad2add777aa585c231ab26f = $this->env->getExtension("native_profiler");
        $__internal_a0cf07762bfcc0b14645c55ff47814b01d5d10f62ad2add777aa585c231ab26f->enter($__internal_a0cf07762bfcc0b14645c55ff47814b01d5d10f62ad2add777aa585c231ab26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContactameBundle:Default:contenido_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0cf07762bfcc0b14645c55ff47814b01d5d10f62ad2add777aa585c231ab26f->leave($__internal_a0cf07762bfcc0b14645c55ff47814b01d5d10f62ad2add777aa585c231ab26f_prof);

    }

    // line 3
    public function block_guide($context, array $blocks = array())
    {
        $__internal_7c4dea08825820cb09141b29ae822521a10d8dc09642923b5888264a6c302d4c = $this->env->getExtension("native_profiler");
        $__internal_7c4dea08825820cb09141b29ae822521a10d8dc09642923b5888264a6c302d4c->enter($__internal_7c4dea08825820cb09141b29ae822521a10d8dc09642923b5888264a6c302d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guide"));

        // line 4
        echo "  <a href=\"";
        echo $this->env->getExtension('routing')->getPath("index_homepage");
        echo "\">Inicio</a> > <a href=\"#\">Contáctame</a>
";
        
        $__internal_7c4dea08825820cb09141b29ae822521a10d8dc09642923b5888264a6c302d4c->leave($__internal_7c4dea08825820cb09141b29ae822521a10d8dc09642923b5888264a6c302d4c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_027d58a46ee7a59757f41212a74b9b9c9f46477fac744229d76d75b83093d1f4 = $this->env->getExtension("native_profiler");
        $__internal_027d58a46ee7a59757f41212a74b9b9c9f46477fac744229d76d75b83093d1f4->enter($__internal_027d58a46ee7a59757f41212a74b9b9c9f46477fac744229d76d75b83093d1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Contacto</font>
 <script type=\"text/javascript\" src=\"https://form.jotformeu.com/jsform/60525076893361\"></script>

";
        
        $__internal_027d58a46ee7a59757f41212a74b9b9c9f46477fac744229d76d75b83093d1f4->leave($__internal_027d58a46ee7a59757f41212a74b9b9c9f46477fac744229d76d75b83093d1f4_prof);

    }

    public function getTemplateName()
    {
        return "ContactameBundle:Default:contenido_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  51 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "ContactameBundle:Default:index.html.twig" %}*/
/* */
/* {% block guide %}*/
/*   <a href="{{ path("index_homepage") }}">Inicio</a> > <a href="#">Contáctame</a>*/
/* {% endblock guide %}*/
/* */
/* */
/* {% block body %}*/
/* <font style="color: #00BCD4;font-weight: bold; font-size:23px;">Contacto</font>*/
/*  <script type="text/javascript" src="https://form.jotformeu.com/jsform/60525076893361"></script>*/
/* */
/* {% endblock body %}*/
/*       */
