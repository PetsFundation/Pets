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
        $__internal_7f396fed2810d563cdf97e3640a06b4f35c6e8e32e9d4e8a354fd602a29ddf55 = $this->env->getExtension("native_profiler");
        $__internal_7f396fed2810d563cdf97e3640a06b4f35c6e8e32e9d4e8a354fd602a29ddf55->enter($__internal_7f396fed2810d563cdf97e3640a06b4f35c6e8e32e9d4e8a354fd602a29ddf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f396fed2810d563cdf97e3640a06b4f35c6e8e32e9d4e8a354fd602a29ddf55->leave($__internal_7f396fed2810d563cdf97e3640a06b4f35c6e8e32e9d4e8a354fd602a29ddf55_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b99ae279c55e9173f6ffeedd4590da046800eb173f3533967e2fe4eee8e6918 = $this->env->getExtension("native_profiler");
        $__internal_3b99ae279c55e9173f6ffeedd4590da046800eb173f3533967e2fe4eee8e6918->enter($__internal_3b99ae279c55e9173f6ffeedd4590da046800eb173f3533967e2fe4eee8e6918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b99ae279c55e9173f6ffeedd4590da046800eb173f3533967e2fe4eee8e6918->leave($__internal_3b99ae279c55e9173f6ffeedd4590da046800eb173f3533967e2fe4eee8e6918_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f266840ad86a9b8bfc94597ae90c79203c9beab72c45bc179a1cbcd5e0f29165 = $this->env->getExtension("native_profiler");
        $__internal_f266840ad86a9b8bfc94597ae90c79203c9beab72c45bc179a1cbcd5e0f29165->enter($__internal_f266840ad86a9b8bfc94597ae90c79203c9beab72c45bc179a1cbcd5e0f29165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f266840ad86a9b8bfc94597ae90c79203c9beab72c45bc179a1cbcd5e0f29165->leave($__internal_f266840ad86a9b8bfc94597ae90c79203c9beab72c45bc179a1cbcd5e0f29165_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e1f07ae2ac8cac7a4908ab9bf7d5f62facb47a519ce2ddb5fe5bc9827eb2c73 = $this->env->getExtension("native_profiler");
        $__internal_8e1f07ae2ac8cac7a4908ab9bf7d5f62facb47a519ce2ddb5fe5bc9827eb2c73->enter($__internal_8e1f07ae2ac8cac7a4908ab9bf7d5f62facb47a519ce2ddb5fe5bc9827eb2c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8e1f07ae2ac8cac7a4908ab9bf7d5f62facb47a519ce2ddb5fe5bc9827eb2c73->leave($__internal_8e1f07ae2ac8cac7a4908ab9bf7d5f62facb47a519ce2ddb5fe5bc9827eb2c73_prof);

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
