<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f00d35714eef09dd7f2b2100f95d73a57b68c5f3590db3523342b65a1982850d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52d5c76d42be631ab07075673113ce4c9d51b37f3d38bb62f0b0ac173d9dc971 = $this->env->getExtension("native_profiler");
        $__internal_52d5c76d42be631ab07075673113ce4c9d51b37f3d38bb62f0b0ac173d9dc971->enter($__internal_52d5c76d42be631ab07075673113ce4c9d51b37f3d38bb62f0b0ac173d9dc971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52d5c76d42be631ab07075673113ce4c9d51b37f3d38bb62f0b0ac173d9dc971->leave($__internal_52d5c76d42be631ab07075673113ce4c9d51b37f3d38bb62f0b0ac173d9dc971_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c69a51def8e90af541fe0fd59761799da9bf08ff9e2938e52f22e0b13a2b4bf5 = $this->env->getExtension("native_profiler");
        $__internal_c69a51def8e90af541fe0fd59761799da9bf08ff9e2938e52f22e0b13a2b4bf5->enter($__internal_c69a51def8e90af541fe0fd59761799da9bf08ff9e2938e52f22e0b13a2b4bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c69a51def8e90af541fe0fd59761799da9bf08ff9e2938e52f22e0b13a2b4bf5->leave($__internal_c69a51def8e90af541fe0fd59761799da9bf08ff9e2938e52f22e0b13a2b4bf5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61a69bd5daa6c9328076bbd9fd15acdde0ecca9318186e4bf15938d2c4d59b5f = $this->env->getExtension("native_profiler");
        $__internal_61a69bd5daa6c9328076bbd9fd15acdde0ecca9318186e4bf15938d2c4d59b5f->enter($__internal_61a69bd5daa6c9328076bbd9fd15acdde0ecca9318186e4bf15938d2c4d59b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_61a69bd5daa6c9328076bbd9fd15acdde0ecca9318186e4bf15938d2c4d59b5f->leave($__internal_61a69bd5daa6c9328076bbd9fd15acdde0ecca9318186e4bf15938d2c4d59b5f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f835d8f22d4236d46333766395898b2de60cecac662833d9d9ec9ff13ca627d0 = $this->env->getExtension("native_profiler");
        $__internal_f835d8f22d4236d46333766395898b2de60cecac662833d9d9ec9ff13ca627d0->enter($__internal_f835d8f22d4236d46333766395898b2de60cecac662833d9d9ec9ff13ca627d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f835d8f22d4236d46333766395898b2de60cecac662833d9d9ec9ff13ca627d0->leave($__internal_f835d8f22d4236d46333766395898b2de60cecac662833d9d9ec9ff13ca627d0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
