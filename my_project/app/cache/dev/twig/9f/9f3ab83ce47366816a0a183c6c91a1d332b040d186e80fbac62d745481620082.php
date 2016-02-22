<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d2bb5039191d84ccd75f3036d426811e5b47a8bec042a55cb57411d5191cf372 extends Twig_Template
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
        $__internal_df59f837f277f0bae3ee260e93f4f889e6cfaff7cdb4a72bdf29a238abd42c54 = $this->env->getExtension("native_profiler");
        $__internal_df59f837f277f0bae3ee260e93f4f889e6cfaff7cdb4a72bdf29a238abd42c54->enter($__internal_df59f837f277f0bae3ee260e93f4f889e6cfaff7cdb4a72bdf29a238abd42c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_df59f837f277f0bae3ee260e93f4f889e6cfaff7cdb4a72bdf29a238abd42c54->leave($__internal_df59f837f277f0bae3ee260e93f4f889e6cfaff7cdb4a72bdf29a238abd42c54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
