<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3a84626cbbe343d3fecce3707e5ad9f3491aedb81df39ea2efeaf9c1a8069280 extends Twig_Template
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
        $__internal_3cebf1eaaec9ff1bcba4707f642fe3ae0394f1341f4b3515feb12c2ea9edd34a = $this->env->getExtension("native_profiler");
        $__internal_3cebf1eaaec9ff1bcba4707f642fe3ae0394f1341f4b3515feb12c2ea9edd34a->enter($__internal_3cebf1eaaec9ff1bcba4707f642fe3ae0394f1341f4b3515feb12c2ea9edd34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3cebf1eaaec9ff1bcba4707f642fe3ae0394f1341f4b3515feb12c2ea9edd34a->leave($__internal_3cebf1eaaec9ff1bcba4707f642fe3ae0394f1341f4b3515feb12c2ea9edd34a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
