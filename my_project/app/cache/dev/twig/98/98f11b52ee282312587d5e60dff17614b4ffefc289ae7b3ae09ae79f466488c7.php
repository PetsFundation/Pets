<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_70b731517b3cc324fc6384ed1680362c2d91459a9e6940c214557298ef080e7a extends Twig_Template
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
        $__internal_9784ddae3ab99d07c049b45dd1fc754973ac4775d49a0ddcdf94155e726148b4 = $this->env->getExtension("native_profiler");
        $__internal_9784ddae3ab99d07c049b45dd1fc754973ac4775d49a0ddcdf94155e726148b4->enter($__internal_9784ddae3ab99d07c049b45dd1fc754973ac4775d49a0ddcdf94155e726148b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9784ddae3ab99d07c049b45dd1fc754973ac4775d49a0ddcdf94155e726148b4->leave($__internal_9784ddae3ab99d07c049b45dd1fc754973ac4775d49a0ddcdf94155e726148b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
