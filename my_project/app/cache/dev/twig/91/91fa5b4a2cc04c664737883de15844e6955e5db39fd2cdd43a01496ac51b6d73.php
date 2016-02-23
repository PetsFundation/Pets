<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_90bda33cef6ea34ab805870c969e01047c9510289db87fe193ac6d1bf99364de extends Twig_Template
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
        $__internal_e7b1f19b5242cb6dd6a29e72422ba35841e3b24aa046070754aa9ae5166c850c = $this->env->getExtension("native_profiler");
        $__internal_e7b1f19b5242cb6dd6a29e72422ba35841e3b24aa046070754aa9ae5166c850c->enter($__internal_e7b1f19b5242cb6dd6a29e72422ba35841e3b24aa046070754aa9ae5166c850c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e7b1f19b5242cb6dd6a29e72422ba35841e3b24aa046070754aa9ae5166c850c->leave($__internal_e7b1f19b5242cb6dd6a29e72422ba35841e3b24aa046070754aa9ae5166c850c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
