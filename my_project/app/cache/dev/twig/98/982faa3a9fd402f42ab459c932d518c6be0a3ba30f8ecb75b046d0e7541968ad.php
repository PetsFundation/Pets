<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5b16ecf7b6b21aca7d82c01c745c4bab7adfaf5c1498f64e058425a313b4061a extends Twig_Template
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
        $__internal_c0100be6bb6041c684fad53d0cb0a0967ff7d007f8e03c4e1379fc4d4956e7c8 = $this->env->getExtension("native_profiler");
        $__internal_c0100be6bb6041c684fad53d0cb0a0967ff7d007f8e03c4e1379fc4d4956e7c8->enter($__internal_c0100be6bb6041c684fad53d0cb0a0967ff7d007f8e03c4e1379fc4d4956e7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c0100be6bb6041c684fad53d0cb0a0967ff7d007f8e03c4e1379fc4d4956e7c8->leave($__internal_c0100be6bb6041c684fad53d0cb0a0967ff7d007f8e03c4e1379fc4d4956e7c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
