<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_263c46df61493283b001898cfc4a707bf87ef5270e9b4c82aceb8c9dd56d8569 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a4138db8f6b9a999a3b1e6cbd0b3c911a413d103c38a93331858e533df75e40a = $this->env->getExtension("native_profiler");
        $__internal_a4138db8f6b9a999a3b1e6cbd0b3c911a413d103c38a93331858e533df75e40a->enter($__internal_a4138db8f6b9a999a3b1e6cbd0b3c911a413d103c38a93331858e533df75e40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4138db8f6b9a999a3b1e6cbd0b3c911a413d103c38a93331858e533df75e40a->leave($__internal_a4138db8f6b9a999a3b1e6cbd0b3c911a413d103c38a93331858e533df75e40a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f19f9a4db654dd23897ede7cdb892e17128c35ca2660e3b1c052da5fdcd60ff = $this->env->getExtension("native_profiler");
        $__internal_4f19f9a4db654dd23897ede7cdb892e17128c35ca2660e3b1c052da5fdcd60ff->enter($__internal_4f19f9a4db654dd23897ede7cdb892e17128c35ca2660e3b1c052da5fdcd60ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4f19f9a4db654dd23897ede7cdb892e17128c35ca2660e3b1c052da5fdcd60ff->leave($__internal_4f19f9a4db654dd23897ede7cdb892e17128c35ca2660e3b1c052da5fdcd60ff_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_134473b173e589be77977babca9424cc28fe0243f4f9fd2785cf98a2a6ed436d = $this->env->getExtension("native_profiler");
        $__internal_134473b173e589be77977babca9424cc28fe0243f4f9fd2785cf98a2a6ed436d->enter($__internal_134473b173e589be77977babca9424cc28fe0243f4f9fd2785cf98a2a6ed436d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_134473b173e589be77977babca9424cc28fe0243f4f9fd2785cf98a2a6ed436d->leave($__internal_134473b173e589be77977babca9424cc28fe0243f4f9fd2785cf98a2a6ed436d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e41cfc633d9d278e034c4a96c9a3d6dc9208ecfb3a6652d7908483988bd246ad = $this->env->getExtension("native_profiler");
        $__internal_e41cfc633d9d278e034c4a96c9a3d6dc9208ecfb3a6652d7908483988bd246ad->enter($__internal_e41cfc633d9d278e034c4a96c9a3d6dc9208ecfb3a6652d7908483988bd246ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e41cfc633d9d278e034c4a96c9a3d6dc9208ecfb3a6652d7908483988bd246ad->leave($__internal_e41cfc633d9d278e034c4a96c9a3d6dc9208ecfb3a6652d7908483988bd246ad_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
