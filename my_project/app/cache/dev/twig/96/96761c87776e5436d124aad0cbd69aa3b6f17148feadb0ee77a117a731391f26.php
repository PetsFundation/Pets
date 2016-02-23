<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d601c99909884efbea44365dd27f9ff82cab9584f12896807ccad253ad96ef1f extends Twig_Template
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
        $__internal_53c665152d7421a091295dd30e7169a53ba937b32e8f8e2374b08d2d055b23cf = $this->env->getExtension("native_profiler");
        $__internal_53c665152d7421a091295dd30e7169a53ba937b32e8f8e2374b08d2d055b23cf->enter($__internal_53c665152d7421a091295dd30e7169a53ba937b32e8f8e2374b08d2d055b23cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_53c665152d7421a091295dd30e7169a53ba937b32e8f8e2374b08d2d055b23cf->leave($__internal_53c665152d7421a091295dd30e7169a53ba937b32e8f8e2374b08d2d055b23cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
