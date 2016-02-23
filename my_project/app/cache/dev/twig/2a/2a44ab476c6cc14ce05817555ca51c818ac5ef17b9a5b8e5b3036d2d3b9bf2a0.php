<?php

/* anuncios/show.html.twig */
class __TwigTemplate_970155b43205dfead4ef97fe9bf449ba8cc17740436b9746ebc4b87b6695db34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "anuncios/show.html.twig", 1);
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
        $__internal_b10c5a6fc8edb289da3886470e5ff5836fab278b70d33baadd4bf9d1310f1c04 = $this->env->getExtension("native_profiler");
        $__internal_b10c5a6fc8edb289da3886470e5ff5836fab278b70d33baadd4bf9d1310f1c04->enter($__internal_b10c5a6fc8edb289da3886470e5ff5836fab278b70d33baadd4bf9d1310f1c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anuncios/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b10c5a6fc8edb289da3886470e5ff5836fab278b70d33baadd4bf9d1310f1c04->leave($__internal_b10c5a6fc8edb289da3886470e5ff5836fab278b70d33baadd4bf9d1310f1c04_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff90c438170401086158effa8bb00fe055661f665cd4404488ccfa8d1ed36cfd = $this->env->getExtension("native_profiler");
        $__internal_ff90c438170401086158effa8bb00fe055661f665cd4404488ccfa8d1ed36cfd->enter($__internal_ff90c438170401086158effa8bb00fe055661f665cd4404488ccfa8d1ed36cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Anuncios</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["anuncio"]) ? $context["anuncio"] : $this->getContext($context, "anuncio")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titulo</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["anuncio"]) ? $context["anuncio"] : $this->getContext($context, "anuncio")), "titulo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categoria</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["anuncio"]) ? $context["anuncio"] : $this->getContext($context, "anuncio")), "categoria", array()), "html", null, true);
        echo "</td>
            </tr>

        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("anuncios_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anuncios_edit", array("id" => $this->getAttribute((isset($context["anuncio"]) ? $context["anuncio"] : $this->getContext($context, "anuncio")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ff90c438170401086158effa8bb00fe055661f665cd4404488ccfa8d1ed36cfd->leave($__internal_ff90c438170401086158effa8bb00fe055661f665cd4404488ccfa8d1ed36cfd_prof);

    }

    public function getTemplateName()
    {
        return "anuncios/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 34,  85 => 32,  79 => 29,  73 => 26,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Anuncios</h1>*/
/* */
/*     <table class="table">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ anuncio.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Titulo</th>*/
/*                 <td>{{ anuncio.titulo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Categoria</th>*/
/*                 <td>{{ anuncio.categoria }}</td>*/
/*             </tr>*/
/* */
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('anuncios_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('anuncios_edit', { 'id': anuncio.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
