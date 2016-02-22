<?php

/* :propietario:index.html.twig */
class __TwigTemplate_c6faa746683fb943ac5884c329dfe89c75ba8ff821d02673e41831f5283a92c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":propietario:index.html.twig", 1);
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
        $__internal_e3ff471ac3fdf9d95ec95045ea291aad25468c8670c7606e95e4eec532495e1b = $this->env->getExtension("native_profiler");
        $__internal_e3ff471ac3fdf9d95ec95045ea291aad25468c8670c7606e95e4eec532495e1b->enter($__internal_e3ff471ac3fdf9d95ec95045ea291aad25468c8670c7606e95e4eec532495e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":propietario:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3ff471ac3fdf9d95ec95045ea291aad25468c8670c7606e95e4eec532495e1b->leave($__internal_e3ff471ac3fdf9d95ec95045ea291aad25468c8670c7606e95e4eec532495e1b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7e00d61b7943cd5b868eaa5511f9f5e20f5e08522e0ebb96286bbdfb8ff1c47 = $this->env->getExtension("native_profiler");
        $__internal_d7e00d61b7943cd5b868eaa5511f9f5e20f5e08522e0ebb96286bbdfb8ff1c47->enter($__internal_d7e00d61b7943cd5b868eaa5511f9f5e20f5e08522e0ebb96286bbdfb8ff1c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Propietario list</h1>

    <table>
        <thead>
            <tr>
                <th>Id&nbsp;&nbsp;&nbsp;</th>
                <th>Nombre&nbsp;&nbsp;&nbsp;</th>
                <th>Email&nbsp;&nbsp;&nbsp;</th>
                <th>Apellido&nbsp;&nbsp;&nbsp;</th>
                <th>Anuncio&nbsp;&nbsp;&nbsp;</th>
                <th>Telefono&nbsp;&nbsp;&nbsp;</th>
                <th>Direccion&nbsp;&nbsp;</th>
                <th>Cp&nbsp;&nbsp;&nbsp;</th>
                <th>Animal&nbsp;&nbsp;&nbsp;</th>
                <th>Actions&nbsp;&nbsp;&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["propietarios"]) ? $context["propietarios"] : $this->getContext($context, "propietarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["propietario"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("propietario_show", array("id" => $this->getAttribute($context["propietario"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["propietario"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["propietario"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["propietario"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["propietario"], "apellido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["propietario"], "anuncio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["propietario"], "telefono", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["propietario"], "direccion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["propietario"], "cP", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["propietario"], "animal", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("propietario_show", array("id" => $this->getAttribute($context["propietario"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("propietario_edit", array("id" => $this->getAttribute($context["propietario"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propietario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("propietario_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_d7e00d61b7943cd5b868eaa5511f9f5e20f5e08522e0ebb96286bbdfb8ff1c47->leave($__internal_d7e00d61b7943cd5b868eaa5511f9f5e20f5e08522e0ebb96286bbdfb8ff1c47_prof);

    }

    public function getTemplateName()
    {
        return ":propietario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 50,  126 => 45,  114 => 39,  108 => 36,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  67 => 24,  64 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Propietario list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id&nbsp;&nbsp;&nbsp;</th>*/
/*                 <th>Nombre&nbsp;&nbsp;&nbsp;</th>*/
/*                 <th>Email&nbsp;&nbsp;&nbsp;</th>*/
/*                 <th>Apellido&nbsp;&nbsp;&nbsp;</th>*/
/*                 <th>Anuncio&nbsp;&nbsp;&nbsp;</th>*/
/*                 <th>Telefono&nbsp;&nbsp;&nbsp;</th>*/
/*                 <th>Direccion&nbsp;&nbsp;</th>*/
/*                 <th>Cp&nbsp;&nbsp;&nbsp;</th>*/
/*                 <th>Animal&nbsp;&nbsp;&nbsp;</th>*/
/*                 <th>Actions&nbsp;&nbsp;&nbsp;</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for propietario in propietarios %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('propietario_show', { 'id': propietario.id }) }}">{{ propietario.id }}</a></td>*/
/*                 <td>{{ propietario.nombre }}</td>*/
/*                 <td>{{ propietario.email }}</td>*/
/*                 <td>{{ propietario.apellido }}</td>*/
/*                 <td>{{ propietario.anuncio }}</td>*/
/*                 <td>{{ propietario.telefono }}</td>*/
/*                 <td>{{ propietario.direccion }}</td>*/
/*                 <td>{{ propietario.cP }}</td>*/
/*                 <td>{{ propietario.animal }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('propietario_show', { 'id': propietario.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('propietario_edit', { 'id': propietario.id }) }}">edit</a>*/
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
/*             <a href="{{ path('propietario_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
