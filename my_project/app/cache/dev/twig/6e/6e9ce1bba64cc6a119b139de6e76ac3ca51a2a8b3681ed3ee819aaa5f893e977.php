<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e39ffa31a85b044501f3e4b57c3b554157b16d3644971910e2cd55c5e7339930 extends Twig_Template
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
        $__internal_f16c108bbff96bbe5346b1e7676ac7bd144e2dce26ec63748f6c9f45cd867c48 = $this->env->getExtension("native_profiler");
        $__internal_f16c108bbff96bbe5346b1e7676ac7bd144e2dce26ec63748f6c9f45cd867c48->enter($__internal_f16c108bbff96bbe5346b1e7676ac7bd144e2dce26ec63748f6c9f45cd867c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f16c108bbff96bbe5346b1e7676ac7bd144e2dce26ec63748f6c9f45cd867c48->leave($__internal_f16c108bbff96bbe5346b1e7676ac7bd144e2dce26ec63748f6c9f45cd867c48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
