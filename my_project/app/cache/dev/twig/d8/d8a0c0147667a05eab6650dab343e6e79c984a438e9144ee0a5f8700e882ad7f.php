<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_cc0f28f2c2cdee2dfbe8e991df5b6ce45543e59bec4144a0af28d95cc526e572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_04a23c7c56317da82b5ff23e48775f036f3314468d9f80d175299ada697d9f68 = $this->env->getExtension("native_profiler");
        $__internal_04a23c7c56317da82b5ff23e48775f036f3314468d9f80d175299ada697d9f68->enter($__internal_04a23c7c56317da82b5ff23e48775f036f3314468d9f80d175299ada697d9f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04a23c7c56317da82b5ff23e48775f036f3314468d9f80d175299ada697d9f68->leave($__internal_04a23c7c56317da82b5ff23e48775f036f3314468d9f80d175299ada697d9f68_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12c27160c129c3096525ef87d6f42831a57864413ff8ab5ad1f12fba72142594 = $this->env->getExtension("native_profiler");
        $__internal_12c27160c129c3096525ef87d6f42831a57864413ff8ab5ad1f12fba72142594->enter($__internal_12c27160c129c3096525ef87d6f42831a57864413ff8ab5ad1f12fba72142594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_12c27160c129c3096525ef87d6f42831a57864413ff8ab5ad1f12fba72142594->leave($__internal_12c27160c129c3096525ef87d6f42831a57864413ff8ab5ad1f12fba72142594_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
