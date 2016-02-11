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
        $__internal_80d1475e815b34f7a78ac99314116d9b0febb57618e65c13f701d65f1995e587 = $this->env->getExtension("native_profiler");
        $__internal_80d1475e815b34f7a78ac99314116d9b0febb57618e65c13f701d65f1995e587->enter($__internal_80d1475e815b34f7a78ac99314116d9b0febb57618e65c13f701d65f1995e587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anuncios/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80d1475e815b34f7a78ac99314116d9b0febb57618e65c13f701d65f1995e587->leave($__internal_80d1475e815b34f7a78ac99314116d9b0febb57618e65c13f701d65f1995e587_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07e8e5a60049490ba83cb17fdb4475d4b32858914000fd4059eca0d498095baa = $this->env->getExtension("native_profiler");
        $__internal_07e8e5a60049490ba83cb17fdb4475d4b32858914000fd4059eca0d498095baa->enter($__internal_07e8e5a60049490ba83cb17fdb4475d4b32858914000fd4059eca0d498095baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Anuncios list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Idanimal</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anuncios"]) ? $context["anuncios"] : $this->getContext($context, "anuncios")));
        foreach ($context['_seq'] as $context["_key"] => $context["anuncio"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anuncios_show", array("id" => $this->getAttribute($context["anuncio"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "titulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "categoria", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["anuncio"], "idAnimal", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anuncios_show", array("id" => $this->getAttribute($context["anuncio"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
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
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("anuncios_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_07e8e5a60049490ba83cb17fdb4475d4b32858914000fd4059eca0d498095baa->leave($__internal_07e8e5a60049490ba83cb17fdb4475d4b32858914000fd4059eca0d498095baa_prof);

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
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Anuncios list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Titulo</th>*/
/*                 <th>Categoria</th>*/
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
/*                 <td>{{ anuncio.idAnimal }}</td>*/
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
