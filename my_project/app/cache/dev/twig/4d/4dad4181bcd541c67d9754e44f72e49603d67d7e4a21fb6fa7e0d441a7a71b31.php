<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_51baee14f6ff17cb2c1ff5627966b2f828adf578966b0965f263961181e8750e extends Twig_Template
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
        $__internal_ce4aa730678c7b3788cfbae81b9acde40a348ca46d4ff45c48a02169d1d480ae = $this->env->getExtension("native_profiler");
        $__internal_ce4aa730678c7b3788cfbae81b9acde40a348ca46d4ff45c48a02169d1d480ae->enter($__internal_ce4aa730678c7b3788cfbae81b9acde40a348ca46d4ff45c48a02169d1d480ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ce4aa730678c7b3788cfbae81b9acde40a348ca46d4ff45c48a02169d1d480ae->leave($__internal_ce4aa730678c7b3788cfbae81b9acde40a348ca46d4ff45c48a02169d1d480ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
