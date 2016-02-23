<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f88972d0b034f50798cd1799acb9a489a4b8c0f799f1ea82edc8beacbd2df416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_75efd0f3f16b25b3bb0ca148d543620ac97f4aa29e1677e4c5d31927c4d4a1e6 = $this->env->getExtension("native_profiler");
        $__internal_75efd0f3f16b25b3bb0ca148d543620ac97f4aa29e1677e4c5d31927c4d4a1e6->enter($__internal_75efd0f3f16b25b3bb0ca148d543620ac97f4aa29e1677e4c5d31927c4d4a1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75efd0f3f16b25b3bb0ca148d543620ac97f4aa29e1677e4c5d31927c4d4a1e6->leave($__internal_75efd0f3f16b25b3bb0ca148d543620ac97f4aa29e1677e4c5d31927c4d4a1e6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca5a59556affc75d22270bde1a1114e53a475363f632ae88fe4ac3688f3c9553 = $this->env->getExtension("native_profiler");
        $__internal_ca5a59556affc75d22270bde1a1114e53a475363f632ae88fe4ac3688f3c9553->enter($__internal_ca5a59556affc75d22270bde1a1114e53a475363f632ae88fe4ac3688f3c9553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ca5a59556affc75d22270bde1a1114e53a475363f632ae88fe4ac3688f3c9553->leave($__internal_ca5a59556affc75d22270bde1a1114e53a475363f632ae88fe4ac3688f3c9553_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4b7e53486dd860293a71070ad11b3c7a625e1c7f55212c27cacfcbdcd3768d4 = $this->env->getExtension("native_profiler");
        $__internal_e4b7e53486dd860293a71070ad11b3c7a625e1c7f55212c27cacfcbdcd3768d4->enter($__internal_e4b7e53486dd860293a71070ad11b3c7a625e1c7f55212c27cacfcbdcd3768d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e4b7e53486dd860293a71070ad11b3c7a625e1c7f55212c27cacfcbdcd3768d4->leave($__internal_e4b7e53486dd860293a71070ad11b3c7a625e1c7f55212c27cacfcbdcd3768d4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
