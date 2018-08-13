<?php

/* home2.html.twig */
class __TwigTemplate_29dab9250583d9b1ad8e12b85468327b3a6d3654a2abad6229e67670ffe28ec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("common3.html.twig", "home2.html.twig", 1);
        $this->blocks = array(
            'hright' => array($this, 'block_hright'),
            'nemu' => array($this, 'block_nemu'),
            'smenu' => array($this, 'block_smenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "common3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71cab930f9dea04a242ab8df8bfac47665c7215358566a5836c0d1f72f9162e8 = $this->env->getExtension("native_profiler");
        $__internal_71cab930f9dea04a242ab8df8bfac47665c7215358566a5836c0d1f72f9162e8->enter($__internal_71cab930f9dea04a242ab8df8bfac47665c7215358566a5836c0d1f72f9162e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71cab930f9dea04a242ab8df8bfac47665c7215358566a5836c0d1f72f9162e8->leave($__internal_71cab930f9dea04a242ab8df8bfac47665c7215358566a5836c0d1f72f9162e8_prof);

    }

    // line 2
    public function block_hright($context, array $blocks = array())
    {
        $__internal_5766e38db03d9e48dc1ced379a1de39bc873ed879411054923787a96596b5c9d = $this->env->getExtension("native_profiler");
        $__internal_5766e38db03d9e48dc1ced379a1de39bc873ed879411054923787a96596b5c9d->enter($__internal_5766e38db03d9e48dc1ced379a1de39bc873ed879411054923787a96596b5c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hright"));

        // line 3
        echo "\t";
        $this->loadTemplate("BoHomeBundle:Default:userinfo.html.twig", "home2.html.twig", 3)->display($context);
        
        $__internal_5766e38db03d9e48dc1ced379a1de39bc873ed879411054923787a96596b5c9d->leave($__internal_5766e38db03d9e48dc1ced379a1de39bc873ed879411054923787a96596b5c9d_prof);

    }

    // line 5
    public function block_nemu($context, array $blocks = array())
    {
        $__internal_c6a922657acb25f5f9bc94f74d6a5ac80fe2ba24dcdf39ff0104093e0b48d60f = $this->env->getExtension("native_profiler");
        $__internal_c6a922657acb25f5f9bc94f74d6a5ac80fe2ba24dcdf39ff0104093e0b48d60f->enter($__internal_c6a922657acb25f5f9bc94f74d6a5ac80fe2ba24dcdf39ff0104093e0b48d60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nemu"));

        // line 6
        echo "\t";
        $this->loadTemplate("BoHomeBundle:Default:pm.html.twig", "home2.html.twig", 6)->display($context);
        
        $__internal_c6a922657acb25f5f9bc94f74d6a5ac80fe2ba24dcdf39ff0104093e0b48d60f->leave($__internal_c6a922657acb25f5f9bc94f74d6a5ac80fe2ba24dcdf39ff0104093e0b48d60f_prof);

    }

    // line 8
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_0bb4b660cf06e635e14c55d4ae820801fd850a0b4c8240204f77003fe907f7e0 = $this->env->getExtension("native_profiler");
        $__internal_0bb4b660cf06e635e14c55d4ae820801fd850a0b4c8240204f77003fe907f7e0->enter($__internal_0bb4b660cf06e635e14c55d4ae820801fd850a0b4c8240204f77003fe907f7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        
        $__internal_0bb4b660cf06e635e14c55d4ae820801fd850a0b4c8240204f77003fe907f7e0->leave($__internal_0bb4b660cf06e635e14c55d4ae820801fd850a0b4c8240204f77003fe907f7e0_prof);

    }

    public function getTemplateName()
    {
        return "home2.html.twig";
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
/* {% extends 'common3.html.twig' %}*/
/* {% block hright%}*/
/* 	{%include "BoHomeBundle:Default:userinfo.html.twig"%}*/
/* {% endblock %}*/
/* {% block nemu %}*/
/* 	{%include "BoHomeBundle:Default:pm.html.twig"%}*/
/* {% endblock %}*/
/* {% block smenu %}*/
/* {% endblock %}	*/
/* */
/* */
