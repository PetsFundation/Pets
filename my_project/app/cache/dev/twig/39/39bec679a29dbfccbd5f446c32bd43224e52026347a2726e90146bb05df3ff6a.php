<?php

/* animales/edit.html.twig */
class __TwigTemplate_c44c42ff07c0a6d54bfcbf0c582b87c3a62fb2f4630fa1cdfbe117f74203870b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "animales/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6b15bf9799cb825af1854288b2b18fcec849b9d1d9ae25e0d98f012c2331f54 = $this->env->getExtension("native_profiler");
        $__internal_d6b15bf9799cb825af1854288b2b18fcec849b9d1d9ae25e0d98f012c2331f54->enter($__internal_d6b15bf9799cb825af1854288b2b18fcec849b9d1d9ae25e0d98f012c2331f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "animales/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b15bf9799cb825af1854288b2b18fcec849b9d1d9ae25e0d98f012c2331f54->leave($__internal_d6b15bf9799cb825af1854288b2b18fcec849b9d1d9ae25e0d98f012c2331f54_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_884b39a9f87824670e6cfcf2125162c4376727820f3c4ffce2550820fe42364e = $this->env->getExtension("native_profiler");
        $__internal_884b39a9f87824670e6cfcf2125162c4376727820f3c4ffce2550820fe42364e->enter($__internal_884b39a9f87824670e6cfcf2125162c4376727820f3c4ffce2550820fe42364e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Animales edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("animales_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_884b39a9f87824670e6cfcf2125162c4376727820f3c4ffce2550820fe42364e->leave($__internal_884b39a9f87824670e6cfcf2125162c4376727820f3c4ffce2550820fe42364e_prof);

    }

    public function getTemplateName()
    {
        return "animales/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Animales edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('animales_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
