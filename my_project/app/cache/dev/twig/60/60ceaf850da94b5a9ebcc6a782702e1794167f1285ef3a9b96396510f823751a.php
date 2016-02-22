<?php

/* :animales:show.html.twig */
class __TwigTemplate_fd97e66ff8ec9d7240202aadad4199fa2c8ac3abd93d312921ea4282d8bb8496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":animales:show.html.twig", 1);
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
        $__internal_d3d9b11a434b9061aaa6a127c16b39af5cf88ce426056736eef51fb4d7f85650 = $this->env->getExtension("native_profiler");
        $__internal_d3d9b11a434b9061aaa6a127c16b39af5cf88ce426056736eef51fb4d7f85650->enter($__internal_d3d9b11a434b9061aaa6a127c16b39af5cf88ce426056736eef51fb4d7f85650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":animales:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3d9b11a434b9061aaa6a127c16b39af5cf88ce426056736eef51fb4d7f85650->leave($__internal_d3d9b11a434b9061aaa6a127c16b39af5cf88ce426056736eef51fb4d7f85650_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfd61d61dc59879063be9df0a06bbb9ebb4770f927583a586d23cceb2e13340b = $this->env->getExtension("native_profiler");
        $__internal_bfd61d61dc59879063be9df0a06bbb9ebb4770f927583a586d23cceb2e13340b->enter($__internal_bfd61d61dc59879063be9df0a06bbb9ebb4770f927583a586d23cceb2e13340b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Animales</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animale"]) ? $context["animale"] : $this->getContext($context, "animale")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animale"]) ? $context["animale"] : $this->getContext($context, "animale")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animale"]) ? $context["animale"] : $this->getContext($context, "animale")), "tipo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Raza</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animale"]) ? $context["animale"] : $this->getContext($context, "animale")), "raza", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexo</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animale"]) ? $context["animale"] : $this->getContext($context, "animale")), "sexo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nacimiento</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["animale"]) ? $context["animale"] : $this->getContext($context, "animale")), "nacimiento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["animale"]) ? $context["animale"] : $this->getContext($context, "animale")), "nacimiento", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Propietario</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animale"]) ? $context["animale"] : $this->getContext($context, "animale")), "propietario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pedigri</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["animale"]) ? $context["animale"] : $this->getContext($context, "animale")), "pedigri", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("animales_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("animales_edit", array("id" => $this->getAttribute((isset($context["animale"]) ? $context["animale"] : $this->getContext($context, "animale")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bfd61d61dc59879063be9df0a06bbb9ebb4770f927583a586d23cceb2e13340b->leave($__internal_bfd61d61dc59879063be9df0a06bbb9ebb4770f927583a586d23cceb2e13340b_prof);

    }

    public function getTemplateName()
    {
        return ":animales:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 53,  125 => 51,  119 => 48,  113 => 45,  99 => 38,  92 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Animales</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ animale.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ animale.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tipo</th>*/
/*                 <td>{{ animale.tipo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Raza</th>*/
/*                 <td>{{ animale.raza }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Sexo</th>*/
/*                 <td>{{ animale.sexo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nacimiento</th>*/
/*                 <td>{% if animale.nacimiento %}{{ animale.nacimiento|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Propietario</th>*/
/*                 <td>{{ animale.propietario }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Pedigri</th>*/
/*                 <td>{% if animale.pedigri %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('animales_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('animales_edit', { 'id': animale.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
