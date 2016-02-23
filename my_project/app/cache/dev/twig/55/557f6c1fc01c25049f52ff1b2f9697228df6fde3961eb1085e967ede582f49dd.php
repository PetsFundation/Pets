<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0dfc71f926f5a040ec3d1f11251af93effad550739a6ce1e1f0213a4554238c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84b8eea98b148aa6270133672ec5046826d658a2cb440d9debb44389fd506438 = $this->env->getExtension("native_profiler");
        $__internal_84b8eea98b148aa6270133672ec5046826d658a2cb440d9debb44389fd506438->enter($__internal_84b8eea98b148aa6270133672ec5046826d658a2cb440d9debb44389fd506438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84b8eea98b148aa6270133672ec5046826d658a2cb440d9debb44389fd506438->leave($__internal_84b8eea98b148aa6270133672ec5046826d658a2cb440d9debb44389fd506438_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ba18846faf829d21ad12cf3ad948ed4658159f3fdbcdce18a9106dc01eb4009 = $this->env->getExtension("native_profiler");
        $__internal_8ba18846faf829d21ad12cf3ad948ed4658159f3fdbcdce18a9106dc01eb4009->enter($__internal_8ba18846faf829d21ad12cf3ad948ed4658159f3fdbcdce18a9106dc01eb4009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8ba18846faf829d21ad12cf3ad948ed4658159f3fdbcdce18a9106dc01eb4009->leave($__internal_8ba18846faf829d21ad12cf3ad948ed4658159f3fdbcdce18a9106dc01eb4009_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_64952de8c5bca007bd29461414d3d750f5dccdfbe62ffc8181015dc312ee9450 = $this->env->getExtension("native_profiler");
        $__internal_64952de8c5bca007bd29461414d3d750f5dccdfbe62ffc8181015dc312ee9450->enter($__internal_64952de8c5bca007bd29461414d3d750f5dccdfbe62ffc8181015dc312ee9450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_64952de8c5bca007bd29461414d3d750f5dccdfbe62ffc8181015dc312ee9450->leave($__internal_64952de8c5bca007bd29461414d3d750f5dccdfbe62ffc8181015dc312ee9450_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d36ad73f9e966bf80a5369acbc4c81acda02a8e1bd339a7adfec1fd580182f12 = $this->env->getExtension("native_profiler");
        $__internal_d36ad73f9e966bf80a5369acbc4c81acda02a8e1bd339a7adfec1fd580182f12->enter($__internal_d36ad73f9e966bf80a5369acbc4c81acda02a8e1bd339a7adfec1fd580182f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d36ad73f9e966bf80a5369acbc4c81acda02a8e1bd339a7adfec1fd580182f12->leave($__internal_d36ad73f9e966bf80a5369acbc4c81acda02a8e1bd339a7adfec1fd580182f12_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
