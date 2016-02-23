<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9a34e2003cb380f62f33cbf5f15e9ca72c378a9a3488b636c32ab1cf32247715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_70bf588d74c0979c391550652d849cfca2ad43c4d07ba468711bdaa723b160f2 = $this->env->getExtension("native_profiler");
        $__internal_70bf588d74c0979c391550652d849cfca2ad43c4d07ba468711bdaa723b160f2->enter($__internal_70bf588d74c0979c391550652d849cfca2ad43c4d07ba468711bdaa723b160f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70bf588d74c0979c391550652d849cfca2ad43c4d07ba468711bdaa723b160f2->leave($__internal_70bf588d74c0979c391550652d849cfca2ad43c4d07ba468711bdaa723b160f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33acd7a664ea5c900c6f64b6d7c47942cfcce7ec31490aae6ec71d6f4d454670 = $this->env->getExtension("native_profiler");
        $__internal_33acd7a664ea5c900c6f64b6d7c47942cfcce7ec31490aae6ec71d6f4d454670->enter($__internal_33acd7a664ea5c900c6f64b6d7c47942cfcce7ec31490aae6ec71d6f4d454670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_33acd7a664ea5c900c6f64b6d7c47942cfcce7ec31490aae6ec71d6f4d454670->leave($__internal_33acd7a664ea5c900c6f64b6d7c47942cfcce7ec31490aae6ec71d6f4d454670_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
