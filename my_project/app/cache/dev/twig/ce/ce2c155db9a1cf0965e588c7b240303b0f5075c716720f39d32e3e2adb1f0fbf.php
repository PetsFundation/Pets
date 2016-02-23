<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f4172796acab4438deef1aab86b889792eb43b5e75aed2ebc55855e684a4fb89 extends Twig_Template
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
        $__internal_39d32607bd2c1c6bcc6586dbafabde8a500b9c9456b94a9f7625cfc94ad71f62 = $this->env->getExtension("native_profiler");
        $__internal_39d32607bd2c1c6bcc6586dbafabde8a500b9c9456b94a9f7625cfc94ad71f62->enter($__internal_39d32607bd2c1c6bcc6586dbafabde8a500b9c9456b94a9f7625cfc94ad71f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_39d32607bd2c1c6bcc6586dbafabde8a500b9c9456b94a9f7625cfc94ad71f62->leave($__internal_39d32607bd2c1c6bcc6586dbafabde8a500b9c9456b94a9f7625cfc94ad71f62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
