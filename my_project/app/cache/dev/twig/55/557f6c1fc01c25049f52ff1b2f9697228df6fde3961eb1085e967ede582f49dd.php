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
        $__internal_3647668f14cab192b2a0f953bcc8879243afd15d423bce3fbb32ec9ff3bb968a = $this->env->getExtension("native_profiler");
        $__internal_3647668f14cab192b2a0f953bcc8879243afd15d423bce3fbb32ec9ff3bb968a->enter($__internal_3647668f14cab192b2a0f953bcc8879243afd15d423bce3fbb32ec9ff3bb968a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3647668f14cab192b2a0f953bcc8879243afd15d423bce3fbb32ec9ff3bb968a->leave($__internal_3647668f14cab192b2a0f953bcc8879243afd15d423bce3fbb32ec9ff3bb968a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12f1d062e5e8e696b20f1ce38a4f42867f94df2ab9c887c4b856e7d93808a077 = $this->env->getExtension("native_profiler");
        $__internal_12f1d062e5e8e696b20f1ce38a4f42867f94df2ab9c887c4b856e7d93808a077->enter($__internal_12f1d062e5e8e696b20f1ce38a4f42867f94df2ab9c887c4b856e7d93808a077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_12f1d062e5e8e696b20f1ce38a4f42867f94df2ab9c887c4b856e7d93808a077->leave($__internal_12f1d062e5e8e696b20f1ce38a4f42867f94df2ab9c887c4b856e7d93808a077_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_15c6cbe52261a6d743ee866a3b209cf557fefb439291a2ffed38e7432479e0e3 = $this->env->getExtension("native_profiler");
        $__internal_15c6cbe52261a6d743ee866a3b209cf557fefb439291a2ffed38e7432479e0e3->enter($__internal_15c6cbe52261a6d743ee866a3b209cf557fefb439291a2ffed38e7432479e0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_15c6cbe52261a6d743ee866a3b209cf557fefb439291a2ffed38e7432479e0e3->leave($__internal_15c6cbe52261a6d743ee866a3b209cf557fefb439291a2ffed38e7432479e0e3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f9ba60f92bed12c6b2a1984cd658973cc7bafd4438a365916935594306f35aa = $this->env->getExtension("native_profiler");
        $__internal_9f9ba60f92bed12c6b2a1984cd658973cc7bafd4438a365916935594306f35aa->enter($__internal_9f9ba60f92bed12c6b2a1984cd658973cc7bafd4438a365916935594306f35aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9f9ba60f92bed12c6b2a1984cd658973cc7bafd4438a365916935594306f35aa->leave($__internal_9f9ba60f92bed12c6b2a1984cd658973cc7bafd4438a365916935594306f35aa_prof);

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
