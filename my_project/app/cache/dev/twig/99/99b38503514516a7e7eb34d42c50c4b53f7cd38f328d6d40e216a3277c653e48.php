<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5a816a520250b85d03943ef1cd8a0fd9e4b38de177ab9d7b959ef55b09de1ccf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2aa8fe5bcce12112abdd374f857b12e51eec6da4bc675f31aadde04da6dded48 = $this->env->getExtension("native_profiler");
        $__internal_2aa8fe5bcce12112abdd374f857b12e51eec6da4bc675f31aadde04da6dded48->enter($__internal_2aa8fe5bcce12112abdd374f857b12e51eec6da4bc675f31aadde04da6dded48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2aa8fe5bcce12112abdd374f857b12e51eec6da4bc675f31aadde04da6dded48->leave($__internal_2aa8fe5bcce12112abdd374f857b12e51eec6da4bc675f31aadde04da6dded48_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1098c32692642a7a4ad0cc01383b7aeb0c7072ee7780cbbc4b2f52e3465ea9c = $this->env->getExtension("native_profiler");
        $__internal_d1098c32692642a7a4ad0cc01383b7aeb0c7072ee7780cbbc4b2f52e3465ea9c->enter($__internal_d1098c32692642a7a4ad0cc01383b7aeb0c7072ee7780cbbc4b2f52e3465ea9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d1098c32692642a7a4ad0cc01383b7aeb0c7072ee7780cbbc4b2f52e3465ea9c->leave($__internal_d1098c32692642a7a4ad0cc01383b7aeb0c7072ee7780cbbc4b2f52e3465ea9c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
