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
        $__internal_64b56f0ac9834951f13e0f027dc3cd41b18b76cff2310a9815af8e5e034502d2 = $this->env->getExtension("native_profiler");
        $__internal_64b56f0ac9834951f13e0f027dc3cd41b18b76cff2310a9815af8e5e034502d2->enter($__internal_64b56f0ac9834951f13e0f027dc3cd41b18b76cff2310a9815af8e5e034502d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_64b56f0ac9834951f13e0f027dc3cd41b18b76cff2310a9815af8e5e034502d2->leave($__internal_64b56f0ac9834951f13e0f027dc3cd41b18b76cff2310a9815af8e5e034502d2_prof);

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
