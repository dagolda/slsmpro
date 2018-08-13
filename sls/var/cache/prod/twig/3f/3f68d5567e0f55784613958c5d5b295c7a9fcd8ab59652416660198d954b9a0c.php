<?php

/* student.html.twig */
class __TwigTemplate_ad7ee4d85dad78c83579661a159e72034f6369017a397325d2d9c59f149abef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("common.html.twig", "student.html.twig", 1);
        $this->blocks = array(
            'hright' => array($this, 'block_hright'),
            'nemu' => array($this, 'block_nemu'),
            'smenu' => array($this, 'block_smenu'),
            'right' => array($this, 'block_right'),
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_202c3a9db8964b7a6a395698a54b8e74adffa1b6f678d55ebae652ef6801679c = $this->env->getExtension("native_profiler");
        $__internal_202c3a9db8964b7a6a395698a54b8e74adffa1b6f678d55ebae652ef6801679c->enter($__internal_202c3a9db8964b7a6a395698a54b8e74adffa1b6f678d55ebae652ef6801679c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_202c3a9db8964b7a6a395698a54b8e74adffa1b6f678d55ebae652ef6801679c->leave($__internal_202c3a9db8964b7a6a395698a54b8e74adffa1b6f678d55ebae652ef6801679c_prof);

    }

    // line 2
    public function block_hright($context, array $blocks = array())
    {
        $__internal_abcb59aa651c3646f3a33474b2a3b05bee8bf42ba4eb7de1969b5e16b58acaa6 = $this->env->getExtension("native_profiler");
        $__internal_abcb59aa651c3646f3a33474b2a3b05bee8bf42ba4eb7de1969b5e16b58acaa6->enter($__internal_abcb59aa651c3646f3a33474b2a3b05bee8bf42ba4eb7de1969b5e16b58acaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hright"));

        // line 3
        echo "\t";
        $this->loadTemplate("BoStudentBundle:Default:userinfo.html.twig", "student.html.twig", 3)->display($context);
        
        $__internal_abcb59aa651c3646f3a33474b2a3b05bee8bf42ba4eb7de1969b5e16b58acaa6->leave($__internal_abcb59aa651c3646f3a33474b2a3b05bee8bf42ba4eb7de1969b5e16b58acaa6_prof);

    }

    // line 5
    public function block_nemu($context, array $blocks = array())
    {
        $__internal_39c91ad4851d5b4b9f5d6fbb7b463a3a5ea3cba37550875496fab43b349e15da = $this->env->getExtension("native_profiler");
        $__internal_39c91ad4851d5b4b9f5d6fbb7b463a3a5ea3cba37550875496fab43b349e15da->enter($__internal_39c91ad4851d5b4b9f5d6fbb7b463a3a5ea3cba37550875496fab43b349e15da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nemu"));

        // line 6
        echo "\t";
        $this->loadTemplate("BoStudentBundle:Default:pm.html.twig", "student.html.twig", 6)->display($context);
        
        $__internal_39c91ad4851d5b4b9f5d6fbb7b463a3a5ea3cba37550875496fab43b349e15da->leave($__internal_39c91ad4851d5b4b9f5d6fbb7b463a3a5ea3cba37550875496fab43b349e15da_prof);

    }

    // line 8
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_3e73d28bc394e4e2da013b36c86198e6d11b460f05b8c53cb4bc4462691e03a4 = $this->env->getExtension("native_profiler");
        $__internal_3e73d28bc394e4e2da013b36c86198e6d11b460f05b8c53cb4bc4462691e03a4->enter($__internal_3e73d28bc394e4e2da013b36c86198e6d11b460f05b8c53cb4bc4462691e03a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        
        $__internal_3e73d28bc394e4e2da013b36c86198e6d11b460f05b8c53cb4bc4462691e03a4->leave($__internal_3e73d28bc394e4e2da013b36c86198e6d11b460f05b8c53cb4bc4462691e03a4_prof);

    }

    // line 10
    public function block_right($context, array $blocks = array())
    {
        $__internal_799f1229ba0f94ca76251773aa4bac9f5989ee930475bb1a327342aa50f95bf4 = $this->env->getExtension("native_profiler");
        $__internal_799f1229ba0f94ca76251773aa4bac9f5989ee930475bb1a327342aa50f95bf4->enter($__internal_799f1229ba0f94ca76251773aa4bac9f5989ee930475bb1a327342aa50f95bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 11
        echo "\t<div class=\"col-sm-2 sidenav\">
\t\t<div class=\"well\">
\t\t\t";
        // line 13
        $this->displayBlock('nav', $context, $blocks);
        echo "\t\t\t\t\t\t\t
\t\t</div>
\t\t<!--div class=\"well\">
\t\t\t";
        // line 16
        $this->loadTemplate("BoAdminBundle:Default:slogan.html.twig", "student.html.twig", 16)->display($context);
        echo "\t\t\t\t\t\t
\t\t</div-->
\t</div>
";
        
        $__internal_799f1229ba0f94ca76251773aa4bac9f5989ee930475bb1a327342aa50f95bf4->leave($__internal_799f1229ba0f94ca76251773aa4bac9f5989ee930475bb1a327342aa50f95bf4_prof);

    }

    // line 13
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a9191f04fe4ed35e3180b7c25ff0282c4c67081d5083d1aff3c639eafabea688 = $this->env->getExtension("native_profiler");
        $__internal_a9191f04fe4ed35e3180b7c25ff0282c4c67081d5083d1aff3c639eafabea688->enter($__internal_a9191f04fe4ed35e3180b7c25ff0282c4c67081d5083d1aff3c639eafabea688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_a9191f04fe4ed35e3180b7c25ff0282c4c67081d5083d1aff3c639eafabea688->leave($__internal_a9191f04fe4ed35e3180b7c25ff0282c4c67081d5083d1aff3c639eafabea688_prof);

    }

    public function getTemplateName()
    {
        return "student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 13,  93 => 16,  87 => 13,  83 => 11,  77 => 10,  66 => 8,  58 => 6,  52 => 5,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'common.html.twig' %}*/
/* {% block hright%}*/
/* 	{%include "BoStudentBundle:Default:userinfo.html.twig"%}*/
/* {% endblock %}*/
/* {% block nemu %}*/
/* 	{%include "BoStudentBundle:Default:pm.html.twig"%}*/
/* {% endblock %}*/
/* {% block smenu %}*/
/* {% endblock %}	*/
/* {% block right %}*/
/* 	<div class="col-sm-2 sidenav">*/
/* 		<div class="well">*/
/* 			{% block nav %}{% endblock %}							*/
/* 		</div>*/
/* 		<!--div class="well">*/
/* 			{%include "BoAdminBundle:Default:slogan.html.twig"%}						*/
/* 		</div-->*/
/* 	</div>*/
/* {% endblock %}							*/
/* */
/* */
