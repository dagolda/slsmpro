<?php

/* home.html.twig */
class __TwigTemplate_9134fa2402bb9d7688d58b15bf6f81d02033c3fc17c34b09e418f8cd9d0bb2c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("common.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'hright' => array($this, 'block_hright'),
            'nemu' => array($this, 'block_nemu'),
            'smenu' => array($this, 'block_smenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ffb288eb0eec55de5bef5d8508504f1a9e9d213f8ff9bfbc88c27d20aedb5b2 = $this->env->getExtension("native_profiler");
        $__internal_1ffb288eb0eec55de5bef5d8508504f1a9e9d213f8ff9bfbc88c27d20aedb5b2->enter($__internal_1ffb288eb0eec55de5bef5d8508504f1a9e9d213f8ff9bfbc88c27d20aedb5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ffb288eb0eec55de5bef5d8508504f1a9e9d213f8ff9bfbc88c27d20aedb5b2->leave($__internal_1ffb288eb0eec55de5bef5d8508504f1a9e9d213f8ff9bfbc88c27d20aedb5b2_prof);

    }

    // line 2
    public function block_hright($context, array $blocks = array())
    {
        $__internal_1b3d94b2c9b8b3f2003e18a1b4d5d90aa333623081c88fd166c63ea58fbd12bf = $this->env->getExtension("native_profiler");
        $__internal_1b3d94b2c9b8b3f2003e18a1b4d5d90aa333623081c88fd166c63ea58fbd12bf->enter($__internal_1b3d94b2c9b8b3f2003e18a1b4d5d90aa333623081c88fd166c63ea58fbd12bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hright"));

        // line 3
        echo "\t";
        $this->loadTemplate("BoHomeBundle:Default:userinfo.html.twig", "home.html.twig", 3)->display($context);
        
        $__internal_1b3d94b2c9b8b3f2003e18a1b4d5d90aa333623081c88fd166c63ea58fbd12bf->leave($__internal_1b3d94b2c9b8b3f2003e18a1b4d5d90aa333623081c88fd166c63ea58fbd12bf_prof);

    }

    // line 5
    public function block_nemu($context, array $blocks = array())
    {
        $__internal_04afa7843d6ddef3384f682f2853b5a8ae92aee3ada731f936c696fc4a94f671 = $this->env->getExtension("native_profiler");
        $__internal_04afa7843d6ddef3384f682f2853b5a8ae92aee3ada731f936c696fc4a94f671->enter($__internal_04afa7843d6ddef3384f682f2853b5a8ae92aee3ada731f936c696fc4a94f671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nemu"));

        // line 6
        echo "\t";
        $this->loadTemplate("BoHomeBundle:Default:pm.html.twig", "home.html.twig", 6)->display($context);
        
        $__internal_04afa7843d6ddef3384f682f2853b5a8ae92aee3ada731f936c696fc4a94f671->leave($__internal_04afa7843d6ddef3384f682f2853b5a8ae92aee3ada731f936c696fc4a94f671_prof);

    }

    // line 8
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_53bea3fa715a4fe07e5c14302bc0086ff8cc68c3716d922b4156dbb3c8796141 = $this->env->getExtension("native_profiler");
        $__internal_53bea3fa715a4fe07e5c14302bc0086ff8cc68c3716d922b4156dbb3c8796141->enter($__internal_53bea3fa715a4fe07e5c14302bc0086ff8cc68c3716d922b4156dbb3c8796141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        
        $__internal_53bea3fa715a4fe07e5c14302bc0086ff8cc68c3716d922b4156dbb3c8796141->leave($__internal_53bea3fa715a4fe07e5c14302bc0086ff8cc68c3716d922b4156dbb3c8796141_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 8,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'common.html.twig' %}*/
/* {% block hright%}*/
/* 	{%include "BoHomeBundle:Default:userinfo.html.twig"%}*/
/* {% endblock %}*/
/* {% block nemu %}*/
/* 	{%include "BoHomeBundle:Default:pm.html.twig"%}*/
/* {% endblock %}*/
/* {% block smenu %}*/
/* {% endblock %}	*/
/* 						*/
/* */
/* */
