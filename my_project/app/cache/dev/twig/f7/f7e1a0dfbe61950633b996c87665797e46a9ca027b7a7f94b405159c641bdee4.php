<?php

/* anuncios/index.html.twig */
class __TwigTemplate_e7e0f774e5be4090c7f47d37425fd6fa0e3dcd9f95f8a99eb81c0e8d28dfe187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "anuncios/index.html.twig", 1);
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
        $__internal_010d0325c4580d55a108885dec8c3aa7ce09889d9a3536fd4092ba58b3443629 = $this->env->getExtension("native_profiler");
        $__internal_010d0325c4580d55a108885dec8c3aa7ce09889d9a3536fd4092ba58b3443629->enter($__internal_010d0325c4580d55a108885dec8c3aa7ce09889d9a3536fd4092ba58b3443629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anuncios/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_010d0325c4580d55a108885dec8c3aa7ce09889d9a3536fd4092ba58b3443629->leave($__internal_010d0325c4580d55a108885dec8c3aa7ce09889d9a3536fd4092ba58b3443629_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39d786592e366e6dde08ba3de3abc586cf2773110b3998e9da4244ff1644000b = $this->env->getExtension("native_profiler");
        $__internal_39d786592e366e6dde08ba3de3abc586cf2773110b3998e9da4244ff1644000b->enter($__internal_39d786592e366e6dde08ba3de3abc586cf2773110b3998e9da4244ff1644000b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Anuncios list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Idpropietario</th>
                <th>Idanimal</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anuncios"]) ? $context["anuncios"] : $this->getContext($context, "anuncios")));
        foreach ($context['_seq'] as $context["_key"] => $context["anuncio"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anuncios_show", array("id" => $this->getAttribute($context["anuncio"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "titulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "categoria", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "user", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["anuncio"], "animal", array()), "id", array()), "html", null, true);
            echo "</td>
                <td></td>
                
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anuncios_show", array("id" => $this->getAttribute($context["anuncio"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anuncios_edit", array("id" => $this->getAttribute($context["anuncio"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anuncio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("anuncios_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_39d786592e366e6dde08ba3de3abc586cf2773110b3998e9da4244ff1644000b->leave($__internal_39d786592e366e6dde08ba3de3abc586cf2773110b3998e9da4244ff1644000b_prof);

    }

    public function getTemplateName()
    {
        return "anuncios/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 44,  108 => 39,  96 => 33,  90 => 30,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Anuncios list</h1>*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Titulo</th>*/
/*                 <th>Categoria</th>*/
/*                 <th>Idpropietario</th>*/
/*                 <th>Idanimal</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for anuncio in anuncios %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('anuncios_show', { 'id': anuncio.id }) }}">{{ anuncio.id }}</a></td>*/
/*                 <td>{{ anuncio.titulo }}</td>*/
/*                 <td>{{ anuncio.categoria }}</td>*/
/*                 <td>{{ anuncio.user }}</td>*/
/*                 <td>{{ anuncio.animal.id }}</td>*/
/*                 <td></td>*/
/*                 */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('anuncios_show', { 'id': anuncio.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('anuncios_edit', { 'id': anuncio.id }) }}">edit</a>*/
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
/*             <a href="{{ path('anuncios_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
