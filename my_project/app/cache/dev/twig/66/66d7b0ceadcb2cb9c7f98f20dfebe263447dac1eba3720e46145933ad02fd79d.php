<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_69a741773040e62ef90887a53b7c3d402b18f95175fe4035bf9134403da9c4dc extends Twig_Template
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
        $__internal_fa4b8f5e8bd5dd4a905c35494c90b07c0bff0607f9786c440222710836ba03c9 = $this->env->getExtension("native_profiler");
        $__internal_fa4b8f5e8bd5dd4a905c35494c90b07c0bff0607f9786c440222710836ba03c9->enter($__internal_fa4b8f5e8bd5dd4a905c35494c90b07c0bff0607f9786c440222710836ba03c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_fa4b8f5e8bd5dd4a905c35494c90b07c0bff0607f9786c440222710836ba03c9->leave($__internal_fa4b8f5e8bd5dd4a905c35494c90b07c0bff0607f9786c440222710836ba03c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
