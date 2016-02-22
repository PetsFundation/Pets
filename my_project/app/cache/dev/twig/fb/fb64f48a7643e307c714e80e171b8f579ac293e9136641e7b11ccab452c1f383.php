<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_17f79308be1429efae92aed64d06094d21d14cadd5d8516781bbfc74188df19f extends Twig_Template
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
        $__internal_8bff4dad912e35656dfcec0be49c45d76c9cbb1c817cff51d1dd8c2fda266b10 = $this->env->getExtension("native_profiler");
        $__internal_8bff4dad912e35656dfcec0be49c45d76c9cbb1c817cff51d1dd8c2fda266b10->enter($__internal_8bff4dad912e35656dfcec0be49c45d76c9cbb1c817cff51d1dd8c2fda266b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_8bff4dad912e35656dfcec0be49c45d76c9cbb1c817cff51d1dd8c2fda266b10->leave($__internal_8bff4dad912e35656dfcec0be49c45d76c9cbb1c817cff51d1dd8c2fda266b10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
