<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_9e9146c3248c94761f82bbf9fecd66bf04f3a55a3ecd137851bdca9f63d24c3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19a3444a27ddfa3afe41d7789840603474de003563ac422ae1eb57c412f38305 = $this->env->getExtension("native_profiler");
        $__internal_19a3444a27ddfa3afe41d7789840603474de003563ac422ae1eb57c412f38305->enter($__internal_19a3444a27ddfa3afe41d7789840603474de003563ac422ae1eb57c412f38305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_19a3444a27ddfa3afe41d7789840603474de003563ac422ae1eb57c412f38305->leave($__internal_19a3444a27ddfa3afe41d7789840603474de003563ac422ae1eb57c412f38305_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_62b17bd4a34ab6d531c694376fd76c8670b983bfd0f62e3098aabdbe89a71e23 = $this->env->getExtension("native_profiler");
        $__internal_62b17bd4a34ab6d531c694376fd76c8670b983bfd0f62e3098aabdbe89a71e23->enter($__internal_62b17bd4a34ab6d531c694376fd76c8670b983bfd0f62e3098aabdbe89a71e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_62b17bd4a34ab6d531c694376fd76c8670b983bfd0f62e3098aabdbe89a71e23->leave($__internal_62b17bd4a34ab6d531c694376fd76c8670b983bfd0f62e3098aabdbe89a71e23_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_193e38effe05bacb5b78c4f202230c5883953a48ea1e2d1bb048d210ea01cfbe = $this->env->getExtension("native_profiler");
        $__internal_193e38effe05bacb5b78c4f202230c5883953a48ea1e2d1bb048d210ea01cfbe->enter($__internal_193e38effe05bacb5b78c4f202230c5883953a48ea1e2d1bb048d210ea01cfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_193e38effe05bacb5b78c4f202230c5883953a48ea1e2d1bb048d210ea01cfbe->leave($__internal_193e38effe05bacb5b78c4f202230c5883953a48ea1e2d1bb048d210ea01cfbe_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_de894610a89dae71fe2095c50f0673edf2243a53984eace433ef0e635d636cc4 = $this->env->getExtension("native_profiler");
        $__internal_de894610a89dae71fe2095c50f0673edf2243a53984eace433ef0e635d636cc4->enter($__internal_de894610a89dae71fe2095c50f0673edf2243a53984eace433ef0e635d636cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_de894610a89dae71fe2095c50f0673edf2243a53984eace433ef0e635d636cc4->leave($__internal_de894610a89dae71fe2095c50f0673edf2243a53984eace433ef0e635d636cc4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
