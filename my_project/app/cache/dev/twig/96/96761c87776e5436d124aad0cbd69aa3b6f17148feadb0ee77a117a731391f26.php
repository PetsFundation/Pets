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
        $__internal_d2d68fcf62e7b241e0d31b11a2d5f8f1bb451edc42db5ab715476648a3be9422 = $this->env->getExtension("native_profiler");
        $__internal_d2d68fcf62e7b241e0d31b11a2d5f8f1bb451edc42db5ab715476648a3be9422->enter($__internal_d2d68fcf62e7b241e0d31b11a2d5f8f1bb451edc42db5ab715476648a3be9422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d2d68fcf62e7b241e0d31b11a2d5f8f1bb451edc42db5ab715476648a3be9422->leave($__internal_d2d68fcf62e7b241e0d31b11a2d5f8f1bb451edc42db5ab715476648a3be9422_prof);

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
