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
        $__internal_587094f63f4810134b5cd9b575ce422a7300f100743ea6004769937446693db4 = $this->env->getExtension("native_profiler");
        $__internal_587094f63f4810134b5cd9b575ce422a7300f100743ea6004769937446693db4->enter($__internal_587094f63f4810134b5cd9b575ce422a7300f100743ea6004769937446693db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_587094f63f4810134b5cd9b575ce422a7300f100743ea6004769937446693db4->leave($__internal_587094f63f4810134b5cd9b575ce422a7300f100743ea6004769937446693db4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dc1a62004e15559be40c7b08b1cd86feb837ea188872dc7419eabccfd5336811 = $this->env->getExtension("native_profiler");
        $__internal_dc1a62004e15559be40c7b08b1cd86feb837ea188872dc7419eabccfd5336811->enter($__internal_dc1a62004e15559be40c7b08b1cd86feb837ea188872dc7419eabccfd5336811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_dc1a62004e15559be40c7b08b1cd86feb837ea188872dc7419eabccfd5336811->leave($__internal_dc1a62004e15559be40c7b08b1cd86feb837ea188872dc7419eabccfd5336811_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cf7f49cf2ea14fa2628af309d578a2653555b1a2fce64d1c514ec1582fe8d696 = $this->env->getExtension("native_profiler");
        $__internal_cf7f49cf2ea14fa2628af309d578a2653555b1a2fce64d1c514ec1582fe8d696->enter($__internal_cf7f49cf2ea14fa2628af309d578a2653555b1a2fce64d1c514ec1582fe8d696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cf7f49cf2ea14fa2628af309d578a2653555b1a2fce64d1c514ec1582fe8d696->leave($__internal_cf7f49cf2ea14fa2628af309d578a2653555b1a2fce64d1c514ec1582fe8d696_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9c5f99dfe172df42add641f9892d40fc2ad1fe680ac7e3402d6cdd533528db15 = $this->env->getExtension("native_profiler");
        $__internal_9c5f99dfe172df42add641f9892d40fc2ad1fe680ac7e3402d6cdd533528db15->enter($__internal_9c5f99dfe172df42add641f9892d40fc2ad1fe680ac7e3402d6cdd533528db15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9c5f99dfe172df42add641f9892d40fc2ad1fe680ac7e3402d6cdd533528db15->leave($__internal_9c5f99dfe172df42add641f9892d40fc2ad1fe680ac7e3402d6cdd533528db15_prof);

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
