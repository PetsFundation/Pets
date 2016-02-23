<?php

/* :propietario:show.html.twig */
class __TwigTemplate_ce5f9d145915b89ac226a36c7a5ed1447e832b2ce707b04bbf27af40336fa1f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":propietario:show.html.twig", 1);
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
        $__internal_5c5dc0a02400557fdd1411dc49da5d96dbadbd2d8c361d6b08d6e634737aceb1 = $this->env->getExtension("native_profiler");
        $__internal_5c5dc0a02400557fdd1411dc49da5d96dbadbd2d8c361d6b08d6e634737aceb1->enter($__internal_5c5dc0a02400557fdd1411dc49da5d96dbadbd2d8c361d6b08d6e634737aceb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":propietario:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c5dc0a02400557fdd1411dc49da5d96dbadbd2d8c361d6b08d6e634737aceb1->leave($__internal_5c5dc0a02400557fdd1411dc49da5d96dbadbd2d8c361d6b08d6e634737aceb1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d06b0ccd6af3ef6d94ef7a49ba8c3ad95e1a2646dd51f36d19a8f0f1e5c46c0 = $this->env->getExtension("native_profiler");
        $__internal_8d06b0ccd6af3ef6d94ef7a49ba8c3ad95e1a2646dd51f36d19a8f0f1e5c46c0->enter($__internal_8d06b0ccd6af3ef6d94ef7a49ba8c3ad95e1a2646dd51f36d19a8f0f1e5c46c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Propietario</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "apellido", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Anuncio</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "anuncio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "telefono", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "direccion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cp</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "cP", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Animal</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "animal", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("propietario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("propietario_edit", array("id" => $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8d06b0ccd6af3ef6d94ef7a49ba8c3ad95e1a2646dd51f36d19a8f0f1e5c46c0->leave($__internal_8d06b0ccd6af3ef6d94ef7a49ba8c3ad95e1a2646dd51f36d19a8f0f1e5c46c0_prof);

    }

    public function getTemplateName()
    {
        return ":propietario:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 57,  126 => 55,  120 => 52,  114 => 49,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Propietario</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ propietario.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ propietario.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ propietario.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Apellido</th>*/
/*                 <td>{{ propietario.apellido }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Anuncio</th>*/
/*                 <td>{{ propietario.anuncio }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Telefono</th>*/
/*                 <td>{{ propietario.telefono }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Direccion</th>*/
/*                 <td>{{ propietario.direccion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cp</th>*/
/*                 <td>{{ propietario.cP }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Animal</th>*/
/*                 <td>{{ propietario.animal }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('propietario_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('propietario_edit', { 'id': propietario.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
