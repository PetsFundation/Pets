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
        $__internal_27c9dfc57e4c68527ff983aac97896a1a78dd82c954ce0d7abbf575baaa01356 = $this->env->getExtension("native_profiler");
        $__internal_27c9dfc57e4c68527ff983aac97896a1a78dd82c954ce0d7abbf575baaa01356->enter($__internal_27c9dfc57e4c68527ff983aac97896a1a78dd82c954ce0d7abbf575baaa01356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27c9dfc57e4c68527ff983aac97896a1a78dd82c954ce0d7abbf575baaa01356->leave($__internal_27c9dfc57e4c68527ff983aac97896a1a78dd82c954ce0d7abbf575baaa01356_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ba48f9de51be8a16677511348fdcbf124a06f43a2cf996036642c8e840f7b856 = $this->env->getExtension("native_profiler");
        $__internal_ba48f9de51be8a16677511348fdcbf124a06f43a2cf996036642c8e840f7b856->enter($__internal_ba48f9de51be8a16677511348fdcbf124a06f43a2cf996036642c8e840f7b856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ba48f9de51be8a16677511348fdcbf124a06f43a2cf996036642c8e840f7b856->leave($__internal_ba48f9de51be8a16677511348fdcbf124a06f43a2cf996036642c8e840f7b856_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad9aa1ec894886bf11c0e8f5e91e0e8bfb990d9e9ac7ff04aa471d50c08618d9 = $this->env->getExtension("native_profiler");
        $__internal_ad9aa1ec894886bf11c0e8f5e91e0e8bfb990d9e9ac7ff04aa471d50c08618d9->enter($__internal_ad9aa1ec894886bf11c0e8f5e91e0e8bfb990d9e9ac7ff04aa471d50c08618d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ad9aa1ec894886bf11c0e8f5e91e0e8bfb990d9e9ac7ff04aa471d50c08618d9->leave($__internal_ad9aa1ec894886bf11c0e8f5e91e0e8bfb990d9e9ac7ff04aa471d50c08618d9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_866ed8521a2cf943c11c167925a79299f39af1dce4d55425ff05ff62f679bce8 = $this->env->getExtension("native_profiler");
        $__internal_866ed8521a2cf943c11c167925a79299f39af1dce4d55425ff05ff62f679bce8->enter($__internal_866ed8521a2cf943c11c167925a79299f39af1dce4d55425ff05ff62f679bce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_866ed8521a2cf943c11c167925a79299f39af1dce4d55425ff05ff62f679bce8->leave($__internal_866ed8521a2cf943c11c167925a79299f39af1dce4d55425ff05ff62f679bce8_prof);

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
