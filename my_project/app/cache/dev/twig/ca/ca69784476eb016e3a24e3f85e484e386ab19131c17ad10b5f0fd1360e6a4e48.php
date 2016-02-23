<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_536853065e44a3d152d8e88c722e43abb06a062b9a7cd9cea5d680ca680a58a4 extends Twig_Template
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
        $__internal_e7a066ca75f0230239858f9733386e4055d89a27857676cc1a68f31efbce881a = $this->env->getExtension("native_profiler");
        $__internal_e7a066ca75f0230239858f9733386e4055d89a27857676cc1a68f31efbce881a->enter($__internal_e7a066ca75f0230239858f9733386e4055d89a27857676cc1a68f31efbce881a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e7a066ca75f0230239858f9733386e4055d89a27857676cc1a68f31efbce881a->leave($__internal_e7a066ca75f0230239858f9733386e4055d89a27857676cc1a68f31efbce881a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c1ff37af6ad87459b5b0b63469ccfb19bf9b4ebaa37a9dc273ebed8aa6709130 = $this->env->getExtension("native_profiler");
        $__internal_c1ff37af6ad87459b5b0b63469ccfb19bf9b4ebaa37a9dc273ebed8aa6709130->enter($__internal_c1ff37af6ad87459b5b0b63469ccfb19bf9b4ebaa37a9dc273ebed8aa6709130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c1ff37af6ad87459b5b0b63469ccfb19bf9b4ebaa37a9dc273ebed8aa6709130->leave($__internal_c1ff37af6ad87459b5b0b63469ccfb19bf9b4ebaa37a9dc273ebed8aa6709130_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b39c3319cef07f8b01105a6ffa933bafa4e3f367462710696235a122266a704c = $this->env->getExtension("native_profiler");
        $__internal_b39c3319cef07f8b01105a6ffa933bafa4e3f367462710696235a122266a704c->enter($__internal_b39c3319cef07f8b01105a6ffa933bafa4e3f367462710696235a122266a704c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b39c3319cef07f8b01105a6ffa933bafa4e3f367462710696235a122266a704c->leave($__internal_b39c3319cef07f8b01105a6ffa933bafa4e3f367462710696235a122266a704c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_146380766bb592eb047e70581b69c0bd12c63311c7fa2c2be56a400fa8f1839e = $this->env->getExtension("native_profiler");
        $__internal_146380766bb592eb047e70581b69c0bd12c63311c7fa2c2be56a400fa8f1839e->enter($__internal_146380766bb592eb047e70581b69c0bd12c63311c7fa2c2be56a400fa8f1839e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_146380766bb592eb047e70581b69c0bd12c63311c7fa2c2be56a400fa8f1839e->leave($__internal_146380766bb592eb047e70581b69c0bd12c63311c7fa2c2be56a400fa8f1839e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
