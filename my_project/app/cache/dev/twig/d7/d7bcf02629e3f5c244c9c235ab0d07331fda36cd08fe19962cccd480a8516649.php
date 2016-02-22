<?php

<<<<<<< HEAD
/* @WebProfiler/Profiler/header.html.twig */
=======
/* WebProfilerBundle:Profiler:header.html.twig */
>>>>>>> david3
class __TwigTemplate_4e58bd657e326a03e15cd61a95810fdd496486af1184340ba929e1c313ef342a extends Twig_Template
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
<<<<<<< HEAD
        $__internal_bb85dce63ee2246734f1704bd1e7706cbd1972cabdfc0f2e7354399da1d3ee57 = $this->env->getExtension("native_profiler");
        $__internal_bb85dce63ee2246734f1704bd1e7706cbd1972cabdfc0f2e7354399da1d3ee57->enter($__internal_bb85dce63ee2246734f1704bd1e7706cbd1972cabdfc0f2e7354399da1d3ee57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));
=======
        $__internal_26d641c2f6e105d261a7de4c202ef2b55944cacf42d95fa25b7100e3a6f6752d = $this->env->getExtension("native_profiler");
        $__internal_26d641c2f6e105d261a7de4c202ef2b55944cacf42d95fa25b7100e3a6f6752d->enter($__internal_26d641c2f6e105d261a7de4c202ef2b55944cacf42d95fa25b7100e3a6f6752d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));
>>>>>>> david3

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
<<<<<<< HEAD
        $__internal_bb85dce63ee2246734f1704bd1e7706cbd1972cabdfc0f2e7354399da1d3ee57->leave($__internal_bb85dce63ee2246734f1704bd1e7706cbd1972cabdfc0f2e7354399da1d3ee57_prof);
=======
        $__internal_26d641c2f6e105d261a7de4c202ef2b55944cacf42d95fa25b7100e3a6f6752d->leave($__internal_26d641c2f6e105d261a7de4c202ef2b55944cacf42d95fa25b7100e3a6f6752d_prof);
>>>>>>> david3

    }

    public function getTemplateName()
    {
<<<<<<< HEAD
        return "@WebProfiler/Profiler/header.html.twig";
=======
        return "WebProfilerBundle:Profiler:header.html.twig";
>>>>>>> david3
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
