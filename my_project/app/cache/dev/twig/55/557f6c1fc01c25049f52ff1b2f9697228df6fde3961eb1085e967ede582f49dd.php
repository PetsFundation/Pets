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
        $__internal_660629c0b2fba72476cde81fe6d901cda2c03f5abc417012755881a0d3a955b2 = $this->env->getExtension("native_profiler");
        $__internal_660629c0b2fba72476cde81fe6d901cda2c03f5abc417012755881a0d3a955b2->enter($__internal_660629c0b2fba72476cde81fe6d901cda2c03f5abc417012755881a0d3a955b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_660629c0b2fba72476cde81fe6d901cda2c03f5abc417012755881a0d3a955b2->leave($__internal_660629c0b2fba72476cde81fe6d901cda2c03f5abc417012755881a0d3a955b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_42e5001f2dd0dd357631ba6a404f9edacee5bfa40ab7bdf7d751c065724536a8 = $this->env->getExtension("native_profiler");
        $__internal_42e5001f2dd0dd357631ba6a404f9edacee5bfa40ab7bdf7d751c065724536a8->enter($__internal_42e5001f2dd0dd357631ba6a404f9edacee5bfa40ab7bdf7d751c065724536a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_42e5001f2dd0dd357631ba6a404f9edacee5bfa40ab7bdf7d751c065724536a8->leave($__internal_42e5001f2dd0dd357631ba6a404f9edacee5bfa40ab7bdf7d751c065724536a8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_926c47f68d05cdf09c36e9464bb305b24b7045924246ddae6889fb5daf67b7c6 = $this->env->getExtension("native_profiler");
        $__internal_926c47f68d05cdf09c36e9464bb305b24b7045924246ddae6889fb5daf67b7c6->enter($__internal_926c47f68d05cdf09c36e9464bb305b24b7045924246ddae6889fb5daf67b7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_926c47f68d05cdf09c36e9464bb305b24b7045924246ddae6889fb5daf67b7c6->leave($__internal_926c47f68d05cdf09c36e9464bb305b24b7045924246ddae6889fb5daf67b7c6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecb541e8ccc19679f156667554263b445f46040f896f6cd59398a95c1948241c = $this->env->getExtension("native_profiler");
        $__internal_ecb541e8ccc19679f156667554263b445f46040f896f6cd59398a95c1948241c->enter($__internal_ecb541e8ccc19679f156667554263b445f46040f896f6cd59398a95c1948241c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ecb541e8ccc19679f156667554263b445f46040f896f6cd59398a95c1948241c->leave($__internal_ecb541e8ccc19679f156667554263b445f46040f896f6cd59398a95c1948241c_prof);

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
