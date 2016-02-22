<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c62a1be908691c779ce8cc0924bf9ad20e642d970c8214ecd56c63ecf98ee4c2 extends Twig_Template
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
        $__internal_0137ad440aed7d6ebf2fbd40e2eb2e591212e809ee43960334f52cc594ca3fe4 = $this->env->getExtension("native_profiler");
        $__internal_0137ad440aed7d6ebf2fbd40e2eb2e591212e809ee43960334f52cc594ca3fe4->enter($__internal_0137ad440aed7d6ebf2fbd40e2eb2e591212e809ee43960334f52cc594ca3fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0137ad440aed7d6ebf2fbd40e2eb2e591212e809ee43960334f52cc594ca3fe4->leave($__internal_0137ad440aed7d6ebf2fbd40e2eb2e591212e809ee43960334f52cc594ca3fe4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
