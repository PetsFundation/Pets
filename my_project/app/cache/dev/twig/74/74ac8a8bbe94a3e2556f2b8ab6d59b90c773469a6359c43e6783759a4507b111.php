<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_6d38508b1fb8cb9a43aee5d1177090e59f4bb4c61c4660e751d639da61a1e64f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_d07386c5a97299522d2fd43436dfd9a042d6aadf68f5b8607738ed09d36a8bc3 = $this->env->getExtension("native_profiler");
        $__internal_d07386c5a97299522d2fd43436dfd9a042d6aadf68f5b8607738ed09d36a8bc3->enter($__internal_d07386c5a97299522d2fd43436dfd9a042d6aadf68f5b8607738ed09d36a8bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d07386c5a97299522d2fd43436dfd9a042d6aadf68f5b8607738ed09d36a8bc3->leave($__internal_d07386c5a97299522d2fd43436dfd9a042d6aadf68f5b8607738ed09d36a8bc3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca2baa2dc3c9531910fd671b52f2a4aff5ac3bb9694614cfadff9ee8b63d030d = $this->env->getExtension("native_profiler");
        $__internal_ca2baa2dc3c9531910fd671b52f2a4aff5ac3bb9694614cfadff9ee8b63d030d->enter($__internal_ca2baa2dc3c9531910fd671b52f2a4aff5ac3bb9694614cfadff9ee8b63d030d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ca2baa2dc3c9531910fd671b52f2a4aff5ac3bb9694614cfadff9ee8b63d030d->leave($__internal_ca2baa2dc3c9531910fd671b52f2a4aff5ac3bb9694614cfadff9ee8b63d030d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
