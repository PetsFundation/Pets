<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_75f67e3b90f1195a6c7ec603bdae171f4cff6ed7bae6518f94a2e6c1ffb60d59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_b94c1423c8cefb3947fb1357e4914944d575bf9328ed34a7f711be3d39b62dd8 = $this->env->getExtension("native_profiler");
        $__internal_b94c1423c8cefb3947fb1357e4914944d575bf9328ed34a7f711be3d39b62dd8->enter($__internal_b94c1423c8cefb3947fb1357e4914944d575bf9328ed34a7f711be3d39b62dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b94c1423c8cefb3947fb1357e4914944d575bf9328ed34a7f711be3d39b62dd8->leave($__internal_b94c1423c8cefb3947fb1357e4914944d575bf9328ed34a7f711be3d39b62dd8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c82e8b8fa04bb29ba1bd954f4bb46b396b7a061df9c4df188abeac25b6f7d90 = $this->env->getExtension("native_profiler");
        $__internal_8c82e8b8fa04bb29ba1bd954f4bb46b396b7a061df9c4df188abeac25b6f7d90->enter($__internal_8c82e8b8fa04bb29ba1bd954f4bb46b396b7a061df9c4df188abeac25b6f7d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8c82e8b8fa04bb29ba1bd954f4bb46b396b7a061df9c4df188abeac25b6f7d90->leave($__internal_8c82e8b8fa04bb29ba1bd954f4bb46b396b7a061df9c4df188abeac25b6f7d90_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
