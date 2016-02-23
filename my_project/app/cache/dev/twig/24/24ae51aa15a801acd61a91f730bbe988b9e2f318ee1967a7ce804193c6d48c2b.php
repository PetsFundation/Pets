<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_3a33ddd25c02482e15e53e2d608d58016a0cb1037da0f024dab223885560e28c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_170cb65154a56c19c22fb0317e473e86a00ca5708b5ed1ec9a0ddfc997e98331 = $this->env->getExtension("native_profiler");
        $__internal_170cb65154a56c19c22fb0317e473e86a00ca5708b5ed1ec9a0ddfc997e98331->enter($__internal_170cb65154a56c19c22fb0317e473e86a00ca5708b5ed1ec9a0ddfc997e98331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_170cb65154a56c19c22fb0317e473e86a00ca5708b5ed1ec9a0ddfc997e98331->leave($__internal_170cb65154a56c19c22fb0317e473e86a00ca5708b5ed1ec9a0ddfc997e98331_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86e947ee33255320ad2b745b51531834265e442b32f773c6e0b21e954d4c19bc = $this->env->getExtension("native_profiler");
        $__internal_86e947ee33255320ad2b745b51531834265e442b32f773c6e0b21e954d4c19bc->enter($__internal_86e947ee33255320ad2b745b51531834265e442b32f773c6e0b21e954d4c19bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_86e947ee33255320ad2b745b51531834265e442b32f773c6e0b21e954d4c19bc->leave($__internal_86e947ee33255320ad2b745b51531834265e442b32f773c6e0b21e954d4c19bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
