<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_28b1f491037cc9d3da9c950884970c70c0cf12198add28a0521eb8b24308e868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_a4e47ab0809d01fa4e60317c9d82e251c580b97ea32a5386666fd9b2cb064fa8 = $this->env->getExtension("native_profiler");
        $__internal_a4e47ab0809d01fa4e60317c9d82e251c580b97ea32a5386666fd9b2cb064fa8->enter($__internal_a4e47ab0809d01fa4e60317c9d82e251c580b97ea32a5386666fd9b2cb064fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4e47ab0809d01fa4e60317c9d82e251c580b97ea32a5386666fd9b2cb064fa8->leave($__internal_a4e47ab0809d01fa4e60317c9d82e251c580b97ea32a5386666fd9b2cb064fa8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6409771ca9b8e02632ea42b1d53c4d9f872fd5cf69582045c9e7a4d227acbc8f = $this->env->getExtension("native_profiler");
        $__internal_6409771ca9b8e02632ea42b1d53c4d9f872fd5cf69582045c9e7a4d227acbc8f->enter($__internal_6409771ca9b8e02632ea42b1d53c4d9f872fd5cf69582045c9e7a4d227acbc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_6409771ca9b8e02632ea42b1d53c4d9f872fd5cf69582045c9e7a4d227acbc8f->leave($__internal_6409771ca9b8e02632ea42b1d53c4d9f872fd5cf69582045c9e7a4d227acbc8f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
