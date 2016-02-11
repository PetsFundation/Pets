<?php

/* animales/index.html.twig */
class __TwigTemplate_36dcd873f9fb9ac292c9e027389dd845ccf690b5b2cecd2efa2135cb83902095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "animales/index.html.twig", 1);
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
        $__internal_869baad5cb6e344e0d4468e022a4d4e65e070d21d60ac31223c47cb52be8841e = $this->env->getExtension("native_profiler");
        $__internal_869baad5cb6e344e0d4468e022a4d4e65e070d21d60ac31223c47cb52be8841e->enter($__internal_869baad5cb6e344e0d4468e022a4d4e65e070d21d60ac31223c47cb52be8841e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "animales/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_869baad5cb6e344e0d4468e022a4d4e65e070d21d60ac31223c47cb52be8841e->leave($__internal_869baad5cb6e344e0d4468e022a4d4e65e070d21d60ac31223c47cb52be8841e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_42ae79e9d64aa6d06ae774d94641a5b457cc2dd61ea1339d2b923def326399e6 = $this->env->getExtension("native_profiler");
        $__internal_42ae79e9d64aa6d06ae774d94641a5b457cc2dd61ea1339d2b923def326399e6->enter($__internal_42ae79e9d64aa6d06ae774d94641a5b457cc2dd61ea1339d2b923def326399e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lista de animales</h1>

    <table border=\"\">
        <thead>
            <tr>
                <th>Id&nbsp;&nbsp;&nbsp;</th>
                <th>Nombre&nbsp;&nbsp;&nbsp;</th>
                <th>Tipo&nbsp;&nbsp;&nbsp;</th>
                <th>Raza&nbsp;&nbsp;&nbsp;</th>
                <th>Sexo&nbsp;&nbsp;&nbsp;</th>
                <th>Nacimiento&nbsp;&nbsp;&nbsp;</th>
                <th>Propietario&nbsp;&nbsp;</th>
                <th>Pedigri&nbsp;&nbsp;&nbsp;</th>
                <th>Actions&nbsp;&nbsp;&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["animales"]) ? $context["animales"] : $this->getContext($context, "animales")));
        foreach ($context['_seq'] as $context["_key"] => $context["animale"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("animales_show", array("id" => $this->getAttribute($context["animale"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["animale"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["animale"], "nombre", array()), "html", null, true);
            echo "&nbsp;&nbsp;</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["animale"], "tipo", array()), "html", null, true);
            echo "&nbsp;&nbsp;</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["animale"], "raza", array()), "html", null, true);
            echo "&nbsp;&nbsp;</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["animale"], "sexo", array()), "html", null, true);
            echo "&nbsp;&nbsp;</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["animale"], "nacimiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["animale"], "nacimiento", array()), "Y-m-d"), "html", null, true);
                echo "&nbsp;&nbsp;";
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["animale"], "propietario", array()), "html", null, true);
            echo "&nbsp;&nbsp;</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["animale"], "pedigri", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("animales_show", array("id" => $this->getAttribute($context["animale"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("animales_edit", array("id" => $this->getAttribute($context["animale"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("animales_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_42ae79e9d64aa6d06ae774d94641a5b457cc2dd61ea1339d2b923def326399e6->leave($__internal_42ae79e9d64aa6d06ae774d94641a5b457cc2dd61ea1339d2b923def326399e6_prof);

    }

    public function getTemplateName()
    {
        return "animales/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 48,  128 => 43,  116 => 37,  110 => 34,  99 => 30,  95 => 29,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Lista de animales</h1>*/
/* */
/*     <table border="">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id&nbsp;&nbsp;&nbsp;</th>*/
/*                 <th>Nombre&nbsp;&nbsp;&nbsp;</th>*/
/*                 <th>Tipo&nbsp;&nbsp;&nbsp;</th>*/
/*                 <th>Raza&nbsp;&nbsp;&nbsp;</th>*/
/*                 <th>Sexo&nbsp;&nbsp;&nbsp;</th>*/
/*                 <th>Nacimiento&nbsp;&nbsp;&nbsp;</th>*/
/*                 <th>Propietario&nbsp;&nbsp;</th>*/
/*                 <th>Pedigri&nbsp;&nbsp;&nbsp;</th>*/
/*                 <th>Actions&nbsp;&nbsp;&nbsp;</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for animale in animales %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('animales_show', { 'id': animale.id }) }}">{{ animale.id }}</a></td>*/
/*                 <td>{{ animale.nombre }}&nbsp;&nbsp;</td>*/
/*                 <td>{{ animale.tipo }}&nbsp;&nbsp;</td>*/
/*                 <td>{{ animale.raza }}&nbsp;&nbsp;</td>*/
/*                 <td>{{ animale.sexo }}&nbsp;&nbsp;</td>*/
/*                 <td>{% if animale.nacimiento %}{{ animale.nacimiento|date('Y-m-d') }}&nbsp;&nbsp;{% endif %}</td>*/
/*                 <td>{{ animale.propietario }}&nbsp;&nbsp;</td>*/
/*                 <td>{% if animale.pedigri %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('animales_show', { 'id': animale.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('animales_edit', { 'id': animale.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('animales_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
