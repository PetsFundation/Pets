<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_24840ac1b85378f8e644b22235fef64cdc18f5337ae05bfdd033af3308400bf1 extends Twig_Template
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
        $__internal_7ae287dececc5ee735b0dfa9e949b59fd5c8f971231378d08a512d1acb9a8ce2 = $this->env->getExtension("native_profiler");
        $__internal_7ae287dececc5ee735b0dfa9e949b59fd5c8f971231378d08a512d1acb9a8ce2->enter($__internal_7ae287dececc5ee735b0dfa9e949b59fd5c8f971231378d08a512d1acb9a8ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7ae287dececc5ee735b0dfa9e949b59fd5c8f971231378d08a512d1acb9a8ce2->leave($__internal_7ae287dececc5ee735b0dfa9e949b59fd5c8f971231378d08a512d1acb9a8ce2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
