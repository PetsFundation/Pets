<?php

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_c8fcb881af11c50ffd8dd64f71e636d56e53d6466f9ec583b817214379277f64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
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
<<<<<<< HEAD
        $__internal_92b0deb8d421c588f58740fc89d6dd7d426c5684fe0d0dcc91a56926dd2826bc = $this->env->getExtension("native_profiler");
        $__internal_92b0deb8d421c588f58740fc89d6dd7d426c5684fe0d0dcc91a56926dd2826bc->enter($__internal_92b0deb8d421c588f58740fc89d6dd7d426c5684fe0d0dcc91a56926dd2826bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92b0deb8d421c588f58740fc89d6dd7d426c5684fe0d0dcc91a56926dd2826bc->leave($__internal_92b0deb8d421c588f58740fc89d6dd7d426c5684fe0d0dcc91a56926dd2826bc_prof);
=======
        $__internal_9918f299ea210b5b617c6d7cb64c908af8ff7f953283445b26bcd3b4d691544b = $this->env->getExtension("native_profiler");
        $__internal_9918f299ea210b5b617c6d7cb64c908af8ff7f953283445b26bcd3b4d691544b->enter($__internal_9918f299ea210b5b617c6d7cb64c908af8ff7f953283445b26bcd3b4d691544b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9918f299ea210b5b617c6d7cb64c908af8ff7f953283445b26bcd3b4d691544b->leave($__internal_9918f299ea210b5b617c6d7cb64c908af8ff7f953283445b26bcd3b4d691544b_prof);
>>>>>>> david3

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_4318af6f46d09dbaa77933b14c532780d737a2cdfaaec2f40191ad027b25e2c7 = $this->env->getExtension("native_profiler");
        $__internal_4318af6f46d09dbaa77933b14c532780d737a2cdfaaec2f40191ad027b25e2c7->enter($__internal_4318af6f46d09dbaa77933b14c532780d737a2cdfaaec2f40191ad027b25e2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
=======
        $__internal_648502e449205526bffd09144f2bce3b0034ac56f0991ac7f180dfcd905bb133 = $this->env->getExtension("native_profiler");
        $__internal_648502e449205526bffd09144f2bce3b0034ac56f0991ac7f180dfcd905bb133->enter($__internal_648502e449205526bffd09144f2bce3b0034ac56f0991ac7f180dfcd905bb133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
>>>>>>> david3

        // line 4
        echo "    ";
        $context["time"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array())) ? (sprintf("%0.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()))) : ("n/a"));
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url"))));
        echo "
";
        
<<<<<<< HEAD
        $__internal_4318af6f46d09dbaa77933b14c532780d737a2cdfaaec2f40191ad027b25e2c7->leave($__internal_4318af6f46d09dbaa77933b14c532780d737a2cdfaaec2f40191ad027b25e2c7_prof);
=======
        $__internal_648502e449205526bffd09144f2bce3b0034ac56f0991ac7f180dfcd905bb133->leave($__internal_648502e449205526bffd09144f2bce3b0034ac56f0991ac7f180dfcd905bb133_prof);
>>>>>>> david3

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_5752fc0d6b70277dbdd6a3a60543cbf080f97269cdc92c8a65204f35b641a496 = $this->env->getExtension("native_profiler");
        $__internal_5752fc0d6b70277dbdd6a3a60543cbf080f97269cdc92c8a65204f35b641a496->enter($__internal_5752fc0d6b70277dbdd6a3a60543cbf080f97269cdc92c8a65204f35b641a496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
=======
        $__internal_374eb0c094c3ced47ca1740c54d98862e2df1fd601f168bc8af3749c0905e450 = $this->env->getExtension("native_profiler");
        $__internal_374eb0c094c3ced47ca1740c54d98862e2df1fd601f168bc8af3749c0905e450->enter($__internal_374eb0c094c3ced47ca1740c54d98862e2df1fd601f168bc8af3749c0905e450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));
>>>>>>> david3

        // line 34
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 35
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "</span>
        <strong>Twig</strong>
    </span>
";
        
<<<<<<< HEAD
        $__internal_5752fc0d6b70277dbdd6a3a60543cbf080f97269cdc92c8a65204f35b641a496->leave($__internal_5752fc0d6b70277dbdd6a3a60543cbf080f97269cdc92c8a65204f35b641a496_prof);
=======
        $__internal_374eb0c094c3ced47ca1740c54d98862e2df1fd601f168bc8af3749c0905e450->leave($__internal_374eb0c094c3ced47ca1740c54d98862e2df1fd601f168bc8af3749c0905e450_prof);
>>>>>>> david3

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_daacdb0d364097a282514e6897c796df06098a9eac82017992b9f1214672c0be = $this->env->getExtension("native_profiler");
        $__internal_daacdb0d364097a282514e6897c796df06098a9eac82017992b9f1214672c0be->enter($__internal_daacdb0d364097a282514e6897c796df06098a9eac82017992b9f1214672c0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
=======
        $__internal_5ab9f0fc4d78681c0c8135edfb06c995c70f0ee7928da0fca2e01c71794ec8df = $this->env->getExtension("native_profiler");
        $__internal_5ab9f0fc4d78681c0c8135edfb06c995c70f0ee7928da0fca2e01c71794ec8df->enter($__internal_5ab9f0fc4d78681c0c8135edfb06c995c70f0ee7928da0fca2e01c71794ec8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));
>>>>>>> david3

        // line 41
        echo "    ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()) == 0)) {
            // line 42
            echo "        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    ";
        } else {
            // line 48
            echo "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 52
            echo twig_escape_filter($this->env, sprintf("%0.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array())), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array()));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 87
                echo "                <tr>
                    <td>";
                // line 88
                echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                echo "</td>
                    <td class=\"font-normal\">";
                // line 89
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "htmlcallgraph", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        
<<<<<<< HEAD
        $__internal_daacdb0d364097a282514e6897c796df06098a9eac82017992b9f1214672c0be->leave($__internal_daacdb0d364097a282514e6897c796df06098a9eac82017992b9f1214672c0be_prof);
=======
        $__internal_5ab9f0fc4d78681c0c8135edfb06c995c70f0ee7928da0fca2e01c71794ec8df->leave($__internal_5ab9f0fc4d78681c0c8135edfb06c995c70f0ee7928da0fca2e01c71794ec8df_prof);
>>>>>>> david3

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 98,  216 => 92,  207 => 89,  203 => 88,  200 => 87,  196 => 86,  174 => 67,  166 => 62,  158 => 57,  150 => 52,  144 => 48,  136 => 42,  133 => 41,  127 => 40,  116 => 35,  113 => 34,  107 => 33,  98 => 30,  95 => 29,  89 => 26,  82 => 22,  75 => 18,  68 => 14,  64 => 12,  62 => 11,  59 => 10,  53 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set time = collector.templatecount ? '%0.0f'|format(collector.time) : 'n/a' %}*/
/*     {% set icon %}*/
/*         {{ include('@WebProfiler/Icon/twig.svg') }}*/
/*         <span class="sf-toolbar-value">{{ time }}</span>*/
/*         <span class="sf-toolbar-label">ms</span>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Render Time</b>*/
/*             <span>{{ time }} ms</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Template Calls</b>*/
/*             <span class="sf-toolbar-status">{{ collector.templatecount }}</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Block Calls</b>*/
/*             <span class="sf-toolbar-status">{{ collector.blockcount }}</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Macro Calls</b>*/
/*             <span class="sf-toolbar-status">{{ collector.macrocount }}</span>*/
/*         </div>*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/twig.svg') }}</span>*/
/*         <strong>Twig</strong>*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {% if collector.templatecount == 0 %}*/
/*         <h2>Twig</h2>*/
/* */
/*         <div class="empty">*/
/*             <p>No Twig templates were rendered for this request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <h2>Twig Metrics</h2>*/
/* */
/*         <div class="metrics">*/
/*             <div class="metric">*/
/*                 <span class="value">{{ '%0.0f'|format(collector.time) }} <span class="unit">ms</span></span>*/
/*                 <span class="label">Render time</span>*/
/*             </div>*/
/* */
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.templatecount }}</span>*/
/*                 <span class="label">Template calls</span>*/
/*             </div>*/
/* */
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.blockcount }}</span>*/
/*                 <span class="label">Block calls</span>*/
/*             </div>*/
/* */
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.macrocount }}</span>*/
/*                 <span class="label">Macro calls</span>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <p class="help">*/
/*             Render time includes sub-requests rendering time (if any).*/
/*         </p>*/
/* */
/*         <h2>Rendered Templates</h2>*/
/* */
/*         <table>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th scope="col">Template Name</th>*/
/*                     <th scope="col">Render Count</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for template, count in collector.templates %}*/
/*                 <tr>*/
/*                     <td>{{ template }}</td>*/
/*                     <td class="font-normal">{{ count }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/* */
/*         <h2>Rendering Call Graph</h2>*/
/* */
/*         <div id="twig-dump">*/
/*             {{ collector.htmlcallgraph }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
