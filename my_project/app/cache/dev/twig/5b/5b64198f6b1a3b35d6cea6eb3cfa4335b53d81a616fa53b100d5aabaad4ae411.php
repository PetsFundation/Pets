<?php

/* ContactameBundle:Default:contenido_index.html.twig */
class __TwigTemplate_1d43377325decb3f0d636b0c6aa1e4770f1fe2963799faa9648708e67b313494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ContactameBundle:Default:index.html.twig", "ContactameBundle:Default:contenido_index.html.twig", 1);
        $this->blocks = array(
            'guide' => array($this, 'block_guide'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ContactameBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b7148988788cb2884720a69799096e06a6e53380a0c9e88e9a51e323fceded5 = $this->env->getExtension("native_profiler");
        $__internal_6b7148988788cb2884720a69799096e06a6e53380a0c9e88e9a51e323fceded5->enter($__internal_6b7148988788cb2884720a69799096e06a6e53380a0c9e88e9a51e323fceded5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContactameBundle:Default:contenido_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b7148988788cb2884720a69799096e06a6e53380a0c9e88e9a51e323fceded5->leave($__internal_6b7148988788cb2884720a69799096e06a6e53380a0c9e88e9a51e323fceded5_prof);

    }

    // line 3
    public function block_guide($context, array $blocks = array())
    {
        $__internal_cc5b56b8f9b04d0c3e020bac99e66b708eb7abc6f3f6043a26182a929fb6538d = $this->env->getExtension("native_profiler");
        $__internal_cc5b56b8f9b04d0c3e020bac99e66b708eb7abc6f3f6043a26182a929fb6538d->enter($__internal_cc5b56b8f9b04d0c3e020bac99e66b708eb7abc6f3f6043a26182a929fb6538d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guide"));

        // line 4
        echo "  <a href=\"";
        echo $this->env->getExtension('routing')->getPath("index_homepage");
        echo "\">Inicio</a> > <a href=\"#\">Contáctame</a>
";
        
        $__internal_cc5b56b8f9b04d0c3e020bac99e66b708eb7abc6f3f6043a26182a929fb6538d->leave($__internal_cc5b56b8f9b04d0c3e020bac99e66b708eb7abc6f3f6043a26182a929fb6538d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f254204468d56538094d1ca3c6b499517ec4b904e41b35544d6aa4f810c59832 = $this->env->getExtension("native_profiler");
        $__internal_f254204468d56538094d1ca3c6b499517ec4b904e41b35544d6aa4f810c59832->enter($__internal_f254204468d56538094d1ca3c6b499517ec4b904e41b35544d6aa4f810c59832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<font style=\"color: #00BCD4;font-weight: bold; font-size:23px;\">Contacto</font>
 <script type=\"text/javascript\" src=\"https://form.jotformeu.com/jsform/60525076893361\"></script>

";
        
        $__internal_f254204468d56538094d1ca3c6b499517ec4b904e41b35544d6aa4f810c59832->leave($__internal_f254204468d56538094d1ca3c6b499517ec4b904e41b35544d6aa4f810c59832_prof);

    }

    public function getTemplateName()
    {
        return "ContactameBundle:Default:contenido_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  51 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "ContactameBundle:Default:index.html.twig" %}*/
/* */
/* {% block guide %}*/
/*   <a href="{{ path("index_homepage") }}">Inicio</a> > <a href="#">Contáctame</a>*/
/* {% endblock guide %}*/
/* */
/* */
/* {% block body %}*/
/* <font style="color: #00BCD4;font-weight: bold; font-size:23px;">Contacto</font>*/
/*  <script type="text/javascript" src="https://form.jotformeu.com/jsform/60525076893361"></script>*/
/* */
/* {% endblock body %}*/
/*       */
