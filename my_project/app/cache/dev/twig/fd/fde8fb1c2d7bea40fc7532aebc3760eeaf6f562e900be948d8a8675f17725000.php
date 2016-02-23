<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_2e3e52985ce43cbf9bd0db76aa4b86c47af51c7f93003e0d40e746b5821de4bb extends Twig_Template
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
        $__internal_10f7047a87b2cf84c66b6fb5b4154e1f034180a630b59002f92f2bfa52ea0f03 = $this->env->getExtension("native_profiler");
        $__internal_10f7047a87b2cf84c66b6fb5b4154e1f034180a630b59002f92f2bfa52ea0f03->enter($__internal_10f7047a87b2cf84c66b6fb5b4154e1f034180a630b59002f92f2bfa52ea0f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_10f7047a87b2cf84c66b6fb5b4154e1f034180a630b59002f92f2bfa52ea0f03->leave($__internal_10f7047a87b2cf84c66b6fb5b4154e1f034180a630b59002f92f2bfa52ea0f03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
