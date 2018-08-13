<?php

/* default/index.html.twig */
class __TwigTemplate_9c4c4b6cf2d46111451c4da637ee87726477b36ccd0e6367584baf72f0a6daad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6467382cb182d85568f695495174e12791b10792c2d88c231e971d193ec12828 = $this->env->getExtension("native_profiler");
        $__internal_6467382cb182d85568f695495174e12791b10792c2d88c231e971d193ec12828->enter($__internal_6467382cb182d85568f695495174e12791b10792c2d88c231e971d193ec12828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6467382cb182d85568f695495174e12791b10792c2d88c231e971d193ec12828->leave($__internal_6467382cb182d85568f695495174e12791b10792c2d88c231e971d193ec12828_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_ac4746bf6d462de01c9b8bea4867ac693dead4fb22a8e2f71833fa28ee186533 = $this->env->getExtension("native_profiler");
        $__internal_ac4746bf6d462de01c9b8bea4867ac693dead4fb22a8e2f71833fa28ee186533->enter($__internal_ac4746bf6d462de01c9b8bea4867ac693dead4fb22a8e2f71833fa28ee186533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tdb.html.twig", "default/index.html.twig", 2)->display($context);
        
        $__internal_ac4746bf6d462de01c9b8bea4867ac693dead4fb22a8e2f71833fa28ee186533->leave($__internal_ac4746bf6d462de01c9b8bea4867ac693dead4fb22a8e2f71833fa28ee186533_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_d9c277cc6472333ee95754e53a5c8ef38984917ed28482d5d2ce6d3a452db313 = $this->env->getExtension("native_profiler");
        $__internal_d9c277cc6472333ee95754e53a5c8ef38984917ed28482d5d2ce6d3a452db313->enter($__internal_d9c277cc6472333ee95754e53a5c8ef38984917ed28482d5d2ce6d3a452db313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
\t";
        // line 4
        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoAdminBundle:User:rightshow.html.twig", "default/index.html.twig", 4)->display($context);
        }
        echo "\t
";
        
        $__internal_d9c277cc6472333ee95754e53a5c8ef38984917ed28482d5d2ce6d3a452db313->leave($__internal_d9c277cc6472333ee95754e53a5c8ef38984917ed28482d5d2ce6d3a452db313_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_8914ceb3500b9da42020bb88cfaac2381b5d4af8376e0e4dc737bd22c341c4af = $this->env->getExtension("native_profiler");
        $__internal_8914ceb3500b9da42020bb88cfaac2381b5d4af8376e0e4dc737bd22c341c4af->enter($__internal_8914ceb3500b9da42020bb88cfaac2381b5d4af8376e0e4dc737bd22c341c4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>admin.default.home|trans()</h1>";
        
        $__internal_8914ceb3500b9da42020bb88cfaac2381b5d4af8376e0e4dc737bd22c341c4af->leave($__internal_8914ceb3500b9da42020bb88cfaac2381b5d4af8376e0e4dc737bd22c341c4af_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_749832d4cc9d9673891634bc48c59d464492bdc3e7eb9c03a2b17552abd6f558 = $this->env->getExtension("native_profiler");
        $__internal_749832d4cc9d9673891634bc48c59d464492bdc3e7eb9c03a2b17552abd6f558->enter($__internal_749832d4cc9d9673891634bc48c59d464492bdc3e7eb9c03a2b17552abd6f558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"container\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">Notification</div>
\t\t\t<div class=\"panel-body\">Panel Content</div>
\t\t</div>
\t</div>
";
        
        $__internal_749832d4cc9d9673891634bc48c59d464492bdc3e7eb9c03a2b17552abd6f558->leave($__internal_749832d4cc9d9673891634bc48c59d464492bdc3e7eb9c03a2b17552abd6f558_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 8,  80 => 7,  68 => 6,  57 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* 	{%if employee!=null%}{%include "BoAdminBundle:User:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>admin.default.home|trans()</h1>{% endblock %}	*/
/* {% block body %}*/
/* 	<div class="container">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">Notification</div>*/
/* 			<div class="panel-body">Panel Content</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
