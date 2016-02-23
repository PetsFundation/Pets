<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_fcfd1e91d14c67f22e5ff0261c30d1395fb306ade9b7e28c7cc61395cd080c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b64cc5c337f4ce1ea20dd019c7dacdff18d9fd47124f580f4ab6db4f78f880c7 = $this->env->getExtension("native_profiler");
        $__internal_b64cc5c337f4ce1ea20dd019c7dacdff18d9fd47124f580f4ab6db4f78f880c7->enter($__internal_b64cc5c337f4ce1ea20dd019c7dacdff18d9fd47124f580f4ab6db4f78f880c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b64cc5c337f4ce1ea20dd019c7dacdff18d9fd47124f580f4ab6db4f78f880c7->leave($__internal_b64cc5c337f4ce1ea20dd019c7dacdff18d9fd47124f580f4ab6db4f78f880c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf9e3231a69dc29b369a3a6d3c676010de3191444d0107b77a9e74beb6c1a8a8 = $this->env->getExtension("native_profiler");
        $__internal_cf9e3231a69dc29b369a3a6d3c676010de3191444d0107b77a9e74beb6c1a8a8->enter($__internal_cf9e3231a69dc29b369a3a6d3c676010de3191444d0107b77a9e74beb6c1a8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_cf9e3231a69dc29b369a3a6d3c676010de3191444d0107b77a9e74beb6c1a8a8->leave($__internal_cf9e3231a69dc29b369a3a6d3c676010de3191444d0107b77a9e74beb6c1a8a8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
